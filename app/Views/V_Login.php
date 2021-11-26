<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Majoo</title>
    <!-- <meta name="description" content="The small framework with powerful features"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="<?php echo base_url("public/images/majoo_logo_icon_3.png"); ?>" />

    <!-- JAVASCRIPT -->
    <!-- JQUERY -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- JQUERY PLUGIN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>

    <!-- STYLES -->
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- CUSTOM -->
    <link rel="stylesheet" href="<?php echo base_url("public/css/login.css") ?>">
</head>

<body class="bg-light bg-gradient">

    <div class="container-fluid" id="main-container">
        <div class="d-flex justify-content-center align-items-center" id="main-flexbox">
            <div class="card w-75 shadow-lg" id="card-1">
                <div class="row g-0">
                    <div class="col-md-6">
                        <div class="d-flex align-items-center justify-content-center h-100">
                            <img class="img-fluid w-50" src="<?php echo base_url("public/images/majoo_logo_icon_2.png") ?>" alt="majoo">
                        </div>
                    </div>
                    <div class="col-md-6 p-4">
                        <div class="card-body h-100">
                            <div id="login">
                                <div class="d-flex flex-column">
                                    <h1 class="card-title text-center">Masuk</h1>
                                    <form class="row g-3" id="form-login" action="javascript:void(0)">
                                        <div class="alert" role="alert" id="login-alert"></div>
                                        <div class="mb-3">
                                            <label for="inputLoginEmail" class="form-label">Email</label>
                                            <input type="email" class="form-control" name="inputLoginEmail" id="inputLoginEmail" placeholder="user@mail.com" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="inputLoginPassword" class="form-label">Password</label>
                                            <input type="password" class="form-control" name="inputLoginPassword" id="inputLoginPassword" required>
                                        </div>
                                        <div class="mb-3">
                                            <button class="btn btn-success rounded-pill w-100" id="login-btn" type="submit">Masuk</button>
                                        </div>
                                    </form>
                                    <div class="align-self-center">
                                        <p class="text-center">Belum punya akun? <a class="text-decoration-none text-muted fw-bold" id="signup-link" role="button">Daftar di sini</a></p>
                                    </div>
                                </div>
                            </div>
                            <div id="signup">
                                <div class="d-flex flex-column">
                                    <h1 class="card-title text-center">Daftar</h1>
                                    <form class="row g-3" id="form-signup" action="javascript:void(0)">
                                        <div class="alert" role="alert" id="signup-alert"></div>
                                        <div class="mb-3">
                                            <label for="inputSignupEmail" class="form-label">Email</label>
                                            <input type="email" class="form-control" name="inputSignupEmail" id="inputSignupEmail" placeholder="user@mail.com" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="inputSignupPassword" class="form-label">Password</label>
                                            <input type="password" class="form-control" name="inputSignupPassword" id="inputSignupPassword" required minlength="8">
                                        </div>
                                        <div class="mb-3">
                                            <label for="inputSignupPasswordConfirmation" class="form-label">Konfirmasi Password</label>
                                            <input type="password" class="form-control" name="inputSignupPasswordConfirmation" id="inputSignupPasswordConfirmation" required>
                                        </div>
                                        <div class="mb-3">
                                            <button class="btn btn-success rounded-pill w-100" id="signup-btn" type="submit">Daftar</button>
                                        </div>
                                    </form>
                                    <div class="align-self-center">
                                        <p class="text-center">Sudah punya akun? <a class="text-decoration-none text-muted fw-bold" id="login-link" role="button">Masuk di sini</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- CUSTOM -->
    <script src="<?php echo base_url("public/js/login-validation.js") ?>"></script>
    <script src="<?php echo base_url("public/js/login.js") ?>"></script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>