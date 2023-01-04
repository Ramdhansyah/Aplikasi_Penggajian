
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
<h1 class="h3 mb-0 text-gray-800"><?php echo $title ?></h1>

</div>

<div class="card" style="width: 50%">
    
     <div class="card-body">
         <form method="POST" action="<?php echo base_url('pegawai/gantiPassword/gantiPasswordAksi') ?>">
        
         <div class="form-groub">
             <label>Password Baru</label>
             <input type="password" name="passBaru" class="form-control">
             <?php echo form_error('passBaru','<div class="text-small text-danger"></div>') ?> 
         </div>

         <div class="form-groub">
             <label>Ulangi Password Baru</label>
             <input type="password" name="ulangPass" class="form-control">
             <?php echo form_error('ulangPass','<div class="text-small text-danger"></div>') ?> 
         </div>
        
        <button type="submit" class="btn btn-success mt-3">Simpan</button>

        </form>
     </div>
</div>

</div>



