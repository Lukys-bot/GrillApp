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
                <li><a id="thisPage" href="/Projekty/Grill/views/vegetables.php">Zelenina</a>  </li>
                <li><a href="/Projekty/Grill/views/fruits.php">Ovoce</a>  </li>
                <li><a href="/Projekty/Grill/views/smoked.php">Uzení</a>  </li> 
                <li><a href="/Projekty/Grill/views/burgers.php">Burgery</a>  </li> 
                </ul>
            <div class="clearfix"></div>
        </div>
        <div class="mainRecipes">
            <a class="recipes" href="recipe1.php">Grilovaná kukuřice</a>
            <a class="recipes" href="recipe2.php">Grilovaná cuketa</a>
            <a class="recipes" href="recipe3.php">Grilovaná rajčátka</a>
            <a class="recipes" href="recipe4.php">Grilovaná paprika</a>
        </div>
    </main>
        <div class="pages">
            <a class="page" href="">1</a>
            
        </div>
        

        <?php include __DIR__."/partials/footer.php"; ?>
</body>
</html>