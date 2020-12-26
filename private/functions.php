<?php

    function is_post_request(){
        return $_SERVER["REQUEST_METHOD"] === "POST";
    }

    function is_get_request(){
        return $_SERVER["REQUEST_METHOD"] === "GET";
    }

    function h($str){
        return htmlspecialchars($str);
    }

function sanitize_html($data = []){
    $sanitize_array = [];
    foreach($data as $key => $value){
        $sanitize_array[$key] = h($value);
    }
    return $sanitize_array;
}

function redirect_to($location){
    return header('Location: '.$location);
}

function u($data){
    return urlencode($data);
}

function full_upload_url($path){
    return UPLOAD_URL.'/'.$path;
}

function full_upload_path($path){
    return UPLOAD_PATH.'/'.$path;
}

function formatted_date($date){
    $str = substr($date, 0, 10);
    $strArray = explode('-',$str);
    $str = $strArray[2] . '/'.$strArray[1] . '/'.$strArray[0];
    return $str;
}

function array_to_json($array,$exclude=null){
    if(!is_null($exclude)){
        $array = exclude_and_regenerate($array,$exclude);
    }
    return json_encode($array);
}

function json_to_array($json){
    return json_decode($json,true);
}





?>