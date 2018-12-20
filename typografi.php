<!DOCTYPE HTML>
<html lang="da">
	<head>
		<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Typografi</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
    <div id="grid">
        <div class="menu">
            <?php include 'header.php';?>
        </div>
       <div class="indhold">
        <h1>Typografi</h1>
           <p>10 gode råd om typografi:</p>
           <ol>
                <li>Know your font family</li>
                <li>Combine a sans-Serif font with a Serif font</li>
                <li>Combine a Serif font with a sans-Serif font</li>
                <li>Combining 2 similar fonts is not cool</li>
                <li>Contrast is the key</li>
                <li>Stick to 2 fonts. Only go for 3 if you must</li>
                <li>Don’t mix different moods</li>
                <li>Combine fonts of complementary moods and of similar time eras</li>
                <li>Use different weights of fonts in the same family</li>
                <li>Avoid these fonts: Papyrus, Comic Sans, Curlz, Viner, Kristen</li>
            </ol>
        </div>
<div class="accordiongrid"> 
        <div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          <h2>Grundlæggende</h2>
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
        <img src="billeder/design/typografi.jpg" alt="Typografi">
            <h3>Weights</h3>
                <p>Weights udgør tilsammen et typeface.</p>
            <h3>Minuskler</h3>
                <p>De ’små’ bogstaver</p>
            <h3>Majuskler</h3>
                <p>De ’STORE’ bogstaver</p>
            <h3>x-Height</h3>
                <p>X-Height er højden på minuskel ’x’, målt fra bundlinjen til toppen af bogstavet. Kan b.la. bruges til at matche typefaces.</p>
            <h3>Leading</h3>
                <p>Også kaldt ’linjeafstand’. Det måles fra bundlinje til bundlinje. </p>
            <h3>Kerning</h3>
                <p>Også kendt som ’knibning’ Det er afstanden mellem hvert enkelt bogstav, som kan justeres så der skabes balance.</p>
            <h3>Tracking</h3>
                <p>Justerer den overordnede afstand mellem alle bogstaver i et ord, eller i en længere markering af ord.</p>
      </div>
    </div>
  </div>
     
    <div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          <h2>Fontklassifikationer</h2>
        </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
        <img src="billeder/design/sansserif.png" alt="Serif og Sans Serif">
            <h3>Serif/Antikva</h3>
                <p>Den har fået sit navn fra sine ’fødder’, altså den tynde linje som afslutter grundstregen på et bogstav eller et symbol. </p>
                <p>Det benyttes ofte som brødtekst, da fødderne gør store mængde tekst lettere at læse.<br>’Fødderne’ danner en linje for øjnene at følge.<br>Den bliver opfattet som gammeldags, og bruges mindre og mindre som brødtekst på hjemmesider, mere på print.</p>
            <h3>Sans Serif/Grotesk</h3>
                <p>’Sans’ betyder uden på Fransk, så det er ’uden Serif’ – altså uden ’fødder’.<br>Den benyttes ofte til overskrifter, da den moderne stil giver en god kontrast til en lettere læselig Serif.<br>Den bliver dog brugt mere og mere til brødtekst på hjemmesider, fremfor Serif.</p>
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