<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $pageTitle ?? 'MGKnet - Modern Web Development & API Solutions'; ?></title>

  <!-- Meta Tags -->
  <meta name="description" content="<?php echo $pageDescription ?? 'Custom web applications and API solutions built with modern technologies.'; ?>">
  <meta name="keywords" content="WordPress website development, API integration, custom software, WordPress, React, Vue.js, cloud solutions, Laravel">

  <!-- Favicon -->
  <link rel="apple-touch-icon" sizes="180x180" href="/assets/img/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/assets/img/favicon-32x32.png">
  <link rel="manifest" href="/site.webmanifest">
  <meta name="theme-color" content="#DDE3FD">

  <!-- Fonts -->
  <link rel="preload" href="./assets/fonts/poppins-light.woff2" as="font" type="font/woff2" crossorigin="anonymous">

  <!-- Styles -->
  <link rel="stylesheet" href="/assets/custom_style.css">
  <link rel="stylesheet" href="/assets/style.min.css">

  <?php include './includes/structured-data.php'; ?>
</head>

<body class="bg-white">
  <?php include './includes/navigation.php'; ?>