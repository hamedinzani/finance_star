<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="#">Invoice Out</a></li>
    <li class="breadcrumb-item active" aria-current="page">Edit Invoice Out</li>
</ol>
</nav>
<div class="container justify-content-start">
    <div class="row ">
        <div class="col">
            <label for="noquitation">No. Invoice</label>
            <input type="" class="form-control form-control-user" id="noquitation" name="noquitation" aria-describedby="" placeholder="">
        </div>
        <div class="col">
            <label for="ps">Swift Code</label>
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
<br>
<div class="container justify-content-start">
    <div class="row">
        <div class="col">
            <label for="cn">No. PO</label>
            <input type="" class="form-control form-control-user" id="cn" name="cn" aria-describedby="" placeholder="">
        </div>
        <div class="col">
            <label for="Pm">Address</label>
            <input type="" class="form-control form-control-user" id="ps" name="ps" aria-describedby="" placeholder="">
        </div>
        <div class="col">
            <label for="dd">Email</label>
            <input type="" class="form-control form-control-user" id="ce" name="ce" aria-describedby="" placeholder="">
        </div>


    </div>
</div>
<br>
<div class="container justify-content-start">
    <div class="row">
        <div class="col">
            <label for="cn">Client Name</label>
            <input type="" class="form-control form-control-user" id="cn" name="cn" aria-describedby="" placeholder="">
        </div>
        <div class="col">
            <label for="Pm">Down Payment</label>
            <input type="" class="form-control form-control-user" id="ps" name="ps" aria-describedby="" placeholder="">
        </div>
        <div class="col">
            <label for="dd">Tax</label>
            <input type="" class="form-control form-control-user" id="ce" name="ce" aria-describedby="" placeholder="">
        </div>



    </div>
</div>
<br>
<div class="container justify-content-start">
    <div class="row">
        <div class="col">
            <label for="cn">Account</label>
            <input type="" class="form-control form-control-user" id="cn" name="cn" aria-describedby="" placeholder="">
        </div>
        <div class="col">
            <label for="Duedate">Invoice Date</label>
            <div class="input-group mb-2">
                <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fas fa-calendar-alt"></i></i></div>
                </div>
                <input type="text" class="form-control form-control-user datepicker" id="ivd" name="invoicedate">
            </div>
        </div>
        <div class="col">
            <label for="dd">No. Rekening</label>
            <input type="" class="form-control form-control-user" id="ce" name="ce" aria-describedby="" placeholder="">
        </div>



    </div>
</div>
<hr>
<div class="col-lg-10 " style="margin-left:auto;margin-right:auto">
    <div>
        <table class="table table-bordered shadow-lg">
            <!-- <table id=" example" class="display" style="width:100%"> -->
            <thead>
                <tr>
                    <th>Job Description</th>
                    <th>Qtt Words</th>
                    <th>Unit Price</th>
                    <th>
                        <select name="statusSelect" id="statusSelect" class="form-control font-weight-bold">
                            <option selected="selected">Amount IDR</option>
                            <option>Amount US</option>

                        </select>
                    </th>


                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><input type="text" id="jobdesc" name="jobdesc" value="" class="form-control"></td>
                    <td><input type="text" id="volume" name="volume" value="" class="form-control"></td>
                    <td><input type="text" id="unit" name="unit" value="" class="form-control"></td>
                    <td><input type="text" id="price" name="price" value="" class="form-control"></td>

                    <td>
                        <a href="<?php echo base_url('finance/editaddrow'); ?>">
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
        <div align="center">
            <button type="button" class="btn btn-success btn-lg">Save</button>
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