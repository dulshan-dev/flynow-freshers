<div>
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="card p-3">
                <div class="card-header">
                    <h4 class="card-title">Request for Top Up</h4>
                </div>
                <div class="alert alert-primary alert-dismissible fade show mx-4 mt-4">
                    <!-- <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
                    </button> -->
                    Please add a seperate top-up request for each bank transfer (do not add multiple transfers in one request)
                </div>

                <!-- ---------------------------Displaying success alert------------------------- -->
                @if (session()->has('message'))
                <div class="alert alert-success alert-dismissible fade show mx-4">
                    <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2">
                        <polyline points="9 11 12 14 22 4"></polyline>
                        <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
                    </svg>
                    <strong>Success!</strong> {{ session('message') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
                    </button>
                </div>
                @endif
                <!-- --------------------------------------------------------------------- -->

                <div class="card-body">
                    <div class="basic-form">
                        <form method="" action="" wire:submit='sendTopupRequest'>
                            @csrf
                            <div class="mb-3 row">
                                <label class="col-sm-3 col-form-label">Amount<span class="text-danger">*</span></label>
                                <div class="col-sm-9">
                                    <input wire:model='amount' type="text" class="form-control mb-3" name="amount" placeholder="Enter Amount">

                                    @error('amount')
                                    <span class="text-danger text-xs">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label class="col-sm-3 col-form-label">Payment Proof<span class="text-danger">*</span></label>
                                <div class="col-sm-9">
                                    <div class="input-group mb-3">
                                        <div class="form-file">
                                            <input wire:model='payment_proof' type="file" id="payment_proof" accept="image/png, image/jpeg" name="payment_proof" class="form-file-input form-control">
                                        </div>
                                    </div>
                                    @error('payment_proof')
                                    <span class="text-danger text-xs">{{ $message }}</span>
                                    @enderror

                                    <!-- ------------------Display uploaded payment proof------------- -->

                                    @if($payment_proof)
                                    <img class="me-3 w-25 h-75 rounded-1" src="{{ $payment_proof->temporaryUrl() }}" alt="">
                                    @endif

                                    <!-- ------------------------------------------------------------- -->
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label class="col-sm-3 col-form-label">Comment</label>
                                <div class="col-sm-9">
                                    <textarea wire:model='comment' class="textarea_editor form-control bg-transparent" rows="1" name="comment" placeholder="Enter comment"></textarea>
                                    @error('comment')
                                    <span class="text-danger text-xs">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <div class="d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary">Request</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>