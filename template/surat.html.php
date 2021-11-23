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
            <div class="table-responsive">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>NO RUJUKAN</th>
                        <th>TARIKH SURAT</th>
                        <th>TAJUK</th>
                        <th>JABATAN</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>NO RUJUKAN</th>
                        <th>TARIKH SURAT</th>
                        <th>TAJUK</th>
                        <th>JABATAN</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php foreach ($result as $item): ?>
                    <tr>
                        <td><?php echo $item['norujukan']; ?></td>
                        <td><?php echo $item['trksurat']; ?></td>
                        <td><?php echo $item['tajuk']; ?></td>
                        <td><?php echo $item['jabatan']; ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            </div>

            
            <nav aria-label="Page navigation example">
            <ul class="pagination">
                <?php if ($pagePrevious > 0): ?>
                    <li class="page-item"><a class="page-link" href="?page=<?php echo $pagePrevious; ?>">Previous</a></li>
                <?php endif; ?>
                
                <?php if ($pages > 1): ?>
                    <li class="page-item"><a class="page-link" href="?page=<?php echo $pageNext; ?>">Next</a></li>
                <?php endif; ?>
            </ul>
            </nav>
            
        </div>
    </div>

</div>
</main>
<!-- Footer -->
<?php require('footer.html.php'); ?>