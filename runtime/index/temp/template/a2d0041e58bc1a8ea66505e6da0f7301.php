<?php /*a:4:{s:54:"E:\soft\unggame\public\themes/template/user/index.html";i:1663640602;s:57:"E:\soft\unggame\public\themes/template/common\header.html";i:1663320458;s:54:"E:\soft\unggame\public\themes/template/common\app.html";i:1663640596;s:53:"E:\soft\unggame\public\themes/template/user\site.html";i:1662710680;}*/ ?>

<!DOCTYPE html>
<html>
<head> 
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title><?php echo htmlentities($seo_title); ?></title>
	<meta name="keywords" content="<?php echo htmlentities($seo_keywords); ?>">
	<meta name="description" content="<?php echo htmlentities($seo_description); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta name="baidu-site-verification" content="code-09qLlhlH1O" />
	<link rel="shortcut icon" href="/upload/favicon.ico">
	<link rel="stylesheet" type="text/css" href="/themes/template/static/css/bootstrap.min.css"/>
	<link rel="stylesheet" type="text/css" href="/themes/template/static/css/onekey.min.css"/>
	<link rel="stylesheet" type="text/css" href="/themes/template/static/css/animates.css"/>
	<link rel="stylesheet" type="text/css" href="/themes/template/static/css/font-awesome.min.css"/>
	<link rel="stylesheet" type="text/css" href="/themes/template/static/css/jquery.mmenu.all.css"/>
	<link rel="stylesheet" type="text/css" href="/themes/template/static/css/swiper.min.css"/>
	<script type="text/javascript" src="/themes/template/static/js/jquery.min.js"></script>
	<script type="text/javascript" src="/themes/template/static/js/jquery.mmenu.all.js"></script>
	<script type="text/javascript" src="/themes/template/static/js/masonry.pkgd.min.js"></script>
	<script type="text/javascript" src="/themes/template/static/js/swiper.animate.min.js"></script>
	<script type="text/javascript" src="/themes/template/static/js/swiper.min.js"></script>
	<script type="text/javascript" src="/themes/template/static/js/wow.min.js"></script>
	<script type="text/javascript" src="/themes/template/static/js/common.js"></script>
</head>
<body>
<div id="page">
<header id="header">
	<div class="container">
		<div class="logo"><a href="/"><img src="<?php echo htmlentities($system['logo']); ?>" alt="" /></a></div>
		<div class="tel"><i class="fa fa-phone"></i> <span><?php echo htmlentities($system['telephone']); ?></span></div>
		<nav class="nav">
			<ul>
				<?php if(is_array($catalogHeader) || $catalogHeader instanceof \think\Collection || $catalogHeader instanceof \think\Paginator): $i = 0; $__LIST__ = $catalogHeader;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item1): $mod = ($i % 2 );++$i;?>
				<li>
					<a href="<?php echo htmlentities($item1['url']); ?>"><?php echo htmlentities($item1['title']); ?></a>
					<ul>
						<?php if(is_array($item1['children']) || $item1['children'] instanceof \think\Collection || $item1['children'] instanceof \think\Paginator): $i = 0; $__LIST__ = $item1['children'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item2): $mod = ($i % 2 );++$i;?>
						<li><a href="<?php echo htmlentities($item2['url']); ?>" ><?php echo htmlentities($item2['title']); ?></a></li>
						<?php endforeach; endif; else: echo "" ;endif; ?>
					</ul>
				</li>
				<?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>
		</nav>
		<a href="#menu" class="mm_btn">
			<div class="menu_bar">
				<div class="menu_bar_item top">
					<div class="rect top"></div>
				</div>
				<div class="menu_bar_item mid">
					<div class="rect mid"></div>
				</div>
				<div class="menu_bar_item bottom">
					<div class="rect bottom"></div>
				</div>
			</div>
		</a> 
	</div>
</header>
<nav id="menu" class="mm-menu_offcanvas">
	<div id="panel-menu">
		<ul>
			<?php if(is_array($catalogHeader) || $catalogHeader instanceof \think\Collection || $catalogHeader instanceof \think\Paginator): $i = 0; $__LIST__ = $catalogHeader;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item1): $mod = ($i % 2 );++$i;?>
			<li>
				<a href="<?php echo htmlentities($item1['url']); ?>"><?php echo htmlentities($item1['title']); ?></a>
				<ul>
					<?php if(is_array($item1['children']) || $item1['children'] instanceof \think\Collection || $item1['children'] instanceof \think\Paginator): $i = 0; $__LIST__ = $item1['children'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item2): $mod = ($i % 2 );++$i;?>
					<li><a href="<?php echo htmlentities($item2['url']); ?>" ><?php echo htmlentities($item2['title']); ?></a></li>
					<?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
			</li>
			<?php endforeach; endif; else: echo "" ;endif; ?>
		</ul>
	</div>
</nav>	
<link rel="stylesheet" type="text/css" href="/themes/template/static/css/element.min.css">
<script type="text/javascript" src="/themes/template/static/js/vue.min.js"></script>
<script type="text/javascript" src="/themes/template/static/js/element.min.js"></script>
<div id="app" v-cloak>
    <div class="el-warp">
        <div class="el-user">
            <div class="three">
    <div class="info">
        <a href="<?php echo index_url('user/set'); ?>">
            <el-image :src="userInfo.cover"></el-image>
            <span>{{userInfo.nickname}}</span>
        </a>
    </div>
    <div class="item">
        <div class="header">基本设置</div>
        <a href="<?php echo index_url('user/index'); ?>" class="menu" :class="<?php if($pathinfo === 'user/index'): ?>'active'<?php endif; ?>">账号管理</a>
        <a href="<?php echo index_url('user/set'); ?>" class="menu" :class="<?php if($pathinfo === 'user/set'): ?>'active'<?php endif; ?>">个人资料</a>
    </div>
    <div class="item">
        <div class="header">订单管理</div>
        <a href="<?php echo index_url('onekey/userOrder/index'); ?>" class="menu" :class="<?php if($pathinfo === 'onekey/userOrder/index'): ?>'active'<?php endif; ?>">我的订单</a>
    </div>
    <div class="item">
        <div class="header">文章管理</div>
        <a href="<?php echo index_url('blog/user/blog'); ?>" class="menu" :class="<?php if($pathinfo === 'blog/user/blog'): ?>'active'<?php endif; ?>">我的文章</a>
        <a href="<?php echo index_url('blog/user/blogCollect'); ?>" class="menu" :class="<?php if($pathinfo === 'blog/user/blogCollect'): ?>'active'<?php endif; ?>">我收藏的</a>
        <a href="<?php echo index_url('blog/user/blogComment'); ?>" class="menu" :class="<?php if($pathinfo === 'blog/user/blogComment'): ?>'active'<?php endif; ?>">我评论的</a>
        <a href="<?php echo index_url('blog/user/blogNotice'); ?>" class="menu" :class="<?php if($pathinfo === 'blog/user/blogNotice'): ?>'active'<?php endif; ?>">最新通知</a>
    </div>
    <div class="item">
        <div class="header">认证开发者</div>
        <a href="<?php echo index_url('onekey/userDeveloper/index'); ?>" class="menu" :class="<?php if($pathinfo === 'onekey/userDeveloper/index'): ?>'active'<?php endif; ?>">申请认证</a>
        <a href="<?php echo index_url('onekey/userPlugins/index'); ?>" class="menu" :class="<?php if($pathinfo === 'onekey/userPlugins/index'): ?>'active'<?php endif; ?>">上传插件</a>
        <a href="<?php echo index_url('onekey/userThemes/index'); ?>" class="menu" :class="<?php if($pathinfo === 'onekey/userThemes/index'): ?>'active'<?php endif; ?>">上传主题</a>
    </div>
</div>
            <div class="content">
                <div class="el-user-header">
                    <div class="item active">账号管理</div>
                </div>
                <el-form ref="userInfo" label-width="160px" :model="userInfo">
                    <el-form-item label="等级：">
                       <el-tag>{{userInfo.group_title}}</el-tag>
                    </el-form-item>
                    <el-form-item label="积分：">
                        <b style="color: #E6A23C">{{userInfo.now_integral}}</b>
                    </el-form-item>
                    <el-form-item label="余额：">
                        <b style="color: #E6A23C">{{userInfo.balance}}</b>
                    </el-form-item>
                    <el-form-item label="邮箱：" prop="email">
                        <div>{{userInfo.email}}</div>
                        <el-button @click="emailDialog = true" size="small">
                            {{userInfo.email === '' ? '绑定邮箱' : '修改绑定'}}
                        </el-button>
                    </el-form-item>
                    <el-form-item label="手机：" prop="mobile">
                        <div>{{userInfo.mobile}}</div>
                        <el-button @click="mobileDialog = true" size="small">
                            {{userInfo.mobile === '' ? '绑定手机' : '修改绑定'}}
                        </el-button>
                    </el-form-item>
                </el-form>
            </div>
        </div>
    </div>
    <el-dialog title="邮箱绑定" :visible.sync="emailDialog" width="400px" :close-on-click-modal="false">
        <el-form :model="emailForm" :rules="emailRules" ref="emailForm" @submit.native.prevent>
            <el-form-item prop="email">
                <el-input v-model="emailForm.email" prefix-icon="el-icon-message" placeholder="请输入邮箱"></el-input>
            </el-form-item>
            <el-form-item prop="code">
                <el-input style="width: 200px" v-model="emailForm.code" prefix-icon="el-icon-time" placeholder="请输入验证码"></el-input>
                <el-button style="width: 120px" @click="emailGetCode()" :disabled="emailNowInterval != 0" :loading="emailCodeLoading">
                    {{emailNowInterval == 0 ? '获取验证码' : emailNowInterval + '秒后获取'}}
                </el-button>
            </el-form-item>
        </el-form>
        <div slot="footer" class="dialog-footer">
            <el-button type="primary" @click="bindEmail()" :loading="emailLoading">确定绑定</el-button>
        </div>
    </el-dialog>
    <el-dialog title="手机绑定" :visible.sync="mobileDialog" width="400px" :close-on-click-modal="false">
        <el-form :model="mobileForm" :rules="mobileRules" ref="mobileForm" @submit.native.prevent>
            <el-form-item prop="mobile">
                <el-input v-model="mobileForm.mobile" prefix-icon="el-icon-message" placeholder="请输入邮箱"></el-input>
            </el-form-item>
            <el-form-item prop="code">
                <el-input style="width: 200px" v-model="mobileForm.code" prefix-icon="el-icon-time" placeholder="请输入验证码"></el-input>
                <el-button style="width: 120px" @click="mobileGetCode()" :disabled="mobileNowInterval != 0" :loading="mobileCodeLoading">
                    {{mobileNowInterval == 0 ? '获取验证码' : mobileNowInterval + '秒后获取'}}
                </el-button>
            </el-form-item>
        </el-form>
        <div slot="footer" class="dialog-footer">
            <el-button type="primary" @click="bindMobile()" :loading="mobileLoading">确定绑定</el-button>
        </div>
    </el-dialog>
</div>
<script type="text/javascript">
    new Vue({
        el: '#app',
        data() {
            return {
                userInfo: userInfo,
                loading: false,
                emailForm: {
                    code: '',
                    email: '',
                    salt: '',
                    rcode: '',
                },
                emailRules: {
                    email: [
                        { required: true, message: '请输入邮箱', trigger: 'blur' },
                    ],
                    code: [
                        { required: true, message: '请输入验证码', trigger: 'blur' },
                    ],
                },
                emailNowInterval: 0,
                emailLoading: false,
                emailCodeLoading: false,
                emailDialog: false,
                mobileForm: {
                    code: '',
                    mobile: '',
                    salt: '',
                    rcode: '',
                },
                mobileRules: {
                    mobile: [
                        { required: true, message: '请输入手机', trigger: 'blur' },
                    ],
                    code: [
                        { required: true, message: '请输入验证码', trigger: 'blur' },
                    ],
                },
                mobileNowInterval: 0,
                mobileLoading: false,
                mobileCodeLoading: false,
                mobileDialog: false,
            }
        },
        created() {
            if (JSON.stringify(userInfo) == '{}') {
                location.href = index_url('login/index');
            }
        },
        methods: {
            /**
             * 获取邮箱验证码
             */
            emailGetCode() {
                let self = this;
                if (self.emailNowInterval == 0) {
                    self.emailCodeLoading = true;
                    post('api/user/sendBindEmailCode', {email: self.emailForm.email}, function(res){
                        self.emailCodeLoading = false;
                        self.$message({ showClose: true, message: res.message, type: res.status});
                        if (res.status === 'success') {
                            self.emailNowInterval = 60;
                            self.timer        = setInterval(() => {
                                if (self.emailNowInterval > 0) {
                                    self.emailNowInterval--;
                                }
                            }, 1000);
                            self.emailForm.salt  = res.salt;
                            self.emailForm.rcode = res.code;
                        }
                    })
                }
            },
            /**
             * 获取手机验证码
             */
            mobileGetCode() {
                let self = this;
                if (self.mobileNowInterval == 0) {
                    self.mobileCodeLoading = true;
                    post('api/user/sendBindMobileCode', {mobile: self.mobileForm.mobile}, function(res){
                        self.mobileCodeLoading = false;
                        self.$message({ showClose: true, message: res.message, type: res.status});
                        if (res.status === 'success') {
                            self.mobileNowInterval = 60;
                            self.timer        = setInterval(() => {
                                if (self.mobileNowInterval > 0) {
                                    self.mobileNowInterval--;
                                }
                            }, 1000);
                            self.mobileForm.salt  = res.salt;
                            self.mobileForm.rcode = res.code;
                        }
                    })
                }
            },
            /**
             * 绑定邮箱
             */
            bindEmail() {
                let self = this;
                self.$refs.emailForm.validate((valid) => {
                    if (valid) {
                        self.bindLoading = true;
                        post('api/user/bindEmail', self.emailForm, function(res){
                            if (res.status === "success") {
                                self.emailLoading = false;
                                self.userInfo.email = self.emailForm.email;
                                self.$refs.emailForm.resetFields();
                            }
                            self.bindLoading = false;
                            self.$message({ showClose: true, message: res.message, type: res.status});
                        });
                    } else {
                        return false;
                    }
                });
            },
            /**
             * 绑定手机
             */
            bindMobile() {
                let self = this;
                self.$refs.mobileForm.validate((valid) => {
                    if (valid) {
                        self.bindLoading = true;
                        post('api/user/bindMobile', self.mobileForm, function(res){
                            if (res.status === "success") {
                                self.mobileLoading = false;
                                self.userInfo.mobile = self.mobileForm.mobile;
                                self.$refs.mobileForm.resetFields();
                            }
                            self.bindLoading = false;
                            self.$message({ showClose: true, message: res.message, type: res.status});
                        });
                    } else {
                        return false;
                    }
                });
            },
        },
    });
</script>
</body>
</html>