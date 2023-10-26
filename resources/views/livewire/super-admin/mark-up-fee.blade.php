<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <div class="content-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Mark up Fee</h4>
                        </div>
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-md-2">
                                    <label for="AgencyName">Agency Name:</label>
                                    <div class="dropdown custom-dropdown mb-2">
                                        <button type="button"
                                            class="btn btn-sm btn-outline-primary rounded-0 btn-block"
                                            data-bs-toggle="dropdown">All
                                            <i class="fa fa-angle-down ms-3"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right rounded-0">
                                            <a class="dropdown-item" href="#">Agency 01</a>
                                            <a class="dropdown-item" href="#">Agency 02</a>
                                            <a class="dropdown-item" href="#">Agency 03</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <label for="GDSName">GDS Name:</label>
                                    <div class="dropdown custom-dropdown mb-2">
                                        <button type="button"
                                            class="btn btn-sm btn-outline-primary rounded-0 btn-block"
                                            data-bs-toggle="dropdown">Select GDS
                                            <i class="fa fa-angle-down ms-3"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right rounded-0">
                                            <a class="dropdown-item" href="#">GDS Option 1</a>
                                            <a class="dropdown-item" href="#">GDS Option 2</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 text-center">
                                    <label for="BookingType">Booking Type:</label><br>
                                    <input type="radio" id="Flight" name="bookingType">
                                    <label for="Flight">Flight</label>
                                </div>
                                <div class="col-md-1 text-center">
                                    <label for="Sector">Sector:</label>
                                    <div class="radiobtn" style="display: flex; align-items: center;">
                                        <input type="radio" id="Domestic" name="sector"
                                            style="display:flex; margin-right: 10px">
                                        <label for="Domestic" style="margin-right: 10px">Domestic</label>
                                        <input type="radio" id="International" name="sector"
                                            style="display:flex; margin-right: 10px">
                                        <label for="International" style=" margin-right: 10px">International</label>
                                    </div>
                                </div>

                                <!--Table-->
                                <div class="col-lg-12 mt-3">
                                    <button type="button" class="btn btn-rounded btn-transparent mb-3 mt-3">
                                        <span class="btn-icon-start text-info"><i class="fa fa-plus"
                                                style="color:black;"></i>
                                        </span>Add Row
                                    </button>

                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    <table class="table table-responsive-md">
                                                        <thead>
                                                            <tr>
                                                                <th><strong>Delete</strong></th>
                                                                <th><strong></strong></th>
                                                                <th><strong></strong></th>
                                                                <th><strong>Pay Mode</strong></th>
                                                                <th><strong>Amt</strong></th>
                                                                <th><strong>Applied-on</strong></th>
                                                            </tr>
                                                        </thead>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-end">
                                            <button type="button" class="btn btn-rounded btn-transparent mb-4">
                                                <span class="btn-icon-start text-info"><i class="fa fa-plus"
                                                        style="color:black;"></i></span>
                                                Add Row
                                            </button>
                                        </div>

                                        <div class="text-end mb-3">
                                            <button type="button" class="btn btn-rounded btn-success">Save</button>
                                            <button type="button" class="btn btn-rounded btn-danger">Delete</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
