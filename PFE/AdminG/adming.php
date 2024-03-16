<?php include("include/header.php"); ?>
<nav class="navbar navbar-main navbar-expand-lg px-0 mx-0 mt-3 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
    <div class="container-fluid py-1 px-5">
        <div class="d-flex justify-content-between align-items-center w-100">
            <h4 id="pageName" class="font-weight-bolder mb-0" style="scale: 108%;">Tableau De Bord</h4>

            <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                <ul class="navbar-nav ms-auto justify-content-end">
                    <li class="nav-item ms-md-auto pe-md-3 d-flex align-items-center justify-content-end">
                        <div class="input-group input-group-outline me-2">
                            <input type="text" class="form-control" placeholder="Saisir ici..." />
                        </div>
                    </li>
                    <li class="nav-item d-flex align-items-center">
                        <a href="profil.php" class="nav-link text-body font-weight-bold px-1">
                            <i class="bi bi-person-circle px-1" style="font-size: 20px;"></i>
                            <span class="d-sm-inline d-none" style="font-size: 15px;">Profile</span>
                        </a>
                    </li>
                    <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                        <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                            <div class="sidenav-toggler-inner">
                                <i class="sidenav-toggler-line"></i>
                                <i class="sidenav-toggler-line"></i>
                                <i class="sidenav-toggler-line"></i>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>


<div class="container mt-4">
    <div class="row mt-4">
        <div class="col-md-12">
            <div class="row">
                <div class="col-lg-12 position-relative z-index-2">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6">
                            <div class="card mb-2 shadow-dark">
                                <div class="card-header p-3 pt-2">
                                    <div class="icon icon-lg icon-shape shadow-dark shadow text-center border-radius-xl mt-n3 position-absolute pb-3" style="background-color:#ADD8E6;">
                                        <i class="bi bi-people-fill" style="opacity: 100;"></i>
                                    </div>
                                    <div class="text-end pt-1">
                                        <p class="text-sm mb-0 text-capitalize">Clients</p>
                                        <h4 class="mb-0">281</h4>
                                    </div>
                                </div>
                                <hr class="dark horizontal my-0" />
                                <div class="card-footer p-3">
                                    <p class="mb-0">
                                        <span class="text-success text-sm font-weight-bolder">+55% </span>than last week
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-6 mt-sm-0 mt-4">
                            <div class="card mb-2 shadow-dark">
                                <div class="card-header p-3 pt-2">
                                    <div class="icon icon-lg icon-shape shadow-dark shadow text-center border-radius-xl mt-n3 position-absolute pb-3" style="background-color: rgb(163, 206, 168);">
                                        <i class="bi bi-cash-stack" style="opacity: 100;"></i>
                                    </div>
                                    <div class="text-end pt-1">
                                        <p class="text-sm mb-0 text-capitalize">Revenu</p>
                                        <h4 class="mb-0">281</h4>
                                    </div>
                                </div>
                                <hr class="dark horizontal my-0" />
                                <div class="card-footer p-3">
                                    <p class="mb-0">
                                        <span class="text-success text-sm font-weight-bolder">+3% </span>than last month
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-6 mt-sm-0 mt-4">
                            <div class="card mb-2 shadow-dark">
                                <div class="card-header p-3 pt-2">
                                    <div class="icon icon-lg icon-shape shadow-dark shadow text-center border-radius-xl mt-n3 position-absolute pb-3" style="background-color:rgb(210, 168, 224);">
                                        <i class="bi bi-bag-check-fill" style="opacity: 100;"></i>
                                    </div>
                                    <div class="text-end pt-1">
                                        <p class="text-sm mb-0 text-capitalize">Achats</p>
                                        <h4 class="mb-0">281</h4>
                                    </div>
                                </div>
                                <hr class="horizontal my-0 dark" />
                                <div class="card-footer p-3">
                                    <p class="mb-0">
                                        <span class="text-success text-sm font-weight-bolder">+1% </span>than yesterday
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-6 mt-sm-0 mt-4">
                            <div class="card mb-2 shadow-dark">
                                <div class="card-header p-3 pt-2">
                                    <div class="icon icon-lg icon-shape shadow-dark shadow text-center border-radius-xl mt-n3 position-absolute pb-3" style="background-color: rgb(234, 168, 168);">
                                        <i class="bi bi-bag-dash" style="opacity: 100;" s></i>
                                    </div>
                                    <div class="text-end pt-1">
                                        <p class="text-sm mb-0 text-capitalize">Commandes</p>
                                        <h4 class="mb-0">281</h4>
                                    </div>
                                </div>
                                <hr class="horizontal my-0 dark" />
                                <div class="card-footer p-3">
                                    <p class="mb-0">Just updated</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include("include/footer.php"); ?>