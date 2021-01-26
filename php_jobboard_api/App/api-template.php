<?php

header('Content-Type: application/json, charset=UTF-8');
$success = false;
$data = array();

function response_json($success, $data, $msgError=NULL) {
    $array['success'] = $success;
    $array['msg'] = $msgError;
    $array['result'] = $data;

    echo json_encode($data);
}
