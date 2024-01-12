<?php
class UpdateNameClass(){
	function updateNameFunc(&$bean, $event, $arguments){
		$bean->name = 'Test';
	}
}

?>