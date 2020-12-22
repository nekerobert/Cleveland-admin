<?php 

//==================================================== GLOBALS  =======================================================================//
//==BLANK FILEDS CHECK FUNCTION==//
function isBlank($value) {
    return !isset($value) || trim($value) === '';
	}


//=== POST METHOD ===//
function requestIsPost(){
	return $_SERVER["REQUEST_METHOD"] === "POST";
}



// //==REDIRECT TO FUNCTION=//
function redirectTo($location = NULL) {
	if ($location !=NULL){
	header("Location: {$location}");
	exit();
	}}


//=== CONFIRM QUERY FUNCTION ==//
function confirmQuery($result) {
	if (!$result) {
		die("Database query failed: " . mysqli_error($conn));
	}}


//== END SESSION FORCIBLY FUNCTION ==//
function endSession() {
	// Use both for compatibility with all browsers
	// and all versions of PHP.
    session_unset();
    session_destroy();
}


//=================================================== FORM INPUTS =====================================================================//
//==MD5 UNIQUE PASSWORD ==//
// function uniqid() {
//     $uniq= md5(uniqid(rand(0000,9999),TRUE));
//     return $uniq;
// }



//==SANITIZE FORM INPUT DATA ==//
function sanitize($conn,$data) {
    $clean=mysqli_real_escape_string($conn,$data);
    return $clean;
    }


//==HTML SPECIAL CHARACTER CHECK FUNCTION ==//
function h($arg){
	return htmlspecialchars($arg);
}


// XSS sanitization functions
function u($arg){
	return urlencode($arg);
}


//=====================DATABASE FUNCTIONS =================//
// function prepareData($stmt, $query) {
// 	if (!mysqli_stmt_init($stmt, $query)) {
// 		redirectTo($location);
// 	}
// }






?>