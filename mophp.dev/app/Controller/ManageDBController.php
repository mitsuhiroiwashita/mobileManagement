<?php

//以下の記述を行うことで追加したモデル名を自動補完してくれる。
/**
 * @property Device $Device
 * @property AddDevice $AddDevice
 * @property Confirm $Confirm
 */

class ManageDBController extends AppController{
    public $helpers = array('Form', 'Html');
    //使用するモデルを配列で宣言する（この場合モデルは”Device.php”と”AddDevice.php”を指す）。
    public $uses = array('Device', 'AddDevice');

    private $backparam = false;

    public function index(){
            $this->set('devices', $this->Device->find('all'));
    }

    public function add(){
        Debugger::dump($this->backparam);
        //exit;
        if($this->backparam == true){
            //なぜか条件が通らない。
                Debugger::dump("hoge");
                exit;
                $this->request->data['AddDevice'] = $this->Session->read('InputData.AddDevice');
                /*
                $founddoc = $this->Device->find('first', array('conditions' => array('Device.id' => $id)));
                //Debugger::dump($founddoc);
                $this->request->data['AddDevice'] = $founddoc['Device'];
                */
        }
        if(!$this->request->is("get")){
            if(!empty($this->request->data)){
                //Validatesチェック
                $this->AddDevice->set($this->request->data);
                if($this->AddDevice->validates()){
                    $this->Session->write('InputData', $this->data);
                    $this->redirect(array('action' => 'confirm'));
                }
            }
        }
    }
    public function confirm(){
        if(isset($this->params['data']['submit'])){
            $SaveDeviceData = $this->Session->read('InputData.AddDevice');
            $this->Device->save($SaveDeviceData);
            $this->redirect(array('action'=>'index'));
        }elseif(isset($this->params['data']['cancel'])){
            $this->backparam = true;
            $this->redirect(array('action'=>'add'));
        }
    }

    public function detail($id = null){
        if(!$id){
            throw new NotFoundException(__('Invalid post'));
        }

        $device = $this->Device->findById($id);
        if(!$device){
            throw new NotFoundException(__('Invalid post'));
        }
        $this->set('device', $device);
    }

    public function edit($id = null){
        if(!$id){
            throw new NotFoundException(__('Invalid post'));
        }
        $post = $this->Device->findById($id);
        if(!'post'){
            throw new NotFoundException(__('Invalid post'));
        }

        if($this->request->is('post') || $this->request->is('put')){
            $this->AddDevice->set($this->request->data);
            if($this->AddDevice->validates()){
                $this->Device->id = $id;
                $this->request->data['AddDevice']['id'] = $id;
                //Debugger::dump($id);
                //Debugger::dump($this->request->data);

                if($this->Device->save($this->request->data['AddDevice'])){
                    $this->Session->setFlash('Your post has been updated');
                    $this->redirect(array('action'=>'index'));
                }else{
                    $this->Session->setFlash('Unable to update your post.');
                    $this->redirect(array('action'=>'index'));
                }
            }
        }else{
            //元の入力データをフォームに記載する。
            $founddoc = $this->Device->find('first', array('conditions' => array('Device.id' => $id)));
            //Debugger::dump($founddoc);
            $this->request->data['AddDevice'] = $founddoc['Device'];
        }
        if(!$this->request->data){
            $this->request->data = $post;
        }
    }

    public function logout(){
        $this->Session->delete(SessionValidatesComponent::CURRENT_USERID_KEY_NAME);
        $this->redirect('/Auth/index');
    }

    public function delete($id){
        if($this->request->is('get')){
            throw new MethodNotAllowedException();
        }elseif($this->Device->delete($id)){
            $this->Session->setFlash('The post with id:'.$id.'has been deleted.');
            $this->redirect(array('action' => 'index'));
        }
    }
}