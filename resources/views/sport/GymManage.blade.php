
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Majestic Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('css/materialdesignicons.min.css')}}">

    <link rel="stylesheet" href="{{asset('css/base.css')}}">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <link rel="stylesheet" href="{{asset('css/table.css')}}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!-- endinject -->
    <link rel="shortcut icon" href="images/favicon.png" />
</head>
<body>
<div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="navbar-brand-wrapper d-flex justify-content-center">
            <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">
                <a class="navbar-brand brand-logo" href="index.html"><img src="{{asset('svg/guanlishezhi.svg')}}" alt="logo"/></a>
                <a class="navbar-brand brand-logo-mini" href="index.html"><img src="images/logo-mini.svg" alt="logo"/></a>
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <img src="../svg/text-indent-right.svg" width="30rem" height="30rem">
                </button>
            </div>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
            <ul class="navbar-nav mr-lg-4 w-100">
                <h2 style="color: #0e1014">浙江财经大学东方学院-体育中心</h2>
{{--                <li class="nav-item nav-search d-none d-lg-block w-100">--}}
{{--                    <div class="input-group">--}}
{{--                        <div class="input-group-prepend">--}}
{{--                <span class="input-group-text" id="search">--}}
{{--                  <i class="mdi mdi-magnify"></i>--}}
{{--                </span>--}}
{{--                        </div>--}}
{{--                        <input type="text" class="form-control" placeholder="Search now" aria-label="search" aria-describedby="search">--}}
{{--                    </div>--}}
{{--                </li>--}}
            </ul>
            <ul class="navbar-nav navbar-nav-right">
                <li class="nav-item dropdown mr-1">
{{--                    <a class="nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center" id="messageDropdown" href="#" data-toggle="dropdown">--}}
{{--                        <i class="mdi mdi-message-text mx-0"></i>--}}
{{--                        <span class="count"></span>--}}
{{--                    </a>--}}
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="messageDropdown">
                        <p class="mb-0 font-weight-normal float-left dropdown-header">Messages</p>
                        <a class="dropdown-item">
                            <div class="item-thumbnail">
                                <img src="images/faces/face4.jpg" alt="image" class="profile-pic">
                            </div>
                            <div class="item-content flex-grow">
                                <h6 class="ellipsis font-weight-normal">David Grey
                                </h6>
                                <p class="font-weight-light small-text text-muted mb-0">
                                    The meeting is cancelled
                                </p>
                            </div>
                        </a>
                        <a class="dropdown-item">
                            <div class="item-thumbnail">
                                <img src="images/faces/face2.jpg" alt="image" class="profile-pic">
                            </div>
                            <div class="item-content flex-grow">
                                <h6 class="ellipsis font-weight-normal">Tim Cook
                                </h6>
                                <p class="font-weight-light small-text text-muted mb-0">
                                    New product launch
                                </p>
                            </div>
                        </a>
                        <a class="dropdown-item">
                            <div class="item-thumbnail">
                                <img src="images/faces/face3.jpg" alt="image" class="profile-pic">
                            </div>
                            <div class="item-content flex-grow">
                                <h6 class="ellipsis font-weight-normal"> Johnson
                                </h6>
                                <p class="font-weight-light small-text text-muted mb-0">
                                    Upcoming board meeting
                                </p>
                            </div>
                        </a>
                    </div>
                </li>
                <li class="nav-item dropdown mr-4">
                    <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center notification-dropdown" id="notificationDropdown" href="#" data-toggle="dropdown">
                        <i class="mdi mdi-bell mx-0"></i>
                        <span class="count"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="notificationDropdown">
                        <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
                        <a class="dropdown-item">
                            <div class="item-thumbnail">
                                <div class="item-icon bg-success">
                                    <i class="mdi mdi-information mx-0"></i>
                                </div>
                            </div>
                            <div class="item-content">
                                <h6 class="font-weight-normal">Application Error</h6>
                                <p class="font-weight-light small-text mb-0 text-muted">
                                    Just now
                                </p>
                            </div>
                        </a>
                        <a class="dropdown-item">
                            <div class="item-thumbnail">
                                <div class="item-icon bg-warning">
                                    <i class="mdi mdi-settings mx-0"></i>
                                </div>
                            </div>
                            <div class="item-content">
                                <h6 class="font-weight-normal">Settings</h6>
                                <p class="font-weight-light small-text mb-0 text-muted">
                                    Private message
                                </p>
                            </div>
                        </a>
                        <a class="dropdown-item">
                            <div class="item-thumbnail">
                                <div class="item-icon bg-info">
                                    <i class="mdi mdi-account-box mx-0"></i>
                                </div>
                            </div>
                            <div class="item-content">
                                <h6 class="font-weight-normal">New user registration</h6>
                                <p class="font-weight-light small-text mb-0 text-muted">
                                    2 days ago
                                </p>
                            </div>
                        </a>
                    </div>
                </li>
                <li class="nav-item nav-profile dropdown">
                    <a href="#">
                        <img src="../svg/arrow-90deg-left.svg" alt="profile" width="30rem" height="30rem"/></a>

                </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                <span class="mdi mdi-menu"></span>
            </button>
        </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.html">
                        
                        <img src="../svg/fangdichan.svg" alt="profile" width="20rem" height="20rem" style="margin-right:3rem">
                        <span class="menu-title">部门概况</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                        <i class="mdi mdi-circle-outline menu-icon"></i>
                        <span class="menu-title">UI Elements</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="ui-basic">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a></li>
                            <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Typography</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="pages/forms/basic_elements.html">
                        <i class="mdi mdi-view-headline menu-icon"></i>
                        <span class="menu-title">Form elements</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="pages/charts/chartjs.html">
                        <i class="mdi mdi-chart-pie menu-icon"></i>
                        <span class="menu-title">Charts</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="pages/tables/basic-table.html">
                        <i class="mdi mdi-grid-large menu-icon"></i>
                        <span class="menu-title">Tables</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="pages/icons/mdi.html">
                        <i class="mdi mdi-emoticon menu-icon"></i>
                        <span class="menu-title">Icons</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                        <i class="mdi mdi-account menu-icon"></i>
                        <span class="menu-title">User Pages</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="auth">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
                            <li class="nav-item"> <a class="nav-link" href="pages/samples/login-2.html"> Login 2 </a></li>
                            <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>
                            <li class="nav-item"> <a class="nav-link" href="pages/samples/register-2.html"> Register 2 </a></li>
                            <li class="nav-item"> <a class="nav-link" href="pages/samples/lock-screen.html"> Lockscreen </a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="documentation/documentation.html">
                        <i class="mdi mdi-file-document-box-outline menu-icon"></i>
                        <span class="menu-title">Documentation</span>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">

                <div class="row">
                    <div class="col-md-12 grid-margin">
                        <div class="d-flex justify-content-between flex-wrap">
                            <div class="d-flex align-items-end flex-wrap">
{{--                                <div class="mr-md-3 mr-xl-5">--}}
{{--                                    <h2>Welcome back,</h2>--}}
{{--                                    <p class="mb-md-0">Your analytics dashboard template.</p>--}}
{{--                                </div>--}}
                                <div class="d-flex">
                                    <i class="mdi mdi-home text-muted hover-cursor"></i>
                                    <p class="text-muted mb-0 hover-cursor">&nbsp;/&nbsp;Dashboard&nbsp;/&nbsp;</p>
                                    <p class="text-primary mb-0 hover-cursor">Analytics</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" id="proBanner">
                    <div class="col-md-12 grid-margin">
                        <div class="card bg-gradient-primary border-0">
                            <div class="card-body py-3 px-4 d-flex align-items-center justify-content-between flex-wrap">
                                <div class="d-flex">
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <p class="card-title">部门简介</p>
                                <p class="mb-4">体育部是一个处级教学行政部门，并设部主任、部副主任、办公室主任、教研室主任，体育部全面负责和实施我院学生的体育教育及体育场馆管理，其任务包括：体育教学、运动训练与竞赛、群众性体育活动、体质与健康测试、体育科研等。

                                    体育部现有教职员工19人，专任教师13人，双肩挑3人，管理岗3人；其中副教授2人，讲师10人，助教4人，行政管理人员3人。全体教师热爱本职工作，具有较强的凝聚力，共同致力于体育教学改革和实践的前沿，积累了丰富的经验，是一支年轻有活力、敬业爱岗、开拓创新的师资队伍。2016-2019年度“十三五”期间，体育部教师累计获奖近200人次，获省级以上奖项106项，成绩出色。
                                    
                                    体育部下设部办公室、3个教研室、教学委员会以及教学督导组。在院党委的正确领导下，我院的体育工作紧紧围绕我院办学指导思想、办学定位、办学思路以及人才培养目标，全面贯彻党的教育方针，以转变教育思想、更新教育观念为先导，贯彻落实《学院体育工作条例》、《全国普通高等学院体育课程教学指导纲要》的精神，坚持以“以人为本，健康第一”的理念，不断深化教学改革，面向全体学生，全面提高学生素质，坚持我院体育教学工作的主要目标，充分发挥学院体育的育人功能，提高学生的体质健康水平，促进学生身心全面发展。并积极探索和充分发挥体育学科在推动校园精神文明建设中的特殊作用，为培养合格人才做出应有贡献。
                                    
                                    体育部教师教学作风严谨，教学效果良好，课堂教学评估多次名列全校前三名；体育课程（本部）于02年通过校级一类课程评估，于03年确立为校级精品课程，09年确立为省级精品课程；05年获两项（篮球、健美操）校级一类课程建设，09年确立为校级精品课程；建立健全课程建设方案并设立部级一类专项建设、多媒体课件立项建设等，将体育理论、实践与多媒体等现代化教学手段有机结合。于2013年获东方学院校级优秀教学成果奖三等奖。
                                    
                                    体育部努力抓好运动队建设，完善管理办法，创新管理模式，为运动队不断地提高运动技术水平创造良好的环境，提供健全的制度保障。经过全体教练员与运动员的努力与实践，近年来运动成绩硕果累累，2019年荣获浙江省第十五届大学生运动会“校长杯”；女子乒乓球队连续三年在省级比赛中获女子团体赛第一；田径队曾获浙江省大学生田径精英赛女子七项全能第一；女子足球队曾获浙江省青少年校园足球联赛（大学女子组）甲组第四名、浙江省第十五届大学生运动会足球项目比赛第五名；男篮曾获浙江省大学生篮球联赛（男子甲B组）亚军；网球队曾获浙江省第十届大学生网球锦标赛混双第二、浙江省第十届大学生网球锦标赛女团第六；武术队曾获浙江省大学生武术锦标赛方金滔南刀第四名；街舞队曾获2016年规定locking street jazz第二名、2016、2018年规定hiphop第三名；体育舞蹈队曾获操舞竞标赛甲组艺术表演舞集体舞第二名，游泳队曾获浙江省第十五届大学生运动会游泳项目比赛男子甲组200米蛙泳第五名等取得一系列较为出色的成绩。
                                    
                                    体育场地的全面建成并投入使用，使体育教学与训练场地的矛盾得以缓解，目前长安校区运动场馆总面积达52020平方米，生均面积为5.22平方米；其中室外面积约为42000平方米，生均面积4.22平方米，室内总面积约为10020平方米，生均面积1平方米。其中包括1个标准塑胶跑道田径场（内含一个标准足球场，为人工草皮）；24块篮球场（14块室外篮球场，8块室外塑胶灯光球场，2块室内球场）；6块排球场（4块室外塑胶排球场，2块室内排球场）；15块网球场（8块室外塑胶网球场，6块室外灯光球场，1块室内塑胶网球场），1块室外五人制足球场（人工草坪），80米、20米网球练习墙；2间壁球房，4间健美操房（J3有3间，体育馆1间）、2间形体房（J4有1间，体育馆1间）、1间体育舞蹈，4间乒乓房（J5有2间，体育馆2间）、1间跆拳道房，1间散打房，1间瑜伽房，3间体质测试房，2间多媒体教室。场馆场地数量能够满足教学训练的需求。</p>
                                <div id="cash-deposits-chart-legend" class="d-flex justify-content-center pt-3"></div>
                                <canvas id="cash-deposits-chart"></canvas>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-12 stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <p class="card-title">Recent Purchases</p>
                                <div class="table-responsive">
                                    <table id="recent-purchases-listing" class="table">
                                        <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Status report</th>
                                            <th>Office</th>
                                            <th>Price</th>
                                            <th>Date</th>
                                            <th>Gross amount</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>Jeremy Ortega</td>
                                            <td>Levelled up</td>
                                            <td>Catalinaborough</td>
                                            <td>$790</td>
                                            <td>06 Jan 2018</td>
                                            <td>$2274253</td>
                                        </tr>
                                        <tr>
                                            <td>Alvin Fisher</td>
                                            <td>Ui design completed</td>
                                            <td>East Mayra</td>
                                            <td>$23230</td>
                                            <td>18 Jul 2018</td>
                                            <td>$83127</td>
                                        </tr>
                                        <tr>
                                            <td>Emily Cunningham</td>
                                            <td>support</td>
                                            <td>Makennaton</td>
                                            <td>$939</td>
                                            <td>16 Jul 2018</td>
                                            <td>$29177</td>
                                        </tr>
                                        <tr>
                                            <td>Minnie Farmer</td>
                                            <td>support</td>
                                            <td>Agustinaborough</td>
                                            <td>$30</td>
                                            <td>30 Apr 2018</td>
                                            <td>$44617</td>
                                        </tr>
                                        <tr>
                                            <td>Betty Hunt</td>
                                            <td>Ui design not completed</td>
                                            <td>Lake Sandrafort</td>
                                            <td>$571</td>
                                            <td>25 Jun 2018</td>
                                            <td>$78952</td>
                                        </tr>
                                        <tr>
                                            <td>Myrtie Lambert</td>
                                            <td>Ui design completed</td>
                                            <td>Cassinbury</td>
                                            <td>$36</td>
                                            <td>05 Nov 2018</td>
                                            <td>$36422</td>
                                        </tr>
                                        <tr>
                                            <td>Jacob Kennedy</td>
                                            <td>New project</td>
                                            <td>Cletaborough</td>
                                            <td>$314</td>
                                            <td>12 Jul 2018</td>
                                            <td>$34167</td>
                                        </tr>
                                        <tr>
                                            <td>Ernest Wade</td>
                                            <td>Levelled up</td>
                                            <td>West Fidelmouth</td>
                                            <td>$484</td>
                                            <td>08 Sep 2018</td>
                                            <td>$50862</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->
            <footer class="footer">
                <div class="d-sm-flex justify-content-center justify-content-sm-between">
                    <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
                    <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap dashboard template</a> from Bootstrapdash.com</span>
                </div>
            </footer>
            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->

<!-- plugins:js -->
<script src="vendors/base/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page-->
<script src="vendors/chart.js/Chart.min.js"></script>
<script src="vendors/datatables.net/jquery.dataTables.js"></script>
<script src="vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
<!-- End plugin js for this page-->
<!-- inject:js -->
<script src="js/off-canvas.js"></script>
<script src="js/hoverable-collapse.js"></script>
<script src="js/template.js"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="js/dashboard.js"></script>
<script src="js/data-table.js"></script>
<script src="js/jquery.dataTables.js"></script>
<script src="js/dataTables.bootstrap4.js"></script>
<!-- End custom js for this page-->
<script src="js/jquery.cookie.js" type="text/javascript"></script>
</body>

</html>

