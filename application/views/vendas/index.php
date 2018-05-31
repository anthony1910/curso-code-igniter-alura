<html>
    <head>
        <link rel="stylesheet" href="<?= base_url("bootstrap/dist/css/bootstrap.min.css"); ?> ">
        <meta charset="UTF-8">
    </head>
    <body>
        <div class="container">
            <h1>Minhas Vendas</h1>
            <table class="table">
            <?php foreach ($produtosVendidos as $produto): ?>
                <tr>
                    <td><?php echo $produto['nome']; ?></td>
                    <td><?php echo dataMysqlParaPtBr($produto['data_de_entrega']); ?></td>
                </tr>
            <?php endforeach; ?>
            </table>
        </div>
    </body>
</html>