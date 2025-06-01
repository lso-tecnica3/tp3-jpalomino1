<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <?php
        $diccionario = array(
            "pregunta_1" => "a",
            "pregunta_2" => "c",
            "pregunta_3" => "c",
            "pregunta_4" => "c",
            "pregunta_5" => "a",
            "pregunta_6" => "b",
            "pregunta_7" => "c",
            "pregunta_8" => "b",
            "pregunta_9" => "a",
            "pregunta_10" => "c"
        );
        $contador=0;
        $contador_pregunta=1;
        foreach ($diccionario as $pregunta => $respuesta) {
            if ($respuesta == $_GET[$pregunta]){
                print ' <div class="alert alert-success" role="alert">';
                print " la pregunta nro ". $contador_pregunta . " es correcta <br>";
                print' </div>';
                $contador_pregunta++; 
                $contador++;
            }
            else{
                print ' <div class="alert alert-danger" role="alert">';
                print " la pregunta nro ". $contador_pregunta . " es incorrecta <br>";
                print "la respuesta es ". $respuesta;
                print' </div>';
                $contador_pregunta++;
            }
        }
        $correctas_11 = ["a", "c"];
        $respuesta_11 = $_GET['pregunta_11'] ;
        sort($respuesta_11);
        sort($correctas_11);
        if ($respuesta_11 == $correctas_11) {
            print ' <div class="alert alert-success" role="alert">';
            print " la pregunta nro 11 es correcta <br>";
            print' </div>';
            $contador++;
        } else {
            print ' <div class="alert alert-danger" role="alert">';
            print " la pregunta nro 11 es incorrecta <br>";
            print "la respuesta es java y python";
            print' </div>';
        }
        
        print "$contador / 10 <br>";
        $porcentaje= ($contador/11)*110;
        print "porcentaje de correctas: " . $porcentaje . "<br>";
        if ($porcentaje < 50){
           print'<img src="https://th.bing.com/th/id/OIP.FCHW16qhkEc0Lp3d0Rfl8wAAAA?rs=1&pid=ImgDetMain" alt=""><br>' ;
        }
        else if ($porcentaje >=50 and $porcentaje <= 75){
            print'<img src="https://st4.depositphotos.com/1001911/25207/v/1600/depositphotos_252078590-stock-illustration-ok-sign-winking-emoticon.jpg" alt=""><br>' ;

        }
        else if ($porcentaje > 75 and $porcentaje<= 95){
            print'<img src="https://th.bing.com/th/id/OIP.pHeIX_7vxJdeb4lmWf0bUgAAAA?rs=1&pid=ImgDetMain" alt=""> <br>' ;

        }
        else{
            print'<img src="https://i.pinimg.com/736x/9e/93/f1/9e93f1617e55931f8fece97e904de1bd.jpg" alt=""><br>' ;

        }

    ?>
    <br>
    <a href="index.html">volver a la trivia</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>
</html>
