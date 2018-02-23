<?php
require_once('cpayeer.php');
require_once('config.php');
$payeer = new CPayeer($accountNumber, $apiId, $apiKey);
if ($payeer->isAuth())
{
	echo "here";
	// $arShop = array(
	// 	'm_shop' => '498603310',
	// 	'm_orderid' => '12345',
	// 	'm_amount' => number_format(1, 2, '.', ''),
	// 	'm_curr' => 'EUR',
	// 	'm_desc' => base64_encode('Test'),
	// );
	// $arShop['m_sign'] = strtoupper(hash('sha256', implode(':', array_merge($arShop, array('thereallifeuser')))));

	// $arOrder = $payeer->merchant(array(
	// 	'merchantUrl' => 'https://payeer.com/merchant/',
	// 	'processUrl' => 'https://payeer.com/merchant/',
	// 	'shop' => $arShop,
	// 	'lang' => 'en',
	// 	'ps' => array(
	// 		'id' => '21433878',
	// 		'curr' => $currency,
	// 	),
	// 	'form' => array(
	// 		'order_email' => 'support@payeer.com',
	// 	),
	// 	//'ip' => $_SERVER['REMOTE_ADDR'],
	// ));
	// echo '<pre>'; print_r($arOrder); echo '</pre>';

	// if ($arOrder)
	// {
	// 	if (!empty($arOrder['location']))
	// 	{
	// 		?>
	// 		<a href="<?=$arOrder['location']?>" target="_blank"><?=$arOrder['location']?></a>
	// 		<?
	// 	}
	// }
	// else
	// {
	// 	echo '<pre>'; print_r($payeer->getErrors()); echo '</pre>';
	// }
}
else
{
	echo '<pre>'.print_r($payeer->getErrors(), true).'</pre>';
}
?>