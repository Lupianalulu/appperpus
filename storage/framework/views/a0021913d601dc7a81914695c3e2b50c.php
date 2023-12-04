

<?php $__env->startSection('content'); ?>
        <h1 class="mb-0">Tambah Buku</h1>
    <hr/>
    <div class="row mb-3">
        <div class="col">
          <input type="text" name="nama" class="form-control" placeholder="Nama Buku" >
        </div>
        <div class="col">
          <input type="text" name="penulis" class="form-control" placeholder="Penulis" >
        </div>
      </div>
      <div class="row mb-3">
        <div class="col">
          <input type="text" name="tahun" class="form-control" placeholder="Tahun" >
        </div>
        <div class="col">
          <textarea class="form-control" name="deskripsi" placeholder="Deskripsi"></textarea>
        </div>
      </div>
      <div class="row">
        <div class="d-grid">
            <button class="btn btn-primary">Submit</button>
        </div>

      </div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\crud\perpustakaan\resources\views/page/buku/create.blade.php ENDPATH**/ ?>