<?php
$file = fopen('../key.txt', 'r');
if ($file) {
  $apiKey = fread($file, filesize('../key.txt'));
  fclose($file);
} else {
  // Error handling
}
?>

<!DOCTYPE html>
<!--
 @license
 Copyright 2019 Google LLC. All Rights Reserved.
 SPDX-License-Identifier: Apache-2.0
-->
<html>

<head>
  <title>Linhas Itapira</title>
  <?php include("fragment/head.html"); ?>
</head>

<body>
  <?php $ativo = "linhas";
  include("fragment/navbar.php"); ?>

  <div id="map"></div>
  <!-- 
      The `defer` attribute causes the callback to execute after the full HTML
      document has been parsed. For non-blocking uses, avoiding race conditions,
      and consistent behavior across browsers, consider loading using Promises.
      See https://developers.google.com/maps/documentation/javascript/load-maps-js-api
      for more information.
      -->
  <!--script src="https://maps.googleapis.com/maps/api/js?key=<?php echo $apiKey; ?>&callback=initMap&v=weekly" defer></script-->

  <script async defer src="https://maps.googleapis.com/maps/api/js?key=<?php echo $apiKey; ?>&callback=initMap"></script>
</body>

</html>