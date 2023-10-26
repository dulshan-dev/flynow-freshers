<div>

    <!--**********************************
            Content body start
        ***********************************-->
    <div wire:ignore.self class="content-body">
        <!-- row -->
        <div class="container-fluid">



            {{-- table start --}}
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Admins</h4>
                        <!-- Large modal -->
                        <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal"
                            data-bs-target=".create-admin-modal">
                            Create Admin
                        </button>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-responsive-md">
                                <thead>
                                    <tr>
                                        {{-- <th style="width:80px;"><strong>#</strong></th> --}}
                                        <th><strong>Admin</strong></th>
                                        <th><strong>email</strong></th>
                                        <th><strong>Role</strong></th>
                                        <th><strong>STATUS</strong></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($admins as $admin)
                                        <tr>
                                            {{-- <td><strong>01</strong></td> --}}
                                            <td> {{ $admin->name }} </td>
                                            <td> {{ $admin->email }} </td>
                                            <td> {{ $admin->role }} </td>
                                            <td><span class="badge light badge-success">Active</span></td>
                                            <td>
                                                <div class="dropdown">
                                                    <button type="button" class="btn btn-success light sharp"
                                                        data-bs-toggle="dropdown">
                                                        <svg width="20px" height="20px" viewBox="0 0 24 24"
                                                            version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none"
                                                                fill-rule="evenodd">
                                                                <rect x="0" y="0" width="24" height="24" />
                                                                <circle fill="#000000" cx="5" cy="12"
                                                                    r="2" />
                                                                <circle fill="#000000" cx="12" cy="12"
                                                                    r="2" />
                                                                <circle fill="#000000" cx="19" cy="12"
                                                                    r="2" />
                                                            </g>
                                                        </svg>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Edit</a>
                                                        <a class="dropdown-item" href="#">Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            {{-- table start  ends --}}

        </div>
    </div>
    <!--**********************************
                Content body end
            ***********************************-->

    {{-- <===== Starts Create Admin Modal =====> --}}
    {{-- modal fade --}}
    <div wire:ignore.self class="modal fade create-admin-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <div class="modal-body">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Fill Admin Details</h4>
                            @if (session()->has('message'))
                                <div class="text-success">
                                    {{ session('message') }}
                                </div>
                            @endif
                        </div>
                        <div class="card-body">
                            {{-- <div class="basic-form"> --}}
                            <form wire:submit.prevent="createAdmin">

                                <div class="row">
                                    <div class="mb-3 col-md-6">

                                        <br>
                                        <label class="form-label">First Name</label>
                                        <input wire:model="FirstName" type="text" class="form-control"
                                            placeholder="Name">
                                        @error('FirstName')
                                            <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Email</label>
                                        <input wire:model="Email" type="email" class="form-control"
                                            placeholder="Email">
                                        @error('Email')
                                            <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Password</label>
                                        <input wire:model="Password" type="password" class="form-control"
                                            placeholder="Password">
                                        @error('Password')
                                            <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Confirm Password</label>
                                        <input wire:model="CPassword" type="password" class="form-control"
                                            placeholder="Confirm Password">
                                        @error('CPassword')
                                            <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label>Phone</label>
                                        <input wire:model="Phone" type="text" class="form-control">
                                        @error('Phone')
                                            <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                    <div class="mb-3 col-md-4">
                                        <label class="form-label">Role</label>
                                        <select wire:model="Role" class="form-control">
                                            <option disabled selected>Choose...</option>
                                            <option value="Account">Account</option>
                                            <option value="Ticket">Ticket</option>

                                        </select>

                                    </div>
                                </div>
                                {{-- <div class="row">


                                            </div> --}}
                                <div class="mb-3">
                                    <div class="form-check">
                                        <input wire:model="Status" class="form-check-input" type="checkbox">
                                        <label class="form-check-label">
                                            Status
                                        </label>
                                    </div>
                                </div>
                                {{-- <button type="submit" class="btn btn-primary">Save
                                        </button> --}}
                            </form>
                            {{-- </div> --}}
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">
                        Close
                    </button>
                    <button wire:click.prevent="createAdmin" id="save-admin" name="save-admin" type="button"
                        class="btn btn-primary">
                        Save
                    </button>
                </div>
            </div>
        </div>
    </div>
    {{-- <===== Ends Create Admin Modal =====> --}}

</div>


{{-- <script>
    window.addEventListener('table-updated', event => {
        $('#example').DataTable({});
    })
</script> --}}
