let old_vnoski_checkout;

function createCORSRequest(method, url) {
    var xhr = new XMLHttpRequest();
    if ('withCredentials' in xhr) {
        xhr.open(method, url, true);
    } else if (typeof XDomainRequest != 'undefined') {
        xhr = new XDomainRequest();
        xhr.open(method, url);
    } else {
        xhr = null;
    }
    return xhr;
}

function dskapi_checkout_pogasitelni_vnoski_input_focus(_old_vnoski) {
    old_vnoski_checkout = _old_vnoski;
}

function dskapi_checkout_pogasitelni_vnoski_input_change() {
    const dskapi_vnoski_input = document.getElementById('dskapi_checkout_pogasitelni_vnoski_input');
    if (!dskapi_vnoski_input) {
        return;
    }

    const dskapi_vnoski = parseFloat(dskapi_vnoski_input.value);

    // Първо опитваме да вземем цената от dskapi_checkout_price_txt, ако не съществува - от dskapi_checkout_price
    let dskapi_price_el = document.getElementById('dskapi_checkout_price_txt');
    let dskapi_price = dskapi_price_el ? parseFloat(dskapi_price_el.value) : null;

    if (!dskapi_price || isNaN(dskapi_price)) {
        const dskapi_price_hidden = document.getElementById('dskapi_checkout_price');
        if (dskapi_price_hidden) {
            dskapi_price = parseFloat(dskapi_price_hidden.value);
        }
    }

    if (!dskapi_price || isNaN(dskapi_price)) {
        return;
    }

    const dskapi_cid = document.getElementById('dskapi_checkout_cid');
    const DSKAPI_LIVEURL = document.getElementById('dskapi_checkout_DSKAPI_LIVEURL');
    const dskapi_product_id = document.getElementById('dskapi_checkout_product_id');

    if (!dskapi_cid || !DSKAPI_LIVEURL || !dskapi_product_id) {
        return;
    }

    var xmlhttpro = createCORSRequest(
        'GET',
        DSKAPI_LIVEURL.value +
        '/function/getproductcustom.php?cid=' +
        dskapi_cid.value +
        '&price=' +
        dskapi_price +
        '&product_id=' +
        dskapi_product_id.value +
        '&dskapi_vnoski=' +
        dskapi_vnoski
    );

    if (!xmlhttpro) {
        return;
    }

    xmlhttpro.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            try {
                var response = JSON.parse(this.response);
                var options = response.dsk_options;
                var dsk_vnoska = parseFloat(response.dsk_vnoska);
                var dsk_gpr = parseFloat(response.dsk_gpr);
                var dsk_is_visible = response.dsk_is_visible;

                if (dsk_is_visible) {
                    if (options) {
                        const dskapi_vnoska_input = document.getElementById('dskapi_checkout_vnoska');
                        const dskapi_gpr = document.getElementById('dskapi_checkout_gpr');
                        const dskapi_obshtozaplashtane_input = document.getElementById(
                            'dskapi_checkout_obshtozaplashtane'
                        );
                        if (dskapi_vnoska_input) {
                            dskapi_vnoska_input.value = dsk_vnoska.toFixed(2);
                        }
                        if (dskapi_gpr) {
                            dskapi_gpr.value = dsk_gpr.toFixed(2);
                        }
                        if (dskapi_obshtozaplashtane_input) {
                            dskapi_obshtozaplashtane_input.value = (
                                dsk_vnoska * dskapi_vnoski
                            ).toFixed(2);
                        }
                        old_vnoski_checkout = dskapi_vnoski;
                    } else {
                        alert('Избраният брой погасителни вноски е под минималния.');
                        dskapi_vnoski_input.value = old_vnoski_checkout;
                    }
                } else {
                    alert('Избраният брой погасителни вноски е над максималния.');
                    dskapi_vnoski_input.value = old_vnoski_checkout;
                }
            } catch (e) {
                console.error('DSK API Error:', e);
            }
        }
    };
    xmlhttpro.send();
}

jQuery(document).ready(function ($) {
    // Функция за четене на cookie
    const getCookie = function (name) {
        const nameEQ = name + '=';
        const ca = document.cookie.split(';');
        for (let i = 0; i < ca.length; i++) {
            let c = ca[i];
            while (c.charAt(0) === ' ') c = c.substring(1, c.length);
            if (c.indexOf(nameEQ) === 0) return c.substring(nameEQ.length, c.length);
        }
        return null;
    };

    // Функция за изтриване на cookie
    const deleteCookie = function (name) {
        document.cookie = name + '=;expires=Thu, 01 Jan 1970 00:00:00 UTC;path=/;';
    };

    // Функция за обработка на избора на платежен метод
    const handlePaymentSelection = function (isDskPayment, event) {
        if (isDskPayment) {
            if (event) {
                event.stopImmediatePropagation();
            }
            $('form#conditions-to-approve').hide();
            $('div#payment-confirmation').removeClass('js-payment-confirmation');
            $('div#payment-confirmation').hide();
        } else {
            // Ако потребителят избере друг платежен метод, изтриваме cookie-то
            deleteCookie('dskpayment_selected');
            $('form#conditions-to-approve').show();
            $('div#payment-confirmation').addClass('js-payment-confirmation');
            $('div#payment-confirmation').show();
        }
    };

    // Автоматично избиране на платежния метод, ако е зададено в cookie
    // PrestaShop 1.7.x използва различни селектори за payment options
    // Опитваме се да намерим radio бутона по различни начини за съвместимост
    const findDskPaymentRadio = function () {
        // Първо опитваме с data-module-name (PS 8.x стил)
        let radio = $('input[type="radio"][name="payment-option"][data-module-name="dskpayment"]');
        if (radio.length > 0) {
            return radio;
        }
        // Fallback за PS 1.7.x - опитваме по id или value
        radio = $('input[type="radio"][name="payment-option"][value*="dskpayment"]');
        if (radio.length > 0) {
            return radio;
        }
        // Друг fallback - опитваме по id
        radio = $('#payment-option-' + $('[data-module-name="dskpayment"]').closest('.payment-option').attr('id'));
        return radio;
    };

    const dskPaymentRadio = findDskPaymentRadio();
    const dskPaymentSelected = getCookie('dskpayment_selected') === '1';

    // Проверяваме дали платежният метод вече е избран
    const isAlreadySelected =
        dskPaymentRadio.length > 0 && dskPaymentRadio.is(':checked');

    if (dskPaymentSelected && !isAlreadySelected && dskPaymentRadio.length > 0) {
        // Избираме платежния метод само ако не е вече избран
        dskPaymentRadio.prop('checked', true);

        // Изчакваме малко за да се уверя, че DOM и PrestaShop са готови
        setTimeout(function () {
            // Задействаме оригиналното събитие на PrestaShop за показване на съдържанието
            dskPaymentRadio.trigger('change');

            // Извикваме директно функцията за показване/скриване на данните
            handlePaymentSelection(true, null);
        }, 200);
    }

    // Слушаме за click събития на payment options
    // PrestaShop 1.7.x използва различни селектори
    $(document.body).on(
        'click',
        'input[type="radio"][name="payment-option"]',
        function (event) {
            const $radio = $(this);
            // Проверяваме по data-module-name или value
            const isDskPayment = $radio.attr('data-module-name') === 'dskpayment' ||
                $radio.val().indexOf('dskpayment') !== -1 ||
                $radio.closest('[data-module-name="dskpayment"]').length > 0;
            handlePaymentSelection(isDskPayment, event);
        }
    );

    // Слушаме и за change събитието, за да работи с PrestaShop логиката
    $(document.body).on(
        'change',
        'input[type="radio"][name="payment-option"]',
        function (event) {
            const $radio = $(this);
            // Проверяваме по data-module-name или value
            const isDskPayment = $radio.attr('data-module-name') === 'dskpayment' ||
                $radio.val().indexOf('dskpayment') !== -1 ||
                $radio.closest('[data-module-name="dskpayment"]').length > 0;
            if (isDskPayment) {
                handlePaymentSelection(true, event);
            }
        }
    );

    // Инициализация на попъпа за лихвени схеми
    const initCheckoutPopup = function () {
        const interestRatesLink = $('#dskapi_checkout_interest_rates_link');
        const popupContainer = $('#dskapi-checkout-popup-container');
        const closePopupBtn = $('#dskapi_checkout_close_popup');

        if (interestRatesLink.length && popupContainer.length) {
            // Отваряне на попъпа при кликване на линка
            interestRatesLink.off('click').on('click', function (event) {
                event.preventDefault();
                event.stopPropagation();

                popupContainer.show();
                // Извикваме функцията за изчисляване на вноските при отваряне
                const vnoskiInput = $('#dskapi_checkout_pogasitelni_vnoski_input');
                if (vnoskiInput.length) {
                    dskapi_checkout_pogasitelni_vnoski_input_change();
                }
                return false;
            });

            // Затваряне на попъпа при кликване на бутона "Затвори"
            if (closePopupBtn.length) {
                closePopupBtn.off('click').on('click', function (event) {
                    event.preventDefault();
                    event.stopPropagation();

                    popupContainer.hide();
                    return false;
                });
            }

            // Затваряне на попъпа при кликване извън него
            popupContainer.off('click').on('click', function (event) {
                if ($(event.target).is(popupContainer)) {
                    popupContainer.hide();
                }
            });
        }
    };

    // Инициализираме попъпа веднъж при зареждане
    initCheckoutPopup();

    // Опитваме се да инициализираме и след пълно зареждане на страницата (за динамично заредени елементи)
    $(window).on('load', function () {
        setTimeout(initCheckoutPopup, 300);
    });

    // Слушаме за PrestaShop събития за реинициализация при промяна на checkout
    $(document).on('updatedDeliveryStep', initCheckoutPopup);
    $(document).on('updatedPaymentStep', initCheckoutPopup);
});
