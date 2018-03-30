<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>发送邮件</title>
</head>
<body>
	<form name="emailform" method="post" action="/contact">
      <div>
      	<p>name</p>
      	<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
      	<input type="text" name="username" size="15">
      	<p>email address</p>
      	<input type="text" name="address" size="15">
      	<p>phone number</p>
      	<input type="text" name="phone" size="15">
      	<p>message</p>
      	<input type="text" name="msg" size="15">
      	<br>
      	<input type="submit" name="提交">
      </div>
	</form>

</body>
</html>