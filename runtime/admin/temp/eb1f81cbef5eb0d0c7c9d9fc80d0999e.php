<?php /*a:3:{s:57:"E:\soft\unggame\app\admin\view\mk_ung_user_log\index.html";i:1678514798;s:49:"E:\soft\unggame\app\admin\view\common\header.html";i:1673339170;s:49:"E:\soft\unggame\app\admin\view\common\footer.html";i:1672902372;}*/ ?>
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
		<template  v-slot:search>
			<el-button type="text">
				<span>活跃用户:<span style="color: red"><?php echo htmlentities($userNumbers); ?></span>人&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
				<span>累计营收:<span style="color: red">$<?php echo htmlentities($total); ?></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
				<span>昨日分红:<span style="color: red">$<?php echo htmlentities($yesterday_divd); ?></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
				<span>昨日利润:<span style="color: red">$<?php echo htmlentities($yesterday_price); ?></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
				<span>平台运营天数:<span style="color: red"><?php echo htmlentities($total_days); ?></span></span>
			</el-button>
		</template>
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
						label: '转让方昵称',
						table: {
							sort: true,
						},
						form: {
							is: 'el-input',
						}
					},
					{
						prop: 'tonickname',
						label: '接收方昵称',
						table: {
							sort: true,
						},
						form: {
							is: 'el-input',
						}
					},
					{
						prop: 'type_text',
						label: '类型',
						table: {
							sort: true,
						},
						form: {
							is: 'el-input',
							placeholder: '1:用户之间转账，2:后台转账，3:用户申购，4：用户赎回',
							tips: '买入卖出',
						}
					},
					{
						prop: 'num',
						label: '数量',
						table: {
							sort: true,
						},
						form: {
							is: 'el-input',
						}
					},
					{
						prop: 'price',
						label: '单个价格',
						table: {
							sort: true,
						},
						form: {
							is: 'el-input',
						}
					},
					{
						prop: 'total_price',
						label: '总价格',
						table: {
							sort: true,
						},
						form: {
							is: 'el-input',
						}
					},
					{
						prop: 'orderno',
						label: '订单编号',
						table: {
							sort: true,
						},
						form: {
							is: 'el-input',
						}
					},

					{
						prop: 'add_time',
						label: '创建时间',
						table: {
							prop: 'add_time',
							sort: true,
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