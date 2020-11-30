<?php
require_once __DIR__ . '/vendor/autoload.php';

use oro\Sagawa\Sagawa;

$RequestData = array("893020130724433"); // Truyen vao ma van don

$sagawa = new Sagawa('0191NB','phanmemso1',$RequestData);
$sagawainfo = $sagawa->tracking_order();

print_r($sagawainfo);
