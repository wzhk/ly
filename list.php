<?php 
	header("content-type:text/html;charset=utf8");
	$pdo = new PDO("mysql:host=127.0.0.1;dbname=zice","root","root");
	$data = $pdo -> query("select * from login_user")->fetchAll(PDO::FETCH_ASSOC);

 ?>
<div align='center'>
	<h1>用户列表</h1>
	<a href="./user_add.html">用户添加</a>
	<table border='1'>
		<tr>
			<td>编号</td>
			<td>用户名</td>
			<td>密码</td>
			<td>操作</td>
		</tr>
		<?php foreach ($data as $k => $v) {?>
		<tr>
			<td><?php echo $v['id']; ?></td>
			<td><?php echo $v['name']; ?></td>
			<td><?php echo $v['pwd']; ?></td>
			<td>
				<a href="user_del.php?id=<?php echo $v['id']; ?>">删除</a>
			</td>
		</tr>
		<?php } ?>
	</table>
	<a href="./zj_list.php">中奖名单</a>
	<a href="./jp_list.php">奖名展示</a>
</div>