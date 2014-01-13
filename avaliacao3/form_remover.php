 <?php
            require_once("menu.php");
        ?>
        <center>
        <form action="remover.php" method="post">
            Digite o código do produto para remover:<br/><input type="text" name="id" /> </br>
            <input type="submit" value="Remover" />
         
               
        </form>
        </center>
        
    </body>
</html>
<?php
    require_once("menu.php");
    
    session_start();
    
    if(isset($_SESSION["cadastros"])){
        $cadastros = $_SESSION["cadastros"];
        
        foreach($cadastros as $id => $pessoa){
            if($pessoa != null){
                echo "[$id] =>" . $pessoa["nome"] . "<br/>";
            }
        }
    }
    else{
        echo "Não existem produtos cadastrados";
    }
        echo "</fieldset>";
        
?>
