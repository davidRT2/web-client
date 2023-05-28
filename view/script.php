<!-- jQuery -->
<script src="../asset/AdminLTE-3.1.0/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../asset/AdminLTE-3.1.0/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="../asset/AdminLTE-3.1.0/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="../asset/AdminLTE-3.1.0/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../asset/AdminLTE-3.1.0/dist/js/demo.js"></script>
<!-- Page specific script -->
<!-- jQuery -->
<script src="../asset/AdminLTE-3.1.0/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../asset/AdminLTE-3.1.0/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="../asset/AdminLTE-3.1.0/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../asset/AdminLTE-3.1.0/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../asset/AdminLTE-3.1.0/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../asset/AdminLTE-3.1.0/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../asset/AdminLTE-3.1.0/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../asset/AdminLTE-3.1.0/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../asset/AdminLTE-3.1.0/plugins/jszip/jszip.min.js"></script>
<script src="../asset/AdminLTE-3.1.0/plugins/pdfmake/pdfmake.min.js"></script>
<script src="../asset/AdminLTE-3.1.0/plugins/pdfmake/vfs_fonts.js"></script>
<script src="../asset/AdminLTE-3.1.0/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../asset/AdminLTE-3.1.0/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../asset/AdminLTE-3.1.0/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script src="../asset/AdminLTE-3.1.0/build/js/AdminLTE.js"></script>
<!-- AdminLTE App -->
<script src="../asset/AdminLTE-3.1.0/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../asset/AdminLTE-3.1.0/dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
    $(function() {
        $("#example1").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
        $("#nim")
    });
</script>
<script>
    $(function() {
        bsCustomFileInput.init();
    });
</script>
<script>
    const inputField = document.getElementById('nim');

    inputField.addEventListener('input', function() {
        const value = this.value;
        const isNumber = /^[0-9.]+$/.test(value);

        if (!isNumber) {
            this.disabled = true;
        } else {
            this.disabled = false;
        }
    });
</script>