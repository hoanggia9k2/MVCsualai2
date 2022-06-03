<!DOCTYPE html>
<html>
<head>
	<title>Hiển thị danh sách nhân viên</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootrap/3.3.7/css/bootstrap.css">
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootrap/3.3.7/js/bootstrap.js"></script>
	<link rel="stylesheet" type="text/css" href="publics/fontend/css/list.css">
	<link rel="stylesheet" type="text/css" href="publics/fontend/js/list.js">
</head>
<body>
	<div class="wapper">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12 mt-2">
					<div class="page-header clearfix form-row pl-1">
					<h2 class="pull-left">Danh sách nhân viên</h2>
					<a href="?action=add" class="btn btn-success pull-right ml-2">Thêm nhân viên</a>
				</div>
				<table class='table table-bordered table-striped'>
				<thead>
					<tr>
						<th>STT</th>
						<th>Họ và tên</th>
						<th>Giới tính</th>
						<th>Ngày sinh</th>
						<th>Địa chỉ</th>
						<th>Email</th>
						<th>Số điện thoại</th>
						<th>Ghi chú</th>
					</tr>
	            </thread>
				<?php $i=0;foreach ($rows as $row):
				$i++;?>
				<div>
					<tr>
						<td><?php echo $i ?></td>
						<td><?php echo $row['fullname'] ?></td>
						<td><?php echo $row['gioitinh']?></td>
						<td><?php $date = date_create($row['ngaysinh']); 
						echo date_format($date,"d/m/Y")?></td>
						<td><?php echo $row['diachi']?></td>
						<td><?php echo $row['email']?></td>
						<td><?php echo $row['sdt']?></td>
						<td>
							<a href = "?action=insert&id=<?php echo $row['id'] ?>" title='Xem thông tin' data-toggle='tooltip'><span class='glyphicon glyphicon-eye-open'>Xem</span></a>
							<a href = "?action=update&id=<?php echo $row['id'] ?>" title='Xem thông tin' data-toggle='tooltip'><span class='glyphicon glyphicon-eye-open'>Sửa</span></a>
							<a href = "?action=delete&id=<?php echo $row['id'] ?>" title='Xem thông tin' data-toggle='tooltip'><span class='glyphicon glyphicon-eye-open'>Xoá</span></a>
						</td>
					<tr>
				</div>
				<?php endforeach; ?>
				</table>
			</div>
		</div>
	</div>
</body>
</html>