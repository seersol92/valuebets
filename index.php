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
          <div class="col-12">
            <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-5">
                      <h4 class="card-title mb-0">Profile</h4>
                      <div class="small text-muted">Graph</div>
                    </div>
                    <!-- /.col-->
                    <div class="col-sm-7 d-none d-md-block">
                      <button class="btn btn-primary float-right" type="button">
                        <i class="icon-cloud-download"></i>
                      </button>
                      <div class="btn-group btn-group-toggle float-right mr-3" data-toggle="buttons">
                        <label class="btn btn-outline-secondary">
                          <input id="option1" type="radio" name="options" autocomplete="off" /> Day
                        </label>
                        <label class="btn btn-outline-secondary active">
                          <input id="option2" type="radio" name="options" autocomplete="off" checked="" /> Month
                        </label>
                        <label class="btn btn-outline-secondary">
                          <input id="option3" type="radio" name="options" autocomplete="off" /> Year
                        </label>
                      </div>
                    </div>
                    <!-- /.col-->
                  </div>
                  <!-- /.row-->
                  <div class="chart-wrapper" style="height:300px;margin-top:40px;">
                    <canvas class="chart" id="main-chart" height="300"></canvas>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="row text-center">
                    <div class="col-sm-12 col-md mb-sm-2 mb-0">
                      <strong>Profits</strong>
                      <div class="progress progress-xs mt-2">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
          </div>
      </div>

      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <i class="fa fa-align-justify"></i>
                <strong> Recent Summary</strong>
              </div>
            <div class="card-body">
              <div class="row">
                <div class="col-lg-6 col-sm-12">
                  <table class="table table-responsive-sm recent-summary">
                    <thead>
                      <tr>
                          <th>#</th>
                          <th>At Risk (EUR)</th>
                          <th>Payout (EUR)</th>
                          <th>Profit (EUR)</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                            Today
                              <p><small class="text-muted">OCT 03, 2018</small></p>
                          </td>
                          <td>1234</td>
                          <td>1234</td>
                          <td>-124</td>
                      </tr>
                      <tr>
                        <td>
                            Today
                              <p><small class="text-muted">OCT 03, 2018</small></p>
                          </td>
                          <td>1234</td>
                          <td>1234</td>
                          <td>-124</td>
                      </tr>
                      <tr>
                        <td>
                            Today
                              <p><small class="text-muted">OCT 03, 2018</small></p>
                          </td>
                          <td>1234</td>
                          <td>1234</td>
                          <td>-124</td>
                      </tr>
                      <tr>
                        <td>
                            Today
                              <p><small class="text-muted">OCT 03, 2018</small></p>
                          </td>
                          <td>1234</td>
                          <td>1234</td>
                          <td>-124</td>
                      </tr>
                      <tr>
                        <td>
                            Today
                              <p><small class="text-muted">OCT 03, 2018</small></p>
                          </td>
                          <td>1234</td>
                          <td>1234</td>
                          <td>-124</td>
                      </tr>
                     
                    </tbody>
                  </table>
                </div>
                <div class="col-lg-6 col-sm-12">
                <table class="table table-responsive-sm recent-summary">
                    <thead>
                      <tr>
                          <th>
                            <i class="fa fa-user-o"></i>
                          </th>
                          <th>Bookmaker</th>
                          <th>Total Bets</th>
                          <th>ROI</th>
                          <th>Profit</th>
                          <th>
                            <a>
                              <i class="fa fa-plus-square-o" style="font-size: 21px;cursor: pointer;"></i>
                            </a>
                          </th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                          <td>
                            <img class="img-avatar" src="assets/img/avatars/6.jpg" alt="admin@bootstrapmaster.com">
                          </td>
                          <td>BetSafe</td>
                          <td>15</td>
                          <td>14%</td>
                          <td>
                            125,25
                          </td>
                      </tr>
                      <tr>
                          <td>
                            <img class="img-avatar" src="assets/img/avatars/6.jpg" alt="admin@bootstrapmaster.com">
                          </td>
                          <td>BetSafe</td>
                          <td>15</td>
                          <td>14%</td>
                          <td>
                            125,25
                          </td>
                      </tr>
                      <tr>
                          <td>
                            <img class="img-avatar" src="assets/img/avatars/6.jpg" alt="admin@bootstrapmaster.com">
                          </td>
                          <td>BetSafe</td>
                          <td>15</td>
                          <td>14%</td>
                          <td>
                            125,25
                          </td>
                      </tr>
                      <tr>
                          <td>
                            <img class="img-avatar" src="assets/img/avatars/6.jpg" alt="admin@bootstrapmaster.com">
                          </td>
                          <td>BetSafe</td>
                          <td>15</td>
                          <td>14%</td>
                          <td>
                            125,25
                          </td>
                      </tr>
                      <tr>
                          <td>
                            <img class="img-avatar" src="assets/img/avatars/6.jpg" alt="admin@bootstrapmaster.com">
                          </td>
                          <td>BetSafe</td>
                          <td>15</td>
                          <td>14%</td>
                          <td>
                            125,25
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
      <!-- /.row-->

    </div>
  </div>
</main>

<?php include 'templates/footer.php'; ?>
<script src="assets/js/Chart.min.js"></script>
<script src="assets/vendors/@coreui/coreui-plugin-chartjs-custom-tooltips/js/custom-tooltips.min.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>
