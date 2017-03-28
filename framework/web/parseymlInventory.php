<?php

use Symfony\Component\Yaml\Yaml;

$file = file_get_contents("../app/config/inventory.yml");

$_SESSION['inventory'] = Yaml::parse($file);
