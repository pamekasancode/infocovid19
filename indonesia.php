<?php

$get = file_get_contents("https://api.kawalcorona.com/indonesia");
$data = json_decode($get, true);
foreach($data as $result) {
  $positif = $result["positif"];
  $meninggal = $result["meninggal"];
  $sembuh = $result["sembuh"];
}

?>
<div class="header">
  <div class="container">
    <h1>Indonesia</h1>
    <p>Info data corona di Indonesia</p>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-sm">
      <div class="card positif">
        <p>Positif</p>
        <h2><?= $positif; ?></h2>
      </div>
    </div>
    <div class="col-sm">
      <div class="card meninggal">
        <p>Meninggal</p>
        <h2><?= $meninggal; ?></h2>
      </div>
    </div>
    <div class="col-sm">
      <div class="card sembuh">
        <p>Sembuh</p>
        <h2><?= $sembuh; ?></h2>
      </div>
    </div>
  </div>
</div>