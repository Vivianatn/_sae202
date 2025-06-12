<header>
    <!-- Première partie header -->
    <nav>
        <a href="/">Accueil</a>
        <a href="/">Concept</a>
        <a href="/">Informations pratiques</a>
    </nav>
    <!-- Deuxième partie header -->
    <nav>
        <?php
        if (isset($_SESSION['user_email'])){
            echo '<h2>Bienvenue'.$_SESSION['user_nom'].$_SESSION['user_prenom'].'</h2> <a href="/">Messagerie</a><a href="/connexion/deconnexion">Déconnexion</a>';
        }else{
            echo '<a href="/inscription">Inscription</a>
            <a href="/connexion">Connexion</a>';
        }
        
        
        ?>
        
    </nav>
</header>