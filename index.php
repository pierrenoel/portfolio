<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Loïc Calcagno">
    <meta name="description" content="Mon portfolio">

    <!--Tailwind-->
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.3/dist/flowbite.min.css"/>

    <!--Font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bellota&display=swap" rel="stylesheet"> 

    <!--Style + favicon-->
    <title>Loïc Calcagno | Portfolio</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="icon" href="assets/img/favicon.png">
</head>

<body>
    <header>
        <!--Navbar-->
        <nav class="bg-white border-gray-200 px-2 sm:px-4 py-4 dark:bg-gray-800">
            <div class="container flex flex-wrap justify-between items-center mx-auto">
                <a href="#" class="flex items-center">
                    <span id="Top" class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Loïc Calcagno | Portfolio</span>
                </a>
                <div class="flex items-center md:order-2">
                    <button type="button" class="flex mr-3 text-sm bg-gray-800 rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="dropdown">
                    <img class="w-8 h-8 rounded-full" src="assets/img/photo.png" alt="user photo">
                </button>
                    <div class="hidden z-50 my-4 text-base list-none bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600" id="dropdown" style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate(1095px, 974px);" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="top">
                        <div class="py-3 px-4">
                            <span class="block text-sm text-gray-900 dark:text-white">Calcagno Loïc</span>
                            <a href="mailto:calcagnoloic93@gmail.com"><span class="block text-sm font-medium text-gray-500 truncate dark:text-gray-400">calcagnoloic93@gmail.com</span></a>
                        </div>
                        <ul class="py-1" aria-labelledby="dropdown">
                            <li>
                                <a href="https://www.linkedin.com/in/loic-calcagno/" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white" target="_blank">Linkedin</a>
                            </li>
                            <li>
                                <a href="https://github.com/CalcagnoLoic" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white" target="_blank">Github</a>
                            </li>
                            <li>
                                <a href="https://calcagnoloic.github.io/CV/index.html" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white" target="_blank">CV en ligne</a>
                            </li>
                            
                        </ul>
                    </div>
                    <button data-collapse-toggle="mobile-menu-2" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mobile-menu-2" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                        <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                </div>
                <div class="hidden justify-between items-center w-full md:flex md:w-auto md:order-1" id="mobile-menu-2">
                <ul class="flex flex-col mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium">
                    <li>
                        <a href="#Apropos" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">A propos de moi</a>
                    </li>
                    <li>
                        <a href="#MesProjets" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Mes projets</a>
                    </li>
                    <li>
                        <a href="#Contact" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
                    </li>
                    <li>
                        <a class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700" href="index.php">🇫🇷</a>
                    </li>
                    <li>
                        <a class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700" href="assets/portfolio_ang.php">🇬🇧</a>
                    </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <!--A propos de moi-->
        <div class="background p-10">
            <section id="Apropos" class="flex flex-col sm:justify-between items-center sm:flex-row mt-12 sm:mt-10 mb-5 sm:mb-8 container mx-auto">
                <div class="w-full md:w-2/4 text-left">
                    <h1 class="font-general-semibold text-3xl md:text-3xl xl:text-4xl text-center sm:text-left text-ternary-dark dark:text-primary-light uppercase pl-5">Hey, bienvenue sur mon portfolio 👋</h1>
                    <p class="font-general-medium mt-2 text-lg sm:text-xl xl:text-2xl text-center sm:text-left leading-none text-ternary-dark pl-5">Je m'appelle Loïc Calcagno et je suis full stack développeur junior</p>
                </div>
                <div class="w-full md:w-2/4 text-right float-right sm:p-5">
                    <img class="img" src="assets/img/img.jpg" alt="photo">
                </div>
            </section>
        </div>
        
        
        
        <!--Mes projets-->
        <section id="MesProjets" class="container mx-auto">
            <h2 class="projet">Mes projets</h2>

            <!--Projet 1-->
            <div class="flex flex-col sm:justify-between items-center sm:flex-row mt-12 sm:mt-10 mb-5 sm:mb-8 container mx-auto">
                <div class="w-full md:w-2/4 text-right float-right sm:p-5">
                    <a href="https://calcagnoloic.github.io/ChallengeFM_landing_page/" target="_blank"><img class="img" src="assets/img/project0.png" alt="Projet 1"></a>
                </div>
                <div class="w-full md:w-2/4 text-left">
                    <h2 class="font-general-semibold text-2xl md:text-xl xl:text-xl text-center sm:text-left text-ternary-dark dark:text-primary-light uppercase pl-5">Challenge frontend mentor</h2>
                    <p class="font-general-medium mt-2 text-lg sm:text-xl xl:text-2xl text-center sm:text-left leading-none text-gray-400 pl-5 pb-5">Réalisation d'un challenge avec la création d'une landing page</p>
                    <div class="mb-5 ml-5 flex gap-5">
                        <img src="assets/img/html5.png" alt="Logo HTML5" class="logo">
                        <img src="assets/img/sass.png" alt="Logo SASS" class="logo">
                    </div>
                    <a href="https://github.com/CalcagnoLoic/ChallengeFM_landing_page" target="_blank"><button class=" bg-gray-800 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded-full ml-5"> Github &#x2794; </button></a>
                </div>
            </div>
            <img class="sep" src="assets/img/sep.png" alt="separation">

            <!--Projet 2-->
            <div class="flex flex-col sm:justify-between items-center sm:flex-row mt-12 sm:mt-10 mb-5 sm:mb-8 container mx-auto">
                <div class="w-full md:w-2/4 text-left">
                    <h2 class="font-general-semibold text-2xl md:text-xl xl:text-xl text-center sm:text-left text-ternary-dark dark:text-primary-light uppercase pl-5">Jeu du pendu</h2>
                    <p class="font-general-medium mt-2 text-lg sm:text-xl xl:text-2xl text-center sm:text-left leading-none text-gray-400 pl-5 pb-5">Réalisation d'un mini jeu du pendu en vanilla Javascript</p>
                    <div class="mb-5 ml-5 flex gap-5">
                        <img src="assets/img/html5.png" alt="Logo HTML5" class="logo">
                        <img src="assets/img/sass.png" alt="Logo SASS" class="logo">
                        <img src="assets/img/javascript.png" alt="Logo Javascript" class="logo">
                    </div>
                    <a href="https://github.com/CalcagnoLoic/Hangman-app" target="_blank"><button class=" bg-gray-800 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded-full ml-5"> Github &#x2794; </button></a>
                </div>
                <div class="w-full md:w-2/4 text-right float-right sm:p-5">
                    <a href="https://calcagnoloic.github.io/Hangman-app/" target="_blank"><img class="img" src="assets/img/project1.png" alt="Projet 2"></a>
                </div>
            </div>
            <img class="sep" src="assets/img/sep.png" alt="separation">

            <!--Projet 3-->
            <div class="flex flex-col sm:justify-between items-center sm:flex-row mt-12 sm:mt-10 mb-5 sm:mb-8 container mx-auto">
                <div class="w-full md:w-2/4 text-right float-right sm:p-5">
                    <a href="https://calcagnoloic.github.io/Hangman-app/" target="_blank"><img class="img" src="assets/img/img.jpg" alt="Projet 3"></a>
                </div>
                <div class="w-full md:w-2/4 text-left">
                    <h2 class="font-general-semibold text-2xl md:text-xl xl:text-xl text-center sm:text-left text-ternary-dark dark:text-primary-light uppercase pl-5">Woodstock</h2>
                    <p class="font-general-medium mt-2 text-lg sm:text-xl xl:text-2xl text-center sm:text-left leading-none text-gray-400 pl-5 pb-5">Réalisation d'une landing page en react</p>
                    <div class="mb-5 ml-5 flex gap-5">
                        <img src="assets/img/html5.png" alt="Logo HTML5" class="logo">
                        <img src="assets/img/sass.png" alt="Logo SASS" class="logo">
                        <img src="assets/img/react.png" alt="Logo React" class="logo">
                    </div>
                    <a href="https://github.com/CalcagnoLoic/Hangman-app" target="_blank"><button class=" bg-gray-800 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded-full ml-5"> Github &#x2794; </button></a>
                </div>
            </div>
            <img class="sep" src="assets/img/sep.png" alt="separation">

            <!--Projet 4-->
            <div class="flex flex-col sm:justify-between items-center sm:flex-row mt-12 sm:mt-10 mb-5 sm:mb-8 container mx-auto">
                <div class="w-full md:w-2/4 text-left">
                    <h2 class="font-general-semibold text-2xl md:text-xl xl:text-xl text-center sm:text-left text-ternary-dark dark:text-primary-light uppercase pl-5">Hackers poulette</h2>
                    <p class="font-general-medium mt-2 text-lg sm:text-xl xl:text-2xl text-center sm:text-left leading-none text-gray-400 pl-5 pb-5">Réalisation d'un formulaire ajoutant les données de l'utilisateur dans une base de données</p>
                    <div class="mb-5 ml-5 flex gap-5">
                        <img src="assets/img/html5.png" alt="Logo HTML5" class="logo">
                        <img src="assets/img/sass.png" alt="Logo SASS" class="logo">
                        <img src="assets/img/php.png" alt="Logo PHP" class="logo-back">
                        <img src="assets/img/mysql.png" alt="Logo MySQL" class="logo-back">
                    </div>
                    <a href="https://github.com/CalcagnoLoic/project_front_02" target="_blank"><button class=" bg-gray-800 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded-full ml-5"> Github &#x2794; </button></a>
                </div>
                <div class="w-full md:w-2/4 text-right float-right sm:p-5">
                    <a href="https://calcagnoloic.github.io/ChallengeFM_landing_page/" target="_blank"><img class="img" src="assets/img/img.jpg" alt="Projet 4"></a>
                </div>
            </div>
            <img class="sep" src="assets/img/sep.png" alt="separation">

            <!--Projet 5-->
            <div class="flex flex-col sm:justify-between items-center sm:flex-row mt-12 sm:mt-10 mb-5 sm:mb-8 container mx-auto">
                <div class="w-full md:w-2/4 text-right float-right sm:p-5">
                    <a href="https://calcagnoloic.github.io/ChallengeFM_landing_page/" target="_blank"><img class="img" src="assets/img/img.jpg" alt="Projet 5"></a>
                </div>
                <div class="w-full md:w-2/4 text-left">
                    <h2 class="font-general-semibold text-2xl md:text-xl xl:text-xl text-center sm:text-left text-ternary-dark dark:text-primary-light uppercase pl-5">Hicking-app</h2>
                    <p class="font-general-medium mt-2 text-lg sm:text-xl xl:text-2xl text-center sm:text-left leading-none text-gray-400 pl-5 pb-5">Petit site de voyage proposant des randonnées sur l'île de la Réunion</p>
                    <div class="mb-5 ml-5 flex gap-5">
                        <img src="assets/img/html5.png" alt="Logo HTML5" class="logo">
                        <img src="assets/img/sass.png" alt="Logo SASS" class="logo">
                        <img src="assets/img/php.png" alt="Logo PHP" class="logo-back">
                        <img src="assets/img/mysql.png" alt="Logo MySQL" class="logo-back">
                    </div>
                    <a href="https://github.com/CalcagnoLoic/Hicking-app" target="_blank"><button class=" bg-gray-800 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded-full ml-5"> Github &#x2794; </button></a>
                </div>
            </div>
            <img class="sep" src="assets/img/sep.png" alt="separation">

            <!--Projet 6-->
            <div class="flex flex-col sm:justify-between items-center sm:flex-row mt-12 sm:mt-10 mb-5 sm:mb-8 container mx-auto">
                <div class="w-full md:w-2/4 text-left">
                    <h2 class="font-general-semibold text-2xl md:text-xl xl:text-xl text-center sm:text-left text-ternary-dark dark:text-primary-light uppercase pl-5">Projet 6</h2>
                    <p class="font-general-medium mt-2 text-lg sm:text-xl xl:text-2xl text-center sm:text-left leading-none text-gray-400 pl-5 pb-5">TODO</p>
                    <div class="mb-5 ml-5">
                        <img src="assets/img/python.png" alt="Logo Python" class="logo">
                    </div>
                    <a href="https://github.com/CalcagnoLoic/project_back_02" target="_blank"><button class=" bg-gray-800 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded-full ml-5"> Github &#x2794; </button></a>
                </div>
                <div class="w-full md:w-2/4 text-right float-right sm:p-5">
                    <a href="https://calcagnoloic.github.io/ChallengeFM_landing_page/" target="_blank"><img class="img" src="assets/img/img.jpg" alt="Projet 6"></a>
                </div>
            </div>
            <a href="#Top">
                <img src="assets/img/up-arrow.png" alt="Arrow up" class="btn-top">
            </a>
        </section>

        <!--Contact-->
        <section id="Contact" class="container mx-auto">
            <h2 class="contact">Contact</h2>
            <form class="relative w-full mt-6 space-y-8 form-container" method="post">
                <div class="relative">
                    <label class="absolute px-2 ml-2 -mt-3 font-medium text-gray-600 bg-white">Prénom</label>
                    <input type="text" class="block w-full px-4 py-4 mt-2 text-base placeholder-gray-400 bg-white border border-gray-300 rounded-md focus:outline-none focus:border-black" placeholder="Votre prénom...">
                </div>
                <div class="relative">
                    <label class="absolute px-2 ml-2 -mt-3 font-medium text-gray-600 bg-white">Nom</label>
                    <input type="text" class="block w-full px-4 py-4 mt-2 text-base placeholder-gray-400 bg-white border border-gray-300 rounded-md focus:outline-none focus:border-black" placeholder="Votre nom...">
                </div>
                <div class="relative">
                    <label for="countries" class="absolute px-2 ml-2 -mt-3 font-medium text-gray-600 bg-white">Sujet</label>
                    <select id="countries" class="block w-full px-4 py-4 mt-2 text-base placeholder-gray-400 bg-white border border-gray-300 rounded-md focus:outline-none focus:border-black">
                        <option>Choissisez une option...</option>
                        <option>Question concernant un projet</option>
                        <option>Je sais pas encore</option>
                    </select>
                </div>
                <div class="relative">
                    <label class="absolute px-2 ml-2 -mt-3 font-medium text-gray-600 bg-white">Message</label>
                    <textarea id="message" rows="4" class="block w-full px-4 py-4 mt-2 text-base placeholder-gray-400 bg-white border border-gray-300 rounded-md focus:outline-none focus:border-black" placeholder="Ecrivez votre message..."></textarea>
                </div>
                <div class="relative">
                <button class="flex px-5 py-4 text-md font-medium text-center text-white transition duration-200 bg-gray-800 rounded-lg hover:bg-gray-700 ease">Envoyer <img class="pl-5" src="assets/img/send.png" alt="send message"></button>
                </div>
            </form>
                <a href="#Top">
                    <img src="assets/img/up-arrow.png" alt="Arrow up" class="btn-top">
                </a>
        </section>
        
    </main>

    
    <footer class="p-4 bg-white sm:p-6 dark:bg-gray-800">
        <div class="sm:flex sm:items-center sm:justify-between">
            <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">Portfolio réalisé par <a href="https://github.com/CalcagnoLoic">@CalcagnoLoïc</a>
            </span>
        <div class="flex mt-4 space-x-6 sm:justify-center sm:mt-0">
            <a href="https://github.com/CalcagnoLoic" target="_blank">
                <img src="assets/img/github.png" alt="Logo github" class="logo-footer">
            </a>
            <a href="https://www.linkedin.com/in/loic-calcagno/" target="_blank">
                <img src="assets/img/linkedin.png" alt="Logo Linkedin" class="logo-footer">
            </a>
            <a href="https://calcagnoloic.github.io/CV/" target="_blank">
                <img src="assets/img/cv.png" alt="Logo CV en ligne" class="logo-footer">
            </a>
        </div>
        </div>
    </footer>

    <!--Script tailwind-->
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/flowbite@1.4.3/dist/flowbite.js"></script>
</body>
</html>