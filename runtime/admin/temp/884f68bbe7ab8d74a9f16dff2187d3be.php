<?php /*a:3:{s:54:"E:\soft\unggame\app\admin\view\mk_user_sign\index.html";i:1684657702;s:49:"E:\soft\unggame\app\admin\view\common\header.html";i:1673339170;s:49:"E:\soft\unggame\app\admin\view\common\footer.html";i:1672902372;}*/ ?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
<title>游戏后台管理系统</title>
<link rel="icon" href="/upload/favicon.ico"> 
<link rel="stylesheet" type="text/css" href="/admin/css/element.min.css?v=<?php echo config('app.version'); ?>">
<link rel="stylesheet" type="text/css" href="/admin/css/onekey.min.css?v=<?php echo config('app.version'); ?>">
<link rel="stylesheet" type="text/css" href="/admin/layui/css/layui.css?v=<?php echo config('app.version'); ?>">
<script type="text/javascript" src="/admin/js/jquery.min.js?v=<?php echo config('app.version'); ?>"></script>
<script type="text/javascript" src="/admin/js/vue.min.js?v=<?php echo config('app.version'); ?>"></script>
<script type="text/javascript" src="/admin/js/element.min.js?v=<?php echo config('app.version'); ?>"></script>
<script type="text/javascript" src="/admin/js/sortable.min.js?v=<?php echo config('app.version'); ?>"></script>
<script type="text/javascript" src="/admin/js/vuedraggable.min.js?v=<?php echo config('app.version'); ?>"></script>
<script type="text/javascript" src="/admin/js/common.js?v=<?php echo config('app.version'); ?>"></script>
<script type="text/javascript" src="/admin/js/component.js?v=<?php echo config('app.version'); ?>"></script>
<script type="text/javascript" src="/admin/js/nprogress.js?v=<?php echo config('app.version'); ?>"></script>
<script type="text/javascript" src="/admin/layui/layui.js?v=<?php echo config('app.version'); ?>"></script>
</head>
<body>
<div id="app" v-cloak>
	<el-curd
		:field="field"
		:table-export="false"
		:table-page-size="20"
		:table-page-sizes="[20, 50, 100, 200, 500]">
	</el-curd>
</div>
<script>
	new Vue({
		el: "#app",
		data() {
			return {
				field: [
					{
						prop: 'id',
						label: '主键',
						table: {
							sort: true,
						},
						form: false
					},
					{
						prop: 'nickname',
						label: '用户名',
						table: {
							sort: false,
						},
						form: {
							is: 'el-input',
						}
					},
					{
						prop: 'type',
						label: '奖励类型',
						table: {
							prop:"type_text"
						},
						form: {
							is: 'el-radio-group',
							default: '1',
							child: {
								value: [{"title":"平台奖励","value":"2"},{"title":"普通签到","value":"1"}],
								props: {label: 'title', value: 'value'}},
						}
					},
					{
						prop: 'rewards',
						label: '签到奖励',
						table: {
						},
						form: {
							is: 'el-input',
						}
					},
					{
						prop: 'last_sign_time',
						label: '签到时间',
						table: {
							sort: true,
							label: '最后一次签到时间',
						},
						form: {
							is: 'el-date-picker',
							type: 'datetime',
						}
					},
					{
						prop: 'total_days',
						label: '签到次数',
						table: {
							sort: false,
						},
						form: {
							is: 'el-input',
						}
					},
				],
			}
		},
	})
</script>
</body>
</html>