<?php 
    require 'config.php';

    if ( $_POST ) {
        
        $name =  $_POST['ad'];
        $mail = $_POST['mail'];
        $pass= $_POST['pass'];

        $id = DB::insert("INSERT INTO users (name,mail,password) VALUES(?,?,?)",array(
            $name,
            $mail,
            $pass
        ));

        header("Location:üyegiris.php?success=1");
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Kayıt Ol</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <!--Custom styles-->
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="container">
    <div class="d-flex justify-content-center h-100">
        <div class="card">
            <div class="card-header">
                <h3>Kayıt Ol</h3>
                <div class="d-flex justify-content-end social_icon">
                </div>
            </div>
            <div class="card-body">
                <form action="" method="POST">
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <input type="text" name="ad" class="form-control" placeholder="İsim Soyisim">
                    </div>
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <input type="text" name="mail" class="form-control" placeholder="Email">
                    </div>
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                        <input type="password" name="pass" class="form-control" placeholder="Şifre">
                    </div>
                    
                    <div class="form-group">
                        <input type="submit" value="Kayıt Ol" class="btn float-right login_btn">
                    </div>
                </form>
            </div>
            <div class="card-footer">
                <div class="d-flex justify-content-center links">
                    <a href="üyegiris.php">Giriş Yap</a>
                </div>
                
            </div>
        </div>
    </div>
</div>
</body>
</html>