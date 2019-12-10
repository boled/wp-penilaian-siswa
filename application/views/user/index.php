<!-- MAIN CONTENT-->
<div class="main-content">
     <div class="section__content section__content--p30">
          <div class="container-fluid">
               <?= $this->session->flashdata('pesan'); ?>
               <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

               <div class="card mb-3" style="max-width: 540px;">
                    <div class="row no-gutters">
                         <div class="col-md-4">
                              <img src="<?= base_url('assets/img/profile/') . $user['gambar']; ?>" class="card-img" alt="...">
                         </div>

                         <div class="col-md-8">
                              <div class="card-body">
                                   <h4 class="card-title"><?= ucwords($user['nama']); ?></h4>
                                   <p class="card-text"><?= $user['email']; ?></p>
                                   <p class="card-text"><small class="text-muted">Jadi member sejak: <br><b><?= date('d F Y', $user['tanggal_buat']); ?></b></small></p>
                                   <a href="<?= base_url('user/ubahprofile'); ?>" class="btn btn-primary btn-sm"><i class="fas fa-user-edit"></i> Ubah Profil</a>
                              </div>
                         </div>
                    </div>
               </div>