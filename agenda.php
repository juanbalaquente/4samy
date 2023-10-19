<!DOCTYPE html>
<html>
<head>
    <title>Exemplo de SELECT em PHP</title>
</head>
<body>

<h2>Dados da tabela "mara"</h2>
<table>
    <tr>
        <th>data</th>
        <th>avaliação</th>
        <th>hoje</th>
        <th>semana</th>
    </tr>

    <?php
  
    // Executar a consulta SELECT
    $sql = "SELECT data, avaliacao, hoje, semana FROM mara";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Exibir os resultados
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['data'] . "</td>";
            echo "<td>" . $row['avaliacao'] . "</td>";
            echo "<td>" . $row['hoje'] . "</td>";
            echo "<td>" . $row['semana'] . "</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='4'>Nenhum resultado encontrado.</td></tr>";
    }

    // Fechar a conexão
    $conn->close();
    ?>
</table>

</body>
</html>
