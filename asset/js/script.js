$(function () {

	$('.tambahMenuModal').on('click', function () {
		$('#menuModalLabel').html('Tambah Menu');
	});

	$('.ubahMenuModal').on('click', function () {
		$('#menuModalLabel').html('Ubah Menu');

		const id = $(this).data('id');

		$.ajax({
			url: 'http://localhost/Mikelas/menu/getmenu',
			data: {
				id: id
			},
			method: 'post',
			dataType: 'json',
			success: function (data) {
				console.log(data);
				$('#menu').val(data.menu);
			}
		});
	});

});
