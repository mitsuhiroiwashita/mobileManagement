<h1>Device Management System</h1>

<?php
/**
 * @var $this View
 */
echo $this->Form->create("LoginForm");
echo $this->Form->input("id");
//echo $this->Form->label("Password");
echo $this->Form->input("password", array('type'=>'password'));
//'__関数名'と入力すると国際化に対応する。なくても良いと思われる。
echo $this->Form->end(__("Submit"));

if(isset($error_message)){
    echo $error_message;
}
