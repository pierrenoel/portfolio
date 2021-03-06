<!DOCTYPE html>
<html lang="en">
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
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="img/favicon.png">
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
                    <img class="w-8 h-8 rounded-full" src="img/photo.png" alt="user photo">
                </button>
                    <div class="hidden z-50 my-4 text-base list-none bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600" id="dropdown" style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate(1095px, 974px);" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="top">
                        <div class="py-3 px-4">
                            <span class="block text-sm text-gray-900 dark:text-white">Calcagno Loïc</span>
                            <a href="mailto:calcagnoloic93@gmail.com"><span class="block text-sm font-medium text-gray-500 truncate dark:text-gray-400">calcagnoloic93@gmail.com<img src="img/gmail.png" alt="Logo gmail" class="logo-nav"</span></a>
                        </div>
                        <ul class="py-1" aria-labelledby="dropdown">
                            <li>
                                <a href="https://www.linkedin.com/in/loic-calcagno/" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white" target="_blank">Linkedin</a>
                            </li>
                            <li>
                                <a href="https://github.com/CalcagnoLoic" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white" target="_blank">Github</a>
                            </li>
                            <li>
                                <a href="https://calcagnoloic.github.io/CV/index.html" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white" target="_blank">Online CV</a>
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
                        <a href="#About" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About me</a>
                    </li>
                    <li>
                        <a href="#MyProjects" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">My projects</a>
                    </li>
                    <li>
                        <a href="#Contact" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
                    </li>
                    <li>
                        <a class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700" href="../index.php">🇫🇷</a>
                    </li>
                    <li>
                        <a class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700" href="portfolio_ang.php">🇬🇧</a>
                    </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <!--A propos de moi-->
        <div class="p-10">
            <section id="About" class="flex flex-col sm:justify-between items-center sm:flex-row mt-12 sm:mt-10 mb-5 sm:mb-8 container mx-auto">
                <div class="w-full md:w-2/4 text-left">
                    <h1 class="font-general-semibold text-3xl md:text-3xl xl:text-4xl text-center sm:text-left text-white font-bold dark:text-primary-light uppercase pl-5">Hey, welcome on my portfolio 👋</h1>
                    <p class="font-general-medium mt-2 text-lg sm:text-xl xl:text-2xl text-center sm:text-left leading-none text-white font-bold pl-5">My name is Loïc Calcagno and I am a full stack junior developer</p>
                </div>
                <div class="w-full md:w-2/4 text-right float-right sm:p-5">
                    <img class="img-header" src="img/photo_header.png" alt="photo">
                </div>
            </section>
        </div>
        
        
        <!--Mes projets-->
        <section id="MesProjets" class="container mx-auto">
            <h2 class="projet text-white font-bold">My projects</h2>

            <!--Projet 1-->
            <div class="flex flex-col sm:justify-between items-center sm:flex-row mt-12 sm:mt-10 mb-5 sm:mb-8 container mx-auto">
                <div class="w-full md:w-2/4 text-right float-right sm:p-5">
                    <a href="https://calcagnoloic.github.io/ChallengeFM_landing_page/" target="_blank"><img class="img img-project" src="img/project0.png" alt="Projet 1"></a>
                </div>
                <div class="w-full md:w-2/4 text-left">
                    <h2 class="font-general-semibold text-2xl md:text-xl xl:text-xl text-center sm:text-left text-white font-semibold dark:text-primary-light uppercase pl-5">Challenge frontend mentor</h2>
                    <p class="font-general-medium mt-2 text-lg sm:text-xl xl:text-2xl text-center sm:text-left leading-none text-gray-400 pl-5 pb-5">Achievement of a challenge with the creation of a landing page</p>
                    <div class="mb-5 ml-5 flex gap-5">
                        <img src="img/html5.png" alt="Logo HTML5" class="logo">
                        <img src="img/sass.png" alt="Logo SASS" class="logo">
                    </div>
                    <a href="https://github.com/CalcagnoLoic/ChallengeFM_landing_page" target="_blank"><button class=" bg-gray-800 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded-full ml-5"> Github &#x2794; </button></a>
                </div>
            </div>
            <img class="sep" src="img/sep.png" alt="separation">

            <!--Projet 2-->
            <div class="flex flex-col sm:justify-between items-center sm:flex-row mt-12 sm:mt-10 mb-5 sm:mb-8 container mx-auto">
                <div class="w-full md:w-2/4 text-left">
                    <h2 class="font-general-semibold text-2xl md:text-xl xl:text-xl text-center sm:text-left text-white font-semibold dark:text-primary-light uppercase pl-5">Hangman</h2>
                    <p class="font-general-medium mt-2 text-lg sm:text-xl xl:text-2xl text-center sm:text-left leading-none text-gray-400 pl-5 pb-5">Creation of a mini hangman game in vanilla Javascript</p>
                    <div class="mb-5 ml-5 flex gap-5">
                        <img src="img/html5.png" alt="Logo HTML5" class="logo">
                        <img src=" img/sass.png" alt="Logo SASS" class="logo">
                        <img src=" img/javascript.png" alt="Logo Javascript" class="logo">
                    </div>
                    <a href="https://github.com/CalcagnoLoic/Hangman-app" target="_blank"><button class=" bg-gray-800 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded-full ml-5"> Github &#x2794; </button></a>
                </div>
                <div class="w-full md:w-2/4 text-right float-right sm:p-5">
                    <a href="https://calcagnoloic.github.io/Hangman-app/" target="_blank"><img class="img img-project" src="img/project1.png" alt="Projet 2"></a>
                </div>
            </div>
            <img class="sep" src="img/sep.png" alt="separation">

            <!--Projet 3-->
            <div class="flex flex-col sm:justify-between items-center sm:flex-row mt-12 sm:mt-10 mb-5 sm:mb-8 container mx-auto">
                <div class="w-full md:w-2/4 text-right float-right sm:p-5">
                    <a href="https://calcagnoloic.github.io/Hangman-app/" target="_blank"><img class="img img-project" src="img/img.jpg" alt="Projet 3"></a>
                </div>
                <div class="w-full md:w-2/4 text-left">
                    <h2 class="font-general-semibold text-2xl md:text-xl xl:text-xl text-center sm:text-left text-white font-semibold dark:text-primary-light uppercase pl-5">Woodstock</h2>
                    <p class="font-general-medium mt-2 text-lg sm:text-xl xl:text-2xl text-center sm:text-left leading-none text-gray-400 pl-5 pb-5">Creation of a landing page in react</p>
                    <div class="mb-5 ml-5 flex gap-5">
                        <img src="img/html5.png" alt="Logo HTML5" class="logo">
                        <img src="img/sass.png" alt="Logo SASS" class="logo">
                        <img src="img/react.png" alt="Logo React" class="logo">
                    </div>
                    <a href="https://github.com/CalcagnoLoic/Hangman-app" target="_blank"><button class=" bg-gray-800 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded-full ml-5"> Github &#x2794; </button></a>
                </div>
            </div>
            <img class="sep" src="img/sep.png" alt="separation">

            <!--Projet 4-->
            <div class="flex flex-col sm:justify-between items-center sm:flex-row mt-12 sm:mt-10 mb-5 sm:mb-8 container mx-auto">
                <div class="w-full md:w-2/4 text-left">
                    <h2 class="font-general-semibold text-2xl md:text-xl xl:text-xl text-center sm:text-left text-white font-semibold dark:text-primary-light uppercase pl-5">Hackers poulette</h2>
                    <p class="font-general-medium mt-2 text-lg sm:text-xl xl:text-2xl text-center sm:text-left leading-none text-gray-400 pl-5 pb-5">Creation of a form adding the user's data to a database</p>
                    <div class="mb-5 ml-5 flex gap-5">
                        <img src="img/html5.png" alt="Logo HTML5" class="logo">
                        <img src="img/sass.png" alt="Logo SASS" class="logo">
                        <img src="img/php.png" alt="Logo PHP" class="logo-back">
                        <img src="img/mysql.png" alt="Logo MySQL" class="logo-back">
                    </div>
                    <a href="https://github.com/CalcagnoLoic/project_front_02" target="_blank"><button class=" bg-gray-800 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded-full ml-5"> Github &#x2794; </button></a>
                </div>
                <div class="w-full md:w-2/4 text-right float-right sm:p-5">
                    <a href="https://calcagnoloic.github.io/ChallengeFM_landing_page/" target="_blank"><img class="img img-project" src="img/img.jpg" alt="Projet 4"></a>
                </div>
            </div>
            <img class="sep" src=" img/sep.png" alt="separation">

            <!--Projet 5-->
            <div class="flex flex-col sm:justify-between items-center sm:flex-row mt-12 sm:mt-10 mb-5 sm:mb-8 container mx-auto">
                <div class="w-full md:w-2/4 text-right float-right sm:p-5">
                    <a href="https://calcagnoloic.github.io/ChallengeFM_landing_page/" target="_blank"><img class="img img-project" src=" img/img.jpg" alt="Projet 5"></a>
                </div>
                <div class="w-full md:w-2/4 text-left">
                    <h2 class="font-general-semibold text-2xl md:text-xl xl:text-xl text-center sm:text-left text-white font-semibold dark:text-primary-light uppercase pl-5">Hicking-app</h2>
                    <p class="font-general-medium mt-2 text-lg sm:text-xl xl:text-2xl text-center sm:text-left leading-none text-gray-400 pl-5 pb-5">Small travel site offering hikes on Reunion Island</p>
                    <div class="mb-5 ml-5 flex gap-5">
                        <img src=" img/html5.png" alt="Logo HTML5" class="logo">
                        <img src=" img/sass.png" alt="Logo SASS" class="logo">
                        <img src=" img/php.png" alt="Logo PHP" class="logo-back">
                        <img src=" img/mysql.png" alt="Logo MySQL" class="logo-back">
                    </div>
                    <a href="https://github.com/CalcagnoLoic/Hicking-app" target="_blank"><button class=" bg-gray-800 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded-full ml-5"> Github &#x2794; </button></a>
                </div>
            </div>
            <img class="sep" src="img/sep.png" alt="separation">

            <!--Projet 6-->
            <div class="flex flex-col sm:justify-between items-center sm:flex-row mt-12 sm:mt-10 mb-5 sm:mb-8 container mx-auto">
                <div class="w-full md:w-2/4 text-left">
                    <h2 class="font-general-semibold text-2xl md:text-xl xl:text-xl text-center sm:text-left text-white font-semibold dark:text-primary-light uppercase pl-5">Projet 6</h2>
                    <p class="font-general-medium mt-2 text-lg sm:text-xl xl:text-2xl text-center sm:text-left leading-none text-gray-400 pl-5 pb-5">TODO</p>
                    <div class="mb-5 ml-5">
                        <img src="img/python.png" alt="Logo Python" class="logo">
                    </div>
                    <a href="https://github.com/CalcagnoLoic/project_back_02" target="_blank"><button class=" bg-gray-800 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded-full ml-5"> Github &#x2794; </button></a>
                </div>
                <div class="w-full md:w-2/4 text-right float-right sm:p-5">
                    <a href="https://calcagnoloic.github.io/ChallengeFM_landing_page/" target="_blank"><img class="img img-project" src="img/img.jpg" alt="Projet 6"></a>
                </div>
            </div>
            <a href="#Top">
                <img src="img/up-arrow.png" alt="Arrow up" class="btn-top">
            </a>
        </section>

        <!--Contact-->
        <section id="Contact" class="container mx-auto">
            <h2 class="contact text-white font-bold">Contact</h2>
            <form class="relative w-full mt-6 space-y-8 form-container" method="post">
                <div class="relative">
                    <label class="absolute px-2 ml-2 -mt-3 font-medium text-gray-600 bg-white">Firstname</label>
                    <input type="text" class="block w-full px-4 py-4 mt-2 text-base placeholder-gray-400 bg-white border border-gray-300 rounded-md focus:outline-none focus:border-black" placeholder="Your firstname...">
                </div>
                <div class="relative">
                    <label class="absolute px-2 ml-2 -mt-3 font-medium text-gray-600 bg-white">Lastname</label>
                    <input type="text" class="block w-full px-4 py-4 mt-2 text-base placeholder-gray-400 bg-white border border-gray-300 rounded-md focus:outline-none focus:border-black" placeholder="Your lastname...">
                </div>
                <div class="relative">
                    <label for="countries" class="absolute px-2 ml-2 -mt-3 font-medium text-gray-600 bg-white">Subject</label>
                    <select id="countries" class="block w-full px-4 py-4 mt-2 text-base placeholder-gray-400 bg-white border border-gray-300 rounded-md focus:outline-none focus:border-black">
                        <option>Choose an option...</option>
                        <option>Question about a project</option>
                        <option>Other</option>
                    </select>
                </div>
                <div class="relative">
                    <label class="absolute px-2 ml-2 -mt-3 font-medium text-gray-600 bg-white">Message</label>
                    <textarea id="message" rows="4" class="block w-full px-4 py-4 mt-2 text-base placeholder-gray-400 bg-white border border-gray-300 rounded-md focus:outline-none focus:border-black" placeholder="Write your message here..."></textarea>
                </div>
                <div class="relative">
                <button class="flex px-5 py-4 text-md font-medium text-center text-white transition duration-200 bg-gray-800 rounded-lg hover:bg-gray-700 ease">Send <img class="pl-5" src="img/send.png" alt="send message"></button>
                </div>
            </form>
                <a href="#Top">
                    <img src="img/up-arrow.png" alt="Arrow up" class="btn-top">
                </a>
        </section>
    </main>

    
    <footer class="p-4 bg-white sm:p-6 dark:bg-gray-800">
        <div class="sm:flex sm:items-center sm:justify-between">
            <span class="text-sm text-white sm:text-center ">Portfolio made by <a href="https://github.com/CalcagnoLoic">@CalcagnoLoïc</a>
            </span>
        <div class="flex mt-4 space-x-6 sm:justify-center sm:mt-0">
            <a href="https://github.com/CalcagnoLoic" target="_blank">
                <img src="img/github.png" alt="Logo github" class="logo-footer">
            </a>
            <a href="https://www.linkedin.com/in/loic-calcagno/" target="_blank">
                <img src="img/linkedin.png" alt="Logo Linkedin" class="logo-footer">
            </a>
            <a href="https://calcagnoloic.github.io/CV/" target="_blank">
                <img src="img/cv.png" alt="Logo CV en ligne" class="logo-footer">
            </a>
        </div>
        </div>
    </footer>

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/flowbite@1.4.3/dist/flowbite.js"></script>
</body>
</html>