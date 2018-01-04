<?php
// Replace http://example.com with your URL
$url = "http://example.com";
header("Location: $url", false, 301);
die();