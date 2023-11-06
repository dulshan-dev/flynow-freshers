<div class="content-body">
    <div class="container-fluid">
                <div class="row page-titles">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Markup</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Transaction Fee Report</a></li>
                    </ol>
                </div>
        <div class="card mt-0">
            <div class="card-body">
                <div class="basic-form">
                    <form>
                            <div class="mb-3 row">
                                <label class="col-sm-2 col-form-label"><strong>Agency Name</strong></label>
                                    <div class="col-sm-3">
                                        <select class="me-sm-2 default-select form-control wide" id="inlineFormCustomSelect">
                                            <option selected>Selevt Agency   </option>
                                            <option value="1">Sri Lanka Traning</option>
                                            <option value="2">Sri Lanka Sub Agency</option>
                                            <option value="3">The Travel Port</option>
                                        </select>
                                    </div>
                                    <label class="col-sm-2 col-form-label"><strong>Status</strong></label>
                                    <div class="col-sm-3">
                                        <select class="me-sm-2 default-select form-control wide" id="inlineFormCustomSelect">
                                            <option selected>All   </option>
                                            <option value="1">Status 1</option>
                                            <option value="2">Status 2</option>
                                            <option value="3">Status 3</option>
                                        </select>
                                    </div>
                            </div>

                            <div class="mb-3 row">
                                <label class="col-sm-2 col-form-label"><strong>GDS Name</strong></label>
                                    <div class="col-sm-3">
                                        <select class="me-sm-2 default-select form-control wide" id="inlineFormCustomSelect">
                                            <option selected>All   </option>
                                            <option value="1">GDS Name 1</option>
                                            <option value="2">GDS Name 2</option>
                                            <option value="3">GDS Name 3</option>
                                        </select>
                                    </div>
                                    <label class="col-sm-2 col-form-label"><strong>Booking Sourse</strong></label>
                                    <div class="col-sm-3">
                                        <select class="me-sm-2 default-select form-control wide" id="inlineFormCustomSelect">
                                            <option selected>All   </option>
                                            <option value="1">Sourse 1</option>
                                            <option value="2">Sourse 2</option>
                                            <option value="3">Sourse 3</option>
                                        </select>
                                    </div>
                            </div>
                            <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label"><strong>Last Name</strong></label>
                                    <div class="col-sm-3">
                                        <input type="name" class="form-control"  placeholder="" >
                                    </div>
                                    <label class="col-sm-2 col-form-label"><strong>PNR No</strong></label>
                                    <div class="col-sm-3">
                                        <input type="number" class="form-control"  placeholder="" >
                                    </div>
                            </div>
                            <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label"><strong>From Date</strong></label>
                                    <div class="col-sm-3">
                                        <input type="date" class="form-control"  placeholder="" >
                                    </div>
                                    <label class="col-sm-2 col-form-label"><strong>To Date</strong></label>
                                    <div class="col-sm-3">
                                        <input type="date" class="form-control"  placeholder="" >
                                    </div>
                            </div>
                            <!--***Content ADD Button****-->
                            
                            <button type="button" class="btn btn-rounded btn-info"style="float: right;" data-bs-toggle="modal" data-bs-target=".bd-example-modal-lg"><span
                                class="btn-icon-start text-info"><i class="fa fa-download color-warning"></i>
                            </span>EXPORT</button>

                                    
                    </form>
                </div>
            </div>
        </div>

        <!--**********************************
                    Content Table Start
        ***********************************-->
        <div class="col-lg-12">
            <div class="card" id="tableMis"> 
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-responsive-md">
                            <thead>
                                <tr>
                                    <th style="width:80px;"><strong>#</strong></th>
                                    <th><strong>AGENCY nAME</strong></th>
                                    <th><strong>USER NAME</strong></th>
                                    <th><strong>DATE</strong></th>
                                    <th><strong>PNR</strong></th>
                                    <th><strong>BASE FARE</strong></th>
                                    <th><strong>YQ</strong></th>
                                    <th><strong>TOTAL TAX</strong></th>
                                    <th><strong>GROSS FARE</strong></th>
                                    <th><strong>Agency Transaction Fee </strong></th>
                                    <th><strong>Markup Fee</strong></th>
                                    <th><strong>OC TAX</strong></th>
                                    <th><strong>TOTAL(GF+TF+ST+EC+HEC-D)</strong></th>
                                    <th><strong>STATUS</strong></th>

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
                                    <td>5</td>
                                    <td>F</td>
                                    <td>F</td>
                                    <td>F</td>
                                    <td>F</td>
                                    <td>F</td>
                                
                                </tr>

                                <!-- Add more rows as needed -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!--**********************************
                    Content  Table end
        ***********************************-->
    </div>
</div>

<script>
// Auto numbers in tableMis row td    
document.addEventListener('DOMContentLoaded', function() {
        const table = document.getElementById('tableMis');
        const rows = table.querySelectorAll('tbody tr');
        
        rows.forEach((row, index) => {
            // Get the first cell in the row (the one with 'td' tag)
            const cell = row.querySelector('td');
            
            // Set the text content of the first cell to the row number
            cell.textContent = index + 1;
        });
    });

</script>

