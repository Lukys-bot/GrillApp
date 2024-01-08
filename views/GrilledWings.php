<?php include __DIR__."/partials/header.php"; ?>

<body>
<?php include __DIR__."/partials/title_Grill.php"; ?>
    
    <main class="main_recipes1">
        <button id="mainPage">menu</button>
       
        <button onclick="toggleText()">Ingredience:</button>
          
          <ul id="skrytyText" >
          <li>chlazená, čerstvá křidýlka</li>
          <li>marináda </li><br>
          <p class="mar">Na marinádu:</p>
          <li>olivový olej</li>
          <li>sůl a čerstvě nadrcený pepř</li>
          <li>med</li>
          <li>lžička hořčice</li>
          <li>grilovací koření</li>
          <li>koření, které Vám chutná,...</li>
          </ul>
          
        <br>
        <button onclick="toggleText2()">Postup:</button>
            <ul id="skrytyText2">
                <li>Ideálně nechat 12 hodin marinovat v lednici</li>
                <li>Snažme se využívat metodu s NEpřímým grilováním (maso leží v grilu mimo zdroj tepla)</li>
                <li>Vložte křidýlka na rozpálený gril a nechte cca 10 minut při 200°C</li>
                <li>Nyní gril otevřete křidýlka otočte, zavřete a cca 30 minut nechte grilovat</li>
                <li>Křidýlka otáčíme v kleštích, do masa nepícháme!</li>
                <li>Poté křidýlka vytáhněte na tác, nechte odpočinout 10 minut</li>
                <li>Dobrou chuť</li>
            </ul>
    </main>
      <div method="post" id="komentare">
        <h3>Komentáře:</h3>
            <textarea  id="novyKomentar()" maxlength="400" placeholder="Vaše poznatky a nápady." required></textarea>
            <button type="submit" onclick="addComment()">Přidat komentář</button>
            
      </div>
      <div id="zobrazKomentare"></div>
<?php include __DIR__."/partials/footer.php"; ?>
<script src="/Projekty/Grill/script.js"></script>
</body>
</html>