<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>CLUE CAFE</title>
        <link rel="stylesheet" href="STYLE.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <div id ="home">
            <header>
                <nav class="navbar navbar-expand-lg bg-dark fixed-top" data-bs-theme="dark">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#home">Clue Cafe</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#about">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#services">Services</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#Gallery">Gallery</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#Contact">Contact Us</a>
                                </li>
                            </ul>
                            <form class="d-flex" role="search">
                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success" type="submit">Search</button>
                            </form>
                        </div>
                    </div>
                </nav>
            </header>
            <div id="carouselExampleCaptions" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="Photos\16.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h1 Class="display-3">WELCOME TO CLUE CAFE</h1>
                            <p>Come for the food. Stay for the Taste.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="Photos\14.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h1 Class="display-3 ">OUR STORY</h1>
                            <p>How we became the best cafe in the town from the small shop we started as 4 years ago.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="Photos\15.webp" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h1 Class="display-3">RESERVE YOUR TABLE</h1>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

        <section class="my-5" id="about">
            <div class= "py-5">
                <h2 class="text-center"> About us</h2>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class= "col-lg-6 col-md-6 col-12">
                        <img src="Photos\17.jpg" class="img-fluid aboutimg">
                    </div> 
                    <div class= "col-lg-6 col-md-6 col-12">
                        <h3 class="display-4 ">Is open now </h3>
                        <p class="py-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro consequatur atque, sit suscipit et aliquid error repudiandae iusto eaque nostrum placeat dolore, tempore quod repellat ad, ipsum voluptas rerum quasi.</p>
                        <a href ="#" class="btn btn-success"> Check more </a>
                    </div> 
                </div>
            </div>
        </section>

        <section class="my-5" id="services">
            <div class= "py-5">
                <h2 class="text-center"> Services</h2>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="card">
                            <img src="Photos\20.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Menu</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="card">
                            <img src="Photos\18.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Online ordering and delivery</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>  
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="card">
                            <img src="Photos\19.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Booking for Party</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>    
                </div>
            </div>
        </section>

        <section class="my-5" id="Gallery">
            <div class= "py-5">
                <h2 class="text-center"> Gallery </h2>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-12 imgs">
                        <img src="Photos\22.jpg" class="img-fluid pb-4">
                    </div>
                    <div class="col-lg-4 col-md-4 col-12 imgs">
                        <img src="Photos\23.jpg" class="img-fluid pb-4">
                    </div>
                    <div class="col-lg-4 col-md-4 col-12 imgs">
                        <img src="Photos\24.jpeg" class="img-fluid pb-4">
                    </div>
                    <div class="col-lg-4 col-md-4 col-12 imgs">
                        <img src="Photos\14.jpg" class="img-fluid pb-4">
                    </div>
                    <div class="col-lg-4 col-md-4 col-12 imgs">
                        <img src="Photos\15.webp" class="img-fluid pb-4">
                    </div>
                    <div class="col-lg-4 col-md-4 col-12 imgs">
                        <img src="Photos\16.jpg" class="img-fluid pb-4">
                    </div>
                    <div class="col-lg-4 col-md-4 col-12 imgs">
                        <img src="Photos\17.jpg" class="img-fluid pb-4">
                    </div>
                    <div class="col-lg-4 col-md-4 col-12 imgs">
                        <img src="Photos\18.jpg" class="img-fluid pb-4">
                    </div>
                    <div class="col-lg-4 col-md-4 col-12 imgs">
                        <img src="Photos\19.jpg" class="img-fluid pb-4">
                    </div>   
                </div>
            </div>
        </section>

        <footer>
            <div class="container">
                <div class="upper-footer">
                    <section class="my-5" id="Contact">
                        <div class="container-fluid">
                            <div class="row">
                                <div class= "col-lg-4 col-md-4 col-12">
                                    <div class= "py-2">
                                        <h2 class="text-center"><i class="fa fa-map-marker" aria-hidden="true"></i></h2>
                                        <p class="text-center">1234 street Name <br> City Xyz</p>
                                    </div>
                                    <div class= "py-2">
                                        <h2 class="text-center">Contacts</h2>
                                        <p class="text-center">Email: cluecafe@gmail.com</p>
                                        <p class="text-center">Phone: +1 (0) 000 0000 001</p>
                                        <p class="text-center">Fax: +1 (0) 000 0000 002</p>
                                    </div>
                                    <div class= "py-2">
                                        <h2 class="text-center">Follow</h2>
                                        <div class="text-center display-6">
                                            <a href="https://github.com/Muskanj670"><i class="fa fa-github"></i></a>
                                            <a href="https://www.instagram.com/muskanj670/"><i class="fa fa-instagram"></i></a>
                                            <a href="https://www.linkedin.com/in/muskan-jain-271203na/"><i class="fa fa-linkedin-square"></i></a>
                                        </div>                
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-8 col-12">
                                    <div class= "py-3">
                                        <h2 class="text-center">Reserve your Table</h2>
                                    </div>
                                    <form action="userinfo.php" method="post">
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input type="text" name="user" class="form-control" placeholder="John Martin" autocomplete="off" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Email id</label>
                                            <input type="text" name="email"  class="form-control" placeholder="John_martin@gmail.com" autocomplete="off" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Mobile no.</label>
                                            <input type="text" name="mobile"  class="form-control" placeholder="0000 000 000" autocomplete="off" required>
                                        </div>
                                        <div class="row g-2">
                                            <div class="col-md">
                                                <div class="form-floating">
                                                    <select class="form-select" id="floatingSelectGrid" name="timing">
                                                            <option value="" selected hidden>Open this select menu</option>
                                                            <option value="10:00am - 12:00pm">10:00am - 12:00pm</option>
                                                            <option value="12:00pm - 02:00pm">12:00pm - 02:00pm</option>
                                                            <option value="02:00pm - 04:00pm">02:00pm - 04:00pm</option>
                                                    </select>
                                                    <label for="floatingInputGrid">Timing</label>
                                                </div>
                                            </div>
                                            <div class="col-md">
                                                <div class="form-floating">
                                                    <select class="form-select" id="floatingSelectGrid" name="people">
                                                        <option value="" selected hidden>Open this select menu</option>
                                                        <option value="One">One</option>
                                                        <option value="Two">Two</option>
                                                        <option value="Three">Three</option>
                                                    </select>
                                                    <label for="floatingSelectGrid">Number of people</label>
                                                </div>
                                            </div>
                                        </div>   
                                        <button type="submit" class="btn btn-success" name="submit">Submit</button>
                                    </form>
                                </div>
                            </div>        
                        </div>
                    </section>
                </div>
            </div>
            <div class="footer-bottom">
                Copyright &copy; 2022 all rights reserved
            </div>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    </body>
</html>




