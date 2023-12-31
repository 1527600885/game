<?php /*a:3:{s:71:"E:/project/unggame/public/plugins/top/admin/view/mk_top_game/index.html";i:1679366521;s:52:"E:\project\unggame\app\admin\view\common\header.html";i:1673339169;s:52:"E:\project\unggame\app\admin\view\common\footer.html";i:1672902372;}*/ ?>
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
		:table-page-size="20"
		:table-page-sizes="[20, 50, 100, 200, 500]"
		@query-search = "querySearch($event)"
		@select-back = "handleSelect($event)"
	>
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
						prop: 'gamename',
						label: '游戏名称',
						table: {
							sort: false,
						},
						form: {
							is: 'el-autocomplete',
						}
					},
					{
						prop: 'gameImage',
						label: '游戏图片',
						table: {
							is:'image',
							width:'80px'
						},
						form: false
					},
					{
						prop: 'type',
						label: '类型',
						table: {
							"prop":'type_text'
						},
						form: {
							is: 'el-radio-group',
							child: {
								value: [{"title":"Top Win","value":2},{"title":"Much wow Win","value":1}],
								props: {label: 'title', value: 'value'}},
						}
					},
				],
			}
		},
		methods:{
			querySearch(data)
			{
				request.post("numberone/getGameList",{key:data.queryString},function (res){
					var results = res.data;
					data.cb(results);
				})
			},
			handleSelect(data)
			{
				this.$refs.curd.drawerForm.gameImage = data.item.gameImage
				this.$refs.curd.drawerData.gameImage =  data.item.gameImage
				this.$refs.curd.drawerData.game_id =  data.item.id
			}
		}
	})
</script>
</body>
</html>