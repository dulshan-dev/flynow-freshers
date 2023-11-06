 <!--**********************************
        Content body start
    ***********************************-->
    <div class="content-body ">
        <div class="container-fluid">

            <div class="row page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">ADM Transaction</a></li>
                </ol>
            </div>
        
             <!-- form -->
                    <div class="card">
                        <div class="card-body">
                            <div class="row">

                              <!--radio button-->
                              
                                <div class="mb-3 mb-0">
                                    <label class="radio-inline me-3"><input type="radio" name="optradio"> Date</label>
                                    <label class="radio-inline me-3"><input type="radio" name="optradio"> Date Range</label>
                                </div>


                            <!--Date picker-->
                            <div class="card-body">
                                <div class="basic-form">
                                    <form class="d-flex align-items-center">
                                        <label class="col-sm-1 col-form-label">Select Date</label>
                                        <div class="mb-2 mx-sm-3">
                                            <input class="form-control input-daterange-datepicker" type="text" name="daterange" value="01/01/2015 - 01/31/2015">
                                        </div>
                                <!--button-->
                                        <button type="submit" class="btn btn-primary mb-2">View Transactions</button>
                                    </form>
                                </div>
                            </div>    
                            </div>
                        </div>
                    </div>
                </div>
           

      <!--table-->
           
            <div class="row">
                <div class="col-12">
                    <div class="card">

                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example" class="display" style="min-width: 845px">
                                    <thead>
                                        <tr>
                                            <th>Curruncy</th>
                                            <th>Amount</th>
                                            <th>Transaction Type</th>
                                            <th>Comment</th>
                                            <th>Username </th>
                                            <th>Date</th>
                                            <th>Attachment</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            </div>