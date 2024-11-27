<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $pageTitle ?? 'MGKnet - Modern Web Development & API Solutions'; ?></title>

  <!-- Performance Optimizations -->
  <link rel="preload" href="/assets/fonts/poppins-light.woff2" as="font" type="font/woff2" crossorigin="anonymous">
  <link rel="preload" href="/assets/style.min.css" as="style">
  <link rel="preload" href="/assets/custom_style.css" as="style">

  <!-- Cache Control Headers -->
  <?php
  header("Cache-Control: public, max-age=31536000");
  header("Expires: " . gmdate('D, d M Y H:i:s \G\M\T', time() + 31536000));
  ?>

  <!-- Meta Tags -->
  <meta name="description" content="<?php echo $pageDescription ?? 'Custom web applications and API solutions built with modern technologies.'; ?>">
  <meta name="keywords" content="WordPress website development, API integration, custom software, WordPress, React, Vue.js, cloud solutions, Laravel">

  <!-- Favicon -->
  <link rel="icon" type="image/svg+xml" href="/assets/img/favicon.svg">
  <link rel="alternate icon" type="image/png" href="/assets/img/favicon.png">
  <link rel="apple-touch-icon" href="/assets/img/apple-touch-icon.png">
  <meta name="theme-color" content="#DDE3FD">

  <!-- Styles -->
  <link rel="stylesheet" href="/assets/custom_style.css">
  <link rel="stylesheet" href="/assets/style.min.css">

  <?php include './includes/structured-data.php'; ?>

  <!-- Intersection Observer for Lazy Loading -->
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            entry.target.classList.add('visible');
            if (entry.target.tagName.toLowerCase() === 'img') {
              entry.target.src = entry.target.dataset.src;
            }
          }
        });
      }, {
        threshold: 0.1
      });

      document.querySelectorAll('.fade-in').forEach(el => observer.observe(el));
      document.querySelectorAll('img[data-src]').forEach(img => observer.observe(img));
    });
  </script>
</head>

<body class="bg-white">
  <?php include './includes/navigation.php'; ?>