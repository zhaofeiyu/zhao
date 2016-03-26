<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>留言</title>
</head>
<body>
	<form action="/save" method="get">
		<table>
			<input type="hidden" name='hid' value="<?php echo $arr[0]['m_id']?>">
			<tr>
				<td>留言内容</td>
				<td><textarea name="content" id="content" >
					<?php echo $arr[0]['m_content']?>
				</textarea></td>
			</tr>
			<tr>
				<td><input type="submit" value="提交"></td>
			</tr>
		</table>
	</form>
	
</body>
</html>