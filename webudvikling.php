<!DOCTYPE HTML>
<html lang="da">
	<head>
		<meta charset="UTF-8">
		<title>Webudvikling</title>
        <link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
        <div class="menu">
            <?php include 'header.php';?>
        </div>
        <h1>Grundlæggende webudvikling</h1>
        <p>Jeg havde en del erfaring allerede da vi startede webudvikling, men det gik hurtigt op for mig at jeg havde meget ’spring ud i det’ erfaring, og ikke så meget teorien bag, mere ’det her virker’ men ikke ’den her virker fordi’. Så jeg er bestemt blevet klogere, og mere organiseret.</p>
        
        <h2>Grundlæggende HTML</h2>
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
        <h2>Grundlæggende CSS</h2>
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
	</body>
</html>