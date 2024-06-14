<!DOCTYPE html>
<html lang="en">
<head>
    <title>Formulir Pendaftaran Karyawan Baru</title>

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />

    <link rel="stylesheet" href="form-daftar.css">


</head>
<body>
    <nav class="navbar navbar-expand-lg bg-secondary navbar-dark">
      <div class="container">
          <a class="navbar-brand" href="#">Form Pendaftaraan Karyawan Baru</a>
          
          <div class="navbar" id="navbarNav">
            <ul class="navbar-nav ms-auto text-light">
              <li class="nav-item">
                <a class="nav-link text-light" href="index.php">Home</a>
              </li>
            </ul>
          </div>
      </div>
    </nav>

    <section id="form" class="pb-4" style="width:100%;min-height:100vhbackground-image: url('banner_tentangkami.jpg');background-repeat: no-repeat;background-size:cover;background-position:center;">
    <br><br>
    <div class="container w-100 text-dark">
      
      <div class="row justify-content-center" data-aos="fade-up"  
      data-aos-duration="1300">
        <div class="col-md-6 pe-4 ps-4">
          <form action="proses-pendaftaran.php"
          method="POST">
            <div class="mb-3"> 
              <label for="nama" class="form-label">Nama lengkap</label>
              <input name="nama" type="name" class="form-control" id="nama" required <br>
              <aria-describedby="nama">
            </div>
            <div class="mb-3">
              <label for="alamat" class="form-label">Alamat</label>
              <textarea name="alamat" class="form-control input" id="alamat" required rows="3"
              style="box-shadow: 0px 0px 10px #ccc;" placeholder=""></textarea>
            </div>
            <div class="mb-3">
              <label for="jenis_kelamin" class="form-label">Jenis kelamin</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="jenis_kelamin" value="Laki-laki" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                    laki-laki
                </label>
                </div>
                <div class="form-check">
                <input class="form-check-input" type="radio" name="jenis_kelamin" value="Perempuan" id="flexRadioDefault2" checked>
                <label class="form-check-label" for="flexRadioDefault2">
                    perempuan
                </label>
                </div>
            </div>
            <div class="mb-3">
            <label for="agama" class="form-label">Alasan Melamar pekerjaan</label>
              <input name="agama" type="text" class="form-control" id="agama" required 
              aria-describedby="agama">
            </div>
            <div class="mb-3">
              <label for="asal_sekolah" class="form-label">PESAN</label>
              <input name="asal_sekolah" type="text" class="form-control" id="asal_sekolah" required 
              aria-describedby="asal_sekolah">
            </div>

            
            <div id="liveAlertPlaceholder"></div>
            <input class="btn btn-outline-primary" type="submit" value="Daftar" name="daftar" id="liveAlertBtn">
          </form>
        </div>
      </div>
    </div>
    <br>
  </section>


  

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>

    
</body>
</html>
