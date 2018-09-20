<?php
if( $_REQUEST["expression"]) {
//    echo $_REQUEST["expression"];

    $json = json_decode($_REQUEST["expression"]);
    $expression = $json->expression;
    $result = eval('return '.$expression.';');
    echo json_encode(array('result' => $result));
}
