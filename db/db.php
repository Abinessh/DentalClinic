<?php

$con= new mysqli("localhost","root","","dental");
/*hashing sha1*/
date_default_timezone_set('Asia/Kolkata');
function hash_pass($string)
{
	$pepper = "thisisjustanewencyptww";
	$salt="thisismynewstringhowit";
	$string=$string.$salt.$pepper;
	return sha1($string);
}

/*function protect*/

function protect($string)
{
global $con;
$string=mysqli_real_escape_string($con,$string);
return $string;
}

/*URL ENCODE*/

function u($string)
{
	$string=urlencode($string);
	return $string;
}

/*html special chars*/
function h($string)
{
	$string=htmlspecialchars($string);
	return $string;
}

// random generator
function random($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

// byte conversion
function byte_convert($bytes)
    {
        if ($bytes >= 1073741824)
        {
            $bytes = number_format($bytes / 1073741824, 2) . ' GB';
        }
        elseif ($bytes >= 1048576)
        {
            $bytes = number_format($bytes / 1048576, 2) . ' MB';
        }
        elseif ($bytes >= 1024)
        {
            $bytes = number_format($bytes / 1024, 2) . ' KB';
        }
        elseif ($bytes > 1)
        {
            $bytes = $bytes . ' bytes';
        }
        elseif ($bytes == 1)
        {
            $bytes = $bytes . ' byte';
        }
        else
        {
            $bytes = '0 bytes';
        }

        return $bytes;
}


function send_message($number , $mess)
{
    // Authorisation details.
    $username = "josephwatson1026@gmail.com";
    $hash = "286e58977dba06983552ab32fe20946c07b7b56b0b4e9bba4788310b1b911d47";

    // Config variables. Consult http://api.textlocal.in/docs for more info.
    $test = "0";

    // Data for text message. This is the text message data.
    $sender = "TXTLCL"; // This is who the message appears to be from.
    $numbers = $number; // A single number or a comma-seperated list of numbers
    $message = $mess;
    // 612 chars or less
    // A single number or a comma-seperated list of numbers
    $message = urlencode($message);
    $data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
    $ch = curl_init('http://api.textlocal.in/send/?');
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch); // This is the result from the API
    curl_close($ch);
    
}
?>
