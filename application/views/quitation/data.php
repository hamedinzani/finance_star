<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Quitation</h1>
    </div>
    <p class="fs-6">For Last 356 Days</p>


    <!-- Content Row -->
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">

        <?php echo anchor('quitation/add', 'New Quitation', array('class' => 'btn btn-danger btn-sm')); ?>
    </div>
    <!-- /.container-fluid -->
    <div class="col-lg-12">
        <div class="table-responsive">
            <table class="table table-borderd table-hover table-striped" id="datatables">
                <thead>
                    <tr>
                        <th scope="col">No. Quitation</th>
                        <th scope="col">Client Name</th>
                        <th scope="col">Project name</th>
                        <th scope="col">Price/Unit</th>
                        <th scope="col">Cost In IDR</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php 
		foreach($quotation as $q){ 
		?>
                    <tr>
                        <th scope="row"><?php echo $q->no_Quotation; ?></th>
                        <td><?php echo $q->client_Name; ?></td>
                        <td><?php echo $q->project_Name; ?></td>
                        <td><?php echo $q->cost; ?></td>
                        <td><?php echo $q->grand_Total; ?></td>
                        <td>
                            <a href=""><?php echo anchor('quitation/edit', 'Edit', array('class' => 'btn btn-success btn-xs')); ?></a>
                            <a onclick="return confirm('Yakin ingin hapus?')" href="" class="hapus btn btn-danger btn-xs">Hapus</a>

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