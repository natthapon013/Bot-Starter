<?php
$access_token = '4pGIHAJaVmkwpZMjANyHut5HGrOIC5l1nLhM0ySng9R38Y90PCSoXFfSNoIeKqUCKtm/W7f++u8S9XDtkBA2djU2q8snzSEG8QnsDcBwKWxoXHM+sF6dvBKShc9NrG5GI4uLoVZ8LUYI1loJfgwv3AdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;