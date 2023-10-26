<div>
    <div class="content-body">
        <div class="container-fluid">
            <div class="col-xl-5">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Modify PNR</h4>
                    </div>
                    <div class="card-body">
                        <!-- Nav tabs -->
                        <div class="default-tab">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#update"> Update</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#refound"> Refound</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#cancle"> Cancle</a>
                                </li>

                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="update" role="tabpanel">
                                    <div class="pt-4">
                                        <h4>Update</h4>
                                        <div class="mb-0 col-md-5">
                                            <label class="form-label"><strong>PNR No.</strong></label>
                                            <input type="text" class="form-control" placeholder="PNR">
                                        </div>
                                        &nbsp &nbsp
                                        <div class="mb-0 col-md-5">
                                            <label class="form-label"><strong>GDS</strong></label>
                                            <input type="text" class="form-control" placeholder="GDS">
                                        </div>
                                        &nbsp &nbsp
                                        <div class="mb-0 mb-3">
                                            <label><strong>Sector</strong></label>
                                            &nbsp &nbsp
                                            <label class="radio-inline me-3"><input type="radio" name="optradio"> Domestic </label>

                                            <label class="radio-inline me-3"><input type="radio" name="optradio"> International </label>
                                        </div>

                                        <div class="mb-0 col-md-5">
                                            <label class="form-label"><strong>Queue Numbers</strong></label>
                                            <input type="number" class="form-control" placeholder="Q_no1">
                                            &nbsp
                                            <input type="number" class="form-control" placeholder="Q_no2">
                                        </div>
                                        &nbsp &nbsp
                                        <div class="mb-0 col-md-5">
                                            <button type="button" class="btn btn-primary">Update</button>
                                        </div>



                                    </div>
                                </div>
                                <div class="tab-pane fade" id="refound">
                                    <div class="pt-4">
                                        <h4>Refound</h4>
                                        <div class="mb-0 col-md-5">
                                            <label class="form-label"><strong>PNR : </strong></label>
                                            <input type="text" class="form-control" placeholder="PNR">
                                        </div>
                                        &nbsp &nbsp

                                        <div class="mb-0 col-md-5">
                                            <button type="button" class="btn btn-primary">Update</button>
                                        </div>

                                    </div>
                                </div>
                                <div class="tab-pane fade" id="cancle">
                                    <div class="pt-4">
                                        <h4>Cancle</h4>
                                        <div class="mb-0 col-md-5">
                                            <label class="form-label"><strong>PNR No.</strong></label>
                                            <input type="text" class="form-control" placeholder="PNR">
                                        </div>
                                        &nbsp &nbsp
                                        <div class="mb-0 col-md-5">
                                            <label class="form-label"><strong>GDS</strong></label>
                                            <input type="text" class="form-control" placeholder="GDS">
                                        </div>
                                        &nbsp &nbsp
                                        <div class="mb-0 mb-3">
                                            <label><strong>Sector</strong></label>
                                            &nbsp &nbsp
                                            <label class="radio-inline me-3"><input type="radio" name="optradio"> Domestic </label>

                                            <label class="radio-inline me-3"><input type="radio" name="optradio"> International </label>
                                        </div>

                                        &nbsp &nbsp
                                        <div class="mb-0 col-md-5">
                                            <button type="button" class="btn btn-primary">Retrieve</button>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>