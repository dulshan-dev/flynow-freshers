<div>
    <div>
        <div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Offers</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Upload Offers</a></li>
                    </ol>
                </div>
                <div class="row">

                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Upload Offers</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form wire:submit.prevent="submitForm1">
                                        @if (session()->has('success'))
                                        <div class="alert alert-success alert-dismissible fade show">
                                            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2">
                                                <polyline points="9 11 12 14 22 4"></polyline>
                                                <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
                                            </svg>
                                            {{ session('success') }}
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
                                            </button>
                                        </div>
                                        @endif
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Offer Name</label>
                                            <div class="col-sm-9">
                                                <select class="form-control wide" wire:model="OfferName">
                                                    <option value="Default">Select Your Offer Name</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                </select>
                                            </div>
                                            @error('OfferName') <span class="error" style="color: red;">{{ $message }}</span> @enderror
                                        </div>

                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Description</label>
                                            <div class="col-sm-9">
                                                <textarea class="form-control" name="message" id="ckeditor" wire:model="Description" placeholder="Enter Your Description"></textarea>
                                            </div>
                                            @error('Description') <span class="error" style="color: red;">{{ $message }}</span> @enderror
                                        </div>

                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Title</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" placeholder="Enter Your Title" wire:model="Enter Your Title">
                                            </div>
                                            @error('Title') <span class="error" style="color: red;">{{ $message }}</span> @enderror
                                        </div>



                                        <!--image upload-->

                                        <div class="input-group mb-3">
                                            <label class="col-sm-3 col-form-label">Upload Image</label>
                                            <div class="form-file">
                                                <input type="file" class="form-file-input form-control" wire:model="UploadImage">

                                            </div>

                                        </div>
                                        @error('UploadImage') <span class="error" style="color: red;">{{ $message }}</span> @enderror


                                        <!--URL-->

                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Upload URL</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" placeholder="Enter Your URL" wire:model="UploadURL">

                                            </div>
                                        </div>
                                        @error('UploadURL') <span class="error" style="color: red;">{{ $message }}</span> @enderror


                                        <!--button1-->

                                        <div class="container">
                                            <button type="submit" class="btn btn-primary" name="submit">Save Package</button>
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

</div>



<!-- <script>
    ClassicEditor.create(document.querySelector('#Description1')).then(editor => {
        editor.model.document.on('change:data', () => {
            @this.set('Description1', editor.getData());
        })
    }).catch(error => {
        console.error(error);
    });
    // const editor = CKEDITOR.replace('Description1');
    //         editor.on('change', function(event){
    //             console.log(event.editor.getData())
    //             @this.set('Description1', event.editor.getData());
    //         })
</script> -->