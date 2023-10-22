<?php

require_once 'vendor/autoload.php';

$basic  = new \Vonage\Client\Credentials\Basic("59dfaa59", "dX9NYivKrxJs4zoH");
$client = new \Vonage\Client($basic);

$message = $client->message()->send([
    'to' => '94766536417',
    'from' => 'Vonage APIs',
    'text' => 'SLTC-your oder is ready'
        ]);

echo 1;
exit();
?>
