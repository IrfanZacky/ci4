<html>

<head>
    <title>Tutorial Login Dan Register</title>
</head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

<body>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        <?php
                        $session = session();
                        $login = $session->getFlashdata('login');
                        $username = $session->getFlashdata('username');
                        $password = $session->getFlashdata('password');
                        ?>

                        <h5>Login</h5>

                        <?php if ($username) { ?>
                            <p style="color:red"><?php echo $username ?></p>
                        <?php } ?>

                        <?php if ($password) { ?>
                            <p style="color:red"><?php echo $password ?></p>
                        <?php } ?>

                        <?php if ($login) { ?>
                            <p style="color:green"><?php echo $login ?></p>
                        <?php } ?>

                        <form method="post" action="/auth/valid_login">
                            Username: <br>
                            <input type="text" name="username" required class="form-control"><br>
                            Password: <br>
                            <input type="password" name="password" required class="form-control"><br>
                            <button type="submit" name="login" class="btn btn-primary">Login</button>
                            <p>
                                <a href="/auth/register">Belum punya akun?</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>