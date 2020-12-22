<?php 
session_start();
require_once('functions.inc.php');
// connect to the database
require_once('dbh.inc.php');
if (isset($_POST['submit'])) {
	// get the file/image information
	$_FILES['gallery_file']; //gallery_file is the file name on the upload form
	// Extract all info about the file to use
	$fileName = $_FILES['gallery_file']['name'];
	$fileTmpName = $_FILES['gallery_file']['tmp_name'];//temporary location for the file
	$fileSize = $_FILES['gallery_file']['size'];
	$fileError = $_FILES['gallery_file']['error'];
	$fileType = $_FILES['gallery_file']['type'];

	// Get the file extention
	$fileExt = explode('.', $fileName);
	// convert file extension to lover case for uniformity
	$fileActualExt = strtolower(end($fileExt));
	// create an array of acceptable files
	$fileAllowed = array('jpg', 'jpeg', 'png', 'pdf');

	// check for allowed file
    if (in_array($fileActualExt, $fileAllowed)) {
    	// check for error on uploading file
    	if ($fileError === 0) {
    		// check for file size
    		if ($fileSize < 1000000) {
    			// create a unique id for the file to avoid file override
    			// $fileNewName = uniqid('', true).".".$fileActualExt;
    			// file destination


    			// path to store uploaded file/image
    			$fileDestination = '../file-uploads/'.basename($_FILES['gallery_file']['name']);

    			// Get all the submited file from the form
    			$image = $_FILES['gallery_file']['name'];

    			// run sqlq query
    			$dateUploaded = date("Y-m-d");
    			$query = "INSERT INTO tb_gallery (image, date_uploaded) VALUES (?,?);";

    			// runa prepared statement
    			    $stmt = mysqli_stmt_init($conn);
				    // $stmt = mysqli_stmt_prepare($conn, $query);
				    // check for prepare statement success
				    if (!mysqli_stmt_prepare($stmt, $query)) { redirectTo("../upload-gallery.php");
				}else{
				    // bind parameters to the data placeholders
				    mysqli_stmt_bind_param($stmt, "ss", $image, $dateUploaded);
				    // execuete query
				    mysqli_stmt_execute($stmt);
				    //check if query is successful
				    confirmQuery($stmt); //confirmQuery is a function to confirm if query is successful
				    // get result of affected rows


				    // create function tha moves the file from temp location to actual location
    			move_uploaded_file($fileTmpName, $fileDestination);
    			// check if file is moved to destination target
				    if (move_uploaded_file(['gallery_file']['name'], $fileDestination)) {
				    	
    			// echo "File uploaded successfully!";
    			// set session
    			$_SESSION['message'] = "File uploaded successfully!";
    			$_SESSION['msg_type'] = "success";
    		    redirectTo("../upload-gallery.php");
				    }else{
					// There was an error uploading your file
    		    $_SESSION['message'] = "There was an error uploading your file.";
    			$_SESSION['msg_type'] = "danger";
    		    redirectTo("../upload-gallery.php");
				    }
				   }
				}else{
    			// echo "Your file size is too big";
    			$_SESSION['message'] = "Your file size is too big.";
    			$_SESSION['msg_type'] = "danger";
    		    redirectTo("../upload-gallery.php");
    		}
    	}else{
    		// There was an error uploading your file
    		    $_SESSION['message'] = "There was an error uploading your file.";
    			$_SESSION['msg_type'] = "danger";
    		    redirectTo("../upload-gallery.php");
    	}
    }else{
    	// echo "you cannot upload files of this type.";
    	    	$_SESSION['message'] = "you cannot upload files of this type.";
    			$_SESSION['msg_type'] = "danger";
    		    redirectTo("../upload-gallery.php");
    }
}//end of if isset()
// else{
	// do something if !isset.
// }

