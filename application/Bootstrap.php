<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
    
    function __construct($application) {
        // 讀取config 有問題
        parent::__construct($application);
        $url = constant("APPLICATION_PATH") . DIRECTORY_SEPARATOR . "configs" . DIRECTORY_SEPARATOR. "application.ini" ;
        // echo "urls  " .  $url . "<br/>" ;
        $db_config = new Zend_Config_Ini($url,"mysql");
        $db = Zend_Db::factory($db_config->db);
        $db->query('SET NAMES UTF8');
        Zend_Db_Table::setDefaultAdapter($db);  // 傳入Zend db 
    }
}
