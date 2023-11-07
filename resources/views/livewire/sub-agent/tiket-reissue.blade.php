
     <div>
        <div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item active"><a href="javascript:void(0)">Reissue Quotation</a></li>
					</ol>
                </div>
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Reissue Quotation Request</h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                <label class="col-sm-10 col-form-label">Please Note that reissue quotate are processed on a first-come, first-served basis for statndard reissues.
                                    Standard reissues include only a limited number of free quotes. Make sure you select the correct service type based on your requirement.Refer fees section for more information.
                                </label>
                                @if (session()->has('message'))
                                    <div class="alert alert-success">
                                        {{ session('message') }}
                                    </div>
                                @endif
                                <form wire:submit.prevent="submitForm" novalidate>
                                    
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label" for="PCC"><strong>PCC</strong></label>
                                        <div class="col-sm-7">
                                        <select class="form-select" wire:model="PCC" id="PCC">
                                            <option selected>Select Provider</option>
                                            <option value="1">Galileo-B2B Link</option>
                                            
                                        </select>
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label" for="existing_booking_pnr"><strong>Booking PNR</strong></label>
                                        <div class="col-sm-7">
                                           <input type="text" class="form-control" wire:model="existing_booking_pnr" id="existing_booking_pnr" placeholder="Enter Existing Booking PNR">
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label" for="tickets_to_be_reissued"><strong>Ticket(s) to Be Reissued</strong></label>
                                            <div class="col-sm-7">
                                                @foreach($tickets_to_be_reissued as $index => $ticket)
                                                    <div class="input-group col-sm-7">
                                                        <input type="text" class="form-control" wire:model="tickets_to_be_reissued.{{ $index }}" id="tickets_to_be_reissued_{{ $index }}" placeholder="Enter Ticket(s) To Be Reissued">
                                                        <button class="btn btn-primary" wire:click.prevent="addTicketField({{ $index }})"><span class="btn-icon-start text-info"><i class="fa fa-plus color-info"></i></span>ADD</button>

                                                        @if($index > 0)
                                                            <button class="btn btn-danger" wire:click.prevent="removeTicketField({{ $index }})" type="button">
                                                                <span class="btn-icon-start text-danger"><i class="fa fa-minus color-danger"></i></span>Remove
                                                            </button>
                                                        @endif
                                                    </div>
                                                    &nbsp &nbsp
                                                @endforeach                                       
                                            </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label" for="new_booking_pnr"><strong>New Booking PNR (If applicable)</strong></label>
                                        <div class="col-sm-7">
                                          <input type="text" class="form-control" wire:model="new_booking_pnr" id="new_booking_pnr" placeholder="Enter New Booking PNR">
                                        </div>
                                    </div>
                                    
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label"><strong>Is this a No Show ?</strong></label>
                                        <div class="col-sm-7">
                                            <label class="radio-inline me-3" for="is_no_show_yes"> Yes
                                                <input class="form-check-input" type="radio" wire:model="is_no_show" value="1" id="is_no_show_yes">
                                            </label>    
                                            <label class="radio-inline me-3" for="is_no_show_no"> No
                                                <input class="form-check-input" type="radio" wire:model="is_no_show" value="0" id="is_no_show_no">
                                            </label>
                                        </div>
                                    </div>
                                    
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label"><strong>Reissue Type</strong></label>
                                        <div class="col-sm-7">
                                            
                                            <label class="radio-inline me-3" for="reissue_type_voluntary">Voluntary
                                                <input class="form-check-input" type="radio" wire:model="reissue_type" value="1" id="reissue_type_voluntary">
                                            </label> 
                                            <label class="radio-inline me-3" for="reissue_type_involuntary">Involuntary
                                                <input class="form-check-input" type="radio" wire:model="reissue_type" value="0" id="reissue_type_involuntary">
                                            </label>
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label"><strong>Service Type</strong></label>
                                        <div class="col-sm-7">
                                            
                                            <label class="radio-inline me-3" for="service_type_standard">Standard Reissue
                                                <input class="form-check-input" type="radio" wire:model="service_type" value="Standard Reissue" id="service_type_standard">
                                            </label>
                                        
                                        
                                            
                                            <label class="radio-inline me-3" for="service_type_express">Express Reissue
                                                <input class="form-check-input" type="radio" wire:model="service_type" value="Express Reissue" id="service_type_express">
                                            </label>
                                        
                                            
                                            <label class="radio-inline me-3" for="service_type_after_hours">After-Hours Reissue
                                                <input class="form-check-input" type="radio" wire:model="service_type" value="After-Hours Reissue" id="service_type_after_hours">
                                            </label>
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label" for="details"><strong>Details</strong></label>
                                        <div class="col-sm-7">
                                           <textarea class="form-control" wire:model="details" id="details" placeholder="Enter Details" rows="3"></textarea>
                                        </div>
                                    </div>

                                    {{-- <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label" for="attachment"><strong>Attachment</strong></label>
                                        <div class="col-sm-7 form-file">
                                            <input type="file" wire:model="attachment" class="form-control" id="attachment">
                                        </div>
                                    </div> --}}

                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label" for="attachment"><strong>Attachment</strong></label>
                                        <div class="col-sm-9">
                                            <label for="custom-file-input" class="custom-file-label">
                                                <div class="border rounded p-4" style="border-style: dashed; min-width: 100%;">
                                                    <div class="text-center">
                                                        <i class="ki-duotone ki-file-up fs-4x text-primary"><span class="path1"></span><span class="path2"></span></i>
                                                        <h3 class="fs-6 fw-bold text-gray-900 mb-1">Drop files here or click to upload.</h3>
                                                        <span class="fs-7 fw-semibold text-gray-500">You can upload up to 10 files</span></center>
                                                        <input type="file" id="custom-file-input" wire:model="attachment" class="custom-file-input" accept="image/*, .pdf">
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                    </div>                                                                       
                                    
                                    
                                    
                                    
                                    
                                    <div class="rounded-button mt-3">
                                         <button type="submit" style="float: right;" class="btn btn-rounded btn-outline-success">Request</button>
                                     </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--*** Content Table Start***-->
                        <div class="col-lg-12">
                            <div class="card" id="tableList">
                                <div class="card-header">
                                    <h4 class="card-title">Reissue Quotation List</h4>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-responsive-md">
                                            <thead>
                                                <tr>
                                                    <th style="width:80px;"><strong>Id</strong></th>
                                                    <th><strong>Ticket(s) to be Reissued</strong></th>
                                                    <th><strong>New Booking</strong></th>
                                                    <th><strong>Status</strong></th>
                                                    <th><strong>Comment</strong></th>
                                                    <th><strong>Quote</strong></th>
                                                    <th><strong>Outcome</strong></th>
                                                    <th><strong>Actions</strong></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if ($tickets)
                                                @foreach ($tickets as $ticket)
                                                    <tr>
                                                        <td><strong>{{ $loop->iteration }}</strong></td>
                                                        <td>
                                                            @foreach (json_decode($ticket->tickets_to_be_reissued) as $item)
                                                                <li>{{ $item }}</li>
                                                            @endforeach
                                                        </td>
                                                        <td>{{ $ticket->new_booking_pnr }}</td>
                                                        <td>
                                                            @if ($ticket->status === 'Successful')
                                                                <span class="badge badge-success">Successful</span>
                                                            @elseif ($ticket->status === 'Failed')
                                                                <span class="badge badge-danger">Failed</span>
                                                            @else
                                                                <span class="badge badge-warning">Pending</span>
                                                            @endif
                                                        </td>
                                                        <td>{{ $ticket->comment }}</td>
                                                        <td>{{ $ticket->quote }}</td>
                                                        <td>{{ $ticket->outcome }}</td>
                                                        <td>
                                                            @if ($ticket->action === 'Active')
                                                                <span class="badge badge-success">Active</span>
                                                            @else
                                                                <span class="badge badge-danger">Deactive</span>
                                                            @endif
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                @else
                                                <tr>
                                                    <td colspan="8">No tickets available.</td>
                                                </tr>
                                                @endif
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="card-body">
                                        <nav>
                                            <ul class="pagination pagination-xs pagination-gutter">
                                                <li class="page-item page-indicator">
                                                    <a class="page-link" href="javascript:void(0)">
                                                        <i class="la la-angle-left"></i>
                                                    </a>
                                                </li>
                                                <li class="page-item active"><a class="page-link" href="javascript:void(0)">1</a></li>
                                                <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
                                                <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                                                <li class="page-item"><a class="page-link" href="javascript:void(0)">4</a></li>
                                                <li class="page-item page-indicator">
                                                    <a class="page-link" href="javascript:void(0">
                                                        <i class="la la-angle-right"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <!--*** Content Table end ***-->
                </div>
            </div>
        </div>
    </div>

    
    