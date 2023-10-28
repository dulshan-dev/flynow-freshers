{{-- <div>
    <div class="content-body">
        <div class="container-fluid">
            <div class="row page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Offine Request</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0)"></a>REFUND REQUEST FORM</li>
                </ol>
            </div>
            <div class="alert alert-primary" role="alert">
                Note: Booking TransactionId is used as Ref. Number to fetch PNR Deatils.
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">OFFLINE REFUND REQUEST FORM</h4>
                    </div>
                        
                </div>
            </div>
        </div>
    </div>
</div> --}}

<div>
    <div class="content-body">
        <div class="container-fluid">
            <div class="row page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Offline Request</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0)">REFUND REQUEST FORM</a></li>
                </ol>
            </div>
            <div class="alert alert-primary" role="alert">
                Note: Booking TransactionId is used as Ref. Number to fetch PNR Details.
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">OFFLINE REFUND REQUEST FORM</h4>
                    </div>
                    <div class="container">
                        @if (session()->has('message'))
                            <div class="alert alert-success">
                                {{ session('message') }}
                            </div>
                        @endif
                        <form wire:submit = 'submitForm'>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="refNumber" class="form-label">Ref. Number</label>
                                        <input type="text" wire:model="refNumber" class="form-control" id="refNumber" required>
                                        @error('refNumber') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
    
                                    <div class="mb-3">
                                        <label for="sector" class="form-label">Sector</label>
                                        <input type="text" wire:model="sector" class="form-control" id="sector" required>
                                        @error('sector') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
    
                                    <div class="mb-3">
                                        <label for="adminEmailId" class="form-label">Admin Email Id</label>
                                        <input type="text" wire:model="adminEmailId" class="form-control" id="adminEmailId" required>
                                        @error('adminEmailId') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
    
                                    <div class="mb-3">
                                        <label for="exampleFormControlTextarea1" class="form-label">Remarks</label>
                                        <textarea wire:model="remarks" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                    </div>
                                </div>
    
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="airlinePnr" class="form-label">Airline PNR</label>
                                        <input type="text" wire:model="airlinePnr" class="form-control" id="airlinePnr" required>
                                        @error('airlinePnr') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
    
                                    <div class="mb-3">
                                        <label for="totalFare" class="form-label">Total Fare</label>
                                        <input type="text" wire:model="totalFare" class="form-control" id="totalFare" required>
                                        @error('totalFare') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
    
                                    <div class="mb-3">
                                        <label for="agencyEmailId" class="form-label">Agency Email Id</label>
                                        <input type="text" wire:model="agencyEmailId" class="form-control" id="agencyEmailId" required>
                                        @error('agencyEmailId') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
    
                                    <div class="mb-3">
                                        <label for="exampleFormControlTextarea2" class="form-label">Pax Name</label>
                                        <textarea wire:model="paxName" class="form-control" id="exampleFormControlTextarea2" rows="3"></textarea>
                                    </div>
                                </div>
    
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="pnr" class="form-label">PNR</label>
                                        <input type="text" wire:model="pnr" class="form-control" id="pnr" required>
                                        @error('pnr') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
    
                                    <div class="mb-3">
                                        <label class="form-label">Travel Date</label>
                                        <input type="date" wire:model="travelDate" class="form-control" placeholder="2017-06-04" id="mdate" data-dtp="dtp_KSEwf" required>
                                        @error('travelDate') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
    
                                    <div class="mb-3">
                                        <label for="airline" class="form-label">Airline</label>
                                        <input type="text" wire:model="airline" class="form-control" id="airline" required>
                                        @error('airline') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
    
                                    <div class="mb-3 form-check">
                                        <input type="checkbox" wire:model="noShow" class="form-check-input" id="customCheckBox8">
                                        <label class="form-check-label" for="customCheckBox8">No Show</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="d-grid d-md-flex justify-content-md-end">
                                    <button type="submit" class="btn btn-primary m-5">Send Request</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>







