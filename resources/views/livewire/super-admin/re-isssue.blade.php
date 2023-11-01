<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}

    <div class="content-body">
        <div class="container-fluid">

            <div class="row page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Offline Request</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Re-Issue</a></li>
                </ol>
            </div>

            <div class="container">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Re-issue Data</h4>
                        </div>
                        @if ($data->count() > 0)
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover table-responsive-md" cellspacing="20">
                                    <thead style="width: 300px;">
                                        <tr>
                                            <th style="width:80px;"><strong>#</strong></th>
                                            <th><strong>PNR</strong></th>
                                            <th><strong>Airline</strong></th>
                                            <th><strong>Total Fare</strong></th>
                                            <th><strong>Airline PNR</strong></th>
                                            <th><strong>Pax Name</strong></th>
                                            <th><strong>Sector</strong></th>
                                            <th><strong>Agency Email</strong></th>
                                            <th><strong>Admin Email</strong></th>
                                            <th><Strong>Remarks</Strong></th>
                                            <th><strong>No Show</strong></th>
                                            <th><strong>Purged PNR</strong></th>
                                            <th><strong>Status</strong></th>
                                            <th colspan="2"><strong><div class="text-center">Actions</div></strong></th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($data as $index=> $item)
                                        <tr>
                                            <td><strong>{{ $index + 1 }}</strong></td>
                                            <td>{{ $item->pnr }}</td>
                                            <td>{{ $item->airline }}</td>
                                            <td>RS {{ $item->total_fare }}/=</td>
                                            <td>{{ $item->airline_pnr }}</td>
                                            <td>{{ $item->pax_name }}</td>
                                            <td>{{ $item->sector }}</td>
                                            <td>{{ $item->agency_email }}</td>
                                            <td>{{ $item->admin_email }}</td>
                                            <td>{{ $item->remarks }}</td>

                                            @if ($item->no_show == 1)

                                            <td><span class="badge badge-success">Yes</span></td>

                                            @elseif ($item->no_show == 0)

                                            <td><span class="badge badge-danger">No</span></td>

                                            @endif

                                            @if ($item->purged_pnr ==1)

                                            <td><span class="badge badge-success">True</span></td>

                                            @elseif ($item ->purged_pnr == 0)

                                            <td><span class="badge badge-danger">False</span></td>
                                            @endif

                                            @if ($item->status == "checking" || $item->status == "Checking")
                                            <td><span class="badge badge-warning mb-2">Checking</span></td>

                                            @elseif ($item->status == "approved" || $item->status == "Approved")
                                            <td><span class="badge badge-success  mb-2">Approved</span></td>

                                            @elseif ($item->status == "rejected" || $item->status == "rejected")
                                            <td><span class="badge badge-danger mb-2">Cancelled</span></td>

                                            @endif





                                            <td><button wire:click="approveReissue({{ $item->id }})" type="button" class="btn btn-outline-primary btn-sm">Approve</button></td>

                                            <td><button wire:click="rejectReissue({{ $item->id }})" type="button" class="btn btn-outline-danger btn-sm">Cancel</button></td>



                                        </tr>
                                        @endforeach

                                        @else

                                        <figure class="text-center m-6">
                                            <h3 class="mt-6">No Data is Available Here...</h3>
                                        </figure>


                                        @endif


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>

    </div>

</div>