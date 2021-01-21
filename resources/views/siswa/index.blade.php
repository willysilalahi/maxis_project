@extends('templates.main')
@section('title', 'Siswa')
@section('header', 'Data Siswa')
@section('content')
    <a href="#" class="btn btn-info my-3" id="showModalAddSiswa">Tambah
        Siswa</a>
    <table class="display" style="width:100%" id="dataSiswa">
        <thead class="thead-dark">
            <tr>
                <th>No</th>
                <th>Nama Lengkap</th>
                <th>Jenis Kelamin</th>
                <th>Agama</th>
                <th>Alamat</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($siswa as $s => $i)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $i->nama_depan }} {{ $i->nama_belakang }}</td>
                    <td>{{ $i->jenis_kelamin }}</td>
                    <td>{{ $i->agama }}</td>
                    <td>{{ $i->alamat }}</td>
                    <td>
                        <a href="#" data-id="{{ $i->id }}" class="btn btn-sm btn-success showModalEditSiswa">Edit</a>
                        <a href="#" data-id="{{ $i->id }}" class="btn btn-sm btn-danger btnDeleteSiswa">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>



@endsection
@section('addlist')
    <!-- Modal -->
    <div class="modal fade" id="modalAddSiswa" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Siswa</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="javascript:void(0)" id="formAddSiswa">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Nama Depan</label>
                                    <input type="text" class="form-control" name="nama_depan">
                                    <small class="form-text text-danger" id="nama_depanError"></small>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Nama Belakang</label>
                                    <input type="text" class="form-control" name="nama_belakang">
                                    <small class="form-text text-danger" id="nama_belakangError"></small>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Jenis Kelamin</label>
                                    <select name="jenis_kelamin" id="" class="form-control">
                                        <option value="#" selected disabled>--Pilih Jenis Kelamin--</option>
                                        <option value="Laki-laki">Laki-laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                    <small class="form-text text-danger" id="jenis_kelaminError"></small>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Agama</label>
                                    <select name="agama" id="" class="form-control">
                                        <option value="#" selected disabled>--Pilih Agama--</option>
                                        <option value="Islam">Islam</option>
                                        <option value="Kristen">Kristen</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Budha">Budha</option>
                                        <option value="Konghucu">Konghucu</option>
                                    </select>
                                    <small class="form-text text-danger" id="agamaError"></small>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Alamat</label>
                                    <textarea name="alamat" cols="30" rows="5" class="form-control"></textarea>
                                    <small class="form-text text-danger" id="alamatError"></small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-info" id="btnAddSiswa">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalEditSiswa" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Siswa</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="javascript:void(0)" id="formEditSiswa">
                    @csrf
                    <div class="modal-body">

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-info" id="btnUpdateSiswa">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $.fn.dataTable.Buttons.defaults.dom.button.className = 'btn';
        $.fn.dataTable.ext.classes.sPageButton = 'btn btn-sm btn-primary ml-1';

        $(document).ready(function() {
            $('#dataSiswa').DataTable({
                dom: 'Bfrtip',
                buttons: [{
                        extend: 'excelHtml5',
                        className: 'btn-primary',
                        exportOptions: {
                            columns: [0, 1, 2, 3, 4]
                        }
                    },
                    {
                        extend: 'pdfHtml5',
                        className: 'btn-primary',
                        exportOptions: {
                            columns: [0, 1, 2, 3, 4]
                        }
                    },
                    {
                        extend: 'colvis',
                        className: 'btn-primary'
                    }
                ]
            });
        });


        $('#showModalAddSiswa').on('click', function() {
            $('#modalAddSiswa').modal('show');
        });

        $('#btnAddSiswa').on('click', function() {
            let formData = $('#formAddSiswa').serialize();

            $('#nama_depanError').addClass('d-none');
            $('#nama_belakangError').addClass('d-none');
            $('#jenis_kelaminError').addClass('d-none');
            $('#agamaError').addClass('d-none');
            $('#alamatError').addClass('d-none');



            $.ajax({
                url: "siswa",
                method: 'POST',
                data: formData,
                success: function(data) {
                    swal("Sukses", "Data siswa berhasil ditambahkan!", "success");
                    setTimeout(function() {
                        window.location.assign('siswa');
                    }, 1500);
                },
                error: function(data) {
                    var errors = data.responseJSON;
                    if ($.isEmptyObject(errors) == false) {
                        $.each(errors.errors, function(key, value) {
                            var ErrorId = '#' + key + 'Error';
                            $(ErrorId).removeClass('d-none');
                            $(ErrorId).text(value)
                        })
                    }
                }
            })
        });


        $('.showModalEditSiswa').on('click', function() {
            let id = $(this).data('id');


            $.ajax({
                url: `siswa/${id}/edit`,
                method: 'GET',
                success: function(data) {
                    $('#modalEditSiswa').find('.modal-body').html(data)
                    $('#modalEditSiswa').modal('show');
                },
                error: function(error) {
                    alert('Terjadi kesalahan!')
                }
            })

        });


        $('#btnUpdateSiswa').on('click', function() {
            let id = $('#modalEditSiswa').find('#idSiswa').val();
            let formData = $('#formEditSiswa').serialize();

            $.ajax({
                url: `siswa/${id}`,
                method: 'PATCH',
                data: formData,
                success: function(data) {
                    $('#modalEditSiswa').modal('hide');
                    swal("Sukses", "Data siswa berhasil diedit!", "success");
                    setTimeout(function() {
                        window.location.assign('siswa');
                    }, 1500);
                },
                error: function(data) {
                    var errors = data.responseJSON;
                    if ($.isEmptyObject(errors) == false) {
                        $.each(errors.errors, function(key, value) {
                            var ErrorId = '#' + key + 'Err';
                            $(ErrorId).removeClass('d-none');
                            $(ErrorId).text(value)
                        })
                    }
                }
            })
        });


        $('.btnDeleteSiswa').on('click', function() {
            swal({
                    title: "Apakah anda yakin?",
                    text: "Setelah dihapus, anda tidak akan dapat mengembalikan siswa ini!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        let id = $(this).data('id');
                        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');


                        $.ajax({
                            url: `siswa/${id}`,
                            method: 'DELETE',
                            data: {
                                _token: CSRF_TOKEN
                            },
                            success: function(data) {
                                swal("Sukses", "Data siswa berhasil dihapus!", "success");
                                // iziToast.success({
                                //     title: 'Sukses',
                                //     message: 'Data tag berhasil dihapus!',
                                // });

                                setTimeout(function() {
                                    window.location.assign('siswa');
                                }, 1500);
                            },
                            error: function(error) {
                                alert('Terjadi kesalahan');
                            }
                        })
                    } else {
                        swal("Siswa batal dihapus.");
                    }
                });
        });

    </script>
@endsection
