<?php
// Redirect legacy index_it.php requests to unified master router index.php
$queryString = !empty($_SERVER['QUERY_STRING']) ? '?' . $_SERVER['QUERY_STRING'] : '';
header("HTTP/1.1 301 Moved Permanently");
header("Location: index.php" . $queryString);
exit();