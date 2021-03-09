<?php 
include("conexao.php");


$nome1 = $_POST['nome'];
$valor1 = $_POST['valor'];

if ($nome1 != "") {


$sql = "INSERT INTO produtos (nome, valor) VALUES ('$nome1','$valor1')";
$confere = mysqli_query($conn, $sql);
if ($confere) {
	
	echo "<script> alert('Produto cadastrado com sucesso!');
	window.location = 'inicio.php';</script>";
	
} else {
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

}
else{
	$sql = "INSERT INTO produtos (nome, valor) VALUES ('$nome1','$valor1')";
}
mysqli_close($conn);

?>

