<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="">Nama</label>
            <input type="hidden" id="idGuru" value="{{ $guru->id }}">
            <input type="text" class="form-control" name="nama" value="{{ $guru->nama }}">
            <small class="form-text text-danger" id="namaErr"></small>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="">Email</label>
            <input type="text" class="form-control" name="email" value="{{ $guru->email }}">
            <small class="form-text text-danger" id="emailErr"></small>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="">Tempat Lahir</label>
            <input type="text" class="form-control" name="tempat_lahir" value="{{ $guru->tempat_lahir }}">
            <small class="form-text text-danger" id="tempat_lahirErr"></small>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="">Tanggal Lahir</label>
            <input type="date" class="form-control" name="tanggal_lahir" value="{{ $guru->tanggal_lahir }}">
            <small class="form-text text-danger" id="tanggal_lahirErr"></small>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="">Jenis Kelamin</label>
            <select name="jk" id="" class="form-control">
                <option value="{{ $guru->jk }}">{{ $guru->jk }}</option>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
            <small class="form-text text-danger" id="jkErr"></small>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="">Agama</label>
            <select name="agama" id="" class="form-control">
                <option value="{{ $guru->agama }}">{{ $guru->agama }}</option>
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
            <label for="">Photo</label><br>
            <img src="{{ asset('uploads/guru/' . $guru->photo) }}" class="img-fluid img-thumbnail" width="80">
            <input type="file" name="photo"> <br>
            <small class="form-text text-danger" id="photoErr"></small>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="">Handphone</label>
            <input type="text" class="form-control" name="handphone" value="{{ $guru->handphone }}">
            <small class="form-text text-danger" id="handphoneErr"></small>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="">Alamat</label>
            <textarea name="alamat" cols="30" rows="5" class="form-control">{{ $guru->alamat }}</textarea>
            <small class="form-text text-danger" id="alamatErr"></small>
        </div>
    </div>
</div>
