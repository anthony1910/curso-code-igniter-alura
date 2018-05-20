<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <link rel="stylesheet" href="<?= base_url("bootstrap/dist/css/bootstrap.min.css"); ?> ">
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
            </table>        

            <h1>Cadastro</h1>
            <?php
            echo form_open("usuarios/novo");

            echo form_label("Nome", "nome");
            echo form_input(array(
                "name" => "nome",
                "id" => "nome",
                "class" => "form-control",
                "maxlength" => "255"
            ));

            echo form_label("Email", "email");
            echo form_input(array(
                "name" => "email",
                "class" => "form-control",
                "id" => "email",
                "maxlength" => "255"
            ));

            echo form_label("Senha", "senha");
            echo form_password(array(
                "name" => "senha",                
                "id" => "senha",
                "class" => "form-control",
                "maxlength" => "255"
            ));

            echo form_button(array(
                "class" => "btn btn-primary",
                "content" => "Cadastrar",
                "type" => "submit"
            ));

            echo form_close();
            ?>
        </div>
    </body>
</html>