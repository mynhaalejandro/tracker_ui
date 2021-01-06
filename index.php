<link rel='stylesheet' type='text/css' href='style.css' />
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"/>
<div id="content">
    <nav class="navbar navbar-expand navbar-light text-center bg-white topbar mb-4 static-top shadow">
      <div class="col-md-12">
                    <!-- Sidebar Toggle (Topbar) -->
                    <h5 class="font-weight-bold text-uppercase mb-1" style="display: contents;">COVID-19 CORONAVIRUS Tracker</h5>
      </div>
                </nav>
    <div class="container-fluid">
    
         <div class="row">
  <div class="col-xl-3 col-md-3 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total Cases</div>
                                            <div class="row no-gutters align-items-center">
                                            <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">${total_cases}</div>
                                                </div>
                                                                                                
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa fa-users fa-2x text-info"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
    <div class="col-xl-3 col-md-3 mb-4">
                            <div class="card border-left-danger shadow h-100 py-2">
                                                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Total Death</div>
                                            <div class="row no-gutters align-items-center">
                                            <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">${total_deaths}</div>
                                                </div>
                                                                                                
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa fa-bed fa-2x text-danger"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
    <div class="col-xl-3 col-md-3 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Recovered</div>
                                            <div class="row no-gutters align-items-center">
                                            <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">${total_recovered}</div>
                                                </div>
                                                                                                
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa fa-child fa-2x text-success"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
    <div class="col-xl-3 col-md-3 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">New Cases</div>
                                            <div class="row no-gutters align-items-center">
                                            <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">${new_cases}</div>
                                                </div>
                                                                                                
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa fa-bell fa-2x text-warning"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
  </div> 
        ${countryTable({countries_stat})}
        

    </div>
    <footer class="sticky-footer bg-light shadow">
                <div class="container my-auto text-center">
                <h4 class="text-info font-weight-bold"><u>Follow Me</u></h4>
                <div class="social-btns"><a class="btn facebook" href="https://www.facebook.com/akzonstore"><i class="fa fa-facebook"></i></a><a class="btn twitter" href="https://twitter.com/mrakcreation"><i class="fa fa-twitter"></i></a><a class="btn instagram" href="https://www.instagram.com/iamishu_sharma/"><i class="fa fa-instagram"></i></a><a class="btn skype" href="skype:live:77476bf129c63267?chat"><i class="fa fa-skype"></i></a><a class="btn youtube" href="https://www.youtube.com/MrAKCreation"><i class="fa fa-youtube"></i></a>
</div><hr>
                    <div class="copyright text-center my-auto">
                        <span class="font-weight-bold">Copyright &copy; COVID-19 Tracker <?php echo date('Y') ?></span>
                    </div>
                </div>
            </footer>


