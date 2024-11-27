<?php
$pageTitle = 'MGKnet - E-Commerce & WordPress Solutions';
$pageDescription = 'Professional WordPress development and E-Commerce consultancy services.';

$projects = require 'config/projects.php';
$solutions = require 'config/solutions.php';

include 'layouts/header.php';
include 'includes/back-to-top.php';
include 'sections/hero.php';
include 'sections/solutions.php';
include 'sections/work.php';
include 'layouts/footer.php';
