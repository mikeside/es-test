<?php
require_once __DIR__ . '/vendor/autoload.php';

try {
    $esClient = \Elastic\Elasticsearch\ClientBuilder::create()->build();
    print_r($esClient);
} catch (Exception $e) {
    exit($e->getMessage());
}

