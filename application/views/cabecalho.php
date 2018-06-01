<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <link rel="stylesheet" href="<?= base_url("bootstrap/dist/css/bootstrap.min.css"); ?> ">
        <meta charset="UTF-8">
    </head>
    <body>
        <div class="container">
            
            <?php if ($this->session->flashdata("success")): ?>

            <p class="alert alert-success"><?php echo $this->session->flashdata("success"); ?></p>

            <?php endif; ?>

            <?php if ($this->session->flashdata("danger")): ?>

            <p class="alert alert-danger"><?php echo $this->session->flashdata("danger"); ?></p>

            <?php endif; ?>