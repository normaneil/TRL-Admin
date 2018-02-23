<?php
require_once('cpayeer.php');
require_once('config.php');
$payeer = new CPayeer($accountNumber, $apiId, $apiKey);
if ($payeer->isAuth())
{
	$arBalance = $payeer->getBalance();
	echo '<pre>'.print_r($arBalance, true).'</pre>';
}
else
{
	echo '<pre>'.print_r($payeer->getErrors(), true).'</pre>';
}
?>