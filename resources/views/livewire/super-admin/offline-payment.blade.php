<div>
    <div class="content-body">
        <div class="container-fluid">
            <!-- Start ofline payment form heading -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Offline Payment/Form</h4>
                        </div>

                    </div>
                </div>
            </div>

            @if (session()->has('success'))
            <div class="alert alert-success solid alert-dismissible fade show">
                <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2">
                    <polyline points="9 11 12 14 22 4"></polyline>
                    <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
                </svg>
                <strong>Success!</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
                </button>
            </div>
            @endif
            <!-- End offline payment heading -->

            <!-- Start good service tax detail form -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="col-xl-12 col-lg-6">

                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Good Service Tax Details</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form wire:submit="insert">
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Customer Name :</label>
                                            <div class="col-sm-6">
                                                <input type="text" wire:model.blur="name" class="form-control" placeholder="">
                                                @error('name') <span class="alert alert-danger" role="alert">{{ $message }}</span> @enderror
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Email :</label>
                                            <div class="col-sm-6">
                                                <input type="email" wire:model.blur="email" class="form-control" placeholder="">
                                                @error('email') <span class="alert alert-danger" role="alert">{{ $message }}</span> @enderror
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Billed Amount :</label>
                                            <div class="col-sm-6">
                                                <input type="text" wire:model.blur="amount" class="form-control" placeholder="">
                                                @error('amount') <span class="alert alert-danger" role="alert">{{ $message }}</span> @enderror
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Remarks :</label>
                                            <div class="col-sm-6">
                                                <input type="text" wire:model.blur="remarks" class="form-control" placeholder="">
                                            </div>
                                        </div>

                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-3"></div>
                                                <div class="col-md-3"></div>
                                                <div class="col-md-3"></div>

                                                <div class="col-md-3 text-left">
                                                    <button class="btn btn-secondary btn btn-info btn-sm" wire:click="clear">Cancle</button>
                                                    <button class="btn btn-primary btn btn-info btn-sm" type="submit">Pay</button>
                                                </div>
                                            </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End good service tax detail form -->
                </div>
            </div>
        </div>