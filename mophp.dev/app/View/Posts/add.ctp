<h1>Add Post</h1>
<?php
echo $this->Form->create('post');
echo $this->Form->input('title');
echo $this->Form->input('body', array('rows'=> '3'));
echo $this->Form->end('Add post');
?>
