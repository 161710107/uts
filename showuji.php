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
$id   = $_GET['id'];
$mhs  = mysqli_query ($koneksi,"SELECT * FROM pengujis WHERE id='$id'");
$data = mysqli_fetch_array ($mhs);
?>
<center><h3><font color="magenta">Show Data penguji</h3></center></font>
<fieldset style="width: 50%; margin: auto;">
<legend><font color="magenta">Form Show penguji</legend></font>
<input type="hidden" name="id" value="<?php echo $data['id'];?>">
<p>
<div class="input-group input-group-lg">
  <span class="input-group-addon" id="sizing-addon1">Nama</span>
<input type ="text" name="nama" class="form-control" value="<?php echo $data['nama'];?>" placeholder="nama" aria-describedby="sizing-addon1" readonly/>
</div>
</p>
<p>
<div class="input-group input-group-lg">
  <span class="input-group-addon" id="sizing-addon1">jabatan</span>
  <input type ="text" name="jabatan" class="form-control" value="<?php echo $data['jabatan'];?>" placeholder="jabatan" aria-describedby="sizing-addon1"  readonly />
  </div>
</p>
</fieldset>
<br /><center><a href="lihatdatapenguji.php"  class='btn btn-danger' >&Lt;  Lihat Data</a></center>
</body>
</html>