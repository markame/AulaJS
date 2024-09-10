<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém os dados enviados pelo formulário
    $avaliacao = $_POST['avaliacao'] ?? '';
    $secao = $_POST['secao'] ?? '';
    $outraSecao = $_POST['outra'] ?? '';
    $comentarios = $_POST['comentarios'] ?? '';
    $nome = $_POST['nome'] ?? '';
    $email = $_POST['email'] ?? '';
    $fone = $_POST['fone'] ?? '';
    $novidades = isset($_POST['novidades']) ? 'Sim' : 'Não';

    // Exibe os dados recebidos
    echo "<h2>Dados Recebidos:</h2>";
    echo "<p><strong>Avaliação:</strong> " . htmlspecialchars($avaliacao) . "</p>";
    echo "<p><strong>Seção Favorita:</strong> " . htmlspecialchars($secao) . "</p>";

    if (!empty($outraSecao)) {
        echo "<p><strong>Outra Seção:</strong> " . htmlspecialchars($outraSecao) . "</p>";
    }

    echo "<p><strong>Comentários:</strong> " . nl2br(htmlspecialchars($comentarios)) . "</p>";
    echo "<p><strong>Nome:</strong> " . htmlspecialchars($nome) . "</p>";
    echo "<p><strong>Email:</strong> " . htmlspecialchars($email) . "</p>";
    echo "<p><strong>Telefone:</strong> " . htmlspecialchars($fone) . "</p>";
    echo "<p><strong>Novidades:</strong> " . htmlspecialchars($novidades) . "</p>";
}
?>
