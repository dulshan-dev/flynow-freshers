<div>
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            {{-- table start --}}
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Agency Status</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example" class="display" style="min-width: 845px">
                                    <thead>
                                        <tr>
                                            <!--Table Header Starts-->
                                            <th>
                                                <div class="form-check custom-checkbox">
                                                    <input type="checkbox" class="form-check-input" id="checkAll"
                                                        required="">
                                                    <label class="form-check-label" for="checkAll"></label>
                                                </div>
                                            </th>
                                            <th>Agency</th>
                                            <th>Email Address</th>
                                            <th>Status</th>
                                            <!--Table Header Ends-->
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr>
                                            <td>
                                                <div class="form-check custom-checkbox">
                                                    <input type="checkbox" class="form-check-input" id=""
                                                        wire:model="#" value="" required>
                                                    <label class="form-check-label" for="check"></label>
                                                </div>
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td>

                                                <button click="updateStatus()" class="#">
                                                    {{-- {{  'Activated' : 'Deactivated' }} --}}
                                                </button>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-body">
                            <button type="button" class="btn light btn-primary">View Details</button>
                            <button click="activateUsers" class="btn light btn-primary">Activate</button>
                            <button click="deactivateUsers" class="btn light btn-primary">Deactivate</button>
                        </div>
                    </div>
                </div>
            </div>
            {{-- table start ends --}}
        </div>
    </div>
</div>
