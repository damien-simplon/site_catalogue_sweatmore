<?php
 session_start();

    // INCLUSION BASE DE DONNEE
    include 'include/bdd.inc.php';


            // CREATION D'UN COMPTE
            if(isset($_POST['submit_new_account'])){

                // VERIFICATION MOT DE PASSE IDENTIQUE
                if ($_POST['mdp'] == $_POST['mdpverifie'])
                {
                    $email=$_POST['email'];
                    $reqmail = $bdd->prepare('SELECT * FROM users WHERE email = ?');
                    $reqmail -> execute(array($email));
                    $mailexiste = $reqmail -> rowCount();

                    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

                        // VERIFICATION DOUBLON DE MAIL
                        if ($mailexiste == 0)
                        {

                            $req = $bdd->prepare('INSERT INTO users (prenom,nom,date_de_naissance, email , mdp ,sexe ) VALUES(:prenom,:nom,:date_de_naissance,:email,:mdp,:sexe)');
                            $req->execute(array(
                                'prenom'=>$_POST['prenom'],
                                'nom'=>$_POST['nom'],
                                'date_de_naissance' =>$_POST['date_de_naissance'],
                                'email' => $_POST['email'],
                                'mdp' => $_POST['mdp'],
                                'sexe' => $_POST['sexe'],
                                ));
                            
                            $req = $bdd->prepare('SELECT * FROM users WHERE email = :email AND mdp = :mdp');
                            $req->execute(array(
                                ':email' => $_POST['email'],
                                ':mdp' => $_POST['mdp'],
                                ));

                            $resultat = $req->fetch();

                            session_start();
                            $_SESSION['user-id'] = $resultat['id'];

                             header("Location: index.php");
                    
                        }
                        // ERREUR MAIL EXISTE DEJA
                        else {
                            $_SESSION['notification'] = '
                            <div class="erreur fixed-top" role="alert">Le mail existe deja!</div>';
                            header("Location: index.php?new-account");
                        }
                    }
                    else {
                        $_SESSION['notification'] = '
                        <div class="erreur fixed-top" role="alert">Mail incorrect!</div>';
                        header("Location: index.php?new-account");
                    }
                }
                // VERIFICATION MOT DE PASSE NON CORRESPONDANT
                else 
                {
                    $_SESSION['notification'] = '
                            <div class="erreur fixed-top" role="alert">Les mots de passes ne correspondent pas!</div>';
                            header("Location: index.php?new-account");
                }

            }

            if(isset($_POST['submit_connection'])) {

                // VERIFICATION ET SELECTION EMAIL ET MOT DE PASSE
                $req = $bdd->prepare('SELECT * FROM users WHERE email = :email AND mdp = :mdp');
                $req->execute(array(
                ':email' => $_POST['email'],
                ':mdp' => $_POST['mdp'],
                ));

                $resultat = $req->fetch();

                // ERREUR MAIL OU MOT DE PASSE
                if(!$resultat)
                    {

                        $_SESSION['notification'] = '
                             <div class="erreur fixed-top" role="alert">Email ou mdp incorrect!!</div>';

                             header("Location: index.php");
                    }
                // CONNEXION
                else
                    {
                        session_start();
                        $_SESSION['user-id'] = $resultat['id'];

                             header("Location: index.php");
                    }
            }
            

            // DECONNECTION
            if(isset($_GET['disconnection'])){
                session_destroy();
                session_start();
                $_SESSION['notification'] = '
                <div class="notification fixed-top" role="alert">Bonne journée!</div>';

                header("Location: index.php");
            }

        //inscription à la newsletter via la popup
        if(isset($_POST['inscription_newsletter'])){
            $insertmail=$bdd->prepare('INSERT INTO newsletter VALUE(:mail)');
            $insertmail->bindParam(":mail",$mail);
            $mail = htmlspecialchars($_POST['email']);
            $insertmail->execute();
            $_SESSION['notification'] = '
            <div class="erreur fixed-top" role="alert">Merci de vous être inscrit !</div>';

            header("Location: index.php");
        }

    ?>