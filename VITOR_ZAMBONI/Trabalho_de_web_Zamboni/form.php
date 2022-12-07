<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="style-form.css" rel="stylesheet">
    <title>Valorant.Pixel</title>
</head>
<body>
    

<form enctype="multipart/form-data" action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
   
    <input type="hidden" name="MAX_FILE_SIZE" value="3000000000000000000000" />
    <br>

    <label for="video" class="label">Vídeo do Pixel <img src="./icones/upload.png"   /></label>
    <input name="video" type="file" required="true" id="video" />
    
    <br><br>
    <label for="titulo" id="label_title">Título:</label> <br>
        <input type="text" name="titulo" maxlength="50" required id="titulo">
    
    <br>
    <br>
    <label for="descricao" id="label_desc">Descrição:</label> <br>
        <textarea name="descricao" id="descricao" cols="30" rows="3" required ></textarea>
    
    <br><br>
    
    <div class="selects">
    <label for="agente" id="lab_agente">Agente:</label> <label for="mapa" id="lab_mapa">Mapa:</label><br>
        <select name="agente" id="agente" required>
            <option value="" data-default disabled selected></option>
            <option value="Harbor">Harbor</option>
            <option value="Fade">Fade</option>
            <option value="Neon">Neon</option>
            <option value="Chamber">Chamber</option>
            <option value="Kayo">Kay/o</option>
            <option value="Astra">Astra</option>
            <option value="Yoru">Yoru</option>
            <option value="Skye">Skye</option>
            <option value="Breach">Breach</option>
            <option value="Raze">Raze</option>
            <option value="Reyna">Reyna</option>
            <option value="Jett">Jett</option>
            <option value="Phoenix">Phoenix</option>
            <option value="Sage">Sage</option>
            <option value="Sova">Sova</option>
            <option value="Cypher">Cypher</option>
            <option value="Killjoy">Killjoy</option>
            <option value="Omen">Omen</option>
            <option value="Viper">Viper</option>
            <option value="Brimstone">Brimstone</option>
        </select>

        
        <select name="mapa" id="mapa" required>
            <option value="" data-default disabled selected></option>
            <option value="Ascent">Ascent</option>
            <option value="Haven">Haven</option>
            <option value="Bind">Bind</option>
            <option value="Icebox">Icebox</option>
            <option value="Breeze">Breeze</option>
            <option value="Fracture">Fracture</option>
            <option value="Pearl">Pearl</option>
        </select>
        <br><br>
        </div>
        <input type="submit" name="enviar" value="Enviar Pixel" />
        <br><br>
        
    <?php
    if(isset($_POST['enviar'])){
        error_reporting(0);
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
        
                
            
            echo"<p>Seu pixel foi postado!!<br>";
            echo "<a href=".$px.">Ver Pixel</a></p>";
        else:
            echo"<p>Houve algum erro na postagem do seu pixel <br></p>";
            echo $_FILES['video']['error'];
        endif;
    else:
        echo "<p>Tem que ser video maninho! (formato de arquivo não permitido)</p> <br>";
    endif;
    } 
    ?> 

</form>
    
</body>
</html>