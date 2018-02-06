<?php
    //udana walidacja? Załóżmy, że tak!
    $all_good=true;

    //sprawdznie imienia
    $name = $_POST['data'];

    if(empty($_POST['data']))
    $_SESSION['e_name']="Imie i nazwisko musi zostać podane";
    

    $pname = preg_match('#^[\sA-Za-zsąćęłńóśźżĄĆĘŁŃÓŚŹŻ]*$#', $name);

    //\s
    //$namespace = preg_replace('/\s+/S',"", $name);

    if($pname != 1)
    {
      $all_good=false;
      $_SESSION['e_name']="Imie i nazwisko musi składać się tylko z liter";
    }

    //sprawdzenie poprawności email
    $email = $_POST['email'];

    if(!isset($_POST['email']))
    $_SESSION['e_email']="Email musi zostać podane";

    $emailS = filter_var($email, FILTER_SANITIZE_EMAIL);

    if((filter_var($emailS,FILTER_VALIDATE_EMAIL)==false) || ($emailS!=$email))
    {
      $all_good=false;
      $_SESSION['e_email']="Podaj poprawny adres e-mail";
    }

    if(isset($_POST['message']))
    $message=$_POST['message'];

    if(isset($_POST['g-recaptcha-response']))
    {
      //bot or not?                                                             zmiana recaptcha przy zmianie domeny
      function post_captcha($user_response) {
          $fields_string = '';
          $fields = array(
              'secret' => '6LekdkQUAAAAANV73lGPAPbx64ElUzFXNF3YPSlB',
              'response' => $user_response
          );
          foreach($fields as $key=>$value)
          $fields_string .= $key . '=' . $value . '&';
          $fields_string = rtrim($fields_string, '&');
  
          $ch = curl_init();
          curl_setopt($ch, CURLOPT_URL, 'https://www.google.com/recaptcha/api/siteverify');
          curl_setopt($ch, CURLOPT_POST, count($fields));
          curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
          curl_setopt($ch, CURLOPT_RETURNTRANSFER, True);
  
          $result = curl_exec($ch);
          curl_close($ch);
  
          return json_decode($result, true);
      }
  
      // Call the function post_captcha
      $res = post_captcha($_POST['g-recaptcha-response']);
      
    }
?>