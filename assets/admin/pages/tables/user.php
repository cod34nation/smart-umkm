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
                        <li class=" treeview">
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
                        <li class="active treeview">
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
            USER UMKM
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
                                    <h3 class="box-title">Data User SMART UMKM</h3>
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body">

                                    <?php
			if(isset($_GET['aksi']) == 'delete'){
				$id_user = $_GET['id_user'];
				$cek = mysqli_query($koneksi, "SELECT * FROM login WHERE id_user='$id_user'");
				if(mysqli_num_rows($cek) == 0){
					echo '<div class="alert alert-info">Data tidak ditemukan.</div>';
				}else{
					$delete = mysqli_query($koneksi, "DELETE FROM login WHERE id_user='$id_user'");
					if($delete){
						echo '<div class="alert alert-danger">Data berhasil dihapus.</div>';
					}else{
						echo '<div class="alert alert-info">Data gagal dihapus.</div>';
					}
				}
			}
			?>
                                        <!-- Cari -->
                                        <form class="form-inline">
                                            <div class="form-group">
                                                <form method="GET" action="">
                                                    <input type="text" class="form-control" name="query" placeholder="Masukkan Parameter" />
                                                    <select name="pencarian" id="pencarian" class="form-control">
                                                        <option value=""> - Cari berdasarkan -
                                                            <option value="id_user">ID
                                                                <option value="nama_umkm">Nama
                                                                    <option value="nama_pemilik">Pemilik
                                                                        <option value="alamat">Alamat
                                                    </select>
                                                    <input type="submit" name="cari" class="btn btn-warning" value="Cari" />
                                                </form>

                                            </div>
                                            <div class="form-group">
                                                <select name="urut" class="form-control" onchange="form.submit()">
                                                    <option value="0">==SEMUA DATA==</option>
                                                    <?php $urut = (isset($_GET['urut']) ? strtolower($_GET['urut']) : NULL);  ?>
                                                        <option value="1" <?php if($urut=='1' ){ echo 'selected'; } ?>>MANUFAKTUR</option>
                                                        <option value="2" <?php if($urut=='2' ){ echo 'selected'; } ?>>DAGANG BARANG</option>
                                                        <option value="3" <?php if($urut=='3' ){ echo 'selected'; } ?>>JASA</option>
                                                </select>
                                            </div>
                                        </form>

                                        <!--cari selesai -->

                                        <!-- jika menghapus muncul -->


                                </div>
                                <!-- /.box-header -->

                                <div class="table-responsive">
                                    <table class="table table-striped table-hover">
                                        <tr>
                                            <th>N0</th>
                                            <th>ID UMKM</th>
                                            <th>NAMA UMKM</th>
                                            <th>NAMA PEMILIK</th>
                                            <th>ALAMAT</th>
                                            <th>JENIS USAHA</th>
                                            <th>AKSI</th>
                                        </tr>
                                        <?php
				if($urut){
					$sql = mysqli_query($koneksi, "SELECT * FROM id_user WHERE status='$urut' ORDER BY id_user ASC");
				}
				elseif (isset($_GET['cari'])) {
				$pencarian1			= $_GET['pencarian'];
				$query1				= $_GET['query'];
				//echo $pencarian1.$query1;
				$sql = mysqli_query($koneksi, "SELECT * FROM login WHERE $pencarian1 like '%$query1%' ORDER BY id_user ASC") or die(mysqli_error());
				}
				else{
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
							if($row['status'] == 1){
								echo '<span class="label label-success">Aktif</span>';
							}else{
								echo '<span class="label label-warning">Tidak Aktif</span>';
							}
						echo '
							</td>
							<td>
								<a href="index.php?aksi=delete&id_user='.$row['nis'].'" title="Hapus Data" onclick="return confirm(\'Yakin Ingin Menghapus?\')"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
							</td>
						</tr>
						';
						$no++;
					}
				}
				?>
                                    </table>
                                </div>

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