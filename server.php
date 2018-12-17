<!DOCTYPE HTML>
<html lang="da">
	<head>
		<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Server</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
    <div id="grid">
        <div class="menu">
            <?php include 'header.php';?>
        </div>
       <div class="indhold">
        <h1>Server</h1>
        <p>Server er både hardware med en særlig rolle, og software med en særlig rolle. En server bruges via. en klient. Klienten er et program der kobler sig til serveren, og udveksler information med den. En webserver kommunikerer med en web-klient (browser)</p>
        
   <div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          <h2>Servertyper</h2>
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
        <p>Der er forskellige typer servere, heriblandt;</p>
            <ul>
                <li>En FTP-server kommunikerer med en FTP-klient (FTP-program, som FileZilla)</li>
                <li>En printserver kommunikerer med en printklient, der er en (usynlig) del af styresystemet.</li>
                <li>En webserver (hardware) kan indeholde flere servere (software)</li>
                <li>Databaseserver, modtager data fra, og leverer data til webserver og andre klienter</li>
                <li>FTP-server, udveksler filer til anvendelse på webserver mv. </li>
            </ul>
        <p>Man kan opdatere en server med nye filer ved at bruge FTP, alternativt direkte fil adgang, konfiguration kan ske med SHH (Terminaladgang)</p>
      </div>
    </div>
  </div>     
        
    <div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          <h2>Website på en server</h2>
        </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
        <p>Webserveren leverer HTML, CSS, javascript og billeder osv. til klienter (browsere). De nødvendige filer ligger på serveren. Serveren har en IP-adresse, IP-adressen kan være tilknyttet et domæne</p>
            <p>En browser kan anvende IP-adresse eller et domæne. Domænenavnet oversættes i en DNS-server til den rigtige IP-adresse.</p>
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