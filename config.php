<?php

function display_array($array) {
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}

$root = $_SERVER["DOCUMENT_ROOT"];
if (strcmp($root, "C:/xampp/htdocs") == 0) {
    define("_HOST", "../cric_info_system/web/imagebank/");
    define("_url", "http://localhost/cric_info_system/web/index.php");
} else {
    define("_HOST", "../cric_info_system/web/imagebank/");
    define("_url", "http://localhost/cric_info_system/web/index.php");
}

function getRandomNumber() {
    return rand(00000, 99999);
}

function getCURL($url, $getResponseParameter = array()) {
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
    $result = curl_exec($ch);
    curl_close($ch);
    $response = json_decode($result, TRUE);
    if (count($getResponseParameter) > 0) {
        foreach ($getResponseParameter as $value) {
            $r[$value] = $response[$value];
        }
        $response = $r;
        $r = null;
    } else {
        $response = $response['data'];
    }
    return $response;
}

function issetValue($array) {
    $r = [];
    if (isset($array) && $array != "") {
        $r = $array;
    }
    return $r;
}

function findAgeInYearMonthNew($yyymmdd) {//put date in the dd-mm-yyyy format
    $date = new DateTime($yyymmdd);
    $today = new DateTime(); // for testing purposes
    $diff = $today->diff($date);
    $p = $diff->y . " years, " . $diff->m . " months";
    return $p;
}

function fileExists($filePath) {
    return is_file($filePath) && file_exists($filePath);
}
 

function limitTextChars($content = false, $limit = false, $stripTags = false, $ellipsis = false) 
{
    if ($content && $limit) {
        $content  = ($stripTags ? strip_tags($content) : $content);
        $ellipsis = ($ellipsis ? "..." : $ellipsis);
        $content  = mb_strimwidth($content, 0, $limit, $ellipsis);
    }
    return $content;
}

function limitTextWords($content = false, $limit = false, $stripTags = false, $ellipsis = false) 
{
    if ($content && $limit) {
        $content = ($stripTags ? strip_tags($content) : $content);
        $content = explode(' ', $content, $limit+1);
        array_pop($content);
        if ($ellipsis) {
            array_push($content, '...');
        }
        $content = implode(' ', $content);
    }
    return $content;
}