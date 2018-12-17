<!DOCTYPE HTML>
<html lang="da">
	<head>
		<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Webudvikling</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
    <div id="grid">
        <div class="menu">
            <?php include 'header.php';?>
        </div>
       <div class="indhold">
        <h1>Grundlæggende webudvikling</h1>
        <p>Jeg havde en del erfaring allerede da vi startede webudvikling, men det gik hurtigt op for mig at jeg havde meget ’spring ud i det’ erfaring, og ikke så meget teorien bag, mere ’det her virker’ men ikke ’den her virker fordi’. Så jeg er bestemt blevet klogere, og mere organiseret.</p>
   
    <div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          <h2>Grundlæggende HTML</h2>
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
        <h3>Afsnit(paragraph)</h3>
                <p>&lt;p&gt;&lt;/p&gt;, Semantisk. Starter og slutter et afsnit</p>
            <h3>Indeling(division)</h3>
                <p>&lt;div&gt;&lt;/div&gt;, ikke semantisk. Laver en inddeling. Brug andre tags end 	&lt;div&gt; så ofte som muligt, fordi det ikke er semantisk.</p>
            <h3>Område</h3>
                <p>	&lt;span&gt;&lt;/span&gt;, minder om &lt;div&gt; og &lt;p&gt;, men medfører ikke linjeskift.</p>
            <h3>Section</h3>
                <p>&lt;section&gt;&lt;/section&gt;, semantisk. Fortæller at alt derimellem hører sammen.</p>
            <h3>Ordnede og uordnede lister</h3>
                <p>&lt;ol&gt;&lt;/ol&gt; = Ordnede lister, nummereret.</p>
                <p>&lt;ul&gt;&lt;/ul&gt; = Uordnede lister, ikke nummereret.</p>
                <p>&lt;li&gt;&lt;/li&gt; = List element.</p>
                <p>Når man ligger et element inden i et element, er det et 'nested' ellement.</p>
            <h3>Link</h3>
                <p>&lt;a href=""&gt;&lt;/a&gt;</p>
                <p>anchortag = a</p>
                <p>Med attributten 'hyper refference' = href</p>
                <p>Relativ og absolut adressering. Der bør anvendes beskrivende links, i forhold til SEO.</p>
            <h3>Billede</h3>
                <p>&lt;img src=""&gt;</p>
                <p>Filen udpeges med src=. Alternativ tekst angives med alt-attribut. Alternativ tekst bør udfyldes i forhold til skærmlæsere og SEO.</p>
                <p>Man bør ikke udfylde højde og bredde med html, kun definere for aspect ratio. 
                Normaltvis definere man kun enten højde, eller bredde. Ellers bliver det ikke proportionelt. 
                Ikke upload for store filer, men tilpas inden upload. </p>
                <p>Store billeder er dårlig SEO, da det er lange loading tider, og google giver bedre resultater jo hurtigere siden er til at loade. </p>
      </div>
    </div>
  </div>    
        
      <div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          <h2>Grundlæggende CSS</h2>
        </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
        <p>CSS = Cascading Style Sheets. Cascading henviser til regler for hvornår hvilke styles gælder. Det gør det muligt at adskille struktur og udseende. Et "stylesheet" er en samling af "rules". "Styles" angives som "rules" som kan navigeres, og refereres i HTML</p>
            <h3>Kan placeres i</h3>
                <ul>
                    <li>Dokumentet (embed). Gælder kun for dokumentet. Placeres i &lt;head&gt; med &lt;style&gt;&lt;/style&gt;</li>
                    <li>I eksternt dokument (link). Kan anvendes i mange dokumenter, og sikrer ensartethed</li>
                    <li>Inline, men så forsvinder ideen med at adskille struktur og layout.</li>
                </ul>
            <h3>Cascading</h3>
                <p>Et sæt regler der definerer hvordan modstridende CSS-deklareringer løses
                <p>Specificity: Mere specifik har forrang mod mere generel</p>
                <p>Source order: Seneste deklareringer har forrang mod tidligere deklareringer</p>
                <p>Specificity har forrang mod Source order.</p>
            <h3>Farvekoder</h3>
                <ul>
                    <li>RGB: rgb(255, 204, 0)</li>
                    <li>HEX-kode: #ffcc00;</li>
                    <li>HSL: hsl(48%, 100%, 50%)</li>
                    <li>RGBA: rgba(255, 204, 0, 0.5), Med opacitet (gennemsigtighed, alpha-channel)</li>
                    <li>HSLA: hsla(48%, 100%, 50%, 0.5)</li>
                </ul>
            <h3>Download fonts</h3>
            <p>Adobe TypeKit (Kan kun bruges hvis man har active adobe cc subscription)
            Google Fonts (gratis)</p>
      </div>
    </div>
  </div>       
        
     <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          <h2>CSS Grids</h2>
        </button>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
        <p>En af de nyeste specifikationer i CSS-standarden. Ses som det mest revolutionerende siden responsivt webdesign. Det er ikke fuldt understøttet endnu i alle browsere, men næsten. MS EDGE mangler, men er på vej.</p>
        <p>Grid er på forældreleementets container, og regner selv bredde ud. Man bruger fr, som er en ny måleenhed der betyder fractions. 1fr = en fjerdedel. 3fr = 3 fjerdedele. </p>
        <p>Vi har brugt Grids til at lave disse øvelser. <a href="filer/webudvikling/cssgridcode.zip">For at downloade koden til disse eksempler klik her</a></p>
        <img src="billeder/webudvikling/morse.png" alt="Morsekode skema lavet med CSS Grids">
        <img src="billeder/webudvikling/grid1.png" alt="Illustration af grids">
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