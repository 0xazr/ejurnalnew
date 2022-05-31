
<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
              <div id="breadcrumb">
                  <a href="<?= base_url(); ?>/">Home</a> &gt;
                  <a href="<?= base_url(); ?>/" class="current">Information Technology Journal</a>
               </div>
              <h2><?= $contentTitle; ?></h2>
              <div id="content">
                <div>Jurnal ini bertujuan mempublikasikan hasil penelitian di bidang Teknologi Informasi</div>
              </div>
<?= $this->endSection(); ?>