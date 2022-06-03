<!DOCTYPE html>
<html lang="en">
<head>
  <title>Thông tin chi tiết</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
 
<div class="container">
	<h2>Thông tin chi tiết</h2>
	<ul class="list-group">
	<a class="list-group-item list-group-item-action">id: <?php echo $rows['id']; ?></a>
	<a class="list-group-item list-group-item-action">Họ và tên: <?php echo $rows['fullname']; ?></a>
	<a class="list-group-item list-group-item-action">Giới tính: <?php echo $rows['gioitinh']; ?></a>
	<a class="list-group-item list-group-item-action">Ngày sinh: <?php $date = date_create($row['ngaysinh']); echo date_format($date,"d/m/Y")?></a>
	<a class="list-group-item list-group-item-action">Địa chỉ: <?php echo $rows['diachi']; ?></a>
	<a class="list-group-item list-group-item-action">Email: <?php echo $rows['email']; ?></a>
	<a class="list-group-item list-group-item-action">Số điện thoại: <?php echo $rows['sdt']; ?></a>
	</ul>
	<a href="/" type="sumbit" class="mt-2 mt-1 btn btn-primary">Cancel</a>
</div>
 
</body>
</html>