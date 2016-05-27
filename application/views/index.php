<html>
<head>
	<title>test</title>
</head>
<body>
<form action="<?php echo site_url('/camp/test2');?>" method="post">
	เลขที่ชอบ <input type="text" name='num' value="">
	<input type="submit" value="ยืนยัน">
</form><br>

<a href="<?php echo site_url('/camp/test/1'); ?>">ส่งค่า</a>

<a href="<?php echo base_url()."template/test.txt"; ?>">ทดสอบดึงค่านอก MVC</a>
</body>
</html>