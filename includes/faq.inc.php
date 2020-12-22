<?php
session_start();
require_once('dbh.inc.php');
require_once('functions.inc.php');

// set default values for the form variables
$question = "";
$answer = "";
$editId = 0; //default id value for update record in the form
$update = false; //default value for update button when edit button !isset.
$errors = [];


//====================================================== ADD FAQ =============================================//

   if (isset($_POST['addfaq'])){
    //get data from faq form inputs and sanitize them
   $question = ($_POST['question']) ? h($_POST['question']):""; // h is a html special character conversion function
    // $question = sanitize($conn, $question); //sanitize handles all escape strings
    $answer = ($_POST['answer']) ? h($_POST['answer']):"";
    // $answer = sanitize($conn, $answer);
    //validate all inputs
    // if (empty($question) && empty($answer)) {
    //     $errors[] = "Please fill in all fields";
    //     redirectTo("../add-faq.php");
    //     }
    
    //run sql query to insert data into the database
    $dateAdded = date("Y-m-d"); //get the date of upload
    $query = "INSERT INTO tb_faq (Question, Answer, DateUploaded) VALUES(?, ?, ?)";
    // initialze database connection
    $stmt = mysqli_stmt_init($conn);
    // $stmt = mysqli_stmt_prepare($conn, $query);
    // check for prepare statement success
    if (!mysqli_stmt_prepare($stmt, $query)) { redirectTo("../manage-faq.php"); }else{
    // bind parameters to the data placeholders
    mysqli_stmt_bind_param($stmt, "sss", $question, $answer, $dateAdded);
    // execuete query
    mysqli_stmt_execute($stmt);
    //check if query is successful
    confirmQuery($stmt); //confirmQuery is a function to confirm if query is successful
    // get result of affected rows
    $affectedRows = mysqli_stmt_affected_rows($stmt);
    if ($affectedRows == 1) {
         // $result = mysqli_query($conn, $stmt);


    //set session message and message type
    $_SESSION['message'] = "New record created successfully!";
    $_SESSION['msg_type'] = "success";
    //redirect user to page
    redirectTo("../manage-faq.php"); //redirecTo is a function that redirects user to specified page
    // free result
    mysqli_free_result($result);
    //close prepare statement and close connection
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
    }else{
            //set session message and message type
    $_SESSION['message'] = "Failed to insert record" . mysqli_error($conn);
    $_SESSION['msg_type'] = "danger";

    redirectTo("../manage-faq.php"); //redirecTo is a function that redirects user to specified page
        }
    }

}//end of isset POST
    // else{
    //      redirectTo("dashboard.php"); 
    // }
    

   




//====================================================== EDIT FAQ =======================================================// 
if (isset($_GET['editfaq'])) {
   //set an id variable to get the delete data
   $id = $_GET['editfaq'];
   // set an update button when edit isset
   $update = true;

    //run a query to fetch record from database
    $query = "SELECT * FROM tb_faq WHERE Id=$id;";
    $result = mysqli_query($conn, $query);
    confirmQuery($result); //function to confirm query
    if (is_countable($result) && count($result) > 0){
        //loop through the result and get each row
        $row = mysqli_fetch_assoc($result);
        $question = $row['Question'];
        $answer = $row['Answer'];
        }else{
        //set session message and message type
        $_SESSION['message'] = "Failed to connect to the database" . mysqli_connect_error();
        $_SESSION['msg_type'] = "danger";

        redirectTo("manage-faq.php"); //redirecTo is a function that redirects user to specified page
    
    }
        // Free result set
        // mysqli_free_result($result);
        // mysqli_close($conn);

    }//end if isset
    // else{
    //      redirectTo("manage-faq.php"); //redirecTo is a function that redirects user to specified page

    // }



//=====================================================UPDATE FAQ ==============================================================// 
if (isset($_POST['updatefaq']) && (!empty($_POST['updatefaq']))) {
   //set the id of form data
    $id = $_POST['editId'];
    // set new variables of form data to be updated
    // $question = ($_POST['question']) ? h($_POST['question']):""; // h is a html special character conversion function
    // $question = sanitize($conn, $question); //sanitize handles all escape strings
    // $answer = ($_POST['answer']) ? h($_POST['answer']):"";
    // $answer = sanitize($conn, $answer);
   $question = ($_POST['question']) ? h($_POST['question']):""; // h is a html special character conversion function
    // $question = sanitize($conn, $question); //sanitize handles all escape strings
    $answer = ($_POST['answer']) ? h($_POST['answer']):"";
    // $answer = sanitize($conn, $answer);

    // //run a query to update the record
    // $query = "UPDATE tb_faq SET Question = '$question', Answer='$answer' WHERE Id=$id LIMIT 1" or die(mysqli_error());
    // $result = mysqli_query($conn, $query);
    // confirmQuery($result);
    // // set session message
    // $_SESSION['message'] = "Record has been updated successfully!";
    // $_SESSION['msg_type'] = "warning";
    // redirectTo("../manage-faq.php"); //redirecTo is a function that redirects user to specified page
    // mysqli_free_result($result);
    // }

   //run a query to update the record
    $query = "UPDATE tb_faq SET Question =?, Answer=? WHERE Id=? LIMIT 1;" or die(mysqli_error());
    // initialze database connection
    $stmt = mysqli_stmt_init($conn);
    mysqli_stmt_prepare($stmt, $query);
    // check for prepare statement success
    if (!mysqli_stmt_prepare($stmt, $query)) { redirectTo("../manage-faq.php"); }else{
    // bind parameters
    mysqli_stmt_bind_param($stmt, "sss", $question, $answer, $id);
    mysqli_stmt_execute($stmt);
    confirmQuery($stmt); //confirmQuery is a function to confirm if query is successful
    // get result of query executed
    // $result = mysqli_stmt_get_result($stmt);

     $affectedRows = mysqli_stmt_affected_rows($stmt);
    if ($affectedRows == 1) {
         // $result = mysqli_query($conn, $stmt);


    //set session message and message type
    $_SESSION['message'] = "Record updated successfully!";
    $_SESSION['msg_type'] = "success";
    //redirect user to page
    redirectTo("../manage-faq.php"); //redirecTo is a function that redirects user to specified page
    // free result
    mysqli_free_result($stmt);
    //close prepare statement and close connection
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
    }else{
    //set session message and message type
    $_SESSION['message'] = "Record not updated!" . mysqli_error($conn);
    $_SESSION['msg_type'] = "danger";
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
    redirectTo("../manage-faq.php"); //redirecTo is a function that redirects user to specified page
    
        }
    }
}





//=========================================================DELETE FAQ=====================================================================//
if (isset($_POST['deletefaq'])) {
   //set an id variable to get the delete data
    // $id = $_GET['deletefaq'];
    $deleteid = $_POST['deleteId'];
    //run a query to delete a record
    $query = "DELETE FROM tb_faq WHERE Id='$deleteid' LIMIT 1;";
    $result = mysqli_query($conn, $query);
    confirmQuery($result);
    // set session message
    $_SESSION['message'] = "Record has been delete!";
    $_SESSION['msg_type'] = "danger";
    redirectTo("../manage-faq.php");

    mysqli_free_result($result);
    }


// close database connections
