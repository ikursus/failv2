<?php require('header.html.php'); ?>
<main>

<div class="container-fluid px-4">


    <h1 class="mt-4">Senarai Surat</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Senarai Surat</li>
    </ol>
    
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Senarai Surat
        </div>
        <div class="card-body">
            
        <form method="POST" action="">

        <div class="row">
            <div class="col-6">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">NO. RUJUKAN SURAT</label>
                    <input name="norujukan" type="text" id="norujukan" class="form-control">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
            </div>
            <div class="col-6">
                <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">JABATAN PEMILIK</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
            </div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
            
        </div>
    </div>

</div>

</main>
<!-- Footer -->
<?php require('footer.html.php'); ?>
            