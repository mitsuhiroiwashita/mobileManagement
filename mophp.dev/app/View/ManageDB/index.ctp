<?php App::uses('MongoDateUtil','Vendor'); ?>

<h1>Welcome to DeviceManagement System</h1>
<table>
    <?php echo $this->Html->link('AddDevice', array('controller'=>'ManageDB','action'=>'add')); ?>
    <br>
    <?php echo $this->Html->link("Logout", array('controller'=>'ManageDB', 'action'=>'logout')); ?>
</table>

<table>
    <tr>
        <th>DeviceName</th>
        <th>BuyDate</th>
        <th>IncludeSIM</th>
        <th>Detail</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    <?php foreach($devices as $device): ?>
        <tr>
            <td><?php echo $device['Device']['DeviceName'];?></td>
            <td><?php echo $device['Device']['BuyDate'];?></td>
            <td><?php echo $device['Device']['IncludeSIM'];?></td>
            <td>
                <?php echo $this->Html->link('Detail',
                    array('action'=>'detail', $device['Device']['id']));?>
            </td>
            <td>
                <?php echo $this->Html->link('Edit',
                    array('action'=>'edit', $device['Device']['id']));?>
            </td>
            <td>
                <?php echo $this->Form->postLink('Delete',
                    array('action'=>'delete', $device['Device']['id']),
                    //ドキュメントを削除するかコンフィームを表示する。
                    array('confirm'=>'Are you sure?'));
                ?>
            </td>
        </tr>
    <?php endforeach; ?>
    <?php unset($device); ?>
</table<td>
    <?php
        //echo date("Y/m/d H:i:s", $cDate);
        //echo MongoDateUtil::format($devices['Device']['created'],"Y/m/d H:i:s");
    ?>
</td>
