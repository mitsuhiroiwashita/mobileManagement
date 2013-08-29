<?php

class LoginForm extends AppModel{
    //DBのテーブルを使わない場合$useTableをオフにする。
    public $useTable = false;

    /*
    public $_schema = array(
        'id' => array(
            'type' => 'string',
            'length' => '8'
        ),
        'password' => array(
            'type' => 'string',
            'length' => '8'
        )
    );
    */

    public $validate = array(
        'id' => array(
            'This Form forbid not empty.' => array(
                'rule' => 'notEmpty'
            ),
            'This Form length should be at least 8 chars.'=> array(
                'rule' => array('minLength', 8)
            )
        ),
        'password' => array(
            'This Form forbid not empty.' => array(
                'rule' => 'notEmpty',
            ),
            'This Form length should be at least 8 chars.' => array(
                'rule' => array('minLength', 8)
            )
        )
    );
}