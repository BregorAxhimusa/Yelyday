<div id="bar-coffee" class="container-fluid">
    <div class="row">
        <div class="col-lg-8 col-12">
            <div class="card mt-2">
                <div class="card-body">
                    <h5 class="bottom-px p-3">ADD BUSSINES</h5>
                    <form class="form-css" action="">
                        <p class="mt-4 form-p">BUSSINES INFORMATION</p>
                        <div class="bottom-px px-lg-4 px-0">
                            <div class="row">
                                <div class="col-lg-6">
                                    <label class="form-label">Name Bussines</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="col-lg-6">
                                    <label class="form-label">Mail</label>
                                    <input type="email" class="form-control">
                                </div>
                                <div class="col-lg-6">
                                    <label class="form-label">Start date</label>
                                    <input type="text" class="form-control timepicker">
                                </div>
                                <div class="col-lg-6 mb-5">
                                    <label class="form-label">End date</label>
                                    <input type="text" class="form-control timepicker">
                                </div>
                            </div>
                        </div>
                        <p class="mt-4 form-p">ABOUT BUSSINES</p>
                        <div class="bottom-px px-lg-4 px-0">
                            <div class="row">
                                <div class="col-lg-12">
                                    <label class="form-label">Adress</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="col-lg-6">
                                    <label class="form-label">Phone Number</label>
                                    <input type="number" min="0" class="form-control">
                                </div>
                                <div class="col-lg-6">
                                    <label class="form-label">Location</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="col-lg-4">
                                    <label class="form-label">Country</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="col-lg-4">
                                    <label class="form-label">City</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="col-lg-4">
                                    <label class="form-label">Postal Code</label>
                                    <input type="number" min="0" class="form-control">
                                </div>
                                <div class="col-lg-12">
                                    <label class="">Choose Image</label>
                                    <input type="file" name="files" required>
                                </div>
                                <div class="col-lg-12 mb-5">

                                </div>
                            </div>
                        </div>
                        <p class="mt-4 form-p">CONTACT INFORMATION</p>
                        <div class="bottom-px px-lg-4 px-0">
                            <div class="row">
                                <div class="col-lg-4">
                                    <label class="form-label">Instagram</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="col-lg-4">
                                    <label class="form-label">Twitter</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="col-lg-4">
                                    <label class="form-label">Facebook</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="col-lg-12 mb-5">
                                    <label class="form-label">Description</label>
                                    <textarea class="form-control textarea-editor" rows="3"></textarea>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-button mt-3 float-right">ADD BUSSINES</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card card-profile">
                <div class="card-body text-center">
                    <img src="Views/assets/img/marc.jpg" class="rounded-circle" width="200px" height="200px" alt="">
                    <h5 class="mt-3">AEO/CEO</h5>
                    <p class="ml-2">Bregor Axhimusa</p>
                    <p class="description-p px-4 ">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptates
                        atque vitae cupiditate mollitia nihil sint non dolores veniam beatae doloribus eum nulla quo
                        autem, nam rem. Impedit amet fugit molestias.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="card mt-2">
                <h5 class="p-4">Business List</h5>
                <div class="card-body">
                    <table class="table table-edit table-hover">
                        <thead>
                            <tr>
                                <th>Name Business</th>
                                <th>Mail</th>
                                <th>City</th>
                                <th>Address</th>
                                <th>Location</th>
                                <th>Options</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Fast Food</td>
                                <td>fastfood@gmail.com</td>
                                <td>Ferizaj</td>
                                <td>Rr.fast food 123</td>
                                <td>ASD123</td>
                                <td>
                                    <a href="" data-bs-toggle="modal" data-bs-target="#edit-bussines">
                                        <img src="Views/assets/img/edit-blue.svg" class="" width="20px" height="20px"
                                            alt="">
                                    </a>
                                    <a href="">
                                        <img src="Views/assets/img/x.svg" class=" ml-2" width="23px" height="23px"
                                            alt="">
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Fast Food asdasd ad asda da sd</td>
                                <td>fastfood@gmail.com</td>
                                <td>Ferizaj</td>
                                <td>Rr.fast food 123 asdasd a afd fad</td>
                                <td>ASD123</td>
                                <td>
                                    <a href="" data-bs-toggle="modal" data-bs-target="#edit-bussines">
                                        <img src="Views/assets/img/edit-blue.svg" class="" width="20px" height="20px"
                                            alt="">
                                    </a>
                                    <a href="">
                                        <img src="Views/assets/img/x.svg" class=" ml-2" width="23px" height="23px"
                                            alt="">
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>