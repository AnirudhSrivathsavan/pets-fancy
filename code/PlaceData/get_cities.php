<?php

$value = $_POST['state_code'];

$json_data = file_get_contents('countries+states+cities.json');
$array = json_decode($json_data, true);
$state=[];
foreach ($array as $data) {
    if ($data['name'] == $value) {
        $state[]= $data;
    }
}

$options = [];
foreach ($state[0]['cities'] as $item) {
    $options[] = ['value' => $item['name'], 'text' => $item['name']];
}

if ($state[0]['cities'] == []) {
    $options[] = ['value' => $state[0]['name'], 'text' => $state[0]['name']];
}
header('Content-Type: application/json');
echo json_encode($options);