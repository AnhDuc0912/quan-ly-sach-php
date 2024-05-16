<?php
session_start();
include "../model/conn.php";
if (isset($_SESSION['login']['username']) && $_SESSION['login']['username']) {
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Document</title>

        <!-- Custom fonts for this template-->
        <link href="../view/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

        <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet">

        <!-- Custom styles for this template-->
        <link href="css/sb-admin-2.min.css" rel="stylesheet">
        <link rel="stylesheet" href="css/index.css">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    </head>

    <body id="page-top">

        <!-- Page Wrapper -->
        <div id="wrapper">

            <!-- Sidebar -->
            <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

                <!-- Sidebar - Brand -->
                <a class="sidebar-brand d-flex align-items-center justify-content-center"
                    href="http://localhost:8080/doantn/view/index.php">
                    <div class="sidebar-brand-icon rotate-n-15">

                    </div>
                    <div class="sidebar-brand-text mx-3">HoangHa</div>
                </a>

                <!-- Divider -->
                <hr class="sidebar-divider my-0">

                <!-- Nav Item - Dashboard -->
                <li class="nav-item active">
                <a class="nav-link" href="index.php">

                    <span>Tổng Quan</span></a>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">

                    <span>Đơn Hàng</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">

                        
                        <a class="collapse-item" href="danhsachdonhang.php">Danh Sách Đơn Hàng</a>
                        <a class="collapse-item" href="nhapnguonhang.php">Tạo/Nhập Nguồn Hàng</a>
                        <a class="collapse-item" href="dsnhapnguonhang.php">DS Nhập Nguồn Hàng</a>
                        <a class="collapse-item" href="nhacungcap.php">Nhà Cung Cấp</a>
                    </div>
                </div>
            </li>

            </li>
            <li class="nav-item">
                <a class="nav-link" href="listsach.php">

                    <span>Sản Phẩm Sách</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapse" aria-expanded="true"
                    aria-controls="collapse">

                    <span>Khách Hàng</span>
                </a>
                <div id="collapse" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">

                        <a class="collapse-item" href="danhsachkhachhang.php">Danh Sách Khách Hàng</a>
                        <a class="collapse-item" href="nhomkhachhang.php">Nhóm Khách Hàng</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="baocao.php">

                    <span>Báo Cáo</span></a>
            </li>


                <!-- Divider -->
                <hr class="sidebar-divider d-none d-md-block">

                <!-- Sidebar Toggler (Sidebar) -->
                <div class="text-center d-none d-md-inline">
                    <button class="rounded-circle border-0" id="sidebarToggle"></button>
                </div>



            </ul>
            <!-- End of Sidebar -->

            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">

                <!-- Main Content -->
                <div id="content">

                    <!-- Topbar -->
                    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                        <!-- Sidebar Toggle (Topbar) -->
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>

                        <!-- Topbar Search -->


                        <!-- Topbar Navbar -->
                        <ul class="navbar-nav ml-auto">

                            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                            <li class="nav-item dropdown no-arrow d-sm-none">
                                <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-search fa-fw"></i>
                                </a>
                                <!-- Dropdown - Messages -->
                                <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                    aria-labelledby="searchDropdown">
                                    <form class="form-inline mr-auto w-100 navbar-search">
                                        <div class="input-group">
                                            <input type="text" class="form-control bg-light border-0 small"
                                                placeholder="Search for..." aria-label="Search"
                                                aria-describedby="basic-addon2">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="button">
                                                    <i class="fas fa-search fa-sm"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </li>



                            <!-- Nav Item - User Information -->
                            <li class="nav-item dropdown no-arrow">
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="mr-2 d-none d-lg-inline text-gray-600 small"></span>
                                    <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                                </a>
                                <!-- Dropdown - User Information -->
                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                    aria-labelledby="userDropdown">
                                    <a class="dropdown-item" href="profile">
                                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                        <?php echo $_SESSION['login']['username']; ?>
                                    </a>
                                    <a class="dropdown-item" href="settings">
                                        <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Settings
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="../index.php" name="logout" value="Logout">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Logout
                                        <?php
                                        if (isset($_POST['logout']) && $_POST['logout']) {
                                            unset($_SESSION['login']['username']);
                                            header("location: ../index.php");
                                        }
                                        ?>
                                    </a>
                                </div>
                            </li>

                        </ul>

                    </nav>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xl-9 col-lg-9">
                                <div class="card shadow mb-4">
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-primary">List Sách</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-row">

                                            <div class="form-group col-md-5">
                                                <form action="listsach.php" method="GET">
                                                    <label for="">Search:</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" name="search" value="<?php if (isset($_GET['search'])) {
                                                            echo $_GET['search'];
                                                        }

                                                        ?>" required>
                                                        <div class="input-group-append">
                                                            <input type="submit" class="btn btn-primary" value="Search">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>

                                        <div class="table-responsive">
                                            <table class="table table-bordered" width="100%" cellspacing="0" id="table">
                                                <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Tên Sách</th>
                                                        <th>Thể Loại</th>
                                                        <th>Ngày Nhập Kho</th>
                                                        <th>Số Lượng</th>
                                                        <th>Giá Bán</th>

                                                        <th style="width: 200px; text-align: center;">Action</th>
                                                    </tr>
                                                </thead>
                                                <?php
                                                if (isset($_GET['search'])) {
                                                    // Xử lý search
                                                    $search = $_GET['search'];
                                                    $sql = "SELECT * FROM `sach` WHERE sach.name LIKE '%$search%' or sach.gia like '%$search%'";
                                                }
                                                elseif (isset($_POST['filterdata'])) {
                                                    // Xử lý lọc dữ liệu
                                                    $theloai = $_POST['theloai'];
                                                    $date = $_POST['date'];
                                                    // echo $theloai;
                                                    // echo '<br>';
                                                    // echo $date;
                                                    if(empty($date)){
                                                        // Trường date rỗng
                                                        $sql = "SELECT * FROM `sach` WHERE sach.id_theloai = '$theloai' GROUP BY id";
                                                    }else {
                                                        $sql = "SELECT * FROM `sach` WHERE sach.id_theloai = $theloai AND sach.ngaynhapkho = '$date' GROUP BY id";
                                                    }
                                                }
                                                
                                                else {
                                                    // Xử lí phân trang
                                                    $item_per_page = !empty($_GET['per_page']) ? $_GET['per_page'] : 10;
                                                    $current_page = !empty($_GET['page']) ? $_GET['page'] : 1;
                                                    $offset = ($current_page - 1) * 10;
                                                    $sql = "SELECT * FROM sach INNER JOIN theloai ON sach.id_theloai AND theloai.id GROUP BY sach.id ASC LIMIT " . $item_per_page . " OFFSET " . $offset . " ";
                                                    $sql_totalsach = "SELECT * FROM sach";
                                                    $totalsach = mysqli_query($conn, $sql_totalsach);
                                                    $totalsach = (mysqli_num_rows($totalsach));
                                                    $totalpage = ceil($totalsach / $item_per_page);
                                                }
                                                $result = mysqli_query($conn, $sql);
                                                if (mysqli_num_rows($result) > 0) {
                                                    while ($row = mysqli_fetch_array($result)) {


                                                        ?>
                                                        <tbody id="listbook">
                                                            <tr>
                                                                <td><?php echo $row[0]; ?></td>
                                                                <td><?php echo $row[1]; ?></td>
                                                                <td><a
                                                                        href="nhomtheloai.php?idtheloai=<?php echo $row['id_theloai']; ?>"><?php echo $row['id_theloai']; ?></a>
                                                                </td>
                                                                <td><?php echo $row[4]; ?></td>
                                                                <td><?php echo $row['soluong']; ?></td>
                                                                <td><?php echo $row['gia']; ?></td>

                                                                <td><a href="sachdetail.php?id=<?php echo $row[0]; ?>"
                                                                        name="sachdetail" class="btn btn-primary">Xem</a>
                                                                    <a href="sualistsach.php?id=<?php echo $row[0]; ?>"
                                                                        name="sualistsach" class="btn btn-secondary">Sửa</a>
                                                                    <a onclick="return confirm('Xác Nhận Xóa ?')"
                                                                        href="../controller/xoalistsach.php?id=<?php echo $row[0]; ?>"
                                                                        class="btn btn-danger">Xóa</a>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                        <?php
                                                    }
                                                }
                                                ?>
                                            </table>
                                            <ul class="pagination nav2">
                                                <?php
                                                if (!isset($_GET['search']) && !isset($_POST['filterdata'])) {
                                                    for ($num = 1; $num <= $totalpage; $num++) {


                                                        ?>
                                                        <li class="page-item"><a class="page-link"
                                                                href="?per_page=<?= $item_per_page ?>&page=<?= $num; ?>"><?= $num; ?></a>
                                                        </li>
                                                        <?php
                                                    }
                                                }
                                                ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3">
                                <div class="card shadow mb-4">
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-primary">Lọc Dữ Liệu</h6>
                                    </div>
                                    <div class="row">
                                        <form action="listsach.php" method="post">
                                            <div class="col-md-12">
                                                <h6 class="ml-2 mt-2 font-weight-bold">Thể Loại</h6>
                                                <select id="theloai" name="theloai" class="form-control">
                                                    <?php
                                                    $sqlSelecttheloai = "SELECT * FROM theloai";
                                                    $result = mysqli_query($conn, $sqlSelecttheloai);
                                                    if (mysqli_num_rows($result) > 0) {
                                                        while ($row = mysqli_fetch_array($result)) {
                                                            ?>
                                                            <option value="<?php echo $row['id'] ?>">
                                                                <?php echo $row['name'] ?>
                                                            </option>
                                                            <?php
                                                        }
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="col-md-12">
                                                <h6 class="ml-2 mt-2 font-weight-bold">Ngày Nhập</h6>
                                                <div class="list-group">
                                                    <div class="form-group col-md-12">

                                                        <input type="date" id="date" name="date" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <button type="submit" class="btn btn-primary"
                                                            name="filterdata">Lọc</button>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <a href="listsach.php" class="btn btn-secondary">Reset</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>



                    </div>
                    <!-- Footer -->
                    <footer class="sticky-footer bg-white">
                        <div class="container my-auto">
                            <div class="copyright text-center my-auto">
                                <span>Copyright &copy; Website 2024</span>
                            </div>
                        </div>
                    </footer>
                    <!-- End of Footer -->

                </div>
                <!-- End of Content Wrapper -->

            </div>
            <!-- End of Page Wrapper -->

            <!-- Scroll to Top Button-->
            <a class="scroll-to-top rounded" href="#page-top">
                <i class="fas fa-angle-up"></i>
            </a>

            <!-- Logout Modal-->

        </div>

        <!-- Bootstrap core JavaScript-->
        <script src="../view/vendor/jquery/jquery.min.js"></script>
        <script src="../view/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="../view/vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="js/sb-admin-2.min.js"></script>
        <!-- Page level plugins -->
        <script src="../view/vendor/chart.js/Chart.min.js"></script>

        <!-- Page level custom scripts -->
        <script src="js/demo/chart-area-demo.js"></script>
        <script src="js/demo/chart-pie-demo.js"></script>
        <script src="js/demo/chart-bar-demo.js"></script>
        <script src="../view/vendor/datatables/jquery.dataTables.min.js"></script>
        <script src="../view/vendor/datatables/dataTables.bootstrap4.min.js"></script>
        <script src="js/demo/datatables-demo.js"></script>
        <script src="js/filterdata.js"></script>
    </body>

    </html>
    <?php
} else {
    header("location: ../index.php");
}
?>