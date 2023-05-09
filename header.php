<header >
    <nav class="navbar navbar-dark bg-dark navbar-expand-lg fixed-top" style="border-bottom: 1px solid rgb(46, 172, 203);">
        <div class="container">
            <div class="navbar-brand">
                <a href="./" class="nav-link fs-3">
                    Cine<span style="color:rgb(46, 172, 203);">Tech</span>
                </a>
            </div>
            <!-- Le bouton s'affichera en petit écran -->
            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#monMenuDeroulant">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="monMenuDeroulant">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="./" class="nav-link <?= basename($_SERVER['PHP_SELF']) === "index.php" ? "active" : "" ?>">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a href="./movies.php" class="nav-link <?= (substr($_SERVER['REQUEST_URI'], -10) === 'movies.php') ? "active" : "" ?>">Films</a>
                    </li>
                    <li class="nav-item">
                        <a href="./series.php" class="nav-link <?= (substr($_SERVER['REQUEST_URI'], -10) === 'series.php') ? "active" : "" ?>">Séries</a>
                    </li>
                    <li class="nav-item">
                        <a href="./actors.php" class="nav-link <?= (substr($_SERVER['REQUEST_URI'], -10) === 'actors.php') ? "active" : "" ?>">Acteurs</a>
                    </li>
                    
                </ul>
                <div class="col-md-6 my-2">
                    <?php if (!isset($_GET["id"])) { ?>
                    <form id="searchForm" class="rounded-pill">
                        <div class="input-group maxW-input ms-md-5">
                            
                            <input id="searchBar" class="form-control" type="search" placeholder="Rechercher film/série/acteur...">
                            <button id="button" class="btn btn-light orange border-0"><i class="fa-solid fa-magnifying-glass"></i></button>
                        </div>
                    </form>
                     
                    <?php } ?>
                   
                </div>
                <ul class="navbar-nav ms-auto">
                <?php if (isset($_SESSION["user_id"])) { ?>
                <li class="nav-item">
                    <a href="./deconnexion.php" class="nav-link">
                        <i class="fa fa-power-off"></i> 
                    </a>
                </li>
                <?php } else { ?>
                    <li class="nav-item">
                    <a href="./login.php" class="nav-link">
                        <i class="fa fa-user"></i> 
                    </a>
                </li>    
                <li class="nav-item">
                    <a href="./inscription.php" class="nav-link">
                        <i class="fa fa-power-off"></i> 
                    </a>
                </li>
                
                <?php } ?>
            </ul>
               
            </div>
        </div>
    </nav>
</header>
<div style="height:71px"></div>