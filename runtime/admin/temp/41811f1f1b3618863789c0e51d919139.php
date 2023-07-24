<?php /*a:3:{s:84:"E:/project/unggame/public/plugins/announcement/admin/view/mk_announcement/index.html";i:1680946241;s:52:"E:\project\unggame\app\admin\view\common\header.html";i:1673339169;s:52:"E:\project\unggame\app\admin\view\common\footer.html";i:1672902372;}*/ ?>
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
			ref="curd"
		:field="field"
		:table-export="false"
		:table-page-size="20"
		:table-page-sizes="[20, 50, 100, 200, 500]"
		@query-search = "querySearch($event)"
		@select-back = "handleSelect($event)"
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
					{
						prop: 'type',
						label: '类型',
						table: {
							prop:'type_text',
							sort: true,
						},
						form: {
							is: 'el-select',
							placeholder: '',
							default: [],
							child: {
								value: [{"title":"游戏通知","value":"2"},{"title":"系统通知","value":"1"}],
								props: {label: 'title', value: 'value'}},
						}
					},
					{
						prop: 'thumb_image',
						label: '缩略图',
						table: {
							 is: 'image',width: '70px'
						},
						form: {
							is: 'el-file-select',
							type: 'image',
							filterable: 1,
							multiple: 1,
						}
					},
					{
						prop: 'desc',
						label: '简介',
						table: {
						},
						form: {
							is: 'el-input',
						}
					},
					{
						prop: 'status',
						label: '状态',
						table: {
							prop: "status_text",
							sort: true,
						},
						form: {
							is: 'el-radio-group',
							default: '1',
							child: {
								value: [{"title":"隐藏","value":"0"},{"title":"显示","value":"1"}],
								props: {label: 'title', value: 'value'}},
						}
					},
					{
						prop: 'user',
						label: '用户ID',
						table: {
							prop: "user_name",
							sort: true,
							label: '用户',
						},
						form: {
							is: 'el-autocomplete',
							default: '0',
						}
					},
					{
						prop: 'content',
						label: '内容',
						table: false,
						form: {
							is: 'el-editor',
							placeholder: '',
						}
					},
					{
						prop: 'create_time',
						label: '创建时间',
						table: {
							sort: true,
						},
						form: false
					},
				],
			}
		},
		methods:{
			querySearch(data)
			{
				request.post("user/queryUserList",{key:data.queryString},function (res){
					var results = res.data;
					data.cb(results);
				})
			},
			handleSelect(data)
			{
				this.$refs.curd.drawerForm.user_id = data.item.id
				this.$refs.curd.drawerData.user_id = data.item.id
				// this.$refs.curd.drawerData.gameImage =  data.item.gameImage
				// this.$refs.curd.drawerData.game_id =  data.item.id
			}
		}
	})
</script>
</body>
</html>