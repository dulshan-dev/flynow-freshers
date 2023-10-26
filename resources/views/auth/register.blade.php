<x-guest-layout>
    <div class="vh-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-8">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <div class="text-center mb-3 w-100 d-flex justify-content-center">
                                        <a href="index.html"><img
                                                src="{{ asset('assets/images/flynow-icon-small.png') }}"
                                                class="img-fluid img-thumbnail" style="height: 100px; width: 100px;"
                                                alt=""></a>
                                    </div>
                                    <h4 class="text-left mb-4">Sign up your account</h4>

                                    {{-- @if ($errors->any())
                                        <div class="alert alert-danger left-icon-big alert-dismissible fade show">
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="btn-close"><span><i class="mdi mdi-btn-close"></i></span>
                                            </button>
                                            <div class="media">
                                                <div class="alert-left-icon-big">
                                                    <span><i class="mdi mdi-alert"></i></span>
                                                </div>
                                                <div class="media-body">
                                                    <h5 class="mt-1 mb-2">Whoops! Something went wrong</h5>
                                                    @foreach ($errors->all() as $error)
                                                        <p class="mb-0">{{ $error }}</p>
                                                    @endforeach

                                                </div>
                                            </div>
                                        </div>
                                    @endif --}}

                                    @if (session('status'))
                                        <div class="mb-4 font-medium text-sm text-green-600">
                                            {{ session('status') }}
                                        </div>
                                    @endif

                                    <form action="{{ route('register') }}" method="POST">
                                        @csrf

                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label class="mb-1"><strong>First Name</strong></label>
                                                <input type="text" class="form-control" placeholder="first name"
                                                    name="first_name"
                                                    value="{{ old('first_name', $input['first_name'] ?? '') }}">
                                                @error('first_name')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="col-sm-6">
                                                <label class="mb-1"><strong>Sur Name</strong></label>
                                                <input type="text" class="form-control" placeholder="sur name"
                                                    name="surname"
                                                    value="{{ old('surname', $input['surname'] ?? '') }}">
                                                @error('surname')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row mt-3">
                                            <div class="col-sm-6 mt-2 mt-sm-0">
                                                <label class="mb-1"><strong>Company</strong></label>
                                                <input type="text" class="form-control" placeholder="company"
                                                    name="company_name"
                                                    value="{{ old('company_name', $input['company_name'] ?? '') }}">
                                                @error('company_name')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>

                                            <div class="col-sm-6">
                                                <label class="mb-1"><strong>Email</strong></label>
                                                <input type="email" class="form-control" placeholder="email"
                                                    name="email" value="{{ old('email', $input['email'] ?? '') }}">
                                                @error('email')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row mt-5">
                                            <div class="col-sm-6 mt-2 mt-sm-0">
                                                <label class="mb-1"><strong></strong></label>
                                                <input type="text" class="form-control" placeholder="mobile"
                                                    name="phone" id="phone"
                                                    value="{{ old('phone', $input['phone'] ?? '+94') }}">
                                                @error('phone')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>

                                            <div class="col-sm-6">
                                                <label class="mb-1"><strong>Company Grade</strong></label>
                                                <select name="package"
                                                    class="default-select form-control wide form-control-sm mb-3">
                                                    <option value="a"
                                                        {{ old('package', $input['package'] ?? '') == 'a' ? 'selected' : '' }}>
                                                        Grade A</option>
                                                    <option value="b"
                                                        {{ old('package', $input['package'] ?? '') == 'b' ? 'selected' : '' }}>
                                                        Grade B</option>
                                                    <option value="c"
                                                        {{ old('package', $input['package'] ?? '') == 'c' ? 'selected' : '' }}>
                                                        Grade C</option>
                                                </select>
                                                @error('package')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row mt-3">
                                            <div class="col-sm-6 mt-2 mt-sm-0">
                                                <label class="mb-1"><strong>Password</strong></label>
                                                <input type="password" class="form-control" placeholder="**********"
                                                    name="password" value="{{ old('password') }}">
                                                @error('password')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>

                                            <div class="col-sm-6">
                                                <label class="mb-1"><strong>Password Confirmation</strong></label>
                                                <input type="password" class="form-control" placeholder="**********"
                                                    name="password_confirmation"
                                                    value="{{ old('password_confirmation') }}">
                                                @error('password_confirmation')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="text-center mt-4">
                                            <button type="submit" class="btn btn-warning btn-block">Register</button>
                                        </div>
                                    </form>

                                    <div class="new-account mt-3">
                                        <p>Already have an account? <a class="text-primary" href="/login">Login</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>

<script>
    var input = document.querySelector("#phone");
    window.intlTelInput(input, {
        // separateDialCode: true,
        initialCountry: "lk",
        utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/js/utils.js",

    });
</script>
