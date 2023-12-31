<?php /*a:3:{s:72:"E:/soft/unggame/public/plugins/user/admin/view/mk_user_idcard/index.html";i:1682604104;s:49:"E:\soft\unggame\app\admin\view\common\header.html";i:1673339170;s:49:"E:\soft\unggame\app\admin\view\common\footer.html";i:1672902372;}*/ ?>
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
			table-operation-width="50"
		:field="field"
		:table-export="false"
		:table-sort="{prop: 'id', order: 'desc'}"
		:table-page-size="20"
		:table-page-sizes="[20, 50, 100, 200, 500]">
		<template v-slot:operation="row" >
			<el-button  size="mini" circle @click="check(row.id)" style="color: green" v-if="row.status == 0">审核</el-button>
			<el-button  size="mini" circle @click="showReason(row.failed_reason)" style="color: red" v-else-if="row.status == 2">查看</el-button>
		</template>
	</el-curd>
	<el-dialog
			title="审核"
			:visible.sync="dialogVisible"
			width="30%"
			:before-close="handleClose">
		<el-form ref="formRef" :model="form" label-width="80px">
			<el-form-item label="审核结果">
				<el-radio-group v-model="form.status">
					<el-radio label="1" >审核通过</el-radio>
					<el-radio label="2" >审核失败</el-radio>
				</el-radio-group>
			</el-form-item>
			<el-form-item label="失败原因" v-if="form.status == 2">
				<el-input v-model="form.failed_reason" type="text" placeholder="请填写原因"></el-input>
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
				<el-input v-model="form2.failed_reason" type="text" placeholder="请填写原因" readonly></el-input>
			</el-form-item>
		</el-form>
	</el-dialog>
</div>
<script>
	new Vue({
		el: "#app",
		data() {
			return {
				operation_id:0,
				dialogVisible:false,
				dialogVisible2:false,
				tableOperationWidth:50,
				form:{
					failed_reason:'',
					status:''
				},
				form2:{
					failed_reason:''
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
						prop: 'user_id',
						label: '用户ID',
						table: {
							sort: true,
						},
						form: {
							is: 'el-input',
						}
					},
					{
						prop: 'idCard_image',
						label: '证件照片',
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
						prop: 'idCard_image_with_hand',
						label: '手持证件照',
						table: {
							is: 'image',width: '70px'
						},
						form: {
							is: 'el-image',
							type: 'image',
							filterable: 1,
							multiple: 1,
						}
					},
					{
						prop: 'status_text',
						label: '状态:0=待审核,1=审核通过,2=未通过',
						table: {
							sort: true,
							label: '状态',
						},
						form: {
							is: 'el-radio-group',
							default: '1',
							child: {
								value: [{"title":"待审核","value":"0"},{"title":"审核通过","value":"1"},{"title":"审核失败","value":"2"}],
								props: {label: 'title', value: 'value'}},
						}
					},
					// {
					// 	prop: 'surname',
					// 	label: '姓',
					// 	table: true,
					// 	form: {
					// 		is: 'el-input',
					// 	}
					// },
					{
						prop: 'name',
						label: '姓名',
						table: {
							sort: false,
						},
						form: {
							is: 'el-input',
						}
					},
					{
						prop: 'review_time',
						label: '审核时间',
						table: {
							sort: true,
						},
						form: {
							is: 'el-date-picker',
							type: 'datetime',
						}
					},
					{
						prop: 'create_time',
						label: '创建时间',
						table: {
							sort: true,
						},
						form: {
							is: 'el-input',
						}
					},
					{
						prop: 'failed_reason',
						label: '未通过原因',
						table: false,
						form: {
							is: 'el-input',
						}
					},
					{
						prop: 'update_time',
						label: '更新时间',
						table: {
							sort: true,
						},
						form: {
							is: 'el-input',
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
				this.form.failed_reason = "";
				this.form.status = "";
			},
			showReason(reason){
				console.log(reason);
				this.form2.failed_reason = reason;
				this.dialogVisible2 = true;
			},
			onSubmit() {
				self = this;
				this.$refs.el_curd.loading = true;
				this.form.id = this.operation_id;
				request.post("user/mkUserIdcard/check",this.form,function (res){
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