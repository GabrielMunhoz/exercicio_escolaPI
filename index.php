
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        
        <style>
            
            table#div1{
                border-bottom-color: #000000;
                border-width:5px;  
                border-style:solid;
            }
             table#div2{
                 
                border-bottom-color: #ff0000;
                border-width:5px;  
                border-style:outset;
            }
            
        </style>
        
    </head>
    <body>
        <table id="div2">
            <tr> 
                <td>
                <form action="executa.php" method="post">
                    Nome: <input type="text" name="nome">
                    Data de Admissão: <input type="date" name="date">
                    Disciplina: <input type="text" name="disciplina">
                <br><input type="submit" value="Cadastrar">
                </form>
                <td>    
            </tr>
            <tr>
                <td>
                <?php


                require("conectaPro.inc.php"); //inclui o arquivo para conexão
                $con = conecta_bd() or die("Não é possível conectar-se ao
                     servidor.");
                $resultado = mysqli_query($con, "Select * from professores;");
                print("<center><h2>Professores</h2>");
                print("<table id='div1'>");
                print("<tr><td><b>Código</td>");
                print("<td><b>Nome</td>");
                print("<td><b>Data de Admissão</td>");
                print("<td><b>Disciplina</td>");

                while ($linha = mysqli_fetch_array($resultado)) {
                    $Codigo = $linha["codigo"];
                    $Nome = $linha["nome"];
                    $date = $linha["data_admissao"];
                    $Disciplina = $linha["disciplina"];
                    print("<tr><td align='center'>$Codigo</td>");
                    print("<td>$Nome</td>");
                    print("<td>$date</td>");
                    print("<td>$Disciplina</td></tr>");
                }
                print("</table></center>");

                ?>
                </td> 
            </tr>    
    </body>
</html>
