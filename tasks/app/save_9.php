<?php

var_dump($_POST);
$text = $_POST['text'];
include 'functions.php';
giv_on_db ('`my_table`', '`text`', $text);