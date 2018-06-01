            <h1><?php echo $produto['nome']; ?></h1> <br/>
            Preço: <?php echo $produto['preco']; ?> <br/>
            <?php echo auto_typography(html_escape($produto['descricao'])); ?> <br/>

            <h2>Compre agora mesmo</h2>
            <?php
            
            echo form_open('vendas/nova');

            echo form_hidden('produto_id', $produto['id']);

            echo form_label('Data de Entrega', 'data_de_entrega');
            echo form_input(array(
                'name' => 'data_de_entrega',
                'class' => 'form-control',
                'id' => 'data_de_entrega',
                'max_length' => '255',
                'value' => ''
            ));

            echo form_button(array(
                'class' => 'btn btn-primary',
                'content' => 'Comprar',
                'type' => 'submit'
            ));

            echo form_close();
            
            ?>