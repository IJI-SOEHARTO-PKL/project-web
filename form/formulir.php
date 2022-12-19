<?php
include "mysql.php";
if(isset($_POST["submit"])) {
  $uid = $_POST['uid'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $server = $_POST['server_select'];
  $farming = $_POST['farming_select'];
  if($server == 1) {
    $servera = "Amerika";
    $result = mysqli_query($koneksi, "INSERT INTO user VALUES('$uid', '$email', '$password', '$servera')");
    if(!$result) {
      echo "Data gagal ditambahkan";
    }
  } else if($server == 2) {
    $servera = "Europe";
    $result = mysqli_query($koneksi, "INSERT INTO user VALUES('$uid', '$email', '$password', '$servera')");
    if(!$result) {
      echo "Data gagal ditambahkan";
    }
  } else if($server == 3) {
    $servera = "Asia";
    $result = mysqli_query($koneksi, "INSERT INTO user VALUES('$uid', '$email', '$password', '$servera')");
    if(!$result) {
      echo "Data gagal ditambahkan";
    }
  } else if($server == 4) {
    $servera = "TW, HK, MO";
    $result = mysqli_query($koneksi, "INSERT INTO user VALUES('$uid', '$email', '$password', '$servera')");
    if(!$result) {
      echo "Data gagal ditambahkan";
    }
  }
}

?>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/joki.css" />
    <link rel="icon" type="image/x-icon" href="../img/paimon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <title>Option Form</title>
  </head>
  <body style="background-color: #a4b6ef;">
    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
        <a class="navbar-brand ms-5 text-white" href="../index.html">JOKISOEH</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link chs" href="../listJoki.html">LIST JOKI</a>
            </li>
            <li class="nav-item">
              <a class="nav-link chs" href="../about.html">ABOUT US</a>
            </li>
            <li class="nav-item">
              <a class="nav-link chs" href="../testimoni.html">TESTIMONI</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container">
      <div class="header"><h1>Formulir Akun</h1></div>
      <form action="" method="POST">
        <div class="form">
          <hr width="650" />
          <div class="uid">
            <label for="uid">UID Kamu</label><br />
            <input class="uid-text" type="number" name="uid" id="uid" min="0" required/>
          </div>
          <div class="email">
            <label for="email">Email Kamu</label><br />
            <input class="email-text" type="email" name="email" id="email" required/>
          </div>
          <div class="password">
            <label for="password">Passwordnya</label><br />
            <input class="pass-text" type="password" name="password" id="password" required/>
          </div>
          <div class="server">
            <select class="server_select" name="server_select">
              <option selected disabled data-server="Kosong">Server Region</option>
              <option value="1" data-server="Amerika">Amerika</option>
              <option value="2" data-server="Europe">Europe</option>
              <option value="3" data-server="Asia">Asia</option>
              <option value="4" data-server="TW, HK, MO">TW, HK, MO</option>
            </select>
          </div>
          <hr width="650" />
        </div>
        <div class="option">
          <div class="farming">
            <select class="farming_select">
              <option selected disabled value="0" data-price="0" data-farm="Kosong">Pilih Farming</option>
              <option value="1" data-price="200" data-farm="Food Resource">Food Resource</option>
              <option value="2" data-price="200" data-farm="Living Resource">Living Resource</option>
              <option value="3" data-price="200" data-farm="Ores">Ores</option>
              <option value="4" data-price="200" data-farm="Wood">Wood</option>
              <option value="5" data-price="200" data-farm="Enemy Items">Enemy Items</option>
              <option value="6" data-price="200" data-farm="Artifact Fodder">Artifact Fodder</option>
              <option value="7" data-price="200" data-farm="Local Speciality">Local Speciality</option>
            </select>
          </div>
          <div class="quest">
            <select class="quest_select">
              <option selected disabled value="0" data-price="0" data-quest="Kosong">Pilih Quest</option>
              <option value="1" data-price="15000" data-quest="Archon Quest">Archon Quest</option>
              <option value="2" data-price="15000" data-quest="World Quest">World Quest</option>
              <option value="3" data-price="10000" data-quest="Story Quest">Story Quest</option>
              <option value="4" data-price="10000" data-quest="Hangout Quest">Hangout Quest</option>
            </select>
          </div>
          <div class="maintain">
            <select class="maintain_select">
              <option selected disabled value="0" data-price="0" data-maintain="Kosong">Pilih Maintenance</option>
              <option value="1" data-price="8000" data-maintain="Harian">Harian</option>
              <option value="2" data-price="50000" data-maintain="Mingguan">Mingguan</option>
              <option value="3" data-price="200000" data-maintain="Bulanan">Bulanan</option>
            </select>
          </div>
          <div class="total">
            <p id="farm"></p>
            <p id="quest"></p>
            <p id="maintain"></p>
          </div>
          <hr width="650" />
          <div class="harga">
            <p id="total">Total : 0</p>
          </div>
          <div class="note">
            <label for="note">Note:</label><br />
            <textarea class="note-text" cols="30" rows="10"></textarea>
          </div>
          <hr width="650" />
          <div class="submit">
            <button class="submit" name="submit">Order</button>
          </div>
        </div>
      </form>
    </div>
    <div class="bennet"><img src="../img/bennet.png" width="500"/></div>
    <script crossorigin="anonymous" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="../js/formulir.js" type="text/javascript"></script>
  </body>
</html>
