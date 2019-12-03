// Ubah access
$(function () {
	$('.form-check-input').on('click', function () {
		const menuId = $(this).data('menu');
		const roleId = $(this).data('role');

		$.ajax({
			url: 'http://localhost/Mikelas/admin/changeaccess',
			type: 'post',
			data: {
				menuId: menuId,
				roleId: roleId
			},
			success: function () {
				document.location.href = 'http://localhost/Mikelas/admin/roleaccess/' + roleId;
			}
		});
	});
});

// Role modal
$(function () {

	$('.tambahRoleModal').on('click', function () {
		$('#roleModalLabel').html('Tambah Role');
		$('.modal-body form').attr('action', 'http://localhost/Mikelas/admin/role');
		$('#id').val('');
		$('#role').val('');
	});

	$('.ubahRoleModal').on('click', function () {
		$('#roleModalLabel').html('Ubah Role');
		$('.modal-body form').attr('action', 'http://localhost/Mikelas/admin/ubahrole');

		const id = $(this).data('id');

		$.ajax({
			url: 'http://localhost/Mikelas/admin/getrole',
			data: {
				id: id
			},
			method: 'post',
			dataType: 'json',
			success: function (data) {
				console.log(data);
				$('#id').val(data.id);
				$('#role').val(data.role);
			}
		});
	});

});

// Menu modal
$(function () {

	$('.tambahMenuModal').on('click', function () {
		$('#menuModalLabel').html('Tambah Menu');
		$('.modal-body form').attr('action', 'http://localhost/Mikelas/menu');
		$('#idm').val('');
		$('#menu').val('');
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
				$('#idm').val(data.id);
				$('#menu').val(data.menu);
			}
		});
	});

});

// Sub Menu modal
$(function () {

	$('.tambahSubMenuModal').on('click', function () {
		$('#subMenuModalLabel').html('Tambah Sub Menu');
		$('#idsm').val('');
		$('#sub_menu').val('');
		$('#menu_id').val('');
		$('#menu').val('');
		$('#url').val('');
		$('#icon').val('');
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
				$('#idsm').val(data.id);
				$('#sub_menu').val(data.sub_menu);
				$('#menu_id').val(data.menu_id);
				$('#menu').val(data.menu);
				$('#url').val(data.url);
				$('#icon').val(data.icon);
			}
		});
	});

});
