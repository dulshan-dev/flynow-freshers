<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Service Tax Details</a></li>
            </ol>
        </div>

        <!---table---->

        <div class="input-group mb-3">
            <div class="card">
                <div class="card-body">
                    <!--Radio button-->

                    <div class="row">
                        <label class="col-form-label col-sm-3 pt-0">Sector</label>
                        <form>
                            <div class="mb-3 mb-0">
                                <label class="radio-inline me-3"><input type="radio" name="sector" value="domestic" id="domestic"> Domestic</label>
                                <label class="radio-inline me-3"><input type="radio" name="sector" value="international" id="international"> International</label>
                            </div>
                        </form>
                    </div>

                    <!--domesticmenu----->

                    <div class="basic-form" id="domesticmenu">
                        <form>
                            <div class="row">
                                <label class="form-label">Service Tax</label>
                                <div class="mb-3 col-md-6">
                                    <input type="text" class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label">Education Cess</label>
                                <input type="text" class="form-control" placeholder="">
                            </div>
                            <div class="row">

                                <div class="row">
                                    <label class="form-label">HEdu.Cess </label>
                                    <div class="mb-3 col-md-6">
                                        <input type="text" class="form-control" placeholder=" ">
                                    </div>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Swatch Bharat Tax</label>
                                    <input type="text" class="form-control" placeholder=" ">
                                </div>
                                <div class="row">
                                    <div class="row">
                                        <label class="form-label">Calculated on</label>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <select id="inputState" class="default-select form-control wide">
                                            <option selected>Select one...</option>
                                            <option>one</option>
                                            <option>two</option>
                                            <option>three</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <button type="button" class="btn btn-outline-primary">Save </button>
                                </div>
                        </form>
                    </div>
                </div>

                <!--internationalmenu----->
                <form>
                    <div class="card-body">
                        <div class="basic-form" id="internationalmenu">
                            <form>

                                <div class="row">
                                    <label class="form-label">Service Tax</label>
                                    <div class="mb-3 col-md-6">
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Education Cess</label>
                                    <input type="text" class="form-control" placeholder="">
                                </div>
                                <div class="row">

                                    <div class="row">
                                        <label class="form-label">HEdu.Cess </label>
                                        <div class="mb-3 col-md-6">
                                            <input type="text" class="form-control" placeholder=" ">
                                        </div>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Swatch Bharat Tax</label>
                                        <input type="text" class="form-control" placeholder=" ">
                                    </div>
                            </form>
                            <!--drop down-->

                            <div class="row">
                                <div class="row">
                                    <label class="form-label">Calculated on</label>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <select id="inputState" class="default-select form-control wide">
                                        <option selected>Select one...</option>
                                        <option>one</option>
                                        <option>two</option>
                                        <option>three</option>
                                    </select>
                                </div>
                            </div>
                            <!--button-->
                            <div class="card-body">
                                <button type="button" class="btn btn-outline-primary">Save </button>
                            </div>
                </form>
            </div>
        </div>

    </div>
</div>
</div>
</div>

<script>
    // Add an event listener to the radio buttons
    const domestic = document.getElementById('domestic');
    const international = document.getElementById('international');
    const domesticmenu = document.getElementById('domesticmenu');
    const internationalmenu = document.getElementById('internationalmenu');

    // Set the initial state based on the "Domestic" radio button
    domestic.checked = true;
    domesticmenu.style.display = 'block';
    internationalmenu.style.display = 'none';

    // Add event listeners to the radio buttons
    domestic.addEventListener('change', function() {
        if (domestic.checked) {
            domesticmenu.style.display = 'block';
            internationalmenu.style.display = 'none';
        }
    });

    international.addEventListener('change', function() {
        if (international.checked) {
            internationalmenu.style.display = 'block';
            domesticmenu.style.display = 'none';
        }
    });
</script>