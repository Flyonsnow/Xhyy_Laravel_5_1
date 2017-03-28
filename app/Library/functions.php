<?php
/*
 +---------------------------------------------------------------------+
 | 维纳网 [ 一维纳世界 一网纳天下 ]
 +---------------------------------------------------------------------+
 | Copyright (c) 2014-2015 http://www.willar.net All rights reserved.
 +---------------------------------------------------------------------+
 | Author: HB <hubo@willar.net>
 +---------------------------------------------------------------------+
* /

/**
 * Created by PhpStorm.
 * User: Willar_HB
 * Date & Time: 16/4/1 下午4:38
 */

function dump($var, $echo=true, $label=null, $strict=true) {
    $label = ($label === null) ? '' : rtrim($label) . ' ';
    if (!$strict) {
        if (ini_get('html_errors')) {
            $output = print_r($var, true);
            $output = '<pre>' . $label . htmlspecialchars($output, 3) . '</pre>';
        } else {
            $output = $label . print_r($var, true);
        }
    } else {
        ob_start();
        var_dump($var);
        // $output = ob_get_clean();
        if (!extension_loaded('xdebug')) {
            $output = preg_replace('/\]\=\>\n(\s+)/m', '] => ', $output);
            $output = '<pre>' . $label . htmlspecialchars($output, ENT_QUOTES) . '</pre>';
        }
    }
    if ($echo) {
        echo($output);
        return $output;
    }else
        return $output;
}


function p($array) {
    echo PHP_EOL;
    $text = dump($array, 0, '', 0);
    echo $text;
    echo PHP_EOL;
}

function ajaxReturn($errCode,$errMsg,$data = null){
//    header("Content-type: application/json");
    header("Content-type: text/json;charset=utf-8");
    exit(json_encode(array('errCode' => $errCode, 'errMsg' => $errMsg, 'data' => $data),JSON_UNESCAPED_UNICODE ));
}

