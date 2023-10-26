<div wire:ignore.self class="modal fade credit-limit-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">CREDIT LIMIT DETAILS</h5>

                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <div class="card">

                    <div class="card-body">
                        <div class="basic-form">
                            <form {{-- wire:submit.prevent="transferWallet" --}}>

                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Agency
                                            Name</label>
                                        <input disabled type="text" class="form-control"
                                            placeholder="{{ $setCreditAgency }}">
                                    </div>
                                    <div class="mb-3 col-md-4">
                                        <label class="form-label">Type</label>
                                        <select wire:model="type" class=" form-control wide">
                                            <option disabled selected>
                                                Choose...</option>
                                            <option value="cash">Cash
                                            </option>
                                            <option value="invoice">Invoice
                                            </option>

                                        </select>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Existing
                                            Credit Limit</label>
                                        <input type="number" disabled class="form-control" placeholder="">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label>Credit Limit</label>
                                        @error('setCreditAmount')
                                            <div> <span class="text-danger"> {{ $message }} </span> </div>
                                        @enderror
                                        <input wire:model="setCreditAmount" placeholder="{{ $setCreditAmount }}"
                                            type="number" class="form-control is-valid">
                                    </div>
                                </div>


                                <button wire:click.prevent="transferWallet({{ $setCreditUserId }})"
                                    class="btn btn-primary">Transfer</button>


                                <button type="submit" class="btn btn-secondary">Refund</button>
                                <button type="submit" class="btn btn-info">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">
                    Close
                </button>
                <button type="button" class="btn btn-primary">
                    Save changes
                </button>
            </div>
        </div>
    </div>
</div>
