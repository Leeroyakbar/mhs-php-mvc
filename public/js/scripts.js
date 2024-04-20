$(function () {
    $('.addLabel').on('click', function (e) {
        $('#formLabel').html('Tambah Mahasiswa')
        $('.modal-footer button[type=submit]').html('Add Data');
    })

    $('.ubahData').on('click', function (e) {
        $('#formLabel').html('Ubah Data Mahasiswa')
        $('.modal-footer button[type=submit]').html('Change Data');
        $('.modal-body form').attr('action', 'http://localhost/phpmvc/public/mahasiswa/update');
        const id = $(this).data('id');

        $.ajax({
            url: 'http://localhost/phpmvc/public/mahasiswa/getUbah',
            data: { id: id },
            method: 'post',
            dataType: 'json',
            success: function (data) {
                $('#id').val(data.id)
                $('#nama').val(data.nama)
                $('#nim').val(data.nim)
                $('#prodi').val(data.prodi)
                $('#email').val(data.email)
            }
        })

    })

})





function confirmDelete(e, url){
    e.preventDefault();

    Swal.fire({
        title: "Are you sure?",
        text: "You won't be able to revert this!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, delete it!"
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = url
        }
    });
}