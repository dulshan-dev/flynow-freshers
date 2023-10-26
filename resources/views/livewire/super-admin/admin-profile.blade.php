<div>
    <div class="content-body">
        <div class="container-fluid">
            <!-- row -->
            <div class="row">
                <div class="col-xl-3 col-lg-4">
                    <div class="clearfix">
                        <div class="card card-bx profile-card author-profile m-b30">
                            <div class="card-body">
                                <div class="p-5">
                                    <div class="author-profile">
                                        <div class="author-media">

                                            @if(Auth::user()->profile_photo_path)
                                            <img class="img-fluid rounded-circle" style="height: 120px;" src="{{ asset('storage/' . Auth::user()->profile_photo_path) }}" alt="">
                                            @else
                                            <img class="img-fluid rounded-circle" src="{{ asset('assets/images/user.jpg') }}" alt="">
                                            @endif

                                            <div class="upload-link" title="" data-toggle="tooltip" data-placement="right" data-original-title="update">
                                                <input type="file" wire:model='profile_photo_path' accept="image/png, image/jpeg" class="update-flie">
                                                <i class="fa fa-camera"></i>
                                            </div>
                                        </div>
                                        <div class="author-info">
                                            <h6 class="title">{{ Auth::user()->name }}</h6>
                                            <span>{{ Auth::user()->role }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <!-- <div class="input-group mb-3">
                                    <div class="form-control rounded text-center bg-white fs-16">Portfolio</div>
                                </div> -->
                                <!-- <div class="input-group">
                                    <a href="https://www.dexignlab.com/" class="form-control text-primary rounded text-start bg-white fs-16">https://www.dexignlab.com/</a>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-8">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Settings</h4>
                        </div>
                        <div class="card-body">
                            <!-- Nav tabs -->
                            <div class="default-tab">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#profile"><i class="la la-user me-2"></i> Profile</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#password"><i class="bi bi-lock me-2"></i> Password</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#twoFactor"><i class="las la-key me-2"></i> 2FA</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="profile" role="tabpanel">
                                        <div class="pt-4">
                                            <form class="profile-form" wire:submit.prevent='updateAdminDetails'>
                                                @csrf
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-sm-6 mb-3">
                                                            <label class="form-label">Name</label>
                                                            <input type="text" wire:model="name" name="name" class="form-control" value="{{ $name }}">
                                                            @error('name')
                                                            <span class="text-danger text-xs">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                        <div class="col-sm-6 mb-3">
                                                            <label class="form-label">Email adress</label>
                                                            <input type="text" wire:model="email" name="email" class="form-control" value="{{ $email }}">
                                                            @error('email')
                                                            <span class="text-danger text-xs">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer d-flex justify-content-between align-middle">
                                                    <button type="submit" class="btn btn-primary">Update</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="password">
                                        <div class="pt-4">
                                            <form class="profile-form" wire:submit='changePassword'>
                                                @csrf
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-sm-12 mb-3">
                                                            <label class="form-label">Current Password</label>
                                                            <input wire:model="currentPassword" type="password" class="form-control" placeholder="Current  Password">
                                                            @error('currentPassword')
                                                            <span class="text-danger"> {{ $message }} </span>
                                                            @enderror
                                                        </div>
                                                        <div class="col-sm-6 mb-3">
                                                            <label class="form-label">New Password</label>
                                                            <input wire:model="newPassword" type="password" class="form-control" placeholder="New Password">
                                                            @error('newPassword')
                                                            <span class="text-danger"> {{ $message }} </span>
                                                            @enderror
                                                        </div>
                                                        <div class="col-sm-6 mb-3">
                                                            <label class="form-label">Confirm Password</label>
                                                            <input wire:model="password_confirmation" type="password" class="form-control" placeholder="Confirm new Password">
                                                            @error('password_confirmation')
                                                            <span class="text-danger"> {{ $message }} </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer d-flex justify-content-between align-middle">
                                                    <button type="submit" class="btn btn-primary">Change</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="twoFactor">
                                        <div class="pt-4">
                                            <!-- 2FA enabled, we display the QR code : -->
                                            @if(auth()->user()->two_factor_secret)

                                            <div class="mt-3 mb-3">
                                                <label class="form-label">Two factor authentication is now enabled. Scan the following QR code using google authenticator application.</label>
                                            </div>
                                            {!! auth()->user()->twoFactorQrCodeSvg() !!}
                                            <!-- 2FA not enabled, we show an 'enable' button  : -->
                                            <form action="/user/two-factor-authentication" method="post">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-danger mt-4">Disable 2FA</button>
                                            </form>
                                            @else
                                            <form action="/user/two-factor-authentication" method="post">
                                                @csrf
                                                <div class="mt-3 mb-3">
                                                    <label class="form-label">You have not enabled two factor authentication.</label>
                                                </div>
                                                <button type="submit" class="btn btn-primary mt-3">Enable 2FA</button>
                                            </form>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--**********************************
					Footer start
				***********************************-->

            <!--**********************************
					Footer end
				***********************************-->
        </div>
    </div>
</div>