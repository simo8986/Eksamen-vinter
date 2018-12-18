<!DOCTYPE HTML>
<html lang="da">
	<head>
		<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Planlægning og overordnet design</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
    <div id="grid">
        <div class="menu">
            <?php include 'header.php';?>
        </div>
       <div class="indhold">
        <h1>Planlægning og overordnet design</h1>
        <p>Når man skal lave en hjemmeside, så skal man planlægge designet og indholdet inden.<br>Det kræver at man får sat sig godt ind i hvad budskabet af hjemmesiden er.</p>
        <img src="billeder/webudvikling/brainstorm.png" alt="Brainstorm">
        
   <div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          <h2>Metoder</h2>
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
        <h3>Brainstorm</h3>
                <p>Det er simpelt, man skriver simpelthen ned alt hvad man tænker på, når man har skrevet et emne.<br>Det kunne være ’Bager’ og man så skriver en masse stikord, som; kanel, muffins, mel osv.<br>Det er alt man kan komme på. </p>
                <p>Man kan gøre processen endnu nemmere ved at starte med en negativ brainstorm.<br>Man sætter sig med 10 minutter hvor man skal tænke på alt det negative man kan komme på.<br>Det kunne i bager eksemplet være; Det er meget beskidt, mel er meget brandfarligt osv.<br>Når man har gjort det i 10 min tager man lige en kort pause og sætter sig et andet sted.<br>Så bruger man 10 min mere på at skrive alt det positive man kan komme i tanke om.<br>Når man først har været negativ bliver det meget nemmere at komme i tanke om det positive.</p>
            <h3>User stories and personas</h3>
                <p>Man bruger dem til at komme ind i hovedet på ens user, og beskriver hvad de har behov for eller hvad de tænker.<br>En Persona går ud på at skabe en fiktionel karakter der skal forestille at være en bruger på hjemmesiden.<br>Der skaber man både baggrundsinformationen på personen, alder, arbejde, kan lide og ikke lide osv.<br>Det er dog ikke lige til at skabe en fiktionel karakter til et reelt problem. </p>
            <h3>Feature/Unfeature liste</h3>
                <p>Feature/Unfeature liste bliver brugt til at sortere I de idéer man har.<br>Det er meget selv beskrivende, i det man laver en liste med de ting man gerne vil have, og en liste med de ting man ikke vil have.<br>Det hjælper med at definere hjemmesiden, og være sikker på alle er på samme side.</p>
            <h3>Wireframe</h3>
                <p>Wireframe er en outline af en hjemmeside, lavet med linjer og bokse.<br>Det er fokuseret på funktionalitet, navigation og indhold, fremfor design.<br>De er meget nemme at lave, og de fleste tegner dem i hånden. </p>
            <h3>Mockup</h3>
                <p>Mockups er mere detaljerede end wireframes, og er er ofte lavet i photoshop.<br>Det er hjemmesidens udseende defineret 100%, og er ofte det man viser til kunden.<br>Dog er det altid bedst at kode et mockup i html/css da det giver noget for brugeren at interagere med.</p>
            <h3>Prototype</h3>
                <p>En prototype er en virkende version af hjemmesiden. Uden meget fokus på design i starten, men mere funktionalitet.<br>Det er altid en god ide at have en prototype, da det giver en mulighed for hurtigt at se hvad der virker og ikke gør.<br>Godt nok kan man være nødt til at smide det hele væk nogle gange, men så er man blevet klogere på hvad man ikke skal gøre. </p>
      </div>
    </div>
  </div>     
</div>
        <!--- Javascript --->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        </div>
        </div>
	</body>
</html>