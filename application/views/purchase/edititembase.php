<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Purchase Order</a></li>
        <li class="breadcrumb-item active" aria-current="page">ItemBase</li>
    </ol>
</nav>
<?php foreach ($po as $po) { ?>
<form method="POST" action="<?php echo base_url('purchase/edit_po_item');?>">
<div class="container justify-content-start">
    <div class="row ">
        <div class="col">
            <label for="noquitation">No Purchase Order</label>
            <input type="" class="form-control form-control-user" id="noquitation" name="noquitation" aria-describedby="" placeholder="" value="<?= $po->no_Po?>" readonly>
        </div>
        <div class="col">
            <label for="ps">Resource Name</label>
            <input type="" class="form-control form-control-user" id="pm" name="pm" aria-describedby="" placeholder="" value="<?= $po->resource_Name?>">
        </div>
        <div class="col">
            <label for="ps">Mobile Phone</label>
            <input type="" class="form-control form-control-user" id="pm" name="pm" aria-describedby="" placeholder="" value="<?= $po->mobile_Phone?>">
        </div>
        <div class="col">
            <label for="dd">Project Name</label>
            <input name="tanggal" id="tanggal" class="form-control form-control-user datepicker" id="dd" name="dd" aria-describedby="" placeholder="" type="text" value="<?= $po->project_Name?>">
        </div>

    </div>
</div>
<br>
<div class="container justify-content-start">
    <div class="row">
        <div class="col">
            <label for="cn">PM Name</label>
            <input type="" class="form-control form-control-user" id="cn" name="cn" aria-describedby="" placeholder="" value="<?= $po->nama_Pm?>">
        </div>
        <div class="col">
            <label for="Pm">Resource Email</label>
            <input type="" class="form-control form-control-user" id="ps" name="ps" aria-describedby="" placeholder="" value="<?= $po->resource_Email?>">
        </div>
        <div class="col">
            <label for="dd">Date </label>
            <input type="date"  class="form-control form-control-user" name="tgl" value="<?= $po->date?>">
        </div>
        <div class="col">
            <label for="dd">No. Quitation</label>
            <input type="" class="form-control form-control-user" id="ce" name="ce" aria-describedby="" placeholder="" value="<?= $po->resource_Email?>">
        </div>

    </div>
</div>
<br>
<div class="container justify-content-start">
    <div class="row">
        <div class="col">
            <label for="cn">PM Email</label>
            <input type="" class="form-control form-control-user" id="cn" name="cn" aria-describedby="" placeholder="" value="<?= $po->email_pm?>">
        </div>
        <div class="col">
            <label for="Pm">Resource Status</label>
            <input type="" class="form-control form-control-user" id="ps" name="ps" aria-describedby="" placeholder="" value="<?= $po->resource_Status?>">
        </div>
        <div class="col">
        </div>
        <div class="col">
        </div>


    </div>
</div>
<hr>
<div class="col-lg-12" style="margin-left:auto;margin-right:auto">
    <div>
    <table class="table table-bordered shadow-lg" id="dynamicAddRemove">
            <thead>
            <tr>
               <th>Job Description</th>
               <th>
                  Volume
                  <select id="cost" name="cost">
                     <option value="IDR" selected="selected">
                        IDR
                     </option>
                     <option value="US">
                        US
                     </option>
                  </select>
               </th>
               <th>Unit</th>
               <th>Price/Unit</th>
               <th>
                  Cost In
                  <select id="cost" name="cost">
                     <option value="IDR" selected="selected">
                        IDR
                     </option>
                     <option value="US">
                        US
                     </option>
                  </select>
               </th>
            </tr>
         </thead>
         <tbody id="dinamisRow">
        </table>
    </div>

</div>
<hr>
<div class="col-lg-12" style="margin-left:auto;margin-right:auto">
<div class="row">
    <div class="col-lg-8" style="margin-left:auto;margin-right:auto">
        <div>
            <table class="table table-bordered shadow" style="">
                <thead>
                    <tr>
                        <th>Public Notes</th>
                        <th>Regards</th>
                        <th>Footer</th>
                        <th>Address Resource</th>
                </thead>
                <tbody>
                    <tr>
                    <td><textarea name="public_notes"><?= $po->public_Notes?></textarea></td>
                     <td><textarea name="regards"><?= $po->regards?></textarea></td>
                     <td><textarea name="footer"><?= $po->footer?></textarea></td>
                     <td><textarea name="address_resource"><?= $po->address_Resource?></textarea></td>
                    </tr>


            </table>
        </div>
    </div>
    <div class="col-lg-4">
        <hr>
        <div class="text-left font-weight-bold">
            Grand Total <input type="text" id="grand" name="grand" value="<?= $po->grand_Total?>" readonly>
            <hr>
        </div>
    </div>
</div>
</div>
<div class="container justify-content-center">
    <button type="button" class="btn btn-success btn-lg">Save</button>
    <button type="button" class="btn btn-danger btn-lg">Send Email</button>
</div>
</div>
<?php } ?>
<script>
dinamisRow = $('#dinamisRow')
            <?php foreach ($pi as $pi) {
                echo "addRow('".base64_encode(json_encode($pi))."');".PHP_EOL; }?>
            </script>