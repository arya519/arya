<?php include("config.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pendaftaran Karyawan Baru</title>

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"  
    />

    <link rel="stylesheet" href="list-siswa.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-secondary navbar-dark">
      <div class="container">
          <a class="navbar-brand" href="#">PT SURYA JAYA</a>
          
          <div class="navbar" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                <a class="nav-link text-light" href="index.php">Home</a>
                </li>
            </ul>
          </div>
      </div>
    </nav>




    

    <div class="judul text-center p-4">
        <h4>Nama orang yang sudah mendaftar</h4>
    </div>

    <br>
 
    <div class="tabel-siswa d-flex justify-content-center">
    <table class="tabel_data">
        <thead>
            <tr>
                <th class="border border-1 border-black p-3 bg-black text-white">No</th>
                <th class="border border-1 border-black p-3 bg-black text-white">Nama</th>
                <th class="border border-1 border-black p-3 bg-black text-white">Alamat</th>
                <th class="border border-1 border-black p-3 bg-black text-white">Jenis Kelamin</th>
                <th class="border border-1 border-black p-3 bg-black text-white">Alasan Melamar</th>
                <th class="border border-1 border-black p-3 bg-black text-white">Pesan</th>
               
            </tr>
        </thead>
        <tbody border="1">

            <?php
            $sql = "SELECT * FROM calon_siswa";
            $query = mysqli_query($db, $sql);

            $noUrut = 0;

            while($siswa = mysqli_fetch_array($query)){
                $noUrut++;
                echo "<tr>";
                echo "<td class='border border-1 border-black p-3'>".$noUrut."</td>";
                echo "<td class='border border-1 border-black p-3'>".$siswa['nama']."</td>";
                echo "<td class='border border-1 border-black p-3'>".$siswa['alamat']."</td>";
                echo "<td class='border border-1 border-black p-3'>".$siswa['jenis_kelamin']."</td>";
                echo "<td class='border border-1 border-black p-3'>".$siswa['agama']."</td>";
                echo "<td class='border border-1 border-black p-3'>".$siswa['asal_sekolah']."</td>";

               

                echo "</td>";
            }
            ?>

        </tbody>
    </table>
    </div>

    

    <h5 class="text-center p-5">Total: <?php echo mysqli_num_rows($query) ?></h5>


    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script> 
    <script src="confim.js"></script>

</body>
</html>