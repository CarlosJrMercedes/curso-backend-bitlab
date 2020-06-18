<?php
    require_once "Resenia.php";
    require_once "Elenco.php";
    require_once "Cinematografica.php";
    require_once "Usuario.php";
    require_once "Cometarioas.php";
    $resenia = new Resenia();
    $elenco = new Elenco();
    $cinema = new Cinematografica();
    $usuario = new Usuarios();
    $comentario = new Comentario();

    // inicio de sesion
    $usuario->nombreCompleto = "Carlos Mercedes";
    $usuario->usuario = "CarlsJr";
    $usuario->nacimineto = "23-091997";



    // crear reseña
    $resenia->titulo = "Mi inpresion sobre la pelicula";
    $elenco->directores = "Chad Stahelski";
    $elenco->actores = "Keanu Reeves, Mikael Nyqvist, Alfie Allen, Ian McShane";
    $elenco->guionistas = "Derek Kolstad";
    $cinema->nombre = "John Wick Otro día para matar";
    $cinema->duracion = "114 minutos";
    $cinema->idioma = "Ingles";
    $cinema->genero = "Acción";
    $resenia->texto = "La historia se centra en John Wick 
    (Reeves), buscando a los hombres que irrumpieron en su casa, 
    robaron su auto antiguo(Ford Mustang de 1969) y mataron a su 
    cachorro, que fue un último regalo para él de su esposa 
    recientemente fallecida (Moynahan). Stahelski y David 
    Leitch dirigieron la película juntos, aunque solo se acreditó 
    a Stahelski.​ ";
    $cinema->numeroCap = "";
    $cinema->temporada = "";
    $resenia->autor = $usuario;
    
    // fin crear reseña

    // crear comentario 


    // crear comentario 
    $comentario->autor = "Carlos Mercedes";
    $comentario->comentario = "Me parece interesante esta reseña ";
    $comentario->fecha = "18/06/2020";
    $comentario->favoritos = "";
    $comentario->calificacion = "1"; //deve ser entre el 1 al 5



    // mostrar reseña

    if($cinema->getPelicula() == 0){

        echo "<b><h1>RESEÑAS/ NOTICIAS DE LA PELICULA : <u>".
        $cinema->nombre."</u><br> AUTOR DE ESTA RESEÑA/NOTICIA : <u>".$resenia->getAutor()."</u></h1></b> ";
        echo"<h2><b><u>Elenco de la pelicula :</u></b></h2>";
        echo "<h4><b><u>Directores </u> : ".$elenco->directores."<br></b></h4>";
        echo "<h4><b><u>Actores </u> : ".$elenco->actores."<br></b></h4>";
        echo "<h4><b><u>Guionistas </u> : ".$elenco->guionistas."<br></b></h4>";
        echo "<h4><b><u>Tiempo de duración </u> : ".$cinema->duracion."<br></b></h4>";
        echo "<h4><b><u>Idioma </u> : ".$cinema->idioma."<br></b></h4>";
        echo "<h4><b><u>Género </u> : ".$cinema->genero."<br></b></h4>";
        echo "<h4><b><u>Contenido </u> : ".$resenia->texto."<br></b></h4>";

        
    }else{

        echo "<b><h1>RESEÑAS/ NOTICIAS DE LA SERIE : <u>".
        $cinema->nombre."</u><br> AUTOR DE ESTA RESEÑA/NOTICIA : <u>".$resenia->getAutor()."</u></h1></b> ";
        echo"<h2><b><u>Elenco de la serie :</u></b></h2>";
        echo "<h4><b><u>Directores </u> : ".$elenco->directores."<br></b></h4>";
        echo "<h4><b><u>Actores </u> : ".$elenco->actores."<br></b></h4>";
        echo "<h4><b><u>Guionistas </u> : ".$elenco->guionistas."<br></b></h4>";
        echo "<h4><b><u>Tiempo de duración </u> : ".$cinema->duracion."<br></b></h4>";
        echo "<h4><b><u>Idioma </u> : ".$cinema->idioma."<br></b></h4>";
        echo "<h4><b><u>Género </u> : ".$cinema->genero."<br></b></h4>";
        echo "<h4><b><u>Capitulo </u> : ".$cinema->numeroCap."<br></b></h4>";
        echo "<h4><b><u>Temporada </u> : ".$cinema->temporada."<br></b></h4>";
        echo "<h4><b><u>Contenido </u> : ".$resenia->texto."<br></b></h4>";

    }

    // fin reseña

    // mostar comentario
    if($comentario->comentarioNulo() == 0){

    }else{
        echo"<h2><b>Comentario de parte de <u>".$comentario->autor."</u></b></h2>";
        echo "<h4><b><u>contenido </u> : ".$comentario->comentario."<br></b></h4>";
        echo "<h4><b><u>fecha publicación </u> : ".$comentario->fecha."<br></b></h4>";
        echo "<h4><b><u>Favoritos </u> : ".$comentario->getFavoritos()."<br></b></h4>";
        echo "<h4><b><u>Calificación </u> : ".$comentario->calificar()."<br></b></h4>";



    }
    
    // fin mostar comentario


?>