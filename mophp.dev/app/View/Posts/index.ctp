<?php App::uses('MongoDateUtil','Vendor'); ?>

<h1>Blog posts</h1>
<table>
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Actions</th>
        <th>Created</th>
    </tr>

    <?php foreach($posts as $post): ?>
        <tr>
            <td><?php echo $post['Post']['id']; ?></td>
            <td>
                <?php echo $this->Html->link($post['Post']['title'],
                    //第一引数で、ブログのタイトルにリンクを張る。
                    //第二引数で、PostViewのview.ctpに処理を移すと同時に’id'を渡す。渡したIDに沿った viewが表示される。
                    array('controller'=>'posts', 'action'=>'view', $post['Post']['id']));?>

            </td>
            <td>
                <?php echo $this->Html->link('Edit',
                    array('action'=>'edit', $post['Post']['id']));?>
                <?php echo $this->Form->postLink('Delete',
                        array('action'=>'delete', $post['Post']['id']),
                    //ドキュメントを削除するかコンフィームを表示する。
                        array('confirm'=>'Are you sure?'));
                ?>
            </td>
            <td>
                <?php
                //echo date("Y/m/d H:i:s", $cDate);
                echo MongoDateUtil::format($post['Post']['created'],"Y/m/d H:i:s");
                ?>
            </td>
        </tr>
    <?php endforeach; ?>
    <?php unset($post); ?>
</table>

<?php echo $this->Html->link('Add Post',array('controller' => 'posts', 'action' => 'add')); ?>
