<?php /*a:3:{s:72:"E:/project/unggame/public/plugins/statistics/admin/view/index/index.html";i:1666071268;s:52:"E:\project\unggame\app\admin\view\common\header.html";i:1673339169;s:52:"E:\project\unggame\app\admin\view\common\footer.html";i:1672902372;}*/ ?>
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
<link rel="stylesheet" type="text/css" href="/plugins/statistics/static/admin/css/statistics.css">
<script type="text/javascript" charset="utf-8" src="/plugins/statistics/static/admin/js/statistics.js"></script>
<script type="text/javascript" charset="utf-8" src="/plugins/statistics/static/admin/js/highmaps.js"></script>
<script type="text/javascript" charset="utf-8" src="/plugins/statistics/static/admin/js/china.js"></script>
<script type="text/javascript" charset="utf-8" src="/plugins/statistics/static/admin/js/world.js"></script>
<div id="app" v-cloak>
	<div class="el-warp el-statistics">
		<el-card class="box-card header-table">
			<el-table :data="headerTable">
				<el-table-column prop="title" label="今日流量"></el-table-column>
				<el-table-column prop="pv" label="浏览量(PV)">
                    <template slot-scope="scope">
                        {{scope.row.pv}}
                        <i :class="scope.row.pv_increase > 1 ? 'el-icon-top' : 'el-icon-bottom'" v-if="scope.$index == 3"></i>
                    </template>
                </el-table-column>
				<el-table-column prop="uv" label="访客数(UV)">
                    <template slot-scope="scope">
                        {{scope.row.uv}} 
                        <i :class="scope.row.uv_increase > 1 ? 'el-icon-top' : 'el-icon-bottom'" v-if="scope.$index == 3"></i>
                    </template>
                </el-table-column>
				<el-table-column prop="ip" label="IP数">
                    <template slot-scope="scope">
                        {{scope.row.ip}} 
                        <i :class="scope.row.ip_increase > 1 ? 'el-icon-top' : 'el-icon-bottom'" v-if="scope.$index == 3"></i>
                    </template>
                </el-table-column>
				<el-table-column prop="quit" label="跳出率"></el-table-column>
				<el-table-column prop="duration_avg" label="平均访问时长"></el-table-column>
			</el-table>
		</el-card>
		<el-tabs 
			v-model="timeActive"
			type="card">
			<el-tab-pane
				v-for="(item, index) in time" 
				:key="index"
				:label="item.title" 
				:name="item.name">
			</el-tab-pane>
		</el-tabs>
		<el-row :gutter="20" class="el-statistics-main">
            <el-col :md="24" :lg="12">
                <el-statistics-overview-chart
                    chart="areaspline"
                    title="趋势图" 
                    type="trend"
                    link="statistics/flow/trend"
                    :time="timeActive">
                </el-statistics-overview-chart>
            </el-col>
            <el-col :md="24" :lg="12">
                <el-statistics-overview-table
                    title="受访页面" 
                    type="url" 
                    link="statistics/visit/url"
                    :time="timeActive">
                </el-statistics-overview-table>
            </el-col>
            <el-col :md="24" :lg="12">
                <el-statistics-overview-chart
                    chart="province"
                    title="地域分布" 
                    type="province"
                    link="statistics/visitor/area"
                    :time="timeActive">
                </el-statistics-overview-chart>
            </el-col>
            <el-col :md="24" :lg="12">
                <el-statistics-overview-table
                    title="入口页面" 
                    type="entryUrl" 
                    link="statistics/visit/entryUrl"
                    :time="timeActive">
                </el-statistics-overview-table>
            </el-col>
            <el-col :md="24" :lg="12">
                <el-statistics-overview-chart
                    chart="pie"
                    title="访问终端" 
                    type="broswer"
                    link="statistics/visitor/os"
                    :time="timeActive">
                </el-statistics-overview-chart>
            </el-col>
            <el-col :md="24" :lg="12">
                <el-statistics-overview-table
                    title="来源网站" 
                    type="referrer"
                    link="statistics/source/referrer"
                    :time="timeActive">
                </el-statistics-overview-table>
            </el-col>
            <el-col :md="24" :lg="12">
                <div class="item">
                    <div class="main-content">
                        <el-card class="box-card">
                            <div slot="header" class="clearfix">
                                <span class="title">新老访客</span>
                                <a :href="admin_url('statistics/visitor/newuser')">
                                    <el-tooltip class="item" effect="dark" content="查看更多" placement="top">
                                        <el-button class="right-button" type="info"  icon="el-icon-arrow-right" size="mini" circle></el-button>
                                    </el-tooltip>
                                </a>
                            </div>
                            <div class="el-newuser-table">
                                <el-table :data="newuserHeader">
                                    <el-table-column prop="cover">
                                        <template slot-scope="scope">
                                            <el-image src="/plugins/statistics/static/admin/images/visit-type-icon.png"></el-image>
                                        </template>
                                    </el-table-column>
                                    <el-table-column prop="new">
                                        <template slot-scope="scope">
                                            <div class="newuser-title">新访客</div>
                                            <div class="newuser-percentage">{{scope.row.new}}<span class="newuser-unit">%</span></div>
                                        </template>
                                    </el-table-column>
                                    <el-table-column prop="old">
                                        <template slot-scope="scope">
                                            <div class="newuser-title">老访客</div>
                                            <div class="olduser-percentage">{{scope.row.old}}<span class="newuser-unit">%</span></div>
                                        </template>
                                    </el-table-column>
                                </el-table>
                                <el-table :data="newuserTable" v-loading="loading" border>
                                    <el-table-column prop="title"></el-table-column>
                                    <el-table-column prop="new"></el-table-column>
                                    <el-table-column prop="old"></el-table-column>
                            </el-table>
                            </div>
                        </el-card>
                    </div>
                </div>
            </el-col>
            <el-col :md="24" :lg="12">
                <el-statistics-overview-table
                    title="搜索词" 
                    type="keyword" 
                    link="statistics/source/keyword"
                    :time="timeActive">
                </el-statistics-overview-table>
            </el-col>
        </el-row>
	</div>
</div>
<script>
    var headerTable = <?php echo json_encode($headerTable); ?>;
	new Vue({
        el: '#app',
		data() {
            return {
                headerTable: headerTable,
                newuserHeader: [],
                newuserTable: [],
                loading: false,
                newuserUrl: "statistics/index/newuser",
                time: [
                    {"title":"今天", "name":"today"},
                    {"title":"昨天", "name":"yesterday"},
                    {"title":"最近7天", "name":"week"},
                    {"title":"最近30天", "name":"month"},
                ],
                timeActive: "today",
            }
		},
        created(){
            this.getNewuserTable();
        },
        methods: {
            getNewuserTable(){
                let self = this;
                self.loading = true;
                request.post(self.newuserUrl, {time: self.timeActive}, function (res) {
                    self.newuserHeader = res.header;
                    self.newuserTable  = res.data;
                    self.loading       = false;
                })
            }
        },
        watch: {
            timeActive(){
                this.$nextTick(() => {
                    this.getNewuserTable();
                })
            }
        }
	});
</script>
</body>
</html>