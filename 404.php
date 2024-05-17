<?php

// Set HTTP response code to 404 Not Found
http_response_code(404);

// Include custom 404 HTML content
include('404.html');

// Terminate script execution
die();

?>
