<?php
  $servername = "localhost";
  $username = "root";
  $password = "batata03";
  $dbname = "DB_pixel";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $sql = "SELECT * FROM pixel";
  $result = $conn->query($sql);
?>  
<html lang="pt-br">
  <script
    type="text/javascript"
    src="http://code.jquery.com/jquery-1.7.2.min.js"
  ></script>
  <script type="text/javascript" src="script.js"></script>
 
<head>
    <meta charset="UTF-8">
    <title>Valorant.pixel</title>
    <link href="style-table.css" rel="stylesheet">
</head>
<body>

    <script>
      
    </script>
    <div class="container">

    <div id="table_div"> 
    <table id="tabela">
      <thead>                    
          <tr>
                                
            <th>Agente</th>
                                
            <th>Mapa</th>
                                
            <th>Descrição</th>
                            
          </tr>
                          
          <tr>
                                
            <th></th>
                                
            <th></th>
                                
            <th><input type="text" id="txtColuna3" /></th>
                            
          </tr>
      </thead>
      <tbody>
          <?php
           
            while($row = $result->fetch_assoc()) {
              echo "<tr class='row'>
              <td><img class='img_agente' src='".$row["agente_img"]."'<br><br>".$row["agente"]."</td>
              <td><img class='img_mapa' src='".$row["mapa_img"]."'<br><br>".$row["mapa"]."</td>
              <td><a href=".$row["link"]." target='tabela'>".$row["titulo"]."</a></td>
              </tr>";
            }
          $conn->close();
        ?>
      </tbody>  
    </table> 
    </div>  
    <script>
	function AdicionarFiltro(tabela, coluna) {
	    var cols = $("#" + tabela + " thead tr:first-child th").length;
	    if ($("#" + tabela + " thead tr").length == 1) {
	        var linhaFiltro = "<tr>";
	        for (var i = 0; i < cols; i++) {
	            linhaFiltro += "<th></th>";
	        }
	        linhaFiltro += "</tr>";
	 
	        $("#" + tabela + " thead").append(linhaFiltro);
	    }
	 
	    var colFiltrar = $("#" + tabela + " thead tr:nth-child(2) th:nth-child(" + coluna + ")");
	 
	    $(colFiltrar).html("<select id='filtroColuna_" + coluna.toString() + "'  class='filtroColuna'> </select>");
	 
	    var valores = new Array();
	 
	    $("#" + tabela + " tbody tr").each(function () {
	        var txt = $(this).children("td:nth-child(" + coluna + ")").text();
	        if (valores.indexOf(txt) < 0) {
	            valores.push(txt);
	        }
	    });
	    $("#filtroColuna_" + coluna.toString()).append("<option>Todos</option>")
	    for (elemento in valores) {
	        $("#filtroColuna_" + coluna.toString()).append("<option>" + valores[elemento] + "</option>");
	    }
	 
	    $("#filtroColuna_" + coluna.toString()).change(function () {
	        var filtro = $(this).val();
	        $("#" + tabela + " tbody tr").show();
	        if (filtro != "Todos") {
	            $("#" + tabela + " tbody tr").each(function () {
	                var txt = $(this).children("td:nth-child(" + coluna + ")").text();
	                if (txt != filtro) {
	                    $(this).hide();
	                }
	            });
	        }
	    });
	 
	};
	AdicionarFiltro("tabela", 1);
  AdicionarFiltro("tabela", 2);
  
	</script>

</div>
</body>
</html>