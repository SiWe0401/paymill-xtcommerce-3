<?php
require_once('ext/modules/payment/paymill/WebHooks.php');
require_once('includes/application_top.php');

$privateKey = trim(MODULE_PAYMENT_PAYMILL_ELV_PRIVATEKEY);
$controller = new WebHooks($privateKey);
try{
    $body = @file_get_contents('php://input');
    $event_json = json_decode($body, true);
    if(isset($event_json['event_type']) && $event_json['event_type'] != ''){
        $controller->setEventParameters(array_merge($_GET, $_POST, $event_json));
    } else {
        throw new Exception("Invalid Notification");
    }

} catch (Exception $exception) {
    die($exception->getMessage());
}