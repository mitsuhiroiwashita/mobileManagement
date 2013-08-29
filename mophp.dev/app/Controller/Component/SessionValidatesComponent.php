<?php

/**
 * Class SessionValidates
 */
App::uses('Component', 'Controller');

class SessionValidatesComponent extends Component{

    /**
     * @var Controller
     */

    //フィールドを定義する。
    private $controller;
    const CURRENT_USERID_KEY_NAME = 'currentUserId.saved';

    //beforeFilterを使う前にcontrollerのインスタンスを生成する。
    //コントローラのアクションを呼び出すための準備
	public function initialize(Controller $controller) {
        $this->controller = $controller;
	}

    public function sessionCheck($receivedKey){
        if(!$this->controller->Session->read($receivedKey)){
        //if(($this->controller->Session->read($receivedKey)) == null){
            $this->controller->redirect('/Auth/index');
        }
    }
}
