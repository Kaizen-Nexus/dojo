<?php
$dir = __DIR__ . '/vendor/autoload.php';
var_dump($dir);
require_once $dir;
var_dump(class_exists(KaizenNexus\Survey\SurveyService::class)); 