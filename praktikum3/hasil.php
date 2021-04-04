<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!--W3 CSS-->
     <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
    <title>Hasil BMI</title>
</head>
<body>

<?php
$proses = $_POST['proses'];
$nama = $_POST['nama'];
$berat_badan = $_POST['badan'];
$tinggi_badan = $_POST['tinggi'];
$umur = $_POST['umur'];
$jenis_kelamin = $_POST['jk'];
$konvers = $tinggi_badan * 0.01;
?>

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">BB(KG)</th>
      <th scope="col">TB(CM)</th>
      <th scope="col">Umur(Tahun)</th>
      <th scope="col">Jenis Kelamin</th>
      <th scope="col">BMI</th>
      <th scope="col">Hasil</th>
    </tr>
  </thead>
  <tbody>
    <tr bgcolor="yellow">
      <th scope="row">1</th>
      <td>Alwi Putra Supendi</td>
      <td>66</td>
      <td>167</td>
      <td>19</td>
      <td>Laki-Laki</td>
      <td>19</td>
      <td>Kekurangan Berat Badan</td>
    </tr>
    <tr bgcolor="cyan">
      <th scope="row">2</th>
      <td>Myoui Mina</td>
      <td>54</td>
      <td>165</td>
      <td>20</td>
      <td>Perempuan</td>
      <td>20</td>
      <td>Ideal</td>
    </tr>
    <tr bgcolor="red">
      <th scope="row">3</th>
      <td>Mail</td>
      <td>75</td>
      <td>165</td>
      <td>19</td>
      <td>Laki-Laki</td>
      <td>27</td>
      <td>Kelebihan Berat Badan</td>
    </tr>
  </tbody>
</table>

</body>
</html>