<?php
namespace app\views;

$codeFlag = 'br';
?>

<?php require_once('../app/views/partials/Header.php')?>

    <div class="container mt-5 border border-2 py-5">
        <h1 class="text-center">Advinhe o País</h1>
        <div >
            <figure>
                <img class="w-50 d-block m-auto" src="https://flagcdn.com/w2560/<?= $codeFlag;?>.png" alt="">            
            </figure>
        </div>
        <form action="" method="post" class="d-flex justify-content-center">
            <input type="text" class="form-control">
            <button type="submit" class="btn btn-primary">Enviar</button>

        </form>
    </div>
    
<?php require_once('../app/views/partials/Footer.php')?>
