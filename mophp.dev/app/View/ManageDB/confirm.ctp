<?php
/**
 * @var $this View
 */

$confirmdata = $this->Session->read("InputData.AddDevice");
?>

<table>
    <tr>
    <tr>
        <th>Device Name</th>
        <td><?php echo $confirmdata['DeviceName'] ?></td>
    </tr>
    <tr>
        <th>Buy Date</th>
        <td><?php echo $confirmdata['BuyDate'] ?></td>
    </tr>
    <tr>
        <th>OS</th>
        <td><?php echo $confirmdata['OS'] ?></td>
    </tr>
    <tr>
        <th>Include SIM</th>
        <td><?php echo $confirmdata['IncludeSIM'] ?></td>
    </tr>
    <tr>
        <th>OS Unique ID</th>
        <td><?php echo $confirmdata['OSUniqueID'] ?></td>
    </tr>
    <tr>
        <th>Password</th>
        <td><?php echo $confirmdata['password'] ?></td>
    </tr>
    <tr>
        <th>Device URL</th>
        <td><?php echo $confirmdata['DeviceURL'] ?></td>
    </tr>
    <tr>
        <th>Device Pics</th>
        <td><?php echo $confirmdata['DevicePics'] ?></td>
    </tr>
    <tr>
        <th>Device Memo</th>
        <td><?php echo $confirmdata['DeviceMemo'] ?></td>
    </tr>
</table>

<?php
echo "この内容で端末を登録しますか？";
echo $this->Form->create();
echo $this->Form->submit(__('Submit'), array('name'=>'submit', 'div'=>'false'));
echo $this->Form->submit(__('Cansel'), array('name'=>'cancel', 'div'=>'false'));
echo $this->Form->end();

