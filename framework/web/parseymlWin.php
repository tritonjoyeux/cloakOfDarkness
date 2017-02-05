<?php

use Symfony\Component\Yaml\Yaml;

$file = file_get_contents("../app/config/win.yml");

$_SESSION['actions'] = Yaml::parse($file);

