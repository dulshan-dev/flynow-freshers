<script src="{{ asset('assets/js/webcam.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>

<style>
    .identity_section {
        display: none;
    }

    .identity_section.show {
        display: block;
    }

    .photo_section {
        display: none;
    }

    .photo_section.show {
        display: block;
    }

    .address_section {
        display: none;
    }

    .address_section.show {
        display: block;
    }
</style>

<x-guest-layout>
    <div class="vh-100 pt-3 mt-3">
        <div class="container h-100">
            <div class="row justify-content-center">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">User verification</h5>
                        </div>
                        <div class="card-body">
                            <div class="col-xl-12">
                                <p class="card-text">
                                    We have multiple verification badges for our users including identity, business registration, company license, address, bank account and
                                    photo verification. Your badge status will have a direct impact when granting facilities and incentives. Please complete the following
                                    mandatory verifications to get started and you can complete the remaining verifications once you login.
                                </p>
                            </div>
                            <div class="container px-4 text-center mt-4">
                                <div class="row gx-5">
                                    <div class="col">
                                        <div class="p-3 rounded-2 border border-dark-subtle mt-3" onclick="showDiv('identity')" style="background-color: <?php echo $statusData['nic_style']; ?>; cursor: pointer; min-height: 115px;">
                                            <h4 class="d-block">Identity verification</h4>
                                            <span class="badge badge-xl {{ $statusData['nic_text'] }} d-block">{{$statusData['nic_status']}}</span>

                                            @if($statusData['nic_status'] === 'Not Submitted')
                                            <span class="text-danger text-center d-block">Click here to verify your identity</span>
                                            @endif

                                            @if($statusData['nic_status'] === 'rejected')
                                            <span class="text-danger text-center d-block">Click here to re-verify your identity</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="p-3 rounded-2 border border-dark-subtle mt-3" onclick="showDiv('photo')" style="background-color: <?php echo $statusData['webcam_style']; ?>; cursor: pointer; min-height: 115px;">
                                            <h4 class="d-block">Photo verification</h4>
                                            <span class="badge badge-xl {{ $statusData['webcam_text'] }} d-block">{{$statusData['webcam_image_status']}}</span>

                                            @if($statusData['webcam_image_status'] === 'Not Submitted')
                                            <span class="text-danger text-center d-block">Click here to verify your photo</span>
                                            @endif

                                            @if($statusData['webcam_image_status'] === 'rejected')
                                            <span class="text-danger text-center d-block">Click here to re-verify your photo</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="p-3 rounded-2 border border-dark-subtle mt-3" onclick="showDiv('address')" style="background-color: <?php echo $statusData['address_style']; ?>; cursor: pointer; min-height: 115px;">
                                            <h4 class="d-block">Address verification</h4>
                                            <span class="badge badge-xl {{ $statusData['address_text'] }} d-block">{{$statusData['address_status']}}</span>

                                            @if($statusData['address_status'] === 'Not Submitted')
                                            <span class="text-danger text-center d-block">Click here to verify your address</span>
                                            @endif

                                            @if($statusData['address_status'] === 'rejected')
                                            <span class="text-danger text-center d-block">Click here to re-verify your address</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>


                                <div class="basic-form mt-5">
                                    <!-- ---------------------------Displaying alerts------------------------- -->
                                    @if (session()->has('success'))
                                    <div class="col-xl-12">
                                        <div class="alert alert-success left-icon-big alert-dismissible fade show">
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"><span><i class="mdi mdi-btn-close"></i></span>
                                            </button>
                                            <div class="media">
                                                <div class="alert-left-icon-big">
                                                    <span><i class="mdi mdi-check-circle-outline"></i></span>
                                                </div>
                                                <div class="media-body">
                                                    <h5 class="mt-1 mb-2">Success!</h5>
                                                    <p class="mb-0">{{ session('success') }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endif

                                    @if (session()->has('failed'))
                                    <div class="col-xl-12">
                                        <div class="alert alert-danger left-icon-big alert-dismissible fade show">
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"><span><i class="mdi mdi-btn-close"></i></span>
                                            </button>
                                            <div class="media">
                                                <div class="alert-left-icon-big">
                                                    <span><i class="mdi mdi-alert"></i></span>
                                                </div>
                                                <div class="media-body">
                                                    <h5 class="mt-1 mb-2">Failed!</h5>
                                                    <p class="mb-0">{{ session('failed') }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endif

                                    <!-- ---------------------------------------------Identity-section---------------------------------------------------------------- -->

                                    @if($statusData['nic_status'] === 'Not Submitted')
                                    <form method="POST" action="{{ route('submitNicProof') }}" class="identity_section show" id="identity_section" enctype="multipart/form-data">
                                        @csrf
                                        <div class="mb-3 row">
                                            <label class="col-sm-2 col-form-label text-start">NIC<span class="text-danger">*</span></label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control mb-3" name="nic_no" placeholder="Enter NIC number">

                                                @error('nic_no')
                                                <span class="text-danger text-xs">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label class="col-sm-2 col-form-label text-start">Scan photo of NIC (Front side)<span class="text-danger">*</span></label>
                                            <div class="col-sm-10">
                                                <div class="input-group mb-3">
                                                    <div class="form-file">
                                                        <input type="file" name="nic_proof_front" accept="image/png, image/jpeg" class="form-file-input form-control">
                                                    </div>
                                                </div>
                                                @error('nic_proof_front')
                                                <span class="text-danger text-xs">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label class="col-sm-2 col-form-label text-start">Scan photo of NIC (Back side)<span class="text-danger">*</span></label>
                                            <div class="col-sm-10">
                                                <div class="input-group mb-3">
                                                    <div class="form-file">
                                                        <input type="file" name="nic_proof_back" accept="image/png, image/jpeg" class="form-file-input form-control">
                                                    </div>
                                                </div>
                                                @error('nic_proof_back')
                                                <span class="text-danger text-xs">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="card-footer d-sm-flex justify-content-end align-items-center">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </form>
                                    @endif

                                    <!-- ---------------------------------------------Photo section------------------------------------------------------------------- -->
                                    @if($statusData['webcam_image_status'] === 'Not Submitted')
                                    <form action="{{ route('submitPhotoProof') }}" method="POST" class="photo_section" id="photo_section" enctype="multipart/form-data">
                                        @csrf
                                        <div>
                                            <div class="d-flex justify-content-center mb-4">
                                                <div class="round-2" id="my_camera"></div>
                                                <div id="results">Your captured image will appear here...</div>
                                            </div>
                                            <input class="btn btn-success mb-4" type=button value="Take Snapshot" onClick="take_snapshot()">
                                            <input type="hidden" name="webcam_image" class="image-tag">
                                            <input class="btn btn-primary mb-4" type=button onclick="viewCamera()" value="View Camera">
                                        </div>

                                        <div class="card-footer d-sm-flex justify-content-end align-items-center">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </form>
                                    @endif

                                    <!-- ---------------------------------------------Address section------------------------------------------------------------------ -->
                                    @if($statusData['address_status'] === 'Not Submitted')
                                    <form action="{{ route('submitAddressProof') }}" method="POST" class="address_section" id="address_section" enctype="multipart/form-data">
                                        @csrf
                                        <div class="mb-3 row">
                                            <label class="col-sm-2 col-form-label text-start">Unit number</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control mb-3" name="unit_no" placeholder="Enter unit number">

                                                @error('unit_no')
                                                <span class="text-danger text-xs">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label class="col-sm-2 col-form-label text-start">Street name<span class="text-danger">*</span></label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control mb-3" name="street_name" placeholder="Enter street name">

                                                @error('street_name')
                                                <span class="text-danger text-xs">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label class="col-sm-2 col-form-label text-start">City<span class="text-danger">*</span></label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control mb-3" name="city" placeholder="Enter city">

                                                @error('city')
                                                <span class="text-danger text-xs">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label class="col-sm-2 col-form-label text-start">Province<span class="text-danger">*</span></label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control mb-3" name="province" placeholder="Enter province">

                                                @error('province')
                                                <span class="text-danger text-xs">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label class="col-sm-2 col-form-label text-start">Country<span class="text-danger">*</span></label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control mb-3" name="country" placeholder="Enter country">

                                                @error('country')
                                                <span class="text-danger text-xs">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label class="col-sm-2 col-form-label text-start">Address proof (Attach bill/statement)<span class="text-danger">*</span></label>
                                            <div class="col-sm-10">
                                                <div class="input-group mb-3">
                                                    <div class="form-file">
                                                        <input type="file" name="address_proof" accept="image/png, image/jpeg" class="form-file-input form-control">
                                                    </div>
                                                </div>
                                                @error('address_proof')
                                                <span class="text-danger text-xs">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="card-footer d-sm-flex justify-content-end align-items-center">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </form>
                                    @endif
                                    <!-- --------------------------------Display the form if the documents rejected by the admin------------------------------- -->

                                    <!-- ---------------------------------------------NIC re-submit form------------------------------- -->

                                    @if($statusData['nic_status'] === 'rejected')
                                    <form method="POST" action="{{ route('re-submitNicProof') }}" class="identity_section show" id="identity_section" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="mb-3 row">
                                            <label class="col-sm-2 col-form-label text-start">NIC<span class="text-danger">*</span></label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control mb-3" name="nic_no" placeholder="Enter NIC number">

                                                @error('nic_no')
                                                <span class="text-danger text-xs">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label class="col-sm-2 col-form-label text-start">Scan photo of NIC (Front side)<span class="text-danger">*</span></label>
                                            <div class="col-sm-10">
                                                <div class="input-group mb-3">
                                                    <div class="form-file">
                                                        <input type="file" name="nic_proof_front" accept="image/png, image/jpeg" class="form-file-input form-control">
                                                    </div>
                                                </div>
                                                @error('nic_proof_front')
                                                <span class="text-danger text-xs">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label class="col-sm-2 col-form-label text-start">Scan photo of NIC (Back side)<span class="text-danger">*</span></label>
                                            <div class="col-sm-10">
                                                <div class="input-group mb-3">
                                                    <div class="form-file">
                                                        <input type="file" name="nic_proof_back" accept="image/png, image/jpeg" class="form-file-input form-control">
                                                    </div>
                                                </div>
                                                @error('nic_proof_back')
                                                <span class="text-danger text-xs">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="card-footer d-sm-flex justify-content-end align-items-center">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </form>
                                    @endif

                                    <!-- ---------------------------------Webcam image re-submit form------------------------------- -->

                                    @if($statusData['webcam_image_status'] === 'rejected')
                                    <form action="{{ route('re-submitPhotoProof') }}" method="POST" class="photo_section" id="photo_section" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div>
                                            <div class="d-flex justify-content-center mb-4">
                                                <div class="round-2" id="my_camera"></div>
                                                <div id="results">Your captured image will appear here...</div>
                                            </div>
                                            <input class="btn btn-success mb-4" type=button value="Take Snapshot" onClick="take_snapshot()">
                                            <input type="hidden" name="webcam_image" class="image-tag">
                                            <input class="btn btn-primary mb-4" type=button onclick="viewCamera()" value="View Camera">
                                        </div>

                                        <div class="card-footer d-sm-flex justify-content-end align-items-center">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </form>
                                    @endif

                                    <!-- -----------------------------------Address re-submit form---------------------------------- -->

                                    @if($statusData['address_status'] === 'rejected')
                                    <form action="{{ route('re-submitAddressProof') }}" method="POST" class="address_section" id="address_section" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="mb-3 row">
                                            <label class="col-sm-2 col-form-label text-start">Unit number</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control mb-3" name="unit_no" placeholder="Enter unit number">

                                                @error('unit_no')
                                                <span class="text-danger text-xs">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label class="col-sm-2 col-form-label text-start">Street name<span class="text-danger">*</span></label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control mb-3" name="street_name" placeholder="Enter street name">

                                                @error('street_name')
                                                <span class="text-danger text-xs">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label class="col-sm-2 col-form-label text-start">City<span class="text-danger">*</span></label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control mb-3" name="city" placeholder="Enter city">

                                                @error('city')
                                                <span class="text-danger text-xs">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label class="col-sm-2 col-form-label text-start">Province<span class="text-danger">*</span></label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control mb-3" name="province" placeholder="Enter province">

                                                @error('province')
                                                <span class="text-danger text-xs">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label class="col-sm-2 col-form-label text-start">Country<span class="text-danger">*</span></label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control mb-3" name="country" placeholder="Enter country">

                                                @error('country')
                                                <span class="text-danger text-xs">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label class="col-sm-2 col-form-label text-start">Address proof (Attach bill/statement)<span class="text-danger">*</span></label>
                                            <div class="col-sm-10">
                                                <div class="input-group mb-3">
                                                    <div class="form-file">
                                                        <input type="file" name="address_proof" accept="image/png, image/jpeg" class="form-file-input form-control">
                                                    </div>
                                                </div>
                                                @error('address_proof')
                                                <span class="text-danger text-xs">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="card-footer d-sm-flex justify-content-end align-items-center">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </form>
                                    @endif

                                </div>
                                <!-- ----------------------------------------------------------------------------------------------- -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>

<script>
    //Function for showing divs
    function showDiv(selectValue) {
        const identity = document.querySelector('.identity_section');
        const photo = document.querySelector('.photo_section');
        const address = document.querySelector('.address_section');

        if (selectValue === 'identity') {

            if (document.querySelector('.identity_section')) {
                identity.classList.add('show');
            }

            if (document.querySelector('.photo_section')) {
                photo.classList.remove('show');
            }

            if (document.querySelector('.address_section')) {
                address.classList.remove('show');
            }

        } else if (selectValue === 'photo') {

            if (document.querySelector('.photo_section')) {
                photo.classList.add('show');
            }

            if (document.querySelector('.identity_section')) {
                identity.classList.remove('show');
            }

            if (document.querySelector('.address_section')) {
                address.classList.remove('show');
            }

        } else if (selectValue === 'address') {

            if (document.querySelector('.address_section')) {
                address.classList.add('show');
            }

            if (document.querySelector('.identity_section')) {
                identity.classList.remove('show');
            }

            if (document.querySelector('.photo_section')) {
                photo.classList.remove('show');
            }
        }
    }

    //webcamJS
    function viewCamera() {
        const photo = document.getElementById('photo_section');

        if (!Webcam.attached) {
            Webcam.set({
                width: 320,
                height: 240,
                image_format: 'jpeg',
                jpeg_quality: 90
            });

            let camera = document.getElementById('my_camera');
            Webcam.attach(camera);

        }
    }

    function take_snapshot() {
        Webcam.snap(function(data_uri) {
            $(".image-tag").val(data_uri);
            document.getElementById('results').innerHTML = '<img src="' + data_uri + '"/>';
        });

    }
</script>