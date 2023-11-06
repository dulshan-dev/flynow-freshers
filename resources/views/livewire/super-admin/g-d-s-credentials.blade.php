<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Agency GDS Credentials</a></li>
            </ol>
        </div>
        
        <!---table---->

        <div class="input-group mb-3">
            <div class="card">
                <div class="card-body">

                     <!--Company-->

                     <div class="row">
                        <div class="row">
                            <label class="form-label">Company</label>
                        </div>
                        <div class="row">
                            <select id="inputState" class="default-select form-control wide">
                                <option selected>Select Company...</option>
                                <option>one</option>
                                <option>two</option>
                                <option>three</option>
                            </select>
                        </div>
                    </div> 

                    
                    <!--Agency Name-->

                    <div class="row">
                        <div class="row">
                            <label class="form-label">Agency Name</label>
                        </div>
                        <div class="row">
                            <select id="inputState" class="default-select form-control wide">
                                <option selected>Select Agency...</option>
                                <option>one</option>
                                <option>two</option>
                                <option>three</option>
                            </select>
                        </div>
                    </div> 

                   


                <!--Radio button-->

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label class="col-form-label col-sm-3 pt-0">Sector</label>
                                <div class="radio-inline">
                                    <label class="radio-inline me-3">
                                        <input type="radio" name="sector" value="domestic" id="domestic"> Domestic
                                    </label>
                                    <label class="radio-inline me-3">
                                        <input type="radio" name="sector" value="international" id="international"> International
                                    </label>
                                </div>
                            </div>
                        </div>
                    
                    
                        <!--Checkbox-->

                        <div class="col-xl-4 col-xxl-6 col-6">
                            <div class="form-check custom-checkbox mb-3 checkbox-danger">
                                <input type="checkbox" class="form-check-input" checked id="customCheckBox5" required>
                                <label class="form-check-label" for="customCheckBox5">AVMD</label>
                            </div>
                        </div>
                    </div>
                    


                     <!--Radio button-->
    
                     <div class="row">
                        <label class="col-form-label col-sm-3 pt-0">GDS/LCC</label>
                        <form>
                            <div class="mb-3 mb-0">
                                <label class="radio-inline me-3"><input type="radio" name="sector" value="domestic" id="domestic"> Galileo</label>
                                <label class="radio-inline me-3"><input type="radio" name="sector" value="international" id="international"> LCC</label>
                                <label class="radio-inline me-3"><input type="radio" name="sector" value="domestic" id="domestic"> Uapi1G</label>
                                <label class="radio-inline me-3"><input type="radio" name="sector" value="international" id="international"> Indigo</label>
                                <label class="radio-inline me-3"><input type="radio" name="sector" value="domestic" id="domestic"> Consolidator</label>
                                <label class="radio-inline me-3"><input type="radio" name="sector" value="international" id="international"> Tripjack</label>
                            
                            </div>
                        </form>
                    </div>

                     <!--check box-->

                     <div class="col-xl-4 col-xxl-6 col-6">
                        <div class="form-check custom-checkbox mb-3 checkbox-danger">
                            <input type="checkbox" class="form-check-input" checked id="customCheckBox5" required>
                            <label class="form-check-label" for="customCheckBox5">Set Parent Credentials</label>
                        </div>
                    </div>


                   
                    <!--Text Area-->

                    <div class="mb-3 col-md-6">
                        <label class="form-label">User Name</label>
                        <input type="text" class="form-control" placeholder=" ">
                    </div>
                
                    <!--Text Area-->

                    <div class="mb-3 col-md-6">
                        <label class="form-label">Password</label>
                        <input type="text" class="form-control" placeholder=" ">
                    </div>

                     <!--Radio button-->
    
                     <div class="row">
                        <label class="col-form-label col-sm-3 pt-0">Environment</label>
                        <form>
                            <div class="mb-3 mb-0">
                                <label class="radio-inline me-3"><input type="radio" name="sector" value="domestic" id="domestic"> Production</label>
                                <label class="radio-inline me-3"><input type="radio" name="sector" value="international" id="international">Pre-Production</label>
                            </div>
                        </form>
                    </div>

                     <!--***Content Delete Button****-->
                     <div>
                     <button type="button" class="btn btn-rounded btn-info"style="float: right;" data-bs-toggle="modal" data-bs-target=".bd-example-modal-lg">DELETE</button>
                     </div>
                     
                    <!--***Content Save Button****-->
                    <div>       
                    <button type="button" class="btn btn-rounded btn-info"style="float: right;" data-bs-toggle="modal" data-bs-target=".bd-example-modal-lg">SAVE</button>
                    </div>
                  


                  </div>

            </div>
        </div>        
    </div>
 </div>

 