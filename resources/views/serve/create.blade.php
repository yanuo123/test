<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h3>客户服务基本信息</h3>
	<form action="{{url('serve/create_do')}}" method="post">
		@csrf
		<table border="1" bgcolor="orange">
			<tr>
				<td>服务类型:</td>
				<td colspan="2">
				<select name="serve_type">
				<option value="上门服务">上门服务
				</option>
				<option value="电话服务">电话服务
				</option>
				<option value="跨国服务">跨国服务
				</option>
				</select>
				</td>
				
				<td>服务日期:</td>
				<td colspan="2"><input type="date" name="serve_date"></td>
				
			</tr>
			<tr>
				<td>客户名称:</td>
				<td colspan="2"><input type="text" name="client_name"></td>
				
				<td>联系人:</td>
				<td colspan="2"><input type="text" name="serve_contact"></td>
				
			</tr>
			<tr>
				<td>服务预估成本</td>
				<td colspan="2"><input type="text" name="serve_service">元</td>
				
				<td>时间成本:</td>
				<td colspan="2"><input type="text" name="serve_time">小时</td>
				
			</tr>
			<tr>
				<td>服务内容描述</td>
				<td colspan="5"><textarea name="serve_desc"></textarea></td>
			</tr>
			<tr>
				<td >客户反馈</td>
				<td colspan="5"><input type="text" name="client_feedback"></td>
			</tr>
			<tr>
				<td>客户满意度</td>
				<td colspan="5"><select name="client_satisfaction">
				<option value="一般">一般
				</option>
				<option value="满意">满意
				</option>
				<option value="非常满意">非常满意
				</option>
				</select></td>
				
			</tr>
			<tr>
				<td>客户反馈意见</td>
				<td colspan="5"><textarea name="client_feedback"></textarea></td>
			</tr>
			<tr>
				<td>描述</td>
				<td colspan="5">
				<textarea name="client_desc"></textarea>
				</td>
			</tr>
			<tr>
				<td>备注1</td>
				<td colspan="5"><textarea name=""></textarea></td>
			</tr>
			<tr>
				<td>备注2</td>
				<td colspan="5"><textarea name=""></textarea></td>
			</tr>
			<tr>
				
				<td colspan="6" align="center"><input type="submit" value="添加"><input type="reset"></td>
			</tr>
		</table>
	</form>
	
</body>
</html>