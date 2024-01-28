

<?php include __DIR__."/partials/header.php"; ?>


<body>
<?php include __DIR__."/partials/title_Grill.php"; ?>

    <main class="container">
        
        
        <form class="formu" action="/Projekty/Grill/login" method="post">
        <p class="text">Recepty pro všechny,<br> kteří rádi grilují a udí.
        </p>
            <h2 class="form_headline">Přihlášení</h2>
            <label for="email">Zadejte svůj email</label><br>
            <input type="text" name="email" id="email" placeholder="Email" >
            <?php 
            if(isset($error))
            {
                echo'
                <p class="form__error-message">'.$error.'</p>
                ';
            }
            ?>
            <span id="emailError" class="error-message"></span>
            
            <label for="password"¨>Zadejte Vaše heslo</label><br>
            <input type="password" name="password" id="password"  placeholder="password">
            
            
            <button type="submit" id=" button_login"> Přihlásit se...</button>
            <p>Nemáte registraci?</p><a class="reg" href="/Projekty/Grill/register">Zaregistrujte se.</a><img class="knife" src="/Projekty/Grill/Pictures/2536742_blade_cut_knife_weapon_icon.png">
        </form>
    </main>
    <?php include __DIR__."/partials/footer.php"; ?>
    <script src="/Projekty/Grill/script.js"></script>
    
</body>
</html>