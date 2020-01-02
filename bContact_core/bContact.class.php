<?php if(!defined('bContact_PATH')) die ('bContact does not allow direct access to script.');
/**
 * @package     bContact
 * @version     1.0 (2009)
 * @author      Michell Hoduń <michell@michell.pl>
 * @copyright		Copyright (c) 2009, Michell Hoduń
 */
 
  class bContact {
      
      protected static $_instance;
      
      // Default bContact settings
      protected static $_config = array
      (
        'message_subject' => 'Fiorel.pl - formularz od: {user_subject}', // Message subject, can u use {user_subject} to append user subject.
        'message_recipient' => 'grzesiukoc@o2.pl', // E-mail address where to message will come.
        'email_template' => 'Wiadomość od: <b>{name}</b> <small>({ip_address})</small> &mdash; {sender_email} wysłana {sent_date}.<br />Treść: <p>{message}</p>', // Default email template
        
        // Required form inputs, comment (before input name add: //) if u want do it unrequired or uncomment if u want do it required.
        'required_inputs' => array
        (
          'name',
          'email',
          'phone',
          'subject',
          'message',
        )
      );
      
      // Get or create script instance
      public static function instance($config = array())
      {
          if(self::$_instance === NULL)
          {
              self::$_instance = new bContact ($config);
          }
          
          return self::$_instance;
      }
      
      public function __construct ($config)
      {
        foreach ($config as $key => $val)
        {
          self::$_config[$key] = $val;
        }
      }
      
     /**
      * Email `helper`
      *
      * @param string $name - sender name
      * @param string $sender_email - sender e-mail address
      * @param string $phone_number - sender phone number
      * @param string $subject - message subject
      * @param string $message - message
      *
      * @return void
      */
      public static function send_email ($name, $sender_email, $phone_number, $subject, $message)
      {
          $subject = str_replace('{user_subject}', $subject, self::$_config['message_subject']);
          $template = strtr(self::$_config['email_template'], array
                                                                   (
                                                                    '{name}' => $name,
                                                                    '{ip_address}' => $_SERVER['REMOTE_ADDR'],
                                                                    '{sender_email}' => $sender_email,
                                                                    '{sent_date}' => date('Y-m-d H:i:s'),
                                                                    '{message}' => $message
                                                                   ));
          
          // Email headers
          $headers  = "From: $name <$sender_email>\r\n";
          $headers .= "Reply-To: $sender_email\r\n";
          $headers .= "Return-Path: '.$sender_email.'\r\n";
          $headers .= "X-Mailer: bContact\n";
          $headers .= 'MIME-Version: 1.0' . "\n";
          $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
          
          return mail(self::$_config['message_recipient'], $subject, $template, $headers);
      }
      
      
     /**
      * Validation `helper` returning errors if found.
      *
      * @param array $data
      *
      * @return array
      */
      public static function valid_form ($data = array())
      {
          $errors_count = 0;
          
          foreach ($data as $key => $value)
          {
              $errors[$key] = 'false';
              
              if(in_array($key, self::$_config['required_inputs']) AND $value === '')
              {
                  $errors[$key] = 'To pole jest puste.';
                  $errors_count++;
                  continue;
              }

              if($key === 'email' AND !preg_match('/^[-_a-z0-9\'+*$^&%=~!?{}]++(?:\.[-_a-z0-9\'+*$^&%=~!?{}]+)*+@(?:(?![-.])[-a-z0-9.]+(?<![-.])\.[a-z]{2,6}|\d{1,3}(?:\.\d{1,3}){3})(?::\d++)?$/iD', (string) $value))
              {
                  $errors[$key] = 'Wpisz poprawny email.';
                  $errors_count++;
                  continue;
              }
          }
          
          return array('errors' => $errors, 'errors_count' => $errors_count);
      }
  }