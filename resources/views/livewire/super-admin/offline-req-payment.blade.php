<div>
    <div class="content-body">
        <div class="container-fluid">
            <div class="row page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Offine Request</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0)"></a>Payment</li>
                </ol>
            </div>

            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example5" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th>Reference Number</th>
                                                <th>Ammount</th>
                                                <th>Agency E-mail</th>
                                                <th>Admin E-mail</th>
                                                <th>Remarks</th>
                                                <th>Image</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($payments as $payment)
                                                <tr>
                                                    <td>{{ $payment->ref_no }}</td>
                                                    <td>{{ $payment->amount }}</td>
                                                    <td>{{ $payment->agency_email }}</td>
                                                    <td>{{ $payment->admin_email }}</td>
                                                    <td>{{ $payment->remarks }}</td>
                                                    <td>
                                                    @if($payment->document)
                                                        <img src="{{ asset('storage/payment_images/' . $payment->document) }}" alt="Payment Image" width="50px">
                                                    @endif
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
    </div>
</div>
