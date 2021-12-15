<?php
function validaRequerido($valor){
	if(trim($valor) == ''){
	return false;
}else{
	return true;
}
}
?>