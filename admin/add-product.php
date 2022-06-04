<?php include('partiels/menu.php'); ?>

<div class="main-content">
    <div class="wrapper">
        <h1>Add Product</h1>

        <br><br>

        <?php
        if (isset($_SESSION['upload'])) {
            echo $_SESSION['upload'];
            unset($_SESSION['upload']);
        }
        ?>

        <form action="" method="POST" enctype="multipart/form-data">

            <table class="tbl-30">

                <tr>
                    <td>Title: </td>
                    <td>
                        <input type="text" name="title" placeholder="Title of the Food">
                    </td>
                </tr>

                <tr>
                    <td>Description: </td>
                    <td>
                        <textarea name="description" cols="30" rows="5" placeholder="Description of the Food."></textarea>
                    </td>
                </tr>

                <tr>
                    <td>Price: </td>
                    <td>
                        <input type="number" name="price">
                    </td>
                </tr>

                <tr>
                    <td>Select Image: </td>
                    <td>
                        <input type="file" name="image">
                    </td>
                </tr>

                <tr>
                    <td>Category: </td>
                    <td>
                        <select name="category">

                            <?php
                            //Create PHP Code to display categories from Database
                            //1. Create SQL to get all active categories from database
                            $sql = "SELECT * FROM tbl_category WHERE active='Yes'";

                            //Executing query
                            $res = mysqli_query($conn, $sql);

                            //Count Rows to check whether we have categories or not
                            $count = mysqli_num_rows($res);

                            //If count is greater than zero, we have categories else we do not have categories
                            if ($count > 0) {
                                //We have categories
                                while ($row = mysqli_fetch_assoc($res)) {
                                    //get the details of categories
                                    $id = $row['id'];
                                    $title = $row['title'];

                            ?>
                                    <option value="<?php echo $id; ?>"><?php echo $title; ?></option>
                                <?php
                                }
                            } else {
                                //We do not have category
                                ?>
                                <option value="0">No Category Found</option>
                            <?php
                            }

                            //2. Display on Dropdown
                            ?>

                        </select>
                    </td>
                </tr>

                <tr>
                    <td>Featured: </td>
                    <td>
                        <input type="radio" name="featured" value="Yes"> Yes
                        <input type="radio" name="featured" value="No"> No
                    </td>
                </tr>

                <tr>
                    <td>Active: </td>
                    <td>
                        <input type="radio" name="active" value="Yes"> Yes
                        <input type="radio" name="active" value="No"> No
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Add Food" class="btn-secondary">
                    </td>
                </tr>

            </table>

        </form>

        <?php

        //Check whether the button is clicked or not
        if (isset($_POST['submit'])) {
            //Add the Food in Database
            //echo "clicked";

            //1. Get the Data from form - lay du lieu tu bieu mau
            $title = $_POST['title'];
            $description = $_POST['description'];
            $price = $_POST['price'];
            $category = $_POST['category'];

            //Check whether radio button for featured and active are check or not - kiem tra radio cho cac tinh nang co hoat dong hay khong
            if (isset($_POST['featured'])) {
                $featured = $_POST['featured'];
            } else {
                $featured = "No"; //Setting the Default Value - dat gia tri mac dinh
            }

            if (isset($_POST['active'])) {
                $active = $_POST['active'];
            } else {
                $active = "No"; //Setting Default Value
            }

            //2. Upload the Image if selected 
            //Check whether the select image is clicked or not and upload the image only if the image is selected - Kiểm tra xem hình ảnh đã chọn có được nhấp vào hay không và chỉ tải hình ảnh lên nếu hình ảnh được chọn
            if (isset($_FILES['image']['name'])) {
                //Get the details of the selected image - nhan thong tin chi tiet cua hinh anh da chon
                $image_name = $_FILES['image']['name'];

                //Check whether the image is selected or not and upload image only if selected - kiem tra xem hinh anh co duoc chon hay khong va chi tai len neu duoc chon
                if ($image_name != "") {
                    //Image is selected - hinh anh duoc chon
                    //A. Rename the Image - doi ten hinh anh
                    //Get the extension of selected image (ipg, png, gif, etc) - nhan phan mo rong hinh anh da chon
                    $ext = end(explode('.', $image_name));

                    //Create New Name for Image - tao ten moi cho hinh anh
                    $image_name = "Food-Name-" . rand(0000, 9999) . "." . $ext;

                    //B. Upload the Image
                    //Get the Src Path and Destination path - nhan duong dan src va duong dan dich

                    //Source path is the current location of the image - duong dan nguon la vi tri hien tai cua hinh anh
                    $src = $_FILES['image']['tmp_name'];

                    //Destination Path for the image to be uploaded - duong dan dich cho hinh anh duoc tai len
                    $dst = "../image/food/" . $image_name;

                    //Finally Upload the food image - tai len hinh anh mon an
                    $upload = move_uploaded_file($src, $dst);

                    //Check whether image uploaded of not - kiem tra xem hinh anh co duoc tai len hay khong
                    if ($upload == false) {
                        //Failed to Upload the Image - tai len duoc hinh anh loi
                        //Redirect to Add Food Page with Error Message - chuyen huong den trang Add Food va thong bao loi
                        $_SESSION['upload'] = "<div class='error'>Failed to Upload Image.</div>";
                        header('location:' . SITEURL . 'admin/add-food.php');
                        //Stop the process - ket thuc qua trinh
                        die();
                    }
                }
            } else {
                $image_name = ""; // Setting Default Value as blank - dat gia tri mac dinh la trong
            }

            //3. Insert into Database - chen co so du lieu

            //Create a SQL Query to Save or Add food - tao truy van SQL de luu hoac them do an
            //For Numerical we do not need to pass value inside quotes '' But for string value it is compulsory to add quotes '' - Đối với Numerical, chúng ta không cần phải chuyển giá trị vào bên trong dấu ngoặc kép '' Nhưng đối với giá trị chuỗi thì bắt buộc phải thêm dấu ngoặc kép
            $sql2 = "INSERT INTO tbl_food SET
                title = '$title',
                description = '$description',
                price = $price, 
                image_name = '$image_name',
                category_id = $category,
                featured = '$featured',
                active = '$active'
            ";

            //Execute the Query - thuc hien truy van
            $res2 = mysqli_query($conn, $sql2);
            //Check whether data inserted or not - kiem tra xem du lieu da duoc chen hay chua
            //4. Redirect with Message to Manage Food Page - chuyen huong voi tin nhan de quan ly trang
            if ($res2 == true) {
                //Data inserted successfully
                $_SESSION['add'] = "<div class='success'>Food Added Successfully.</div>";
                header('location:' . SITEURL . 'admin/manage-food.php');
            } else {
                //Failed to insert data
                $_SESSION['add'] = "<div class='error'>Failed to Add Food.</div>";
                header('location:' . SITEURL . 'admin/manage-food.php');
            }
        }

        ?>
    </div>
</div>

<?php include('partiels/footer.php'); ?>