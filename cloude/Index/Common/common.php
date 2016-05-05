<?php
function place($item){
	$item=str_replace(chr(13),'<br>',$item);
	$item=str_replace(chr(32),'&nbsp;',$item);
	return $item;
}
?>