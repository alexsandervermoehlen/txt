<h1>Manipulando arquivo txt</h1> 
<form method="POST" action="receive.php">
    <input type="text" name="tarefa" placeholder="Digite uma atividade" />
    <input type="submit" value="Enviar">    
</form>
<?php

// pega dados do arquivo tarefas.txt e coloca na tela
if (file_exists("tarefas.txt")) {
    $lista = file_get_contents("tarefas.txt");
    $lista_array = explode("\n", $lista);
    foreach($lista_array as $lista_item) {
        //echo $lista_item.'<br/>';
    }
} else {
    $lista = null;
}

?>
<br/>
<!--deleta o arquivo tarefas.txt -->
<button onclick="window.location.href = 'delete.php'">Excluir Lista</button>
<button><a href="lista.php">Listar</button>
<button><a href="edita.php">Editar</button>