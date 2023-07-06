<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <title>HMS</title>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .content {
        width: 100%;
    }
</style>

<body>
    <div class="content bg-body-tertiary">
        <div class="container-xl ">
            <nav class="container navbar navbar-expand-lg ">
                <div class="container-fluid">
                    <a class="navbar-brand" href="./index.html">HMS</a>
                    <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse"
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
                                <a class="nav-link" href="#">about</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./doctor/doctor.html">Doctors</a>
                            </li>
                        </ul>
                        <form class="d-flex" role="submit">
                            <button type="button" class="btn btn-outline-success shadow-none m-2 "
                                data-bs-toggle="modal" data-bs-target="#Registation">
                                Registation
                            </button>
                            <button type="button" class="btn btn-outline-success shadow-none m-2" type="submit"
                                data-bs-toggle="modal" data-bs-target="#login">log in</button>

                        </form>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- slider -->
    <div class="content bg-body-tertiary">
        <div class="container-xl ">
            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img style="width: 1200px; height: 600px;"
                            src="https://images.pexels.com/photos/247786/pexels-photo-247786.jpeg" class="d-block w-100"
                            alt="...">
                    </div>
                    <div class="carousel-item">
                        <img style="width: 1200px; height: 600px;"
                            src="https://images.pexels.com/photos/3938022/pexels-photo-3938022.jpeg"
                            class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img style="width: 1200px; height: 600px;"
                            src="https://images.pexels.com/photos/3279209/pexels-photo-3279209.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                            class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>

    <!-- Doctors -->
    <div class="content bg-body-tertiary">
        <div class="conatainer-xl">
            <div class="container  ">
                <div class="row my-4 ">
                    <div class="col-12 mb-4 col-sm-2 p-md-5 col-md-4 mr-2 col-lg-3 mx-4">
                        <div class="card" style="width:300px;">
                            <div class="card-body">
                                <img style=" height: 300px;"
                                    src="https://images.pexels.com/photos/5215024/pexels-photo-5215024.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                    class="card-img-top" alt="...">
                                <h5 class="card-title">Name:</h5>
                                <p class="card-text">Qualification</p>
                                <p class="card-text">time shedule</p>
                                <a href="#" class="btn btn-primary">Read More..</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mb-4 col-sm-2 p-md-5 col-md-4  col-lg-3 mx-4">
                        <div class="card" style="width:300px;">
                            <div class="card-body">
                                <img style=" height: 300px;"
                                    src="https://images.pexels.com/photos/5215024/pexels-photo-5215024.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                    class="card-img-top" alt="...">
                                <h5 class="card-title">Name:</h5>
                                <p class="card-text">Qualification</p>
                                <p class="card-text">time shedule</p>
                                <a href="#" class="btn btn-primary">Read More..</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mb-4 col-sm-2 p-md-5 col-md-4 col-lg-3 mx-4">
                        <div class="card" style="width:300px;">
                            <div class="card-body">
                                <img style=" height: 300px;"
                                    src="https://images.pexels.com/photos/5215024/pexels-photo-5215024.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                    class="card-img-top" alt="...">
                                <h5 class="card-title">Name:</h5>
                                <p class="card-text">Qualification</p>
                                <p class="card-text">time shedule</p>
                                <a href="#" class="btn btn-primary">Read More..</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- about  -->
    <div class="content bg-body-tertiary">
        <div class="container-xl ">
            <div class="card m-2">
                <div class="card-body">
                    <h5 class="card-title">ABOUT HMS</h5>
                    <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ullam earum
                        necessitatibus laboriosam dolorum, amet quae cum hic animi impedit qui, dicta suscipit, eum
                        illum repellendus deleniti? Accusamus at dolorem voluptates. Lorem ipsum dolor sit amet
                        consectetur adipisicing elit. Tempora, officia amet quod voluptatibus porro animi nam distinctio
                        laborum maiores? Vero aliquam iure, eaque saepe odit similique ratione animi odio quisquam!
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum voluptatibus facere omnis
                        laboriosam quae neque provident, quisquam dicta perferendis, eius culpa enim explicabo fuga!
                        Atque consequatur eligendi beatae ab quo. Lorem, ipsum dolor sit amet consectetur adipisicing
                        elit. Amet incidunt doloribus facere odio iure et, maxime ea, consectetur unde voluptates
                        recusandae repudiandae assumenda. Aliquam totam pariatur dicta porro laboriosam iste?</p>

                </div>
            </div>
        </div>
    </div>

    <!-- NOTICE -->
    <div class="content bg-body-tertiary">
        <div class="container-xl ">
            <h3>NOTICE</h3>
            <div class="d-flex  flex-row md-4 mx-2 row">
                <div class="mx-2 bg-success px-5 py-2 rounded col-12 col-md-6  my-2 col-lg-2">Academic</div>
                <div class="mx-2 bg-success px-5 py-2 rounded col-12 col-md-6  my-2 col-lg-2">Reserch</div>
                <div class="mx-2 bg-success px-5 py-2 rounded col-12 col-md-6  my-2 col-lg-2">Admission</div>
                <div class="mx-2 bg-success px-5 py-2 rounded col-12 col-md-6  my-2 col-lg-2">Gender</div>
            </div>
            <div>
                <h2>Academic</h2>
                <div class="row">
                    <div class="col-12 col-md-6  my-2 col-lg-5 d-flex">
                        <i class="bi bi-calendar-check"></i>
                        <p class="px-2">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                    <div class="col-12 col-md-6  my-2 col-lg-5 d-flex">
                        <i class="bi bi-calendar-check"></i>
                        <p class="px-2">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6  my-2 col-lg-5 d-flex">
                        <i class="bi bi-calendar-check"></i>
                        <p class="px-2">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                    <div class="col-12 col-md-6  my-2 col-lg-5 d-flex">
                        <i class="bi bi-calendar-check"></i>
                        <p class="px-2">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- areas of activites  -->
    <div class="content bg-body-tertiary">
        <div class="container-xl ">
            <h3>AREAS OF ACTIVITES</h3>
            <div class="d-flex  flex-row md-4 mx-2 row">
                <div class="card my-2 mx-2 col-12 col-md-6 col-lg-3" style="width: 400px;">
                    <img class="card-img-top"
                        src="https://images.pexels.com/photos/1462630/pexels-photo-1462630.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                        alt="Card image cap">
                    <div class="card-body">
                        <h4>Education <h4>
                    </div>
                </div>
                <div class="card my-2 mx-2 col-12 col-md-6 col-lg-3" style="width: 400px;">
                    <img class="card-img-top"
                        src="https://images.pexels.com/photos/356040/pexels-photo-356040.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                        alt="Card image cap">
                    <div class="card-body">
                        <h4>Research</h4>
                    </div>
                </div>
                <div class="card my-2 mx-2 col-12 col-md-6 col-lg-3" style="width: 400px;">
                    <img class="card-img-top"
                        src="https://images.pexels.com/photos/3938022/pexels-photo-3938022.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                        alt="Card image cap">
                    <div class="card-body">
                        <h4>Hospital Servie</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Top footer  -->
    <div class="content bg-body-tertiary">
        <div class="container-xl ">
            <div class="row">
                <div class="col-12 col-md-4 col-lg-4">
                    <h3>Quick Link</h3>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Syndicate</li>
                        <li class="list-group-item">Academic</li>
                        <li class="list-group-item">Act,Rules & Regulations</li>
                        <li class="list-group-item">No Objection Certificate (NOC)</li>
                        <li class="list-group-item">EX. Bangladesh Leave</li>
                        <li class="list-group-item">The Right to Information Act</li>
                        <li class="list-group-item">Some userful links</li>
                        <li class="list-group-item">Antimicrobial Guideline</li>
                        <li class="list-group-item">BdREN V Session Login</li>
                        <li class="list-group-item">National Cervical and Breast Cancer Surveillance System</li>
                    </ul>
                </div>
                <div class="col-12 col-md-4 col-lg-4">
                    <h3>About HMS</h3>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Message From Chancellor</li>
                        <li class="list-group-item">History</li>
                        <li class="list-group-item">Mission</li>
                        <li class="list-group-item">Vision</li>
                        <li class="list-group-item">Goal</li>
                        <li class="list-group-item">Aim</li>
                        <li class="list-group-item">Objective</li>
                    </ul>
                </div>
                <div class="col-12 col-md-4 col-lg-4">
                    <ul class="list-group">
                        <li class="list-group-item action  my-2">HMS Monthly NewsLetter</li>
                        <li class="list-group-item my-2">Login of PDS</li>
                        <li class="list-group-item my-2">Webmail</li>
                        <li class="list-group-item my-2">HMS Form</li>
                        <li class="list-group-item my-2">Covid 19</li>
                    </ul>
                </div>
            </div>


        </div>
    </div>
    <hr>
    <!-- footer  -->
    <div class="content bg-body-tertiary">
        <div class="container ">
            <footer class="text-center fixed-bottom my-4 fs-4">
                @ lemon
            </footer>
        </div>
    </div>
    <hr>



    <!-- logIn Modal -->
    <div class="modal fade" id="login" tabindex="-1" aria-labelledby="login" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="login">Log In</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" method="post">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label ">Email address</label>
                            <input type="email" class="form-control shadow-none" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control shadow-none" id="exampleInputPassword1">
                        </div>
                        <button type="button" class="btn btn-primary">Log In</button>
                    </form>
                </div>

            </div>
        </div>
    </div>


    <!-- Register Modal -->
    <div class="modal fade" id="Registation" tabindex="-1" aria-labelledby="Registation" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="Registation">Register</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <form class="row g-3" method="post">
                        <div class="col-md-6">
                            <label for="" class="form-label">First Name</label>
                            <input type="text" class="form-control shadow-none">
                        </div>
                        <div class="col-md-6">
                            <label for="" class="form-label">Last Name</label>
                            <input type="text" class="form-control shadow-none">
                        </div>
                        <div class="col-md-6">
                            <label for="" class="form-label">Phone Number</label>
                            <input type="phone" class="form-control shadow-none">
                        </div>
                        <div class="col-md-6 ">
                            <label for="" class="form-label">Gender</label>
                            <div class="row d-flex">
                                <div class="col-6">Male
                                    <input class="form-check-input" type="radio" name="exampleRadios"
                                        id="exampleRadios1" value="option1" checked>
                                </div>
                                <div class="col-6">
                                    Female
                                    <input class="form-check-input" type="radio" name="exampleRadios"
                                        id="exampleRadios1" value="option1" checked>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="inputEmail4" class="form-label">Email</label>
                                <input type="email" class="form-control shadow-none" id="inputEmail4">
                            </div>
                            <div class="col-md-6">
                                <label for="inputPassword4" class="form-label">Password</label>
                                <input type="password" class="form-control shadow-none" id="inputPassword4">
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Sign in</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

</html>