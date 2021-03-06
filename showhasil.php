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
              <li class="active"><a  href="Lihatdatajurusan.php">jurusan</a></li>
              <li><a href="lihatdatapendaftar.php">pendaftar</a></li>
              <li><a href="Lihatdatakepsek.php">kepala sekolah</a></li>
              <li><a href="Lihatdatapenguji.php">penguji</a></li>
              <li><a href="Lihatdatahasil.php">hasil</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li class="active"><a href="Pengumuman.php">pengumuman<span class="sr-only">(current)</span></a></li>
               <li><a href="home.php">home</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>
    </div> <!-- /container -->
<body>
  <?php
  include('koneksi.php');
  $id = $_GET['id'];
  $hy = mysqli_query($koneksi,"SELECT * FROM hasils Where id='$id'");
  $data = mysqli_fetch_array($hy);
  ?>

  <h1 align="center"><font color="green">Show Hasil</h1></font>
  <fieldset style="width: 50%; margin: auto;">
    <legend><font color="green">Form Show Hasil</legend></font>
    


     <input type="hidden" name="id" value="<?php echo $data['id'];?>">
   <p>
       <p>
      <div class="input-group input-group-lg">
  <span class="input-group-addon" id="sizing-addon1"  name="nama_pendaftar" placeholder="pendaftar" aria-describedby="sizing-addon1" readonly />Pendaftar</span>
 

  
<select class="form-control "
        <?php
        include('koneksi.php');
        $df = mysqli_query($koneksi, "SELECT * FROM pendaftars");
        ?>
        <select name="nama_pendaftar">
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
  <span class="input-group-addon" id="sizing-addon1"  name="nama_jurusan" placeholder="jurusan" aria-describedby="sizing-addon1" readonly />jurusan</span>
 

  
<select class="form-control "
        <?php
        include('koneksi.php');
        $JR = mysqli_query($koneksi, "SELECT * FROM jurusans");
        ?>
        <select name="nama_jurusan">Pilih jurusan
          <?php
            foreach ($JR as $ki) {
          ?>
          <option value="<?php echo $ki['id'];?>"><?php echo $ki['nama']?></option>
          <?php
            }
          ?>
        </select>
        </div>
      </p>
      <p>
         <div class="input-group input-group-lg">
  <span class="input-group-addon" id="sizing-addon1">nilai_Tpa</span>
        <input type="text" name="TPA" class="form-control" placeholder="nilai_tpa" aria-describedby="sizing-addon1" value="<?php echo $data['nilai_tpa'];?>" readonly />
        </div>
      </p>
      <p>
        <div class="input-group input-group-lg">
  <span class="input-group-addon" id="sizing-addon1">Nilai_Wawancara</span>
        <input type="text" name="WW" class="form-control" placeholder="nilai_wawancara" aria-describedby="sizing-addon1" value="<?php echo $data['nilai_wawancara'];?>" readonly/>
        </div>
      </p>
      <p>
     <div class="input-group input-group-lg">
  <span class="input-group-addon" id="sizing-addon1">Nilai_Uan</span>
        <input type="text" name="uan" class="form-control" placeholder="nilai_uan" aria-describedby="sizing-addon1" value="<?php echo $data['nilai_uan'];?>" readonly />
        </div>
      </p>
      <p>
        <div class="input-group input-group-lg">
  <span class="input-group-addon" id="sizing-addon1">Nilai_minat</span>
        <input type="text" name="minat" class="form-control"  placeholder="nilai_minat" aria-describedby="sizing-addon1" value="<?php echo $data['nilai_minat'];?>" readonly />
        </div>
      </p>
      <p>
      <div class="input-group input-group-lg">
  <span class="input-group-addon" id="sizing-addon1">Nilai_rata</span>
        <input type="text" name="rata" class="form-control" placeholder="nilai_rata" aria-describedby="sizing-addon1" value="<?php echo $data['nilai_rata'];?>" readonly/>
        </div>
      </p>
      <p>
         <div class="input-group input-group-lg">
  <span class="input-group-addon" id="sizing-addon1"  name="nama_penguji" placeholder="penguji" aria-describedby="sizing-addon1" readonly />penguji</span>
 

  
<select class="form-control "
        <?php
        include('koneksi.php');
        $uji = mysqli_query($koneksi, "SELECT * FROM pengujis");
        ?>
        <select name="nama_penguji">Pilih penguji
          <?php
            foreach ($uji as $yu) {
          ?>
          <option value="<?php echo $yu['id'];?>"><?php echo $yu['nama']?></option>
          <?php
            }
          ?>
        </select>
        </div>
      </p>
      <p>
       <div class="input-group input-group-lg">
  <span class="input-group-addon" id="sizing-addon1">tahun_ajaran</span>
        <input type="text" name="ajaran" class="form-control" placeholder="tahun_ajaran" aria-describedby="sizing-addon1" value="<?php echo $data['tahun_ajaran'];?>" readonly/>
        </div>
      </p>
     <p>
        <div class="input-group input-group-lg">
  <span class="input-group-addon" id="sizing-addon1">keterangan</span>
        <input type="text" name="keterangan" class="form-control" placeholder="keterangan" aria-describedby="sizing-addon1" value="<?php echo $data['keterangan'];?>" readonly />
        </div>
      </p>
     
      
      
    </form>
  </fieldset>
  <br/>
  <center><a href="lihatdatahasil.php" class='btn btn-danger' >&Lt; Tabel Biodata</a></center>
</body>
</html>