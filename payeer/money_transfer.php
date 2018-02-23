<?php
require_once('cpayeer.php');
require_once('config.php');
$payeer = new CPayeer($accountNumber, $apiId, $apiKey);
if ($payeer->isAuth())
{
	$arTransfer = $payeer->transfer(array(
		'curIn' => $currency,
		'sum' => 2,
		'curOut' => $currency,
		//'sumOut' => 1,
		//'to' => 'P62402571',
		'to' => 'normaneil.macutay@gmail.com',
		//'comment' => 'test',
		//'protect' => 'Y',
		//'protectPeriod' => '3',
		//'protectCode' => '12345',
	));
	if (empty($arTransfer['errors']))
	{
		echo $arTransfer['historyId'].": Money transfer is successful";
	}
	else
	{
		echo '<pre>'.print_r($arTransfer["errors"], true).'</pre>';
	}
}
else
{
	echo '<pre>'.print_r($payeer->getErrors(), true).'</pre>';
}
?>