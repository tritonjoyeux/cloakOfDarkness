<?php 
include("layout.html");

session_destroy();

echo 'Restart ! Redirect in 1 sec.. <meta http-equiv="refresh" content="1;url=/foyer" />';