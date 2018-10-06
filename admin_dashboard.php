<?php include 'templates/header.php'; ?>
<main class="main mt-5">
  <!-- Breadcrumb-->
  <div class="container-fluid">
    <div class="animated fadeIn"> 

        <div class="row">
            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-primary">
                <div class="card-body pb-0">
                    <div class="text-value">9.823</div>
                    <div>Active Subscriptions</div>
                </div>
                <div class="chart-wrapper mt-3 mx-3" style="height:70px;">
                    <canvas class="chart" id="card-chart1" height="70"></canvas>
                </div>
                </div>
            </div>
            <!-- /.col-->
            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-info">
                <div class="card-body pb-0">
                    <button class="btn btn-transparent p-0 float-right" type="button">
                    
                    </button>
                    <div class="text-value">9.823</div>
                    <div>Sub that didn't Continued</div>
                </div>
                <div class="chart-wrapper mt-3 mx-3" style="height:70px;">
                    <canvas class="chart" id="card-chart2" height="70"></canvas>
                </div>
                </div>
            </div>
            <!-- /.col-->
            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-warning">
                <div class="card-body pb-0">
                    <div class="text-value">9.823</div>
                    <div>Members online</div>
                </div>
                <div class="chart-wrapper mt-3" style="height:70px;">
                    <canvas class="chart" id="card-chart3" height="70"></canvas>
                </div>
                </div>
            </div>
            <!-- /.col-->
            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-danger">
                <div class="card-body pb-0">
                    <div class="text-value">9.823</div>
                    <div>Subscriptions Profit</div>
                </div>
                <div class="chart-wrapper mt-3 mx-3" style="height:70px;">
                    <canvas class="chart" id="card-chart4" height="70"></canvas>
                </div>
                </div>
            </div>
            <!-- /.col-->
        </div>
        
    </div>
  </div>
</main>

<?php include 'templates/footer.php'; ?>
<script src="assets/js/Chart.min.js"></script>
<script src="assets/vendors/@coreui/coreui-plugin-chartjs-custom-tooltips/js/custom-tooltips.min.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>