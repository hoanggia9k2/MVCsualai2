<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
	<title>Sửa thông tin</title>
	<style type="text/css">
		button {text-decoration: none;}
	</style>
</head>
<body>
<form method="POST">
	<div class="form-group">
		<div class="form-group col-md-6">
			<label for="fullname">Họ và tên</label>
			<input type="text" class="form-control" name="fullname" id="fullname" value="<?php echo $rows['fullname']; ?>" required>
		</div>
		<div class="mb-1 ml-3" required>
			<label> Giới tính </label>
			<div class="custom-control custom-radio custom-control-inline">
				<input type="radio" id="nam" name="gioitinh" class="custom-control-input" required>
				<label class="custom-control-label" for="nam" value="Nam"> Nam </label>
			</div>
			<div class="custom-control custom-radio custom-control-inline">
				<input type="radio" id="nu" name="gioitinh" class="custom-control-input" value="Nữ" required>
				<label class="custom-control-label" for="nu" value="Nữ"> Nữ </label>
			</div>
		</div>
		<div class="form-group col-md-6">
			<label for="birthday">Ngày sinh</label>
			<input type="date" name="ngaysinh" class="form-control" id="birthday" required>
		</div>
		<div class="form-group col-md-6">
			<label for="diachi">Địa chỉ</label>
			<input type="text" class="form-control" name="diachi" id="diachi" value="<?php echo $rows['diachi']; ?>" required>
		</div>
		<div class="form-group col-md-6">
			<label for="email">Email</label>
			<input type="email" class="form-control" name="email" id="email" value="<?php echo $rows['email']; ?>"required>
		</div>
		<div class="form-group col-md-6">
			<label for="sdt">Số điện thoại</label>
			<input type="text" class="form-control" name="sdt" id="sdt" value="<?php echo $rows['sdt']; ?>"required>
		</div>
	</div>
	<div class="form-group row col-sm-9 ml-1">
		<button type="submit" name="update" class="btn btn-primary" value="<?php echo $rows['id'];?>">Sửa</button>
		<a href="?controller=tv" type="sumbit" class="btn ml-2">Cancel</a>
	</div>
</form>
</body>
</html>