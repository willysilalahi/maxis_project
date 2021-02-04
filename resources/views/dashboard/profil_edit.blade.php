<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="">Nama</label>
            <input type="text" class="form-control" name="name" value="{{$user->name}}">
            <small class="form-text text-danger" id="namaError"></small>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="">Email</label>
            <input type="text" class="form-control" name="email" value="{{$user->email}}">
            <small class="form-text text-danger" id="emailError"></small>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="">Photo</label> <br>
            <img src="{{asset('uploads/users/' . auth()->user()->photo)}}" class="img-thumbnail" width="150">
            <input type="file" class="mt-2" name="photo">
            <small class="form-text text-danger" id="emailError"></small>
        </div>
    </div>
</div>