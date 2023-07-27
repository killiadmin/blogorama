<?php
session_start();
class Users
{
    /**
     * Method to return all users saved in the db
     * @return mixed
     */

    public function index()
    {
        $this->User = new User();
        return $this->User->getAll();
    }

    /**
     * Method to insert a user into the users table. We check the email if it is already used by another user in the db
     * @return void
     */

    public function signUpMethod ()
    {
        if(isset($_POST['validateSignUp'])){
            if(!empty($_POST["username"]) && !empty($_POST["name"]) && !empty($_POST["quote"]) && !empty($_POST["mail"]) &&!empty($_POST["password"])) {
                $user_name = htmlspecialchars($_POST["name"]);
                $user_username = htmlspecialchars($_POST["username"]);
                $user_quote = htmlspecialchars($_POST["quote"]);
                $user_mail = filter_var($_POST["mail"], FILTER_VALIDATE_EMAIL);
                $user_password = password_hash($_POST["password"], PASSWORD_DEFAULT);

                $this->User = new User();

                if ($this->User->isEmailTaken($user_mail)) {
                        echo 'Cette adresse e-mail est déjà associé à un compte.';
                    return;
                }

                $this->User->createUser($user_name, $user_username, $user_quote, $user_mail, $user_password);

                header("Location: /50");
            } else {
                echo 'Le formulaire n\'est pas complet';
            }
        }
    }
}