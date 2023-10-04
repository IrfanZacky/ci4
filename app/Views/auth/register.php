<html>

<head>
    <title>Tutorial Login Dan Register</title>
</head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

<body>
    <?php
    $session = session();
    $error = $session->getFlashdata('error');
    ?>

    <?php if ($error) { ?>
        <p style="color:red">Terjadi Kesalahan:
        <ul>
            <?php foreach ($error as $e) { ?>
                <li><?php echo $e ?></li>
            <?php } ?>
        </ul>
        </p>
    <?php } ?>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-6">
                <div class="card">
                    <div class="card-body">


                        <h5>Register</h5>
                        <form method="post" action="/auth/valid_register">
                            Username: <br>
                            <input type="text" name="username" required class="form-control"><br>
                            Password: <br>
                            <input type="password" name="password" required class="form-control"><br>
                            Konfirmasi Password: <br>
                            <input type="password" name="confirm" required class="form-control"><br>
                            <button type="submit" name="login" class="btn btn-primary  ">Register</button>
                        </form>
                        <p>
                            <a href="/auth/login">Sudah punya akun?</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>