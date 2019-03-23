<?php

// 引用models
require_once APPLICATION_PATH."/models/message.php";



class TestController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function testAction()
    {
        echo "gogo";
        $aa = new message();
        $sql = "SELECT * FROM message";
        $result = $aa->fetchAll()->toArray();
        // print_r($result);
        $this->view->res = $result;  // 分配給view
        $this->render('test');
    }

    public function indexAction()
    {
        // action body
        $this->render('index');
    }


}

