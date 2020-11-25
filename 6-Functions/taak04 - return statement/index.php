<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function geefTienProcent(){
            $koopPrijs = 75;
            $korting = 10;
            return $koopPrijs - $korting;
            
            
            
         }
         $aankoopprijs = geefTienProcent();
         echo $aankoopprijs;

    ?>
</body>
</html>