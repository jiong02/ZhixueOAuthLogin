<?php
require __DIR__ . '/common.php';
$githubOAuth = new \Zhixue\OAuthLogin\Github\OAuth2;
$githubOAuth->displayLoginAgent();