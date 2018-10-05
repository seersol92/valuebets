<?php include 'templates/header.php'; ?>
<main class="main">
  <!-- Breadcrumb-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">Home</li>
    <li class="breadcrumb-item active">Dashboard</li>
    <!-- Breadcrumb Menu-->
  </ol>
  <div class="container-fluid">
    <div class="animated fadeIn"> 

      <div class="row">
          <div class="col-sm-6 col-lg-3">
            <div class="card text-white bg-primary">
              <div class="card-body pb-0">
                <div class="btn-group float-right">
                  <button class="btn btn-transparent dropdown-toggle p-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="icon-settings"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </div>
                </div>
                <div class="text-value">9.823</div>
                <div>Members online</div>
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
                  <i class="icon-location-pin"></i>
                </button>
                <div class="text-value">9.823</div>
                <div>Members online</div>
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
                <div class="btn-group float-right">
                  <button class="btn btn-transparent dropdown-toggle p-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="icon-settings"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </div>
                </div>
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
                <div class="btn-group float-right">
                  <button class="btn btn-transparent dropdown-toggle p-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="icon-settings"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </div>
                </div>
                <div class="text-value">9.823</div>
                <div>Members online</div>
              </div>
              <div class="chart-wrapper mt-3 mx-3" style="height:70px;">
                <canvas class="chart" id="card-chart4" height="70"></canvas>
              </div>
            </div>
          </div>
          <!-- /.col-->
      </div>
      <!-- /.row-->

      <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                <i class="fa fa-align-justify"></i> Comparing Table</div>
                <div class="card-body">
                <table class="table table-responsive-sm table-striped my-bet">
                    <thead>
                    <tr>
                        <th>Time Status</th>
                        <th>Teams</th>
                        <th>Leagues</th>
                        <th>Providers</th>
                        <th>1X2</th>
                        <th>Over/Under</th>
                        <th>HandyCap</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>01.01.2018 01:00 </td>
                        <td>Boca Juniors</td>
                        <td>Argrntina</td>
                        <td>BetSafe</td>
                        <td>1.53</td>
                        <td>O2.5 / 1.9</td>
                        <td>+1 1.9
                            <a href="" class="float-right">
                                <i class="fa fa-refresh"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>01.01.2018 01:00 </td>
                        <td>Boca Juniors</td>
                        <td>Argrntina</td>
                        <td>BetSafe</td>
                        <td>1.53</td>
                        <td>O2.5 / 1.9</td>
                        <td>+1 1.9
                            <a href="" class="float-right">
                                <i class="fa fa-refresh"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>01.01.2018 01:00 </td>
                        <td>Boca Juniors</td>
                        <td>Argrntina</td>
                        <td>BetSafe</td>
                        <td>1.53</td>
                        <td>O2.5 / 1.9</td>
                        <td>+1 1.9
                            <a href="" class="float-right">
                                <i class="fa fa-refresh"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>01.01.2018 01:00 </td>
                        <td>Boca Juniors</td>
                        <td>Argrntina</td>
                        <td>BetSafe</td>
                        <td>1.53</td>
                        <td>O2.5 / 1.9</td>
                        <td>+1 1.9
                            <a href="" class="float-right">
                                <i class="fa fa-refresh"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>01.01.2018 01:00 </td>
                        <td>Boca Juniors</td>
                        <td>Argrntina</td>
                        <td>BetSafe</td>
                        <td>1.53</td>
                        <td>O2.5 / 1.9</td>
                        <td>+1 1.9
                            <a href="" class="float-right">
                                <i class="fa fa-refresh"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>01.01.2018 01:00 </td>
                        <td>Boca Juniors</td>
                        <td>Argrntina</td>
                        <td>BetSafe</td>
                        <td>1.53</td>
                        <td>O2.5 / 1.9</td>
                        <td>+1 1.9
                            <a href="" class="float-right">
                                <i class="fa fa-refresh"></i>
                            </a>
                        </td>
                    </tr>
                    </tbody>
                </table>
                </div>
            </div>
            </div>
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
