<!-- HEADER COMPONENT -->
<header class="bg-ks-black/80 flex items-center justify-between ml-auto h-fit p-4 md:px-9 lg:px-12">
    <div class="header-logo">
        <a href="index.php">
            <img class="w-[150px] lg:w-[250px]" loading="eager" src="img/ks-logo1.png"
                alt="Logo Kaiserstuhl Escape Game" />
        </a>
    </div>

    <!-- Header Menu -->
    <div>
        <div
            class="header-menu bg-ks-black md:bg-transparent flex flex-col text-center items-center p-32 fixed top-0 left-0 h-[100vh] min-w-[100vw] transform -translate-x-full ease-linear duration-200 z-10 md:w-auto md:h-auto md:relative md:min-w-[auto] md:translate-x-0 md:p-0 md:items-center md:text-center md:text-base md:justify-end">
            <button type="button" class="header-menuexit cursor-pointer absolute top-4 right-4 md:invisible">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none"
                    stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="12" cy="12" r="10"></circle>
                    <line x1="15" y1="9" x2="9" y2="15"></line>
                    <line x1="9" y1="9" x2="15" y2="15"></line>
                </svg>
            </button>
            <ul class="text-ks-white md:items-center md:text-center md:m-0 md:flex md:gap-6">
                <li class="mb-5 text-lg md:mb-0 md:text-sm lg:text-base"><a href="index.php#about"
                        class="hover:underline hover:text-ks-orange"><?php if ($_SESSION['lang'] === 'ENG')
                            echo 'ABOUT';
                        else
                            echo "À PROPOS";
                        ?></a>
                </li>
                <li class="mb-5 text-lg md:mb-0 md:text-sm lg:text-base"><a href="index.php?action=goods"
                        class="hover:underline hover:text-ks-orange"><?php if ($_SESSION['lang'] === 'ENG')
                            echo 'GOODS';
                        else
                            echo "BONS";
                        ?></a></li>
                <li class="mb-5 text-lg md:mb-0 md:text-sm lg:text-base"><a href="index.php?action=contact"
                        class="hover:underline hover:text-ks-orange">CONTACT</a>
                </li>
                <li class="mb-5 text-lg md:mb-0 md:text-sm lg:text-base"><a href="index.php?action=games"
                        class="hover:text-ks-orange hover:bg-ks-white md:bg-ks-orange md:px-2 md:py-1 md:rounded-md"><?php if ($_SESSION['lang'] === 'ENG')
                            echo 'PLAY!';
                        else
                            echo "JOUER";
                        ?></a>
                </li>
                <form id="langForm" action="index.php?action=changeLang" method="post">
                    <select onchange="submitForm()"
                        class="mb-5 text-lg px-2 py-1 rounded-lg cursor-pointer text-ks-white bg-ks-white/40 hover:bg-ks-grey md:mb-0 md:text-sm lg:text-base"
                        name="langue" id="">
                        <option value="FR" name="fr" <?php if ($_SESSION['lang'] === 'FR')
                            echo 'selected'; ?>>FR</option>
                        <option value="ENG" name="eng" <?php if ($_SESSION['lang'] === 'ENG')
                            echo 'selected'; ?>>ENG</option>
                    </select>
                </form>
                <script>
                    function submitForm() {
                        document.getElementById("langForm").submit();
                    }
                </script>

                <li class="flex flex-row gap-5 justify-center">
                    <a href="index.php?action=user" class="hidden md:inline">
                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 24 24" fill="none"
                            stroke="#f2f2f2" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                            <circle cx="12" cy="7" r="4"></circle>
                        </svg>
                    </a>
                    <a href="index.php?action=cart" class="hidden md:inline">
                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 24 24" fill="none"
                            stroke="#f2f2f2" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="10" cy="20.5" r="1" />
                            <circle cx="18" cy="20.5" r="1" />
                            <path d="M2.5 2.5h3l2.7 12.4a2 2 0 0 0 2 1.6h7.7a2 2 0 0 0 2-1.6l1.6-8.4H7.1" />
                        </svg>
                    </a>
                </li>
            </ul>
        </div>

        <div class="flex items-center gap-3">
            <a href="index.php?action=user" class="inline md:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 24 24" fill="none"
                    stroke="#f2f2f2" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                    <circle cx="12" cy="7" r="4"></circle>
                </svg>
            </a>
            <a href="index.php?action=cart" class="inline md:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 24 24" fill="none"
                    stroke="#f2f2f2" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="10" cy="20.5" r="1" />
                    <circle cx="18" cy="20.5" r="1" />
                    <path d="M2.5 2.5h3l2.7 12.4a2 2 0 0 0 2 1.6h7.7a2 2 0 0 0 2-1.6l1.6-8.4H7.1" />
                </svg>
            </a>
            <button type="button" class="header-burgericon cursor-pointer md:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none"
                    stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="3" y1="12" x2="21" y2="12"></line>
                    <line x1="3" y1="6" x2="21" y2="6"></line>
                    <line x1="3" y1="18" x2="21" y2="18"></line>
                </svg>
            </button>
        </div>
    </div>
</header>
<!-- HEADER SCRIPT -->
<script>
    // burger Menu 
    let burgerIcon = document.querySelector(".header-burgericon"); // burgerIcon to open headerMenu
    let exitMenu = document.querySelector(".header-menuexit") // Cross to close headerMenu
    let headerMenu = document.querySelector(".header-menu"); // headerMenu with all the hyperlinks
    let menuTag = document.querySelectorAll("ul li a"); // All headerMenu hyperlinks

    // // Burger Menu Opening
    burgerIcon.addEventListener("click", () => {
        headerMenu.style.transform = "translateX(0%)";
    })

    // Closing Header Menu
    exitMenu.addEventListener("click", () => {
        headerMenu.style.transform = "translateX(-100%)";
    })

    // Closing Header Menu When Clicking On A Hyperlink
    for (let i = 0; i < menuTag.length; i++) {
        menuTag[i].addEventListener("click", function () {
            headerMenu.style.transform = "translateX(0%)";
            burgerIcon.style.display = "none";
        });
    }
</script>
<!-- END HEADER COMPONENT -->