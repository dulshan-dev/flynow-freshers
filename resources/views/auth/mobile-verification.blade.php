<x-guest-layout>
    <div class="vh-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
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
                                    <h4 class="text-center mb-4">Verify Your Mobile No</h4>

                                    <div class="new-account mt-3">
                                        <p>Enter the OTP. we just send OTP on your mobile phone<a class="text-primary"
                                                href="#">
                                            </a></p>
                                    </div>

                                    <form action="{{ route('verify.otp') }}" method="POST">
                                        @csrf
                                        {{-- <div class="mb-3 {{(session('success')) ? 'd-none':''}}">
                                            <label class="mb-1"><strong>Mobile</strong></label>
                                            <input type="text" class="form-control" name="mobile" >

                                            @error('mobile')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div> --}}

                                        <div class="d-flex flex-row mt-2 p-2">
                                            <input type="text" name="n1" class="form-control m-1"
                                                autofocus="">
                                            <input type="text" name="n2" class="form-control m-1">
                                            <input type="text" name="n3" class="form-control m-1">
                                            <input type="text" name="n4" class="form-control m-1">
                                            <input type="text" name="n5" class="form-control m-1">
                                            <input type="text" name="n6" class="form-control m-1">
                                        </div>

                                        @error('otp')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror

                                        <div class="text-center">
                                            <button type="submit" class="btn btn-warning btn-block">
                                                Verify Mobile
                                            </button>
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
</x-guest-layout>

<script>
    const otpInputs = document.querySelectorAll('input[type="text"][name^="n"]');

    otpInputs.forEach((input, index) => {
        input.addEventListener('input', (e) => {
            // Automatically move focus to the next input field
            if (e.target.value.length === 1 && index < otpInputs.length - 1) {
                otpInputs[index + 1].focus();
            }
        });

        // Allow backspace to go to the previous input field
        input.addEventListener('keydown', (e) => {
            if (e.key === 'Backspace' && index > 0) {
                otpInputs[index - 1].focus();
            }
        });
    });
</script>
