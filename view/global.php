<?php

                $accueilON  = $login = $loginOn = $classiqueON = $reptileON = $oiseauON = $formulaireON = "";
               
                if($_SERVER['REQUEST_METHOD'] === 'GET' and isset($_GET['page'])) {
                    switch ($_GET['page']) {
                        case 'accueil':
                        $includePage = 'view/accueil.php';
                        $accueilON = "id='pageActive'";
                            break;
                        case 'classique':
                            $includePage = 'view/classique.php';
                            $classiqueON = "id='pageActive'";
                            break;
                        case 'contact':
                            $includePage = 'view/contact.php';
                            $contactON = "id='pageActive'";
                            break;
                        case 'formulaire':
                            $includePage = 'view/formulaire.php';
                            $formulaireON = "id='pageActive'";
                            break;
                        case 'oiseau':
                            $includePage = 'view/oiseau.php';
                            $oiseauON = "id='pageActive'";
                            break;
                        case 'reptile':
                            $includePage = 'view/reptile.php';
                            $reptileON = "id='pageActive'";
                            break;
                        case 'contact':
                            include 'view/contact.php';
                            break;
                        case 'login':
                            $includePage = 'view/login.php';
                            $login = "id=pageActive";
                            break; 
                        case 'compteUser':
                            $includePage = 'view/compteuser.php';
                            $loginOn = "id=pageActive";
                            break; 
                        case 'trouvemonanimal':
                            $includePage = 'view/trouvemonanimal.php';
                            $formulaireON = "id=pageActive";
                            break;                       
                        default:
                            $includePage = 'view/accueil.php';
                             $accueilON = "id='pageActive'"; 
                            break;
                    }
                }else {
                    $includePage = 'view/accueil.php';
                    $accueilON = "id='pageActive'"; 

                }
                //$varIndex = $_GET['page'];

                ?>