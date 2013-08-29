<?php
//$usesで使いたいモデルを指定する。
App::uses('AppController','Controller');

/**
 * @property LoginForm $LoginForm
 * @property User $User
 */

class AuthController extends AppController{
    //public $helper = array('Html', 'Form', 'Time', 'Link');
    //$usesで使いたいモデルを指定する（この場合’LoginForm’と’User’を使う）。
    public $uses = array('LoginForm', 'User');

    public function index(){
        //'post'ではなく'get'じゃないと上手くいかない（Cakeのバグぽい）。
        if(!$this->request->is('get')){
            //ModelのValidateTestクラスに入力されたUserIDとパスワードなどのパラメータをセットする。
            $this->LoginForm->set($this->data);
            //パラメータがセットされたValidateクラスをvalidatesメソッドに渡して検証する。
            if($this->LoginForm->validates()){
                //$conditionsは、次のif文をシンプルに書くために用意した変数
                $conditions = array(
                    "User.Userid" => $this->data["LoginForm"]["id"],
                    "User.Password" => hash("sha256", $this->data["LoginForm"]["password"])
                );

                if($this->User->find('first', array("conditions" => $conditions))){
                    //$this->Session->write("currentUserId", $this->data["id"]);
                    $this->Session->write(SessionValidatesComponent::CURRENT_USERID_KEY_NAME, $this->data['LoginForm']['id']);
                    $this->Session->renew();
                    $this->redirect('/ManageDB/index/');
                }else{
                    $this->set('error_message', "ユーザ名かパスワードが間違っています。" );
                }
            }
        }
    }
}