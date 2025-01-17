<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> 
</head>
<body> 
    
    <!-- 
    <div class="container bg-info m-5">Container NONE</div>
    <div class="container-sm bg-success m-5">Container SM</div>
    <div class="container-md bg-warning m-5">Container MD</div>
    <div class="container-lg bg-danger m-5">Container LG</div>
    <div class="container-xl bg-primary m-5">Container XL</div>
    <div class="container-xxl bg-secondary m-5">Container XXL</div>
    -->

    <!-- 
    <div class="container text-center">
        <div class="row">
          <div class="col-8 bg-danger">Column</div>
          <div class="col-4 bg-primary">Column</div>
        </div>
    </div> 
    -->
    
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container">
            <a class="navbar-brand text-white" href="#">BStrap</a>
            <button class="navbar-toggler bg-white shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto d-flex gap-3 text-center pt-lg-0 pt-4">
                    <li class="nav-item">
                        <a class="nav-link text-white" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Service</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#pro">Project</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#faq">FAQ</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->


    <!-- Hero -->
    <section id="hero">
        <div class="container pt-3">
            <div class="hero-box d-flex align-items-center flex-lg-row flex-column gap-5">
                <div class="box fw-bold">
                    <h1>
                        Belajar Bootstrap 
                        <br> 
                        Bersama 
                        <span class="text-primary">Saya</span>
                    </h1>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Veniam accusamus non facilis magnam excepturi labore aspernatur quos maiores iusto nam, 
                        eum sint laborum! Minus voluptates accusamus quaerat maiores illo unde.
                    </p>
                    <a class="btn btn-primary" href="">Tentang Kami</a>
                    <a class="btn btn-outline-primary" href="">Project Kami</a>
                </div>
                <div class="box">
                    <img src="https://th.bing.com/th/id/OIP.jUjYnWPmLBXsD2OcWf2XdAHaHa?pid=ImgDet&w=178&h=178&c=7&dpr=1,5" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero -->


    <!-- About -->
    <section id="about">
        <div class="container" style="height: 50vh;">
            <div class="box-about text-center">
                <h1 class="fw-bold mb-5 mt-5">ABOUT US</h1>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Voluptatibus culpa voluptates cumque quaerat reprehenderit, 
                    deserunt odit voluptas incidunt labore eaque expedita accusamus a vitae, 
                    ipsam velit fugit delectus odio inventore! Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Adipisci ex saepe, voluptatem repellendus perferendis neque possimus eos nihil a veritatis, 
                    inventore quod, commodi sunt aliquam iusto quos! Beatae, alias ut.
                </p>
            </div>
        </div>
    </section>
    <!-- End About -->

    <!-- Services -->
    <section id="service">
        <div class="container">
            <div class="d-flex gap-3">
                <div class="card" style="width: 18rem;">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR4LH0zlBhNZTREXxq8JVOsPSzzWM6ezKIzEly1zScWqdTAd46hQmCSUN152mUByFacIAA&usqp=CAU" class="card-img-top" alt="our serv">
                    <div class="card-body">
                        <h5 class="card-title">Website Developtment</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR4LH0zlBhNZTREXxq8JVOsPSzzWM6ezKIzEly1zScWqdTAd46hQmCSUN152mUByFacIAA&usqp=CAU" class="card-img-top" alt="our serv">
                    <div class="card-body">
                        <h5 class="card-title">Website Developtment</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR4LH0zlBhNZTREXxq8JVOsPSzzWM6ezKIzEly1zScWqdTAd46hQmCSUN152mUByFacIAA&usqp=CAU" class="card-img-top" alt="our serv">
                    <div class="card-body">
                        <h5 class="card-title">Website Developtment</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Services -->

    <!-- Project -->
    <section id="pro" class="project pt-5"></section>
        <div class="container">
            <h1 class="text-center fw-bold text-info">PROJECT EXAMPLE</h1>
            <div class="row">
                <div class="card m-3" style="width: 18rem;">
                    <img src="https://i.pinimg.com/originals/23/8e/a6/238ea679ba9cecce8b3f8c4ebf9d151d.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
                <div class="card m-3" style="width: 18rem;">
                    <img src="https://i.pinimg.com/originals/23/8e/a6/238ea679ba9cecce8b3f8c4ebf9d151d.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
                <div class="card m-3" style="width: 18rem;">
                    <img src="https://i.pinimg.com/originals/23/8e/a6/238ea679ba9cecce8b3f8c4ebf9d151d.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
                <div class="card m-3" style="width: 18rem;">
                    <img src="https://i.pinimg.com/originals/23/8e/a6/238ea679ba9cecce8b3f8c4ebf9d151d.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
                <div class="card m-3" style="width: 18rem;">
                    <img src="https://i.pinimg.com/originals/23/8e/a6/238ea679ba9cecce8b3f8c4ebf9d151d.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
                <div class="card m-3" style="width: 18rem;">
                    <img src="https://i.pinimg.com/originals/23/8e/a6/238ea679ba9cecce8b3f8c4ebf9d151d.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Project -->

    <!-- FAQ -->
     <section id="faq" class="FAQ">
        <div class="container pt-5">
            <h1 class="fw-bold text-center m-5">FAQ</h1>
            <div class="row">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Any Problem?
                        </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Can't Solve The Problem?
                        </button>
                         </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                          Customer Service
                        </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                      </div>
                    </div>
                  </div>
            </div>
        </div>
     </section>
    <!-- End FAQ -->


    <!-- Footer -->
    <footer>
        <div class="footer pt-5">
            <div class="bg-primary p-3 text-center">
                <div class="text-white">
                    .Website BStrap 2024
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->




    <script src="bootstrap-5.3.3-dist/js/bootstrap.js"></script>
</body>
</html>