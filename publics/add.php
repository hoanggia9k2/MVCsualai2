<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm nhân viên</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="publics/fontend/css/add.css">
</head>
<body>
<div class="container">
	<div id='form' class="p-3 my-3 col-md-7  mx-auto">
		<h3 id="form__head" class="pt-1 ">Thêm nhân viên</h3>
		<form method="post" id="newform" class="needs-validation was-validated">
			<div class="form-row pl-1">
				<div class="form-group col-md-6">
					<label for="username"> Username </label>
					<input type="text" class="form-control" id="username" name="username" required />
					<p id="p1"></p>
				</div>
					<div class="form-group col-md-6">
					<label for="password"> Password </label>
					<input type="password" class="form-control" name="password" id="password" required />
					<p id="p2"></p>
				</div>
			</div>
			<div class="form-group pl-1">
				<label for="fullname"> Họ và tên </label>
				<input type="text" class="form-control" id="fullname" name="fullname" required />
				<p id="p3"></p>
			</div>
			<div class="mb-1 ml-1">
				<label class="pr-3"> Giới tính </label>
				<div class="custom-control custom-radio custom-control-inline">
					<input type="radio" id="nam" name="gioitinh" class="custom-control-input" value="Nam" required>
					<label class="custom-control-label " for="nam"> Nam</label>
				</div>
				<div class="custom-control custom-radio custom-control-inline">
					<input type="radio" id="nu" name="gioitinh" class="custom-control-input" value="Nữ" required>
					<label class="custom-control-label" for="nu"> Nữ </label>
				</div>
				<p id="p4"></p>
				<div class="form-group">
						<label for="birthday">Ngày sinh</label>
						<input type="date" name="ngaysinh" class="form-control mb-2 mr-sm-2" id="birthday" required>
				</div>
			</div>
			<div class="form-group pl-1">
				<label for="address"> Địa chỉ </label>
				<input type="text" class="form-control" id="address" name="diachi" required />
				<p id="p5"></p>
			</div>
			<div class="form-row pl-1">
				<div class="form-group col-md-6">
					<label for="email"> Email </label>
					<input type="email" class="form-control" name="email" id="email" required />
					<p id="p6"></p>
				</div>
				<div class="form-group col-md-6">
					<label for="phonenumber"> Số điện thoại </label>
					<input type="text-number" class="form-control" name="sdt" id="phonenumber" required />
					<p id="p7"></p>
				</div>
			</div>
			<button type="submit" id="add" name="add" class=" mt-1 d-block w-100 btn btn-primary" value="Thành công"> Thêm </button>
			<center><a href="/" type="sumbit" class="btn mt-2">Cancel</a></center>
		</form>
	</div>
</div>
</body>
</html>