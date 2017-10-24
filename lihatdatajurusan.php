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
            background-color: #3b5998;
            font-size: 17px;
            font-style: arial;
          }
          </style>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li><a  href="Lihatdatajurusan.php">jurusan</a></li>
              <li><a href="lihatdatapendaftar.php">pendaftar</a></li>
              <li><a href="Lihatdatakepsek.php">kepala sekolah</a></li>
              <li><a href="Lihatdatapenguji.php">penguji</a></li>
              <li><a href="Lihatdatahasil.php">hasil</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="Pengumuman.php">pengumuman<span class="sr-only">(current)</span></a></li>
               <li class="active"><a href="home.php">home</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>
    </div> <!-- /container -->
<body>
<center>
<h1><font color="magenta"> Data jurusan</h1></font>
<td><a  class='btn btn-primary' href='tambahjurusan.php?id=$data[id]'>++tambahdata<< </a></td>
<div class="container">
      <div class="row"> 
        <table class="table table-bordered">
          <tr class="success">
<th>nomor</th>
<th>nama</th>
<th>nilai_lulus</th>
<center><th colspan="3">opsi</th></center>
</div>
<?php
include('koneksi.php');
$ma= mysqli_query($koneksi," SELECT * FROM jurusans");
$no=1;
foreach ($ma as $data) {
	echo"<tr>
	<td>$no</td>
	<td>".$data['nama']."</td>
    <td>".$data['nilai_lulus']."</td>
    <td><a class='btn btn-success' href='showjurusan.php?id=$data[id]'>Show</a></td> 
    <td><a class='btn btn-primary' href ='editjurusan.php?id=$data[id]'>Edit</a></td>
    <td><a class='btn btn-danger' href ='deletejurusan.php?id=$data[id]' onclick=\"return confirm ('are you sure want to delete?')\">delete</a></td>
    </tr>";
    $no++;
}
?>

</body>
</table>
</center>
 <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="dist/js/ie10-viewport-bug-workaround.js"></script>
</html>