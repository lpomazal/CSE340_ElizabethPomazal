<?php
/*
* Accounts Controller
*/

// Get the database connection file
   require_once './library/connections.php';
// Get the phpmotors model for use as needed
   require_once './model/main-model.php';
// Get the accounts model
   require_once './model/accounts-model.php';

// Get the array of classifications
$classifications = getClassifications();

// Build a navigation bar using the $classifications array
$navList = '<ul>';
$navList .= "<li><a href='/phpmotors/index.php' title='View the PHP Motors home page'>Home</a></li>";
foreach ($classifications as $classification) {
 $navList .= "<li><a href='/phpmotors/index.php?action=urlencode($classification[classificationName])' title='View our $classification[classificationName] product line'>$classification[classificationName]</a></li>";
}
$navList .= '</ul>';

// Get the value from the action name - value pair
$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
 $action = filter_input(INPUT_GET, 'action');
}

switch ($action){
   case 'template':
    include 'template.php';
    break;
   default:
    include 'views/home.php';
    break;

case 'register':
// Filter and store the data
  $clientFirstname = filter_input(INPUT_POST, 'clientFirstname');
  $clientLastname = filter_input(INPUT_POST, 'clientLastname');
  $clientEmail = filter_input(INPUT_POST, 'clientEmail');
  $clientPassword = filter_input(INPUT_POST, 'clientPassword');

// Check for missing data
if(empty($clientFirstname) || empty($clientLastname) || empty($clientEmail) || empty($clientPassword)){
  $message = '<p>Please provide information for all empty form fields.</p>';
  include './views/registration.php';
  exit;
}

// Send the data to the model
$regOutcome = regClient($clientFirstname, $clientLastname, $clientEmail, $clientPassword);

// Check and report the result
if($regOutcome === 1){
  $message = "<p>Thanks for registering $clientFirstname. Please use your email and password to login.</p>";
  include '../views/login.php';
  exit;
} else {
  $message = "<p>Sorry $clientFirstname, but the registration failed. Please try again.</p>";
  include '../views/registration.php';
  exit;
}
break;}
