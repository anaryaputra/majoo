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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>


    <!-- CUSTOM -->
    <script src="<?php echo base_url("public/js/dashboard-validation.js") ?>"></script>
    <script src="<?php echo base_url("public/js/dashboard.js") ?>"></script>

    <!-- STYLES -->
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- CUSTOM -->
    <link rel="stylesheet" href="<?php echo base_url("public/css/dashboard.css") ?>">
</head>

<body class="bg-light bg-gradient">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <div class="row">

            <!-- Sidebar -->
            <div class="col-md-2 bg-dark p-3">
                <div class="d-flex flex-column" id="sidebar-wrapper">
                    <a class="sidebar-brand text-center" href="<?php echo site_url('dashboard'); ?>">
                        <img class="img-fluid w-50" src="<?php echo base_url("public/images/majoo_logo_icon_7.png"); ?>" alt="majoo">
                    </a>
                    <hr class="border border-1">
                    <ul class="nav nav-pills flex-column mb-auto">
                        <li class="nav-item">
                            <a class="btn nav-link active text-center" aria-current="page">
                                <div class="d-flex flex-column">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-display mx-auto" viewBox="0 0 16 16">
                                        <path d="M0 4s0-2 2-2h12s2 0 2 2v6s0 2-2 2h-4c0 .667.083 1.167.25 1.5H11a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1h.75c.167-.333.25-.833.25-1.5H2s-2 0-2-2V4zm1.398-.855a.758.758 0 0 0-.254.302A1.46 1.46 0 0 0 1 4.01V10c0 .325.078.502.145.602.07.105.17.188.302.254a1.464 1.464 0 0 0 .538.143L2.01 11H14c.325 0 .502-.078.602-.145a.758.758 0 0 0 .254-.302 1.464 1.464 0 0 0 .143-.538L15 9.99V4c0-.325-.078-.502-.145-.602a.757.757 0 0 0-.302-.254A1.46 1.46 0 0 0 13.99 3H2c-.325 0-.502.078-.602.145z" />
                                    </svg>
                                    <span>Produk</span>
                                </div>
                            </a>
                        </li>
                        <hr class="border border-1">
                        <li class="nav-item">
                            <a class="btn nav-link text-center px-0 text-white" id="logout-link">
                                <div class="d-flex flex-column">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-left mx-auto" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z" />
                                        <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z" />
                                    </svg>
                                    <span>Log Out</span>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- End of Sidebar -->

            <!-- Page -->
            <div class="col-md-10 p-0">
                <div class="d-flex flex-column" id="page-wrapper">
                    <!-- Navbar -->
                    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 px-4 static-top shadow">
                        <div class="d-flex flex-row-reverse w-100">
                            <!-- Sidebar Toggle (Topbar) -->
                            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                                <i class="fa fa-bars"></i>
                            </button>
                            <!-- Topbar Navbar -->
                            <ul class="navbar-nav ml-auto">
                                <!-- Nav Item - User Information -->
                                <li class="nav-item dropdown no-arrow">
                                    <a class="nav-link" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $account['email']; ?></span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <!-- End of Navbar -->

                    <!-- Content -->
                    <div class="container-fluid" id="content-wrapper">
                        <!-- Product List -->
                        <div class="d-flex flex-column mb-4" id="product-list-wrapper">
                            <div class="card shadow-sm">
                                <div class="card-body">
                                    <h1 class="h3 mb-4 fw-bold card-title">Daftar Produk</h1>
                                    <div class="row g-3">
                                        <div class="col-md-8">
                                            <div class="d-flex justify-content-between">
                                                <select class="form-select form-select-sm me-3" name="category" id="select-category" aria-label="product category">
                                                    <option selected>--Kategori Produk--</option>
                                                    <option value="paket berlangganan">Paket Berlangganan</option>
                                                    <option value="paket mesin kasir">Paket Mesin Kasir</option>
                                                    <option value="perangkat tambahan">Perangkat Tambahan</option>
                                                </select>
                                                <button class="btn btn-outline-secondary" id="select-category-btn">Tampilkan</button>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="d-flex justify-content-end">
                                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add-product-modal">Tambah Produk</button>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="border border-1">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Nama</th>
                                                    <th scope="col">Kategori</th>
                                                    <th scope="col">Deskripsi</th>
                                                    <th scope="col">Harga</th>
                                                    <th scope="col">Opsi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $rowNumber = 1;
                                                foreach ($produk as $row) {
                                                ?>
                                                    <tr>
                                                        <th scope="row"><?= $rowNumber++; ?></th>
                                                        <td><?= $row['name']; ?></td>
                                                        <td class="text-capitalize"><?= $row['category']; ?></td>
                                                        <td><?= $row['description']; ?></td>
                                                        <td><?= "Rp " . $row['price']; ?></td>
                                                        <td><button type="button" class="btn btn-info show-photo-btn" value="<?= $row['photo']; ?>" data-bs-toggle="modal" data-bs-target="#product-photo-modal">Tampilkan Foto</button></td>
                                                    </tr>
                                                <?php
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                        <div class="d-flex justify-content-center">
                                            <?= $pager->links('produk', 'bootstrap_pagination'); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End of Product List -->

                        <!-- Product Category -->
                        <div class="d-flex flex-column" id="product-category-wrapper">
                            <div class="card shadow-sm">
                                <div class="card-body">
                                    <h1 class="h3 mb-4 fw-bold card-title">Kategori Produk</h1>
                                    <div class="row g-3">
                                        <div class="col-md-8">
                                            <div class="d-flex justify-content-start">
                                                <input class="form-control me-3" type="text" name="searchCategory" id="searchCategory" placeholder="Cari kategori produk">
                                                <button class="btn btn-outline-secondary" id="search-category-btn">Cari</button>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="d-flex justify-content-end">
                                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add-category-modal">Tambah Kategori</button>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="border border-1">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col" class="text-center">#</th>
                                                    <th scope="col" class="text-center">Kategori</th>
                                                    <th scope="col" class="text-center">Opsi</th>
                                                </tr>
                                            </thead>
                                            <tbody id="category-tbody">
                                                <?php
                                                $rowNumber = 1;
                                                foreach ($kategori as $row) {
                                                ?>
                                                    <tr>
                                                        <th scope="row" class="text-center"><?= $rowNumber++; ?></th>
                                                        <td class="text-center" id="category-<?= $row['id']; ?>"><?= $row['category']; ?></td>
                                                        <td>
                                                            <div class="d-flex flex-row justify-content-center">
                                                                <button type="button" class="btn btn-success update-category-btn me-2" value="<?= $row['id']; ?>" data-bs-toggle="modal" data-bs-target="#update-category-modal">Perbarui Kategori</button>
                                                                <button type="button" class="btn btn-danger delete-category-btn ms-2" value="<?= $row['id']; ?>" data-bs-toggle="modal" data-bs-target="#delete-category-modal">Hapus Kategori</button>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                <?php
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                        <div class="d-flex justify-content-center">
                                            <?= $pager->links('produk', 'bootstrap_pagination'); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End of Product Category -->

                    </div>
                    <!-- End of Content -->

                    <!-- Modal -->
                    <!-- Add Product Modal -->
                    <div class="modal fade" id="add-product-modal" tabindex="-1" aria-labelledby="add-product-modal" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="add-product-modal-label">Tambah Produk</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form class="row g-3" id="form-add-product" action="javascript:void(0)">
                                        <div class="mb-3">
                                            <label class="form-label" for="inputProductName">Nama Produk</label>
                                            <input class="form-control" type="text" name="inputProductName" id="inputProductName" placeholder="Nama produk harus unik." required>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="inputProductCategory">Kategori Produk</label>
                                            <select class="form-select" name="inputProductCategory" id="inputProductCategory" aria-label="product category" required>
                                                <option value="" selected>--Kategori Produk--</option>
                                                <option value="paket berlangganan">Paket Berlangganan</option>
                                                <option value="paket mesin kasir">Paket Mesin Kasir</option>
                                                <option value="perangkat tambahan">Perangkat Tambahan</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="inputProductDescription">Deskripsi Produk</label>
                                            <textarea class="form-control" name="inputProductDescription" id="inputProductDescription" required></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="inputProductPrice">Harga Produk</label>
                                            <input class="form-control" type="number" name="inputProductPrice" id="inputProductPrice" required>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="inputProductPhoto">Foto Produk</label>
                                            <input class="form-control" type="file" name="inputProductPhoto" id="inputProductPhoto" required>
                                        </div>
                                        <hr class="border border-1">
                                        <div class="progress" id="add-product-progress">
                                            <div id="add-product-progress-bar" class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%</div>
                                        </div>
                                        <div class="alert" role="alert" id="add-product-alert"></div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of Add Product Modal -->

                    <!-- Product Photo Modal -->
                    <div class="modal fade" id="product-photo-modal" tabindex="-1" aria-labelledby="product-photo-modal" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="product-photo-modal-label">Foto Produk</h5>
                                </div>
                                <div class="modal-body">
                                    <div class="d-flex justify-content-center align-items-center">
                                        <img class="img-fluid" id="product-photo" src="" alt="product-photo">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of Product Photo Modal -->

                    <!-- Add Category Modal -->
                    <div class="modal fade" id="add-category-modal" tabindex="-1" aria-labelledby="add-category-modal" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-md">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="add-category-modal-label">Tambah Kategori</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form class="row g-3" id="form-add-category" action="javascript:void(0)">
                                        <div class="mb-3">
                                            <label class="form-label" for="inputCategoryName">Nama Kategori</label>
                                            <input class="form-control" type="text" name="inputCategoryName" id="inputCategoryName" placeholder="Nama kategori harus unik." required>
                                        </div>
                                        <hr class="border border-1">
                                        <div class="alert" role="alert" id="add-category-alert"></div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of Add Category Modal -->

                    <!-- Update Category Modal -->
                    <div class="modal fade" id="update-category-modal" tabindex="-1" aria-labelledby="update-category-modal" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-md">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="update-category-modal-label">Perbarui Kategori</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form class="row g-3" id="form-update-category" action="javascript:void(0)">
                                        <div class="mb-3">
                                            <label class="form-label" for="inputUpdateCategoryName">Nama Kategori</label>
                                            <input class="form-control" type="text" name="inputUpdateCategoryName" id="inputUpdateCategoryName" placeholder="Nama kategori harus unik." required>
                                        </div>
                                        <input class="form-control" type="hidden" name="inputCategoryId" id="inputCategoryId" value="" required>
                                        <hr class="border border-1">
                                        <div class="alert" role="alert" id="update-category-alert"></div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of Update Category Modal -->

                    <!-- Delete Category Modal -->
                    <div class="modal fade" id="delete-category-modal" tabindex="-1" aria-labelledby="delete-category-modal" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-md">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="delete-category-modal-label">Hapus Kategori</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p>Apakah anda yakin ingin menghapus kategori ini?</p>
                                    <div class="alert" role="alert" id="delete-category-alert"></div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                                    <button type="button" class="btn btn-danger" id="confirm-delete-category-btn" value="">Hapus</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of Delete Category Modal -->

                    <!-- End of Modal -->
                </div>
            </div>
            <!-- End of Page -->
        </div>
    </div>
    <!-- End of Page Wrapper -->

    <!-- CUSTOM -->
    <script src="<?php echo base_url("public/js/dashboard-validation.js") ?>"></script>
    <script src="<?php echo base_url("public/js/dashboard.js") ?>"></script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>