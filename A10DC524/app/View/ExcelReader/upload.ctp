<table>
<?php 
echo $this->Form->create(null, array('action'=>'send_mail'));
echo $this->Form->end('送信');
echo $this->Html->tableHeaders(
	$header,
	array('style'=>'color:#FFF; background-color:black'),
	array()
); 


//array_shift($data);
//print_r($data);
echo $this->Html->tableCells($data,
   	array('style'=>'color:#000099; background-color:#DDDDFF'),
    array('style'=>'color:#006600; background-color:#DDFFDD'),
    false
);
?>
</table>