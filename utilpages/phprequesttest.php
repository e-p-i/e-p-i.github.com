<?php

// don't output
$astr_hide = array
('DOCUMENT_ROOT',
'HTTP_VIA',
'HTTP_X_SAKURA_FORWARDED_FOR',
'PATH',
'PHPRC',
'PHP_SELF',
'SCRIPT_NAME',
'SCRIPT_FILENAME',
'SERVER_ADMIN',
'SERVER_SOFTWARE',
'SERVER_PROTOCOL',
'argc',
'argv');


echo '<!DOCTYPE html>
<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"><meta charset="UTF-8">
<title>phprequesttest.php</title></head><body><center>
request analisys by php<br><br>

<table border=1>
  <caption>$_SERVER</caption>
  <tr>
    <th>key</th>
    <th>value</th>
  </tr>
  ';

foreach($_SERVER as $k => $v){
if(! in_array($k,$astr_hide)){
echo '  <tr>
    <td>' . $k . '</td>
    <td>' . $v . '</td>
  </tr>';}
}
echo '</table>
';

echo '*** follows are hided ***<br>
';
foreach($astr_hide as $v){
  echo $v . '<br>
';
}

echo '<br>
';

echo '<table border=1>
  <caption>$_GET</caption>
  <tr>
    <th>key</th>
    <th>value</th>
  </tr>
  ';
foreach($_GET as $k => $v){
echo '  <tr>
    <td>' . $k . '</td>
    <td>' . $v . '</td>
  </tr>';
}
echo '</table><br>
';

echo '<table border=1>
  <caption>$_POST</caption>
  <tr>
    <th>key</th>
    <th>value</th>
  </tr>
  ';
foreach($_POST as $k => $v){
echo '  <tr>
    <td>' . $k . '</td>
    <td>' . $v . '</td>
  </tr>';
}
echo '</table><br>
';

echo '<table border=1>
  <caption>$_COOKIE</caption>
  <tr>
    <th>key</th>
    <th>value</th>
  </tr>
  ';
foreach($_COOKIE as $k => $v){
echo '  <tr>
    <td>' . $k . '</td>
    <td>' . $v . '</td>
  </tr>';
}
echo '</table><br>
';


/*
echo '<table border=1>
  <caption>$_SESSION</caption>
  <tr>
    <th>key</th>
    <th>value</th>
  </tr>
  ';
foreach($_SESSION as $k => $v){
echo '  <tr>
    <td>' . $k . '</td>
    <td>' . $v . '</td>
  </tr>';
}
echo '</table><br>
';
*/


echo '</center></body>';


/*省く
DOCUMENT_ROOT
SCRIPT_NAME
SCRIPT_FILENAME
SERVER_SOFTWARE
SERVER_PROTOCOL
PHP_SELF
argv
argc

入れる
REMOTE*
SERVER*
HTTP_*
REQUEST_*
*/ 
