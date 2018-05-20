<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <h1>Produtos</h1>
            <table class="table">
            <?php foreach ($produtos as $produto): ?>

                <tr>
                    <td><?= $produto['nome']; ?></td>
                    <td><?= numeroEmReais($produto['preco']); ?></td>
                </tr>

            <?php endforeach; ?>
        </div>
        </table>
    </body>
</html>