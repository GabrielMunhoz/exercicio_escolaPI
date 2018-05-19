<?php
$nome=$_POST['nome'];
$Data=$_POST['date'];
$Disciplina=$_POST['disciplina'];
if ($nome=="" or $Data=="" or $Disciplina=="" ){
print("Faltou preencher algum campo...");
}
else
{
require("conectaPro.inc.php");
$ok = conecta_bd() or die ("Não é possível conectar-se ao servidor.");
print("Inserindo o Professor:<p>");
mysqli_query($ok, "insert into professores (nome, data_admissao, disciplina) values ('$nome', '$Data', '$Disciplina');") or die
("Não é possível inserir Professor!");
print("Professor inserido com sucesso: <b>$nome</b>");
}
?>
<p><a href="index.php">Voltar</a>
