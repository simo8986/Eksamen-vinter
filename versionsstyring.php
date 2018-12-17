<!DOCTYPE HTML>
<html lang="da">
	<head>
		<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Versionsstyring</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
    <div id="grid">
        <div class="menu">
            <?php include 'header.php';?>
        </div>
       <div class="indhold">
        <h1>Versionsstyring</h1>
        <p>Man bruger versionsstyring for at undgå fejl, og får at kunne gå tilbage hvis noget går galt. Man bruger det også for at holde styr på flere delprojekter, eventuelt samme elementer der skal laves i forskellige versioner til forskellige kunder. Det bliver også brugt for at man nemmere kan samarbejde.</p>
        <p>Versionsstyring er en metodisk tilgang, det kan være noget så simpelt som at navngive sine filer, og strukturere ens mapper. Et VCS (Version Control System) kan hjælpe med versionsstyring. Den holder styr på forskellen mellem versioner, og kan enten være installeret i skyen, eller på en lokal server. </p>
        <p>Versionsstyring bruges i alle typer IT-projekter. B.la. i udvikling af administrative systemer, apps, frameworks, libraries, websites osv. Det bliver også brugt af ’alle’ der arbejder professionelt med IT. Både Hobby-kodere og store organisationer. </p>
       
    <div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          <h2>Git og GitHub</h2>
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
        <h3>Git</h3>
                <p>Git er en standard (protokol), et versionsstyringssystem. Det blev oprindeligt skrevet af Linus Thorvalds for at holde styr på Linux udviklingen. </p>
            <h3>GitHub</h3>
                <p>Github er en webplatform man kan bruge til at oprette Git-repositories, så man ikke selv behøver installere en lokal Git server. Det har en del funktioner allerede indbygget, b.la. til samarbejde og projektstyring. Det er tænkt som et kodedelings site, og er blevet et socialt medie. Det er blevet meget udbredt at have et portfolio af ens kode på GitHub, til ens ansøgning. </p>
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