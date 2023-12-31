<?php /*a:3:{s:51:"E:\project\unggame\app\admin\view\config\index.html";i:1678158321;s:52:"E:\project\unggame\app\admin\view\common\header.html";i:1673339169;s:52:"E:\project\unggame\app\admin\view\common\footer.html";i:1672902372;}*/ ?>
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
	<div class="el-layout">
		<el-tabs v-model="tabs" :tab-position="document.body.clientWidth > 768 ? 'left' : 'top'">
			<el-tab-pane label="基础配置" name="system">
			    <div class="el-pane-warp">
					<el-form ref="systemForm" :model="systemForm" label-width="120px">
						<el-form-item>
							<template slot="label">
								<div><el-tooltip placement="top" content="{$system.company}"><div>公司名称：</div></el-tooltip></div>
							</template>
							<el-input v-model="systemForm.company"></el-input>
						</el-form-item>
						<el-form-item>
							<template slot="label">
								<div><el-tooltip placement="top" content="{$system.email}"><div>公司邮箱：</div></el-tooltip></div>
							</template>
							<el-input v-model="systemForm.email"></el-input>
						</el-form-item>
						<el-form-item>
							<template slot="label">
								<div><el-tooltip placement="top" content="{$system.telephone}"><div>公司电话：</div></el-tooltip></div>
							</template>
							<el-input v-model="systemForm.telephone"></el-input>
						</el-form-item>
						<el-form-item>
							<template slot="label">
								<div><el-tooltip placement="top" content="{$system.phone}"><div>手机号码：</div></el-tooltip></div>
							</template>
							<el-input v-model="systemForm.phone"></el-input>
						</el-form-item>
						<el-form-item>
							<template slot="label">
								<div><el-tooltip placement="top" content="{$system.fax}"><div>公司传真：</div></el-tooltip></div>
							</template>
							<el-input v-model="systemForm.fax"></el-input>
						</el-form-item>
						<el-form-item>
							<template slot="label">
								<div><el-tooltip placement="top" content="{$system.address}"><div>公司地址：</div></el-tooltip></div>
							</template>
							<el-input v-model="systemForm.address"></el-input>
						</el-form-item>
						<el-form-item>
							<template slot="label">
								<div><el-tooltip placement="top" content="{$system.business_hours}"><div>营业时间：</div></el-tooltip></div>
							</template>
							<el-input v-model="systemForm.business_hours"></el-input>
						</el-form-item>
						<el-form-item>
							<template slot="label">
								<div><el-tooltip placement="top" content="{$system.wechat}"><div>网站微信号：</div></el-tooltip></div>
							</template>
							<el-input v-model="systemForm.wechat"></el-input>
						</el-form-item>
						<el-form-item>
							<template slot="label">
								<div><el-tooltip placement="top" content="{$system.qq}"><div>网站QQ号：</div></el-tooltip></div>
							</template>
							<el-input v-model="systemForm.qq"></el-input>
						</el-form-item>
						<el-form-item>
							<template slot="label">
								<div><el-tooltip placement="top" content="{$system.ico}"><div>地址栏ico：</div></el-tooltip></div>
							</template>
							<el-upload
	                            :action="admin_url('file/uploadAppoint')"
	                            :data="{name: 'favicon', ext: 'ico'}"
	                            :show-file-list="false"
	                            :on-success="icoSuccess"
	                            accept=".ico">
	                            <el-image :src="systemForm.ico" style="width: 30px;height: 30px;">
	                                <div slot="error" class="image-slot">
	                                    <img class="error-image" src="/admin/images/error.png"/>
	                                </div>
	                            </el-image>
	                        </el-upload>
	                        <span>
	                        	<div class="tips">建议尺寸 32 * 32 (像素)的.ico文件。<a href="https://www.baidu.com/s?wd=ico" target="_blank">点击制作ICO</a> 如果无法正常显示新上传图标，请空浏览器缓存后访问。</div>
	                        </span>
						</el-form-item>
						<el-form-item>
							<template slot="label">
								<div><el-tooltip placement="top" content="{$system.logo}"><div>网站Logo：</div></el-tooltip></div>
							</template>
							<el-file-select v-model="systemForm.logo"></el-file-select>
						</el-form-item>
						<el-form-item>
							<template slot="label">
								<div><el-tooltip placement="top" content="{$system.copy_logo}"><div>网站Logo副本：</div></el-tooltip></div>
							</template>
							<el-file-select v-model="systemForm.copy_logo"></el-file-select>
						</el-form-item>
						<el-form-item>
							<template slot="label">
								<div><el-tooltip placement="top" content="{$system.wechat_qrcode}"><div>公众号二维码：</div></el-tooltip></div>
							</template>
							<el-file-select v-model="systemForm.wechat_qrcode"></el-file-select>
						</el-form-item>
						<el-form-item>
							<template slot="label">
								<div><el-tooltip placement="top" content="{$system.seo_title}"><div>网站标题：</div></el-tooltip></div>
							</template>
							<el-input v-model="systemForm.seo_title"></el-input>
						</el-form-item>
						<el-form-item>
							<template slot="label">
								<div><el-tooltip placement="top" content="{$system.seo_keywords}"><div>网站关键词：</div></el-tooltip></div>
							</template>
							<el-input v-model="systemForm.seo_keywords" placeholder="关键词请用逗号(,)隔开"></el-input>
						</el-form-item>
						<el-form-item>
							<template slot="label">
								<div><el-tooltip placement="top" content="{$system.seo_description}"><div>网站描述：</div></el-tooltip></div>
							</template>
							<el-input type="textarea" v-model="systemForm.seo_description"></el-input>
						</el-form-item>
						<el-form-item>
							<template slot="label">
								<div><el-tooltip placement="top" content="{$system.copyright}"><div>版权信息：</div></el-tooltip></div>
							</template>
							<el-input v-model="systemForm.copyright"></el-input>
						</el-form-item>
						<el-form-item>
							<template slot="label">
								<div><el-tooltip placement="top" content="{$system.icp|raw}"><div>备案号：</div></el-tooltip></div>
							</template>
							<el-editor v-model="systemForm.icp"></el-editor>
						</el-form-item>
					</el-form>
					<div class="el-bottom">
						<el-button 
							size="medium"
							:loading="loading" 
							type="primary" 
							icon="el-icon-refresh-right" 
							@click="saveConfig('基础配置', systemForm)">
							保 存
						</el-button>
					</div>
				</div>
			</el-tab-pane>
			<el-tab-pane label="主题配置" :name="themesForm.name">
				<div class="el-pane-warp">
				    <div style="margin-bottom:22px">
                        当前主题：
                        <el-select size="small" v-model="theme" @change="themeChange()">
                            <el-option v-for="(item, index) in themes" :label="item.title" :value="item.name">
                                {{item.title}}<span style="float: right;color: #999">{{item.name}}</span>
                            </el-option>
                        </el-select>
                        <el-button size="small" type="primary" style="margin:0 10px" @click="themeInstall()">安装更多主题</el-button>
                        <el-tooltip content="安装主题后可自由切换主题，修改配置即可" placement="top">
                            <i style="color:#F56C6C;font-size:18px;margin-left: 5px;" class="el-icon-question"></i>
                        </el-tooltip>
                    </div>
					<el-form label-width="0">
		                <el-form-item>
		                    <el-field v-model="themesForm.config" label-position="top" variable="system" :repeat="systemForm"></el-field>
		                </el-form-item>
		            </el-form>
		            <div class="el-bottom">
						<el-button 
							size="medium"
							:loading="loading" 
							type="primary" 
							icon="el-icon-refresh-right" 
							@click="saveConfig(themesForm.title + '主题配置', themesForm.config, 'theme')">
							保 存
						</el-button>
					</div>
				</div>
			</el-tab-pane>
			<el-tab-pane label="邮箱配置" name="email">
				<div class="el-pane-warp">
					<el-form ref="emailForm" :model="emailForm" label-width="150px">
						<el-form-item label="SMTP服务器地址：" prop="smtp">
							<el-input v-model="emailForm.smtp" placeholder="如：smtp.qq.com"></el-input>
						</el-form-item>
						<el-form-item label="发件人邮箱：" prop="email">
							<el-input v-model="emailForm.email" placeholder="如：xxxx@qq.com"></el-input>
						</el-form-item>
						<el-form-item label="发件人名字：" prop="sender">
							<el-input v-model="emailForm.sender" placeholder="如：OneKeyAdmin"></el-input>
						</el-form-item>
						<el-form-item label="客户端授权密码：" prop="password">
							<el-input type="password" v-model="emailForm.password" show-password></el-input>
							例：获取QQ邮箱客户端授权密码，登录<a href="https://mail.qq.com/" target="_blank">QQ邮箱</a>->点击首页左上角设置->账户->账户安全->生成授权码
						</el-form-item>
						<el-form-item label="协议方式：" prop="sendstyle">
							<el-radio-group v-model="emailForm.sendstyle">
								<el-radio label="ssl">ssl协议</el-radio>
								<el-radio label="tls">tls协议</el-radio>
							</el-radio-group>
						</el-form-item>
					</el-form>
					<div class="el-bottom">
						<el-button 
							size="medium"
							:loading="loading" 
							type="primary" 
							icon="el-icon-refresh-right" 
							@click="saveConfig('邮箱配置', emailForm)">
							保 存
						</el-button>
					</div>
				</div>
			</el-tab-pane>
			<el-tab-pane label="平台配置" name="ungconfig">
				<div class="el-pane-warp">
					<el-form ref="ungForm" :model="ungForm" label-width="150px">
						<el-form-item label="官方简介：" prop="ung_content">
							<el-input v-model="ungForm.ung_content" type="textarea" placeholder="请填写简介内容"></el-input>
						</el-form-item>
						<el-form-item label="官方邮箱：" prop="email">
							<el-input v-model="ungForm.email" placeholder="如：xxxx@qq.com"></el-input>
						</el-form-item>
					</el-form>
					<div class="el-bottom">
						<el-button
								size="medium"
								:loading="loading"
								type="primary"
								icon="el-icon-refresh-right"
								@click="saveConfig('平台配置', ungForm)">
							保 存
						</el-button>
					</div>
				</div>
			</el-tab-pane>
			<el-tab-pane label="上传限制" name="upload">
				<div class="el-pane-warp">
					<el-form ref="uploadForm" :model="uploadForm" label-width="170px">
						<el-form-item label="管理员上传图片限制：">
							<el-input style="max-width: 500px;" v-model="uploadForm.admin.ext.image" placeholder="支持上传的文件格式以逗号(,)隔开"></el-input>
							<el-input style="max-width: 150px;" v-model="uploadForm.admin.size.image">
								<template slot="append">MB</template>
							</el-input>
						</el-form-item>
						<el-form-item label="管理员上传视频限制：">
							<el-input style="max-width: 500px;" v-model="uploadForm.admin.ext.video" placeholder="支持上传的文件格式以逗号(,)隔开"></el-input>
							<el-input style="max-width: 150px;" v-model="uploadForm.admin.size.video">
								<template slot="append">MB</template>
							</el-input>
						</el-form-item>
						<el-form-item label="管理员上传音频限制：">
							<el-input style="max-width: 500px;" v-model="uploadForm.admin.ext.audio" placeholder="支持上传的文件格式以逗号(,)隔开"></el-input>
							<el-input style="max-width: 150px;" v-model="uploadForm.admin.size.audio">
								<template slot="append">MB</template>
							</el-input>
						</el-form-item>
						<el-form-item label="管理员上传文档限制：">
							<el-input style="max-width: 500px;" v-model="uploadForm.admin.ext.word" placeholder="支持上传的文件格式以逗号(,)隔开"></el-input>
							<el-input style="max-width: 150px;" v-model="uploadForm.admin.size.word">
								<template slot="append">MB</template>
							</el-input>
						</el-form-item>
						<el-form-item label="管理员上传其它限制：">
							<el-input style="max-width: 500px;" v-model="uploadForm.admin.ext.other" placeholder="支持上传的文件格式以逗号(,)隔开"></el-input>
							<el-input style="max-width: 150px;" v-model="uploadForm.admin.size.other">
								<template slot="append">MB</template>
							</el-input>
						</el-form-item>
						<el-form-item label="会员上传图片限制：">
							<el-input style="max-width: 500px;" v-model="uploadForm.index.ext.image" placeholder="支持上传的文件格式以逗号(,)隔开"></el-input>
							<el-input style="max-width: 150px;" v-model="uploadForm.index.size.image">
								<template slot="append">MB</template>
							</el-input>
						</el-form-item>
					</el-form>
					<div class="el-bottom">
						<el-button 
							size="medium"
							:loading="loading" 
							type="primary" 
							icon="el-icon-refresh-right" 
							@click="saveConfig('上传限制', uploadForm)">
							保 存
						</el-button>
					</div>
				</div>
			</el-tab-pane>
			<el-tab-pane label="提现配置" name="withdraw">
				<div class="el-pane-warp">
					<el-form ref="withdrawForm" :model="withdrawForm" label-width="120px">
						<el-form-item label="最小提现金额">
							<el-input v-model="withdrawForm.minprice" 	style="width: 40%"></el-input>
						</el-form-item>
						<el-form-item label="提现流水倍数">
							<el-input v-model="withdrawForm.rate" 	style="width: 40%"></el-input>
						</el-form-item>
						<el-form-item label="提现手续费">
							<el-table
									ref="singleTable"
									:data="withdrawForm.tableData"
									highlight-current-row
									@current-change="handleCurrentChange"
									style="width: 40%">
								<el-table-column
										type="index"
										width="50">
								</el-table-column>
								<el-table-column
										property="date"
										label="邀请人数"
										width="120">
									<template slot-scope="scope">
										<el-input clearable v-model="scope.row.number" placeholder="请输入邀请人数"></el-input>
									</template>
								</el-table-column>
								<el-table-column
										property="name"
										label="费率"
										width="120">
									<template slot-scope="scope">
										<el-input clearable v-model="scope.row.rate" placeholder="请输入费率"></el-input>
									</template>
								</el-table-column>
								<el-table-column
										fixed="right"
										label="操作"
										width="100">
									<template slot-scope="scope">
										<el-button @click="handleClick(scope.$index)" type="text" size="small">删除</el-button>
									</template>
								</el-table-column>
							</el-table>
							<el-button style="width:40%;height:50px;background:#fff;color:#000" icon="el-icon-plus" @click="add" type="primary">添加信息</el-button>
						</el-form-item>
					</el-form>
					<div class="el-bottom">
						<el-button
								size="medium"
								:loading="loading"
								type="primary"
								icon="el-icon-refresh-right"
								@click="saveConfig('提现配置', withdrawForm)">
							保 存
						</el-button>
					</div>
				</div>
			</el-tab-pane>
		</el-tabs>
	</div>
</div>
<script>
	new Vue({
	    el: '#app',
	    data() {
	        return {
	        	tabs: 'system',
	        	editUrl: "config/update",
	        	loading: false,
	        	theme: theme,
                themes: <?php echo json_encode($themes); ?>,
	        	emailForm: <?php echo json_encode($email); ?>,
	        	systemForm: <?php echo json_encode($system); ?>,
	        	uploadForm: <?php echo json_encode($upload); ?>,
	        	themesForm: <?php echo json_encode($theme); ?>,
				ungForm:<?php echo json_encode($ungconfig); ?>,
				withdrawForm:{
	        		rate:"",minprice:"",
					tableData:[
						{
							number:"",
							rate:"",
						}
					]
				},
	        }
	    },

        created() {
			var withdrawForm = <?php echo json_encode($withdraw); ?>;
			if(withdrawForm.length != 0){
				this.withdrawForm = withdrawForm;
			}
        	this.uploadForm.index.size.image = this.uploadForm.index.size.image / 1024 / 1024;
        	this.uploadForm.admin.size.image = this.uploadForm.admin.size.image / 1024 / 1024;
        	this.uploadForm.admin.size.video = this.uploadForm.admin.size.video / 1024 / 1024;
        	this.uploadForm.admin.size.audio = this.uploadForm.admin.size.audio / 1024 / 1024;
        	this.uploadForm.admin.size.word  = this.uploadForm.admin.size.word  / 1024 / 1024;
        	this.uploadForm.admin.size.other = this.uploadForm.admin.size.other / 1024 / 1024;
        },
	    methods: {
			add(){
				var ob = {
					number :'',
					rate : ''	,
				};
				console.log(this.withdrawForm);
				if(this.withdrawForm.tableData != undefined){
					this.withdrawForm.tableData.push(ob);
				}else{
					this.withdrawForm.tableData=[ob];
				}

			},
			setCurrent(row) {
				this.$refs.singleTable.setCurrentRow(row);
			},
			handleCurrentChange(val) {
				this.currentRow = val;
			},
			handleClick(row){
				this.withdrawForm.tableData.splice(row,1);
			},
	        /**
             * 保存基础配置
             */
	        saveConfig(title, value) {
	        	let self = this;
	        	console.log(value);
	        	let row  = JSON.parse(JSON.stringify(value));
	        	console.log(JSON.stringify(value));
	        	if (self.tabs === 'upload') {
	        		row.index.size.image = row.index.size.image * 1024 * 1024;
		        	row.admin.size.image = row.admin.size.image * 1024 * 1024;
		        	row.admin.size.video = row.admin.size.video * 1024 * 1024;
		        	row.admin.size.audio = row.admin.size.audio * 1024 * 1024;
		        	row.admin.size.word  = row.admin.size.word  * 1024 * 1024;
		        	row.admin.size.other = row.admin.size.other * 1024 * 1024;
	        	}
	        	self.loading = true;
	        	request.post(self.editUrl, {title: title, name: self.tabs, value: row}, function(res){
                    self.loading = false;
                    self.$notify({showClose: true, message: res.message, type: res.status});
                });
	        },
	        /**
	         * ico设置成功
	         */
	        icoSuccess(res, file) {
	            if (res.status === 'success') {
	            	this.systemForm = Object.assign({}, this.systemForm, {ico: res.url + '?' + Math.floor(Math.random()*10000000)});
	            } else {
	                this.$notify.error(res.message);
	            }
	        },
	        /**
             * 去安装主题
             */
	        themeInstall() {
	            parent.parentVm.path = 'themes/index'
	        },
	        /**
             * 切换主题
             */
            themeChange() {
                let self = this;
                self.$confirm('确定切换主题吗？', '', {
                    confirmButtonText: '确定',
                    cancelButtonText: '取消',
                    type: 'warning'
                }).then(() => {
                    request.post('themes/update', {theme: self.theme}, function(res) {
                    if (res.status === 'success') {
                            location.href = location.href;
                        } else {
                            self.$message({ showClose: true, message: res.message, type: res.status});
                        }
                    });
                }).catch(() => {});
            },
	    },
	})
</script>
</body>
</html>