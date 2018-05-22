<?php
include '../src/palitanx.php';
$palitanixapi = new PalitanxAPI();
var_dump($palitanixapi->get_Ticker('BTC-CIV'));