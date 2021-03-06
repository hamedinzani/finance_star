<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <m3rdiv class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Earnings (Monthly)</m3rdiv>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">$40,000</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Earnings (Annual)</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">$215,000</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tasks
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                                </div>
                                <div class="col">
                                    <div class="progress progress-sm mr-2">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>




    </div>
    <!-- /.container-fluid -->

    <div class="table-responsive">
        <table class="table table-borderd table-hover table-striped" id="datatables">
            <thead>
                <tr>
                    <th scope="col">NO</th>
                    <th scope="col">IDUSER</th>
                    <th scope="col">USERNAME</th>
                    <th scope="col">PASSWORD</th>
                    <th scope="col">STATUS</th>
                    <th scope="col">ACTION</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td>
                        <a href=""><?php echo anchor('user/edit', 'Edit', array('class' => 'btn btn-success btn-xs')); ?></a>
                        <a onclick="return confirm('Yakin ingin hapus?')" href="" class="hapus btn btn-danger btn-xs">Hapus</a>

                    </td>

                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                    <td>@fat</td>
                    <td>
                        <a href=""><input type="submit" class="btn btn-success btn-xs" name="edit" value="Edit"></a>
                        <a onclick="return confirm('Yakin ingin hapus?')" href="" class="hapus btn btn-danger btn-xs">Hapus</a>

                    </td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                    <td>@twitter</td>
                    <td>
                        <a href=""><input type="submit" class="btn btn-success btn-xs" name="edit" value="Edit"></a>
                        <a onclick="return confirm('Yakin ingin hapus?')" href="" class="hapus btn btn-danger btn-xs">Hapus</a>

                    </td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                    <td>@twitter</td>
                    <td>
                        <a href=""><input type="submit" class="btn btn-success btn-xs" name="edit" value="Edit"></a>
                        <a onclick="return confirm('Yakin ingin hapus?')" href="" class="hapus btn btn-danger btn-xs">Hapus</a>

                    </td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                    <td>@twitter</td>
                    <td>
                        <a href=""><input type="submit" class="btn btn-success btn-xs" name="edit" value="Edit"></a>
                        <a onclick="return confirm('Yakin ingin hapus?')" href="" class="hapus btn btn-danger btn-xs">Hapus</a>

                    </td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                    <td>@twitter</td>
                    <td>
                        <a href=""><input type="submit" class="btn btn-success btn-xs" name="edit" value="Edit"></a>
                        <a onclick="return confirm('Yakin ingin hapus?')" href="" class="hapus btn btn-danger btn-xs">Hapus</a>

                    </td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                    <td>@twitter</td>
                    <td>
                        <a href=""><input type="submit" class="btn btn-success btn-xs" name="edit" value="Edit"></a>
                        <a onclick="return confirm('Yakin ingin hapus?')" href="" class="hapus btn btn-danger btn-xs">Hapus</a>

                    </td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                    <td>@twitter</td>
                    <td>
                        <a href=""><input type="submit" class="btn btn-success btn-xs" name="edit" value="Edit"></a>
                        <a onclick="return confirm('Yakin ingin hapus?')" href="" class="hapus btn btn-danger btn-xs">Hapus</a>

                    </td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                    <td>@twitter</td>
                    <td>
                        <a href=""><input type="submit" class="btn btn-success btn-xs" name="edit" value="Edit"></a>
                        <a onclick="return confirm('Yakin ingin hapus?')" href="" class="hapus btn btn-danger btn-xs">Hapus</a>

                    </td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                    <td>@twitter</td>
                    <td>
                        <a href=""><input type="submit" class="btn btn-success btn-xs" name="edit" value="Edit"></a>
                        <a onclick="return confirm('Yakin ingin hapus?')" href="" class="hapus btn btn-danger btn-xs">Hapus</a>

                    </td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                    <td>@twitter</td>
                    <td>
                        <a href=""><input type="submit" class="btn btn-success btn-xs" name="edit" value="Edit"></a>
                        <a onclick="return confirm('Yakin ingin hapus?')" href="" class="hapus btn btn-danger btn-xs">Hapus</a>

                    </td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                    <td>@twitter</td>
                    <td>
                        <a href=""><input type="submit" class="btn btn-success btn-xs" name="edit" value="Edit"></a>
                        <a onclick="return confirm('Yakin ingin hapus?')" href="" class="hapus btn btn-danger btn-xs">Hapus</a>

                    </td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                    <td>@twitter</td>
                    <td>
                        <a href=""><input type="submit" class="btn btn-success btn-xs" name="edit" value="Edit"></a>
                        <a onclick="return confirm('Yakin ingin hapus?')" href="" class="hapus btn btn-danger btn-xs">Hapus</a>

                    </td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                    <td>@twitter</td>
                    <td>
                        <a href=""><input type="submit" class="btn btn-success btn-xs" name="edit" value="Edit"></a>
                        <a onclick="return confirm('Yakin ingin hapus?')" href="" class="hapus btn btn-danger btn-xs">Hapus</a>

                    </td>
                </tr>
            </tbody>
        </table>
    </div>

</div>
</div>
<!-- End of Main Content -->