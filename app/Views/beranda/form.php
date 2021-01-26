<form action="<?= base_url('home/vote'); ?>" method="POST">
    <?= csrf_field(); ?>
    <div class="form-group">
        <label for="nik">NIK</label>
        <input type="text" class="form-control" id="nik" name="nik" autofocus required>
    </div>
    <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" class="form-control" id="nama" name="nama" required>
    </div>

    <div class="form-group">
        <p>Tentukan Pilihan Anda !</p>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="pilihan" id="pilihan1" value="rijal">
            <label class="form-check-label" for="pilihan1">Rijal Elfikri</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="pilihan" id="pilihan2" value="ayu">
            <label class="form-check-label" for="pilihan2">Julita Ayu Salsah Bela</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="pilihan" id="pilihan3" value="hayu">
            <label class="form-check-label" for="pilihan3">Sri Hayu Jihadil Awalia</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="pilihan" id="pilihan4" value="rara">
            <label class="form-check-label" for="pilihan4">Savirha Regyta</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="pilihan" id="pilihan5" value="maya">
            <label class="form-check-label" for="pilihan5">Maya Rozi</label>
        </div>
    </div>

    <button type="submit" class="btn btn-primary">Submit Pilihan</button>
</form>