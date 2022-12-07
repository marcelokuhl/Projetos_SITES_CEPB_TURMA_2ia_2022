<html lang="pt-br">
 <head>
     <meta charset="UTF-8">
     <link href="estilo.css" rel="stylesheet">
     <title>Valorant.Pixel</title>
 </head>
 <body>

    <?php
    
            $formatospermitidos = Array("mp4", "avi", "wmv", "mpg" , "mpeg", "mov", "m4v");
            $extensao = pathinfo($_FILES['video']['name'], PATHINFO_EXTENSION);
            $descricao = $_POST['descricao'];
            $titulo= $_POST['titulo'];
            $agente = $_POST['agente'];
            $mapa = $_POST['mapa'];
            $mapa_img = "icones/$mapa.png";
            $agente_img = "icones/$agente.png";
            
            ini_set('upload_max_filesize', '32M');
            ini_set('post_max_size', '64M');
            ini_set('max_input_time', 300);
            ini_set('max_execution_time', 300);
            
                    
            if(in_array($extensao, $formatospermitidos)):
                $pasta ="videos/";
                $temporario = $_FILES['video']['tmp_name'];
                $novoNome = uniqid().".$extensao";
                
                if(move_uploaded_file($temporario, $pasta.$novoNome)):
                    $px=uniqid().".html";
                    $pixel=fopen("$px", "w");
                    $dochtml='<html lang="pt-br">
                    <head>
                        <link href="estilo.css" rel="stylesheet">
                        <meta charset="UTF-8">
                        <title>Valoran.Pixel</title>
                    </head>
                    <body>
                        <div class="container">
                            <div class="conteudo">
                                
                                <video src="videos/'.$novoNome.'"controls="play"></video>
                                <h1>'.$titulo.'</h1>
                                <br><br>
                                <p id="descripition">Descrição:</p>
                                <p>'.$descricao.'</p>
                            </div>
                        </div>
                    </body>
                    </html>';
                    fwrite($pixel, $dochtml);
                    
                    $servername = "localhost";
                    $username = "root";
                    $password = "batata03";
                    $dbname = "DB_pixel";

                    try {
                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                    // set the PDO error mode to exception
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    $sql = "INSERT INTO pixel (agente, agente_img, mapa, mapa_img, titulo, link)
                    VALUES ('$agente', '$agente_img', '$mapa', '$mapa_img', '$titulo', '$px')";
                    // use exec() because no results are returned
                    $conn->exec($sql);
                    } catch(PDOException $e) {
                    echo $sql . "<br>" . $e->getMessage();
                    }

                    $conn = null;
                
                        
                    
                    echo"<p>Seu pixel foi postado<br>";
                    echo "<a href=".$px.">ver Pixel</a></p>";
                else:
                    echo"<p>Houve algum erro na postagem do seu pixel <br></p>";
                    echo $_FILES['video']['error'];
                endif;
            else:
                echo "<p>Tem que ser video maninho! (formato de arquivo não permitido)</p> <br>";
            endif; 
            ?> 
    </body>
</html>
    


