<div>

    <div class="content-body">
        <div class="container-fluid">
            <div class="row page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Agency Management</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Transaction Fee</a></li>
                </ol>
            </div>
            <div class="card mt-0">

                <div class="card-body">
                    <div class="basic-form">
                        <!--**********************************
                                                        Content Inline  Start
                                            ***********************************-->
                        <div class="col-lg-12">
                            <div class="card">

                                <div class="card-body">

                                    <form>

                                        &nbsp
                                        <label class="form-label"><strong>Agency Id </strong><input type="text" class="form-control" placeholder="Agency_ID"></label>
                                        &nbsp &nbsp
                                        <label><strong>Booking Type</strong></label>
                                        &nbsp &nbsp
                                        <label class="radio-inline me-3"><input type="radio" name="optradio"> Flight </label>
                                        &nbsp &nbsp
                                        <label class="radio-inline me-3"><input type="radio" name="optradio"> ....?... </label>

                                        &nbsp &nbsp &nbsp &nbsp

                                        <label><strong>Sector</strong></label>
                                        &nbsp &nbsp
                                        <label class="radio-inline me-3"><input type="radio" name="optradio"> Domestic </label>
                                        &nbsp &nbsp
                                        <label class="radio-inline me-3"><input type="radio" name="optradio"> International </label>



                                        <!--**********************************
            Content ADD Button 
***********************************-->

                                        <!-- Large modal -->

                                        <button type="button" class="btn btn-rounded btn-info" style="float: right" data-bs-toggle="modal" data-bs-target=".bd-example-modal-lg"><span class="btn-icon-start text-info"><i class="fa fa-plus color-info"></i>
                                            </span>Add</button>


                                        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Add New Transaction Fee</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal">
                                                        </button>
                                                    </div>
                                                    <!--modal body -->
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="mb-3 col-md-6">
                                                                <label class="form-label">Agency Id</label>
                                                                <input type="text" class="form-control" placeholder="Agency_ID">
                                                            </div>
                                                            <div class="mb-3 col-md-6">
                                                                <label class="form-label">Agency Name</label>
                                                                <input type="text" class="form-control" placeholder="Agency Name">
                                                            </div>
                                                            <div class="mb-3 col-md-6">
                                                                <label class="form-label">Applied-on Type</label>
                                                                <input type="type" class="form-control" placeholder="Applied-on Type">
                                                            </div>
                                                            <div class="mb-3 col-md-6">
                                                                <label class="form-label">Mode</label>
                                                                <input type="mode" class="form-control" placeholder="Mode">
                                                            </div>
                                                            <div class="mb-3 col-md-6">
                                                                <label class="form-label">Amt/%</label>
                                                                <input type="amt/%" class="form-control" placeholder="Amt/%">
                                                            </div>
                                                            <div class="mb-3 col-md-6">
                                                                <label class="form-label">Calc-on</label>
                                                                <input type="calc-on" class="form-control" placeholder="calc-on">
                                                            </div>



                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                                                            <button type="button" class="btn btn-primary">Save changes</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!--**********************************
                                                        Content Inline  Close
                                            ***********************************-->
                        <!--**********************************
                                                        Content Table Start
                                            ***********************************-->
                        <div class="col-lg-12">
                            <div class="card">

                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-responsive-md">
                                            <thead>
                                                <tr>
                                                    <th style="width:50px;">
                                                        <div class="form-check custom-checkbox checkbox-success check-lg me-3">
                                                            <input type="checkbox" class="form-check-input" id="checkAll" required="">
                                                            <label class="form-check-label" for="checkAll"></label>
                                                        </div>
                                                    </th>
                                                    <th><strong>NO.</strong></th>
                                                    <th><strong>Agency Id</strong></th>
                                                    <th><strong>APPLIED-ON</strong></th>
                                                    <th><strong>MODE</strong></th>
                                                    <th><strong>Amt/%</strong></th>
                                                    <th><strong>Calc On</strong></th>
                                                    <th><strong>Status</strong></th>
                                                    <th><strong></strong></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="form-check custom-checkbox checkbox-success check-lg me-3">
                                                            <input type="checkbox" class="form-check-input" id="customCheckBox2" required="">
                                                            <label class="form-check-label" for="customCheckBox2"></label>
                                                        </div>
                                                    </td>
                                                    <td><strong>01</strong></td>

                                                    <td>Agency name</td>

                                                    <td>Type</td>
                                                    <td>Mode</td>
                                                    <td>10</td>
                                                    <td>Calc on</td>
                                                    <td>
                                                        <div class="d-flex align-items-center"><i class="fa fa-circle text-success me-1"></i> Successful</div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex">
                                                            <a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                                            <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="form-check custom-checkbox checkbox-success check-lg me-3">
                                                            <input type="checkbox" class="form-check-input" id="customCheckBox3" required="">
                                                            <label class="form-check-label" for="customCheckBox3"></label>
                                                        </div>
                                                    </td>
                                                    <td><strong>02</strong></td>
                                                    <td>travel</td>

                                                    <td>Type</td>
                                                    <td>Mode</td>
                                                    <td>8</td>
                                                    <td>Calc on</td>
                                                    <td>
                                                        <div class="d-flex align-items-center"><i class="fa fa-circle text-danger me-1"></i> Canceled</div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex">
                                                            <a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                                            <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="form-check custom-checkbox checkbox-success check-lg me-3">
                                                            <input type="checkbox" class="form-check-input" id="customCheckBox4" required="">
                                                            <label class="form-check-label" for="customCheckBox4"></label>
                                                        </div>
                                                    </td>
                                                    <td><strong>03</strong></td>
                                                    <td>port</td>

                                                    <td>Type</td>
                                                    <td>Mode</td>
                                                    <td>25</td>
                                                    <td>Calc on</td>
                                                    <td>
                                                        <div class="d-flex align-items-center"><i class="fa fa-circle text-warning me-1"></i> Pending</div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex">
                                                            <a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                                            <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--**********************************
            Content Table end
***********************************-->


                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--**********************************
            Content Inline Radio end
***********************************-->
</div>