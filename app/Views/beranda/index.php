<?= $this->extend('layout/index'); ?>

<?= $this->section('content'); ?>
<div class="container mt-3">

    <!-- Button trigger modal -->
    <div class="text-center">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Ikuti Pemilihan
        </button>
    </div>

    <!-- sesion pemberitahuan -->
    <?php if (session()->getFlashdata('pesan')) : ?>
    <div class="alert alert-success" role="alert">
        <?= session()->getFlashdata('pesan'); ?>
    </div>
    <?php endif; ?>
    <?php if (session()->getFlashdata('eror')) : ?>
    <div class="alert alert-danger" role="alert">
        <?= session()->getFlashdata('eror'); ?>
    </div>
    <?php endif; ?>

    <?= $this->include('beranda/grafik'); ?>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Pemilihan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?= $this->include('beranda/form'); ?>
                </div>

            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>