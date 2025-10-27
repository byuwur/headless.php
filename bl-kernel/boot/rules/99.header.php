<?php defined('HEADLESS_PHP') or die('Headless.PHP');

header('HTTP/1.0 ' . $url->httpCode() . ' ' . $url->httpMessage());
header('X-Powered-By: Headless.PHP');
