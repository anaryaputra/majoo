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

    <!-- STYLES -->
    <link rel="stylesheet" href="<?php echo base_url("public/css/home.css") ?>">

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body class="bg-light bg-gradient">

    <div class="d-flex flex-column" id="page-wrapper">
        <nav class="navbar navbar-expand navbar-dark bg-dark topbar mb-4 px-4 static-top shadow">
            <div class="container-fluid px-4">
                <a class="navbar-brand" href="<?php echo base_url(); ?>">Majoo Teknologi Indonesia</a>
                <a class="btn btn-success rounded-pill px-3" href="<?php echo site_url('login'); ?>">Login</a>
            </div>
        </nav>
        <div class="container-fluid px-4 py-3">
            <h3 class="fw-bold mb-3">Produk</h3>
            <div class="row row-cols-1 row-cols-md-4 gy-4">
                <?php
                foreach ($produk as $produk) {
                ?>
                    <div class="col">
                        <div class="card h-100 shadow">
                            <img class="card-img-top" src="<?php echo base_url("public/images/product") . "/" . $produk['photo'] ?>" alt="majoo Pro">
                            <div class="card-body d-flex flex-column">
                                <h4 class="card-title text-center"><?= $produk['name'] ?></h4>
                                <p class="card-text text-center pt-2"><sup>Rp</sup><strong><?= $produk['price'] ?></strong></p>
                                <p class="card-text"><?= $produk['description']; ?></p>
                                <div class="d-flex justify-content-center align-items-end h-100">
                                    <div class="d-grid col-10">
                                        <a class="btn btn-outline-success rounded-pill" href="https://majoo.id/redirecting/tokopedia" role="button">Beli</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
                <!-- <div class="col">                    
                    <div class="card h-100">
                        <img class="card-img-top" src="<?php echo base_url("public/images/paket-advance.png") ?>" alt="majoo Pro">
                        <div class="card-body d-flex flex-column">
                            <h4 class="card-title text-center">majoo Advance</h4>
                            <p class="card-text text-center pt-2"><sup>Rp</sup><strong>2.750.000</strong></p>
                            <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorum nostrum reprehenderit quo illum velit beatae exercitationem repudiandae? Mollitia nisi eum aut perspiciatis, tempora quibusdam, assumenda natus repellat iure cum sit.</p>
                            <div class="d-flex justify-content-center align-items-end h-100">
                                <div class="d-grid col-10">
                                    <a class="btn btn-outline-success rounded-pill" href="https://majoo.id/redirecting/tokopedia" role="button">Beli</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img class="card-img-top" src="<?php echo base_url("public/images/paket-lifestyle.png") ?>" alt="majoo Pro">
                        <div class="card-body d-flex flex-column">
                            <h4 class="card-title text-center">majoo Lifestyle</h4>
                            <p class="card-text text-center pt-2"><sup>Rp</sup><strong>2.750.000</strong></p>
                            <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                            <div class="d-flex justify-content-center align-items-end h-100">
                                <div class="d-grid col-10">
                                    <a class="btn btn-outline-success rounded-pill" href="https://majoo.id/redirecting/tokopedia" role="button">Beli</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img class="card-img-top" src="<?php echo base_url("public/images/paket-desktop.png") ?>" alt="majoo Pro">
                        <div class="card-body d-flex flex-column">
                            <h4 class="card-title text-center">majoo Desktop</h4>
                            <p class="card-text text-center pt-2"><sup>Rp</sup><strong>2.750.000</strong></p>
                            <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Necessitatibus deleniti ratione labore praesentium vero voluptatum repudiandae sed dolor, nobis totam placeat beatae tempore aliquid odit a eius assumenda voluptatem aperiam?</p>
                            <div class="d-flex justify-content-center align-items-end h-100">
                                <div class="d-grid col-10">
                                    <a class="btn btn-outline-success rounded-pill" href="https://majoo.id/redirecting/tokopedia" role="button">Beli</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
        <footer>
            <div class="d-flex justify-content-center bg-light py-3">
                <span>2019 &copy; PT Majoo Teknologi Indonesia</span>
            </div>
        </footer>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>