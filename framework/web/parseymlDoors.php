<?php

use Symfony\Component\Yaml\Yaml;

$file = file_get_contents("../app/config/configDoors.yml");

$_SESSION['doors'] = Yaml::parse($file);

