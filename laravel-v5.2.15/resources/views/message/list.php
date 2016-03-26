<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Liebiao</title>
</head>
<body>
	<table>
		<tr>
			<td>留言内容</td>
			<td>操作</td>
		</tr>
		<?php foreach($arr as $k=>$v){?>
			<tr>
				<td><?php echo $v['m_content']?></td>
				<td><a href="del?id=<?php echo $v['m_id']?>">删除</a>|| <a href="update?id=<?php echo $v['m_id']?>">修改</a></td>
			</tr>
		<?php }?>
	</table>
</body>
</html>