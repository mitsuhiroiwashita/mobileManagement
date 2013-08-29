
<?php
//Vendorディレクトリに独自に定義したクラス
//第一引数にクラス名を、第二引数にパッケージ名をそれぞれ書く。
App::uses('MongoDateUtil', 'vendors');
?>

<h1><?php echo h($post['Post']['title']); ?></h1>

<p><small>Created:
<?php echo MongoDateUtil::format($post['Post']['created'], "Y/m/d H:i:s");?></small></p>
<p><?php echo h($post['Post']['body']); ?></p>

<?php
echo $this->Html->Link('HogeBack', array('controller' => 'posts', 'action' => 'index'));