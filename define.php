#! /usr/bin/env php
<?php
/*
 * Define is a terminal dictionary
 * */
include_once "Request.php";
include_once 'Input.php';
include_once 'Output.php';

$input = new Input();

$response = (new Request())->fetch(
    "https://od-api.oxforddictionaries.com/api/v2/entries/en-gb/{$input->getWord()}"
)->parsed()->get();

new Output($response);
