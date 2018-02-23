<?php
require_once('cpayeer.php');
require_once('config.php');
$payeer = new CPayeer($accountNumber, $apiId, $apiKey);
if ($payeer->isAuth())
{
	$arPs = $payeer->getPaySystems();
	echo '<pre>'.print_r($arPs, true).'</pre>';
}
else
{
	echo '<pre>'.print_r($payeer->getErrors(), true).'</pre>';
}
?>