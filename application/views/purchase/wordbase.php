<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Purchase Order</a></li>
        <li class="breadcrumb-item active" aria-current="page">WordBase</li>
    </ol>
</nav>
<div class="container justify-content-start">
    <div class="row ">
        <div class="col">
            <label for="noquitation">No Purchase Order</label>
            <input type="" class="form-control form-control-user" id="noquitation" name="noquitation" aria-describedby="" placeholder="">
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
            <label for="dd">Project Name</label>
            <!-- <input type="" class="form-control form-control-user" id="dd" name="dd" aria-describedby="" placeholder=""> -->
            <input name="tanggal" id="tanggal" class="form-control form-control-user datepicker" id="dd" name="dd" aria-describedby="" placeholder="" type="text">
            <input class="form-control form-control-user" id="tipe" name="tipe" aria-describedby="" placeholder="" type="hidden" value="word">
        </div>

    </div>
</div>
<br>
<div class="container justify-content-start">
    <div class="row">
        <div class="col">
            <label for="cn">PM Name</label>
            <input type="" class="form-control form-control-user" id="cn" name="cn" aria-describedby="" placeholder="">
        </div>
        <div class="col">
            <label for="Pm">Resource Email</label>
            <input type="" class="form-control form-control-user" id="ps" name="ps" aria-describedby="" placeholder="">
        </div>
        <div class="col">
            <label for="Duedate">Date</label>
            <div class="input-group mb-2">
                <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fas fa-calendar-alt"></i></i></div>
                </div>
                <input type="text" class="form-control form-control-user datepicker" id="date" name="date">
            </div>
        </div>
        <div class="col">
            <label for="dd">Type PO</label>
            <select class="custom-select lg mb-3 col-lg" aria-label=".form-select-lg example" id="tipe_Po" name="tipe_Po">
            <option value="1">Trados</option>
            <option value="2">Transit, XTM, etc.</option>
            <option value="3">Patent</option>
            <option value="4">Google MT</option>
                                    </select>

        </div>

    </div>
</div>
<br>
<div class="container justify-content-start">
    <div class="row">
        <div class="col">
            <label for="cn">PM Email</label>
            <input type="" class="form-control form-control-user" id="cn" name="cn" aria-describedby="" placeholder="">
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
            <label for="dd">No. Quitation</label>
            <select class="custom-select lg mb-3 col-lg" aria-label=".form-select-lg example" id="status" name="status">
            <option value="">-</option>
                                        <?php foreach ($q as $q) : ?>
                                            <option value="<?php echo $q->no_Quotation; ?>"> <?php echo $q->no_Quotation; ?></option>
                                        <?php endforeach; ?>
                                    </select>
        </div>

    </div>
</div>
<hr>
<div class="col-lg-8" style="margin-left:auto;margin-right:auto">
    <div>
        <table class="table table-bordered shadow-lg">
            <!-- <table id=" example" class="display" style="width:100%"> -->
            <thead>
                <tr>
                    <th>Match Word</th>
                    <th>Word Count</th>
                    <th>Weight</th>
                    <th>
                        <data-title="wwc">
                            <select name="statusSelect" id="statusSelect" class="form-control font-weight-bold">
                                <option selected="selected">Weight Word Count IDR</option>
                                <option>Weight Word Count US</option>

                            </select>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><input type="text" style="width:180px;" id="mw" name="mw" value="" class="form-control"></td>
                    <td><input type="text" style="width:120px;" id="wc" name="wc" value="" class="form-control"></td>
                    <td><input type="text" style="width:150px;" id="w" name="w" value="" class="form-control"></td>
                    <td><input type="text" style="width:230px;" id="wwc" name="wwc" value="" class="form-control"></td>

                </tr>
                <tr>
                    <td><input type="text" style="width:180px;" id="mw" name="mw" value="" class="form-control"></td>
                    <td><input type="text" style="width:120px;" id="wc" name="wc" value="" class="form-control"></td>
                    <td><input type="text" style="width:150px;" id="w" name="w" value="" class="form-control"></td>
                    <td><input type="text" style="width:230px;" id="wwc" name="wwc" value="" class="form-control"></td>

                </tr>
                <tr>
                    <td><input type="text" style="width:180px;" id="mw" name="mw" value="" class="form-control"></td>
                    <td><input type="text" style="width:120px;" id="wc" name="wc" value="" class="form-control"></td>
                    <td><input type="text" style="width:150px;" id="w" name="w" value="" class="form-control"></td>
                    <td><input type="text" style="width:230px;" id="wwc" name="wwc" value="" class="form-control"></td>

                </tr>
                <tr>
                    <td><input type="text" style="width:180px;" id="mw" name="mw" value="" class="form-control"></td>
                    <td><input type="text" style="width:120px;" id="wc" name="wc" value="" class="form-control"></td>
                    <td><input type="text" style="width:150px;" id="w" name="w" value="" class="form-control"></td>
                    <td><input type="text" style="width:230px;" id="wwc" name="wwc" value="" class="form-control"></td>

                </tr>
                <tr>
                    <td><input type="text" style="width:180px;" id="mw" name="mw" value="" class="form-control"></td>
                    <td><input type="text" style="width:120px;" id="wc" name="wc" value="" class="form-control"></td>
                    <td><input type="text" style="width:150px;" id="w" name="w" value="" class="form-control"></td>
                    <td><input type="text" style="width:230px;" id="wwc" name="wwc" value="" class="form-control"></td>

                </tr>
                <tr>
                    <td><input type="text" style="width:180px;" id="mw" name="mw" value="" class="form-control"></td>
                    <td><input type="text" style="width:120px;" id="wc" name="wc" value="" class="form-control"></td>
                    <td><input type="text" style="width:150px;" id="w" name="w" value="" class="form-control"></td>
                    <td><input type="text" style="width:230px;" id="wwc" name="wwc" value="" class="form-control"></td>

                </tr>
                <tr>
                    <td><input type="text" style="width:180px;" id="mw" name="mw" value="" class="form-control"></td>
                    <td><input type="text" style="width:120px;" id="wc" name="wc" value="" class="form-control"></td>
                    <td><input type="text" style="width:150px;" id="w" name="w" value="" class="form-control"></td>
                    <td><input type="text" style="width:230px;" id="wwc" name="wwc" value="" class="form-control"></td>

                </tr>
                <tr>
                    <td><input type="text" style="width:180px;" id="mw" name="mw" value="" class="form-control"></td>
                    <td><input type="text" style="width:120px;" id="wc" name="wc" value="" class="form-control"></td>
                    <td><input type="text" style="width:150px;" id="w" name="w" value="" class="form-control"></td>
                    <td><input type="text" style="width:230px;" id="wwc" name="wwc" value="" class="form-control"></td>

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

            <a href="<?php echo base_url('wordbase/save'); ?>"><button type="button" class="btn btn-success"><i class="fa fa-print" aria-hidden="true"></i>&emsp;&ensp; Save &emsp;&ensp;</button></a>
            <a>&emsp;&emsp;</a>
            <a href="<?php echo base_url('wordbase/sendemail'); ?>"><button type="button" class="btn btn-danger"><i class=" fa fa-paper-plane" aria-hidden="true"></i>&ensp; Send Email </button></a>
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
</div>