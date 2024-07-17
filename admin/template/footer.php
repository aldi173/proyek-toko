    </div>
    </div>
    <footer class="sticky-footer bg-white">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>
                    <?php echo date('Y');?> - Sistem Penjualan Barang Berbasis Web |
                    BY <b><a href="" target="_blank">SIHITE SHOP</a></b>
                </span>
            </div>
        </div>
    </footer>
    </div>
    </div>
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    <script src="sb-admin/js/sb-admin-2.min.js"></script>
    <script src="sb-admin/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="sb-admin/vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript">
    //datatable
    $(function() {
        $("#example1").DataTable();
        $('#example2').DataTable();
    });
   </script>
   <?php
        $sql=" select * from barang where stok <=3";
        $row = $config -> prepare($sql);
        $row -> execute();
        $q = $row -> fetch();
            if($q['stok'] == 3){	
            if($q['stok'] == 2){	
            if($q['stok'] == 1){	
    ?>
   <script type="text/javascript">
    //template
    $(document).ready(function() {
        var unique_id = $.gritter.add({
            title: 'Peringatan !',
            text: 'stok barang ada yang tersisa kurang dari 3 silahkan pesan lagi !',
            image: 'assets/img/seru.png',
            sticky: true,
            time: '',
            class_name: 'my-sticky-class'

        });

        return false;
    });
   </script>
   <?php }}}?>
   <script type="application/javascript">
    //angka 500 dibawah ini artinya pesan akan muncul dalam 0,5 detik setelah document ready
    $(document).ready(function() {
        setTimeout(function() {
            $(".alert-danger").fadeIn('slow');
        }, 500);
    });
    //angka 3000 dibawah ini artinya pesan akan hilang dalam 3 detik setelah muncul
    setTimeout(function() {
        $(".alert-danger").fadeOut('slow');
    }, 5000);

    $(document).ready(function() {
        setTimeout(function() {
            $(".alert-success").fadeIn('slow');
        }, 500);
    });
    setTimeout(function() {
        $(".alert-success").fadeOut('slow');
    }, 5000);

    $(document).ready(function() {
        setTimeout(function() {
            $(".alert-warning").fadeIn('slow');
        }, 500);
    });
    setTimeout(function() {
        $(".alert-success").fadeOut('slow');
    }, 5000);
   </script>
   <script>
    $(".modal-create").hide();
    $(".bg-shadow").hide();
    $(".bg-shadow").hide();

    function clickModals() {
        $(".bg-shadow").fadeIn();
        $(".modal-create").fadeIn();
    }

    function cancelModals() {
        $('.modal-view').fadeIn();
        $(".modal-create").hide();
        $(".bg-shadow").hide();
    }
   </script>
   </body>
   </html>