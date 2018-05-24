<html>
    <head>
        <link rel="stylesheet" href="<?= base_url("bootstrap/dist/css/bootstrap.min.css"); ?> ">
        <meta charset="UTF-8">
    </head>
    <body>
        <div class="container">
            <h1><?php echo $produto['nome']; ?></h1> <br/>
            Preço: <?php echo $produto['preco']; ?> <br/>
            <?php echo auto_typography($produto['descricao']); ?> <br/>
        </div>
    </body>
</html>