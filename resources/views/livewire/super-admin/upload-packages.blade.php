<div>
    <div class="content-body">
        <div class="container-fluid">
            <div class="row page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Upload Packages</a></li>
                </ol>
            </div>
            <div class="row">

            <div class="col-xl-6 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Upload Package</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form wire:submit.prevent="submitForm1">
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Package Name</label>
                                            <div class="col-sm-9">
                                            <select class="default-select  form-control wide" wire:model="PackageName" >
                                                <option>create new</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                            </select>
                                            </div>
                                            @error('PackageName') <span class="error" style="color: red">{{ $message }}</span> @enderror

                                        </div>

                                <!--text area-->
            
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Description</label>
                                            <div class="col-sm-9">
                                            <textarea class="form-control" wire:model="Description" rows="4" id="comment"></textarea>
                                            </div>
                                            @error('Description') <span class="error" style="color: red">{{ $message }}</span> @enderror

                                        </div>
                                        
                                  <!--text area-->
       
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Title</label>
                                            <div class="col-sm-9">
                                                <input type="text" wire:model="Title" class="form-control" placeholder="text">
                                            </div>
                                            @error('Title') <span class="error" style="color: red">{{ $message }}</span> @enderror

                                        </div>

                                <!--image upload-->

                                        <div class="input-group mb-3">
                                        <label class="col-sm-3 col-form-label">Upload Image</label>
                                            <div class="form-file">
                                                <input type="file" wire:model="UploadImage" class="form-file-input form-control">
                                            </div>
                                        </div>
                                        @error('UploadImage') <span class="error" style="color: red">{{ $message }}</span> @enderror



                                <!--URL-->

                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Upload URL</label>
                                            <div class="col-sm-9">
                                                <input type="text" wire:model="UploadURL" class="form-control" placeholder="URL">
                                            </div>
                                            @error('UploadURL') <span class="error" style="color: red">{{ $message }}</span> @enderror

                                        </div>
                    
                                
                                <!--button1-->
                                        <button type="submit" class="btn btn-primary">Save Package</button>
                                    </form>
                                </div>
                            </div>
                        </div>
					</div>

            <!--form 2-->
					<div class="col-xl-6 col-lg-12">
                        <div class="card">
                    <!--topic-->

                            <div class="card-header">
                                <h4 class="card-title">Upload Bank Details</h4>
                            </div>

                     <!--form2-->
    
                            <div class="card-body">
                                <div class="basic-form">
                                    <form wire:submit.prevent="submitForm2">
                                    <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Existing Bank Details</label>
                                            <div class="col-sm-9">
                                            <select class="default-select  form-control wide" wire:model="ExistingBankDetails" >
                                                <option>create new</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                            </select>
                                            </div>
                                        @error('ExistingBankDetails') <span class="error" style="color: red">{{ $message }}</span> @enderror
                                    </div>
                            <!--bank name-->
                                        
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Bank Name</label>
                                            <div class="col-sm-9">
                                                <input type="text" wire:model="BankName" class="form-control" placeholder="text">
                                            </div>
                                            @error('BankName') <span class="error" style="color: red">{{ $message }}</span> @enderror
                                        </div>
                            <!--Account Number-->

                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Account Number</label>
                                            <div class="col-sm-9">
                                                <input type="text" wire:model="AccountNumber" class="form-control" placeholder="Number">
                                            </div>
                                            @error('AccountNumber') <span class="error" style="color: red">{{ $message }}</span> @enderror
                                        </div>
                            <!--ifsc code-->
                                       
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">IFSC Code</label>
                                            <div class="col-sm-9">
                                                <input type="text" wire:model="IFSCCode" class="form-control" placeholder="Code">
                                            </div>
                                            @error('IFSCCode') <span class="error" style="color: red">{{ $message }}</span> @enderror
                                        </div>
                            <!--address-->
                                       
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Address</label>
                                            <div class="col-sm-9">
                                                <input type="text" wire:model="Address" class="form-control" placeholder="text">
                                            </div>
                                            @error('Address') <span class="error" style="color: red">{{ $message }}</span> @enderror
                                        </div>


                            <!--Button-->
                                        <div class="mb-3 row">
                                            <div class="col-sm-10">
                                                <button type="submit" class="btn btn-primary">Save A/C Details</button>
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
</div>
