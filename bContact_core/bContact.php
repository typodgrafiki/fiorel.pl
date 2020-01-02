<?php
/**
 * @package     bContact
 * @version     1.0 (2009)
 * @author      Michell Hoduń <michell@michell.pl>
 * @copyright		Copyright (c) 2009, Michell Hoduń
 */
 
  // For security reason
  define ('bContact_PATH', dirname(__FILE__).'/');

  // Load bContact Core & Config
  require bContact_PATH.'bContact_Config.php';
  
  if ($_POST)
  {
    $validation = bContact::instance()->valid_form ($_POST);
    
    if($validation['errors_count'] === 0)
    {
        // Send message
        bContact::instance()->send_email ($_POST['name'], $_POST['email'], $_POST['phone'], $_POST['subject'], $_POST['message']);
    }
    
    // Print validation status and if is errors print it
    echo json_encode($validation);
  }