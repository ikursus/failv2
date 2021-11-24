<!-- Button trigger modal -->
<button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#modal-surat-masuk">
  Tambah Surat Masuk
</button>

<!-- Modal -->
<div class="modal fade" id="modal-surat-masuk" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
        
        <form method="POST" action="">

    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Surat Masuk</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

<div class="mb-3">
    <select name="data" class="form-control">
        <option value="">--Sila Pilih--</option>
        <?php foreach ($resultJabatan as $data => $value): ?>
            <option value="<?php echo $value['knama']; ?>"><?php echo $value['knama']; ?></option>
        <?php endforeach; ?>
    </select>
</div>

<div class="row">
    <div class="col-12">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">NO. RUJUKAN SURAT</label>
            <input name="norujukan" type="text" class="form-control" required>
        </div>
    </div>
</div>
<div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">TAJUK</label>
      <textarea name="tajuk" class="form-control"></textarea>
</div>
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">TARIKH SURAT</label>
    <input type="date" name="trksurat" class="form-control" required>
</div>

<div class="row">
    <div class="col-12">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama Fail</label>
            <input name="namafail" type="text" class="form-control" required>
            
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Pengirim/Agensi</label>
            <input name="from" type="text" class="form-control">
            
        </div>
    </div>
</div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
    </div>

    <input type="hidden" value="yes" name="suratmasuk">
    
</form>


  </div>
</div>