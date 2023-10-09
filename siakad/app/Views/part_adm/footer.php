    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Blank Page</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blank Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- DataTables  & Plugins -->
      <script src="<?= base_url('template/plugins/datatables/jquery.dataTables.min.js')?>"></script>
      <script src="<?= base_url('template/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')?>"></script>
      <script src="<?= base_url('template/plugins/datatables-responsive/js/dataTables.responsive.min.js')?>"></script>
      <script src="<?= base_url('template/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')?>"></script>
      <script src="<?= base_url('template/plugins/datatables-buttons/js/dataTables.buttons.min.js')?>"></script>
      <script src="<?= base_url('template/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')?>"></script>
      <script src="<?= base_url('template/plugins/jszip/jszip.min.js')?>"></script>
      <script src="<?= base_url('template/plugins/pdfmake/pdfmake.min.js')?>"></script>
      <script src="<?= base_url('template/plugins/pdfmake/vfs_fonts.js')?>"></script>
      <script src="<?= base_url('template/plugins/datatables-buttons/js/buttons.html5.min.js')?>"></script>
      <script src="<?= base_url('template/plugins/datatables-buttons/js/buttons.print.min.js')?>"></script>
      <script src="<?= base_url('template/plugins/datatables-buttons/js/buttons.colVis.min.js')?>"></script>

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Title</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          Start creating your amazing application!
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?= base_url('template/plugins/jquery/jquery.min.js') ?>"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('template/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('template/dist/js/adminlte.min.js') ?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url('template/dist/js/demo.js') ?>"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
  });
</script>
</body>
</html>


