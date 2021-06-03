            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

            </div>
            <!-- End of Content Wrapper -->

            </div>
            <!-- End of Page Wrapper -->

            <!-- Scroll to Top Button-->
            <a class="scroll-to-top rounded" href="#page-top">
                <i class="fas fa-angle-up"></i>
            </a>

            <!-- Logout Modal-->
            <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                            <a class="btn btn-primary" href="<?= site_url('auth/logout') ?>">Logout</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bootstrap core JavaScript-->
            <script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
            <script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

            <!-- Core plugin JavaScript-->
            <script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

            <!-- Custom scripts for all pages-->
            <script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>

            <!-- Page level plugins -->
            <script src="<?= ('assets/'); ?>vendor/chart.js/Chart.min.js"></script>

            <!-- Page level custom scripts -->
            <script src="<?= base_url('assets/'); ?>js/demo/chart-area-demo.js"></script>
            <script src="<?= base_url('assets/'); ?>js/demo/chart-pie-demo.js"></script>
            <script src="<?= base_url('assets/'); ?>datatables/datatables.min.js"></script>
            <script type="text/javascript">
                $(document).ready(function() {
                    $('#datatables').DataTable();
                });
            </script>

<script type="text/javascript">
$(document).ready(function() {
    var i = 0;
    $("#dynamic-ar").click(function () {
        ++i;
        $("#dynamicAddRemove").append('<tr><td><input type="text" id="jobdesc" name="jobdesc[]" value=""></td><td><input type="text" class="volume'+i+'" name="volume[]" value=""></td><td><select class="custom-select lg mb-3 col-lg" aria-label=".form-select-lg example" id="unit" name="unit[]"><option value="Hours">Hours</option><option value="Days">Days</option><option value="Months">Months</option><option value="Years">Years</option><option value="Unit">Unit</option></select></td><td><input type="text" class="price'+i+'" name="price[]" value=""></td><td><input type="text" class="cost'+i+'" name="cost[]" value="" readonly></td><td><a href="javascript:void(0)" class="remove-input-field" id="'+i+'"><i class="fa fa-minus-circle" style="color:red"></i></a></td></tr>'
            );
        hitung(i);
    });
    $(document).on('click', '.remove-input-field', function () {
        $(this).parents('tr').remove();
        var row_id = $(this).attr("id");
        console.log(row_id);
        delete cost[row_id];
        tampil();
    });
});
</script>

<script>
var a = 0;
var volume = 0;
    var price = 0;
    var cost = [];
$(".volume"+a).change(function(){
    volume = $(this).val();
    cost[a] = volume * price;
    $(".cost"+a).val(cost[a]);
    tampil();
  });
  $(".price"+a).change(function(){
    price = $(this).val();
    cost[a] = volume * price;
    $(".cost"+a).val(cost[a]);
    tampil();
  });
function hitung(i){
    var volume = 0;
    var price = 0;
    $(".volume"+i).change(function(){
    volume = $(this).val();
    cost[i] = volume * price;
    $(".cost"+i).val(cost[i]);
    tampil();
  });
  $(".price"+i).change(function(){
    price = $(this).val();
    cost[i] = volume * price;
    $(".cost"+i).val(cost[i]);
    tampil();
  });

}
function tampil(){
    $("#total").val(tambah(cost));
    $("#grand").val(tambah(cost));
}
function tambah(input){
             
             if (toString.call(input) !== "[object Array]")
                return false;
                  
                        var total =  0;
                        for(var i=0;i<input.length;i++)
                          {                  
                            if(isNaN(input[i])){
                            continue;
                             }
                              total += Number(input[i]);
                           }
                         return total;
                        }
</script>

            </body>

            </html>