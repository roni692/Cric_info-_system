<?php

define('API_ACCESS_KEY', 'AAAASExVER0:APA91bFhS0dzn980eaLp5ruVW6CGhOAgM6SGpuYHErbaH5NyZ-Z4VNNirFMjoYouqQmvtbYjwCK7rdKSEIiwAMc9BRxbcGMJ_-P0X8a15ZdyLpbclguLX3jKU6ejU0Dov5jDOz2lisIp');


$msg = array
    (
    'title' => "Test Title BSS",
    'message' => "Test Message BSS",
);

$msg_array = array('data' => $msg);
$fields = array
    (
    'registration_ids' => array("crFa0TsehQY:APA91bEA4mZfRJYvXxNVHNJdabBL17wtqYzK-vK1yQeWTgkRJVciLj3_n23u-9Mou2OLvJOEVyFpKAMwBYRGl6zIz6zH5ImYfyM_gGXfMqeOo0FoXwcp28YbxleiMmu4AIuggUplkWme"),
    'data' => $msg_array
);

$headers = array
    (
    'Authorization: key=' . API_ACCESS_KEY,
    'Content-Type: application/json'
);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send');
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
$result = curl_exec($ch);
print_r($result);
exit;
if ($result === FALSE) {
    die('Curl failed: ' . curl_error($ch));
}
echo json_decode($result);
curl_close($ch);
