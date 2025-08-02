
<?php require_once('../app/views/partials/Header.php'); ?>

<div class="container mt-5 border border-2 py-5">
    <form action="/add-flag" method="post" class="w-50 m-auto" enctype="multipart/form-data">
        <div class="mb-3">
            <label class="fw-medium" for="name">Flag Name:</label>
            <input type="text" id="name" name="name" class="form-control">
        </div>
        <div class="mb-3">
            <label class="fw-medium" for="name">Flag Code:</label>
            <input type="text" id="code" name="code" class="form-control">
        </div>
        
        <div class="mb-3">
            <label class="fw-medium" for="flag_filename">Flag Image:</label>
            <input type="file" id="flag_filename" name="flag_filename" class="form-control">
        </div>
        
        <div>
            <button type="submit" class="btn btn-primary">Add</button>
        </div>


    </form>
</div>


<?php require_once('../app/views/partials/Footer.php'); ?>


