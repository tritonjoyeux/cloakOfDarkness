<?php

use Symfony\Component\Yaml\Yaml;

$file = file_get_contents("../app/config/configLight.yml");

$_SESSION['light'] = Yaml::parse($file);