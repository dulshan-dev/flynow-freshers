<!--**********************************
            Content Inline Radio start
        ***********************************-->
<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Agency Management</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">Good Service Tax</a></li>
            </ol>
        </div>
        <div class="card mt-0">

            <div class="card-body">
                <div class="basic-form">
                    <form>
                        <!--**********************************
                                        Drop Down  start
                                ***********************************-->
                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label"><strong>Agency Name</strong></label>
                            <div class="col-sm-3">
                                <select class="me-sm-2 default-select form-control wide" id="inlineFormCustomSelect">
                                    <option selected>Choose... </option>
                                    <option value="1">Sri Lanka Traning</option>
                                    <option value="2">Sri Lanka Sub Agency</option>
                                    <option value="3">The Travel Port</option>
                                </select>
                            </div>
                        </div>


                        &nbsp &nbsp
                        <!--**********************************
        Drop Down  end
***********************************-->

                        <!--***** Booking Type Radio button Strat ***-->
                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label"><strong>Booking Type</strong></label>
                            <div class="col-sm-5">

                                <label class="radio-inline me-3">
                                    <input type="radio" name="bookingtype" value="flight" id="flight" checked> Flight
                                </label>
                            </div>
                        </div>

                        <!--***** Booking Type Radio button end ***-->

                        <!--**********************************
        Sector radio button start
***********************************-->
                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label"><strong>Sector</strong></label>
                            <div class="col-sm-5">

                                <label class="radio-inline me-3">
                                    <input type="radio" name="sector" value="domestic" id="domestic" checked> Domestic
                                </label>
                                &nbsp &nbsp
                                <label class="radio-inline me-3">
                                    <input type="radio" name="sector" value="international" id="international"> International
                                </label>
                            </div>
                        </div>


                        <!--**********************************
        Sector radio button end
***********************************-->
                        <!--*** Content Body start ***-->
                        <div class="card-body">
                            <div class="basic-form" id="sectormenu">
                                <form>

                                    <div class="mb-3 row">
                                        <label class="col-sm-2 col-form-label"><strong>CGST (%)</strong></label>
                                        <div class="col-sm-3">
                                            <input type="number" class="form-control" placeholder="CGST">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-2 col-form-label"><strong>SGST (%)</strong></label>
                                        <div class="col-sm-3">
                                            <input type="number" class="form-control" placeholder="SGST">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-2 col-form-label"><strong>IGST (%)</strong></label>
                                        <div class="col-sm-3">
                                            <input type="number" class="form-control" placeholder="IGST">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-2 col-form-label"><strong>UGST (%)</strong></label>
                                        <div class="col-sm-3">
                                            <input type="number" class="form-control" placeholder="UGST">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-2 col-form-label"><strong>Calculated On </strong></label>
                                        <div class="col-sm-3">
                                            <select class="me-sm-2 default-select form-control wide" id="inlineFormCustomSelect">
                                                <option selected>Choose... </option>
                                                <option value="1">Base Fare</option>
                                                <option value="2">Transaction Fee</option>
                                                <option value="3">Commission</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!--*** Button ***-->
                                    <div class="card-body">
                                        <div class="rounded-button mt-3">
                                            <button type="button" class="btn btn-rounded btn-outline-danger">Delete</button>
                                            &nbsp &nbsp
                                            <button type="button" class="btn btn-rounded btn-outline-success">Save</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <!--*** Content Body end ***-->
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>