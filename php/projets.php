<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MNC-Projets</title>

    <!-- Intégration de Bootstrap CSS via un CDN pour styliser rapidement la page -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>

    <!-- Mon fichier CSS personnalisé pour ajouter mes propres styles -->
    <link rel="stylesheet" href="../css/stylesProj.css">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

    <!-- Intégration du fichier JavaScript de Bootstrap via un CDN pour les interactions -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>       

    <section class="blur-background">
        <nav id="navbar">
            <div>
                <div class="svg-container">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                >   
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M8.25 6.75h9M8.25 12h3.75M2.25 3h19.5a1.5 1.5 0 011.5 1.5v15a1.5 1.5 0 01-1.5 1.5H2.25A1.5 1.5 0 01.75 19.5V4.5A1.5 1.5 0 012.25 3z"
                    />
                </svg>


                </div>
                <div class="spicy-rice-regular">MNC</div>
            </div>
            <div class="container">
            <input type="checkbox" id="label-check" class="label-check" />
            <label class="hamburger-label" for="label-check">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
                <label></label
            ></label>
            </div>
            <div class="navigation">
                <a href="../index.php" class="nav-link">Accueil</a>
                <a href="#" class="nav-link active">Mes projets</a>
                <a href="../index.php#aPropos" class="nav-link">A propos</a>
                <a href="../index.php#contactSec" class="nav-link">Contact</a>
            </div>
        </nav>

        <div id="nav-modal" class="modal">
            <div class="modal-content">
                <div class="row">
                <span id="close-modal" class="close-btn">&times;</span>
                </div>
               
                <a href="../index.php" class="nav-link">Accueil</a>
                <a href="#" class="nav-link">Mes projets</a>
                <a href="../index.php#aPropos" class="nav-link">A propos</a>
                <a href="contact.html" class="nav-link">Contact</a>
            </div>
        </div>

        <div id="demo"></div>
        

        <div class="details" id="details-even">
            <div class="place-box">
                <div class="text">Développement logiciel JAVA</div>
            </div>
            <div class="title-box-1"><div class="title-1">JAVA</div></div>
            <div class="title-box-2"><div class="title-2">ECLIPSE</div></div>
            <div class="desc">
            Une application logicielle développée en Java avec Eclipse, axée sur la création de solutions logicielles efficaces et évolutives pour divers besoins des utilisateurs            </div>

        </div>

        <div class="details" id="details-odd">
            <div class="place-box">
                <div class="text">Développement logiciel JAVA</div>
            </div>
            <div class="title-box-1"><div class="title-1">JAVA</div></div>
            <div class="title-box-2"><div class="title-2">ECLIPSE</div></div>
            <div class="desc">
            Une application logicielle développée en Java avec Eclipse, axée sur la création de solutions logicielles efficaces et évolutives pour divers besoins des utilisateurs            </div>
     
        </div>

        <div class="pagination" id="pagination">
       
            <div class="progress-sub-container" >
                <div class="progress-sub-background" >
                    <div class="progress-sub-foreground" ></div>
                </div>
            </div>
            <div class="slide-numbers" id="slide-numbers"></div>
        </div>

        <div class="cover" ></div>

    </section>
    
    <script src="../js/scriptTemp.js"></script>
    <script src="../js/script.js"></script>
</body>
</html>
