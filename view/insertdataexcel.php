<!-- Thêm mới sách và upload file excel -->
<div class="form-group col-md-2">
                                        <div>
                                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                                data-target="#form">
                                                Thêm Mới
                                            </button>
                                        </div>

                                        <div class="modal fade" id="form" tabindex="-1" role="dialog"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header border-bottom-0">
                                                        <h5 class="modal-title" id="exampleModalLabel">Tạo Mới Sản Phẩm Sách
                                                        </h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>

                                                    <form action="../controller/sach.php" method="POST"
                                                        enctype="multipart/form-data">
                                                        <div class="modal-body">
                                                            <div class="form-group">
                                                                <label for="email1">Name</label>
                                                                <input type="text" class="form-control" id="name" required
                                                                    aria-describedby="emailHelp" placeholder="Enter name"
                                                                    name="name">

                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <label for="">Thể Loại</label>
                                                                <select id="theloai" class="form-control" name="theloai">
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
                                                            <div class="form-group">
                                                                <label for="">Ngày Nhập Kho:</label>
                                                                <input type="date" class="form-control" id="ngaynhapkho"
                                                                    placeholder="" required name="ngaynhapkho">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="">Số Lượng:</label>
                                                                <input type="number" class="form-control" id="soluong"
                                                                    placeholder="" required name="soluong">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="">Giá:</label>
                                                                <input type="number" class="form-control" id="gia"
                                                                    placeholder="" required name="gia">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="">IMG :</label>
                                                                <input type="file" class="form-control" required name="img">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="inputState">Mô Tả</label>
                                                                <textarea class="form-control" placeholder=""
                                                                    id="floatingTextarea2" style="height: 100px" required
                                                                    name="mota"></textarea>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="modal-footer border-top-0 d-flex justify-content-center">

                                                            <input type="submit" class="btn btn-primary" name="uploadclick"
                                                                value="Tạo Sách">
                                                        </div>
                                                    </form>


                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group col-md-3">

                                        <div class="input-group">
                                            <form action="../controller/nhapexcel.php" method="POST"
                                                enctype="multipart/form-data">
                                                <div class="row">
                                                    <div class="col-md-11">
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input" name="import_file">
                                                            <label class="custom-file-label" for="customFile">Choose
                                                                file</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-1">
                                                        <button type="submit" class="btn btn-primary"
                                                            style="margin-left: -25px; width: 95px"
                                                            name="save_excel_data">Nhập File</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    