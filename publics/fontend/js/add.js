<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script>
$(document).ready(function(){
	$("#add").click(function(){
		var user = $("#username").val();
		var pass = $("#password").val();
		var name = $("#fullname").val();
		var gioitinh1 = $("#nam").val();
		var gioitinh2 = $("#nu").val();
		var diachi = $("#address").val();
		var email = $("#email").val();
		var sdt = $("#phonenumber").val();
			if(user.length == "")
			{
				$("#p1").text("Hãy nhập tài khoản của bạn");
				$("#username").focus();
				return false;
			}

			else if(pass.length == "")
			{
				$("#p2").text("Hãy nhập mật khẩu của bạn");
				$("#password").focus();
				return false;
			}

			else if(name.length == "")
			{
				$("#p3").text("Hãy nhập tên của bạn");
				$("#fullname").focus();
				return false;
			}

			else if(gioitinh1.length == "" && gioitinh2.length == "")
			{
				$("#p4").text("Hãy chọn giới tính của bạn");
				$("#nam").focus() && $("#nu").focus();
				return false;
			}

			else if(diachi.length == "")
			{
				$("#p5").text("Hãy nhập địa chỉ của bạn");
				$("#address").focus();
				return false;
			}

			else if(email.length == "" && email.length === false)
			{
				$("#p6").text("Hãy nhập email của bạn");
				$("#email").focus();
				return false;
			}
			else if(sdt.length == "")
			{
				$("p7").text("Hãy nhập số điện thoại của bạn");
				$("#phonenumber").focus();
				return false;
			}
			else{
				var con = confirm("Bạn chắc chắn chưa?");
				if(con == true)
				{
					alert("Bạn đã thêm thành công");
					return true;
				}
				else{
					return false;
				}
			}
		});
	});
</script>