<?
error_reporting(0);
?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/src/img/favicon.ico">
    <title>Super Desafio - Login</title>

    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <link href="./css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">
        <div>
            <h2 class="text-center p-0 mt-5 fw-bold color-light">Super</h2>
        </div>
        <div class="row justify-content-center">

            <div class="col-md-6">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col">
                                <div class="p-5">
                                    
                                    <? if ($_GET['report'] === 'client-off') { ?>
                                        <div class="btn btn-danger btn-user btn-block text-left mb-3">Senha inválida</div>
                                    <? } ?>

                                    <form class="user" action="../backend/session/auth.php" method="post">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" id="login" name="login" autocomplete="on" placeholder="Nome de usuário">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" id="password" name="password" autocomplete="on" placeholder="Senha">
                                        </div>

                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Entrar
                                        </button>
                                    </form>

                                    <hr>

                                    <div class="text-center">
                                        <a class="small" href="forgot-password.html">Recuperar senha</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <script src="./js/sb-admin-2.min.js"></script>

</body>

</html>