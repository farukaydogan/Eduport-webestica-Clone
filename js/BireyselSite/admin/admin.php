<?php
require_once '../connect.php';

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css">

    <link rel="stylesheet" href="../css/style.css">
    <meta name="description" content="Free Web tutorials">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="author" content="John Doe">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>

<div class="ustMenu ">
    <div class="logo">LOGO</div>
    <div class="arama">Admin Paneli (Icerik Yonetim Paneli)</div>
    <div class="sepet">SEPET FAVORILER</div>
</div>


<nav class="navbar navbar-expand-lg  navbar-custom" >

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="#">Ana Sayfa</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Gunun Firsati</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Cok Satanlar</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Yeni Urunler</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Kampanyalar</a>
            </li>
        </ul>
    </div>
</nav>

<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Adi</th>
        <th scope="col">Adet</th>
        <th scope="col">Fiyat</th>
        <th scope="col">Altina Baslik Ekle</th>
        <th scope="col">Sil</th>
        <th scope="col">Duzenle</th>

        <th scope="col">Gorunmez Yap</th>
    </tr>
    </thead>
    <tbody>

    <?php
    $result = $db->query('Select * from urun ');
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) { ?>
    <tr> <?php
        echo "<th>".$row['urun_id']."</th>";
        echo "<th>".$row['urun_ad']."</th>";
        echo "<th>".$row['urun_adet']."</th>";
        echo "<th>".$row['urun_fiyat']."</th>";
        echo "<th><button><a >Altina Baslik Ekle</a></button>.</th>";
        echo "<th><button  onclick='del(".$row['urun_id'].",'.".$row['urun_ad'].".'))' ><a>Sil</a></button></th>";
        echo "<th><button><a href='edit.php?id=".$row['urun_id']."&duzenle=true'>Duzenle</a></button></th>";
        echo "<th><button onclick='infinty(".$row['urun_id'].")' ><a>Gorunmez Yap  ".$row['urun_gorunmez']." </a></button></th>";
        }
        ?>
    </tr>
    </tbody>
</table>

<script>

    function infinty(urun_id){
        window.location.href='edit.php?gorunmez='+urun_id;
    }
    function del(urun_id,urun_ad){

        if (confirm(urun_id+'-'+urun_ad+" Silinsin mi") ) {
            window.location.href = 'edit.php?sil='+urun_id;
        } else {

        }
    }
</script>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="owlcarousel/owl.carousel.min.js"></script>
<script src="../js/script.js"></script>
</body>
</html>