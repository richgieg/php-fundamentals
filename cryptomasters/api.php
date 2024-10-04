<?php
require_once("classes.php");

header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");

$code = $_GET["code"] ?? "BTC";

$converter = new CryptoConverter($code);
$rateInUSD = $converter->convert();
echo "{\"rate\":$rateInUSD}";
