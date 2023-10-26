<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Agency Management</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">Airline Commision</a></li>
            </ol>
        </div>
        <div class="card mt-0">

            <div class="card-body">
                <div class="basic-form">
                    <form>
                        <!--**********************************
        Inline radio button start
***********************************-->
                        <div class="mb-3 mb-0">
                            <label><strong>Sector</strong></label>
                            &nbsp &nbsp
                            <label class="radio-inline me-3">
                                <input type="radio" name="optradio" value="domestic" id="domestic" checked> Domestic
                            </label>
                            &nbsp &nbsp
                            <label class="radio-inline me-3">
                                <input type="radio" name="optradio" value="international" id="international"> International
                            </label>

                            <!--**********************************
        Inline radio button end
***********************************-->

                            <!--**********************************
            Content ADD Button 
***********************************-->

                            <button type="button" class="btn btn-rounded btn-info" style="float: right;" data-bs-toggle="modal" data-bs-target=".bd-example-modal-lg"><span class="btn-icon-start text-info"><i class="fa fa-plus color-info"></i>
                                </span>Add</button>

                            <!--large modal-->
                            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Add New Airline- Commission</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal">
                                            </button>
                                        </div>
                                        <!--modal body start -->
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="mb-3 row">
                                                    <label class="col-sm-4 col-form-label"><strong>Sector</strong></label>
                                                    <div class="col-sm-4">
                                                        &nbsp &nbsp
                                                        <label class="radio-inline me-3">
                                                            <input type="radio" name="optradio" value="domesticAdd" id="domesticAdd" checked> Domestic
                                                        </label>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        &nbsp &nbsp
                                                        <label class="radio-inline me-3">
                                                            <input type="radio" name="optradio" value="internationalAdd" id="internationalAdd"> International
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label class="col-sm-4 col-form-label"><strong>Airline</strong></label>
                                                    <div class="col-sm-4">
                                                        <select class="me-sm-2 default-select form-control wide" id="inlineFormCustomSelect">
                                                            <option selected>Choose... </option>
                                                            <option value="1">Sri Lanka Traning</option>
                                                            <option value="2">Sri Lanka Sub Agency</option>
                                                            <option value="3">The Travel Port</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label class="col-sm-4 col-form-label"><strong>Segment</strong></label>
                                                    <div class="col-sm-4">
                                                        <input type="text" class="form-control" placeholder="Segment1">
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <input type="text" class="form-control" placeholder="Segment2">
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label class="col-sm-4 col-form-label"><strong>Include Class</strong></label>
                                                    <div class="col-sm-4">
                                                        <input type="text" class="form-control" placeholder="A,B,C,...">
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label class="col-sm-4 col-form-label"><strong>Cabin Class</strong></label>
                                                    <div class="col-sm-4">
                                                        <select class="me-sm-2 default-select form-control wide" id="inlineFormCustomSelect">
                                                            <option selected>Choose... </option>
                                                            <option value="1">Class1</option>
                                                            <option value="2">Class2</option>
                                                            <option value="3">Class3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label class="col-sm-4 col-form-label"><strong>IATA Com(%)</strong></label>
                                                    <div class="col-sm-4">
                                                        <input type="number" class="form-control" placeholder="%">
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label class="col-sm-4 col-form-label"><strong>IATA Com(%) Calc-on type</strong></label>
                                                    <div class="col-sm-4">
                                                        <select class="me-sm-2 default-select form-control wide" id="inlineFormCustomSelect">
                                                            <option selected>Choose... </option>
                                                            <option value="1">type1</option>
                                                            <option value="2">type2</option>
                                                            <option value="3">type3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label class="col-sm-4 col-form-label"><strong>Extra Com(%)</strong></label>
                                                    <div class="col-sm-4">
                                                        <input type="number" class="form-control" placeholder="Extra Com(%)">
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label class="col-sm-4 col-form-label"><strong>Extra Com(%) sale Validity</strong></label>
                                                    <div class="col-sm-4">
                                                        <input type="date" class="form-control" placeholder="Start">
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <input type="date" class="form-control" placeholder="End">
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label class="col-sm-4 col-form-label"><strong>Extra Com(%) Travel Validity</strong></label>
                                                    <div class="col-sm-4">
                                                        <input type="date" class="form-control" placeholder="Start">
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <input type="date" class="form-control" placeholder="End">
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label class="col-sm-4 col-form-label"><strong>PLB Com(%)</strong></label>
                                                    <div class="col-sm-4">
                                                        <input type="number" class="form-control" placeholder="PLB Com(%)">
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label class="col-sm-4 col-form-label"><strong>PLB Com(%) Calc-on type</strong></label>
                                                    <div class="col-sm-4">
                                                        <select class="me-sm-2 default-select form-control wide" id="inlineFormCustomSelect">
                                                            <option selected>Choose... </option>
                                                            <option value="1">type1</option>
                                                            <option value="2">type2</option>
                                                            <option value="3">type3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label class="col-sm-4 col-form-label"><strong>PLB Com(%) sale Validity</strong></label>
                                                    <div class="col-sm-4">
                                                        <input type="date" class="form-control" placeholder="Start">
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <input type="date" class="form-control" placeholder="End">
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label class="col-sm-4 col-form-label"><strong>PLB Com(%) Travel Validity</strong></label>
                                                    <div class="col-sm-4">
                                                        <input type="date" class="form-control" placeholder="Start">
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <input type="date" class="form-control" placeholder="End">
                                                    </div>
                                                </div>
                                            </div>
                                            <!--modal body end -->

                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Save changes</button>
                                            </div>
                                            <!--Save successfull alart-->
                                            <div class="alert alert-primary alert-dismissible fade show">
                                                <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2">
                                                    <circle cx="12" cy="12" r="10"></circle>
                                                    <path d="M8 14s1.5 2 4 2 4-2 4-2"></path>
                                                    <line x1="9" y1="9" x2="9.01" y2="9"></line>
                                                    <line x1="15" y1="9" x2="15.01" y2="9"></line>
                                                </svg>
                                                <strong>Save!</strong> Successful
                                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
                                                </button>
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
            Content Table Start
***********************************-->
        <div class="col-lg-12">
            <div class="card" id="tableDomestic">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-responsive-md">
                            <thead>
                                <tr>
                                    <th style="width:80px;"><strong>#</strong></th>
                                    <th><strong>AIRLINE</strong></th>
                                    <th><strong>SEGMENT</strong></th>
                                    <th><strong>INCLUDE CLASS</strong></th>
                                    <th><strong>CABIN CLASS</strong></th>
                                    <th><strong>IATA COM(%)</strong></th>
                                    <th><strong>IATA COM(%)CALC-ON TYPE</strong></th>
                                    <th><strong>EXTRA COM(%)</strong></th>
                                    <th><strong>EXTRA COM SALE VALIDITY</strong></th>
                                    <th><strong>EXTRA COM TRAVEL VALIDITY</strong></th>
                                    <th><strong>PLB COM(%)</strong></th>
                                    <th><strong>PLB COM(%)CALC-ON TYPE</strong></th>
                                    <th><strong>PLB COM SALE VALIDITY</strong></th>
                                    <th><strong>PLB COM TRAVEL VALIDITY</strong></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><strong></strong></td>
                                    <td>SRI LANKAN AIR LINE</td>
                                    <td>SEGMENT</td>
                                    <td>INCLUDE CLASS</td>
                                    <td>CABIN CLASS</td>
                                    <td>12.5</td>
                                    <td>IATA COM(%)CALC-ON TYPE</td>
                                    <td>2</td>
                                    <td><span class="badge light badge-success">DATE</span></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                            <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>

                                <!-- Add more rows as needed -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!--**********************************
            Content Domestic Table end
***********************************-->
        <!--**********************************
            Note start
***********************************-->
        <div class="mb-3">
            <input class="form-control" type="text" placeholder="Note : Commission on YQ TAX will reflect only in booking of IBE" readonly>
        </div>
        <!--**********************************
            Note end
***********************************-->
    </div>
</div>

<!--**********************************
            Content Inline Radio end
***********************************-->