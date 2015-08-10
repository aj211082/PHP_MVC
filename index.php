<?php
require 'libs/Bootstrap.php';
require 'libs/Controller.php';
require 'libs/Model.php';
require 'libs/View.php';
require 'config/database.php';
$components_path = 'vendor';
$app = new Bootstrap($components_path);