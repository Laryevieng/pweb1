<form id="alumniForm" class="p-3">
    <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" class="form-control" id="nama" name="nama" required>
    </div>
    <div class="mb-3">
        <label for="tahunKelulusan" class="form-label">Tahun Kelulusan</label>
        <input type="number" class="form-control" id="tahunKelulusan" name="tahunKelulusan" required>
    </div>
    <div class="mb-3">
        <label for="statusAktif" class="form-label">Status Aktif</label>
        <select class="form-select" id="statusAktif" name="statusAktif">
            <option value="true">Aktif</option>
            <option value="false">Tidak Aktif</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="kategoriPekerjaan" class="form-label">Kategori Pekerjaan</label>
        <select class="form-select" id="kategoriPekerjaan" name="kategoriPekerjaan">
            <option value="Teknologi">Teknologi</option>
            <option value="Kesehatan">Kesehatan</option>
            <option value="Bisnis">Bisnis</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
<script>
    $('#alumniForm').on('submit', function (e) {
        e.preventDefault();

        const data = {
            nama: $('#nama').val(),
            tahunKelulusan: $('#tahunKelulusan').val(),
            statusAktif: $('#statusAktif').val(),
            kategoriPekerjaan: $('#kategoriPekerjaan').val(),
        };

        $.post('alumni_data.php', data, function (response) {
            alert(response);
            $('#alumniForm')[0].reset();
        });
    });
</script>