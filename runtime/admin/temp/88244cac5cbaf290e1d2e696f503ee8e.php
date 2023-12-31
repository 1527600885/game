<?php /*a:3:{s:81:"E:/soft/unggame/public/plugins/user_rewards/admin/view/mk_user_rewards/index.html";i:1678066898;s:49:"E:\soft\unggame\app\admin\view\common\header.html";i:1673339170;s:49:"E:\soft\unggame\app\admin\view\common\footer.html";i:1672902372;}*/ ?>
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
			ref="el_curd"
		:field="field"
			:table-export="false"
		:table-page-size="20"
		:table-page-sizes="[20, 50, 100, 200, 500]"
			:search-status='[{"value":"0","label":"待审核"},{"value":"1","label":"有效"},{"value":"1","label":"无效"}]'
	>
	</el-curd>
	<!-- 在表格操作单元格中插入代码 -->
	<template v-slot:operation="row" >
		<el-button  size="mini" circle @click="check(row.id)" style="color: green" v-if="row.status == 0">审核</el-button>
		<el-button  size="mini" circle @click="showReason(row.reason)" style="color: red" v-else-if="row.status == 2">查看</el-button>
	</template>
	<el-dialog
			title="审核"
			:visible.sync="dialogVisible"
			width="30%"
			:before-close="handleClose">
		<el-form ref="formRef" :model="form" label-width="80px">
			<el-form-item label="审核结果">
				<el-radio-group v-model="form.status">
					<el-radio label="1" >有效</el-radio>
					<el-radio label="2" >无效</el-radio>
				</el-radio-group>
			</el-form-item>
			<el-form-item label="无效原因" v-if="form.status == 2">
				<el-input v-model="form.reason" type="text" placeholder="请填写原因"></el-input>
			</el-form-item>
			<el-form-item>
				<el-button type="primary" @click="onSubmit">确认</el-button>
				<el-button  @click="closeForm()">取消</el-button>
			</el-form-item>
		</el-form>
	</el-dialog>
	<el-dialog
			title="失败原因"
			:visible.sync="dialogVisible2"
			width="30%">
		<el-form ref="formRef" :model="form" label-width="80px">
			<el-form-item label="失败原因">
				<el-input v-model="form2.reason" type="text" placeholder="请填写原因" readonly></el-input>
			</el-form-item>
		</el-form>
	</el-dialog>
</div>
<script>
	new Vue({
		el: "#app",
		data() {
			return {
				operationWidth:20,
				tableOperationWidth:20,
				operation_id:0,
				dialogVisible:false,
				dialogVisible2:false,
				form:{

				},
				form2:{

				},
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
						prop: 'user_nickname',
						label: '用户昵称',
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
							sort: false,
						},
						form: {
							is: 'el-select',
							placeholder: '',
							default: [],
							child: {
								value: [],
								props: {label: 'title', value: 'value'}},
						}
					},
					{
						prop: 'image',
						label: '截图证明',
						table: {
							is:"image",
							sort: false,
						},
						form: {
							is: 'el-file-select',
							type: 'image',
							filterable: 1,
							multiple: 1,
						}
					},
					{
						prop: 'create_time',
						label: '提交时间',
						table: {
							sort: true,
						},
						form: {
							is: 'el-date-picker',
							type: 'date',
						}
					},
					{
						prop: 'check_time',
						label: '审核时间',
						table: {
							sort: true,
						},
						form: {
							is: 'el-date-picker',
							type: 'date',
						}
					},
					{
						prop: 'status_text',
						label: '状态:',
						table: {
							sort: true,
							label: '状态',
						},
						form: {
							is: 'el-radio-group',
							default: '0',
							child: {
								value: [{"title":"审核失败","value":"2"},{"title":"审核成功","value":"1"},{"title":"待审核","value":"0"}],
								props: {label: 'title', value: 'value'}},
						}
					},
				],
			}
		},
		methods:{
			check(id){
				this.operation_id = id
				this.dialogVisible = true;
			},
			closeForm(){
				this.dialogVisible = false
				this.resetForm();
			},
			handleClose(done) {
				this.resetForm();
				done();
			},
			resetForm(){
				console.log("重置表单")
				this.form.reason = "";
				this.form.status = "";
			},
			showReason(reason){
				console.log(reason);
				this.form2.reason = reason;
				this.dialogVisible2 = true;
			},
			onSubmit() {
				self = this;
				this.$refs.el_curd.loading = true;
				this.form.id = this.operation_id;
				request.post("withdrawal/mkUserRewards/check",this.form,function (res){
					if (res.status === 'success') {
						self.$notify({
							title: '成功',
							message: '操作成功',
							type: 'success'
						});
						self.$refs.el_curd.$emit('edit-data', res.message);
						self.$refs.el_curd.refreshData();
					} else {
						self.$notify({showClose: true, message: res.message, type: res.status});
					}
					self.$refs.el_curd.loading = false;
					self.closeForm();
				})
			},
		}
	})
</script>
</body>
</html>