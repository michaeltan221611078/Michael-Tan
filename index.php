<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" >
    <title>BOX MOVIES</title>
   
</head>
<body>
<?php
        if(isset($_POST['cari'])){
            $judul = $_POST['judul'];
            echo "<h1>Hasil Pencarian</h1>";
        
            $url = 'http://www.omdbapi.com/?apikey=b893c632&s="'.$judul.'"';

           //Akses API dengan CURL
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            $output = curl_exec($ch);
            curl_close($ch);

            // var_dump($output);
            $data = json_decode($output, TRUE);
            // $data = $data['Search'];
            
            foreach ($data['Search'] as $movie) {
                
                echo "\n <p>Judul: ".$movie["Title"]."</p>";
                echo "<p>Tahun: ".$movie["Year"]."</p>";
                echo '<img src= "'.$movie['Poster'].'">';
            }    
        }

        ?> 
        
  <header>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

  <h3>BOX MOVIES</h3>
    <form method="post" action="index.php">
        <input type="text" name="judul"></input>
        <input type="submit" value="pencarian" name="cari"></input>
     
    </form>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>  
      </ul>
    </div>
  </div>
</nav>
</header>
<div class="container-new" style="background-image:url('55.jpg')";>

<div class="container">
<div class="row mt-3 text-center">
  <div class="col">
<h1>TOP MOVIE</h1>
</div>
</div>

    
<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card">
      <img src="10.jpg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">Spider-Man: Far from Home (2019)
</h5>
        <p class="card-text"> Setelah sibuk membantu kepolisian New York, Peter Parker memutuskan untuk tidak membawa kostumnya saat ia melakukan perjalanan dengan teman-teman sekolahnya. Namun ancaman datang dalam bentuk yang berbeda ketika teror mulai menyerang kota-kota yang Peter kunjungi di Eropa.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="11.jpg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">Terminator: Dark Fate (2019)</h5>
        <p class="card-text">Setelah lebih dari dua dekade, Sarah Connor dan T-800 akan membantu Graze, manusia prajurit yang datang dari masa depan untuk melindungi Daniella, wanita muda yang menjadi target dari terminator baru dari masa depan, Rev-9.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="12.JPG" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">Rampage (2018)</h5>
        <p class="card-text">Film Rampage merupakan film yang diadaptasi dari video game dengan judul yang sama. Rampage menceritakan Seorang ahli Primatologist Davis Okoye yang mempunyai hubungan dan ikatan yang kuat dengan seekor gorilla bernama George. Gorilla tersebut kemudian terlibat dalam sebuah eksperimen genetic yang cukup berbahaya.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="7.jpg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">Shang Chi and the Legend of Ten Rings (2021)</h5>
        <p class="card-text">Cerita Shang Chi and the Legend of Ten Rings bermula dari legenda sepuluh gelang ajaib yang mampu memberikan kekuasaan dan kekuatan yang tak terhingga pada pemegangnya.
</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="8.jpg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">Extraction (2020)</h5>
        <p class="card-text">Film ini menceritakan tentang Tyler Rake, seorang tentara bayaran di pasar gelap yang ditugaskan untuk menyelamatkan Ovi, seorang anak dari penguasa narkoba terbesar di India.

Misi penyelamatan ini berlangsung di Bangladesh di mana Ovi ditahan sebagai tebusan oleh bandar narkoba terbesar di sana.

Film garapan Sam Hargrave ini dibintangi oleh Chris Hemsworth, Rudhraksh Jaiswal, dan Randeep Hooda.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="9.jpg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title"> Avengers: Endgame (2019)</h5>
        <p class="card-text">Avengers: Endgame melanjutkan cerita setelah peristiwa Infinity War, dimana alam semesta hancur akibat ulah Titan, Thanos.

Dengan bantuan sekutu yang tersisa, Avengers harus berkumpul sekali lagi untuk membatalkan tindakan Thanos. Dan mengembalikan keteraturan alam semesta kembali untuk semua.</p>
      </div>
    </div>
  </div>
      </div>
    </div>
   
   
  

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
