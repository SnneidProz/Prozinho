<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Pegando os dados do formulário
    $nome = htmlspecialchars($_POST['nome']);
    $email = htmlspecialchars($_POST['email']);
    $avaliacao = htmlspecialchars($_POST['satisfacao']);
    $mensagem = htmlspecialchars($_POST['mensagem']);

    // Configurando o e-mail
    $to = "https://formsubmit.co/el/fijeme"; 
    $subject = "Avaliação do Chatbot";
    $body = "Nome: $nome\n";
    $body .= "E-mail: $email\n";
    $body .= "Avaliação: $avaliacao\n";
    $body .= "Mensagem: $mensagem\n";
    $headers = "From: $email";

    // Enviando o e-mail
    if (mail($to, $subject, $body, $headers)) {
        echo "Obrigado pela sua avaliação! Seu feedback foi enviado com sucesso.";
    } else {
        echo "Desculpe, houve um problema ao enviar sua avaliação. Por favor, tente novamente mais tarde.";
    }
} else {
    echo "Método de solicitação inválido.";
}
?>