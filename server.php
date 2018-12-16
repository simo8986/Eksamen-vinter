<!DOCTYPE HTML>
<html lang="da">
	<head>
		<meta charset="UTF-8">
		<title>Server</title>
        <link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
        <div class="menu">
            <?php include 'header.php';?>
        </div>
        <h1>Server</h1>
        <p>Server er både hardware med en særlig rolle, og software med en særlig rolle. En server bruges via. en klient. Klienten er et program der kobler sig til serveren, og udveksler information med den. En webserver kommunikerer med en web-klient (browser)</p>
        <h2>Servertyper</h2>
        <p>Der er forskellige typer servere, heriblandt;</p>
            <ul>
                <li>En FTP-server kommunikerer med en FTP-klient (FTP-program, som FileZilla)</li>
                <li>En printserver kommunikerer med en printklient, der er en (usynlig) del af styresystemet.</li>
                <li>En webserver (hardware) kan indeholde flere servere (software)</li>
                <li>Databaseserver, modtager data fra, og leverer data til webserver og andre klienter</li>
                <li>FTP-server, udveksler filer til anvendelse på webserver mv. </li>
            </ul>
        <p>Man kan opdatere en server med nye filer ved at bruge FTP, alternativt direkte fil adgang, konfiguration kan ske med SHH (Terminaladgang)</p>
        <h2>Website på en server</h2>
            <p>Webserveren leverer HTML, CSS, javascript og billeder osv. til klienter (browsere). De nødvendige filer ligger på serveren. Serveren har en IP-adresse, IP-adressen kan være tilknyttet et domæne</p>
            <p>En browser kan anvende IP-adresse eller et domæne. Domænenavnet oversættes i en DNS-server til den rigtige IP-adresse.</p>
	</body>
</html>