<?php include __DIR__."/partials/header.php"; ?>

<body>
<?php include __DIR__."/partials/title_Grill.php"; ?>
    
    <main class="main_recipes2">
        <button id="mainPage">menu</button>
       
        <button onclick="toggleText()">Ingredience:</button>
          
          <ul id="skrytyText" >
          <li>čerstvá krkovička, 3cm silný plátek</li>
          
          <p class="mar"></p>
          <li>olivový olej</li>
          <li>sůl a čerstvě nadrcený pepř</li>
          
          
        <br>
        <button onclick="toggleText2()">Postup:</button>
            <ul id="skrytyText2">
                <li>Ideálně před grilováním nechat cca 2-4 hodiny při pokojové teplotě</li>
                <li>Na rozpálený gril a rošt pomazaný tukem vložíme krkovici</li>
                <li>Při 3 cm silným plátku nám stačí 4 minutky z jedné strany a následně otočíme</li>
                <li>Grilujem znovu 4 minutky</li>
                <li>Maso otáčíme kleštěmi! Do masa nepícháme!</li>
                <li>Nyní maso odložíme na tác a nechame cca 2 minutky odpočívat.</li>
                <li>Následně maso nasolíme, opepříme a zakápneme olivovým olejem.</li>
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