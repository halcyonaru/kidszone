<?php include('partiels/menu.php'); ?>

<div class="main-content">
    <div class="wrapper">
        <h1>Manage Product</h1>

        <br> <br>

        <!-- Button to Add Admin -->
        <a href="<?php echo SITEURL; ?>admin/add-food.php" class="btn-primary">Add Product</a>

        <br> <br> <br>

        <?php

        if (isset($_SESSION['add'])) {
            echo $_SESSION['add'];
            unset($_SESSION['add']);
        }

        if (isset($_SESSION['delete'])) {
            echo $_SESSION['delete'];
            unset($_SESSION['delete']);
        }

        if (isset($_SESSION['upload'])) {
            echo $_SESSION['upload'];
            unset($_SESSION['upload']);
        }

        if (isset($_SESSION['unauthorize'])) {
            echo $_SESSION['unauthorize'];
            unset($_SESSION['unauthorize']);
        }

        if (isset($_SESSION['update'])) {
            echo $_SESSION['update'];
            unset($_SESSION['update']);
        }

        ?>

        <table class="tbl-full">
            <tr>
                <th>S.N.</th>
                <th>Title</th>
                <th>Price</th>
                <th>Image</th>
                <th>Featured</th>
                <th>Active</th>
                <th>Actions</th>
            </tr>

            <?php
            //Create a SQL Query to Get all the Food - tao truy van sql
            $sql = "SELECT * FROM tbl_food";

            //Execute the Query - thuc hien truy van
            $res = mysqli_query($conn, $sql);

            //Count Rows to check whether we have foods or not - kiem tra xem co do an hay khong
            $count = mysqli_num_rows($res);

            //Create Serial Number Variable and set Default Value as 1 - tao sn va dat gia tri bang 1
            $sn = 1;

            if ($count > 0) {
                //We have food in database - thuc pham co trong du lieu
                //Get the Foods from Database and Display - lay food tu data va hien thi
                while ($row = mysqli_fetch_assoc($res)) {
                    //Get the values from individual columns - nhan gia tri tu cac cot rieng le
                    $id = $row['id'];
                    $title = $row['title'];
                    $price = $row['price'];
                    $image_name = $row['image_name'];
                    $featured = $row['featured'];
                    $active = $row['active'];
            ?>

                    <tr>
                        <td><?php echo $sn++; ?>. </td>
                        <td><?php echo $title; ?></td>
                        <td>$<?php echo $price; ?></td>
                        <td>
                            <?php
                            //Check whether we have image or not - kiem tra xem co hinh anh hay khong
                            if ($image_name == "") {
                                //We do not have image, Display Error Message - neu khong co hinh anh, hien thi thong bao loi
                                echo "<div class='error'>Image not Added.</div>";
                            } else {
                                //We have image, Display image
                            ?>
                                <img src="<?php echo SITEURL; ?>image/food/<?php echo $image_name; ?>" width="100px">
                            <?php
                            }
                            ?>
                        </td>
                        <td><?php echo $featured; ?></td>
                        <td><?php echo $active; ?></td>
                        <td>
                            <a href="<?php echo SITEURL; ?>admin/update-food.php?id=<?php echo $id; ?>" class="btn-secondary">Update Food</a>
                            <a href="<?php echo SITEURL; ?>admin/delete-food.php?id=<?php echo $id; ?>&image_name=<?php echo $image_name; ?>" class="btn-danger">Delete Food</a>
                        </td>
                    </tr>

            <?php
                }
            } else {
                //Food not Added in Database - thuc pham khong duoc them vao csdl
                echo "<tr> <td colspan='7' class='error'> Food not Added Yet. </td> </tr>";
            }


            ?>

        </table>
    </div>

</div>

<?php include('partiels/footer.php'); ?>