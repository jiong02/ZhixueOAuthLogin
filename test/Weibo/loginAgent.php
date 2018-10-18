<?php
require __DIR__ . '/common.php';
$weiboOAuth = new \Zhixue\OAuthLogin\Weibo\OAuth2;
$weiboOAuth->displayLoginAgent();