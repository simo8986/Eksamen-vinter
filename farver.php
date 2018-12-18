<!DOCTYPE HTML>
<html lang="da">
	<head>
		<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Farver</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
    <div id="grid">
        <div class="menu">
            <?php include 'header.php';?>
        </div>
       <div class="indhold">
        <h1>Farver</h1>
        <p>Isaac Newton viste i 1600-tallet lysets brydning igennem et prisme.<br>Ved hjælp af hans eksperimenter konkluderede han at blå, gul og rød er de primære farver, da de ikke kan blandes ud af andre farver. </p>
           <img src="billeder/design/newton.jpg" alt="Isaac Newton">
        <p>Det er værd at nævne at et farvesystem ikke er absolut, men bygger på flere teoretiske opfattelser, og kan være forskellige fra kultur til kultur. </p>
           <img src="billeder/design/prism.jpg" alt="Prisme">
      <div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          <h2>Farvehjul</h2>
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
        <img src="billeder/design/farvehjul.png" alt="Farvehjul">
            <h3>Primære</h3>
                <p>Rene farver - inderste trekant</p>
            <h3>Sekundære</h3>
                <p>Blandet af to primære farver - ligger op af primære</p>
            <h3>Tertiære</h3>
                <p>Blandet af én primær og én sekundær farve - ligger yderst i hjulet</p>
      </div>
    </div>
  </div>  
        
    <div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          <h2>Farverum</h2>
        </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
          <img src="billeder/design/farverum.png" alt="Farverum">
        <h3>RGB/Red Green Blue</h3>
                <p>Additivt farvesystem, lys tilføjes. Benyttes på computer og tv-skærme.</p>
            <h3>CMYK/Cyan Magenta Yellow Key(Black)</h3>
                <p>Subtraktivt farvesystem, lys trækkes ud. Benyttes til tryksager.</p>
            <h3>Kulør/Hue</h3>
                <p>En graduering eller variation af en farve.</p>
            <h3>Mætning/Saturation</h3>
                <p>En kulør blandes med forskellige mængder af gråtone. Det siges også at farven får en ’valør/value’.</p>
            <h3>Lyshed/Brightness</h3>
                <p>En kulør blandes med ren sort eller hvid.</p>
      </div>
    </div>
  </div>    
        
      <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          <h2>Farvesammensætning</h2>
        </button>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
        <h3>Monokrom</h3>
          <img src="billeder/design/farvecombination.jpg" alt="Farvesammensætning">
                <p>Én kulør som justeres i forhold til lyshed og mætning. Den går nærmest fra hvid til sort i nuancer af samme farve.</p>
            <h3>Analog</h3>
                <p>Én kulør indenfor et bredere spektrum af lyshed og mætning.</p>
            <h3>Komplementær</h3>
                <p>Farver der ligger overfor hinanden direkte i farvehjulet.</p>
            <h3>Split komplementær</h3>
                <p>Farver der ligger direkte overfor hinanden, med et lidt bredere farvespektrum.</p>
            <h3>Triader</h3>
                <p>Tre farver som ligger lige langt fra hinanden.</p>
            <h3>Tetriader (Dobbeltkomplementere)</h3>
                <p>Fire farver som er komplementære.</p>
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