
<?php include __DIR__."/partials/header.php"; 

$error = $_GET['error'] ?? null;

$errors = 
[
    "wrong_credentials"=>"Špatné přihlašovací údaje",
    "not_email"=>"Pro přihlášení musíte použít email",
]

?> 

<body>
<?php include __DIR__."/partials/title_Grill.php"; ?>

    <main class="container">
        
        
        <form class="formu" action="/Projekty/Grill/controllers/checkUserInDatabase.php" method="post">
        <p class="text">Recepty pro všechny,<br> kteří rádi grilují a udí.
        </p>
            <h2 class="form_headline">Přihlášení</h2>
            <label for="email">Zadejte svůj email</label><br>
            <input type="email" id="email" placeholder="email">
            <label id="incorrect_email"></label>
            
            <label for="password"¨>Zadejte Vaše heslo</label><br>
            <input type="password" id="password"  placeholder="password">
            <label id="incorrect_password"></label>
            
            <button type="submit" id=" button_login"> Přihlásit se...</button>
            <p>Nemáte registraci?</p><a class="reg" href="Registrace.php">Zaregistrujte se.</a><img class="knife" src="/Projekty/Grill/Pictures/2536742_blade_cut_knife_weapon_icon.png">
        </form>
    </main>
    <?php include __DIR__."/partials/footer.php"; ?>
    
</body>
</html>