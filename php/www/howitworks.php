<?php session_start(); ?>
<?php include './inc/language-prep.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
  <link rel="stylesheet" type="text/css" href="./inc/style.css" />
  <!-- postilotta core -->
  <script src="general.js"></script>
</head>
<body>
<?php include 'module-head.php'; ?>
<h1>How It Works</h1>
<div class="txt">
  <p>Infographic coming soon.</p>
  <p>To set the scene:
  <ul>
    <li>Cutting-edge client-side encryption with zero-knowledge server</li>
    <li>Privacy-by-design</li>
    <li>Multilayer encryption:</li>
    <ul>
      <li>Message (256 Bit Elliptic Curve, Public Key Encryption)</li>
      <li>Transmission (<i>ExtraSecure Mode</i>: 256 Bit AES Algorithm)</li>
      <li>Protocol (SSL/TLS)</li>
    </ul>
    <li>Single-use secure response code for anonymous reply</li>
  </ul>
  As long as you make sure your browser, device and internet access point aren't compromised, we take care of the rest.
  Implementing the best technologies and methods out there.
</p>
<h2>Technology Map</h2>
<img src="pics/technologies.jpeg">
</div>
<?php include 'module-banner-small.php'; ?>
<?php include 'module-footer.php'; ?>
<script>
  checkLang();        // Prepare for multilanguage
</script>
</body>
</html>
