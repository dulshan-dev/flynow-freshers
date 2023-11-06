<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Credit Limit Details</a></li>
            </ol>
        </div>

        <!-- Table -->
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <!-- Agency Name -->
                    <div class="mb-3 col-md-6">
                        <div class="row">
                            <label class="col-form-label">Agency Name</label>
                        </div>
                        <div class="row">
                            <select id="inputState" class="default-select form-control wide">
                                <option selected>Select Agency...</option>
                                <option>one</option>
                                <option>two</option>
                                <option>three</option>
                            </select>
                        </div>
                    </div>

                    <!-- Existing Credit Limit -->
                    <div class="mb-3 col-md-6">
                        <label class="form-label">Existing Credit Limit</label>
                        <input type="text" class="form-control" placeholder=" ">
                    </div>

                    <!-- Credit Limit -->
                    <div class="mb-3 col-md-6">
                        <label class="form-label">Credit Limit</label>
                        <input type="text" class="form-control" placeholder=" ">
                    </div>

                    <!-- FOP Type -->
                    <div class="mb-3 col-md-6">
                        <div class="row">
                            <label class="col-form-label">FOP Type</label>
                        </div>
                        <div class="row">
                            <select id="inputState" class="default-select form-control wide">
                                <option selected>Select...</option>
                                <option>one</option>
                                <option>two</option>
                                <option>three</option>
                            </select>
                        </div>
                    </div>

                    <!-- Request for Update -->
                    <div class="mb-3 col-md-6">
                        <div class="row">
                            <label class="col-form-label">Request for Update</label>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                <form>
                                    <div class="mb-3">
                                        <textarea class="form-control" rows="4" id="comment"></textarea>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- Radio button -->
                    <div class="row">
                        <label class="col-form-label col-sm-3 pt-0">Check Credit Limit</label>
                        <form>
                            <div class="mb-3 mb-0">
                                <label class="radio-inline me-3">
                                    <input type="radio" name="sector" value="domestic" id="domestic"> At the time of PNR Creation
                                </label>
                                <label class="radio-inline me-3">
                                    <input type="radio" name="sector" value="international" id="international"> At the time of Ticket Issuance
                                </label>
                            </div>
                        </form>
                    </div>

                    <!-- button -->

                    <div class="card-body">
                        <button type="button" class="btn btn-primary">Transfer</button>
                        <button type="button" class="btn btn-primary">Refund</button>
                        <button type="button" class="btn btn-primary">Update</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>