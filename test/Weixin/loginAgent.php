<?php
require __DIR__ . '/common.php';
$wxOAuth = new \Zhixue\OAuthLogin\Weixin\OAuth2;
$wxOAuth->displayLoginAgent();