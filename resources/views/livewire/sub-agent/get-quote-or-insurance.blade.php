<div>
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="row page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item "><a href="javascript:void(0)">Travel Insurance</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Get Quote or Insurance</a></li>

                </ol>
            </div>
            
            <!-- -------------------------------------------------------------------------- -->
            <div class="card">
                <div class="card-body">
                    <div class="basic-form">
                        <form wire:submit.prevent="submitForm">
                            <div class="row">

                             <!--country-->

                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="country">Country of Residency<span class="text-danger">*</span></label>
                                    <select id="country" class="form-control wide mb-3" wire:model="CountryofResidency">
                                        <option value="SC" disabled selected>Select Country</option>
                                        <option value="SriLanka">SriLanka</option>
                                        <option value="USA">USA</option>
                                        <option value="India">India</option>
                                    </select>
                                    @error('CountryofResidency') <span class="error" style="color: red">{{ $message }}</span> @enderror
                                </div>

                            <!--destination-->

                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Destination(s)<span class="text-danger">*</span></label>
                                    <select class="form-control wide mb-3" wire:model="Destination">
                                        <option disabled selected>Please Select Destinations</option>
                                        <option value="1">Option 1</option>
                                        <option value="2">Option 2</option>
                                        <option value="3">Option 3</option>
                                    </select>
                                    @error('Destination') <span class="error" style="color: red">{{ $message }}</span> @enderror
                                </div>

                            <!--travel dates-->

                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Travel Dates<span class="text-danger">*</span></label>
                                    <input class="form-control input-daterange-datepicker" wire:model="TravelDates" type="text" name="daterange" value="Select date range">
                                 @error('TravelDates') <span class="error" style="color: red">{{ $message }}</span> @enderror

                                </div>

                            <!--travellers-->

                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Travellers<span class="text-danger">*</span></label>
                                    <select class="form-control wide mb-3" wire:model="Travellers">
                                        <option disabled selected> Traveller (s), Economy</option>
                                        <option value="1">Option 1</option>
                                        <option value="2">Option 2</option>
                                        <option value="3">Option 3</option>
                                    </select>
                                @error('Travellers') <span class="error" style="color: red">{{ $message }}</span> @enderror

                                </div>
                            </div>

                            <!--button-->
                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary">Search Policy</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
var countrySelect = document.getElementById('country'); // Get the <select> element
    countries.forEach(function (country) {
        var option = document.createElement('option');
        option.value = country;
        option.text = country;
        countrySelect.appendChild(option);
    });
</script>