<?php if(!defined('bContact_PATH')) die ('bContact does not allow direct access to script.');
/**
 * @package     bContact
 * @version     1.0 (2009)
 * @author      Michell Hoduń <michell@michell.pl>
 * @copyright		Copyright (c) 2009, Michell Hoduń
 */
  
  // Load bContact class
  require bContact_PATH.'bContact.class.php';
  
  $bContact_config = array
  (
    'message_subject' => 'Formularz z fiorel.pl: {user_subject}', // Message subject, can u use {user_subject} to append user subject.
    'message_recipient' => 'salonikmody@fiorel.pl', // E-mail address where to message will come.
    'email_template' => 'Wiadomość od: {name} <small>({ip_address})</small> &mdash; {sender_email} wysłana {sent_date}.<br />Treść: <p>{message}</p>',
    
    // Required form inputs, comment (before input name add: //) if u want do it unrequired or uncomment if u want do it required.
    'required_inputs' => array
    (
      'name',
      'email',
      //'phone',
      'subject',
      'message',
      'anti_bot'
    )
  );
  
  // Create instance
  bContact::instance($bContact_config);