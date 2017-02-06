<?php

use Symfony\Component\Yaml\Yaml;

$file = file_get_contents("../app/config/loose.yml");

$_SESSION['loose'] = Yaml::parse($file);

