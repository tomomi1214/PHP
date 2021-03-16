<?php
require 'vendor/autoload.php';

use GuzzleHttp\Client;

# 初期設定
$KEYID = "574a9e4f2e35c9e1";
$COUNT = 100;
$PREF = "Z011";
$FREEWORD = "渋谷駅";
$FORMAT = "json";
$HIT_PER_PAGE = 0;

$PARAMS = array("keyid" => $KEYID, "count" => $HIT_PER_PAGE, "pref" => $PREF, "freeword" => $FREEWORD, "format" => $FORMAT);

function write_data_to_csv($PARAMS){
    $restaurants = [];
    $client = new Client();
    
    try{
        $json_res = $client->request('GET', "http://webservice.recruit.co.jp/hotpepper/gourmet/v1/", ['query' => $PARAMS])->getBody();
    }catch(Exception $e){
        return print("エラーが発生しました");
    }
    $response = json_decode($json_res, true);

    if(isset($response["results"]["error"])){
        return print("エラーが発生しました！");
    }
    foreach($response["results"]["shop"] as &$restaurant){
        $restaurant_name = $restaurant["name"];
        $restaurants = $restaurant_name;
    }
    $handle = fopen("restaurant_list.csv", "wb");
     //fopen:ファイルをオープンにする。　wb:バイナリモード
    fputcsv($handle, $restaurants);
     //　csv形式にフォーマットし、ファイルに書き込む
    fclose($handle);
    
    return print_r($restaurants);
    
}

write_data_to_csv($PARAMS);

?>