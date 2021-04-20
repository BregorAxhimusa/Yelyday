<div id="bar-coffee" class="container-fluid">
    <div class="row">
        <!-- <div class="col-lg-4">
            <div class="card mt-2">
                <div class="card-body">
                    <h5 class="mt-3">AEO/CEO</h5>
                    <p class="ml-2">Bregor Axhimusa</p>
                    <p class="description-p">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptates
                        atque vitae cupiditate mollitia nihil sint non dolores veniam beatae doloribus eum nulla quo
                        autem, nam rem. Impedit amet fugit molestias.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card mt-2">
                <div class="card-body">
                    <h5 class="mt-3">AEO/CEO</h5>
                    <p class="ml-2">Bregor Axhimusa</p>
                    <p class="description-p">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptates
                        atque vitae cupiditate mollitia nihil sint non dolores veniam beatae doloribus eum nulla quo
                        autem, nam rem. Impedit amet fugit molestias.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card mt-2">
                <div class="card-body">
                    <h5 class="mt-3">AEO/CEO</h5>
                    <p class="ml-2">Bregor Axhimusa</p>
                    <p class="description-p">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptates
                        atque vitae cupiditate mollitia nihil sint non dolores veniam beatae doloribus eum nulla quo
                        autem, nam rem. Impedit amet fugit molestias.
                    </p>
                </div>
            </div>
        </div> -->
        <div class="col-lg-12">
            <div class="card mt-2">
                <div class="card-body">
                    <h5 class="bottom-px p-3">ADD OFFERS</h5>
                    <form class="form-css" action="">
                        <p class="mt-4 form-p">BUSSINES INFORMATION</p>
                        <div class="bottom-px px-4">
                            <div class="row">
                                <div class="col-lg-6">
                                    <label class="form-label">Select Bussines</label>
                                    <select class="form-control">
                                        <option value="1">Bussines 1</option>
                                        <option value="2">Bussines 2</option>
                                    </select>
                                </div>
                                <div class="col-lg-6">
                                    <label class="form-label">Mail</label>
                                    <input type="email" class="form-control">
                                </div>
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
                                <div class="col-lg-4 mb-5">
                                    <label class="form-label">Postal Code</label>
                                    <input type="number" min="0" class="form-control">
                                </div>
                            </div>
                        </div>
                        <p class="mt-4 form-p">OFFERS INFORMATION</p>
                        <div class="bottom-px px-3">
                            <div class="row">
                                <div class="col-lg-6">
                                    <label class="form-label">Name Offers</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label>Start Date</label>
                                        <div>
                                            <div id="picker"></div>
                                            <input type="hidden" id="result" value="" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label>End Date</label>
                                        <div>
                                            <div id="picker1"></div>
                                            <input type="hidden" id="result" value="" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <label class="form-label"> List price</label>
                                    <div class="input-group">
                                        <input class="form-control" type="number" value="100" min="1" max="999" name="list">
                                        <span class="input-group-text">.00</span>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <label class="form-label">Sale price</label>
                                    <div class="input-group">
                                        <input class="form-control" type="number" min="1" max="999" name="sale"
                                            disabled>
                                        <span class="input-group-text">.00</span>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <label class="form-label">Percent</label>
                                    <div class="input-group">
                                        <input class="form-control" type="number" value="100" min="1" max="999" name="disc">
                                        <span class="input-group-text">%</span>
                                    </div>
                                </div>
                                <div class="col-lg-12 mt-3 mb-5">
                                    <label class="">Choose Image</label>
                                    <input type="file" name="files" required>
                                </div>
                                <div class="col-lg-12">
                                    <label class="form-label">Description</label>
                                    <textarea class="content" name="example"></textarea>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-button mt-3 float-right">ADD OFFERS</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="card mt-2">
                <h5 class="p-4">Business List</h5>
                <div class="card-body">
                    <table id="offers-table" class="display"></table>
                </div>
            </div>
        </div>
    </div>
</div>