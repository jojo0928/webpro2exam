<h1>Post</h1>
<?php

    echo $this->Form->create('Post');
    echo $this->Form->input('name');
    echo $this->Form->input('sex');
  	echo $this->Form->input('q1', array('options' => array('1'=>'イチ', '2'=>'ニー', '3'=>'サン')));
   
    echo $this->Form->end('送信');
?>