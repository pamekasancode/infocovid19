<div class="header">
  <div class="container">
    <h1>Provinsi</h1>
    <p>Info data corona di Provinsi Indonesia</p>
  </div>
</div>
<div class="container">
  <div class="table-responsive">
    <table class="table">
      <thead>
        <th>No</th>
        <th>Provinsi</th>
        <th>Positif</th>
        <th>Meninggal</th>
        <th>Sembuh</th>
      </thead>
      <tbody>
      <?php 
        $no = 1;
        $get = file_get_contents("https://api.kawalcorona.com/indonesia/provinsi");
        $data = json_decode($get, true);
        foreach($data as $results) {
          $result = $results["attributes"];
      ?>
        <tr>
          <td><?= $no++; ?></td>
          <td><?= $result["Provinsi"]; ?></td>
          <td id="positif"><?= $result["Kasus_Posi"]; ?></td>
          <td id="meninggal"><?= $result["Kasus_Meni"]; ?></td>
          <td id="sembuh"><?= $result["Kasus_Semb"]; ?></td>
        </tr>
      <?php
        }
      ?>
      </tbody>
    </table>
  </div>
</div>