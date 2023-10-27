<div>
<div>
    <div class="content-body">
        <div class="container-fluid">

            <div class="row page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Offline Request</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Payment</a></li>
                </ol>
            </div>

            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif

            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Payment</h4>
                </div>
                <!-- Serch card -->
                <div class="card-body">
                    <div class="basic-form">
                        <form>
                            <div class="mb-3 row">

                                <div class="mb-3 col-md-3">
                                    <label>Ref.Number</label>
                                    <input type="text" wire:model="ref_no" class="form-control" required>
                                </div>

                                <div class="mb-3 col-md-3">
                                    <label>Credit Amount</label>
                                    <input type="text" wire:model="amount" class="form-control" required>
                                </div>

                                <div class="mb-3 col-md-3">
                                    <label>Agency Email Id</label>
                                    <input type="email" wire:model="agency_email" class="form-control" placeholder="Email" required>
                                </div>
                            </div>

                            <div class="mb-3 row">

                                <div class="mb-3 col-md-3">
                                    <label>Admin Email Id</label>
                                    <input type="email" wire:model="admin_email" class="form-control" placeholder="Email" required>
                                </div>

                                <div class="mb-3 col-md-3">
                                    <label>Remarks</label>
                                    <div>
                                        <textarea class="form-control" wire:model="remarks" id="comment"></textarea required>
                                    </div>
                                </div>

                                <div class="mb-3 col-md-3">
                                    <label class="d-flex">Upload Document</label>
                                    <div class="form-file">
                                        <input type="file" wire:model="document" class="form-file-input form-control" required>
                                    </div>
                                </div>

                                <div class="mb-3 col-md-3">
                                <div class="rounded-button">
                                    <button type="button" wire:click="submitForm" class="btn btn-rounded btn-outline-primary">Send Request</button>
                                </div>
                                </div>
                            </div>

                    </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
</div>

</div>
