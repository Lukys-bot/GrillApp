
<?php include __DIR__."/partials/header.php"; ?> 

<body>
<?php include __DIR__."/partials/title_Grill.php"; ?>

    <main class="container">
        
        <form class="formu" action="" method="post">
            <h2 class="form_headline">Registrace</h2>
            <label for="email">Zadejte svůj email</label><br>
            <input type="email" id="email" placeholder="email">
            <label id="incorrect_email"></label>
            
            <label for="password"¨>Zadejte Vaše heslo</label><br>
            <input type="password" id="password"  placeholder="password">
            <label id="incorrect_password"></label>

            <label for="password2"¨>Zadejte znovu Vaše heslo</label><br>
            <input type="password" id="password2"  placeholder="password">
            <label id="incorrect_password2"></label>
            
            <button type="button" id=" button_registration"> Registrace...</button>
            <img class="knife" src="/Projekty/Grill/Pictures/2536742_blade_cut_knife_weapon_icon.png">
        </form>
    </main>
    <?php include __DIR__."/partials/footer.php"; ?>
    <script src="/Projekty/Grill/script.js"></script>
</body>
</html>