<?php
  $Fruits = [
    [
          "Id" => 1,
          "Nama" => 'Kelengkeng',
          "Warna" => 'Coklat',
          "Stok"  => 50,
          "Harga" => 70.000,
          "Deskripsi" => ' Buah kelengkeng berbentuk bulat sampai lonjong terdapat kulit buah yang bewarna hijau ketika masih muda dan akan berubah menjadi coklat saat sudah matang.',
    ],
    [
        "Id" => 2,
        "Nama" => 'Rambutan',
        "Warna" => 'Merah',
        "Stok"  => 300,
        "Harga" => 10.000,
        "Deskripsi" => 'Rambutan (Nephelium lappaceum L.) merupakan tanaman yang berasal dari Indonesia. Buah rambutan mempunyai ciri khas yaitu kulit buah yang berambut, rasa buah manis sampai asam, tekstur lembut dan halus sehinga banyak disukai oleh masyarakat sebagai makanan buah segar atau makan olahan dalam kaleng.',
    ],
    [
        "Id" => 3,
        "Nama" => 'Mangga',
        "Warna" => 'Hijau, Kuning, Oren',
        "Stok"  => 100,
        "Harga" => 25.000,
        "Deskripsi" => 'Buah mangga termasuk kelompok buah batu (drupa) yang berdaging, dengan ukuran dan bentuk yang sangat berubah-ubah bergantung pada macamnya, mulai dari bulat (misalnya mangga gedong), bulat telur (gadung, indramayu, arumanis) hingga lonjong memanjang (mangga golek). ',
    ],
    [
        "Id" => 4,
        "Nama" => 'Anggur',
        "Warna" => 'Ungu, Hijau',
        "Stok"  => 70,
        "Harga" => 55.000,
        "Deskripsi" => 'Anggur (Vitis vinifera L.) merupakan tanaman buah berupa perdu merambat yang termasuk ke dalam keluarga Vitaceae. Tumbuhan ini berbentuk semak, batang berkayu, berbentuk silindris, warna batang kecoklatan, permukaan kasar, arah tumbuh batang memanjat, dan arah tumbuh cabang membelit.',
    ],
    [
        "Id" => 5,
        "Nama" => 'Duku',
        "Warna" => 'Coklat Ke kuningan',
        "Stok"  => 80,
        "Harga" => 15.000,
        "Deskripsi" => 'Buah duku merupakan buah tandan. Berbentuk bulat atau bulat memanjang dengan diameter 2-5 cm. Dalam satu tanda jumlahnya bervariasi. Warna kulit duku ketika muda bewarna hijau dan sudah masak bewarna kuning dan warna buah putih transparan.',
    ],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Array Table Buah</title>
</head>
<body>
  <div class="container">
    <h1 class="text-center mt-5 mb-4">Daftar Buah</h1>
    <table class="table table-striped table-hover">
      <thead class="thead-dark">
        <tr>
          <th>ID</th>
          <th>Nama</th>
          <th>Warna</th>
          <th>Stok</th>
          <th>Harga</th>
          <th>Deskripsi</th>
        </tr>
      </thead>

      <tbody>
        <?php
        foreach ($Fruits as $fruit) {
            echo "<tr>";
               echo "<td>" . $fruit['Id'] . "</td>"; 
               echo "<td>" . $fruit['Nama'] . "</td>"; 
               echo "<td>" .  $fruit['Warna'] . "</td>"; 
               echo "<td>" . $fruit['Stok'] . "</td>"; 
               echo "<td>" . $fruit['Harga'] . "</td>"; 
               echo "<td>" . $fruit['Deskripsi']. "</td>";
               
            echo "</tr>";
        }   
        
        ?>
      </tbody>
    </table>
  </div>
</body>
</html>