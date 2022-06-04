<?php
//Include Constants Page
include('../config/constants.php');
//echo "Delete Food Page";

if (isset($_GET['id']) && isset($_GET['image_name'])) {
    //Process to Delete - xu ly de xoa
    //echo "process to delete";

    //1. Get ID and Image Name - nhan id ten va hinh anh
    $id = $_GET['id'];
    $image_name = $_GET['image_name'];

    //2. Remove the Image if Available - xoa hinh anh neu co
    //Check whether the image is available or not and Delete only if available - kiem tra xem hinh anh co san hay ko va chi xoa neu co
    if ($image_name != "") {
        //It has image and need to remove from folder - no co hinh anh va can xoa khoi thu muc
        //Get the Image Path - lay duong dan hinh anh
        $path = "../image/food/" . $image_name;

        //Remove Image File from Folder - xoa anh khoi thu muc
        $remove = unlink($path);

        //Check whether the image is removed or not - kiem tra xem hinh anh co bi xoa hay khong
        if ($remove == false) {
            //Failed to Remove image - xoa anh loi
            $_SESSION['upload'] = "<div class='error'>Failed to Remove Image File.</div>";
            //Redirect to Manage Food
            header('location:' . SITEURL . 'admin/manage-food.php');
            //Stop the Process of Deleting Food
            die();
        }
    }

    //3. Delete Food from Database - xoa food khoi csdl
    $sql = "DELETE FROM tbl_food WHERE id=$id";
    //Execute the Query
    $res = mysqli_query($conn, $sql);

    //Check whether the query executed or not and set session message respectively 
    //4. Redirect to Manage Food with Session Message - chuyen huong sang trang quan ly thuc pham
    if ($res == true) {
        //Food Delete
        $_SESSION['delete'] = "<div class='success'>Food Deleted Successfully.</div>";
        header('location:' . SITEURL . 'admin/manage-food.php');
    } else {
        //Failed to Delete Food
        $_SESSION['delete'] = "<div class='error'>Failed to Delete Food.</div>";
        header('location:' . SITEURL . 'admin/manage-food.php');
    }
} else {
    //Redirect to Manage Food Page - chuyen huong den trang
    //echo "redirect";
    $_SESSION['unauthorize'] = "<div class='error'>Unauthorized Access.</div>";
    header('location:' . SITEURL . 'admin/manage-food.php');
}
