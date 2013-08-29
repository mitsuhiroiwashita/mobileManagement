<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
App::uses('Controller', 'Controller');
//App::uses('SessionValidates', 'Component');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 * @property    SessionComponent $Session
 */
class AppController extends Controller {
    public $components = array('Session', 'Security', 'SessionValidates');

    public function beforeFilter(){
        parent::beforeFilter();
        //$this->Security->validatePost = false;
        //Debugger::dump("huge".$this->name.$this->request->params['action']);
        //if($this->name != 'Auth' && $this->name != 'CakeError'){
        if($this->name != 'Auth'){
            $this->SessionValidates->sessionCheck(SessionValidatesComponent::CURRENT_USERID_KEY_NAME);
        }
    }
}
