    <div id="image-header">


        <div id="position-fixed">

            <header class="container">        
                   
            </header>

                <div class="container" id="menu">
                     
                    <div class="row">
                        <div class="clo-12 jean-forteroche">
                            <a href="../index.php"><img src="../img/jean.jpg" alt="Jean " id="jean"></a>
                            <p>
                            Jean Forteroche
                            </p>
                        </div>
                        <div class="col-12 placement-menu text-right">
                            <nav class="navbar navbar-expand-md navbar-light ">
                                <button class="navbar-toggler navbar-right " type="button" data-toggle="collapse" data-target="#menu-navbar" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>

                                <div class="collapse navbar-collapse justify-content-end" id="menu-navbar">
                                    <ul class="navbar-nav">
                                        <li class="nav-item">
                                            <a class="nav-link" href="../index.php"> Accueil</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Mon compte
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <?php
                                              if ($this->session->get('pseudo')) {
                                                    ?>
                                                    <a href="../index.php?route=logout">Déconnexion</a>
                                                    <a href="../index.php?route=profile">Profil</a>
                                                    <?php if($this->session->get('role') === 'admin') { ?>
                                                        <a href="../index.php?route=administration">Administration</a>
                                                    <?php } ?>
                                                    <a href="../index.php?route=addArticle">Nouvel article</a>
                                                    <?php
                                                } else {
                                                    ?>
                                                    <a href="../index.php?route=register">Inscription</a>
                                                    <a href="../index.php?route=login">Connexion</a>
                                                    <?php
                                                }
                                                ?>                                     
                                            </div>
                                        </li>                                       
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>   
                </div>
        </div>
    </div>


       


   