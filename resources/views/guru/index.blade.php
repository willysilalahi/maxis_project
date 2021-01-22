@extends('templates.main')
@section('title', 'Guru')
@section('header', 'Data Guru')
@section('content')
    <a href="#" class="btn btn-info my-3" id="showModalAddGuru">Tambah
        Guru</a>
    <table class="display" style="width:100%" id="dataSiswa">
        <thead class="thead-dark">
            <tr>
                <th>No</th>
                <th>Photo</th>
                <th>Nama Lengkap</th>
                <th>Jenis Kelamin</th>
                <th>Agama</th>
                <th>Alamat</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($guru as $s => $i)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td><img src="{{ asset('uploads/guru/' . $i->photo) }}" class="img-fluid img-thumbnail" width="80"></td>
                    <td>{{ $i->nama }}</td>
                    <td>{{ $i->jk }}</td>
                    <td>{{ $i->agama }}</td>
                    <td>{{ $i->alamat }}</td>
                    <td>
                        <a href="#" data-id="{{ $i->id }}" class="btn btn-sm btn-success showModalEditGuru">Edit</a>
                        <a href="#" data-id="{{ $i->id }}" class="btn btn-sm btn-danger btnDeleteGuru">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>



@endsection
@section('addlist')
    <!-- Modal -->
    <div class="modal fade" id="modalAddGuru" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Guru</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="javascript:void(0)" id="formAddGuru">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Nama</label>
                                    <input type="text" class="form-control" name="nama">
                                    <small class="form-text text-danger" id="namaError"></small>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input type="text" class="form-control" name="email">
                                    <small class="form-text text-danger" id="emailError"></small>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Tempat Lahir</label>
                                    <input type="text" class="form-control" name="tempat_lahir">
                                    <small class="form-text text-danger" id="tempat_lahirError"></small>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Tanggal Lahir</label>
                                    <input type="date" class="form-control" name="tanggal_lahir">
                                    <small class="form-text text-danger" id="tanggal_lahirError"></small>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Jenis Kelamin</label>
                                    <select name="jk" id="" class="form-control">
                                        <option value="#" selected disabled>--Pilih Jenis Kelamin--</option>
                                        <option value="Laki-laki">Laki-laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                    <small class="form-text text-danger" id="jkError"></small>
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
                                    <label for="">Photo</label><br>
                                    <input type="file" name="photo"> <br>
                                    <small class="form-text text-danger" id="photoError"></small>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Handphone</label>
                                    <input type="text" class="form-control" name="handphone">
                                    <small class="form-text text-danger" id="handphoneError"></small>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Alamat</label>
                                    <textarea name="alamat" cols="30" rows="5" class="form-control"></textarea>
                                    <small class="form-text text-danger" id="alamatError"></small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-info" id="btnAddGuru">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalEditGuru" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Guru</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="javascript:void(0)" id="formEditGuru">
                    @csrf
                    <div class="modal-body">

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-info" id="btnUpdateGuru">Simpan</button>
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
            $('#dataGuru').DataTable({
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


        $('#showModalAddGuru').on('click', function() {
            $('#modalAddGuru').modal('show');
        });

        $('#btnAddGuru').on('click', function() {
            let formData = $('#formAddGuru').serialize();

            $('#namaError').addClass('d-none');
            $('#emailError').addClass('d-none');
            $('#tempat_lahirError').addClass('d-none');
            $('#tanggal_lahirError').addClass('d-none');
            $('#jkError').addClass('d-none');
            $('#agamaError').addClass('d-none');
            $('#alamatError').addClass('d-none');



            $.ajax({
                url: "guru",
                method: 'POST',
                data: formData,
                success: function(data) {
                    swal("Sukses", "Data guru berhasil ditambahkan!", "success");
                    setTimeout(function() {
                        window.location.assign('guru');
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


        $('.showModalEditGuru').on('click', function() {
            let id = $(this).data('id');


            $.ajax({
                url: `guru/${id}/edit`,
                method: 'GET',
                success: function(data) {
                    $('#modalEditGuru').find('.modal-body').html(data)
                    $('#modalEditGuru').modal('show');
                },
                error: function(error) {
                    alert('Terjadi kesalahan!')
                }
            })

        });


        $('#btnUpdateGuru').on('click', function() {
            let id = $('#modalEditGuru').find('#idGuru').val();
            let formData = $('#formEditGuru').serialize();

            $.ajax({
                url: `guru/${id}`,
                method: 'PATCH',
                data: formData,
                success: function(data) {
                    $('#modalEditGuru').modal('hide');
                    swal("Sukses", "Data siswa berhasil diedit!", "success");
                    setTimeout(function() {
                        window.location.assign('guru');
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


        $('.btnDeleteGuru').on('click', function() {
            swal({
                    title: "Apakah anda yakin?",
                    text: "Setelah dihapus, anda tidak akan dapat mengembalikan siswa  ini!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        let id = $(this).data('id');
                        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');


                        $.ajax({
                            url: `guru/${id}`,
                            method: 'DELETE',
                            data: {
                                _token: CSRF_TOKEN
                            },
                            success: function(data) {
                                swal("Sukses", "Data guru berhasil dihapus!", "success");
                                // iziToast.success({
                                //     title: 'Sukses',
                                //     message: 'Data tag berhasil dihapus!',
                                // });

                                setTimeout(function() {
                                    window.location.assign('guru');
                                }, 1500);
                            },
                            error: function(error) {
                                alert('Terjadi kesalahan');
                            }
                        })
                    } else {
                        swal("Guru batal dihapus.");
                    }
                });
        });

    </script>
@endsection
