<?php
require_once('cpayeer.php');
require_once('config.php');
$payeer = new CPayeer($accountNumber, $apiId, $apiKey);
if ($payeer->isAuth())
{
	$initOutput = $payeer->initOutput(array(
		'ps' => '1136053',
		'sumIn' => 1,
		'curIn' => 'EUR',
		'sumOut' => 1,
		'curOut' => 'EUR',
		'param_ACCOUNT_NUMBER' => 'P62402571'
	));

	if ($initOutput)
	{
		$historyId = $payeer->output();
		if ($historyId > 0)
		{
			echo "Payout is successful";
		}
		else
		{
			echo '<pre>'.print_r($payeer->getErrors(), true).'</pre>';
		}
	}
	else
	{
		echo '<pre>'.print_r($payeer->getErrors(), true).'</pre>';
	}
}
else
{
	echo '<pre>'.print_r($payeer->getErrors(), true).'</pre>';
}
?>