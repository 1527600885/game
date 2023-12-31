<?php /*a:3:{s:77:"E:/soft/unggame/public/plugins/withdrawal/admin/view/mk_withdrawal/index.html";i:1678066830;s:49:"E:\soft\unggame\app\admin\view\common\header.html";i:1673339170;s:49:"E:\soft\unggame\app\admin\view\common\footer.html";i:1672902372;}*/ ?>
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
			:search="false"
		:table-export="false"
		:table-page-size="20"
		:table-page-sizes="[20, 50, 100, 200, 500]"
		:search-status='[{"value":"0","label":"未审核"},{"value":"1","label":"已审核"}]'
		:search-date="false">
		<!-- 在表格操作单元格中插入代码 -->
		<template v-slot:operation="row" >
			<el-button  size="mini" circle @click="check(row.id)" style="color: green" v-if="row.online_status == 0 && row.pay_type == 1">审核</el-button>
			<el-button  size="mini" circle @click="payonline(row.id)" style="color: green" v-if="row.online_status == 0 && row.pay_type == 2">打款</el-button>
			<el-button  size="mini" circle @click="showReason(row.reason)" style="color: red" v-else-if="row.online_status == 3">查看</el-button>
		</template>
	</el-curd>
	<el-dialog
			title="审核"
			:visible.sync="dialogVisible"
			width="30%"
			:before-close="handleClose">
		<el-form ref="formRef" :model="form" label-width="80px">
			<el-form-item label="审核结果">
				<el-radio-group v-model="form.online_status">
					<el-radio label="2" >转账成功</el-radio>
					<el-radio label="3" >转账失败</el-radio>
				</el-radio-group>
			</el-form-item>
			<el-form-item label="失败原因" v-if="form.online_status == 3">
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
				operation_id:0,
				form:{
					online_status:"",
					reason:"",
				},
				form2:{
					reason:""
				},
				dialogVisible2:false,
				dialogVisible:false,
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
						prop: 'sid',
						label: '配置ID',
						table: false,
						form: false
					},
					{
						prop: 'uid',
						label: '用户ID',
						table: false,
						form: false
					},
					{
						prop: 'type',
						label: '提现类型',
						table: {
							prop:"type_name",
							sort: true,
						},
						form: {
							is: 'el-radio-group',
							default: '1',
							child: {
								value: [{"title":"数字货币提现","value":"1"},{"title":"在线提现","value":"2"}],
								props: {label: 'title', value: 'value'}},
						}
					},
					{
						prop: 'currency',
						label: '货币类型',
						table: {
							sort: true,
						},
						form: false
					},
					{
						prop: 'name',
						label: '姓名',
						table: {
							sort: true,
						},
						form: {
							is: 'el-input',
						}
					},
					{
						prop: 'address',
						label: '地址',
						table: {
							sort: true,
						},
						form: {
							is: 'el-input',
						}
					},
					{
						prop: 'other',
						label: '其他信息',
						table: {
							prop: 'other_name',
							sort: true,
						},
						form: {
							is: 'el-input',
						}
					},
					{
						prop: 'amount',
						label: '提现金额',
						table: {
							prop: 'amount_name',
							sort: true,
						},
						form: {
							is: 'el-input',
						}
					},
					{
						prop: 'money',
						label: '实际到账金额',
						table: {
							prop: 'money_name',
							sort: true,
						},
						form: {
							is: 'el-input',
						}
					},
					{
						prop: 'charge',
						label: '手续费',
						table: {
							prop: 'charge_name',
							sort: true,
						},
						form: {
							is: 'el-input',
						}
					},
					{
						prop: 'online_status',
						label: '转账状态',
						table: {
							prop: 'online_status_name',
							sort: true,
						},
						form: {
							is: 'el-switch',
							default: '1',
						}
					},
					{
						prop: 'status',
						label: '提现状态',
						table: false,
						form: {
							is: 'el-switch',
							default: '1',
						}
					},
					{
						prop: 'status_time',
						label: '审核时间',
						table: {
							sort: true,
						},
						form: false
					},
					{
						prop: 'pay_time',
						label: '到账时间',
						table: {
							sort: true,
						},
						form: false
					},
					{
						prop: 'add_time',
						label: '提现时间',
						table: {
							prop: 'add_times',
							sort: true,
						},
						form: false
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
				this.form.online_status = "";
			},
			showReason(reason){
				console.log(reason);
				this.form2.reason = reason;
				this.dialogVisible2 = true;
			},
			payonline(id){
				self = this;
				this.$refs.el_curd.loading = true;
				request.post("withdrawal/mkWithdrawal/payonline",{id:id},function (res){
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
				})
			},
			onSubmit() {
				self = this;
				this.$refs.el_curd.loading = true;
				this.form.id = this.operation_id;
				request.post("withdrawal/mkWithdrawal/check",this.form,function (res){
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