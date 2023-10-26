<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Private Fare Account Code</a></li>
            </ol>
        </div>

        <!-- form-->
        <div class="input-group mb-3">
            <div class="card">
                <div class="card-body">
                    <div class="basic-form">
                        <form>
                            <div class="row">
                                <div class="row">
                                    <div class="row">
                                        <label class="form-label">Agency Name</label>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <select id="inputState" class="default-select form-control wide">
                                            <option selected>Select Agency...</option>
                                            <option>one</option>
                                            <option>two</option>
                                            <option>three</option>
                                        </select>
                                    </div>
                                </div>

                                <!--select GRS menu-->
                                <div class="row" id="SelectGDSmenu">
                                    <div class="row">
                                        <label class="form-label">GDS Name</label>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <select id="inputState" class="default-select form-control wide">
                                            <option name="GDS" value="SelectGDS" id="SelectGDS">Select GDS</option>
                                            <option name="GDS" value="Galileo" id="Galileo">Galileo</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="basic-form">
                                    <form>
                                        <div class="row">
                                            <label class="col-form-label col-sm-3 pt-0">Sector</label>
                                            <form>
                                                <div class="mb-3 mb-0">
                                                    <label class="radio-inline me-3"><input type="radio" name="Sector" value="Domestic" id="Domestic"> Domestic</label>
                                                    <label class="radio-inline me-3"><input type="radio" name="Sector" value="International" id="International"> International</label>
                                                </div>
                                            </form>
                                        </div>

                                        <div class="mb-3 col-md-6">
                                            <label class="form-label">Account Code 1</label>
                                            <input type="text" class="form-control" placeholder=" ">
                                        </div>
                                        <div class="row">
                                            <label class="form-label">Account Code 2</label>
                                            <div class="mb-3 col-md-6">
                                                <input type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label">Account Code 3</label>
                                            <input type="text" class="form-control" placeholder="">
                                        </div>
                                    </form>

                                    <div class="card-body">
                                        <button type="button" class="btn btn-outline-primary">Save </button>
                                    </div>
                        </form>
                    </div>
                </div>
                <!--Galileomenu-->
                <div class="card-body" id="Galileomenu">
                    <div class="basic-form">

                        <!--Sector radio button-->

                        <form>
                            <div class="row">
                                <label class="col-form-label col-sm-3 pt-0">Sector</label>
                                <form>
                                    <div class="mb-3 mb-0">
                                        <label class="radio-inline me-3"><input type="radio" name="Sector" value="Domestic" id="Domestic"> Domestic</label>
                                        <label class="radio-inline me-3"><input type="radio" name="Sector" value="International" id="International"> International</label>
                                    </div>
                                </form>
                            </div>


                            <div class="mb-3 col-md-6">
                                <label class="form-label">Account Code 1</label>
                                <input type="text" class="form-control" placeholder=" ">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!--script----->
<script>
    // Add an event listener to the radio buttons
    const SelectGDS = document.getElementById('SelectGDS');
    const Galileo = document.getElementById('Galileo');
    const SelectGDSmenu = document.getElementById('SelectGDSmenu');
    const Galileomenu = document.getElementById('Galileomenu');

    // Set the "SelectGDS" radio button as checked by default
    SelectGDS.checked = true;

    // Show the "SelectGDSmenu" section by default
    SelectGDSmenu.style.display = 'block';

    // Hide the "Galileomenu" section by default
    Galileomenu.style.display = 'none';

    SelectGDS.addEventListener('change', function() {
        if (SelectGDS.checked) {
            SelectGDSmenu.style.display = 'block';
            Galileomenu.style.display = 'none';
        }
    });

    Galileo.addEventListener('change', function() {
        if (Galileo.checked) {
            Galileomenu.style.display = 'block';
            SelectGDSmenu.style.display = 'none';
        }
    });
</script>