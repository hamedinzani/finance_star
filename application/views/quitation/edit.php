<form method="POST" action="<?php echo base_url('quitation/edit_quitation');?>">
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
            <label for="dd">Due Date</label>
            <!-- <input type="" class="form-control form-control-user" id="dd" name="dd" aria-describedby="" placeholder=""> -->
            <input name="tanggal" id="tanggal" class="form-control form-control-user datepicker" id="dd" name="dd" aria-describedby="" placeholder="" type="text">
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
            <label for="Pm">Project Start</label>
            <input type="" class="form-control form-control-user" id="ps" name="ps" aria-describedby="" placeholder="">
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
            <tbody>
                <tr>
                    <td><input type="text" id="jobdesc" name="jobdesc" value=""></td>
                    <td><input type="text" id="volume" name="volume" value=""></td>
                    <td><input type="text" id="unit" name="unit" value=""></td>
                    <td><input type="text" id="price" name="price" value=""></td>
                    <td><input type="text" id="cost" name="cost" value=""></td>
                    <td>
                        <!-- <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="green" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
                        </svg> -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="red" class="bi bi-dash-circle" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                            <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z" />
                        </svg>
                    </td>
                </tr>
                <tr>
                    <td><input type="text" id="jobdesc" name="jobdesc" value=""></td>
                    <td><input type="text" id="volume" name="volume" value=""></td>
                    <td><input type="text" id="unit" name="unit" value=""></td>
                    <td><input type="text" id="price" name="price" value=""></td>
                    <td><input type="text" id="cost" name="cost" value=""></td>
                    <td>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="green" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
                        </svg>
                        <!-- <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="red" class="bi bi-dash-circle" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                            <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z" />
                        </svg> -->
                    </td>

                </tr>


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
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>


                </table>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="text-left">
                Total Cost &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;0
            </div>
            <hr>
            <div class="text-left font-weight-bold">
                Grand Total &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;0
                <hr>
            </div>
        </div>
    </div>
    <div class="container justify-content-center">
        <button type="button" class="btn btn-success btn-lg">Save</button>
        <button type="button" class="btn btn-danger btn-lg">Send Email</button>
    </div>
</div>
</div>