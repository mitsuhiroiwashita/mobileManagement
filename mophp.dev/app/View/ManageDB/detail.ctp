
<?php
//Vendorディレクトリに独自に定義したクラス
//第一引数にクラス名を、第二引数にパッケージ名をそれぞれ書く。
//App::uses('MongoDateUtil', 'vendors');
?>



<table>
    <tr>
    <tr>
        <th>Device Name</th>
        <td><?php echo $device['Device']['DeviceName'] ?></td>
    </tr>
    <tr>
        <th>Carrier</th>
        <td><?php echo $device['Device']['Carrier'] ?></td>
    </tr>
    <tr>
        <th>Buy Date</th>
        <td><?php echo $device['Device']['BuyDate'] ?></td>
    </tr>
    <tr>
        <th>OS</th>
        <td><?php echo $device['Device']['OS'] ?></td>
    </tr>
    <tr>
        <th>Include SIM</th>
        <td><?php echo $device['Device']['IncludeSIM'] ?></td>
    </tr>
    <tr>
        <th>OS Unique ID</th>
        <td><?php echo $device['Device']['OSUniqueID'] ?></td>
    </tr>
    <tr>
        <th>Password</th>
        <td><?php echo $device['Device']['password'] ?></td>
    </tr>
    <tr>
        <th>Device URL</th>
        <td><?php echo $device['Device']['DeviceURL'] ?></td>
    </tr>
    <tr>
        <th>Device Pics</th>
        <td><?php echo $device['Device']['DevicePics'] ?></td>
    </tr>
    <tr>
        <th>Device Memo</th>
        <td><?php echo $device['Device']['DeviceMemo'] ?></td>
    </tr>
</table>

<?php echo $this->Html->Link('Back', array('controller' => 'ManageDB', 'action'=>'index')) ?>
