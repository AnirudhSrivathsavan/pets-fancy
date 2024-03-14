<?php

$json_data = file_get_contents('countries+states+cities.json');
$data = json_decode($json_data, true);

$options = [];
foreach ($data as $item) {
    $options[] = ['value' => $item['name'], 'text' => $item['name']];
}
header('Content-Type: application/json');
echo json_encode($options);