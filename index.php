<script>
// Vérifie si le paramètre 'status' est dans l'URL
document.addEventListener("DOMContentLoaded", function () {
    const urlParams = new URLSearchParams(window.location.search);
    const status = urlParams.get('status');

    // Si l'envoi est réussi, affiche le message de confirmation
    if (status === 'success') {
        const confirmationMessage = document.getElementById('confirmationMessage');
        confirmationMessage.classList.add('show');

         // Effacer le paramètre de l'URL après l'affichage
         window.history.replaceState(null, null, window.location.pathname);

         window.location.hash = '#contactSec'; // Ajoute le fragment à l'URL
            const element = document.getElementById('contactSec');
            if (element) {
                element.scrollIntoView({ behavior: "smooth" });
            }
    }
});
</script>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MNC</title>

    <!-- Intégration de Bootstrap CSS via un CDN pour styliser rapidement la page -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>

    <!-- Mon fichier CSS personnalisé pour ajouter mes propres styles -->
    <link rel="stylesheet" href="./css/styles.css">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

    <!-- Intégration du fichier JavaScript de Bootstrap via un CDN pour les interactions -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>       
        <nav>
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
                <a href="#" class="nav-link active">Accueil</a>
                <a href="#aPropos" class="nav-link">A propos</a>
                <a href="#contactSec" class="nav-link">Contact</a>
            </div>

            

        </nav>
        <div id="nav-modal" class="modal">
            <div class="modal-content">
                <div class="row">
                <span id="close-modal" class="close-btn">&times;</span>
                </div>
               
                <a href="#" class="nav-link">Accueil</a>
                <a href="./php/projets.php" class="nav-link">Mes projets</a>
                <a href="#aPropos" class="nav-link">A propos</a>
                <a href="#contactSec" class="nav-link">Contact</a>
            </div>
        </div>

    <section class="projects py-5">
        

        <header class="text-center py-5">
            
            <h1 class="cinzel-font">Ingénieur des Services du Numérique en devenir</h1>
            
        </header>

        <div class="container">

            <div class="row">
                <div class="col-md-8">
                <!-- Méssage de bienvenue -->
                    <h1 class="spicy-rice-regular">Je suis, </h1>
                    <p class="spicy-rice-regular">Marc NAHUM CHABI</p>
                    <p class="spicy-rice-regular" id="typing-effect">Expert en développement web, logiciel et applications mobiles</p>
                    <div class="btn-container py-5">
                        <button class="btn-github">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="black">
                                <path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577v-2.17c-3.338.726-4.042-1.416-4.042-1.416-.546-1.387-1.333-1.757-1.333-1.757-1.09-.744.083-.729.083-.729 1.205.085 1.838 1.237 1.838 1.237 1.07 1.835 2.809 1.305 3.495.998.108-.775.418-1.305.76-1.605-2.665-.305-5.466-1.332-5.466-5.93 0-1.31.47-2.38 1.236-3.22-.123-.303-.536-1.523.117-3.176 0 0 1.008-.322 3.3 1.23.957-.266 1.983-.398 3.005-.403 1.022.005 2.048.137 3.006.403 2.29-1.553 3.297-1.23 3.297-1.23.655 1.653.242 2.873.12 3.176.77.84 1.234 1.91 1.234 3.22 0 4.61-2.803 5.623-5.475 5.92.43.372.823 1.102.823 2.222v3.293c0 .32.216.694.824.576 4.765-1.587 8.199-6.084 8.199-11.385 0-6.627-5.373-12-12-12z"/>
                            </svg>
                        </button>

                        <button class="btn-linkedin">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="#0077b5">
                                <path d="M22.23 0H1.77C.79 0 0 .78 0 1.75v20.5C0 23.22.79 24 1.77 24h20.5c.98 0 1.77-.78 1.77-1.75V1.75C24 .78 23.21 0 22.23 0zM7.12 20.45H3.56V9h3.56v11.45zM5.34 7.68c-1.14 0-2.06-.93-2.06-2.06 0-1.14.92-2.06 2.06-2.06s2.06.92 2.06 2.06c0 1.13-.92 2.06-2.06 2.06zm15.11 12.77h-3.56v-5.6c0-1.33-.03-3.04-1.85-3.04-1.85 0-2.13 1.45-2.13 2.95v5.69H9.46V9h3.42v1.56h.05c.48-.91 1.65-1.85 3.4-1.85 3.63 0 4.3 2.39 4.3 5.49v6.25z"/>
                            </svg>
                        </button>
                        
                    </div>
                    
                    <button class="btn">Mon cv</button>
                </div>

                <div class="col-md-4">
                <!-- Ma photo de présentation -->
                    <div id="photo-container">
                        <img id="my-photo" src="./img/2.png" alt="Ma photo">
                        <div id="magic-animation"></div> <!-- Conteneur pour l'animation -->
                    </div>
                </div>
            
            </div>
           

           
            
        </div>
    </section>
    
    <section id="competences" class="text-center py-5">
        <h2 class="spicy-rice-regular">Les technologies que j'utilise </h2>
        <div class="skills-container">
            <!-- Angular -->
            <div class="skill-1"> 
                <div class="row">
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 48 48">
                     <linearGradient id="QzbsZZGqvt5vTzXzFrTWxa_j9DnICNnlhGk_gr1" x1="19.369" x2="32.915" y1="6.256" y2="43.472" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#dfe9f2"></stop><stop offset=".391" stop-color="#d6e0e9"></stop><stop offset="1" stop-color="#bfc8d1"></stop></linearGradient><path fill="url(#QzbsZZGqvt5vTzXzFrTWxa_j9DnICNnlhGk_gr1)" d="M22.959,2.339L5.285,8.49c-1.333,0.464-2.163,1.795-1.992,3.197l2.828,23.187	c0.117,0.963,0.693,1.809,1.545,2.273l14.85,8.072c0.897,0.487,1.98,0.485,2.875-0.005l14.952-8.195	c0.847-0.464,1.419-1.309,1.536-2.268l2.826-23.174c0.172-1.41-0.668-2.747-2.013-3.204L24.91,2.332	C24.277,2.117,23.59,2.119,22.959,2.339z"></path><linearGradient id="QzbsZZGqvt5vTzXzFrTWxb_j9DnICNnlhGk_gr2" x1="24" x2="24" y1="2.152" y2="39.957" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#f44f5a"></stop><stop offset=".443" stop-color="#ee3d4a"></stop><stop offset="1" stop-color="#e52030"></stop></linearGradient><path fill="url(#QzbsZZGqvt5vTzXzFrTWxb_j9DnICNnlhGk_gr2)" d="M42.62,12.14L39.96,34	c-0.08,0.64-0.46,1.2-1.03,1.51L24.94,43c-0.3,0.16-0.62,0.23-0.94,0.23c-0.05,0-0.09-0.01-0.14-0.01c-0.27-0.01-0.54-0.08-0.8-0.22	L9.07,35.64c-0.56-0.31-0.95-0.88-1.03-1.52L5.38,12.24c-0.12-0.93,0.44-1.82,1.32-2.13l16.62-5.87c0.18-0.06,0.36-0.1,0.54-0.1	c0.05-0.01,0.09-0.01,0.14-0.01c0.22,0,0.44,0.04,0.66,0.11c1.58,0.57,6.2,2.23,16.62,5.76C42.17,10.31,42.74,11.2,42.62,12.14z"></path><path fill="#fff" d="M11.013,34h4.409L24,15.504V5.996L11.013,34z"></path><path fill="#fff" d="M18,24h6v4h-6V24z"></path><path fill="#b31523" d="M42.62,12.14L39.96,34c-0.08,0.64-0.46,1.2-1.03,1.51L24.94,43c-0.3,0.16-0.62,0.23-0.94,0.23V4.13	c0.22,0,0.44,0.04,0.66,0.11c1.58,0.57,6.2,2.23,16.62,5.76C42.17,10.31,42.74,11.2,42.62,12.14z"></path><path fill="#bfc8d1" d="M24,6v9.508l8.578,18.496h4.409L24,6z"></path><path fill="#bfc8d1" d="M24,24.004h6v4h-6V24.004z"></path><path d="M24,5.996V6l12.987,28.004h-4.409l-2.783-6H24V28h-5.795l-2.783,6h-4.409L24,5.996 M20.06,24H24v0.004h3.94L24,15.508 v-0.004L20.06,24 M25,1.467l-1.907,4.108L10.106,33.579L9.447,35h1.566h4.409h0.639l0.269-0.579L18.843,29H23l1,0.004h5.157 l2.514,5.421l0.269,0.579h0.639h4.409h1.566l-0.659-1.421L25,5.779V1.467L25,1.467z M21.626,23l2.373-5.117l2.375,5.121H25L24,23 H21.626L21.626,23z" opacity=".05"></path><path d="M24,5.996V6l12.987,28.004h-4.409l-2.783-6H24V28h-5.795l-2.783,6h-4.409L24,5.996 M20.06,24H24v0.004h3.94L24,15.508 v-0.004L20.06,24 M24.5,3.733l-0.954,2.052L10.559,33.79L10.23,34.5h0.783h4.409h0.319l0.134-0.29l2.648-5.71H23.5l0.5,0.004 h5.476l2.648,5.71l0.134,0.29h0.319h4.409h0.783l-0.329-0.71L24.5,5.89V3.733L24.5,3.733z M20.843,23.5l3.156-6.806l3.158,6.81 H24.5L24,23.5H20.843L20.843,23.5z" opacity=".07"></path>
                </svg>
                <p class="spicy-rice-regular  text-light">Angular</p>
                </div>
                
                
               
                
            </div>
            <!-- Ionic -->
            <div class="skill-2">
                <div class="row">
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 48 48">
                <circle cx="24" cy="24" r="9" fill="#448aff"></circle><circle cx="37" cy="11" r="4" fill="#448aff"></circle><path fill="#448aff" d="M41.706,14.715c-0.842,1.064-2.034,1.836-3.405,2.139C39.379,19.007,40,21.429,40,24	c0,8.837-7.163,16-16,16S8,32.837,8,24S15.163,8,24,8c2.571,0,4.993,0.621,7.145,1.699c0.303-1.371,1.075-2.564,2.139-3.405	C30.509,4.835,27.354,4,24,4C12.954,4,4,12.954,4,24c0,11.046,8.954,20,20,20s20-8.954,20-20C44,20.646,43.165,17.491,41.706,14.715	z"></path>
                </svg>                  
                 <p class="spicy-rice-regular text-light"> Ionic</p>

                </div>
            

            </div>
            <!-- TypeScript -->
            <div class="skill-3">

                <div class="row">
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 48 48">
                <rect width="36" height="36" x="6" y="6" fill="#1976d2"></rect><polygon fill="#fff" points="27.49,22 14.227,22 14.227,25.264 18.984,25.264 18.984,40 22.753,40 22.753,25.264 27.49,25.264"></polygon><path fill="#fff" d="M39.194,26.084c0,0-1.787-1.192-3.807-1.192s-2.747,0.96-2.747,1.986 c0,2.648,7.381,2.383,7.381,7.712c0,8.209-11.254,4.568-11.254,4.568V35.22c0,0,2.152,1.622,4.733,1.622s2.483-1.688,2.483-1.92 c0-2.449-7.315-2.449-7.315-7.878c0-7.381,10.658-4.469,10.658-4.469L39.194,26.084z"></path>
                </svg>
                <p class="spicy-rice-regular text-light">TypeScript</p>

                </div>
                
            </div>
            <!-- JavaScript -->
            <div class="skill-4">
                <div class="row">
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 48 48">
                      <path fill="#ffd600" d="M6,42V6h36v36H6z"></path><path fill="#000001" d="M29.538 32.947c.692 1.124 1.444 2.201 3.037 2.201 1.338 0 2.04-.665 2.04-1.585 0-1.101-.726-1.492-2.198-2.133l-.807-.344c-2.329-.988-3.878-2.226-3.878-4.841 0-2.41 1.845-4.244 4.728-4.244 2.053 0 3.528.711 4.592 2.573l-2.514 1.607c-.553-.988-1.151-1.377-2.078-1.377-.946 0-1.545.597-1.545 1.377 0 .964.6 1.354 1.985 1.951l.807.344C36.452 29.645 38 30.839 38 33.523 38 36.415 35.716 38 32.65 38c-2.999 0-4.702-1.505-5.65-3.368L29.538 32.947zM17.952 33.029c.506.906 1.275 1.603 2.381 1.603 1.058 0 1.667-.418 1.667-2.043V22h3.333v11.101c0 3.367-1.953 4.899-4.805 4.899-2.577 0-4.437-1.746-5.195-3.368L17.952 33.029z"></path>
                </svg>
                <p class="spicy-rice-regular text-light">JavaScript</p>
                </div>
                
            </div>
            <!-- ReactJS -->
            <div class="skill-5">
                <div class="row">
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 64 64">
                <linearGradient id="9GkdZLxQa1XTDblOFwLcpa_t4YbEbA834uH_gr1" x1="32" x2="32" y1="25.213" y2="36.722" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#6dc7ff"></stop><stop offset="1" stop-color="#e6abff"></stop></linearGradient><circle cx="32" cy="32" r="6" fill="url(#9GkdZLxQa1XTDblOFwLcpa_t4YbEbA834uH_gr1)"></circle><linearGradient id="9GkdZLxQa1XTDblOFwLcpb_t4YbEbA834uH_gr2" x1="32" x2="32" y1="7.426" y2="53.44" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#1a6dff"></stop><stop offset="1" stop-color="#c822ff"></stop></linearGradient><path fill="url(#9GkdZLxQa1XTDblOFwLcpb_t4YbEbA834uH_gr2)" d="M58,32c0-3.758-4.243-7.017-10.853-8.992c0.221-1.031,0.407-2.045,0.524-3.015	c0.657-5.483-0.483-9.323-3.211-10.813c-2.729-1.489-6.574-0.372-10.831,3.146c-0.544,0.449-1.087,0.938-1.629,1.45	c-0.542-0.513-1.085-1.001-1.629-1.45C26.114,8.808,22.267,7.692,19.54,9.18c-2.728,1.489-3.868,5.329-3.211,10.813	c0.116,0.971,0.303,1.984,0.524,3.015C10.243,24.983,6,28.242,6,32s4.243,7.017,10.853,8.992c-0.221,1.031-0.407,2.045-0.524,3.015	c-0.657,5.483,0.483,9.323,3.211,10.813c0.789,0.431,1.67,0.643,2.628,0.643c2.357,0,5.177-1.287,8.203-3.788	c0.544-0.449,1.087-0.938,1.629-1.45c0.542,0.513,1.085,1.001,1.629,1.45c3.026,2.501,5.846,3.788,8.203,3.788	c0.958,0,1.84-0.213,2.628-0.643c2.728-1.489,3.868-5.329,3.211-10.813c-0.116-0.971-0.303-1.984-0.524-3.015	C53.757,39.017,58,35.758,58,32z M34.902,13.866c3.53-2.917,6.665-3.987,8.599-2.931c1.934,1.055,2.729,4.27,2.184,8.818	c-0.105,0.879-0.273,1.796-0.469,2.729c-2.117-0.519-4.43-0.915-6.892-1.166c-1.564-2.275-3.215-4.351-4.908-6.132	C33.91,14.718,34.406,14.276,34.902,13.866z M39.899,36.313c-0.853,1.562-1.76,3.055-2.702,4.474C35.546,40.925,33.811,41,32,41	s-3.546-0.075-5.198-0.213c-0.941-1.42-1.849-2.912-2.702-4.474c-0.784-1.435-1.499-2.878-2.142-4.313	c0.643-1.434,1.358-2.877,2.142-4.313c0.853-1.562,1.76-3.055,2.702-4.474C28.454,23.075,30.189,23,32,23s3.546,0.075,5.198,0.213	c0.941,1.42,1.849,2.912,2.702,4.474c0.784,1.435,1.499,2.878,2.142,4.313C41.399,33.434,40.683,34.877,39.899,36.313z M43.078,34.487c0.68,1.739,1.238,3.444,1.676,5.096c-1.544,0.376-3.21,0.694-5.009,0.929c0.657-1.05,1.3-2.124,1.909-3.241	C42.161,36.346,42.629,35.416,43.078,34.487z M32,47.403c-1.272-1.341-2.522-2.863-3.729-4.513C29.487,42.961,30.73,43,32,43	s2.513-0.039,3.729-0.11C34.522,44.54,33.272,46.062,32,47.403z M24.254,40.512c-1.799-0.235-3.465-0.553-5.009-0.929	c0.438-1.652,0.996-3.358,1.676-5.096c0.45,0.93,0.918,1.859,1.423,2.785C22.954,38.388,23.597,39.462,24.254,40.512z M20.922,29.513c-0.68-1.739-1.238-3.445-1.676-5.096c1.544-0.376,3.21-0.694,5.009-0.929c-0.657,1.05-1.3,2.124-1.909,3.241	C21.839,27.654,21.371,28.584,20.922,29.513z M32,16.597c1.272,1.341,2.522,2.863,3.729,4.513C34.513,21.039,33.27,21,32,21	s-2.513,0.039-3.729,0.11C29.478,19.46,30.728,17.938,32,16.597z M41.655,26.729c-0.609-1.116-1.252-2.19-1.909-3.241	c1.799,0.235,3.465,0.553,5.009,0.929c-0.438,1.652-0.996,3.358-1.676,5.096C42.629,28.584,42.161,27.654,41.655,26.729z M18.315,19.754c-0.546-4.549,0.25-7.764,2.184-8.818c0.488-0.267,1.053-0.397,1.681-0.397c1.86,0,4.278,1.147,6.918,3.328	c0.496,0.41,0.993,0.852,1.488,1.319c-1.693,1.781-3.345,3.856-4.908,6.132c-2.463,0.251-4.776,0.648-6.892,1.166	C18.588,21.55,18.421,20.633,18.315,19.754z M8,32c0-2.6,3.47-5.303,9.317-7.06c0.606,2.279,1.437,4.654,2.471,7.06	c-1.034,2.407-1.865,4.782-2.471,7.06C11.47,37.303,8,34.6,8,32z M29.098,50.134c-3.53,2.917-6.662,3.989-8.599,2.931	c-1.934-1.055-2.729-4.27-2.184-8.818c0.105-0.879,0.273-1.796,0.469-2.729c2.117,0.519,4.43,0.915,6.892,1.166	c1.564,2.275,3.215,4.351,4.908,6.132C30.09,49.282,29.594,49.724,29.098,50.134z M45.685,44.246	c0.546,4.549-0.25,7.764-2.184,8.818c-1.934,1.059-5.068-0.014-8.599-2.931c-0.496-0.41-0.993-0.852-1.488-1.319	c1.693-1.781,3.345-3.856,4.908-6.132c2.463-0.251,4.776-0.648,6.892-1.166C45.412,42.45,45.579,43.367,45.685,44.246z M46.683,39.06c-0.606-2.279-1.437-4.654-2.471-7.06c1.034-2.407,1.865-4.782,2.471-7.06C52.53,26.697,56,29.4,56,32	S52.53,37.303,46.683,39.06z"></path>
                </svg>                
                <p class="spicy-rice-regular text-light">ReactJS</p>

                </div>
               
            </div>

            <div class="skill-6">
                <div class="row">
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 48 48">
                       <path fill="#7cb342" d="M12 29c0 1.1-.9 2-2 2s-2-.9-2-2v-9c0-1.1.9-2 2-2s2 .9 2 2V29zM40 29c0 1.1-.9 2-2 2s-2-.9-2-2v-9c0-1.1.9-2 2-2s2 .9 2 2V29zM22 40c0 1.1-.9 2-2 2s-2-.9-2-2v-9c0-1.1.9-2 2-2s2 .9 2 2V40zM30 40c0 1.1-.9 2-2 2s-2-.9-2-2v-9c0-1.1.9-2 2-2s2 .9 2 2V40z"></path><path fill="#7cb342" d="M14 18v15c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V18H14zM24 8c-6 0-9.7 3.6-10 8h20C33.7 11.6 30 8 24 8zM20 13.6c-.6 0-1-.4-1-1 0-.6.4-1 1-1s1 .4 1 1C21 13.1 20.6 13.6 20 13.6zM28 13.6c-.6 0-1-.4-1-1 0-.6.4-1 1-1s1 .4 1 1C29 13.1 28.6 13.6 28 13.6z"></path><path fill="#7cb342" d="M28.3 10.5c-.2 0-.4-.1-.6-.2-.5-.3-.6-.9-.3-1.4l1.7-2.5c.3-.5.9-.6 1.4-.3.5.3.6.9.3 1.4l-1.7 2.5C29 10.3 28.7 10.5 28.3 10.5zM19.3 10.1c-.3 0-.7-.2-.8-.5l-1.3-2.1c-.3-.5-.2-1.1.3-1.4.5-.3 1.1-.2 1.4.3l1.3 2.1c.3.5.2 1.1-.3 1.4C19.7 10 19.5 10.1 19.3 10.1z"></path>
                </svg>
                <p class="spicy-rice-regular text-light">Android</p>

                </div>
                
            </div>
            <!-- Java -->
            <div class="skill-7">
                <div class="row">
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 48 48">
                       <path fill="#d43a02" d="M23.65,24.898c-0.998-1.609-1.722-2.943-2.725-5.455C19.229,15.2,31.24,11.366,26.37,3.999	c2.111,5.089-7.577,8.235-8.477,12.473C17.07,20.37,23.645,24.898,23.65,24.898z"></path><path fill="#d43a02" d="M23.878,17.27c-0.192,2.516,2.229,3.857,2.299,5.695c0.056,1.496-1.447,2.743-1.447,2.743	s2.728-0.536,3.579-2.818c0.945-2.534-1.834-4.269-1.548-6.298c0.267-1.938,6.031-5.543,6.031-5.543S24.311,11.611,23.878,17.27z"></path><linearGradient id="P9ujQJgz7XN9Qbny9S64Ha_Pd2x9GWu9ovX_gr1" x1="22.677" x2="30.737" y1="21.174" y2="43.318" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#5c65d6"></stop><stop offset=".999" stop-color="#464eb0"></stop></linearGradient><path fill="url(#P9ujQJgz7XN9Qbny9S64Ha_Pd2x9GWu9ovX_gr1)" d="M32.084,25.055c1.754-0.394,3.233,0.723,3.233,2.01c0,2.901-4.021,5.643-4.021,5.643 s6.225-0.742,6.225-5.505C37.521,24.053,34.464,23.266,32.084,25.055z M29.129,27.395c0,0,1.941-1.383,2.458-1.902 c-4.763,1.011-15.638,1.147-15.638,0.269c0-0.809,3.507-1.638,3.507-1.638s-7.773-0.112-7.773,2.181 C11.683,28.695,21.858,28.866,29.129,27.395z"></path><linearGradient id="P9ujQJgz7XN9Qbny9S64Hb_Pd2x9GWu9ovX_gr2" x1="19.498" x2="27.296" y1="22.77" y2="44.196" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#5c65d6"></stop><stop offset=".999" stop-color="#464eb0"></stop></linearGradient><path fill="url(#P9ujQJgz7XN9Qbny9S64Hb_Pd2x9GWu9ovX_gr2)" d="M27.935,29.571 c-4.509,1.499-12.814,1.02-10.354-0.993c-1.198,0-2.974,0.963-2.974,1.889c0,1.857,8.982,3.291,15.63,0.572L27.935,29.571z"></path><linearGradient id="P9ujQJgz7XN9Qbny9S64Hc_Pd2x9GWu9ovX_gr3" x1="18.698" x2="26.59" y1="23.455" y2="45.14" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#5c65d6"></stop><stop offset=".999" stop-color="#464eb0"></stop></linearGradient><path fill="url(#P9ujQJgz7XN9Qbny9S64Hc_Pd2x9GWu9ovX_gr3)" d="M18.686,32.739 c-1.636,0-2.695,1.054-2.695,1.822c0,2.391,9.76,2.632,13.627,0.205l-2.458-1.632C24.271,34.404,17.014,34.579,18.686,32.739z"></path><linearGradient id="P9ujQJgz7XN9Qbny9S64Hd_Pd2x9GWu9ovX_gr4" x1="18.03" x2="25.861" y1="24.198" y2="45.712" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#5c65d6"></stop><stop offset=".999" stop-color="#464eb0"></stop></linearGradient><path fill="url(#P9ujQJgz7XN9Qbny9S64Hd_Pd2x9GWu9ovX_gr4)" d="M36.281,36.632 c0-0.936-1.055-1.377-1.433-1.588c2.228,5.373-22.317,4.956-22.317,1.784c0-0.721,1.807-1.427,3.477-1.093l-1.42-0.839 C11.26,34.374,9,35.837,9,37.017C9,42.52,36.281,42.255,36.281,36.632z"></path><linearGradient id="P9ujQJgz7XN9Qbny9S64He_Pd2x9GWu9ovX_gr5" x1="20.725" x2="28.228" y1="24.582" y2="45.197" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#5c65d6"></stop><stop offset=".999" stop-color="#464eb0"></stop></linearGradient><path fill="url(#P9ujQJgz7XN9Qbny9S64He_Pd2x9GWu9ovX_gr5)" d="M39,38.604 c-4.146,4.095-14.659,5.587-25.231,3.057C24.341,46.164,38.95,43.628,39,38.604z"></path>
                </svg>
                <p class="spicy-rice-regular text-light">Java</p>

                </div>
                
            </div>
            <!-- JavaEE -->
            <div class="skill-8">
                <div class="row">
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 48 48">
                       <path fill="#d43a02" d="M23.65,24.898c-0.998-1.609-1.722-2.943-2.725-5.455C19.229,15.2,31.24,11.366,26.37,3.999	c2.111,5.089-7.577,8.235-8.477,12.473C17.07,20.37,23.645,24.898,23.65,24.898z"></path><path fill="#d43a02" d="M23.878,17.27c-0.192,2.516,2.229,3.857,2.299,5.695c0.056,1.496-1.447,2.743-1.447,2.743	s2.728-0.536,3.579-2.818c0.945-2.534-1.834-4.269-1.548-6.298c0.267-1.938,6.031-5.543,6.031-5.543S24.311,11.611,23.878,17.27z"></path><linearGradient id="P9ujQJgz7XN9Qbny9S64Ha_Pd2x9GWu9ovX_gr1" x1="22.677" x2="30.737" y1="21.174" y2="43.318" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#5c65d6"></stop><stop offset=".999" stop-color="#464eb0"></stop></linearGradient><path fill="url(#P9ujQJgz7XN9Qbny9S64Ha_Pd2x9GWu9ovX_gr1)" d="M32.084,25.055c1.754-0.394,3.233,0.723,3.233,2.01c0,2.901-4.021,5.643-4.021,5.643 s6.225-0.742,6.225-5.505C37.521,24.053,34.464,23.266,32.084,25.055z M29.129,27.395c0,0,1.941-1.383,2.458-1.902 c-4.763,1.011-15.638,1.147-15.638,0.269c0-0.809,3.507-1.638,3.507-1.638s-7.773-0.112-7.773,2.181 C11.683,28.695,21.858,28.866,29.129,27.395z"></path><linearGradient id="P9ujQJgz7XN9Qbny9S64Hb_Pd2x9GWu9ovX_gr2" x1="19.498" x2="27.296" y1="22.77" y2="44.196" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#5c65d6"></stop><stop offset=".999" stop-color="#464eb0"></stop></linearGradient><path fill="url(#P9ujQJgz7XN9Qbny9S64Hb_Pd2x9GWu9ovX_gr2)" d="M27.935,29.571 c-4.509,1.499-12.814,1.02-10.354-0.993c-1.198,0-2.974,0.963-2.974,1.889c0,1.857,8.982,3.291,15.63,0.572L27.935,29.571z"></path><linearGradient id="P9ujQJgz7XN9Qbny9S64Hc_Pd2x9GWu9ovX_gr3" x1="18.698" x2="26.59" y1="23.455" y2="45.14" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#5c65d6"></stop><stop offset=".999" stop-color="#464eb0"></stop></linearGradient><path fill="url(#P9ujQJgz7XN9Qbny9S64Hc_Pd2x9GWu9ovX_gr3)" d="M18.686,32.739 c-1.636,0-2.695,1.054-2.695,1.822c0,2.391,9.76,2.632,13.627,0.205l-2.458-1.632C24.271,34.404,17.014,34.579,18.686,32.739z"></path><linearGradient id="P9ujQJgz7XN9Qbny9S64Hd_Pd2x9GWu9ovX_gr4" x1="18.03" x2="25.861" y1="24.198" y2="45.712" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#5c65d6"></stop><stop offset=".999" stop-color="#464eb0"></stop></linearGradient><path fill="url(#P9ujQJgz7XN9Qbny9S64Hd_Pd2x9GWu9ovX_gr4)" d="M36.281,36.632 c0-0.936-1.055-1.377-1.433-1.588c2.228,5.373-22.317,4.956-22.317,1.784c0-0.721,1.807-1.427,3.477-1.093l-1.42-0.839 C11.26,34.374,9,35.837,9,37.017C9,42.52,36.281,42.255,36.281,36.632z"></path><linearGradient id="P9ujQJgz7XN9Qbny9S64He_Pd2x9GWu9ovX_gr5" x1="20.725" x2="28.228" y1="24.582" y2="45.197" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#5c65d6"></stop><stop offset=".999" stop-color="#464eb0"></stop></linearGradient><path fill="url(#P9ujQJgz7XN9Qbny9S64He_Pd2x9GWu9ovX_gr5)" d="M39,38.604 c-4.146,4.095-14.659,5.587-25.231,3.057C24.341,46.164,38.95,43.628,39,38.604z"></path>
                </svg>
                <p class="spicy-rice-regular text-light">JakartaEE</p>

                </div>
                 
            </div>

             <!-- SQL -->
             <div class="skill-9">
                <div class="row">
               
                <p class="spicy-rice-regular text-light">SQL-PL/SQL</p>

                </div>
                 
            </div>

             <!-- PHP -->
             <div class="skill-10">
                <div class="row">
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 80 80">
                <path fill="#dcd5f2" d="M40,61.5C18.22,61.5,0.5,51.855,0.5,40S18.22,18.5,40,18.5S79.5,28.145,79.5,40S61.78,61.5,40,61.5z"></path><path fill="#8b75a1" d="M40,19c21.505,0,39,9.421,39,21S61.505,61,40,61S1,51.579,1,40S18.495,19,40,19 M40,18 C17.909,18,0,27.85,0,40s17.909,22,40,22s40-9.85,40-22S62.091,18,40,18L40,18z"></path><path fill="#36404d" d="M25.112 34c1.725 0 3.214.622 4.084 1.706.749.934.981 2.171.668 3.577C29.023 43.074 27.395 44 21.57 44h-4.14l1.75-10H25.112M25.112 32H17.5L14 52h2l1.056-6h4.515c5.863 0 9.053-.905 10.246-6.284C32.842 35.096 29.436 32 25.112 32L25.112 32zM61.112 34c1.725 0 3.214.622 4.084 1.706.749.934.981 2.171.668 3.577C65.023 43.074 63.395 44 57.57 44h-4.14l1.75-10H61.112M61.112 32H53.5L50 52h2l1.056-6h4.515c5.863 0 9.053-.905 10.246-6.284C68.842 35.096 65.436 32 61.112 32L61.112 32z"></path><g><path fill="#36404d" d="M49.072,33.212C48.193,32.348,46.644,32,44.334,32h-5.538L40,26h-2.1L34,46h1.99l2.388-12h0.419 h5.538c2.338,0,3.094,0.4,3.335,0.637c0.343,0.338,0.424,1.226,0.217,2.363l-1.767,9h2.106l1.626-8.63 C50.199,35.462,49.936,34.062,49.072,33.212z"></path></g>
                </svg>
                <p class="spicy-rice-regular text-light">PHP</p>

                </div>
                 
            </div>
          
        </div>

        <h2 class="spicy-rice-regular py-1">Les logiciels que j'utilise </h2>
        <div class="skills-container-2">
             <!-- Vscode -->
             <div class="skill-2-1">
                <div class="row">
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 48 48">
                <path fill="#29b6f6" d="M44,11.11v25.78c0,1.27-0.79,2.4-1.98,2.82l-8.82,4.14L34,33V15L33.2,4.15l8.82,4.14 C43.21,8.71,44,9.84,44,11.11z"></path><path fill="#0277bd" d="M9,33.896L34,15V5.353c0-1.198-1.482-1.758-2.275-0.86L4.658,29.239 c-0.9,0.83-0.849,2.267,0.107,3.032c0,0,1.324,1.232,1.803,1.574C7.304,34.37,8.271,34.43,9,33.896z"></path><path fill="#0288d1" d="M9,14.104L34,33v9.647c0,1.198-1.482,1.758-2.275,0.86L4.658,18.761 c-0.9-0.83-0.849-2.267,0.107-3.032c0,0,1.324-1.232,1.803-1.574C7.304,13.63,8.271,13.57,9,14.104z"></path>
                </svg>
                <p class="spicy-rice-regular text-light">Vs code</p>

                </div>
                 
            </div>

           

              <!-- Eclipse -->
            <div class="skill-2-2">
                 <div class="row">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 50 50">
                    <path d="M 19.509766 4.3144531 C 9.5887656 5.9844531 2 14.612 2 25 C 2 35.388 9.5887656 44.015547 19.509766 45.685547 C 11.055766 42.615547 5 34.502 5 25 C 5 15.498 11.055766 7.3844531 19.509766 4.3144531 z M 27 5 C 17.684 5 9.87925 11.379 7.65625 20 L 46.345703 20 C 44.121703 11.379 36.316 5 27 5 z M 7.2480469 22 C 7.1490469 22.657 7.0847812 23.324 7.0507812 24 L 46.949219 24 C 46.915219 23.324 46.851953 22.657 46.751953 22 L 7.2480469 22 z M 7.0507812 26 C 7.0847812 26.676 7.1490469 27.343 7.2480469 28 L 46.751953 28 C 46.850953 27.343 46.915219 26.676 46.949219 26 L 7.0507812 26 z M 7.65625 30 C 9.87925 38.621 17.684 45 27 45 C 36.316 45 44.12075 38.621 46.34375 30 L 7.65625 30 z"></path>
                    </svg>              
                    <p class="spicy-rice-regular text-light">Eclipse</p>
                 </div>                             
            </div>

              <!-- MySql -->
              <div class="skill-2-3">
                 <div class="row">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 48 48">
                    <path fill="#00796b" d="M0.002,35.041h1.92v-7.085l2.667,6.057c0.329,0.755,0.779,1.022,1.662,1.022 s1.315-0.267,1.644-1.022l2.667-5.902v6.93h1.92v-7.258c0-0.697-0.277-1.035-0.849-1.209c-1.367-0.43-2.285-0.059-2.7,0.872 l-2.735,6.16l-2.649-6.16c-0.398-0.93-1.332-1.302-2.7-0.872C0.277,26.748,0,27.085,0,27.782v7.258H0.002z"></path><path fill="#00796b" d="M13.441,29.281h1.92v4.055c-0.015,0.2,0.064,0.731,0.99,0.745c0.472,0.008,2.821,0,2.85,0v-4.8h1.92 c0.008,0,0,5.968,0,5.993c0.01,1.472-1.828,1.662-2.673,1.687h-5.006v-0.96c0.01,0,4.787,0.001,4.801,0 c1.088-0.115,0.959-0.714,0.959-0.896v-0.064H16.19c-1.67-0.015-2.735-0.751-2.747-1.59C13.441,33.373,13.479,29.317,13.441,29.281 z"></path><path fill="#f57f17" d="M22.081,35.041h4.807c0.63,0,1.242-0.132,1.728-0.36c0.81-0.372,1.144-0.875,1.144-1.536v-1.368 c0-1.476-1.83-1.536-2.88-1.536h-1.92c-0.755,0-0.87-0.456-0.96-0.96v-0.96c0.09-0.384,0.258-0.9,0.923-0.96 c0.773,0,4.836,0,4.836,0v-0.96h-4.566c-0.755,0-3.114,0.09-3.114,1.92v1.187c0,0.84,0.738,1.524,2.34,1.692 c0.18,0.012,0.36,0.024,0.539,0.024c0,0,1.866-0.036,1.92-0.024c1.08,0,0.96,0.84,0.96,0.96v0.96c0,0.132-0.03,0.96-0.971,0.96 c-0.072,0-4.789,0-4.789,0V35.041z"></path><path fill="#f57f17" d="M40.32,33.08c0,1.159,0.655,1.809,2.392,1.939c0.162,0.011,0.325,0.021,0.488,0.021H48v-0.96h-4.435 c-0.991,0-1.325-0.416-1.325-1.011v-6.669h-1.92V33.08z"></path><path fill="#f57f17" d="M30.704,33.121v-4.8c0-1.02,0.5-1.724,1.916-1.92h0.672h3.447h0.525 c1.416,0.196,2.08,0.899,2.08,1.92v4.782c0,0.827-0.215,1.271-0.916,1.559L39.916,36h-2.16l-1.07-0.96h-1.257l-2.136,0.012 c-0.309,0-0.635-0.043-0.993-0.141C31.226,34.618,30.704,34.054,30.704,33.121z M32.624,33.121c0.098,0.467,0.473,0.96,1.14,0.96 h1.864l-1.068-0.96h2.175l0.519,0.482c0,0,0.186-0.152,0.186-0.482c0-0.33-0.016-4.8-0.016-4.8c-0.098-0.434-0.538-0.96-1.188-0.96 h-2.471c-0.749,0-1.14,0.548-1.14,1.058L32.624,33.121L32.624,33.121z"></path><path fill="#00796b" d="M46.199,25.389c-1.031-0.028-1.818,0.068-2.491,0.351c-0.191,0.081-0.496,0.083-0.528,0.323 c0.105,0.11,0.121,0.275,0.205,0.41c0.16,0.26,0.432,0.609,0.674,0.791c0.265,0.2,0.538,0.414,0.821,0.587 c0.504,0.307,1.067,0.483,1.553,0.791c0.286,0.181,0.57,0.411,0.85,0.615c0.138,0.102,0.23,0.259,0.41,0.323 c0-0.01,0-0.019,0-0.029c-0.094-0.12-0.119-0.285-0.205-0.411c-0.127-0.127-0.254-0.254-0.381-0.381 c-0.372-0.494-0.846-0.929-1.348-1.289c-0.401-0.288-1.298-0.677-1.466-1.143c-0.01-0.01-0.019-0.019-0.03-0.03 c0.284-0.032,0.617-0.135,0.879-0.205c0.441-0.118,0.834-0.087,1.289-0.205c0.205-0.059,0.41-0.117,0.615-0.176 c0-0.039,0-0.078,0-0.117c-0.23-0.236-0.395-0.548-0.645-0.762c-0.657-0.559-1.373-1.117-2.11-1.583 c-0.409-0.258-0.915-0.426-1.348-0.645c-0.146-0.074-0.402-0.112-0.498-0.234c-0.228-0.29-0.351-0.659-0.527-0.996 c-0.368-0.708-0.73-1.482-1.055-2.227c-0.223-0.508-0.368-1.01-0.645-1.466c-1.331-2.188-2.764-3.509-4.982-4.807 c-0.472-0.276-1.041-0.385-1.642-0.528c-0.323-0.019-0.645-0.039-0.968-0.059c-0.197-0.083-0.401-0.323-0.587-0.44 c-0.735-0.465-2.621-1.475-3.165-0.147c-0.344,0.838,0.514,1.656,0.821,2.081c0.215,0.298,0.491,0.632,0.645,0.968 c0.101,0.22,0.119,0.441,0.205,0.674c0.213,0.574,0.55,1.228,0.826,1.759c0.139,0.269,0.293,0.551,0.469,0.791 c0.108,0.147,0.293,0.212,0.323,0.44c-0.181,0.253-0.191,0.646-0.293,0.968c-0.458,1.445-0.285,3.24,0.381,4.308 c0.204,0.328,0.686,1.032,1.348,0.762c0.579-0.236,0.45-0.967,0.615-1.612c0.037-0.146,0.014-0.253,0.088-0.351 c0,0.01,0,0.019,0,0.03c0.176,0.351,0.351,0.704,0.528,1.055c0.391,0.629,1.084,1.286,1.67,1.73 c0.304,0.23,0.544,0.628,0.938,0.762c0-0.01,0-0.019,0-0.03c-0.01,0-0.019,0-0.03,0c-0.076-0.119-0.196-0.168-0.293-0.264 c-0.229-0.225-0.485-0.504-0.674-0.762c-0.534-0.725-1.006-1.519-1.436-2.345c-0.205-0.395-0.384-0.829-0.557-1.231 c-0.067-0.155-0.066-0.389-0.205-0.469c-0.19,0.294-0.468,0.532-0.615,0.879c-0.234,0.555-0.265,1.233-0.351,1.934 c-0.052,0.018-0.029,0.006-0.059,0.029c-0.408-0.099-0.552-0.518-0.704-0.879c-0.384-0.912-0.455-2.38-0.117-3.429 c0.087-0.272,0.482-1.127,0.323-1.378c-0.076-0.251-0.328-0.396-0.468-0.587c-0.175-0.236-0.348-0.548-0.469-0.821 c-0.314-0.711-0.612-1.538-0.943-2.257c-0.158-0.344-0.425-0.691-0.645-0.996c-0.243-0.338-0.516-0.587-0.704-0.996 c-0.067-0.145-0.158-0.378-0.059-0.528c0.032-0.101,0.076-0.143,0.176-0.176c0.17-0.132,0.643,0.043,0.821,0.117 c0.47,0.195,0.862,0.381,1.26,0.645c0.191,0.127,0.384,0.372,0.615,0.44c0.088,0,0.176,0,0.264,0 c0.413,0.095,0.875,0.03,1.26,0.147c0.682,0.207,1.292,0.529,1.846,0.879c1.69,1.067,3.071,2.585,4.016,4.397 c0.152,0.292,0.218,0.57,0.351,0.879c0.27,0.624,0.611,1.266,0.879,1.876c0.268,0.609,0.53,1.223,0.909,1.73 c0.2,0.266,0.97,0.409,1.319,0.557c0.245,0.104,0.647,0.211,0.879,0.351c0.444,0.268,0.874,0.587,1.289,0.879 C45.528,24.803,46.167,25.124,46.199,25.389z"></path><path fill="#00796b" d="M33.098,14.223c-0.215-0.004-0.367,0.023-0.528,0.059c0,0.01,0,0.019,0,0.03c0.01,0,0.019,0,0.03,0 c0.103,0.21,0.283,0.347,0.41,0.528c0.098,0.205,0.195,0.41,0.293,0.615c0.01-0.01,0.019-0.019,0.029-0.029 c0.181-0.128,0.265-0.332,0.264-0.645c-0.073-0.077-0.084-0.173-0.147-0.264C33.365,14.394,33.203,14.325,33.098,14.223z"></path>
                    </svg>
                    <p class="spicy-rice-regular text-light">MySql</p>
                 </div>                             
            </div>


        </div>

        <h2 class="spicy-rice-regular py-1">Méthodologies de travail</h2>

            <div class="row">
                <div class="col-md-4">
                <p class="spicy-rice-regular text-light">AGILE : SCRUM</p>
                </div>
                <div class="col-md-4">
                <p class="spicy-rice-regular text-light">Cycle en V</p>
                </div>
                <div class="col-md-4">
                <p class="spicy-rice-regular text-light">Méthode en cascade</p>
                </div>
            </div>
        

        </div>
    </section>

    <!-- Section pour le à propos de moi  -->
    <section id="aPropos" class="projects" class="text-center py-5">

        <div class="center-Thing row"><h1 class="spicy-rice-regular">Qui suis-je ?</h1></div>
        
        <div class="row">
            <div class="center-Thing col-md-4">
                <!-- Ma photo de présentation -->
                <div id="photo-container">
                        <img id="my-photo" src="./img/2.png" alt="Ma photo">
                        <div id="magic-animation"></div> <!-- Conteneur pour l'animation -->
                    </div>
            </div>
            <div class="col-md-8">
                <p class="text-present">👋 Bonjour ! Je suis Marc Nahum CHABI, étudiant en cinquième année du cycle ingénieur à l'ESIGELEC, spécialisé en ingénierie des services du numérique. Depuis toujours, le numérique est ma passion, et je m'efforce de transformer cette passion en compétences concrètes et en projets ambitieux.
                    <br> À travers mes études, j’ai développé un solide bagage en programmation, développement de solutions digitales, et intégration des technologies innovantes.

                    <br>En dehors des cours, j’adore explorer le monde des objets connectés et imaginer comment ils peuvent simplifier notre quotidien. Mon intérêt ne s'arrête pas là : j'ai aussi un faible pour le vintage, que ce soit dans le style, la technologie ou l’art. Le dessin est une autre de mes grandes passions ; vous pouvez d'ailleurs retrouver mes créations sur mon site <a href="https://nmcart.fr" target="_blank" class="text-link">nmcart.fr</a>, où je partage mon univers graphique.

                    <br>Curieux, créatif et toujours prêt à relever de nouveaux défis, je m’efforce d'apprendre et d'innover continuellement. 
                    <br>Mon objectif ? Créer un pont entre le numérique et l'humain, en concevant des solutions qui améliorent la vie quotidienne, tout en y apportant une touche d'authenticité et de style rétro.</p>
            </div>
        </div>
    </section>

    <!-- Section pour le formulaire de contact  -->
     <section id="contactSec" class="contacts py-5">
        <div class="row center-Thing">
             <h1 class="spicy-rice-regular">Besoin de plus d'informations ? Contactez-moi dès maintenant !</h1>
        </div>
        <div class="row center-Thing py-5">
        
            <form action="./php/traitementMail.php" method="POST" class="subscribe">
                <input placeholder="Votre e-mail" class="subscribe-input" name="email" type="email" required>
                <br>
                <textarea placeholder="Votre message" class="subscribe-input" name="message" rows="4" required></textarea>
                <br>

                <button type="submit" class="submit-btn">Envoyer</button>
            </form>
                        <!-- Message de confirmation -->
            

        </div>
        <div class="row center-Thing">
            <div id="confirmationMessage" class="hidden">
                <p class="spicy-rice-regular">Votre message a été envoyé avec succès !</p>
            </div>
        </div>
        
        

     </section>


    <script src="./js/script.js"></script>


    <footer class="text-center py-4">
        <p>&copy; 2024 Marc Nahum CHABI. Tous droits réservés.</p>
    </footer>


    
</body>
</html>
