<?php require('header.html.php'); ?>
<main>
<div class="container-fluid px-4">


    <h1 class="mt-4">Dashboard</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
    </ol>

    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Tukar Password
        </div>
        <div class="card-body">
            <form method="POST" action="tukarpassword.php">
                <div class="form-group">
                    <input type="text" class="form-control" name="katalaluan">
                </div>

                <button type="submit" class="btn btn-primary">Update Password</button>
            </form>
        </div>
    </div>
</div>
</main>
<!-- Footer -->
<?php require('footer.html.php'); ?>