<?php /*a:3:{s:77:"E:/soft/unggame/public/plugins/currency/admin/view/mk_currency_all/index.html";i:1683279122;s:49:"E:\soft\unggame\app\admin\view\common\header.html";i:1673339170;s:49:"E:\soft\unggame\app\admin\view\common\footer.html";i:1672902372;}*/ ?>
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
		:table-page-sizes="[20, 50, 100, 200, 500]"
		:search-keyword="false"
		:search-date="false">
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
					// {
					// 	prop: 'type',
					// 	label: '类型',
					// 	table: {
					// 		sort: true,
					// 	},
					// 	form: {
					// 		is: 'el-radio-group',
					// 		child: {
					// 			value: [{"title":"现金","value":"2"},{"title":"数字货币","value":"1"}],
					// 			props: {label: 'title', value: 'value'}},
					// 	}
					// },
					{
						prop: 'name',
						label: '货币简称',
						table: {
						},
						form: {
							is: 'el-input',
						}
					},
					{
						prop: 'thumb_img',
						label: '缩略图',
						table: {
						},
						form: false
					},
					{
						prop: 'country',
						label: '国家',
						table: {
						},
						form: {
							is: 'el-input',
						}
					},
					{
						prop: 'symbol',
						label: '符号',
						table: {
						},
						form: {
							is: 'el-input',
						}
					},
					// {
					// 	prop: 'url_list',
					// 	label: '支付链接',
					// 	table: false,
					// 	form: {
					// 		is: 'el-parameter',
					// 	}
					// },
					{
						prop: 'awards',
						label: '奖励设置',
						table: false,
						form: {
							is: 'el-parameter',
						}
					},
				],
			}
		},
	})
</script>
</body>
</html>