<?php
 
// Built-in PHP function to delete file
unlink($_GET["file"]);
 
// Redirecting back
header("Location: " . $_SERVER["HTTP_REFERER"]);