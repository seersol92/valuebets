
  </div> <!-- closing div app-body header.php -->
   <footer class="app-footer">
      <div>
      <p>Copyright by © <?= WEBSITE_NAME ?> <?= date('Y') ?></p>
      </div>
      
    </footer>
    <!-- Bootstrap and necessary plugins-->
    <script src="assets/vendors/jquery/js/jquery.min.js"></script>
    <script src="assets/vendors/popper.js/js/popper.min.js"></script>
    <script src="assets/vendors/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/vendors/pace-progress/js/pace.min.js"></script>
    <script src="assets/vendors/perfect-scrollbar/js/perfect-scrollbar.min.js"></script>
    <script src="assets/vendors/@coreui/coreui-pro/js/coreui.min.js"></script>
    <script>
      $('#ui-view').ajaxLoad();
      $(document).ajaxComplete(function() {
        Pace.restart()
      });
    </script>
 