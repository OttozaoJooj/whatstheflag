<?php require_once('../app/views/partials/Header.php')?>

    <div class="container mt-5 border border-2 py-5">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th class="col">ID:</th>
                    <th class="col">Nome do País:</th>
                    <th class="col">Código:</th>
                    <th class="col">Nome de Arquivo:</th>
                    <th class="col">Criação:</th>
                    <th class="col">Atualização:</th>     
                    <th class="col">Usuário:</th>                    

                </tr>
            </thead>
            <tbody>
                <?php require_once('../app/views/components/DataFlagComponent.php');?>
            </tbody>

        </table>
    </div>
    
<?php require_once('../app/views/partials/Footer.php')?>
