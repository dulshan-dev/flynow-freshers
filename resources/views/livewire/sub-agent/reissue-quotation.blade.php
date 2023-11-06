<div>
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">

            <!-- <div class="row page-titles fw-semibold fs-4">
                Statements
            </div> -->
            <div class="row page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Reissue Quotation</a></li>
                    
                </ol>
            </div>
           

            <!-- ----------------------------------------------Form------------------------ -->
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <form>
                                <div class="row">

            <!-- --------------------------------------Select bar------------------------------------- -->

                                    <div class="row">
                                        <label class="form-label">PCC*</label>
                                        <select class="default-select form-control wide mb-3">
                                            <option disabled selected>Select Provider</option>
                                            <option>Option 1</option>
                                            <option>Option 2</option>
                                            <option>Option 3</option>
                                        </select>
                                    </div>

                                   <!-- Existing Booking PNR section -->
                                <div class="row mb-4"> <!-- Add mb-4 class to create space below -->
                                    <label class="form-label">Existing Booking PNR *</label>
                                    <input type="text" class="form-control" placeholder=" ">
                                </div>

                                <!-- Ticket(s) To Be Reissued section -->
                                <div class="row mb-4"> <!-- Add mb-4 class to create space below -->
                                    <label class="form-label">Ticket(s) To Be Reissued *</label>
                                    <input type="text" class="form-control" placeholder=" ">
                                </div>

                                   <!-- Button section -->
                                    <div class="text-right mb-4"> <!-- Add mb-4 class to create space below -->
                                        <button type="button" class="btn btn-rounded btn-info btn-sm">
                                            <span class="btn-icon-start text-info">
                                                <i class="fa fa-plus color-info"></i>
                                            </span>
                                            Add
                                        </button>
                                    </div>

                                    <!-- Text area -->
                                    <div class="row mb-4"> <!-- Add mb-4 class to create space below -->
                                        <label class="form-label">New Booking PNR (if applicable)</label>
                                        <input type="text" class="form-control" placeholder=" ">
                                    </div>

                                    <!-- Radio Button -->
                                    <div class="row">
                                        <label class="col-form-label col-sm-3 pt-0">Is this a 'No Show'? *
                                        </label>
                                        <form>
                                            <div class="mb-3 mb-0">
                                                <label class="radio-inline me-3">
                                                    <input type="radio" name="sector" value="domestic" id="domestic"> Yes
                                                </label>
                                                <label class="radio-inline me-3">
                                                    <input type="radio" name="sector" value="international" id="international"> No
                                                </label>
                                            </div>
                                        </form>
                                    </div>

                                     <!-- Radio Button -->
                                     <div class="row">
                                        <label class="col-form-label col-sm-3 pt-0">Reissue Type *
                                        </label>
                                        <form>
                                            <div class="mb-3 mb-0">
                                                <label class="radio-inline me-3">
                                                    <input type="radio" name="sector" value="domestic" id="domestic"> Voluntary

                                                </label>
                                                <label class="radio-inline me-3">
                                                    <input type="radio" name="sector" value="international" id="international">Involuntary
                                                </label>
                                            </div>
                                        </form>
                                    </div>


                                     <!-- Radio Button -->
                                     <div class="row">
                                        <label class="col-form-label col-sm-3 pt-0">Service Type *
                                        </label>
                                        <form>
                                            <div class="mb-3 mb-0">
                                                <label class="radio-inline me-3">
                                                    <input type="radio" name="sector" value="domestic" id="domestic"> Standard Reissue
                                                </label>
                                                <label class="radio-inline me-3">
                                                    <input type="radio" name="sector" value="international" id="international"> Express Reissue
                                                </label>
                                                <label class="radio-inline me-3">
                                                    <input type="radio" name="sector" value="domestic" id="domestic"> After-Hours Reissue
                                                </label>
                                               
                                            </div>
                                        </form>
                                    </div>

                                      <!-- Request for Update -->
                                      <div class="mb-3 row">
                                        <div class="row">
                                            <label class="col-form-label">Request for Update</label>
                                        </div>
                                        <div class="card-body">
                                            <div class="basic-form row">
                                                <form>
                                                    <div class="mb-3 row">
                                                        <textarea class="form-control" id="comment"></textarea>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Drag and Drop File Input -->
                                        <div class="row mb-4">
                                            <label class="form-label">Attachment
                                            </label>
                                            <input type="file" id="file-input" class="form-control" multiple accept="image/*">
                                        </div>

                                        <div class="card-body">
                                            <button type="button" class="btn btn-primary">Request</button>
                                            
                                        </div>
                                        

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ---------------------------------------------------------------------------------------- -->
            <div class="card">
                <div class="card-body">
                    <!-- --------------------------------------Table------------------------------------- -->
                    <div class="row">

                        <div class="col-12">
                            <div class="table-responsive">
                                <table id="example" class="display" style="min-width: 845px">
                                    <thead>
                                        <tr>
                                            <th>Ticket(s) To Be Reissued</th>
                                            <th>New Booking </th>
                                            <th>Status</th>
                                            <th>Comment </th>
                                            <th>Quote </th>
                                            <th>Outcome</th>
                                            <th>Actions</th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>PN667584</td>
                                            <td>#66474873</td>
                                            <td>LKR</td>
                                            <td>25000</td>
                                            <td>TN666548332</td>
                                            <td>Online</td>
                                            <td>Ok</td>
                                           
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Ticket(s) To Be Reissued </th>
                                            <th>New Booking </th>
                                            <th>Status</th>
                                            <th>Comment </th>
                                            <th>Quote </th>
                                            <th>Outcome</th>
                                            <th>Actions</th>
                                           
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ---------------------------------------------Table------------------------------------- -->
    </div>
</div