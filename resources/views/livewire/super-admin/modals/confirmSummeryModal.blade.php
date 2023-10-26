<div wire:ignore.self class="modal fade" id="confirmSummeryModal">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Summery</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">


                <div class="card mt-3">
                    <div class="card-header"> Invoice <strong>{{ $summeryTopupDate }}</strong> <span class="float-end">
                            <strong>Status:</strong> {{ $summeryTopupStatus ? 'Paid' : 'Pending' }}</span> </div>
                    <div class="card-body">
                        <div class="row mb-5">
                            <div class="mt-4 col-xl-6 col-lg-3 col-md-6 col-sm-12">
                                <h6>From:</h6>
                                <div> <strong>{{ $summeryCompany }}</strong> </div>
                                {{-- <div>Madalinskiego 8</div> --}}
                                {{-- <div>71-101 Szczecin, Poland</div> --}}
                                <div>Email: {{ $summeryEmail }}</div>
                                <div>Phone: {{ $summeryPhone }}</div>
                            </div>
                            {{-- <div class="mt-4 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                <h6>To:</h6>
                                <div> <strong>FlyNow</strong> </div>
                                <div>Kurunegala</div>
                                <div>Email: info@flynow.lk</div>
                                <div>Phone:0711976100</div>
                            </div> --}}
                            <div
                                class="mt-4 col-xl-6 col-lg-6 col-md-12 col-sm-12 d-flex justify-content-lg-end justify-content-md-center justify-content-xs-start">
                                <div class="row align-items-center">
                                    <div class="col-sm-9">
                                        <div class="brand-logo mb-3">

                                            <img class="logo-compact" width="110"
                                                src="{{ asset('storage/' . $summeryPayment) }}" alt="">
                                        </div>
                                        <strong>Attached photo</strong></span><br>
                                        {{-- <small class="text-muted">Current exchange rate 1BTC = $6590 USD</small> --}}
                                    </div>
                                    {{-- <div class="col-sm-3 mt-3"> <img src="images/qr.png" alt=""
                                            class="img-fluid width110"> </div> --}}
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        {{-- <th class="center">#</th> --}}
                                        <th>Ref.Number</th>
                                        <th>Remark</th>
                                        <th class="right">Amount</th>
                                        {{-- <th class="center">Qty</th> --}}
                                        {{-- <th class="right">Total</th> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        {{-- <td class="center">1</td> --}}
                                        <td class="left strong">{{ $summeryRefNo }}</td>
                                        <td class="left">{{ $summeryComment }}</td>
                                        <td class="right">Rs. {{ $summeryAmount }}</td>
                                        {{-- <td class="center">1</td> --}}
                                        {{-- <td class="right">$999,00</td> --}}
                                    </tr>


                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button wire:click="makePaid({{ $summeryTopupId }})" type="button" class="btn btn-primary light"
                    data-bs-dismiss="modal">
                    Make Paid
                </button>
                <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">
                    Close
                </button>
                {{-- <button type="button" class="btn btn-primary">
                    Save changes
                </button> --}}
            </div>
        </div>
    </div>
</div>
