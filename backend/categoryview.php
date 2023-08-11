<?php
session_start();
include('../db/dbconfig.php');

$conn = new mysqli('localhost', 'root', '', 'ecafe');

if (isset($_POST['save'])) {
    $cname = $_POST['cname'];
    $ccode = $_POST['ccode'];

 
    $query = "INSERT INTO category (cname, ccode) VALUES ('$cname', '$ccode')";
    $query_run = mysqli_query($conn, $query);

    if ($query_run) {
        $_SESSION['success'] = "Category added successfully!";
        header('Location: managecategory.php');
    } else {
        $_SESSION['status'] = "Failed to add category";
        header('Location: managecategory.php');
    }
}
?>


<!-- update category -->

 <?php
session_start();
include('../db/dbconfig.php');

if (isset($_POST['update'])) {
    $edit_id = $_POST['edit_id'];
    $cname = $_POST['cname'];
    $ccode = $_POST['ccode'];

    $conn = new mysqli('localhost', 'root', '', 'ecafe');
    $query = "UPDATE category SET cname='$cname', ccode='$ccode' WHERE cid='$edit_id'";
    $query_run = mysqli_query($conn, $query);

    if ($query_run) {
        $_SESSION['success'] = "Category updated successfully!";
        header('Location: managecategory.php');
    } else {
        $_SESSION['status'] = "Failed to update category";
        header('Location: managecategory.php');
    }
}

// if(mysqli_num_rows($query_run)){
//     while($row=mysqli_fetch_assoc($query_run)){
//         echo "<tr>";
//     }
// }else{
//     die("No Category Found");
// }

?> 






<!-- update ends -->


<!-- delete category -->
<?php
// session_start();
include('../db/dbconfig.php');

if (isset($_POST['data_delete'])) {
    $delete_id = $_POST['delete_id'];

    $conn = new mysqli('localhost', 'root', '', 'ecafe');
    $query = "DELETE FROM category WHERE cid='$delete_id'";
    $query_run = mysqli_query($conn, $query);

    if ($query_run) {
        $_SESSION['success'] = "Category deleted successfully!";
        header('Location: managecategory.php');
    } else {
        $_SESSION['status'] = "Failed to delete category";
        header('Location: managecategory.php');
    }
}
?>

