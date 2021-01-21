<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="">Nama Depan</label>
            <input type="hidden" id="idSiswa" value="{{ $siswa->id }}">
            <input type="text" class="form-control" name="nama_depan" value="{{ $siswa->nama_depan }}">
            <small class="form-text text-danger" id="nama_depanErr"></small>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="">Nama Belakang</label>
            <input type="text" class="form-control" name="nama_belakang" value="{{ $siswa->nama_belakang }}">
            <small class="form-text text-danger" id="nama_belakangErr"></small>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="">Jenis Kelamin</label>
            <select name="jenis_kelamin" id="" class="form-control">
                <option value="{{ $siswa->jenis_kelamin }}">{{ $siswa->jenis_kelamin }}</option>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
            <small class="form-text text-danger" id="jenis_kelaminErr"></small>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="">Agama</label>
            <select name="agama" id="" class="form-control">
                <option value="{{ $siswa->agama }}">{{ $siswa->agama }}</option>
                <option value="Islam">Islam</option>
                <option value="Kristen">Kristen</option>
                <option value="Hindu">Hindu</option>
                <option value="Budha">Budha</option>
                <option value="Konghucu">Konghucu</option>
            </select>
            <small class="form-text text-danger" id="agamaErr"></small>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <label for="">Alamat</label>
            <textarea name="alamat" cols="30" rows="5" class="form-control">{{ $siswa->alamat }}</textarea>
            <small class="form-text text-danger" id="alamatErr"></small>
        </div>
    </div>
</div>
