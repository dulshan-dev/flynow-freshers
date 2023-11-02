<div>
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <div class="card-body">
                        <select wire:model="filter" wire:change='filterUsers' class="form-select form-select-lg mb-3" aria-label="select example">
                            <option value="all">All Users</option>
                            <option value="verified">Verified Users</option>
                            <option value="not_submitted">Pending Users</option>
                        </select>
                        <div class="table-responsive">
                            <table class="table table-sm mb-0 table-striped">
                                <thead>
                                    <tr>
                                        <th class="pe-3">
                                            <div class="form-check custom-checkbox mx-2">
                                                <input type="checkbox" class="form-check-input" id="checkAll">
                                                <label class="form-check-label" for="checkAll"></label>
                                            </div>
                                        </th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Company Name</th>
                                        <th>Status</th>
                                        <th class="text-center">Email</th>
                                        <th>Phone</th>
                                        <th>Role</th>
                                    </tr>
                                </thead>
                                <tbody id="customers">
                                    @foreach ($users as $user)
                                    <tr class="btn-reveal-trigger">
                                        <td class="py-2">
                                            <div class="form-check custom-checkbox mx-2">
                                                <input type="checkbox" class="form-check-input" id="checkbox1">
                                                <label class="form-check-label" for="checkbox1"></label>
                                            </div>
                                        </td>
                                        <td class="py-3">
                                            <a href="#">
                                                <div class="media d-flex align-items-center">
                                                    <div class="avatar avatar-xl me-2">
                                                        <div class=""><img class="rounded-circle img-fluid" src="{{ $user->profile_photo_path ? asset('storage/' . $user->profile_photo_path) : asset('assets/images/user.jpg') }}" width="30" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <h5 class="mb-0 fs--1">{{ $user->first_name }}</h5>
                                                    </div>
                                                </div>
                                            </a>
                                        </td>
                                        <td class="py-3">
                                            <a href="#">
                                                <div class="media d-flex align-items-center">
                                                    <div class="media-body">
                                                        <h5 class="mb-0 fs--1">{{ $user->surname }}</h5>
                                                    </div>
                                                </div>
                                            </a>
                                        </td>
                                        <td class="py-2">{{ $user->company_name }}</td>
                                        <td><span class="badge light badge-success">{{ $user->verification_status }}</span></td>
                                        <td class="py-2 ps-5"><a href="mailto:{{ $user->email }}">{{ $user->email }}</a></td>
                                        <td class="py-2"><a href="tel:{{ $user->phone }}">{{ $user->phone }}</a></td>
                                        <td class="py-2">{{ $user->role }}</td>
                                        <td class="py-2 text-end">
                                            <div class="dropdown">
                                                <button class="btn btn-success light sharp" type="button" data-bs-toggle="dropdown">
                                                    <span class="fs--1">
                                                        <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <rect x="0" y="0" width="24" height="24"></rect>
                                                                <circle fill="#000000" cx="5" cy="12" r="2"></circle>
                                                                <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                                                <circle fill="#000000" cx="19" cy="12" r="2"></circle>
                                                            </g>
                                                        </svg>   
                                                    </span>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end border py-0">
                                                    <div class="py-2">
                                                        <a class="dropdown-item" href="#" wire:click="editUser({{ $user->id }})">Edit</a>
                                                        <a class="dropdown-item text-danger" href="#" wire:click="deleteUser({{ $user->id }})">Delete</a>
                                                    </div>
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
        </div>
    </div>
</div>
