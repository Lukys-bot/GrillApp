
<?php include __DIR__."/partials/header.php"; ?> 

<body>
    <?php include __DIR__."/partials/title_Grill.php"; ?>

    <main class="container">
        <div class="nav">
            <ul>
                <li><a href="/Projekty/Grill/views/chickens.php">Kuřecí</a> </li>
                <li><a href="/Projekty/Grill/views/porks.php">Vepřové</a> </li>
                <li><a href="/Projekty/Grill/views/fish.php">Ryby</a>  </li>
                <li><a href="/Projekty/Grill/views/beef.php">Hovězí</a>  </li>
                <li><a href="/Projekty/Grill/views/vegetables.php">Zelenina</a>  </li>
                <li><a href="/Projekty/Grill/views/fruits.php">Ovoce</a>  </li>
                <li><a href="/Projekty/Grill/views/smoked.php">Uzení</a>  </li> 
                <li><a href="/Projekty/Grill/views/burgers.php">Burgery</a>  </li> 
                </ul>
            <div class="clearfix"></div>
        </div>
        <a class="button-logout" href="/Projekty/Grill/logout">Odhlásit se</a>
        <p class="welcome_text">
            Předávám dál recepty, které má moje rodina ráda.
            Vyberte si dle svého gusta, nechte se inspirovat a 
            podělte se s námi prostřednictvím komentářů se svými
            zkušenostmi a případnými tipy ke zlepšení/zjednodušení. 
        </p>
        </main>

        <?php include __DIR__."/partials/footer.php"; ?>
</body>
</html>