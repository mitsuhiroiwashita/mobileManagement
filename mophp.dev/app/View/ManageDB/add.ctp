<table>
</table>

<h1>Add New Device</h1>
<?php
/**
 * @var $this View
 */
echo $this->Form->create('AddDevice');
echo $this->Form->input('DeviceName');
echo $this->Form->input("Carrier", array('type'=>'select', 'options' => array('Docomo'=>'Docomo', 'au'=>'au', 'Softbank'=>'Softbank')));
echo $this->Form->input('BuyDate');
echo $this->Form->input("OS", array('type'=>'select', 'options' => array('AndroidOS'=>'AndroidOS', 'iOS'=>'iOS')));
echo $this->Form->input("IncludeSIM", array('type'=>'select', 'options' => array('DN030-09151-NNNNN'=>'DN030-09151-NNNNN', 'DN030-09151-MMMMM'=>'DN030-09151-MMMMM')));
echo $this->Form->input('OSUniqueID');
echo $this->Form->input("password", array('type'=>'password'));
echo $this->Form->input('DeviceURL');
echo $this->Form->input('DevicePics');
echo $this->Form->input('DeviceMemo', array('rows'=> '3'));
echo $this->Form->end('submit');
?>

