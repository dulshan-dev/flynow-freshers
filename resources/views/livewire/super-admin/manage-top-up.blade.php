<div wire:ignore.self class="content-body">
    <div class="container-fluid">

        <div class="row page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Manage Topup</a></li>
                {{-- <li class="breadcrumb-item"><a href="javascript:void(0)">Top Up</a></li> --}}
            </ol>
        </div>



        <!-- row -->
        <div class="row">

            <div class="col-lg-12">
                <div class="card">

                    <div class="card-header">
                        <h4 class="card-title">Recent Sub Agent Top Up Requests</h4>
                    </div>
                    <!-- Serch card -->
                    <div class="card-body">
                        <div class="basic-form">
                            <form wire:ignore>
                                <div class="mb-3 row">
                                    <div class="col-auto my-1">
                                        <div class="input-group search-area">
                                            <input wire:model.live="search" type="text" class="form-control"
                                                placeholder="Search...">
                                            <button class="input-group-text"><a href="javascript:void(0)"><i
                                                        class="flaticon-381-search-2"></i></a></button>
                                        </div>
                                    </div>

                                    {{-- <div class="col-xl-3 mb-2">
                                        <div class="example">
                                            <p class="mb-2">
                                                Date Range Pick</p>
                                            <input class="form-control input-daterange-datepicker" type="text"
                                                name="daterange" value="01/01/2023 - 01/31/2023">
                                        </div>
                                    </div> --}}

                                    {{-- <div class="mb-3 col-md-2">
                                        <label>PNR No</label>
                                        <input type="text" class="form-control">
                                    </div> --}}


                                    {{-- <div class="col-auto my-1">
                                        <label class="me-sm-2">Report
                                            Type</label>
                                        <select class="me-sm-2 default-select form-control wide"
                                            id="inlineFormCustomSelect">
                                            <option selected>Type...
                                            </option>
                                            <option value="1">
                                                Cancle</option>
                                            <option value="2">
                                                Refound</option>
                                            <option value="3">
                                                Reissue</option>
                                            <option value="3">
                                                Void</option>
                                            <option value="3">
                                                Payment</option>
                                        </select>
                                    </div> --}}
                                    {{-- <div class="col-auto my-3">
                                        <div class="col-auto my-2">
                                            <div class="rounded-button">


                                                <button type="button"
                                                    class="btn btn-rounded btn-outline-primary">Search</button>

                                            </div>
                                        </div>
                                    </div> --}}

                                </div>


                            </form>
                        </div>
                    </div>



                    <div class="card-body">


                        <div class="table-responsive">
                            <table class="table header-border table-responsive-sm">
                                <thead>
                                    <tr>
                                        <th>Agency Name</th>
                                        <th>Ref.Number</th>
                                        <th>TopUp Amount</th>
                                        <th>Photo Attached</th>
                                        <th>Status</th>
                                        <th>Credit Limit</th>
                                        <th>Remark</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($toupupData as $topup)
                                        <tr wire:key="{{ $topup->id }}">
                                            <td><a href="javascript:void();"> {{ $topup->user->company_name }} </a>
                                            </td>
                                            <td>{{ $topup->reference_no }}</td>
                                            <td> {{ $topup->amount }}</td>
                                            <td><!-- Button trigger modal -->
                                                <button class="btn btn-primary mb-2"
                                                    wire:click.prevent="viewImage({{ $topup->id }})"
                                                    data-bs-toggle="modal" data-bs-target="#imageViewModal">
                                                    View Image
                                                </button>
                                                {{-- Modal Start --}}
                                                @include('livewire.super-admin.modals.imageViewModal')
                                                {{-- Modal End --}}
                                            </td>
                                            {{-- <td><span class="badge badge-success">Paid</span> --}}
                                            <td>
                                                @if ($topup->topup_status == 0)
                                                    <button wire:click.prevent="viewSummery({{ $topup->id }})"
                                                        data-bs-toggle="modal" data-bs-target="#confirmSummeryModal"
                                                        class="badge badge-danger">Not
                                                        Confirmed</button>
                                                    {{-- Modal Start --}}
                                                    @include('livewire.super-admin.modals.confirmSummeryModal')
                                                    {{-- Modal End --}}
                                                @elseif($topup->topup_status == 1)
                                                    <button wire:click="makeNotPaid({{ $topup->id }})"
                                                        wire:confirm="Are you sure you want to delete this post?"
                                                        class="badge badge-success">Paid</button>
                                                @endif
                                            </td>
                                            <td>
                                                @if ($topup->topup_status == 0)
                                                    <button disabled class="btn btn-secondary">Set</button>
                                                @elseif($topup->topup_status)
                                                    <button data-bs-toggle="modal"
                                                        wire:click="setCreditModal({{ $topup->id }})"
                                                        data-bs-target=".credit-limit-modal-lg"
                                                        class="btn btn-warning">Set</button>
                                                    <!-- Large modal -->
                                                    @include('livewire.super-admin.modals.credit-limit-modal')
                                                    {{-- End large model --}}
                                                @endif
                                            </td>
                                            <td>{{ $topup->comment }}</td>
                                        </tr>
                                    @endforeach



                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


@section('customScripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        // Transfer
        window.addEventListener('close-modal', event => {
            $('.credit-limit-modal-lg').modal('hide');
            Swal.fire({
                title: 'Successfully transferred',
                width: 600,
                padding: '3em',
                color: '#716add',
                //   position: 'top-end',
                icon: 'success',
                showConfirmButton: false,
                timer: 1500,
                //   background: '#fff url(https://sweetalert2.github.io/images/trees.png)',
                backdrop: `
    rgba(0,0,123,0.4)
    url("assets/travel-port/airplane.gif")
    left top
    no-repeat
  `
            })
            // alert('isahn');
        });

        // if Already Transferred
        window.addEventListener('walletError', event => {
            $('.credit-limit-modal-lg').modal('hide');

            // sweet alert
            Swal.fire({
                title: 'Already transferred',
                width: 600,
                padding: '3em',
                color: '#716add',
                //   position: 'top-end',
                icon: 'info',
                showConfirmButton: true,
                // timer: 1500,
                //   background: '#fff url(https://sweetalert2.github.io/images/trees.png)',
                //                 backdrop: `
            //     rgba(0,0,123,0.4)
            //     url("assets/travel-port/airplane.gif")
            //     left top
            //     no-repeat
            //   `
            })
            // End alert
        });


        // <=== Already Added Transaction Record ===>
        window.addEventListener('alreadyAddedTransactionRecord', event => {
            $('.credit-limit-modal-lg').modal('hide');

            // sweet alert
            Swal.fire({
                title: 'Transaction Record already exists',
                width: 600,
                padding: '3em',
                color: '#716add',
                //   position: 'top-end',
                icon: 'info',
                showConfirmButton: true,
                // timer: 1500,
                //   background: '#fff url(https://sweetalert2.github.io/images/trees.png)',
                //                 backdrop: `
            //     rgba(0,0,123,0.4)
            //     url("assets/travel-port/airplane.gif")
            //     left top
            //     no-repeat
            //   `
            })
            // End alert
        });


        // <=== Added to the transaction record ===>
        window.addEventListener('addedTransaction', event => {
            $('.credit-limit-modal-lg').modal('hide');
            Swal.fire({
                title: 'Added to the transaction record',
                width: 600,
                padding: '3em',
                color: '#716add',
                //   position: 'top-end',
                icon: 'success',
                showConfirmButton: false,
                timer: 1500,
                //   background: '#fff url(https://sweetalert2.github.io/images/trees.png)',
                backdrop: `
    rgba(0,0,123,0.4)
    url("assets/travel-port/airplane.gif")
    left top
    no-repeat
  `
            })
            // alert('isahn');
        });
    </script>
@endsection

{{-- rgba(253, 183, 22,0.2) --}}
