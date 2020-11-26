<?php

define('PATH', __DIR__);
define("DOMAIN","http://".$_SERVER['HTTP_HOST'].'/demo_MoVa');

$request = $_SERVER['REQUEST_URI'];

switch ($request) {
     /*top - page*/
    case '/demo_MoVa/' :
    case '/demo_MoVa' :
        require __DIR__ . '/views/index.php';
        break;

        /*patern page*/
    case '/demo_MoVa/patern/' :
    case '/demo_MoVa/patern' :
        require __DIR__ . '/views/patern/index.php';
        break;

        /*faq page*/
    case '/demo_MoVa/faq/' :
    case '/demo_MoVa/faq' :
        require __DIR__ . '/views/faq/index.php';
        break;

        /*company page*/
    case '/demo_MoVa/company/' :
    case '/demo_MoVa/company' :
        require __DIR__ . '/views/company/index.php';
        break;

        /*contact page*/
    case '/demo_MoVa/contact/' :
    case '/demo_MoVa/contact' :
        require __DIR__ . '/views/contact/index.php';
        break;
        /*guide page*/
    case '/demo_MoVa/guide/' :
    case '/demo_MoVa/guide' :
        require __DIR__ . '/views/guide/index.php';
        break;
        /*news page*/
    case '/demo_MoVa/news/' :
    case '/demo_MoVa/news' :
        require __DIR__ . '/views/news/index.php';
        break;
        /*news page detail*/
    case '/demo_MoVa/news/detail/' :
    case '/demo_MoVa/news/detail' :
        require __DIR__ . '/views/news/detail/index.php';
        break;
        /*login*/
    case '/demo_MoVa/login/' :
    case '/demo_MoVa/login' :
        require __DIR__ . '/views/login/index.php';
        break;
        /*my page*/
    case '/demo_MoVa/mypage/' :
    case '/demo_MoVa/mypage' :
        require __DIR__ . '/views/mypage/index.php';
        break;
        /*sticker*/
    case '/demo_MoVa/sticker/' :
    case '/demo_MoVa/sticker' :
        require __DIR__ . '/views/sticker/index.php';
        break;
        /*sticker-detail*/
    case '/demo_MoVa/sticker/detail' :
    case '/demo_MoVa/sticker/detail/' :
        require __DIR__ . '/views/sticker/detail/index.php';
        break;
        /*service*/
    case '/demo_MoVa/service/' :
    case '/demo_MoVa/service' :
        require __DIR__ . '/views/service/index.php';
        break;
        /*information*/
    case '/demo_MoVa/information/' :
    case '/demo_MoVa/information' :
        require __DIR__ . '/views/information/index.php';
        break;
        /*login*/
    case '/demo_MoVa/singin/' :
    case '/demo_MoVa/singin' :
        require __DIR__ . '/views/singin/index.php';
        break;

        /*reset - passowrd*/
    case '/demo_MoVa/re-password/' :
    case '/demo_MoVa/re-password' :
        require __DIR__ . '/views/re-password/index.php';
        break;


    default:
        http_response_code(404);
        require __DIR__ . '/views/404.php';
        break;
}