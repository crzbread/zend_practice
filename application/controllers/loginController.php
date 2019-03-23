<?php

require_once APPLICATION_PATH . "/models/userdata.php";

class loginController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()   //首頁
    {
        $this->render('index');
    }
    
    public function loginAction()   //登入
    {
        $this->render('login');
    }
    
    public function signAction()    //註冊
    {
        $this->render('sign');
    }

    public function savedataAction()   //註冊儲存資料
    {
        
        $username = $this->getRequest()->getParam('username');
        $password = $this->getRequest()->getParam('password');
        
        $data = array(
            'username' => $username,
            'passwords' => $password
        );
        $userdataModel = new userdata();

        // todo 檢查是否有重複資料

        $userdataModel->insert($data);
        echo "ok";
        $this->render('index');
        // exit();
        // $this->render('sign');
    }
    public function checkdataAction()   //登入確認資料
    {
        // 取得資料
        $username = $this->getRequest()->getParam('username');
        $password = $this->getRequest()->getParam('password');
        
        $aa = new userdata();
        
        $where = "username='$username' AND passwords = '$password'";
        
        $row = $aa->fetchAll($where)->toArray();
        
        if (count($row) > 0) {
            session_start();
            $_SESSION['username'] = $username;
        }
        else {
            echo "no";
        }
        
        $this->render('welcome');
        
    }


}

