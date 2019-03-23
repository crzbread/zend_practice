<?php 

/**
 * 這個類 和資料庫的某張表對應
 * crud操作
 */
// echo "user ok ";
// exit();

/**
 * 
 */
// Zend_Db_Table_Abstract
class message extends Zend_Db_Table
{
    protected $_name ="message";
    protected $_primary = 'id';
      
}


?>