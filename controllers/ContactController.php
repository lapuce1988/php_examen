<?php


class ContactController extends BaseController
{
    protected $name = 'contact';

    protected function sendMail(){
        if (!isset($_POST['envoyer'])){
            return 0;
        }

        $destinataire = 'devresse.2410.student@ifosupwavre.be';
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $email = $_POST['email'];
        $message = "Vous avez reçu un mail du site Younoob<br>";
        $message .= 'Nom: '.$nom."<br>";
        $message .= 'Prénom: '.$prenom."<br>";
        $message .= 'Email: '.$email."<br>";
        $message .= 'Telephone: '.$_POST['tel']."<br>";
        $message .= 'Sujet : '.$_POST['sujet'].'<br>';
        $message .= 'Message: '.$_POST['message']."<br>";

        if (mail($destinataire, $_POST['subject'], $message))
        {
            return 1;
        }

        return 2;
    }

    protected function getTemplateVars()
    {
        return array(
            'controller' => $this->name,
            'contact' => $this->sendMail(),
        );
    }
}