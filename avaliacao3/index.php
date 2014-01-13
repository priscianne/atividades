
<style>
    .rosa{
        color: pink;
    }
    .Azul{
        color: blue;
    }
    .amarelo{
        color: yellown;
    }
</style>


<?php
    echo "<title>Lista de produto</title>";
    require_once("menu.php");
    
    session_start();
    
    if(isset($_SESSION["cadastros"])){
        $cadastros = $_SESSION["cadastros"];
        
        echo "<dl>";
        foreach($cadastros as $pessoa){
            $sexo = $pessoa["sexo"];
            $aceito = $pessoa["aceito"];
            $estado = $pessoa["estado"];
            $observacoes = $pessoa["observacoes"];
            if($pessoa != null){
                echo "<center>";
                echo "<fieldset>";
                echo "<dt class='$sexo' >" . $pessoa["nome"] . "</dt>";
                echo "<dd>Cor: " . $sexo . "</dd>";
                echo "<dd>praso de entrega: " . $estado . "</dd>";
                echo "<dd>Produto novo: ";
                
                if($aceito){
                    echo "Sim";
                }
                else{
                    echo "Não";
                }
                echo "<dd>Detalhe do produto: " . $observacoes . "</dd>";
                echo "</center>";
                echo "</fieldset>";
                echo "</dd>";
            }
        }
        echo "</dl>";
        
    }
    else{
        echo "Não existem produtos cadastrados";
    }
    
?>
