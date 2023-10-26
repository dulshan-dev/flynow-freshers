<div>
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">

            <!-- ----------------------------------------------Form------------------------ -->
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="mb-3 col-md-12">
                            <div class="mb-3 mb-0">
                                <label class="radio-inline me-3"><input type="radio" name="optradio"> Date</label>
                                <label class="radio-inline me-3"><input type="radio" name="optradio"> Date Range</label>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-5">
                        <div class="mb-3 col-md-4">
                            <label class="form-label">Select Date</label>
                            <input class="form-control input-daterange-datepicker" type="text" name="daterange" value="Select date range">
                        </div>

                        <div class="mb-3 col-md-4">
                            <label class="form-label">Select Account / Type</label>
                            <select class="default-select form-control wide mb-3">
                                <option disabled selected>Type</option>
                                <option>Option 1</option>
                                <option>Option 2</option>
                                <option>Option 3</option>
                            </select>
                        </div>

                        <div class="d-flex align-items-center col-md-4">
                            <button type="submit" class="btn btn-primary">View Transactions</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- -------------------------------------------------------------------------- -->
            <div class="card">
                <div class="card-body">
                    <!-- --------------------------------------Table------------------------------------- -->
                    <div class="row">
                        <div class="col-12">
                            <div class="table-responsive">
                                <table id="example" class="display" style="min-width: 845px">
                                    <thead>
                                        <tr>
                                            <th>PNR</th>
                                            <th>Payment Id</th>
                                            <th>Currency</th>
                                            <th>Amount</th>
                                            <th>Ticket No</th>
                                            <th>Transaction Type</th>
                                            <th>Comment</th>
                                            <th>Account</th>
                                            <th>Username</th>
                                            <th>Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>#66474873</td>
                                            <td>PN667584</td>
                                            <td>LKR</td>
                                            <td>25000</td>
                                            <td>TN666548332</td>
                                            <td>Online</td>
                                            <td>Ok</td>
                                            <td>User</td>
                                            <td>Samantha</td>
                                            <td>12/12/2023</td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>PNR</th>
                                            <th>Payment Id</th>
                                            <th>Currency</th>
                                            <th>Amount</th>
                                            <th>Ticket No</th>
                                            <th>Transaction Type</th>
                                            <th>Comment</th>
                                            <th>Account</th>
                                            <th>Username</th>
                                            <th>Date</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>