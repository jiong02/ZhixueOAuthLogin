<?php
require __DIR__ . '/common.php';
$giteeOAuth = new \Zhixue\OAuthLogin\Gitee\OAuth2;
$giteeOAuth->displayLoginAgent();