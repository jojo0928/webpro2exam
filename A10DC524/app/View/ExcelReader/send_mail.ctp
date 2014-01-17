<table>
<?php echo $this->Html->tableCells(
	$result,
	array('style'=>'color:#FFF; background-color:black'),
	array()
); 
//array_shift($data);
//print_r($data);
echo $this->Html->tableCells($data,
   	array('style'=>'color:#000099; background-color:#DDDDFF'),
    array('style'=>'color:#006600; background-color:#DDDDFF'),
    false
);

//print_r($result);
?>
</table>