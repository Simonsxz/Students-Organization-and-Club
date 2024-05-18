<?php

session_start();
require "vendor/autoload.php";
use myPHPnotes\Microsoft\Auth;
$tenant = "common";
$client_id = "37904379-b6e6-44a2-bfa6-4950e4c9408f";
$client_secret = "Q4L8Q~2W1kJEgLz2yAIS-mPTqPyW1.K4ijFTPaZ9";
$callback = "http://localhost/ADET/Website/Website/callback.php";
$scopes = ["User.Read"];
$microsoft = new Auth($tenant, $client_id, $client_secret,$callback, $scopes);
header("location: " . $microsoft->getAuthUrl());

?>