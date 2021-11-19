<?php

?>

<!doctype html>
<html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial, shrink-to-fit=no">
        <link rel="stylesheet" type="text/css" href="cadastro1.css">
     
    </head>
    <title>Cadastro</title>
    <body>

            <h1>Cadastro</h1>
        <!--
            Usando classe form dentro de uma div para fazer o formulario e modifica-la usando css
            **Importante: Todos os inputs precisam de um name para serem 'pegos' pelo PHP
        -->
        <div class="form">
            <form method="POST" action="cadastrobancodedados.php">

                <div class="">
                    <label for="nome"><strong>Nome</strong</label>
                    <input type="text" name="nome" id="nome" pattern="[A-Za-zÀ-ú ']{4,}" required>
                </div>
                <div class="">
                    <label for="nome"><strong>Nascimento</strong></label>
                    <input type="date" name="nasc" id="nasc" required>
                </div>    
                <div class="">
                    <!--
                        Usando comando patern para fazer uma ""validação" de CPF
                     -->
                    <label for="cpf"><strong>CPF</strong></label>
                    <input id="cpf" type="int" name="cpf" \
                        pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" \
                        title="Digite um CPF no formato: xxx.xxx.xxx-xx"
                        id="cpf">
                </div>    
                <div class="">
                    <label for="nome"><strong>Celular</strong></label>
                    <!--
                        Usando comando patern para fazer uma ""validação" de numero de celular
                     -->
                    <input  type="tel" name="cel" id="cel" placeholder = " 1799999-9999 " title =" Número de telefone precisa ser no formato 179999-9999 "pattern="^\d{2}\d{5}-\d{4}$" required>
                    
                </div>     
                <div class="">
                    <label for="nome"><strong>E-mail</strong></label>
                    <input type="email" name="email" id="email" required>
                </div>    
                <div class="">
                    <label for="nome"><strong>Endereço</strong></label>
                    <input type="text" name="end" id="end" required>
                </div>
                <div class="obs">
                    <textarea id="obs" placeholder="Observação" style="resize: none"name="obs" maxlenght="300"> </textarea>
                </div> 

                <div>

                    <button class="botao" type="submit" name="submit">Concluído</button>      
                
                </div>
        
            </form>
        </div>
    </body>
</html