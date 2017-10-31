<?php
                include'view/header.php';
                include'view/nav.php';
                if($_SERVER['REQUEST_METHOD'] === 'GET' and isset($_GET['page'])) {
                    switch ($_GET['page']) {
                        case 'accueil':
                        include 'view/accueil.php';
                            break;
                        case 'classique':
                            include 'view/classique.php';
                            break;
                        case 'contact':
                            include 'view/contact.php';
                            break;
                        case 'formulaire':
                            include 'view/formulaire.php';
                            break;
                        case 'oiseau':
                            include 'view/oiseau.php';
                            break;
                        case 'reptile':
                            include 'view/reptile.php';
                            break;
                        case 'contact':
                            include 'view/contact.php';
                            break;
                        case 'multi':
                            include 'view/multiplication.php';
                            break;
                        default:
                            include 'view/accueil.php';
                            break;
                    }
                } 
                else {
                    include 'view/accueil.php';}

                include'view/footer.php';

                ?>