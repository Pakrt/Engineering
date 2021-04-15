<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/landing/images/inaco.ico')}}">
    <title>Engineering | @yield('tittle')</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('assets/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/bower_components/datatables/jquery.dataTables.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/plugins/bower_components/bootstrap-datepicker/bootstrap-datepicker.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/plugins/bower_components/custom-select/custom-select.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/plugins/bower_components/switchery/dist/switchery.min.css')}}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/bower_components/bootstrap-select/bootstrap-select.min.css')}}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/bower_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.css')}}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/bower_components/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css')}}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/bower_components/multiselect/css/multi-select.css')}}" rel="stylesheet" type="text/css" />
    <!-- Menu CSS -->
    <link href="{{ asset('assets/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css')}}" rel="stylesheet">
    <!-- animation CSS -->
    <link href="{{ asset('assets/css/animate.css')}}" rel="stylesheet">
    <!-- Popup CSS -->
    <link href="{{ asset('assets/plugins/bower_components/Magnific-Popup-master/dist/magnific-popup.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('assets/css/style.css')}}" rel="stylesheet">
    <!-- color CSS -->
    <link href="{{ asset('assets/css/colors/blue-dark.css')}}" id="theme" rel="stylesheet">
    {{-- <link href="assets/css/colors/pink.css" id="theme" rel="stylesheet"> --}}
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body class="fix-header">
    <!-- Wrapper -->
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header">
                <!-- Search input and Toggle icon -->
                <ul class="nav navbar-top-links navbar-left">
                    <li><a href="javascript:void(0)" class="open-close waves-effect waves-light visible-xs"><i class="ti-close ti-menu"></i></a></li>
                </ul>
                <?php
                    $alert = \DB::select('select * from spareparts where jumlah < minimum');
                    $total = count($alert) > 0;
                ?>
                <ul class="nav navbar-top-links navbar-right pull-right">
                    @if(auth()->user()->role == 'admin')
                    <!-- .Task dropdown -->
                    <li class="dropdown">
                        <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#"> <i class="mdi mdi-alert-circle-outline"></i>
                            @if($total)
                            <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
                            @endif
                        </a>
                        <ul class="dropdown-menu dropdown-tasks animated slideInUp">
                            @if($total)
                            <li class="header text-center">
                                <h4 style="font-family: Lucida">Sparepart Attention</h4>
                            </li>
                            @foreach ($alert as $alert)
                            <li>
                                <a href="/sparepart/{{$alert->id}}/detail">
                                    <i class="fas fa-alert"></i>{{$alert->nama}}
                                </a>
                            </li>
                            @endforeach
                            <li class="divider"></li>
                            <li>
                                <a class="text-center" href="/sparepart/alert"> <strong>See all notifications</strong> <i class="fa fa-angle-right"></i> </a>
                            </li>
                            @else
                            <li class="header text-center">
                                <h4 style="font-family: Lucida">Sparepart Attention</h4>
                            </li>
                            <li>
                                <a class="text-center" href="javascript:void(0);"> <strong>Stok Sparepart Amaann ^_^</strong></a>
                            </li>
                            @endif
                        </ul>
                    </li>
                    @endif
                    <li class="dropdown">
                        <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#">
                            <img src="{{ Auth::user()->getAvatar() }}" alt="user-img" style="vertical-align:middle; width:50px; height:50px; border-radius:50%">
                            <b class="hidden-xs">{{ Auth::user()->name }} </b><span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-user animated flipInY">
                            <li>
                                <div class="dw-user-box">
                                    <div class="u-img"><img src="{{ Auth::user()->getAvatar() }}" alt="user" /></div>
                                    <div class="u-text"><h4>{{ Auth::user()->name }}</h4><p class="text-muted">{{ Auth::user()->email }}</p></div>
                                </div>
                            </li>
                            <li role="separator" class="divider"></li>
                            <li><a href="/user/{{ Auth::user()->id }}/detail"><i class="ti-settings"></i> User Profile</a></li>
                            <li role="separator" class="divider"></li>
                            <li>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    <i class="mdi mdi-logout"></i>
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- End Top Navigation -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav slimscrollsidebar">
                <div class="sidebar-head">
                    <h3><span class="fa-fw open-close"><i class="ti-menu hidden-xs"></i><i class="ti-close visible-xs"></i></span> <span class="hide-menu">Navigation</span></h3>
                </div>
                <ul class="nav" id="side-menu">
                    {{-- <li class="user-pro">
                        <a href="#">
                            <img src="{{ Auth::user()->getAvatar() }}" alt="user-img" class="img-circle" >
                            <span class="hide-menu">{{Auth::user()->name }}</span>
                        </a>
                    </li> --}}
                    <li class="devider"></li>
                    <li> <a href="{{ url('/home') }}"><i class="mdi mdi-home-variant"></i> <span class="hide-menu"> Dashboard</span></a></li>
                    <li> <a href="{{ url('/maintenance') }}"><i class="mdi mdi-wrench"></i> <span class="hide-menu"> Maintenance</span></a></li>
                    <li> <a href="#" class="waves-effect"><i class="mdi mdi-link"></i> <span class="hide-menu"> Masters<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            @if (auth()->user()->role == 'admin')
                            <li> <a href="{{ url('/category') }}"><i class="mdi mdi-archive"></i><span class="hide-menu"> Master Category</span></a> </li>
                            @endif
                            <li> <a href="{{ url('/component') }}"><i class="mdi mdi-chip"></i><span class="hide-menu"> Master Component</span></a> </li>
                            <li> <a href="{{ url('/crew')}} "><i class="mdi mdi-worker"></i><span class="hide-menu"> Master Crew</span></a> </li>
                            <li> <a href="{{ url('/position') }}"><i class="mdi mdi-sitemap"></i><span class="hide-menu"> Master Position</span></a> </li>
                            <li> <a href="{{ url('/sparepart') }}"><i class="mdi mdi-bug"></i><span class="hide-menu"> Master Sparepart</span></a> </li>
                            @if (auth()->user()->role == 'admin')
                            <li> <a href="{{ url('/unit') }}"><i class="mdi mdi-database"></i><span class="hide-menu"> Master Unit</span></a> </li>
                            @endif
                        </ul>
                    </li>
                    <li> <a href="#" class="waves-effect"><i class="icon-note"></i> <span class="hide-menu">Form<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            @if (auth()->user()->role == 'admin')
                            <li> <a href="{{ url('/outcome/form') }}"><i class="mdi mdi-package-up"></i><span class="hide-menu"> Form Barang Keluar</span></a> </li>
                            <li> <a href="{{ url('/income/form') }}"><i class="mdi mdi-package-down"></i><span class="hide-menu"> Form Barang Masuk</span></a> </li>
                            @endif
                            <li> <a href="{{ url('/history/form') }}"><i class="mdi mdi-file-multiple"></i><span class="hide-menu"> Form Component History</span></a> </li>
                            <li> <a href="{{ url('/downtime/form') }}"><i class="mdi mdi-history"></i><span class="hide-menu"> Form Downtime</span></a> </li>
                            @if (auth()->user()->role == 'admin')
                            <li> <a href="{{ url('/crew/form') }}"><i class="mdi mdi-worker"></i><span class="hide-menu"> Form Karyawan</span></a> </li>
                            <li> <a href="{{ url('/sparepart/form') }}"><i class="mdi mdi-bug"></i><span class="hide-menu"> Form Sparepart</span></a> </li>
                            @endif
                        </ul>
                    </li>
                    <li> <a href="#" class="waves-effect"><i class="mdi mdi-folder"></i> <span class="hide-menu">Mutasi<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            @if (auth()->user()->role == 'admin')
                            <li> <a href="{{ url('/outcome') }}"><i class="mdi mdi-package-up"></i><span class="hide-menu"> Barang Keluar</span></a> </li>
                            <li> <a href="{{ url('/income') }}"><i class="mdi mdi-package-down"></i><span class="hide-menu"> Barang Masuk</span></a> </li>
                            @endif
                            <li> <a href="{{ url('/history') }}"><i class="mdi mdi-file-multiple"></i><span class="hide-menu"> Component History</span></a> </li>
                            <li> <a href="{{ url('/downtime') }}"><i class="mdi mdi-history"></i><span class="hide-menu"> Downtime</span></a> </li>
                        </ul>
                    </li>
                    {{-- <li> <a href="#" class="waves-effect"><i class="mdi mdi-chart-areaspline"></i> <span class="hide-menu">Report<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li> <a href="#"><i class="mdi mdi-file-multiple"></i><span class="hide-menu"> Monthly Report</span></a> </li>
                            <li> <a href="#"><i class="mdi mdi-file-multiple"></i><span class="hide-menu"> Yearly Report</span></a> </li>
                        </ul>
                    </li> --}}
                    <li class="devider"></li>
                </ul>
            </div>
        </div>
        <!-- End Left Sidebar -->
        <!-- ============================================================== -->
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                @yield('content')
                <!-- Right sidebar -->
                <div class="right-sidebar">
                    <div class="slimscrollright">
                        <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
                        <div class="r-panel-body">
                            <ul id="themecolors" class="m-t-20">
                                <li><b>With Light sidebar</b></li>
                                <li><a href="javascript:void(0)" theme="default" class="default-theme">1</a></li>
                                <li><a href="javascript:void(0)" theme="green" class="green-theme">2</a></li>
                                <li><a href="javascript:void(0)" theme="gray" class="yellow-theme">3</a></li>
                                <li><a href="javascript:void(0)" theme="blue" class="blue-theme">4</a></li>
                                <li><a href="javascript:void(0)" theme="purple" class="purple-theme">5</a></li>
                                <li><a href="javascript:void(0)" theme="megna" class="megna-theme">6</a></li>
                                <li><b>With Dark sidebar</b></li>
                                <br/>
                                <li><a href="javascript:void(0)" theme="default-dark" class="default-dark-theme">7</a></li>
                                <li><a href="javascript:void(0)" theme="green-dark" class="green-dark-theme">8</a></li>
                                <li><a href="javascript:void(0)" theme="gray-dark" class="yellow-dark-theme">9</a></li>
                                <li><a href="javascript:void(0)" theme="blue-dark" class="blue-dark-theme working">10</a></li>
                                <li><a href="javascript:void(0)" theme="purple-dark" class="purple-dark-theme">11</a></li>
                                <li><a href="javascript:void(0)" theme="megna-dark" class="megna-dark-theme">12</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center"> 2020 &copy; Saya Menggunakan Ample Admin by themedesigner.in </footer>
            {{-- <footer class="footer text-center" style="background-color: #ebc8b2; color: #000000"> 2020 &copy; Saya Menggunakan Ample Admin by themedesigner.in </footer> --}}
        </div>
        <!-- End Page Content -->
        <!-- ============================================================== -->
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="{{ asset('assets/plugins/bower_components/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('assets/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="{{ asset('assets/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js')}}"></script>
    <!--slimscroll JavaScript -->
    <script src="{{ asset('assets/js/jquery.slimscroll.js')}}"></script>
    <!--Wave Effects -->
    <script src="{{ asset('assets/js/waves.js')}}"></script>
    <!-- Custom Theme JavaScript -->
    <script src="{{ asset('assets/js/custom.min.js')}}"></script>
    <!-- Magnific popup JavaScript -->
    <script src="{{ asset('assets/plugins/bower_components/Magnific-Popup-master/dist/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{ asset('assets/plugins/bower_components/Magnific-Popup-master/dist/jquery.magnific-popup-init.js')}}"></script>

    <script src="{{ asset('assets/plugins/bower_components/datatables/jquery.dataTables.min.js')}}"></script>
    <!-- start - This is for export functionality only -->
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
    <script src="{{ asset('assets/plugins/bower_components/custom-select/custom-select.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/plugins/bower_components/bootstrap-select/bootstrap-select.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/plugins/bower_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js')}}"></script>
    <script src="{{ asset('assets/plugins/bower_components/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js')}}" type="text/javascript"></script>

<script>
    $(document).ready(function () {
        $('#myTable').DataTable();
        $('#myTables').DataTable();
        $(document).ready(function () {
            var table = $('#example').DataTable({
                "columnDefs": [
                    {
                        "visible": false
                        , "targets": 2
                    }
                ]
                , "order": [[2, 'asc']]
                , "displayLength": 25
                , "drawCallback": function (settings) {
                    var api = this.api();
                    var rows = api.rows({
                        page: 'current'
                    }).nodes();
                    var last = null;
                    api.column(2, {
                        page: 'current'
                    }).data().each(function (group, i) {
                        if (last !== group) {
                            $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                            last = group;
                        }
                    });
                }
            });
            // Order by the grouping
            $('#example tbody').on('click', 'tr.group', function () {
                var currentOrder = table.order()[0];
                if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                    table.order([2, 'desc']).draw();
                }
                else {
                    table.order([2, 'asc']).draw();
                }
            });
        });
    });
    $('#example23').DataTable({
        dom: 'Bfrtip'
        , buttons: [
        'copy', 'csv', 'excel', 'pdf', 'print'
    ]
    });

    // Untuk Select Advance
    jQuery(document).ready(function () {
        // Switchery
        var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
        $('.js-switch').each(function () {
            new Switchery($(this)[0], $(this).data());
        });
        // For select 2
        $(".select2").select2();
        $('.selectpicker').selectpicker();
        //Bootstrap-TouchSpin
        $(".vertical-spin").TouchSpin({
            verticalbuttons: true
            , verticalupclass: 'ti-plus'
            , verticaldownclass: 'ti-minus'
        });
        var vspinTrue = $(".vertical-spin").TouchSpin({
            verticalbuttons: true
        });
        if (vspinTrue) {
            $('.vertical-spin').prev('.bootstrap-touchspin-prefix').remove();
        }
        $("input[name='tch1']").TouchSpin({
            min: 0
            , max: 100
            , step: 0.1
            , decimals: 2
            , boostat: 5
            , maxboostedstep: 10
            , postfix: '%'
        });
        $("input[name='tch2']").TouchSpin({
            min: -1000000000
            , max: 1000000000
            , stepinterval: 50
            , maxboostedstep: 10000000
            , prefix: '$'
        });
        $("input[name='tch3']").TouchSpin();
        $("input[name='tch3_22']").TouchSpin({
            initval: 40
        });
        $("input[name='tch5']").TouchSpin({
            prefix: "pre"
            , postfix: "post"
        });
    });

</script>
    <!--Style Switcher -->
    <script src="{{ asset('assets/plugins/bower_components/styleswitcher/jQuery.style.switcher.js')}}"></script>
</body>
</html>
