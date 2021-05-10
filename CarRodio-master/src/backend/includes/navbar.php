<?php

echo <<<EOT
<header class="section-header">

        <section class="header-main border-bottom">
            <header class="nav -right-aligned">
                <nav class="nav-main">
                    <a class="nav-logo -mobile" href="index.amp.php">
                        <img class="nav-logo__image" id="logo" src="images/car.jpg" alt="Logo">
                    </a>
                    <ul class="nav-list" role="menu" aria-hidden="true">
                        <div class="nav-list__wrapper">
                            <li class="nav-list__item" role="none">
                                <a class="nav-logo" href="index.amp.php">
                                    <img class="nav-logo__image" id="logo" src="images/car.jpg" alt="Logo">
                                </a>
                            </li>
                            <li class="nav-list__item" role="none">
                                <a class="nav-list__link" role="menuitem" href="index.amp.php">Home</a>
                            </li>
                            <li class="nav-list__item" role="none">
                                <a class="nav-list__link" role="menuitem" href="test.php">Browse Cars</a>
                            </li>
                            <li class="nav-list__item" role="none">
                                <a class="nav-list__link" role="menuitem" href="index.php">Login</a>
                            </li>
                            </li><li class="nav-list__item" role="none">
                                <a class="nav-list__link" role="menuitem" href="showfavorite.php">Favourites</a>
                            </li>
                            </li><li class="nav-list__item" role="none">
                        <a class="nav-list__link" role="menuitem" href="logout.php">Logout</a>
                    </li>
                        </div>
                    </ul>
                    <button class="nav-toggle" type="button" aria-expanded="false">
                        <div class="burger -squeeze -offset" type="button">
                            <span class="burger-lines"></span>
                        </div>
                    </button>
                </nav>
                <ul class="nav-list -mobile" role="menu" aria-hidden="true">
                    <div class="nav-list__wrapper">
                    <li class="nav-list__item" role="none">
                                <a class="nav-list__link" role="menuitem" href="index.amp.php">Home</a>
                            </li>
                            <li class="nav-list__item" role="none">
                                <a class="nav-list__link" role="menuitem" href="#">Browse Cars</a>
                            </li>
                            <li class="nav-list__item" role="none">
                                <a class="nav-list__link" role="menuitem" href="index.php">Login</a>
                            </li><li class="nav-list__item" role="none">
                                <a class="nav-list__link" role="menuitem" href="showfavorite.php">Favourites</a>
                            </li>
                            </li><li class="nav-list__item" role="none">
                        <a class="nav-list__link" role="menuitem" href="logout.php">Logout</a>
                    </li>
                    </div>
                    <div class="nav-overlay"></div>
                </ul>
            </header>
        </section> <!-- header-main .// -->
    </header>
EOT;
