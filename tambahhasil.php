<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Jumbotron Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="jumbotron.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="dist/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    </head>
<body>
<body>

    <div class="container">

      <!-- Static navbar -->
      <nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>
          <style type="text/css">
          .navbar-inverse{
            background-color: #f9e;
            font-size: 17px;
            font-style: arial;
          }
          </style>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li ><a  href="Lihatdatajurusan.php">jurusan</a></li>
              <li><a href="lihatdatapendaftar.php">pendaftar</a></li>
              <li><a href="Lihatdatakepsek.php">kepala sekolah</a></li>
              <li><a href="Lihatdatapenguji.php">penguji</a></li>
              <li class="active"><a href="Lihatdatahasil.php">hasil</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="Pengumuman.php">pengumuman<span class="sr-only">(current)</span></a></li>
               <li><a href="home.php">home</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>
    </div> <!-- /container -->
<body>
  <h1 align="center"><font color="green">Input Hasil</h1></font>
  <fieldset style="width: 50%; margin: auto;">
    <legend><font color="green">Form Input Hasil</legend></font>
    <form action="simpanhasil.php" method="post">
    <?php
      include('koneksi.php');

      $mhs  = mysqli_query($koneksi,"SELECT * FROM hasils WHERE id");

    ?>
     <p>
      <div class="input-group input-group-lg">
  <span class="input-group-addon" id="sizing-addon1"  name="nama_pendaftar" placeholder="pendaftar" aria-describedby="sizing-addon1" required />Pendaftar</span>
 

  
<select class="form-control "
        <?php
        include('koneksi.php');
        $df = mysqli_query($koneksi, "SELECT * FROM pendaftars");
        ?>
        <select name="nama_pendaftar">Pilih pendaftar
          <?php
            foreach ($df as $aku) {
          ?>
          <option value="<?php echo $aku['id'];?>"><?php echo $aku['nama']?></option>
          <?php
            }
          ?>
        </select>
        </div>
      </p>
      <p>
      <div class="input-group input-group-lg">
  <span class="input-group-addon" id="sizing-addon1"  name="nama_jurusan" placeholder="jurusan" aria-describedby="sizing-addon1" required />jurusan</span>
 

  
<select class="form-control "
        <?php
        include('koneksi.php');
        $JR = mysqli_query($koneksi, "SELECT * FROM jurusans");
        ?>
        <select name="nama_jurusan">Pilih jurusan
          <?php
            foreach ($JR as $data) {
          ?>
          <option value="<?php echo $data['id'];?>"><?php echo $data['nama']?></option>
          <?php
            }
          ?>
        </select>
        </div>
      </p>
     <p>
        <div class="input-group input-group-lg">
  <span class="input-group-addon" id="sizing-addon1">nilai_Tpa</span>
  <input type="text" name="TPA" class="form-control" placeholder="nilai_tpa" aria-describedby="sizing-addon1" required />
  </div>
      </p>
      <p>
        <div class="input-group input-group-lg">
  <span class="input-group-addon" id="sizing-addon1">Nilai_Wawancara</span>
  <input type="text" name="WW" class="form-control" placeholder="nilai_wawancara" aria-describedby="sizing-addon1" required />
  </div>
      </p>
      <p>
        <div class="input-group input-group-lg">
  <span class="input-group-addon" id="sizing-addon1">Nilai_Uan</span>
  <input type="text" name="uan" class="form-control" placeholder="nilai_uan" aria-describedby="sizing-addon1" required />
  </div>
      </p>
       <p>
        <div class="input-group input-group-lg">
  <span class="input-group-addon" id="sizing-addon1">Nilai_minat</span>
  <input type="text" name="minat" class="form-control" placeholder="nilai_minat" aria-describedby="sizing-addon1" required />
  </div>
      </p>
      <p>
       <div class="input-group input-group-lg">
  <span class="input-group-addon" id="sizing-addon1"  name="nama_penguji" placeholder="penguji" aria-describedby="sizing-addon1" required />penguji</span>
 

  
<select class="form-control "
        <?php
        include('koneksi.php');
        $uji = mysqli_query($koneksi, "SELECT * FROM pengujis");
        ?>
        <select name="nama_penguji">Pilih penguji
          <?php
            foreach ($uji as $data) {
          ?>
          <option value="<?php echo $data['id'];?>"><?php echo $data['nama']?></option>
          <?php
            }
          ?>
        </select>
        </div>
      </p>
      <p>
        <div class="input-group input-group-lg">
  <span class="input-group-addon" id="sizing-addon1">tahun_ajaran</span>
  <input type="text" name="ajaran" class="form-control" placeholder="tahun_ajaran" aria-describedby="sizing-addon1" required />
  </div>
      </p>
        

      <p>
        <?php
        include('koneksi.php');
        $JR = mysqli_query($koneksi, "SELECT * FROM jurusans");
        ?>
        <?php
       
            foreach ($JR as $data) {
          ?>
          <input type="hidden" name="nilai_lulus" value="<?php echo $data['nilai_lulus'];?>" required /> 
          <?php
            }
          ?>
      </p>
      
      <p>
<input type="submit" class='btn btn-success'  value="simpan" />
<input type="reset" class='btn btn-danger' value="reset" onclick="return confirm('hapus data yang telah diinput ')" />
</p>

    
    </form>
  </fieldset>
  <br/>
  <center><a href="lihatdatahasil.php" class='btn btn-danger' >&Lt; Tabel Biodata</a></center>
</body>
</html>