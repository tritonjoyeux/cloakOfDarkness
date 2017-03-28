<?php

use Symfony\Component\Yaml\Yaml;

$file = file_get_contents("../app/config/start.yml");

$_SESSION['start'] = Yaml::parse($file);
