<?php

class AddDevice extends AppModel{
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
        'DeviceName' => array(
            'rule' => 'notEmpty'
        ),

        'BuyDate' => array(
                'rule' => 'notEmpty'
        ),
/*
        'OS' => array(
            'This Form forbid empty.' => array(
                'rule' => 'notEmpty',
            ),
            'This Form should have at least 8 chars' => array(
                'rule' => array('minLength', 8)
            )
        ),

        'IncludeSIM' => array(
            'This Form forbid empty.' => array(
                'rule' => 'notEmpty',
            ),
            'This Form should have at least 8 chars' => array(
                'rule' => array('minLength', 8)
            )
        ),*/

        'OSUniqueID' => array(
            'This Form forbid empty.i' => array(
                'rule' => 'notEmpty',
            ),
            'This Form should have at least 8 chars' => array(
                'rule' => array('minLength', 8)
            )
        ),

        'OSUniquePass' => array(
            'This Form forbid empty.' => array(
                'rule' => 'notEmpty',
            ),
            'This Form should have at least 8 chars' => array(
                'rule' => array('minLength', 8)
            )
        ),

        'DeviceURL' => array(
            'This Form forbid empty.' => array(
                'rule' => 'notEmpty',
            ),
            'This Form should have at least 8 chars' => array(
                'rule' => array('minLength', 8)
            )
        ),

        'DevicePics' => array(
            'This Form forbid empty.' => array(
                'rule' => 'notEmpty',
            ),
            'This Form should have at least 8 chars' => array(
                'rule' => array('minLength', 8)
            )
        ),

        'DeviceMemo' => array(
            'This Form forbid empty.' => array(
                'rule' => 'notEmpty',
            ),
            'This Form should have at least 8 chars' => array(
                'rule' => array('minLength', 8)
            )
        )
    );
}