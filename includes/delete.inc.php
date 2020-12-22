<?php
session_start();
require_once('dbh.inc.php');
require_once('functions.inc.php');


//=========================================================DELETE FAQ=====================================================================//
if (isset($_GET['deletefaq'])) {
   //set an id variable to get the delete data
    // $id = $_GET['deletefaq'];
    $id = $_POST['deleteId'];
    //run a query to delete a record
    $query = "DELETE FROM tb_faq WHERE Id=$id LIMIT 1;" or die(mysqli_error());
    $result = mysqli_query($conn, $query);
    confirmQuery($result);
    // set session message
    $_SESSION['message'] = "Record has been delete!";
    $_SESSION['msg_type'] = "danger";
    redirectTo("../manage-faq.php");

    mysqli_free_result($result);
    }


// close database connections
