<nav class="topnav" id="myTopnav">
    <ul>
        <li class="btnn">
            <a href="javascript:void(0);" onclick="myFunction2()">Kategorie<i class="icon-down-open iconn"></i></a>
            <ul id="btn-content">
                <li><a href="elements/categoryCard.php?category=Science_Fiction">Science Fiction</a></li>
                <li><a href="elements/categoryCard.php?category=Fantasy">Fantasy</a></li>
                <li><a href="elements/categoryCard.php?category=Kryminal">Kryminał</a></li>
                <li><a href="elements/categoryCard.php?category=Romans">Romans</a></li>
                <li><a href="elements/categoryCard.php?category=Dla_dzieci">Dla dzieci</a></li>
                <li><a href="elements/categoryCard.php?category=Nauka">Nauka</a></li>
                <li><a href="elements/categoryCard.php?category=Przygodowe">Przygodowe</a></li>
                <li><a href="elements/categoryCard.php?category=Thriller">Thriller</a></li>
                <li><a href="elements/categoryCard.php?category=Horror">Horror</a></li>
                <li><a href="elements/categoryCard.php?category=Biografia">Biografia</a></li>
            </ul>
        </li>
        <li><a href="#">Nowości</a></li>

        <li><a href="elements/orderStatus.php">Zamówienie</a></li>
        <?php
            if(!isset($_SESSION['zalogowany']))
            {
                echo "<li class=\"log-btn\"><a href=\"elements/loggin.php\">zaloguj się</a></li>";
            }
            else
            {
                echo "<li class=\"log-btn\"><a href=\"elements/loggin.php\">".$_SESSION['nick']."</a></li>";
            }
        ?>
    </ul>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <i class="icon-menu"></i>
    </a>
</nav>