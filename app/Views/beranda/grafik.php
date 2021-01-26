<div class="container">
    <!-- Stack the columns on mobile by making one full-width and the other half-width -->
    <div class="row">
        <div class="col-md-8">
            <div class="card mt-3">
                <div class="card-body">
                    <canvas id="myChart" width="100%"></canvas>
                </div>
            </div>
        </div>
        <div class="col-6 col-md-3">
            <div class="card mt-3">
                <div class="card-body">
                    <h5 class="card-title">Detail Tugas</h5>
                    <p class="card-text">Sistem eVote ini dibuat untuk memenuhi tugas mata kuliah
                        Pemrograman Website
                        dengan dosen pengampu Alena Uperiati, S.T., M.Cs
                    </p>

                </div>
            </div>
        </div>
    </div>
</div>


<script>
var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'pie',
    data: {
        labels: ['Rijal', 'Ayu', 'Hayu', 'Rara', 'Maya'],
        datasets: [{
            label: 'Jumlah Suara',
            data: [<?= $rijal; ?>, <?= $ayu; ?>, <?= $hayu; ?>, <?= $rara; ?>, <?= $maya; ?>],
            backgroundColor: [
                'rgba(203, 123, 115)',
                'rgba(195, 203, 115)',
                'rgba(115, 203, 115)',
                'rgba(115, 203, 187)',
                'rgba(115, 134, 203)',
                'rgba(174, 115, 203)'
            ]
        }]
    },

});
</script>