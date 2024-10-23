<?php
class Usuario
{
   private $autenticado = false;
   private $email = "" ;
   private $password = "";
   private $usuario ;


   public function __construct($email, $password)
   {   //registro
       $this->$email = $email;
       $this->$password = $password;


   }


   public static function login()
   {

    if(!empty($_POST['loginButton'])) {
        $email = $_POST['loginEmail'];
        $password = $_POST['loginPassword'];
        if(array_key_exists($email, $usuario) && $usuario[$email] == $password) {
          $_SESSION['autenticado'] = true;
          $indiceMensaje = 'loginSuccessfull';
        } else {
          $indiceMensaje = 'loginError';
        }
      } elseif(!empty($_POST['logoutButton'])) {
          $_SESSION['autenticado'] = false;
      } elseif(!empty($_POST['registerButton'])) {
        if(!empty($_POST['registerEmail']) &&
          !empty(($_POST['registerPassword'])) &&
          $_POST['registerPassword'] == $_POST['registerRepeatPassword']
        ) {
          $usuario[$_POST['registerEmail']] = $_POST['registerPassword'];
          $indiceMensaje = 'registerSuccessfull';
          $_SESSION['autenticado'] = true;
        } else {
          $indiceMensaje = 'contraseñasNoCoinciden';
        }
      }

   }


public function set_email($email)
   {
       $this->$email = $email;
   }


   function get_email($email)
   {
       $this->$email= $email;
   }


   function set_password($password)
   {
       $this->$password = $password;
   }


   function get_password($password)
   {
       $this->$password = $password;
   }


   function logout()
   {
}


function findByAutenticacion ()
{


}
}
