<?php include_once "header.php" ?>
<?php include_once "nav.php" ?>


<div class="container-fluid bg-body-tertiary">
        <div class="container-xl">
            <h4>Add doctor</h4>
            <i class="bi bi-person-add btn btn-success my-2 mx-2" data-bs-toggle="modal"
                data-bs-target="#add_doctor"></i>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Image</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td><img src="" alt="" sizes="" srcset=""></td>
                        <td>
                            <i class="bi bi-pencil-square btn btn-success " data-bs-toggle="modal"
                                data-bs-target="#edit"></i>
                            <i class="bi bi-trash btn btn-danger" data-bs-toggle="modal" data-bs-target="#myModal"></i>
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">2</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td><img src="" alt="" sizes="" srcset=""></td>
                        <td>
                            <i class="bi bi-pencil-square btn btn-success " data-bs-toggle="modal"
                                data-bs-target="#edit"></i>
                            <i class="bi bi-trash btn btn-danger" data-bs-toggle="modal" data-bs-target="#myModal"></i>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td><img src="" alt="" sizes="" srcset=""></td>
                        <td>
                            <i class="bi bi-pencil-square btn btn-success " data-bs-toggle="modal"
                                data-bs-target="#edit"></i>
                            <i class="bi bi-trash btn btn-danger" data-bs-toggle="modal" data-bs-target="#myModal"></i>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>

    <div class="container-fluid bg-body-tertiary">
        <div class="container-xl  ">
            <nav aria-label="Page navigation example   ">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1">Previous</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
<?php include_once "footer.php" ?>
    <!-- Edit Modal -->
    <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="edit">Update Info</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="md-4">
                        <div class="my-2">
                            <h4>Personal Inof</h4>
                            <div class="row my-2">
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="Name">
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="Age">
                                </div>
                            </div>
                            <div class="row my-2">
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="Gender">
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="Experien">
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

    <!-- Add doctor Modal -->
    <div class="modal fade" id="add_doctor" tabindex="-1" role="dialog" aria-labelledby="add_doctor" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="edit">Add Doctor</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="md-4">
                        <div class="my-2">
                            <h4>Personal Inof</h4>
                            <div class="row my-2">
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="Name">
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="Age">
                                </div>
                            </div>
                            <div class="row my-2">
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="Gender">
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="Experien">
                                </div>
                            </div>
                        </div>
                        <div class="my-2">
                            <h4>Contact Info</h4>
                            <div class="row my-2">
                                <div class="col">
                                    <input type="email" class="form-control" placeholder="Email">
                                </div>
                                <div class="col">
                                    <input type="phone" class="form-control" placeholder="phone">
                                </div>
                            </div>
                            <div class="row my-2">
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="Present Address">
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

