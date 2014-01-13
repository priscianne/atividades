require_once("menu.php");

    session_start();
    
    if(!isset($_SESSION["cadastros"])){
        echo "Não existem produtos para aditar";
    }
    else{
        $id = $_REQUEST["id"];
        $nome = $_REQUEST["nome"];
        $sexo = $_REQUEST["sexo"];
        $estado = $_REQUEST["estado"];
        $observacoes = $_REQUEST["observacoes"];
        
        $aceito = false;
        if(isset($_REQUEST["aceito"])){
            $aceito = true;
        }
        
        
        $pessoa = array();
        $pessoa["nome"] = $nome;
        $pessoa["sexo"] = $sexo;
        $pessoa["aceito"] = $aceito;
        $pessoa["estado"] = $estado;
        $pessoa["observacoes"] = $observacoes;
        $cadastros =& $_SESSION["cadastros"];
        $cadastros[$id] = $pessoa;
        echo "Ediçao efetuada com sucesso!";
    
    }
    
    
?>

