<html>
    <head>
        <title>Quaser Project</title>
        <link rel="stylesheet" href="css/css1.css"></link>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    </head>
    <body>
        <header>
        <div class="header-container">
        
            <nav>
            <div class="navbar">
                <a href="#"><img id="logo" src="img/logo.jpg" alt="logo"></a>
                <a href="#" class="nav-contents">Videos</a>
                <a href="#" class="nav-contents">Notes</a>
                <a href="#" class="nav-contents">About Us</a>
                <a href="#" class="nav-contents">Contact Us</a>
                </div>
                <div class="search_bar">
                <span class="material-symbols-outlined">
                    search
                    </span>
                <input class="search_input" placeholder="Search">

             </div> 
             <div class="menu">
                <button id="menu-button" onclick="openMenu()">
             <span class="material-symbols-outlined">
                menu
            </span>
            </button>
             </div> 
            </nav>
         
         </div> 
        </header>
        <main>
            <div class="menu-box">
                <div class="menu-container">
                    <a href="#">Videos</a>
                    <a href="#">Notes</a>
                    <a href="#">Games</a>
                    <a href="#">Profile</a>
                    <a href="#">About Us</a>
                    <a href="#">Upload</a>
                </div>
                <div class="menu-close">
                <button id="menu-close" onclick="closeMenu()"><span class="material-symbols-outlined">
                    close
                </span>
                </button>
                </div>
            </div>
        </main> 
        <footer>

        </footer>
    </body>
    <script src="js/project.js"></script>
</html>