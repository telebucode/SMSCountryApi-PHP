<?php
error_reporting(E_ALL);
ini_set('display_errors',true);

if(!file_exists($_SERVER['DOCUMENT_ROOT'].'/smsapi/Smscountryapi.php')){
	die('! Smscountryapi.php not exist...');
}
include_once($_SERVER['DOCUMENT_ROOT'].'/smsapi/Smscountryapi.php');

define('TOKEN','QoVeIRIORSBkUn6pDg3AKLNFy126VOI7ohS2lRzw');
define('KEY','idyGs6msvBh7GZaE6EeM');

// StartRecordingGroupCall
$connection = new Smscountryapi(KEY,TOKEN);
$data=$connection->StartRecordingGroupCall($GroupCallUUID ="58AB6742C7A64AAF9B02843F907A20",$fileFormat="mp3");
echo $data;

