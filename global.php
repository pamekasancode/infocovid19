<div class="header">
  <div class="container">
    <h1>Global</h1>
    <p>Info data corona secara Global</p>
  </div>
</div>
<div class="container">
  <div class="table-responsive">
    <table class="table">
      <thead>
        <th>No</th>
        <th>Negara</th>
        <th>Positif</th>
        <th>Meninggal</th>
        <th>Sembuh</th>
      </thead>
      <tbody>
      <?php 
        $no = 1;
        $get = file_get_contents("https://api.kawalcorona.com");
        $data = json_decode($get, true);
        foreach($data as $results) {
          $result = $results["attributes"];
      ?>
        <td><?= $no++; ?></td>
        <td><?= $result["Country_Region"]; ?></td>
        <td id="positif"><?= $result["Confirmed"]; ?></td>
        <td id="meninggal"><?= $result["Deaths"]; ?></td>
        <td id="sembuh"><?= $result["Recovered"]; ?></td>
      </tbody>
    <?php
      }
    ?>
    </table>
  </div>
</div>