<html>
    <style>
body {
  background: linear-gradient(-45deg,rgba(0, 147, 46, 1), rgba(23, 196, 75, 1), rgba(100, 225, 138, 1), rgba(115, 169, 132, 1), rgba(127, 127, 127, 1));
  background-size: 400% 400%;
  animation: gradient 15s ease infinite;
}

@keyframes gradient {
	0% {
		background-position: 0% 50%;
	}
    50% {
		background-position: 50% 75%;
	}
	100% {
		background-position: 75% 100%;
	}

}
*{
    font-family: monospace;
  
}
.texto{
    font-family: monospace;
    text-align: center;
    margin-bottom: 5%;
}
.h3 {
    margin-top: 25%;
    text-align: center;
}
.footer{
    color: #04AA6D;
}
.p{
    text-align: center;
    margin-left: 25%;
    margin-right: 25%;
}
.but{
    align-items: left;
    margin-left: 0px;
    border:1px solid #25692A;
    border-radius:4px;
    display:absolute;
    color: #fafafa00;
}
.sobre {
    text-align: center;
}
.info{
    text-align: center;
    margin-left: 25%;
    margin-right:25%;

}
    </style>
<body>


<button class="but" onclick="window.location.href='pag.html'"><img src="https://img.icons8.com/ios/50/000000/back--v1.png"  width="20" height="20"/></button><h1 class="texto">Formulário | TADS | PHP</h1>
<h2 class="Sobre">Suas Informações : </h2><br>
<p class="info"> Bem Vindo,  <?php echo $_GET["nome"]; ?><br><br>
Seu email para contato é : <?php echo $_GET["email"]; ?><br><br>
Seu Telefone é : <?php echo $_GET["tel"]; ?><br><br>
Cursando o : <?php echo $_GET["contact"]; ?><br><br>
Curso Selecionado : <?php echo $_GET["Curso"]; ?><br><br>
Sua foto de perfil : <?php echo $_GET["filefield"]; ?>
</p>

<?php

$nome = $_GET['nome'];
$email = $_GET['email'];
$tel = $_GET['tel'];
$contact = $_GET['contact'];
$Curso = $_GET['Curso'];


$conn = new mysqli('localhost','root','','test');
if($conn-> connect_error){
    die('Connection Failed : '.$conn-> connect_error);
}else{
    $stmt = $conn ->prepare("insert into registration(nome, email, tel, contact, Curso)
    values(?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss",$nome, $email, $tel, $contact, $Curso);
    $stmt->execute();
    echo "Registrado com sucesso";
    $stmt->close();
    $conn->close();
}
?>




<footer class="footer">
<h4 class="h3">Realizado por, Breno Mendes Moura<br>
                        1°Semestre <BR>
                         TADS<br>
        </h4>
    </footer>
</body>
</html>
