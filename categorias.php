<?php include "cabecalho.php"?>

<?php
$pesquisa = "";

if( isset($_GET["pesquisa"]) )
{
    $pesquisa = $_GET["pesquisa"];
    if( empty($pesquisa) )
    {
       //Se a variavel estiver vazia executa aqui 
       include "conexao.php";
       $sql = "Select Id, Descricao, Valor, Codigo_barras, Imagem from Produtos order by Id desc";
       $resultado = $conexao->query($sql);
       
       $conexao->close();
    }
    else
    {
        //Aqui vai a lógica da pesquisa
        include "conexao.php";
        $sql = "Select Id, Descricao, Valor, Codigo_barras, Imagem 
                from Produtos  
                where Descricao like '%$pesquisa%' || Codigo_Barras = '$pesquisa'
                order by Id desc";
        $resultado = $conexao->query($sql);
        
        $conexao->close();
    }
}
else
{
    $pesquisa = "";
    include "conexao.php";
    $sql = "Select Id, Descricao, Valor, Codigo_barras, Imagem from Produtos order by Id desc";
    $resultado = $conexao->query($sql);
   
    $conexao->close();
    
}
?>


<br>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                Produtos
            </div>

            <div class="col-8">
                        <form action="produtos.php" method="get">
                            <div class="input-group mb-3">
                                <input type="text" 
                                        name="pesquisa" 
                                        value="<?php echo $pesquisa; ?>"  
                                        class="form-control" 
                                        placeholder="Digite a categoria do produto..." />


                                <button class="btn btn-primary" type="submit">
                                    Pesquisar
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="row">
                    <div class="col-12">
                        
                        <table class="table table-hover table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Categoria</th>
                                <th scope="col">Descrição</th>                                
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            
                            if ($resultado->num_rows > 0) {
                                while($row = $resultado->fetch_assoc()) {
                                    echo "<tr>";
                                    echo "<td>" . $row["Categoria"] . "</td>";
                                    echo "<td>" . $row["Descricao"] . "</td>";
                                    echo "</tr>";
                                }
                            } else {
                                echo "<tr><td colspan='3'>Nenhum registro encontrado</td></tr>";
                            }
                            ?>
                                                    
                        </tbody>
                        </table>
                    </div>
                </div>


        </div>
    </div>
</div>    




<?php include "rodape.php"?>