<?php require_once('../app/views/partials/Header.php')?>

    <div class="container mt-5 border border-2 py-3">
        <div class="mb-3">
            <form class="w-25 ms-auto">
                <label for="search-flag" class="form-label fw-bold">Search Flag:</label>
                <input type="text" name="value-search" id="search-flag" class="form-control">

            </form>
        </div>
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

    <script src="static/js/SearchFlagAjax.js"></script>    
<?php require_once('../app/views/partials/Footer.php')?>
