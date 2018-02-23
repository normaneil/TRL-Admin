<?php
require_once('cpayeer.php');
require_once('config.php');
$payeer = new CPayeer($accountNumber, $apiId, $apiKey);
if ($payeer->isAuth())
{
	echo "You are successfully authorized";
}
else
{
	echo '<pre>'.print_r($payeer->getErrors(), true).'</pre>';
}
?>