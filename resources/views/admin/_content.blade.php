<div class="content-wrap">
    <div class="main">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 p-0">
                    <div class="page-header">
                        <div class="page-title">
                            <h1>Admin Panel</h1>
                        </div>
                    </div>
                </div>
                <!-- /# column -->
                <div class="col-lg-4 p-0">
                    <div class="page-header">
                        <div class="page-title">
                            <ol class="breadcrumb text-right">
                                <li><a href="{{route('home')}}">Home</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- /# column -->
            </div>
            <!-- /# row -->
            <div class="main-content">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="stat-widget-two">
                                <div class="widget-icon color-1">
                                    <i class="fas fa-bullseye"></i>
                                </div>
                                <div class="stat-content">
                                    <div class="stat-text">Today Expenses </div>
                                    <div class="stat-digit"> <i class="fa fa-dollar-sign"></i>8500</div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="stat-widget-two">
                                <div class="widget-icon color-2">
                                    <i class="fas fa-credit-card"></i>
                                </div>
                                <div class="stat-content">
                                    <div class="stat-text">Income Detail</div>
                                    <div class="stat-digit"> <i class="fa fa-dollar-sign"></i>7800</div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: 78%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="stat-widget-two">
                                <div class="widget-icon color-3">
                                    <i class="fas fa-tasks"></i>
                                </div>
                                <div class="stat-content">
                                    <div class="stat-text">Task Completed</div>
                                    <div class="stat-digit"> 500</div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="stat-widget-two">
                                <div class="widget-icon color-4">
                                    <i class="fas fa-users"></i>
                                </div>
                                <div class="stat-content">
                                    <div class="stat-text">Today Visitor</div>
                                    <div class="stat-digit"> 650</div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: 65%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card alert">
                            <div class="card-header">
                                <h4>Yearly Sales </h4>
                                <div class="card-header-right-icon">
                                    <ul>
                                        <li class="card-close" data-dismiss="alert"><i class="ti-close"></i></li>
                                        <li class="card-collapse"><i class="fa fa-window-restore"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sales-chart  card-content">
                                <canvas id="sales-chart"></canvas>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-6">
                        <div class="card alert">
                            <div class="card-header">
                                <h4>Team Total Completed </h4>
                                <div class="card-header-right-icon">
                                    <ul>
                                        <li class="card-close" data-dismiss="alert"><i class="ti-close"></i></li>
                                        <li class="card-collapse"><i class="fa fa-window-restore"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sales-chart card-content">
                                <canvas id="team-chart"></canvas>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card alert">
                            <div class="card-header">
                                <h4>Sales Store</h4>
                                <div class="card-header-right-icon">
                                    <ul>
                                        <li class="card-close" data-dismiss="alert"><i class="ti-close"></i></li>
                                        <li class="card-collapse"><i class="fa fa-window-restore"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="datamap card-content">
                                <div id="world-datamap"></div>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-6">
                        <div class="card alert">
                            <div class="card-header">
                                <h4>Recent Sales </h4>
                                <div class="card-header-right-icon">
                                    <ul>
                                        <li class="card-close" data-dismiss="alert"><i class="ti-close"></i></li>
                                        <li class="card-option drop-menu">
                                            <i class="ti-settings" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" role="link"></i>
                                            <ul class="card-option-dropdown dropdown-menu">
                                                <li><a href="#"><i class="ti-loop"></i> Update data</a></li>
                                                <li><a href="#"><i class="ti-menu-alt"></i> Detail log</a></li>
                                                <li><a href="#"><i class="ti-pulse"></i> Statistics</a></li>
                                                <li><a href="#"><i class="ti-power-off"></i> Clear ist</a></li>
                                            </ul>
                                        </li>
                                        <li class="card-collapse"><i class="fa fa-window-restore"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body  card-content">
                                <table class="table table-responsive table-hover ">
                                    <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Status</th>
                                        <th>Date</th>
                                        <th>Price</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Kolor Tea Shirt For Man</td>
                                        <td><span class="badge badge-primary">Sale</span></td>
                                        <td>January 22</td>
                                        <td class="color-primary">$21.56</td>
                                    </tr>
                                    <tr>
                                        <td>Kolor Tea Shirt For Women</td>
                                        <td><span class="badge badge-success">Tax</span></td>
                                        <td>January 30</td>
                                        <td class="color-success">$55.32</td>
                                    </tr>
                                    <tr>
                                        <td>Blue Backpack For Baby</td>
                                        <td><span class="badge badge-danger">Extended</span></td>
                                        <td>January 25</td>
                                        <td class="color-danger">$14.85</td>
                                    </tr>
                                    <tr>
                                        <td>Kolor Tea Shirt For Man</td>
                                        <td><span class="badge badge-primary">Sale</span></td>
                                        <td>January 22</td>
                                        <td class="color-primary">$21.56</td>
                                    </tr>
                                    <tr>
                                        <td>Kolor Tea Shirt For Women</td>
                                        <td><span class="badge badge-success">Tax</span></td>
                                        <td>January 30</td>
                                        <td class="color-success">$55.32</td>
                                    </tr>
                                    <tr>
                                        <td>Blue Backpack For Baby</td>
                                        <td><span class="badge badge-danger">Extended</span></td>
                                        <td>January 25</td>
                                        <td class="color-danger">$14.85</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->
                <div class="row">
                    <div class="col-lg-4">
                        <div id="lobipanel-custom-control" class="card alert panel panel-default">
                            <div class="card-header">
                                <h4>Browser Statistics </h4>
                                <div class="card-header-right-icon">
                                    <ul>
                                        <li class="card-close" data-dismiss="alert"><i class="ti-close"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body panel-body">
                                <table class="table table-responsive table-hover ">
                                    <tbody>
                                    <tr>
                                        <td class="no-border">Google Chrome</td>
                                        <td class="no-border"><span class="badge badge-primary">45%</span></td>
                                    </tr>
                                    <tr>
                                        <td>Mozila Firefox</td>
                                        <td><span class="badge badge-success">65%</span></td>
                                    </tr>
                                    <tr>
                                        <td>Safari</td>
                                        <td><span class="badge badge-danger">10%</span></td>
                                    </tr>
                                    <tr>
                                        <td>Opera Mini</td>
                                        <td><span class="badge badge-primary">29%</span></td>
                                    </tr>
                                    <tr>
                                        <td>Microsoft Edge</td>
                                        <td><span class="badge badge-success">95%</span></td>
                                    </tr>
                                    <tr>
                                        <td>Internet Explorer</td>
                                        <td><span class="badge badge-danger">25%</span></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-4">
                        <div class="card alert">
                            <div class="card-header">
                                <h4>Todo List</h4>
                                <div class="card-header-right-icon">
                                    <ul>
                                        <li class="card-close" data-dismiss="alert"><i class="ti-close"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="todo-list">
                                <div class="tdl-holder">
                                    <div class="tdl-content">
                                        <ul>
                                            <li>
                                                <label>
                                                    <input type="checkbox"><i></i><span>get up</span>
                                                    <a href='#' class="ti-close"></a>
                                                </label>
                                            </li>
                                            <li>
                                                <label>
                                                    <input type="checkbox" checked><i></i><span>stand up</span>
                                                    <a href='#' class="ti-close"></a>
                                                </label>
                                            </li>
                                            <li>
                                                <label>
                                                    <input type="checkbox"><i></i><span>don't give up the fight.</span>
                                                    <a href='#' class="ti-close"></a>
                                                </label>
                                            </li>
                                            <li>
                                                <label>
                                                    <input type="checkbox" checked><i></i><span>do something else</span>
                                                    <a href='#' class="ti-close"></a>
                                                </label>
                                            </li>
                                            <li>
                                                <label>
                                                    <input type="checkbox" checked><i></i><span>stand up</span>
                                                    <a href='#' class="ti-close"></a>
                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                    <input type="text" class="tdl-new form-control" placeholder="Write new item and hit 'Enter'...">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-4">
                        <div class="card alert">
                            <div class="card-header">
                                <h4>Recent Comments </h4>
                                <div class="card-header-right-icon">
                                    <ul>
                                        <li class="card-close" data-dismiss="alert"><i class="ti-close"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="recent-comment m-t-15">
                                <div class="media">
                                    <div class="media-left">
                                        <a href="#"><img class="media-object" src="{{asset('assets')}}/admin/images/avatar/1.jpg" alt="..."></a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">John Doe</h4>
                                        <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. </p>
                                        <div class="comment-action">
                                            <div class="badge badge-success">Approved</div>
                                            <span class="m-l-10">
                                                 <a href="#"><i class="ti-check color-success"></i></a>
                                                 <a href="#"><i class="ti-close color-danger"></i></a>
                                                 <a href="#"><i class="fa fa-reply color-primary"></i></a>
                                             </span>
                                        </div>
                                        <p class="comment-date">May 20, 2018</p>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="media-left">
                                        <a href="#"><img class="media-object" src="{{asset('assets')}}/admin/images/avatar/2.jpg" alt="..."></a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">Jane Roe</h4>
                                        <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. </p>
                                        <div class="comment-action">
                                            <div class="badge badge-warning">Pending</div>
                                            <span class="m-l-10">
                                             <a href="#"><i class="ti-check color-success"></i></a>
                                             <a href="#"><i class="ti-close color-danger"></i></a>
                                             <a href="#"><i class="fa fa-reply color-primary"></i></a>
                                         </span>
                                        </div>
                                        <p class="comment-date">May 20, 2018</p>
                                    </div>
                                </div>
                                <div class="media no-border">
                                    <div class="media-left">
                                        <a href="#"><img class="media-object" src="{{asset('assets')}}/admin/images/avatar/3.jpg" alt="..."></a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">Mr. Jane</h4>
                                        <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. </p>
                                        <div class="comment-action">
                                            <div class="badge badge-danger">Rejected</div>
                                            <span class="m-l-10">
                                         <a href="#"><i class="ti-check color-success"></i></a>
                                         <a href="#"><i class="ti-close color-danger"></i></a>
                                         <a href="#"><i class="fa fa-reply color-primary"></i></a>
                                     </span>
                                        </div>
                                        <div class="comment-date">May 20, 2018</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->
            </div>
            <!-- /# main content -->
        </div>
        <!-- /# container-fluid -->
    </div>
    <!-- /# main -->
</div>
