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
            


            if(isset($_POST['formaddadmin'])) {

                // VERIFICATION BACKGROUND
                if (!empty($_FILES['image']['tmp_name'])) {
                    $tailleMax = 1000000;
                    $extensionsValides = array('jpg', 'jpeg', 'png', 'gif');
                    // VERIFICATION TAILLE FICHIER BACKGROUND
                    if ($_FILES['image']['size'] <= $tailleMax) {
                        $extensionsUpload = strtolower(substr(strrchr($_FILES['image']['name'], '.'), 1));
                        // VERIFICATION EXTENSION
                        if (in_array($extensionsUpload, $extensionsValides)) {
                            $chemin = "img/".$_SESSION['user-id'].".".$extensionsUpload;
                            $resultatFile = move_uploaded_file($_FILES['image']['tmp_name'], $chemin);
                            // SI TOUT OK METTRE A JOUR LE BACKGROUND
                            if ($resultatFile) {
                                $photo = "img/". $_SESSION['user-id'].".".$extensionsUpload;
                                 $updatefile = $bdd->prepare("INSERT INTO articles (photo) VALUES(photo");
                                 $updatefile->bindParam(":photo",$photo);
                                 $updatefile->execute();
                                 $_SESSION['notification'] = '
                                <div class="succes fixed-top" role="alert">Les modifications ont été enregistrées!</div>';

                                header("Location: index.php");
                            } 
                            // SINON ERREUR IMPORTATION
                            else{
                             $_SESSION['notification'] = '
                             <div class="erreur fixed-top" role="alert">Erreur lors de l importation</div>';

                             header("Location: index.php");
                            }
                        } 
                        // ERREUR FORMAT
                        else{
                            $_SESSION['notification'] = '
                             <div class="erreur fixed-top" role="alert">Erreur format</div>';

                             header("Location: index.php");
                        }
                      // ERREUR POIDS FICHIER
                    } else{
                        $_SESSION['notification'] = '
                             <div class="erreur fixed-top" role="alert">Le fichier est trop lourd / Taille maxi : 1 mo</div>';

                             header("Location: index.php");
                    }
                 }

                // SI PAS DE FICHIER SELECTIONNE
                else if(empty($_FILES['img']['tmp_name'])){
                    $_SESSION['notification'] = '
                        <div class="succes fixed-top" role="alert">Les modifications ont été enregistrées!</div>';

                        header("Location: index.php");
                }

                    // MISE A JOUR DES DONNEES
                    $nom=$_POST['nom'];
                    $cat=$_POST['cat'];
                    $descri=$_POST['descri'];
                    $req = $bdd->prepare('INSERT INTO articles (nom, cat,descri) VALUES(:nom,:cat,:descri)');
                    $req->bindParam(":nom",$nom);
                    $req->bindParam(":cat",$cat);
                    $req->bindParam(":descri",$descri);
                    $req->execute();

                    header("Location: index.php");
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

        //formulaire de contact
        if(isset($_POST['submit_contact'])){
            $insertContact = $bdd->prepare('INSERT INTO contact (nom,email,sujet,message,created_at) VALUES(:nom,:email,:sujet,:msg,now())');
            $insertContact->bindParam(":nom",$nom);
            $insertContact->bindParam(":email",$email);
            $insertContact->bindParam(":sujet",$sujet);
            $insertContact->bindParam(":msg",$msg);
            

            $nom = htmlspecialchars($_POST['name']);
            $email = htmlspecialchars($_POST['email']);
            $sujet = htmlspecialchars($_POST['sujet']);
            $msg = htmlspecialchars($_POST['msg']);

            $insertContact->execute();

            $_SESSION['notification'] = '
            <div class="erreur fixed-top" role="alert">Merci, nous tâcherons de rapidement vous apporter une réponse !</div>';

            header("Location: index.php");

        }
        

                // RECHERCHE SUR COOKIE DERNIER PRODUIT VISITE AVEC PRODUCTS DANS BDD //
                // CREER UN COOKIE
                setcookie('pseudo', $_COOKIE['produit'] , time() + 365*24*3600); 

                // VERIFIER que COOKIE EXISTE //
                if(!empty($_COOKIE['products'])){
                $listing = $_COOKIE['products']; 
                $listeProducts= unserialize($listing);
                echo $_COOKIE['products'];
                }
                else{
                echo 'Vous n\'avez pas encore visité de produit.
                Les produits que vous visitez sont ajoutés automatiquement.';
                }

                // On lance une nouvelle fois le dé
                $listeProducts[] = rand(1,3);
                // On sérialise le tableau et on crée le cookie
                $listing = serialize($listeProducts);
                setcookie('products', $listinge, time()+3600*24);
                // On calcule le nombre de lancés de dé
                $nombreProducts = count($listeProducts);

?>

    