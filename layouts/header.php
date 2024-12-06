<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title><?php echo $pageTitle ?? 'MGKnet - Modern WordPress Development & Custom Solutions'; ?></title>

 <!-- Performance Optimizations -->
 <link rel="preload" as="style" href="/assets/fonts/poppins-light.woff2" crossorigin>

 <!-- Cache Control Headers -->
 <?php
 header("Cache-Control: public, max-age=31536000");
 header("Expires: " . gmdate('D, d M Y H:i:s \G\M\T', time() + 31536000));
 ?>

 <!-- Meta Tags -->
 <meta name="description" content="<?php echo $pageDescription ?? 'Leading WordPress development agency specializing in custom themes, plugins, and WooCommerce solutions. We deliver enterprise-level e-commerce platforms with expert strategy and ongoing support.'; ?>">
 <meta name="keywords" content="WordPress website development, API integration, custom software, WordPress, React, Vue.js, cloud solutions, Laravel">

 <!-- Favicon -->
 <link rel="icon" type="image/svg+xml" href="/assets/img/favicon.svg">
 <link rel="alternate icon" type="image/png" href="/assets/img/favicon.png">
 <link rel="apple-touch-icon" href="/assets/img/apple-touch-icon.png">
 <meta name="theme-color" content="#DDE3FD">

 <!-- Styles -->
 <link rel="stylesheet" href="/assets/style.min.css" media="print" onload="this.media='all'">
 <link rel="stylesheet" href="/assets/custom_style.css" media="print" onload="this.media='all'">
 <noscript>
   <link rel="stylesheet" href="/assets/style.min.css">
   <link rel="stylesheet" href="/assets/custom_style.css">
 </noscript>

 <?php include './includes/structured-data.php'; ?>

</head>

<body class="bg-white">
 <?php include './includes/navigation.php'; ?>
 
 <!-- Intersection Observer for Lazy Loading -->
 <script defer>
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