<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h3>快速查询</h3>
	<form action="" method="">
	@csrf
	<table  bgcolor="red">
		<tr>
			<td>服务类别</td>
			<td>
			<select name="serve_type">
				<option value="">--请选择--
				</option>
				<option value="上门服务">上门服务
				</option>
				<option value="电话服务">电话服务
				</option>
				<option value="跨国服务">跨国服务
				</option>
				</select>
			</td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td>客户名称</td>
			<td><input type="text" name="client_name" value="{{$data['client_name']??''}}"></td>
			<td>联系人</td>
			<td><input type="" name="serve_contact" value="{{$data['serve_contact']??''}}"></td>
			<td><td><input type="date" name="serve_date"></td></td>
		</tr>
		<tr>
			<td>服务内容</td>
			<td colspan="3"><textarea name="serve_desc">{{$data['serve_desc']??''}}</textarea></td>
			
		</tr>
		<tr>
			<td bgcolor="pink"><input type="submit" value="查询"></td>
			<td><input type="submit" value="高级查询"></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>

	</table>

	</form>
	<table border="1" bgcolor="#cccccc">
		<tr>
			<td>id</td>
			<td>客户名称</td>
			<td>联系人</td>
			<td>服务类型</td>
			<td>服务预估成本</td>
			<td>客户满意度</td>
			<td>服务类型</td>
			<td>客户反馈</td>
			<td>服务日期</td>
			<td>操作</td>
		</tr>
		@foreach($Info as $v)
		<tr>
			<td>{{$v->serve_id}}</td>
			<td>{{$v->client_name}}</td>
			<td>{{$v->serve_contact}}</td>
			<td>{{$v->serve_type}}</td>
			<td>{{$v->serve_service}}</td>
			<td>{{$v->client_satisfaction}}</td>
			<td>{{$v->serve_type}}</td>
			<td>{{$v->client_feedback}}</td>
			<td>{{$v->serve_date}}</td>
			<td><a href="{{url('serve/del/'.$v->serve_id)}}">删除</a>||<a href="{{url('serve/edit/'.$v->serve_id)}}">修改</a></td>
		</tr>
		@endforeach
	</table>
	{{$Info->appends($data)->links()}}
</body>
</html>
