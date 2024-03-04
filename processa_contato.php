<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Dados do formulário
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Configurações do banco de dados (ajuste conforme necessário)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mensagem";

    // Cria a conexão
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verifica a conexão
    if ($conn->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    }

    // Prepara e executa a consulta SQL para inserir os dados
    $sql = "INSERT INTO contatos (name, email, message) VALUES ('$name', '$email', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "Mensagem enviada com sucesso.";
    } else {
        echo "Erro ao enviar a mensagem: " . $conn->error;
    }

    // Fecha a conexão
    $conn->close();
} else {
    echo "Acesso não autorizado.";
}
?>
