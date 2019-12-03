// Menu modal
$(function () {

	$('.tambahMenuModal').on('click', function () {
		$('#menuModalLabel').html('Tambah Menu');
	});

	$('.ubahMenuModal').on('click', function () {
		$('#menuModalLabel').html('Ubah Menu');
		$('.modal-body form').attr('action', 'http://localhost/Mikelas/menu/ubahmenu');

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
				$('#id').val(data.id);
				$('#menu').val(data.menu);
			}
		});
	});

});

// Sub Menu modal
$(function () {

	$('.tambahSubMenuModal').on('click', function () {
		$('#subMenuModalLabel').html('Tambah Sub Menu');
	});

	$('.ubahSubMenuModal').on('click', function () {
		$('#subMenuModalLabel').html('Ubah Sub Menu');
		$('.modal-body form').attr('action', 'http://localhost/Mikelas/menu/ubahsubmenu');

		const id = $(this).data('id');

		$.ajax({
			url: 'http://localhost/Mikelas/menu/getsubmenu',
			data: {
				id: id
			},
			method: 'post',
			dataType: 'json',
			success: function (data) {
				console.log(data);
				$('#id').val(data.id);
				$('#sub_menu').val(data.sub_menu);
				$('#url').val(data.url);
				$('#icon').val(data.icon);
			}
		});
	});

});
