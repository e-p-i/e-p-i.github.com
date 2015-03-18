<?php
$straccount='';

if($_REQUEST['account'] != ''){
  $straccount=$_REQUEST['account'];
}

if(preg_match('/[^a-zA-Z0-9_-]/',$straccount)){
  $straccount='';
}
?>

<?=
'<!-- このページはこの出力を提供するサーバがhttps://twitter.com/を間接的に取得して行っています。
      リクエスト変数accountに指定のID(alphanumと_-。不正文字列は不受理。)を指定する事により該当アカウントのhtmlを出力します。-->'
."\r\n\r\n\r\n\r\n".

(($straccount === '')
  ? '変数accountが指定されていないか不正です。'
  : file_get_contents('https://twitter.com/'.$straccount));