<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">Invoice</li>
    </ol>
</nav>
<div class="container justify-content-start">
    <div class="row ">
        <div class="col">
            <label for="noquitation">No. Purchase Order</label>
            <input type="" class="form-control form-control-user" id="noquitation" name="noquitation" aria-describedby="" placeholder="">
        </div>
        <div class="col">
            <label for="ps">Cabang Bank</label>
            <input type="" class="form-control form-control-user" id="pm" name="pm" aria-describedby="" placeholder="">
        </div>
        <div class="col">
            <label for="Duedate">Down Payment </label>
            <div class="input-group mb-2">
                <div class="input-group-prepend">
                </div>
                <input type="text" class="form-control form-control-user" id="dd" name="duedate">
            </div>
        </div>
        <div class="col">
            <label for="Duedate">Email</label>
            <div class="input-group mb-2">
                <div class="input-group-prepend">
                </div>
                <input type="text" class="form-control form-control-user" id="dd" name="duedate">
            </div>
        </div>
    </div>
</div>
<br>
<div class="container justify-content-start">
    <div class="row">
        <div class="col">
            <label for="cn">No. Invoice</label>
            <input type="" class="form-control form-control-user" id="cn" name="cn" aria-describedby="" placeholder="">
        </div>
        <div class="col">
            <label for="Pm">Mitra Name</label>
            <input type="" class="form-control form-control-user" id="ps" name="ps" aria-describedby="" placeholder="">
        </div>
        <div class="col">
            <label for="Duedate">Invoice Date </label>
            <div class="input-group mb-2">
                <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fas fa-calendar-alt"></i></i></div>
                </div>
                <input type="text" class="form-control form-control-user datepicker" id="id" name="invoicedate">
            </div>
        </div>
        <div class="col">
            <label for="dd">No. NPWP</label>
            <input type="" class="form-control form-control-user" id="ce" name="ce" aria-describedby="" placeholder="">
        </div>


    </div>
</div>
<br>
<div class="container justify-content-start">
    <div class="row">
        <div class="col">
            <label for="cn">No, Rekening </label>
            <input type="" class="form-control form-control-user" id="cn" name="cn" aria-describedby="" placeholder="">
        </div>
        <div class="col">
            <label for="Pm">Address Payment</label>
            <input type="" class="form-control form-control-user" id="ps" name="ps" aria-describedby="" placeholder="">
        </div>
        <div class="col">
            <label for="Duedate">Due Date </label>
            <div class="input-group mb-2">
                <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fas fa-calendar-alt"></i></i></div>
                </div>
                <input type="text" class="form-control form-control-user datepicker" id="dd" name="duedate">
            </div>
        </div>
        <div class="col">
            <label for="Duedate"> </label>
            <div class="input-group mb-2">
                <div class="input-group-prepend">

                </div>
                <input type="text" class="form-control form-control-user" id="dd" name="duedate" style="display:none;">
            </div>
        </div>


    </div>
</div>
<br>

<hr>
<div class="col-lg-10 " style="margin-left:auto;margin-right:auto">
    <div>
        <table class="table table-bordered shadow-lg">
            <!-- <table id=" example" class="display" style="width:100%"> -->
            <thead>
                <tr>
                    <th>Job Description</th>
                    <th>Quantity Words</th>
                    <th>Rate</th>
                    <th>Amount IDR</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><input type="text" id="jobdesc" name="jobdesc" value="" class="form-control"></td>
                    <td><input type="text" id="qtt" name="qtt" value="" class="form-control"></td>
                    <td><input type="text" id="rate" name="rate" value="" class="form-control"></td>
                    <td><input type="text" id="amount" name="amount" value="" class="form-control"></td>

                    <td>
                        <a href="<?php echo base_url('freelance/addrow'); ?>">
                            <i class="fa fa-plus-circle" style="color:green"></i>
                            <a href="">
                                <i class="fa fa-minus-circle" style="color:red"></i>
                    </td>
                </tr>
                <tr>
                    <td><input type="text" id="jobdesc" name="jobdesc" value="" class="form-control"></td>
                    <td><input type="text" id="qtt" name="qtt" value="" class="form-control"></td>
                    <td><input type="text" id="rate" name="rate" value="" class="form-control"></td>
                    <td><input type="text" id="amount" name="amount" value="" class="form-control"></td>

                    <td>

                        <a href="<?php echo base_url('freelance/addrow'); ?>">
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
        <div class="d-grid gap-2 d-md-flex justify-content-md-center">

            <a href="<?php echo base_url('freelance/save'); ?>"><button type="button" class="btn btn-success"><i class="fa fa-print" aria-hidden="true"></i>&emsp;&ensp; Save &emsp;&ensp;</button></a>
            <a>&emsp;&emsp;</a>
            <a href="<?php echo base_url('freelance/sendemail'); ?>"><button type="button" class="btn btn-danger"><i class=" fa fa-paper-plane" aria-hidden="true"></i>&ensp; Send Email </button></a>
        </div>
    </div>
    <div class="col-lg-6">
        <hr>
        <div class="">
            Total Cost &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;0
            <hr>
        </div>
        <div class="">
            PPh 23 (-2%) &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;0
            <hr>
        </div>
        <div class="text-left font-weight-bold">
            Grand Total&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;0
            <hr>
        </div>
    </div>
</div>

</div>