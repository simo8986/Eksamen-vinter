<!DOCTYPE HTML>
<html lang="da">
	<head>
		<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Informationsarkitektur</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
    <div id="grid">
        <div class="menu">
            <?php include 'header.php';?>
        </div>
       <div class="indhold">
        <h1>Informationsarkitektur</h1>
        <p>Målet med informationsarkitektur er at få lagt site-mappet af en hjemmeside, altså det skelet hjemmesiden er bygget op efter. Det er med det formål at få lagt hjemmesidens indhold der hvor folk forventer det. Problemet her er at man forventer forskellige ting. Nogen vil for eksempel mene at dette punkt burde ligge under kommunikation, mens jeg føler det hører mere hjemme her under webudvikling. Men det er man ikke altid enige om. Med andre ord, det er en måde at sætte hjemmesidens navigation op på, så folk organisk kan komme hen til det de søger, uden at skulle lede længe. </p>
        
        <div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          <h2>Måder at organisere på</h2>
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
        <h3>Kategori</h3>
                <p>Organisering efter fællestræk, eller emner. Eksempel kunne være ’supper’ eller ’desserter’ </p>
            <h3>Tid</h3>
                <p>Efter en bestemt tidslinje, eller historik, eksempelvis årstal noget er fundet, eller skrevet.</p>
            <h3>Lokation</h3>
                <p>Geografisk eller fysisk placering. Kunne eksempel være i en medicinbog, hvor instruktionerne peger på forskellige kropsdele, eller i en historiebog hvor den viser hvor historiske fund blev opdaget.</p>
            <h3>Alfabetisk</h3>
                <p>Efter alfabetet, kunne være i en kogebog, eller som i en ordbog. </p>
            <h3>Hierarki</h3>
                <p>Sorteres efter målt værdi, som en pris, størrelse eller vægt. Kunne være i en oversigt over prisen på smør blandt supermarkeder.</p>
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