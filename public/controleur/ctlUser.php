<?php
require_once "modele/members.class.php";

require_once "vue/vue.class.php";

class ctlUser
{
    private $user, $game;

    public function __construct()
    {
        $this->user = new members();
        $this->game = new games();
    }

    /////////////////////
    // FONCTION MEMBRE //
    /////////////////////
    public function vueUser()
    {
        $message = "";


        if (!empty($_FILES)) {
            global $Conf;

            $target_file = $Conf->MEMBERSFOLDER . basename($_FILES["newImage"]["name"]);
            $file_type = strstr($target_file, '.');

            $users = $this->user->infoMember($_SESSION['username']);
            extract($users);

            $reservations = $this->game->getBooking($users['id_member']); // Récupère les réservations de l'utilisateur

            if ($_FILES["newImage"]["size"] < 2000000) {
                $isFileInDir = count(glob("$target_file/*")) === 0 ? "FALSE" : "TRUE"; // Si il y a un ou des fichiers -> TRUE, sinon FALSE

                if ($file_type == ".png" || $file_type == ".PNG") { // On vérifie si le fichier est au format PNG
                    if ($isFileInDir == "FALSE") { // On vérifie si il y a un/des fichiers dans le dossier
                        $this->user->updateAvatar("$username.png", $users['id_member']);

                        move_uploaded_file($_FILES["newImage"]["tmp_name"], $Conf->MEMBERSFOLDER . "/" . $username . "/" . $username . ".png");

                        header("Location: index.php?action=user");
                    } else { // si il y a un/des fichiers dans le dossier
                        $this->user->updateAvatar("$username.png", $users['id_member']);

                        unlink($Conf->MEMBERSFOLDER . $username . "/" . $users['avatar']);

                        move_uploaded_file($_FILES["newImage"]["tmp_name"], $Conf->MEMBERSFOLDER . "/" . $username . "/" . $username . ".png");

                        header("Location: index.php?action=user");
                    }
                } elseif ($file_type == ".jpg" || $file_type == ".JPG") { // On vérifie si le fichier est au format JPG
                    if ($isFileInDir == "FALSE") { // On vérifie si il y a un/des fichiers dans le dossier
                        $this->user->updateAvatar("$username.jpg", $users['id_member']);

                        move_uploaded_file($_FILES["newImage"]["tmp_name"], $Conf->MEMBERSFOLDER . "/" . $username . "/" . $username . ".jpg");

                        header("Location: index.php?action=user");
                    } else { // si il y a un/des fichiers dans le dossier
                        $this->user->updateAvatar("$username.jpg", $users['id_member']);

                        unlink($Conf->MEMBERSFOLDER . $username . "/" . $users['avatar']);

                        move_uploaded_file($_FILES["newImage"]["tmp_name"], $Conf->MEMBERSFOLDER . "/" . $username . "/" . $username . ".jpg");

                        header("Location: index.php?action=user");
                    }
                } elseif ($file_type == ".jpeg" || $file_type == ".JPEG") { // On vérifie si le fichier est au format JPEG
                    if ($isFileInDir == "FALSE") { // On vérifie si il y a un/des fichiers dans le dossier
                        $this->user->updateAvatar("$username.jpeg", $users['id_member']);

                        move_uploaded_file($_FILES["newImage"]["tmp_name"], $Conf->MEMBERSFOLDER . "/" . $username . "/" . $username . ".jpeg");

                        header("Location: index.php?action=user");
                    } else { // si il y a un/des fichiers dans le dossier
                        $this->user->updateAvatar("$username.jpeg", $users['id_member']);

                        unlink($Conf->MEMBERSFOLDER . $username . "/" . $users['avatar']);

                        move_uploaded_file($_FILES["newImage"]["tmp_name"], $Conf->MEMBERSFOLDER . "/" . $username . "/" . $username . ".jpeg");

                        header("Location: index.php?action=user");
                    }
                }
            } else {
                $message .= "<span class='text-red-500 text-center'>*La taille de votre image est trop élevée</span><br>";
            }

            $vue = new vue("User"); // Instancie la vue appropriée
            $vue->afficher(
                array(
                    'users' => $users,
                    'reservations' => $reservations,
                    'message' => $message
                )
            );

            // echo $target_file = $Conf->MEMBERSFOLDER . basename($_FILES["newImage"]["name"]);
            // echo $file_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

            var_dump($_FILES);
        } else {
            $users = $this->user->infoMember($_SESSION['username']);
            $reservations = $this->game->getBooking($users['id_member']); // Récupère les réservations de l'utilisateur

            $vue = new vue("User"); // Instancie la vue appropriée
            $vue->afficher(
                array(
                    'reservations' => $reservations,
                    'users' => $users
                )
            );
        }
    }

    /////////////////////
    // FONCTION MEMBRE //
    /////////////////////
    public function deconnexion()
    {
        $_SESSION = array();
        session_destroy();

        $_SESSION['lang'] = 'FR';

        $vue = new vue("Accueil"); // Instancie la vue appropriée
        $vue->afficher(array());
    }

    ////////////////////
    // FONCTION MEMBRE//
    ////////////////////
    public function modifyUser()
    {
        $users = $this->user->infoMember($_SESSION['username']);
        extract($users);

        $vue = new vue("UserModify"); // Instancie la vue appropriée
        $vue->afficher(array('users' => $users));
    }

    /////////////////////
    // FONCTION MEMBRE //
    /////////////////////
    public function modifyUserConfirm()
    {
        $users = $this->user->infoMember($_SESSION['username']);
        extract($users);

        // var_dump($users);
        // var_dump($_POST);

        // $vue = new vue("User"); // Instancie la vue appropriée
        // $vue->afficher(array('users' => $users));

        if (empty($_POST['password'])) {
            // Modifie les informations de l'utilisateur
            $this->user->updateMemberInfo(securize($_POST['email']), securize($_POST['firstname']), securize($_POST['lastname']), securize($_POST['age']), securize($_POST['phonenum']), securize($_POST['country']), securize($_POST['zip_code']), securize($_POST['city']), securize($_POST['street']), $id_member);
        } else {
            // Modifie les informations de l'utilisateur
            $this->user->updateMemberInfo(securize($_POST['email']), securize($_POST['firstname']), securize($_POST['lastname']), securize($_POST['age']), securize($_POST['phonenum']), securize($_POST['country']), securize($_POST['zip_code']), securize($_POST['city']), securize($_POST['street']), $id_member);

            // Modifie le mot de passe de l'utilisateur
            $this->user->updateMemberPass($_POST['password'], $id_member);
        }

        header("Location: index.php?action=user");
    }

    /////////////////////
    // FONCTION MEMBRE //
    /////////////////////
    public function deleteUser()
    {
        global $Conf;

        $users = $this->user->infoMember($_SESSION['username']);
        extract($users);

        $this->user->removeDir($Conf->MEMBERSFOLDER . $username);

        $this->user->removeMember($users['id_member']);

        $this->deconnexion();

        $vue = new vue("User"); // Instancie la vue appropriée
        $vue->afficher(array('users' => $users));
    }
}