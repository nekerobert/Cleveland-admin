<?php 
// session_start();
// require_once('dbh.inc.php');
// require_once('functions.inc.php');

// set default values for the form variables
$question = "";
$answer = "";
$id = 0; //default value for update record
$update = false; //default value for update button when edit button !isset.



//=====ADD FAQ====//
if (isset($_POST['addFAQ'])) {
    //get data from faq form inputs
    $question = ($_POST['question']);
    $answer = ($_POST['answer']);
    // $dateUpload =  now();

    $query = "INSERT INTO tb_faq (Question, Answer, DateUploaded) VALUES('$question', '$answer', now())";
    $result = mysqli_query($conn, $query);
    confirmQuery($result); //function to confirm if query is successful
    // $last_id = mysqli_insert_id($conn);
    //get session message
    $_SESSION['message'] = "New record created successfully!";
    $_SESSION['msg_type'] = "success";
    header("Location: ../manage-faq.php");
  
                    // if ($conn->query($sql) === TRUE) {
                    //     $_SESSION['message'] = "New record created successfully";
                    //     $_SESSION['msg_type'] = "success";
                    //     header("Location: ../upload-faq.php");
                    // } else {
                    //     $inputError = "Error: " . $sql . "<br>" . $conn->error;
                    //     echo($inputError);
                    // }
}




//=== EDIT FAQ ===// 
if (isset($_GET['edit'])) {
   //set an id variable to get the delete data
   $id = $_GET['edit'];
   // set an update button when edit isset
   $update = true;

    //run a query to select record
    $query = "SELECT * FROM tb_faq WHERE Id=$id" or die(mysqli_error());
    $result = mysqli_query($conn, $query);
    confirmQuery($result); //function to confirm query
    if (count($result)==1){
        //loop through the result and get each row
        $row = mysqli_fetch_assoc($result);
        $question = $row['Question'];
        $answer = $row['Answer'];
        }
        // Free result set
        mysqli_free_result($result);

    }




//=== UPDATE FAQ ===// 
if (isset($_POST['update'])) {
   //set the id of form data
    $id = $_POST['id'];
    // set new variables of form data to be updated
    $question = $_POST['question'];
    $answer = $_POST['answer'];

    //run a query to update the record
    $query = "UPDATE tb_faq SET Question = '$question', Answer='$answer' WHERE Id=$id LIMIT 1" or die(mysqli_error());
    $result = mysqli_query($conn, $query);
    confirmQuery($result);
    // set session message
    $_SESSION['message'] = "Record has been updated successfully!";
    $_SESSION['msg_type'] = "warning";
    header("Location: ../manage-faq.php");
    mysqli_free_result($result);
    }




//===DELETE FAQ=====//
if (isset($_GET['delete'])) {
   //set an id variable to get the delete data
    $id = $_GET['delete'];
    //run a query to delete a record
    $query = "DELETE FROM tb_faq WHERE Id=$id LIMIT 1" or die(mysqli_error());
    $result = mysqli_query($conn, $query);
    confirmQuery($result);
    // set session message
    $_SESSION['message'] = "Record has been delete!";
    $_SESSION['msg_type'] = "danger";
    header("Location: ../manage-faq.php");
    mysqli_free_result($result);
    }



 ?>