<?php

if (isset($_SESSION['membre'])) {
    header("Location:index.php?page=dashboard");
}

?>


<?php
if (isset($_POST['submit'])) {
    $email = htmlspecialchars(trim($_POST['email']));
    $password = trim($_POST['password']);

    $errors = [];
    $_SESSION['email'] = $email;

    if(isset($_POST['rememberme'])){
        setcookie('email', $email,time()+365*24*3600,null,null,false,true);
    }

    if (empty($email) || empty($password)) {
        $errors['empty'] = "Tous les champs n'ont pas été remplis!";
    } else if (is_user($email, $password) == 0) {
        $errors['exist'] = "Cet administrateur n'existe pas ou mot de passe incorrect";
    }

    if (!empty($errors)) {
?>
<div class="card red">
    <div class="card-content white-text">
        <?php
                foreach ($errors as $error) {
                    echo ('<div class="alert alert-danger" role="alert">
                    ' . $error . '
                  </div>');
                }
                ?>
    </div>
</div>
<?php
    } else {
        $_SESSION['membre'] = $email;
        header("Location:index.php?page=dashboard");
    }
}


?>

<div class="container">
    <div class="row">
        <div class="col m-auto">
            <p>Vous n'êtes pas obligé de vous inscrire:</p>
            <p>E-mail: "test@test.com"</p>
            <p>Password: "test1234"</p>

            <a href="index.php?page=inscription"><button class="btn btn-primary">S'inscrire</button></a>
        </div>
        <div class="col">

            <h4 class="center-align">Se connecter</h4>

            <img src="https://img.icons8.com/plasticine/100/000000/conference.png" />

            <form method="post">
                <div class="form-group">
                    <label for="exampleInputEmail1">E-mail</label>
                    <input id="email" type="email" name="email" class="form-control" id="exampleInputEmail1 email"
                        aria-describedby="emailHelp">
                    <small id="emailHelp" class="form-text text-muted">Nous ne partagerons jamais votre e-mail avec qui que ce soit
                        d'autre part.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input id="password" type="password" name="password" class="form-control" id="exampleInputPassword1 password">
                </div>
                <button id="submit" onclick="connecter()" type="submit" name="submit" class="btn btn-primary">Se connecter</button>
                <br>
                <br>
                <button type="button" onclick="guest()" value="test" class="btn btn-primary">Se connecter en tant qu'invité</button>
                <br>
                <div><input type="checkbox" name="rememberme" id="remembercheckbox" >
                    <label for="remembercheckbox">Se souvenir de mon mail!</label>
            </form>
            
        </div>
    </div>

</div>
</div>
</div>