<!DOCTYPE HTML>
<html lang="da">
	<head>
		<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Fotografering</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
    <div id="grid">
        <div class="menu">
            <?php include 'header.php';?>
        </div>
       <div class="indhold">
            <h1>Fotografering</h1>
            <p>Vi fik meget frie tøjler til at benytte os af kamera, hvor vi forinden fik en gennemgang af de forskellige egenskaber kameraet havde. </p>
            <p>Jeg blev personligt meget inspireret den dag, og valgte efterfølgende at investere i et Canon 70d kamera. </p></div>
        
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
         <h3>RAW</h3>
                <p>RAW er det filformat man skal bruge, da det er direkte hvad kameraets sensor opfatter, uden noget bearbejdning.<br>JPEG er et komprimeret format, behandlet af kameraet.<br>Når man skal efterbehandle et billede i eksempelvis Lightroom, så bruger man altid RAW, da det giver en det bedst mulige udgangspunkt.</p>
            
                <h3>Lukkertid/Shutter Speed</h3>
                    <ul>
                        <li>Jo længere lukkertid, jo lysere billede</li>
                        <li>Jo længere lukkertid, jo mere bevægelsessløring og rystelser</li>
                    </ul>
            
                <h3>ISO</h3>
                    <ul>
                        <li>Kameraets lysfølsomhed</li>
                        <li>Jo højere/hurtigere ISO, jo mere 'støj' fra sensoren ses på billedet</li>
                    </ul>
            
                <h3>Indstilling af kameraet</h3>
                    <ul>
                        <li>En kombination af ISO, blænde og lukkertid</li>
                        <li>Er afhængelig af ønsket resultat, tilstedeværende og medbragt lys og evt. bevægelse</li>
                    </ul>
      </div>
    </div>
  </div>
            
        <div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          <h2>Kameraets programmer</h2>
        </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
        <h3>M(Manuel)</h3>
                <p>Manuel indstilling af både blænde og lukkertid.</p>
        <h3>TV(Tidsforvalg)</h3>
                <p>Man indstiller lukkertid og kameraet beregner selv blænde.</p>
        <h3>AV(Blændeforvalg)</h3>
                <p>Man indstiller selv blænde og kameraet beregner lukkertid. </p>
        <h3>Øvrige programmer</h3>
                <p>Kameraet har forskellige ’shooting modes’ hvor programmet er optimeret til forskellige bestemte type billeder.<br>Man har ikke selv kontrol over noget. </p>
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