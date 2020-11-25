<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function mijnNaamIsGroot(){
            $voornaam ="Metin";
            $achternaam = "Celik";
            
            $geheleNaam = "Mijn naam is $voornaam en mijn achternaam is $achternaam";
            strtoupper($geheleNaam);
            echo $geheleNaam;

         }
         mijnNaamIsGroot();

    ?>
</body>
</html>