<?php $userdata = $this->session->userdata('user_logged'); ?>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Purchase Order</a></li>
        <li class="breadcrumb-item active" aria-current="page">ItemBase</li>
    </ol>
</nav>
<div class="container justify-content-start">
    <div class="row ">
        <div class="col">
            <label for="noquitation">No Purchase Order</label>
            <input type="" class="form-control form-control-user" id="noquitation" name="noquitation" aria-describedby="" placeholder="" value="<?= $kode_po ?>" readonly>
        </div>
        <div class="col">
            <label for="ps">Resource Name</label>
            <input type="" class="form-control form-control-user" id="pm" name="pm" aria-describedby="" placeholder="">
        </div>
        <div class="col">
            <label for="ps">Mobile Phone</label>
            <input type="" class="form-control form-control-user" id="pm" name="pm" aria-describedby="" placeholder="">
        </div>
        <div class="col">
            <label for="dd">Project Name Date</label>
            <!-- <input type="" class="form-control form-control-user" id="dd" name="dd" aria-describedby="" placeholder=""> -->
            <input name="tanggal" id="tanggal" class="form-control form-control-user datepicker" id="dd" name="dd" aria-describedby="" placeholder="" type="text">
        </div>

    </div>
</div>
<br>
<div class="container justify-content-start">
    <div class="row">
        <div class="col">
            <label for="cn">PM Name</label>
            <input type="" class="form-control form-control-user" id="cn" name="cn" aria-describedby="" placeholder="" value="<?php echo $userdata->full_Name; ?>">
        </div>
        <div class="col">
            <label for="Pm">Resource Email</label>
            <input type="" class="form-control form-control-user" id="ps" name="ps" aria-describedby="" placeholder="">
        </div>
        <div class="col">
            <label for="dd">Date </label>
            <input type="" class="form-control form-control-user" id="ce" name="ce" aria-describedby="" placeholder="">
        </div>
        <div class="col">
            <label for="dd">No. Quitation</label>
            <input type="" class="form-control form-control-user" id="ce" name="ce" aria-describedby="" placeholder="">
        </div>

    </div>
</div>
<br>
<div class="container justify-content-start">
    <div class="row">
        <div class="col">
            <label for="cn">PM Email</label>
            <input type="" class="form-control form-control-user" id="cn" name="cn" aria-describedby="" placeholder="" value="<?php echo $userdata->email_Address; ?>">
        </div>
        <div class="col">
            <label for="Pm">Resource Status</label>
            <input type="" class="form-control form-control-user" id="ps" name="ps" aria-describedby="" placeholder="">
        </div>
        <div class="col">
            <label for="dd">Rate</label>
            <input type="" class="form-control form-control-user" id="ce" name="ce" aria-describedby="" placeholder="">
        </div>
        <div class="col">
            <label for="dd"></label>
            <input type="" class="form-control form-control-user" id="ce" name="ce" aria-describedby="" placeholder="" style="display:none;">
        </div>


    </div>
</div>
<hr>
<div class="col-lg-10" style="margin-left:auto;margin-right:auto">
    <div>
        <table class="table table-bordered shadow-lg">
            <!-- <table id=" example" class="display" style="width:100%"> -->
            <thead>
                <tr>
                    <th>Task</th>
                    <th>Quantiti</th>
                    <th>Rate</th>
                    <th>Amount <select id="cost" name="cost">
                            <option value="IDR" selected="selected">
                                IDR
                            </option>
                            <option value="US">
                                US
                            </option>

                        </select></th>
                    </th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><input type="text" id="jobdesc" name="jobdesc" value=""></td>
                    <td><input type="text" id="volume" name="volume" value=""></td>
                    <td><input type="text" id="unit" name="unit" value=""></td>
                    <td><input type="text" id="price" name="price" value=""></td>

                    <td>
                        <a href="<?php echo base_url('purchase/addrow'); ?>">
                            <i class="fa fa-plus-circle" style="color:green"></i>
                            <a href="">
                                <i class="fa fa-minus-circle" style="color:red"></i>
                    </td>
                </tr>
                <tr>
                    <td><input type="text" id="jobdesc" name="jobdesc" value=""></td>
                    <td><input type="text" id="volume" name="volume" value=""></td>
                    <td><input type="text" id="unit" name="unit" value=""></td>
                    <td><input type="text" id="price" name="price" value=""></td>

                    <td>

                        <a href="<?php echo base_url('purchase/addrow'); ?>">
                            <i class="fa fa-plus-circle" style="color:green"></i>
                            <a href="">
                                <i class="fa fa-minus-circle" style="color:red"></i>


                    </td>

                </tr>


        </table>
    </div>

</div>
<hr>
<div class="row">
    <div class="col-lg-5" style="margin-left:auto;margin-right:auto">
        <div>
            <table class="table table-bordered shadow" style="margin-left:auto;margin-right:auto">
                <thead>
                    <tr>
                        <th>Public Notes</th>
                        <th>Regards</th>
                        <th>Footer</th>
                        <th>Address Resource</th>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>


            </table>
        </div>
    </div>
    <div class="col-lg-6">
        <hr>
        <div class="text-left font-weight-bold">
            Grand Total &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;0
            <hr>
        </div>
    </div>
</div>
<div class="container justify-content-center">
    <button type="button" class="btn btn-success btn-lg">Save</button>
    <button type="button" class="btn btn-danger btn-lg">Send Email</button>
</div>
</div>