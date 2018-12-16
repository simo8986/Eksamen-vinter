<!DOCTYPE HTML>
<html lang="da">
	<head>
		<meta charset="UTF-8">
		<title>Responsivt design</title>
        <link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
        <div class="menu">
            <?php include 'header.php';?>
        </div>
        <h1>Responsivt Design</h1>
        <p>Enheder har forskellige skærmstørrelser, og forskellige opløsninger. Derfor skal man designe så hjemmesiden er optimal på alle størrelser. Det gør man ved at bruge responsivt design.</p>
        <p>Ved responsivt design tænker man mobile first, hvilket betyder at man laver mobilversionen først. Det betyder også at man ikke kan starte før man har planlagt sit design. </p>
        <p>Man giver siden ’breakpoints’, som er den bredde hvor en regel overtager fra en anden.Man styler hvert breakpoint, så det passer til enheden. Man laver breakpoints med mediaqueries. Når det er mobile first bruger man min-width. </p>
        <p>Når man bruger mediaqueries skal man give et viewport meta-tag til siden. Det fortæller mobile enheder at de ikke skal forsøge at skalere hjemmesiden ned så den passer.</p>
	</body>
</html>