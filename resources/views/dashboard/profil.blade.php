@extends('templates.main')
@section('title', 'Home - Maxis')
@section('header', 'Profil')
@section('content')
    <div class="row">
        <div class="card" style="width: 18rem;">
            <img src="{{asset('uploads/users/' . auth()->user()->photo)}}" class="img-thumbnail ml-4 mt-4" width="200">
            <div class="card-body">
              <h5 class="card-title">{{auth()->user()->name}}</h5>
              <p class="card-text">{{auth()->user()->email}}</p>
              <a href="javascript:void(0)" data-id="{{auth()->user()->id}}" class="btn btn-primary" id="showModalEditUser">Edit Profil</a>
            </div>
          </div>
    </div>

@endsection

@section('addlist')
<div class="modal fade" id="modalEditUser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Guru</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="javascript:void(0)" id="formEditUser" enctype="multipart/form-data">
                @csrf
                @method('patch')
                <div class="modal-body">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-info" id="btnUpdateUser">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('script')
    <script>
         $('#showModalEditUser').on('click', function() {
            let id = $(this).data('id');


            $.ajax({
                url: `profil/${id}`,
                method: 'GET',
                success: function(data) {
                    $('#modalEditUser').find('.modal-body').html(data)
                    $('#modalEditUser').modal('show');
                },
                error: function(error) {
                    alert('Terjadi kesalahan!')
                }
            })

        });
    </script>
@endsection
