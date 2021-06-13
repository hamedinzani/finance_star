<?php foreach ($quotation as $q) { ?>
<form method="POST" action="<?php echo base_url('quitation/edit_quitation');?>">
<div class="container justify-content-start">
    <div class="row ">
        <div class="col">
            <label for="noquitation">No Quitation</label>
            <input type="" class="form-control form-control-user" id="noquitation" name="noquitation" aria-describedby="" placeholder="" value="<?= $q->no_Quotation ?>" readonly>
        </div>
        <div class="col">
            <label for="ps">Project name</label>
            <input type="" class="form-control form-control-user" id="pm" name="pm" aria-describedby="" placeholder="" value="<?= $q->project_Name ?>">
        </div>
        <div class="col">
            <label for="dd">Due Date</label>
            <input type="date"  class="form-control form-control-user" name="dd" value="<?= $q->due_Date ?>">
        </div>

    </div>
</div>
<div class="container justify-content-start">
    <div class="row">
        <div class="col">
            <label for="cn">Client Name</label>
            <input type="" class="form-control form-control-user" id="cn" name="cn" aria-describedby="" placeholder="" value="<?= $q->client_Name ?>">
        </div>
        <div class="col">
            <label for="Pm">Project Start</label>
            <input type="date"  class="form-control form-control-user" name="ps" value="<?= $q->project_Start ?>">
        </div>
        <div class="col">
            <label for="dd">Client's Email</label>
            <input type="" class="form-control form-control-user" id="ce" name="ce" aria-describedby="" placeholder="" value="<?= $q->client_Email ?>">
        </div>

    </div>
</div>
<hr>
<div class="col-lg-12">
    <div>
        <table class="table table-bordered shadow-lg" id="dynamicAddRemove">
            <thead>
                <tr>
                    <th>Job Description</th>
                    <th>Volume<select id="cost" name="cost">
                            <option value="IDR" selected="selected">
                                IDR
                            </option>
                            <option value="US">
                                US
                            </option>

                        </select></th>
                    <th>Unit</th>
                    <th>Price/Unit</th>
                    <th>Cost In<select id="cost" name="cost">
                            <option value="IDR" selected="selected">
                                IDR
                            </option>
                            <option value="US">
                                US
                            </option>

                        </select></th>
                    <th></th>
                </tr>
            </thead>
            <tbody id="dinamisRow">
            
                     
                  </tr>
            </div>
      </table>
    </div>
    <hr>
    <div class="row">
        <div class="col-lg-6">
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
                        <td><textarea name="public_notes"><?= $q->public_Notes ?></textarea></td>
                     <td><textarea name="header"><?= $q->header ?></textarea></td>
                     <td><textarea name="footer"><?= $q->footer ?></textarea></td>
                        </tr>


                </table>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="text-left">
                Total Cost &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input type="text" id="total" name="total" value="<?= $q->total_Cost ?>" readonly>
            </div>
            <hr>
            <div class="text-left font-weight-bold">
                Grand Total &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input type="text" id="grand" name="grand" value="<?= $q->grand_Total ?>" readonly>
                <hr>
            </div>
        </div>
    </div>
    <div class="container justify-content-center">
    <input type="submit" class="btn btn-success btn-lg" value="Save"></input>
        <button type="button" class="btn btn-danger btn-lg">Send Email</button>
    </div>
</div>
</form>
<?php } ?>
<script>
dinamisRow = $('#dinamisRow')
            <?php foreach ($qi as $qi) {
                echo "addRow('".base64_encode(json_encode($qi))."');".PHP_EOL; }?>
            </script>