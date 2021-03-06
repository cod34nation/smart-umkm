<?php
    session_start();
    include '../../koneksi.php';
    if (empty($_SESSION['identitas'])){
    header("location:../login.php");
    }
    ?>

    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>ADMIN | SMART UMKM </title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.5 -->
        <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- DataTables -->
        <link rel="stylesheet" href="../../plugins/datatables/dataTables.bootstrap.css">
        <!-- jvectormap -->
        <link rel="stylesheet" href="../../plugins/jvectormap/jquery-jvectormap-1.2.2.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
    folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    </head>

    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">

            <header class="main-header">

                <!-- Logo -->
                <a href="index.php" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini"><b>A</b>SUMK</span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg"><b>Admin </b>SMART UMKM</span>
                </a>

                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top" role="navigation">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                    </a>
                    <!-- Navbar Right Menu -->
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">


                            <!-- User Account: style can be found in dropdown.less -->
                            <li class="dropdown user user-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="../../dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                                    <span class="hidden-xs">Alexander Pierce</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- User image -->
                                    <li class="user-header">
                                        <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                                        <p>
                                            Alexander Pierce - Web Developer
                                            <small>Member since Nov. 2012</small>
                                        </p>
                                    </li>

                                    <!-- Menu Footer-->
                                    <li class="user-footer">

                                        <div class="pull-right">
                                            <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>

                        </ul>
                    </div>

                </nav>
            </header>
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="main-sidebar">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                        </div>
                        <div class="pull-left info">
                            <p>Alexander Pierce</p>
                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>

                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li class="header">MAIN NAVIGATION</li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-dashboard"></i> <span>Beranda</span>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-pie-chart"></i>
                                <span>Muamalat</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="muamalatUtama.php"><i class="fa fa-circle-o"></i> Posting Muamalat</a></li>
                                <li><a href="muamalat.php"><i class="fa fa-circle-o"></i> Buat Posting</a></li>
                            </ul>
                        </li>
                        <li class=" treeview">
                            <a href="#">
                                <i class="fa fa-pie-chart"></i>
                                <span>Emas dan Zakat</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="pages/emaszakat.php"><i class="fa fa-circle-o"></i> Lihat</a></li>
                                <li><a href="add_emaszakat.php"><i class="fa fa-circle-o"></i> Tambah </a></li>
                            </ul>
                        </li>
                        <li class="active treeview">
                            <a href="#">
                                <i class="fa fa-pie-chart"></i>
                                <span>BMT</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="pages/bmt.php"><i class="fa fa-circle-o"></i> Lihat</a></li>
                                <li><a href="pages/add_bmt.php"><i class="fa fa-circle-o"></i> Tambah </a></li>

                            </ul>
                        </li>
                        <li>
                            <a href="pages/tables/user.php">
                                <i class="fa fa-calendar"></i> <span>User</span>
                                <!--                <small class="label pull-right bg-red">3</small>-->
                            </a>
                        </li>
                        <li class=" treeview">
                            <a href="#">
                                <i class="fa fa-dollar"></i>
                                <span>Keuangan</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="pages/rekap.php"><i class="fa fa-circle-o"></i>Satu Tahun</a></li>
                                <li><a href="pages/bulanan.php"><i class="fa fa-circle-o"></i> Satu Bulan </a></li>
                            </ul>
                        </li>
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
    Data BMT Malang
    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">USER</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <!-- Info boxes -->
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Data BMT Malang</h3>
                                </div>
                                <!-- /.box-header -->
                                <div class="col-xs-12">
                                    <!--Modal Mulai -->
                                    <input class="btn btn-success" type="submit" value="Tambah" data-toggle="modal" data-target="#TambahBMT">
                                </div>

                                <!-- Modal -->
                                <div class="modal fade" id="TambahBMT" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Tambah Data BMT</h4>
                                            </div>
                                            <div class="modal-body">
                                                <section class="content">
                                                    <table class="table table-striped">
                                                        <tbody>
                                                            <div class="form-group">
                                                                <label>ID BMT</label>
                                                                <input type="hidden" class="form-control" name="id" id="id" value="<?php echo $id2;?>">
                                                                <br>
                                                                <h4><b><?php echo $id2;?></b></h4>
                                                                <br>
                                                            </div>

                                                            <div class="form-group">
                                                                <label>Nama BMT</label>
                                                                <input type="text" class="form-control" name="nama" id="nama">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Alamat BMT</label>
                                                                <input type="text" class="form-control" name="alamat" id="alamat">
                                                            </div>

                                                            <div class="form-group">
                                                                <label>No Telp BMT</label>
                                                                <input type="text" class="form-control" name="no" id="no">
                                                            </div>


                                                            <center>
                                                                <br>
                                                                <button type="submit" class="btn btn-primary">Tambah</button>

                                                                <a href="bmt.php">
                                                                    <button type="button" class="btn btn-primary">Kembali</button>
                                                                </a>
                                                            </center>
                                                        </tbody>
                                                    </table>

                                                </section>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Akhir Modal -->
                                <div class="box-body">
                                    <table id="example2" class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th> NO</th>
                                                <th>NAMA BMT</th>
                                                <th>ALAMAT</th>
                                                <th>TELP</th>
                                                <th>ACTION</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $urut = (isset($_GET['urut']) ? strtolower($_GET['urut']) : NULL);  ?>
                                                <?php
        if($urut){
            $sql = mysqli_query($koneksi, "SELECT * FROM  WHERE status='$urut' ORDER BY id_user ASC");
        }else{
            $sql = mysqli_query($koneksi, "SELECT * FROM login ORDER BY id_user ASC");
        }
        if(mysqli_num_rows($sql) == 0){
            echo '<tr><td colspan="8">Tidak ada data.</td></tr>';
        }else{
            $no = 1;
            while($row = mysqli_fetch_assoc($sql)){
                echo '
                <tr>
                    <td>'.$no.'</td>
                    <td>'.$row['id_user'].'</td>
                    <td>'.$row['nama_umkm'].'</td>
                    <td>'.$row['nama_pemilik'].'</td>
                    <td>'.$row['alamat'].'</td>
                    <td>'.$row['jenis_usaha'].'</td>
                    <td>';

                echo '
                    </td>
                </tr>
                ';
                $no++;
            }
        }
        ?>


                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.box-body -->
                            </div>
                            <!-- /.box -->
                        </div>
                    </div>

                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->

            <footer class="main-footer">
                <div class="pull-right hidden-xs">
                    <b>Version</b> 2.3.0
                </div>
                <strong>Copyright &copy; 2014-2015 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights reserved.
            </footer>


            <!-- Add the sidebar's background. This div must be placed
    immediately after the control sidebar -->
            <div class="control-sidebar-bg"></div>

        </div>
        <!-- ./wrapper -->

        <!-- jQuery 2.1.4 -->
        <script src="../../plugins/jQuery/jQuery-2.1.4.min.js"></script>
        <!-- Bootstrap 3.3.5 -->
        <script src="../../bootstrap/js/bootstrap.min.js"></script>
        <!-- DataTables -->
        <script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="../../plugins/datatables/dataTables.bootstrap.min.js"></script>
        <!-- SlimScroll -->
        <script src="../../plugins/slimScroll/jquery.slimscroll.min.js"></script>
        <!-- FastClick -->
        <script src="../../plugins/fastclick/fastclick.min.js"></script>
        <!-- AdminLTE App -->
        <script src="../../dist/js/app.min.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="../../dist/js/demo.js"></script>
        <!-- page script -->
        <script>
            $(function () {
                $("#example1").DataTable();
                $('#example2').DataTable({
                    "paging": true,
                    "lengthChange": false,
                    "searching": false,
                    "ordering": true,
                    "info": true,
                    "autoWidth": false
                });
            });
        </script>
    </body>

    </html>