<div>
    <div>
        <div class="content-body">
            <div class="container-fluid">
                {{-- //<div class="container"> --}}
                <div class="row">
                    <div class="col-md-4 col-lg-4 text-center">
                        <label for="agencyName">Agency Name:</label>
                        {{-- </div> --}}
                        {{-- <div class="col-md-2 col-lg-2 "> --}}
                        <select class="form-control w-50 text-center" id="agencyName" style="margin-left: 135px">
                            <option value="">Select an Agency</option>
                            <option value="">Select an Agency</option>
                            <option value="">Select an Agency</option>
                        </select>
                    </div>
                    <div class="col-md-4 col-lg-4 text-center">
                        <label for="restrictSMS">Restrict SME Fare:</label>
                        <input class="form-check-input" type="radio" name="restrictSMS" id="restrictYes"
                            value="yes">
                        <label class="form-check-label" for="restrictYes">Yes</label>
                        <input class="form-check-input" type="radio" name="restrictSMS" id="restrictNo"
                            value="no">
                        <label class="form-check-label" for="restrictNo" checked>No</label>
                    </div>
                    <div class="col-md-4 col-lg-4 text-center">
                        <button class="btn btn-primary w-50" style="width:150px;">Save SME Register</button>
                    </div>
                </div>
                {{-- </div> --}}
            </div>

            <div class="card-body col-md-10" style="margin-left:150px">
                <div class="table-responsive">
                    <table class="table primary-table-bordered ">
                        <thead class="thead-primary">
                            <tr class="thead-primary">
                                <td> Permissions</td>
                                <td class="text-center">
                                    <input type="checkbox" class="form-check-input" id="customCheckBoxAll">
                                    <label class="form-check-label" for="customCheckBoxAll">All</label>
                                </td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="thead-primary">
                                <td> Permissions</td>
                                <td class="text-center">
                                    <input type="checkbox" class="form-check-input" id="customCheckBoxAll">
                                    <label class="form-check-label" for="customCheckBoxAll">All</label>
                                </td>
                            </tr>
                            <tr class="thead-primary">
                                <td> Permissions</td>
                                <td class="text-center">
                                    <input type="checkbox" class="form-check-input" id="customCheckBoxAll">
                                    <label class="form-check-label" for="customCheckBoxAll">All</label>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col text-center">
                    <button class="btn btn-primary " style="width:200px;">Save Permission</button>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
