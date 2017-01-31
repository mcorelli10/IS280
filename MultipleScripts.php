<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>PHP Environment Info</title>
</head>

<body>
<h1>PHP Environment Info</h1>
<p> This page was rendered with PHP version
<?php
/*
PHP code for Chapter 1. The purpose of this code is to demonstrate how to add multiple PHP code blocks to a Web page.*/
//Melanie Corelli
# 1/30/2017
echo phpversion();
?>.
</p>
<p>The PHP code was rendered with Zend Engine version
<?php
echo zend_version();
?>.
</p>
<p>PHP's default MIME type is 
<?php
echo ini_get("default_mimetype");
?>.
</p>
<p>The maximum allowed execution time of a PHP script is
<?php
echo ini_get("max_execution_time");
?>
seconds.</p>

</body>
</html>