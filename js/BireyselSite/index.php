<?php
require_once 'connect.php';
$get=$db->prepare('Select * From kategori  ');
$get->execute();
$rows=$get->fetchAll();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css">

    <link rel="stylesheet" href="./css/style2.css">
    <link rel="stylesheet" href="./css/style.css">

    <meta name="description" content="Free Web tutorials">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="author" content="John Doe">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>
        <div class="uyegiris">
            <ul id="uluye">
                <li><a href="admin/admin.php">Uye Girisi</a></li>
                <li><a href="">Dil Secenegi</a></li>
            </ul>
        </div>

        <div class="ustMenu ">
            <div class="logo">LOGO</div>
            <div class="arama">ARAMA</div>
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


        <div class="Reklam_kategori">
            <div class="kategori">
                        <ul>
                            <?php foreach ($rows as $i){
                                if($i['kategori_id']==0){  ?>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <?php  echo $i['kategori_adi']; ?>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                            <?php
                                            $get2=$db->prepare('Select * From kategori where kategori_id=:kategori_id');
                                            $get2->execute(array('kategori_id'=>$i['tablo_id']));
                                            $rows2=$get2->fetchAll();
                                            foreach ($rows2 as $item) {
                                                echo '<a class="dropdown-item" href="#">'.$item['kategori_adi'].'</a>';
                                            }  ?>
                                        </div>
                                    </li>
                                <?php   } }?>
                        </ul>
            </div>
            <div class="img">
               ><img width="500px"  src="./img/kodline.png" alt="">
            </div>

        </div>



     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="owlcarousel/owl.carousel.min.js"></script>
        <script src="js/script.js"></script>
</body>
</html>