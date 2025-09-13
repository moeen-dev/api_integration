<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Practice</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
</head>

<body>

    <header>
        <div class="container p-3">
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Attachment Class 03</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Products</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    More
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Contact</a></li>
                                    <li><a class="dropdown-item" href="#">About</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">FAQ's</a></li>
                                </ul>
                            </li>
                        </ul>
                        <form class="d-flex" role="search">
                            <input class="form-control me-2" type="search" placeholder="Type Keyword"
                                aria-label="Search" />
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <div class="container p-3">
        <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/Banner.jpg" class="d-block w-100" alt="Banner.jpg">
                </div>
                <div class="carousel-item">
                    <img src="images/Banner.jpg" class="d-block w-100" alt="Banner.jpg">
                </div>
                <div class="carousel-item">
                    <img src="images/Banner.jpg" class="d-block w-100" alt="Banner.jpg">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <div class="container mt-4">
        <div class="heading text-center">
            <h2>Our Products</h2>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 p-3 bg-light">
                <div class="card" style="width: 18rem;">
                    <img src="images/product.jpg" class="card-img-top" alt="product.jpg">
                    <div class="card-body">
                        <h5 class="card-title">Product Title Here</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card’s
                            content.</p>
                        <a href="#" class="btn btn-primary">Learn more</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 p-3 bg-light">
                <div class="card" style="width: 18rem;">
                    <img src="images/product.jpg" class="card-img-top" alt="product.jpg">
                    <div class="card-body">
                        <h5 class="card-title">Product Title Here</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card’s
                            content.</p>
                        <a href="#" class="btn btn-primary">Learn more</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 p-3 bg-light">
                <div class="card" style="width: 18rem;">
                    <img src="images/product.jpg" class="card-img-top" alt="product.jpg">
                    <div class="card-body">
                        <h5 class="card-title">Product Title Here</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card’s
                            content.</p>
                        <a href="#" class="btn btn-primary">Learn more</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 p-3 bg-light">
                <div class="card" style="width: 18rem;">
                    <img src="images/product.jpg" class="card-img-top" alt="product.jpg">
                    <div class="card-body">
                        <h5 class="card-title">Product Title Here</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card’s
                            content.</p>
                        <a href="#" class="btn btn-primary">Learn more</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 p-3 bg-light">
                <div class="card" style="width: 18rem;">
                    <img src="images/product.jpg" class="card-img-top" alt="product.jpg">
                    <div class="card-body">
                        <h5 class="card-title">Product Title Here</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card’s
                            content.</p>
                        <a href="#" class="btn btn-primary">Learn more</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 p-3 bg-light">
                <div class="card" style="width: 18rem;">
                    <img src="images/product.jpg" class="card-img-top" alt="product.jpg">
                    <div class="card-body">
                        <h5 class="card-title">Product Title Here</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card’s
                            content.</p>
                        <a href="#" class="btn btn-primary">Learn more</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 p-3 bg-light">
                <div class="card" style="width: 18rem;">
                    <img src="images/product.jpg" class="card-img-top" alt="product.jpg">
                    <div class="card-body">
                        <h5 class="card-title">Product Title Here</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card’s
                            content.</p>
                        <a href="#" class="btn btn-primary">Learn more</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 p-3 bg-light">
                <div class="card" style="width: 18rem;">
                    <img src="images/product.jpg" class="card-img-top" alt="product.jpg">
                    <div class="card-body">
                        <h5 class="card-title">Product Title Here</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card’s
                            content.</p>
                        <a href="#" class="btn btn-primary">Learn more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-4 p-5">
        <div class="heading text-center">
            <h2>Freequently Asked Question</h2>
        </div>
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Who Are You?
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Impedit aliquid distinctio
                            nisi repellat, ipsam accusantium necessitatibus debitis quia error ducimus doloremque veniam
                            nemo rem magnam a quisquam minus incidunt vitae?
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Why Us?
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto magnam sunt quae
                            nihil, modi explicabo deserunt? Autem dicta, enim quisquam placeat quo sed officiis
                            blanditiis sint, assumenda veniam id ad!
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        What type of products do you offer?
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius atque soluta obcaecati
                            quas! Aliquid excepturi autem alias consequatur molestias ad distinctio corporis quia
                            praesentium repudiandae soluta laudantium quisquam, in consequuntur!
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-4 p-5">
        <div class="heading text-center">
            <h2>Contact Us</h2>
        </div>

        <form action="">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleFormControlInput1"
                    placeholder="name@example.com">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Color Picker</label>
                <input type="color" class="form-control" id="exampleFormControlInput1"
                    placeholder="name@example.com">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Time</label>
                <input type="time" class="form-control" id="exampleFormControlInput1"
                    placeholder="name@example.com">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>

            <button class="btn btn-primary" type="submit">Submit</button>
        </form>
    </div>

    <div class="container mt-t p-5">
        <div class="heading text-center">
            <h2>User Table</h2>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Roll</th>
                    <th scope="col">Department</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Moeen</td>
                    <td>123456</td>
                    <td>CST</td>
                    <th>
                        <button class="btn btn-danger">Details</button>
                    </th>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td>Moeen</td>
                    <td>123456</td>
                    <td>CST</td>
                    <th>
                        <button class="btn btn-danger">Details</button>
                    </th>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td>Moeen</td>
                    <td>123456</td>
                    <td>CST</td>
                    <th>
                        <button class="btn btn-danger">Details</button>
                    </th>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td>Moeen</td>
                    <td>123456</td>
                    <td>CST</td>
                    <th>
                        <button class="btn btn-danger">Details</button>
                    </th>
                </tr>
            </tbody>
        </table>
    </div>

    <footer class="bg-dark text-white py-3 mt-5">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <p class="mb-0">© 2025 Something. All rights reserved.</p>
                <p class="mb-0">
                    Developed by
                    <a href="#" class="text-info fw-bold text-decoration-none">Moeen</a>
                </p>
            </div>
        </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
