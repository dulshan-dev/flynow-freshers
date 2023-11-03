<div>


    <div class="content-body">
        <div class="container-fluid">
            <div class="row page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Packages</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Upload Bank Details</a></li>
                </ol>
            </div>
        </div>

        <div class="container-fluid">
            <div class="col-xl-12 col-lg-12">
                <div class="card">


                    <div class="card-header">
                        <h4 class="card-title">Upload Bank Details</h4>
                    </div>



                    <div class="card-body">
                        <div class="basic-form">
                            <form wire:submit.prevent="submitForm2">
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">Existing Bank Details</label>
                                    <div class="col-sm-9">
                                        <select class="form-control wide" wire:model="ExistingBankDetails">
                                            <option>create new</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </select>
                                    </div>
                                </div>
                                @error('ExistingBankDetails') <span class="error" style="color: red;">{{ $message }}</span> @enderror


                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">Bank Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" placeholder="text" wire:model="BankName">
                                    </div>
                                </div>
                                @error('BankName') <span class="error" style="color: red;">{{ $message }}</span> @enderror


                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">Account Number</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" placeholder="Number" wire:model="AccNumber">
                                    </div>
                                </div>
                                @error('AccNumber') <span class="error" style="color: red;">{{ $message }}</span> @enderror


                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">IFSC Code</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" placeholder="Code" wire:model="IFSCCode">
                                    </div>
                                </div>
                                @error('IFSCCode') <span class="error" style="color: red;">{{ $message }}</span> @enderror


                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">Address</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" placeholder="text" wire:model="Address">
                                    </div>
                                </div>
                                @error('Address') <span class="error" style="color: red;">{{ $message }}</span> @enderror



                                <div class="mb-3 row">
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary">Save ACC Details</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>







    </div>