<?php include 'templates/header.php'; ?>
<main class="main">
    <!-- Breadcrumb-->
    <ol class="breadcrumb">
    <li class="breadcrumb-item">Home</li>
    <li class="breadcrumb-item active">My Bets</li>
    <!-- Breadcrumb Menu-->
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn"> 
            <div class="row">
                <div class="col-sm-6 col-lg-3">
                    <div class="card text-white bg-primary">
                    <div class="card-body pb-0">
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
                        <div>Members online</div>
                    </div>
                    <div class="chart-wrapper mt-3 mx-3" style="height:70px;">
                        <canvas class="chart" id="card-chart4" height="70"></canvas>
                    </div>
                    </div>
                </div>
                <!-- /.col-->
            </div>
            
            <div class="row">
                <!-- /.col-->
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                        <i class="fa fa-align-justify"></i> Settled Bets</div>
                        <div class="card-body">
                        <table class="table table-responsive-sm table-striped my-bet">
                            <thead>
                            <tr>
                                <th>Event</th>
                                <th>Bookmaker</th>
                                <th>Selection</th>
                                <th>Return</th>
                                <th>Pick</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    <i class="fa fa-life-ring"></i>
                                    Paysandu Vs Goias EC
                                </td>
                                <td>
                                    <img class="img-avatar" src="assets/img/avatars/6.jpg" alt="admin@bootstrapmaster.com">
                                    &nbsp;&nbsp;
                                    BetSafe
                                </td>
                                <td>Draw no bet (Paysandu) @ 1.8</td>
                                <td>12%</td>
                                <td>
                                    <span class="badge badge-danger">Lost</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <i class="fa fa-life-ring"></i>
                                    Paysandu Vs Goias EC
                                </td>
                                <td>
                                    <img class="img-avatar" src="assets/img/avatars/6.jpg" alt="admin@bootstrapmaster.com">
                                    &nbsp;&nbsp;
                                    BetSafe
                                </td>
                                <td>Draw no bet (Paysandu) @ 1.8</td>
                                <td>12%</td>
                                <td>
                                    <span class="badge badge-success">
                                        <strong>Win</strong>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <i class="fa fa-life-ring"></i>
                                    Paysandu Vs Goias EC
                                </td>
                                <td>
                                    <img class="img-avatar" src="assets/img/avatars/6.jpg" alt="admin@bootstrapmaster.com">
                                    &nbsp;&nbsp;
                                    BetSafe
                                </td>
                                <td>Draw no bet (Paysandu) @ 1.8</td>
                                <td>12%</td>
                                <td>
                                    <span class="badge badge-danger">Lost</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <i class="fa fa-life-ring"></i>
                                    Paysandu Vs Goias EC
                                </td>
                                <td>
                                    <img class="img-avatar" src="assets/img/avatars/6.jpg" alt="admin@bootstrapmaster.com">
                                    &nbsp;&nbsp;
                                    BetSafe
                                </td>
                                <td>Draw no bet (Paysandu) @ 1.8</td>
                                <td>12%</td>
                                <td>
                                    <span class="badge badge-danger">Lost</span>
                                </td>
                            </tr>

                            </tbody>
                        </table>
                        <ul class="pagination">
                            <li class="page-item">
                            <a class="page-link" href="#">Prev</a>
                            </li>
                            <li class="page-item active">
                            <a class="page-link" href="#">1</a>
                            </li>
                            <li class="page-item">
                            <a class="page-link" href="#">2</a>
                            </li>
                            <li class="page-item">
                            <a class="page-link" href="#">3</a>
                            </li>
                            <li class="page-item">
                            <a class="page-link" href="#">4</a>
                            </li>
                            <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                        </div>
                    </div>
                </div>
                <!-- /.col-->
                    <!-- /.col-->
                    <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                        <i class="fa fa-align-justify"></i> Open Bets</div>
                        <div class="card-body">
                        <table class="table table-responsive-sm table-striped my-bet">
                            <thead>
                                <tr>
                                    <th>Event</th>
                                    <th>Bookmaker</th>
                                    <th>Stake</th>
                                    <th>Odds</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <i class="fa fa-life-ring"></i>
                                        Paysandu Vs Goias EC
                                    </td>
                                    <td>
                                        <img class="img-avatar" src="assets/img/avatars/6.jpg" alt="admin@bootstrapmaster.com">
                                        &nbsp;&nbsp;
                                        BetSafe
                                    </td>
                                    <td>15</td>
                                    <td>1.8</td>
                                </tr>
                                <tr>
                                    <td>
                                        <i class="fa fa-life-ring"></i>
                                        Paysandu Vs Goias EC
                                    </td>
                                    <td>
                                        <img class="img-avatar" src="assets/img/avatars/6.jpg" alt="admin@bootstrapmaster.com">
                                        &nbsp;&nbsp;
                                        BetSafe
                                    </td>
                                    <td>15</td>
                                    <td>1.8</td>
                                </tr>
                                <tr>
                                    <td>
                                        <i class="fa fa-life-ring"></i>
                                        Paysandu Vs Goias EC
                                    </td>
                                    <td>
                                        <img class="img-avatar" src="assets/img/avatars/6.jpg" alt="admin@bootstrapmaster.com">
                                        &nbsp;&nbsp;
                                        BetSafe
                                    </td>
                                    <td>15</td>
                                    <td>1.8</td>
                                </tr>
                                <tr>
                                    <td>
                                        <i class="fa fa-life-ring"></i>
                                        Paysandu Vs Goias EC
                                    </td>
                                    <td>
                                        <img class="img-avatar" src="assets/img/avatars/6.jpg" alt="admin@bootstrapmaster.com">
                                        &nbsp;&nbsp;
                                        BetSafe
                                    </td>
                                    <td>15</td>
                                    <td>1.8</td>
                                </tr>
                            </tbody>
                        </table>
                        <ul class="pagination">
                            <li class="page-item">
                            <a class="page-link" href="#">Prev</a>
                            </li>
                            <li class="page-item active">
                            <a class="page-link" href="#">1</a>
                            </li>
                            <li class="page-item">
                            <a class="page-link" href="#">2</a>
                            </li>
                            <li class="page-item">
                            <a class="page-link" href="#">3</a>
                            </li>
                            <li class="page-item">
                            <a class="page-link" href="#">4</a>
                            </li>
                            <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
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
