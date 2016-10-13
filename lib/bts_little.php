<?php
/*
OHSCE_V0.1.22_B
高可靠性的PHP通信框架。
HTTP://WWW.OHSCE.ORG
@作者:林友哲 393562235@QQ.COM
作者保留全部权利，请依照授权协议使用。
*/
function bts_bas_valueref($arr){ 
        $refs = array(); 
        foreach($arr as $key => $value) 
        $refs[$key] = &$arr[$key]; 
        return $refs; 

    }
function bts_bas_array2bin($arr){
	$res="";
	foreach($arr as $arrp){
		$nhex=dechex(intval($arrp));
		if(strlen($nhex)<2){
			$nhex='0'.$nhex;
		}
		$res .= hex2bin($arrp);
	}
	return $res;
}
function bts_bas_array2bind($arr){
	$res="";
	foreach($arr as $arrp){
		$nhex=dechex(intval($arrp));
		if(strlen($nhex)<2){
			$nhex='0'.$nhex;
		}
		$res .= hex2bin($nhex);
	}
	return $res;
}
function bts_is_json($str){  
    if(is_null(trim(json_decode($str)))){
		return false;
	}else{
		return true;
	}
}