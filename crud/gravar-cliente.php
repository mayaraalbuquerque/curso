<?php

        //Processo de gravação em banco de dados
        //1 - Resgatar os dados do form
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $cpf = $_POST["cpf"];
        $estadocivil = $_POST["estadocivil"];
        

        //2 - Conectar ao MYSQL
        $con = new PDO("mysql:host=localhost;dbname=crud","root","");
        
        //3- Montar a instrução SQL de gravação
        $stmt = $con->prepare("INSERT INTO cliente VALUES(NULL, ?, ?, ?, ?)");
        $stmt->bindParam(1, $nome);
        $stmt->bindParam(2, $email);
        $stmt->bindParam(3, $cpf);
        $stmt->bindParam(4, $estadocivil);

        if($stmt->execute()){
            $msg = 'Cliente cadastrado com sucesso!';
        }else{
            $msg = 'Erro ao gravar cliente!';
        }

?>

<script>
    alert("<?php echo $msg; ?>"); //exibição da mensagem
    location.href='cadastrar-cliente.php'; //redirecionamento
</script>