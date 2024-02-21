<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="designs.css">
    <title>KAPEling</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg body-tertiary">
        <div class="container-fluid" style="padding-left: 70px">
            <a class="navbar-brand" href="#">
                <img src="kapeling.png" width="60">
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent" style="font-size: 20px">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0" style="padding-left: 130px;">
                    <li class="nav-item ml-lg 4" style="margin-right: 20px;">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item ml-lg 4" style="margin-right: 20px;">
                        <a class="nav-link" href="page1.html">About</a>
                    </li>
                    <li class="nav-item ml-lg 4" style="margin-right: 20px;">
                        <a class="nav-link" href="#">Menu</a>
                    </li>
                    <li class="nav-item ml-lg 4" style="margin-right: 20px;">
                        <a class="nav-link" href="#">Apps</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <!-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"> -->
                    <a href="login.php" class="btn btn-outline-primary custom-btn" style="color: rgb(155, 95, 21); margin-left: 50px; border-color: rgb(155, 95, 21); padding: 2px 20px;">Log in</a>
                    <a href="signup.php" class="btn btn-primary custom-btn" style="background-color: rgb(155, 95, 21); margin-left: 10px; margin-right: 50px; border-color: rgb(155, 95, 21); padding: 2px 20px;">Sign up</a>
                </form>
            </div>
        </div>
    </nav>
    <h1>Start you day
    <br>with a black coffee</h1>
    <p style="font-size: 25px">
        choose and taste delicious coffee from<br>the best beans.
    </p>
    <form class="order">
        <button type="button" class="btn btn-primary custom-btn" style="background-color: rgb(155, 95, 21); margin-left: 75px; border-color: rgb(155, 95, 21); font-size: 20px; padding: 5px 40px;">Order Now</button>
        <button type="button" class="btn btn-outline-primary custom-btn" style="color: rgb(155, 95, 21); margin-left: 20px; border-color: rgb(155, 95, 21); font-size: 20px; padding: 5px 40px;">Learn About Us</button>
    </form>

    <br><br><br><br><br><br><br><br>
    <!-- carousel -->
    <div class="container" style="border: 4px solid rgb(155, 95, 21); border-radius: 5px; margin-bottom: 20px;">
        <h3 style="padding-top: 15px; padding-bottom: 10px; text-align: center; text-shadow: 2px 2px 4px rgba(0, 0, 0, 1);">POPULAR NOW</h3>
        <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="carousel-item-inner d-flex justify-content-center">

                        <!-- First Card -->
                        <div class="card mb-3" style="max-width: 340px; margin-right: 20px; margin-left: 25px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="espresso.png" class="img-fluid rounded-start" alt="..." style="max-width: 350px; padding-top: 30px; padding-right: 100px">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title" style="margin-left: 40px;">Espresso Coffee</h5>
                                        <p class="card-text" style="margin-left: -10px;">With Milk</p>
                                        <div class="d-flex align-items-center">
                                            <p class="card-text mb-0" style="margin-left: -10px;"><small class="text-body-secondary">Php 80.00</small></p>
                                            <!-- Add Button -->
                                            <button type="button" class="btn btn-primary btn-sm rounded-circle" style="background-color: rgb(155, 95, 21); width: 30px; height: 30px; margin-left: 20px">+</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Second Card -->
                        <div class="card mb-3" style="max-width: 340px; margin-right: 20px">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="capuccino.png" class="img-fluid rounded-start" alt="..." style="max-width: 350px; padding-top: 30px; padding-right: 100px">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title" style="margin-left: 40px;">Capuccino</h5>
                                        <p class="card-text" style="margin-left: -10px;">With Chocolate</p>
                                        <div class="d-flex align-items-center">
                                            <p class="card-text mb-0" style="margin-left: -10px;"><small class="text-body-secondary">Php 90.00</small></p>
                                            <!-- Add Button -->
                                            <button type="button" class="btn btn-primary btn-sm rounded-circle" style="background-color: rgb(155, 95, 21); width: 30px; height: 30px; margin-left: 20px">+</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Third Card -->
                        <div class="card mb-3" style="max-width: 340px; margin-right: 20px">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="latte art coffee.png" class="img-fluid rounded-start" alt="..." style="max-width: 350px; padding-top: 30px; padding-right: 100px">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title" style="margin-left: 40px;">Latte Art Coffee</h5>
                                        <p class="card-text" style="margin-left: -10px;">With Milk</p>
                                        <div class="d-flex align-items-center">
                                            <p class="card-text mb-0" style="margin-left: -10px;"><small class="text-body-secondary">Php 110.00</small></p>
                                            <!-- Add Button -->
                                            <button type="button" class="btn btn-primary btn-sm rounded-circle" style="background-color: rgb(155, 95, 21); width: 30px; height: 30px; margin-left: 20px">+</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Add more cards here -->
                    </div>
                </div>
                <!-- Second item -->
                <div class="carousel-item">
                    <div class="carousel-item-inner d-flex justify-content-center">
                        <!-- Fourth card -->
                        <div class="card mb-3" style="max-width: 340px; margin-right: 20px; margin-left: 25px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="matcha.png" class="img-fluid rounded-start" alt="..." style="max-width: 350px; padding-top: 30px; padding-right: 100px">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title" style="margin-left: 40px;">Matcha</h5>
                                        <p class="card-text" style="margin-left: -10px;">With Milk</p>
                                        <div class="d-flex align-items-center">
                                            <p class="card-text mb-0" style="margin-left: -10px;"><small class="text-body-secondary">Php 90.00</small></p>
                                            <!-- Add Button -->
                                            <button type="button" class="btn btn-primary btn-sm rounded-circle" style="background-color: rgb(155, 95, 21); width: 30px; height: 30px; margin-left: 20px">+</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- fifth card -->
                        <div class="card mb-3" style="max-width: 340px; margin-right: 20px">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="frappe.png" class="img-fluid rounded-start" alt="..." style="max-width: 350px; padding-top: 30px; padding-right: 100px">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title" style="margin-left: 40px;">Vanilla Frappe</h5>
                                        <p class="card-text" style="margin-left: -10px;">With Oreo</p>
                                        <div class="d-flex align-items-center">
                                            <p class="card-text mb-0" style="margin-left: -10px;"><small class="text-body-secondary">Php 110.00</small></p>
                                            <!-- Add Button -->
                                            <button type="button" class="btn btn-primary btn-sm rounded-circle" style="background-color: rgb(155, 95, 21); width: 30px; height: 30px; margin-left: 20px">+</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- sixth card -->
                        <div class="card mb-3" style="max-width: 340px; margin-right: 20px">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="hot_choco.png" class="img-fluid rounded-start" alt="..." style="max-width: 350px; padding-top: 30px; padding-right: 100px">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title" style="margin-left: 40px;">Hot Chocolate</h5>
                                        <p class="card-text" style="margin-left: -10px;">With Marsmallows</p>
                                        <div class="d-flex align-items-center">
                                            <p class="card-text mb-0" style="margin-left: -10px;"><small class="text-body-secondary">Php 70.00</small></p>
                                            <!-- Add Button -->
                                            <button type="button" class="btn btn-primary btn-sm rounded-circle" style="background-color: rgb(155, 95, 21); width: 30px; height: 30px; margin-left: 20px">+</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Add more cards here -->
                    </div>
                </div>
                <!-- Add more carousel items here if needed -->
            </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev" style="left: -50px;">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next" style="right: -50px;">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
    </div>
    <br>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>