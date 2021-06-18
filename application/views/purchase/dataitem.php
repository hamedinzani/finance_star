    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Purchase Order</h1>
        </div>
        <p class="fs-6">For Last 356 Days</p>


        <!-- Content Row -->
        <!-- <div class="d-grid gap-2 d-md-flex justify-content-md-end">

            <?php echo anchor('purchase/additem', 'New Purchase Order', array('class' => 'btn btn-danger btn-sm')); ?>
        </div> -->
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">

            <a href="<?php echo base_url('purchase/additem'); ?>"><button type="submit button" class="btn btn-success"><i class="fas fa-plus-square" aria-hidden="true"></i>&ensp;New PO</button></a>
            <a>&emsp;&emsp;</a>
            <a href="<?php echo base_url('purchase/print'); ?>"><button type="button" class="btn btn-danger"><i class="fas fa-print" aria-hidden="true"></i>&ensp;&ensp;Print&ensp;&ensp;</button></a>
        </div>
        <!-- /.container-fluid -->
        <div class="col-lg-12">
            <div class="table-responsive">
                <table class="table table-borderd table-hover table-striped" id="datatables">
                    <thead>
                        <tr>
                            <th scope="col">No. PO</th>
                            <th scope="col">Client Name</th>
                            <th scope="col">Project name</th>
                            <th scope="col">Status</th>
                            <th scope="col">Fee</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($po as $po) {
                        ?>
                            <tr>
                                <th scope="row"><?php echo $po->no_Po; ?></th>
                                <td><?php echo $po->resource_Name; ?></td>
                                <td><?php echo $po->project_Name; ?></td>
                                <td><?php echo $po->resource_Status; ?></td>
                                <td><?php echo $po->grand_Total; ?></td>
                                <td>
                                    <a href="<?php echo base_url('purchase/edititembase/' . $po->no_Po); ?>"><button type="button" class="btn" style="color:blue"><i class="fa fa-edit" aria-hidden="true"></i></button></a>
                                    <a onclick="return confirm('Yakin ingin hapus?')" href="<?php echo base_url('purchase/delete_pi/' . $po->no_Po); ?>"><button type="button" class="btn" style="color:red"><i class="fa fa-minus-circle" aria-hidden="true"></i></button></a>
                                    <a href="<?php echo base_url('purchase/printi/' . $po->no_Po); ?>"><button type="button" class="btn" style="color:black"><i class="fas fa-print" aria-hidden="true"></i></button></a>
                                </td>
                            </tr>
                        <?php } ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
    <!-- End of Main Content -->