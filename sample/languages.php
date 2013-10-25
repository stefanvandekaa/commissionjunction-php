<?php
require dirname(__DIR__) . '/vendor/autoload.php';

$api_key = "API KEY HERE";

$client = new CROSCON\CommissionJunction\Client($api_key);

try {
    var_export($client->supportLookup('languages'));
} catch (\CROSCON\CommissionJunction\Exception $e) {
    echo "!! ERROR: {$e->getMessage()}";
}

echo "\n";