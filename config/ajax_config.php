<?php

// require_once('./datas.php');
require_once('./datas.php');

// $_POST data retrievement, id passed by AJAX method
$mc_text_id = trim(file_get_contents("php://input"));

// Sending the modal' content, defined in constants (./datas.php)
echo (constant("MC_TEXT" . $mc_text_id));
