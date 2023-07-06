<?php include_once "header.php" ?>
    <title>Admin</title>
</head>

<body>

<?php include_once "nav.php" ?>

<?php include_once "sidebar.php" ?>
    <!-- Modal -->
    <div class="modal fade" id="dr_update_info" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Info</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="md-4">
                        <div class="my-2">
                            <h4>Personal Inof</h4>
                            <div class="row">
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="Age">
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="Experience">
                                </div>
                            </div>
                        </div>
                        <div class="my-2">
                            <h4>Contact Info</h4>
                            <div class="row">
                                <div class="col">
                                    <input type="email" class="form-control" placeholder="Email">
                                </div>
                                <div class="col">
                                    <input type="phone" class="form-control" placeholder="phone">
                                </div>
                            </div>
                        </div>
                        <div class="my-2">
                            <h3>Schedule :></h3>
                            <div class="row my-2">
                                <div class="col">
                                    <input type="day" class="form-control" placeholder="day">
                                </div>
                                <div class="col">
                                    <input type="time" class="form-control" placeholder="time AM/PM">
                                </div>
                            </div>
                            <div class="row my-2">
                                <div class="col">
                                    <input type="day" class="form-control" placeholder="day">
                                </div>
                                <div class="col">
                                    <input type="time" class="form-control" placeholder="time AM/PM">
                                </div>
                            </div>
                            <div class="row my-2">
                                <div class="col">
                                    <input type="day" class="form-control" placeholder="day">
                                </div>
                                <div class="col">
                                    <input type="time" class="form-control" placeholder="time AM/PM">
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-success shadow-none" name="dr_update_info" value="Update">
                </div>
            </div>
        </div>
    </div>



    <div class="content bg-body-tertiary ">
        <div class="container-xl">
            <section class="intro ">
                <div class="bg-image h-100 ">
                    <div class="mask d-flex align-items-center h-100" style="background-color: #f3f2f2;">
                        <div class="container my-2">
                            <div class="row d-flex justify-content-center align-items-center">
                                <div class="col-12 col-lg-10 col-xl-8">
                                    <div class="card" style="border-radius: 1rem;">
                                        <div class="row g-0">
                                            <div class="col-md-4  d-md-block mb-rounded">
                                                <img src="https://images.pexels.com/photos/5215024/pexels-photo-5215024.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                                    alt="Doctor" class="img-fluid"
                                                    style="border-top-left-radius: 1rem; border-bottom-left-radius: 1rem;" />
                                            </div>
                                            <div class="col-md-8 d-flex align-items-center">
                                                <div class="card-body py-5 px-4 p-md-5">

                                                    <form action="">
                                                        <h4 class="fw-bold mb-4" style="color: #92aad0;">Doctor ID :
                                                            1234123
                                                        </h4>

                                                        <div class="form-outline ">
                                                            <label class="form-label">Name : </label>
                                                        </div>
                                                        <div class="form-outline ">
                                                            <label class="form-label">Age : 23</label>
                                                        </div>
                                                        <div class="form-outline ">
                                                            <label class="form-label">Gender : Female</label>
                                                        </div>
                                                        <div class="form-outline ">
                                                            <label class="form-label">Experience :</label>
                                                        </div>
                                                        <div class="form-outline mb-4">
                                                            <label class="form-label">Language Spoken : English, Hindi,
                                                                Bangla</label>
                                                        </div>
                                                        <div class="form-outline mb-4">
                                                            <label class="form-label">Contact Details :-</label><br>
                                                            <label for="">Mobile No :- 00000000000 </label><br>
                                                            <label for="">Email :- eadjshf@.com </label>
                                                        </div>
                                                        <div class="form-outline mb-4">
                                                            <h3>Schedule :></h3>
                                                            <div
                                                                class="row  text-sm-left text-md-left text-lg-center text-xl-center">
                                                                <div class=" col-12 col-6 col-lg-4">
                                                                    <h5>Monday</h4>
                                                                        <h6>9:00 AM - 12:00 PM</h6>
                                                                </div>
                                                                <div class="col-12 col-6 col-lg-4">
                                                                    <h5>Monday</h4>
                                                                        <h6>9:00 AM - 12:00 PM</h6>
                                                                </div>
                                                                <div class="col-12 col-6 col-lg-4">
                                                                    <h5>Monday</h4>
                                                                        <h6>9:00 AM - 12:00 PM</h6>
                                                                </div>
                                                            </div>
                                                        </div>


                                                    </form>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

<footer></footer>


    <?php include_once "footer.php" ?>

