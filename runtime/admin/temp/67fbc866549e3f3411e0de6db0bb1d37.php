<?php /*a:3:{s:53:"E:\soft\unggame\app\admin\view\mk_gamelist\index.html";i:1689400009;s:49:"E:\soft\unggame\app\admin\view\common\header.html";i:1673339170;s:49:"E:\soft\unggame\app\admin\view\common\footer.html";i:1672902372;}*/ ?>
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
		ref="curd"
		@get-data="getData($event)"
		:table-page-size="20"
		:table-page-sizes="[20, 50, 100, 200, 500]"
		:search-date="false">
		<template v-slot:button>
			<el-button @click="getGames()">同步游戏</el-button>
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
						label: '序号',
						table: {
							sort: true,
						},
						form: false
					},
					{
						prop: 'status',
						label: '游戏状态',
						table: {
							is: 'el-switch',
							sort: true,
						},
						form: {
							is: 'el-switch',
							default: 0,
						}
					},
					// {
					// 	prop: 'gameType',
					// 	label: '游戏类型',
					// 	table: {
					// 		sort: true,
					// 	},
					// 	form: {
					// 		is: 'el-input',
					// 	}
					// },
					{
						prop: 'gamename',
						label: '游戏名称',
						table:{
							is: 'el-input',
							width:'120px'
						},
						form: false
						// form: {
						// 	is: 'el-input',
						// }
					},
					{
						prop: 'gameImage',
						label: '游戏图片',
						table: {
							is: 'image',
							width:'80px'
						},
						form: {
							is: 'el-file-select',
							type:'image'
						}
					},
					// {
					// 	prop: 'tcgGameCode',
					// 	label: '游戏代码',
					// 	form: {
					// 		is: 'el-input',
					// 	}
					// },
					{
						prop: 'gamecode',
						label: '遊戲代碼',
						form: false,
						// form: {
						// 	is: 'el-input',
						// },
					},
					// {
					// 	prop: 'productType',
					// 	label: '产品代码',
					// 	form: false
					// },
					// {
					// 	prop: 'platform',
					// 	label: '支持平台',
					// 	form: false
					// },
					// {
					// 	prop: 'gameSubType',
					// 	label: '子目录',
					// 	form: {
					// 		is: 'el-input',
					// 	}
					// },
					// {
					// 	prop: 'is_visit',
					// 	label: '是否可访问',
					// 	table: {
					// 		prop: 'visit',
					// 		sort: true,
					// 	},
					// 	form: false
					// },
					// {
					// 	prop: 'hot',
					// 	label: '热度',
					// 	form: {
					// 		is: 'el-input',
					// 	}
					// },
					// {
					// 	prop: 'is_groom',
					// 	label: '游戏推荐',
					// 	table: {
					// 		is: 'el-switch',
					// 		sort: true,
					// 	},
					// 	form: {
					// 		is: 'el-switch',
					// 		default: 0,
					// 	}
					// },
					{
						prop: 'topgame_sort',
						label: '顶部推荐栏位排序',
						table: {
							is: 'el-input',
							sort: true,
						},
						form: {
							is: 'el-input',
							default: 0,
						}
					},
					{
						prop: 'groom_sort',
						label: 'slots Game排序',
						table: {
							is: 'el-input',
							sort: true,
						},
						form: {
							is: 'el-input',
							default: 0,
						}
					},
					{
						prop: 'tablegame_sort',
						label: 'tablegame排序',
						table: {
							is: 'el-input',
							sort: true,
						},
						form: {
							is: 'el-input',
							default: 0,
						}
					},
					{
						prop: 'usernum',
						label: '游戏人次',
						table: {
							sort: true,
						},
						form: {
							is: 'el-input',
							default: 0,
						}
					},
					{
						prop: 'win',
						label: '获胜金额',
						table: {
							sort: true,
						},
						form: {
							is: 'el-input',
							default: 0,
						}
					},
					{
						prop: 'lose',
						label: '失败金额',
						table: {
							sort: true,
						},
						form: {
							is: 'el-input',
							default: 0,
						}
					},
					// {
					// 	prop: 'category_put',
					// 	label: '游戏类型',
					// 	table: {
					// 		is: 'el-switch',
					// 		sort: true,
					// 	},
					// 	form: {
					// 		is: 'el-switch',
					// 		default: 0,
					// 	}
					// },
					// {
					// 	prop: 'category_sort',
					// 	label: '类型排位',
					// 	table: {
					// 		is: 'el-input',
					// 		sort: true,
					// 	},
					// 	form: {
					// 		is: 'el-input',
					// 		default: 0,
					// 	}
					// },
					// {
					// 	prop:'game_release_date',
					// 	label: '发行日期',
					// 	table: false,
					// 	form: {
					// 		is:'el-date-picker',
					// 	}
					// },
					{
						prop:'author',
						label: '标签',
						table: false,
						form: {
							is:'el-input',
						}
					},
					{
						prop: 'description',
						label: '描述',
						table: false,
						form: {
							is:'el-input',
							type:'textarea'
						}
					},
					{
						prop:'images',
						label: "详情页图片表",
						table: false,
						form: {
							is:'el-file-list-select',
							type:'image'
						}
					}
					// {
					// 	prop: 'trialSupport',
					// 	label: '试玩',
					// 	table: {is: 'el-switch',sort: true},
					// 	form: {
					// 		is: 'el-switch',
					// 		default: 1,
					// 	}
					// }
				],
				brandlist:null,

				brandvalue:'',
				options: [{
				  value: 'RNG',
				  label: '电子'
				}, {
				  value: 'FISH',
				  label: '捕鱼'
				}, {
				  value: 'PVP',
				  label: '棋牌'
				}, {
				  value: 'SPORT',
				  label: '体育'
				}, {
				  value: 'ESPORT',
				  label: '电竞'
				}, {
				  value: 'LIVE',
				  label: '真人'
				}, {
				  value: 'LOTT',
				  label: '彩票'
				}],
				value: '',

				loadingTitle: '开始更新',
				//brandUrl: 'MkGamelist/getBrands',
				gameUrl:'MkGamelist/getGames',

			}
			
		},
		methods:{
			getData(res) {
				this.brandlist=res.branlist;
				// this.brandlist='nihao';
			},
			getgametype(e){
				this.$refs.curd.search = Object.assign({}, this.$refs.curd.search, {page: 1, gameType: e});
			},
			getgamecode(e){
				this.$refs.curd.search = Object.assign({}, this.$refs.curd.search, {page: 1, productType: e});
			},
			getGames() {
				let self=this;
				self.loadingUpdate = true;
				self.loadingTitle  = '开始同步最新游戏';
				request.post(self.gameUrl,{gamehall: 'cq9'},function(res){
					if (res.status === 'success') {
						this.$notify({ showClose: true, message: '游戏同步完成', type: res.status });
						this.$refs.curd.getData(); // 重新获取表格数据
					}else{
						this.$notify({ showClose: true, message: '游戏同步失败', type: res.status });
					}
				})

			}

		}
	})
</script>
</body>
</html>