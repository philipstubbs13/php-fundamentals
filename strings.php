<?php

$title = 'PHP Fundamentals';

$message = 'Welcome to ' . $title;

$message2 = "Welcome to $title";

echo $message2;

$json = <<<PRETTYJSON
{"menu": {
    "id": "file",
    "value": "File",
    "popup": {
      "menuitem": [
        {"value": "New", "onclick": "CreateNewDoc()"},
        {"value": "Open", "onclick": "OpenDoc()"},
        {"value": "Close", "onclick": "CloseDoc()"}
      ]
    }
  }}
PRETTYJSON;

echo $json;