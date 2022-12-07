<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

        #scacchiera{
            width: 100vw;
            height: 100vw;
            border: 1px solid #000;
        }

        .chiaro{
            background-color: #fff;
        }

        .scuro{
            background-color: #000;
            color: #fff;
        }

        .quadretto{
            width: calc(100% / 8);
            height: calc(100% / 8);
            display: inline-block;
        }

    </style>
</head>
<body>

    <div id="scacchiera">

        <?php

        $blocchi = 8;

        for ($i = 1; $i < 9; $i++){
            for ($y = 1; $y < 9; $y++){

                $pari = ($i + $y) % 2 == 0;
                
                if($pari){
                    echo "<div class=\"quadretto scuro\">i = $i - Y = $y</div>";
                }else{
                    echo "<div class=\"quadretto chiaro\">i = $i - Y = $y</div>";
                }

                
            }
        }



        ?>

    </div>

     

</body>
</html>

