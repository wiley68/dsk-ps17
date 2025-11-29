<?php
class DskpaymentGetorderstatusesModuleFrontController extends ModuleFrontController {
    public $result = array();
    
    public function initContent()
    {
        $this->ajax = true;
        $this->result['status'] = '';
        $dskapi_orderdata_all = '';
        
        if (file_exists(_PS_MODULE_DIR_ . 'dskpayment/keys/dskapiorders.json')) {
            $orderdata = file_get_contents(_PS_MODULE_DIR_ . 'dskpayment/keys/dskapiorders.json');
            $dskapi_orderdata_all = json_decode($orderdata, true);
        }
        $this->result['status'] = $dskapi_orderdata_all;
        
        parent::initContent();
    }
    
    public function initHeader(){
        header('Access-Control-Allow-Origin: *');
        return parent::initHeader();
    }
    
    public function displayAjax()
    {
        die(Tools::jsonEncode($this->result));
    }
}