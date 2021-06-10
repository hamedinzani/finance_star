<div class="container justify-content-start">
    <div class="row ">
        <div class="col">
            <label for="noquitation">No Quitation</label>
            <input type="" class="form-control form-control-user" id="noquitation" name="noquitation" aria-describedby="" placeholder="">
        </div>
        <div class="col">
            <label for="ps">Project name</label>
            <input type="" class="form-control form-control-user" id="pm" name="pm" aria-describedby="" placeholder="">
        </div>
        <div class="col">
            <label for="Duedate">Due Date</label>
            <div class="input-group mb-2">
                <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fas fa-calendar-alt"></i></i></div>
                </div>
                <input type="text" class="form-control form-control-user datepicker" id="dd" name="duedate">
            </div>
        </div>

    </div>
</div>
<div class="container justify-content-start">
    <div class="row">
        <div class="col">
            <label for="cn">Client Name</label>
            <input type="" class="form-control form-control-user" id="cn" name="cn" aria-describedby="" placeholder="">
        </div>
        <div class="col">
            <label for="projectstart">Project Start</label>
            <div class="input-group mb-2">
                <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fas fa-calendar-alt"></i></i></div>
                </div>
                <input type="text" class="form-control form-control-user datepicker" id="ps" name="projectstart">
            </div>
        </div>
        <div class="col">
            <label for="dd">Client's Email</label>
            <input type="" class="form-control form-control-user" id="ce" name="ce" aria-describedby="" placeholder="">
        </div>

    </div>
</div>
<hr>
<div class="col-lg-12">
    <div>
        <table class="table table-bordered shadow-lg">
            <!-- <table id=" example" class="display" style="width:100%"> -->
            <thead>
                <tr>
                    <th>Job Description</th>
                    <th><select name="statusSelect" id="statusSelect" class="form-control font-weight-bold">
                            <option selected="selected">Volume IDR</option>
                            <option>Volume US</option>

                        </select>
                    <th>Unit</th>
                    <th>Price/Unit</th>
                    <th><select name="statusSelect" id="statusSelect" class="form-control font-weight-bold">
                            <option selected="selected">Cost IDR</option>
                            <option>Cost US</option>

                        </select>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><input type="text" id="jobdesc" name="jobdesc" value="" class="form-control"></td>
                    <td><input type="text" id="volume" name="volume" value="" class="form-control"></td>
                    <td><input type="text" id="unit" name="unit" value="" class="form-control"></td>
                    <td><input type="text" id="price" name="price" value="" class="form-control"></td>
                    <td><input type="text" id="cost" name="cost" value="" class="form-control"></td>
                    <td>
                        <a href="<?php echo base_url('quitation/addrow'); ?>">
                            <i class="fa fa-plus-circle" style="color:green"></i>
                            <a href="">
                                <i class="fa fa-minus-circle" style="color:red"></i>
                    </td>
                </tr>
                <tr>
                    <td><input type="text" id="jobdesc" name="jobdesc" value="" class="form-control"></td>
                    <td><input type="text" id="volume" name="volume" value="" class="form-control"></td>
                    <td><input type="text" id="unit" name="unit" value="" class="form-control"></td>
                    <td><input type="text" id="price" name="price" value="" class="form-control"></td>
                    <td><input type="text" id="cost" name="cost" value="" class="form-control"></td>
                    <td>

                        <a href="<?php echo base_url('quitation/addrow'); ?>">
                            <i class="fa fa-plus-circle" style="color:green"></i>
                            <a href="">
                                <i class="fa fa-minus-circle" style="color:red"></i>


                    </td>

                </tr>


        </table>
    </div>
    <hr>
    <div class="row">
        <div class="col-lg-5" style="margin-left:auto;margin-right:auto">
            <div>
                <table class="table table-bordered shadow">
                    <thead>
                        <tr>
                            <th>Public Notes</th>
                            <th>Header</th>
                            <th>Footer</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>


                </table>
            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-center">

                <a href="<?php echo base_url('quitation/save'); ?>"><button type="button" class="btn btn-success"><i class="fa fa-print" aria-hidden="true"></i>&emsp;&ensp; Save &emsp;&ensp;</button></a>
                <a>&emsp;&emsp;</a>
                <a href="<?php echo base_url('quitation/sendemail'); ?>"><button type="button" class="btn btn-danger"><i class=" fa fa-paper-plane" aria-hidden="true"></i>&ensp; Send Email </button></a>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="text-left">
                Total Cost &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;0
            </div>
            <hr>
            <div class="text-left font-weight-bold">
                Grand Total &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;0
                <hr>
            </div>
        </div>
    </div>
</div>
</div>