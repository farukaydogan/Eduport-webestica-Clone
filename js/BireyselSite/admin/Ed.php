
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
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
<div class="container">

    <form onsubmit="return func()" method="post" name="form">
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="text" name="email" class="form-control" id="exampleInputEmail1" placeholder="email">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="text" name="pass" class="form-control" id="exampleInputPassword1"
                   placeholder="Password">
        </div>

        <div class="form-group">
            <label for="exampleInputPassword2">Password2</label>
            <input type="text" name="pass2" class="form-control" id="exampleInputPassword2"
                   placeholder="Password Tekrar giriniz">
        </div>

        <div class="form-group">
            <label id="Sum">Iki Sayi Toplamini Giriniz </label>
            <input type="text" name="summer" class="form-control w-25" placeholder="Iki Sayi Toplamini Giriniz">
        </div>
        <div class="form-group">
            <input class="form-control" type="submit" class="btn btn-primary" value="Submit">
            <input class="form-control" type="text" name="hidden">
        </div>

    </form>

</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
<script src="../js/script.js"></script>
<script>

    var hidden = document.forms["form"]["hidden"];
    hidden.style.display = 'none';
    hidden.style.color = 'red';
    var s1 = Math.floor(Math.random() * 10) + 1;
    var s2 = Math.floor(Math.random() * 10) + 1;
    document.getElementById('Sum').innerHTML += s1 + '+' + s2;
    var deger=0;

    function func() {
        var emaill = document.forms["form"]["email"];
        var passwordd = document.forms["form"]["pass"];
        var password22 = document.forms["form"]["pass2"];
        var hiddenn = document.forms["form"]["hidden"];
        var summerr = document.forms["form"]["summer"];

        if (document.forms["form"]["email"].value == '') {
            document.forms["form"]["email"].style.borderColor = "red";
            document.forms["form"]["hidden"].style.display = 'block';
            document.forms["form"]["hidden"].value = 'Lutfen Email giriniz';
            deger=1;
        }
        else{
            document.forms["form"]["email"].style.borderColor = "";
            document.forms["form"]["hidden"].style.display = 'none';
        }
        if (document.forms["form"]["pass"].value == "" || document.forms["form"]["pass2"].value == "") {
            document.forms["form"]["pass"].style.borderColor = "red";
            document.forms["form"]["pass2"].style.borderColor = "red";
            document.forms["form"]["hidden"].style.display = 'block'
            document.forms["form"]["hidden"].value = 'Lutfen Sifre Giriniz';
            deger=1;
        }

        if (document.forms["form"]["pass"].value != document.forms["form"]["pass2"].value) {
            document.forms["form"]["pass"].style.borderColor = "red";a
            document.forms["form"]["pass2"].style.borderColor = "red";
            document.forms["form"]["hidden"].style.display = 'block'
            document.forms["form"]["hidden"].value = 'Lutfen Sifreleri Ayni Giriniz';
            deger=1;

        }
        else {
            document.forms["form"]["hidden"].style.display = 'none';
        }
        if (s1+s2!= document.forms["form"]["summer"].value){
            document.forms["form"]["summer"].style.borderColor = "red";
            document.forms["form"]["hidden"].style.display = 'block'
            document.forms["form"]["hidden"].value = 'Lutfen Dogrulamayi Dogru Giriniz';
            deger=1;

        }
        if (deger==1){
            return false;
        }

    }

</script>

</body>
</html>
