<?php /*a:3:{s:54:"E:\soft\unggame\app\admin\view\capital_flow\index.html";i:1676272384;s:49:"E:\soft\unggame\app\admin\view\common\header.html";i:1673339170;s:49:"E:\soft\unggame\app\admin\view\common\footer.html";i:1672902372;}*/ ?>
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
            index-url="capitalFlow/index?uid=<?php echo input('param.uid',0); ?>"
            :field="field"
            :search-date="false"
            :table-operation-width="0"
            :table-sort="{prop: 'add_time', order: 'desc'}"
            :search-catalog="[{title: '充值', id: 1}, {title: '提现', id: 2},{title: '游戏', id: 3},{title: '独角币股息', id: 4},{title: '邀请注册奖励', id: 5},{title: '好友充值奖励', id: 6},{title: '管理员后台添加', id: 7}]"
            :search-status='[{"label":"没有变动","value":"0"},{"label":"增加","value":"1"},{"label":"减少","value":"2"}]'
            preview>
        <?php if(input('param.uid')): ?>
            <template v-slot:button>
                <el-button type="info" icon="el-icon-back" onclick="history.back()">返回</el-button>
            </template>
        <?php endif; ?>
    </el-curd>
</div>
<script>
    new Vue({
        el: '#app',
        data() {
            return {
                count: 0,
                field: [
                    {
                        label: '编号',
                        prop: 'id',
                        table: false,
                    },
                    {
                        label: '管理员账号',
                        prop: 'account',
                        table: <?php if(input('param.uid')): ?>false<?php else: ?>true<?php endif; ?>,
                    },
                    {
                        label: '管理员IP',
                        prop: 'add_ip',
                        table: <?php if(input('param.uid')): ?>false<?php else: ?>true<?php endif; ?>,
                    },
                    {
                        prop: 'type',
                        label: '类型',
                        table:<?php if(input('param.uid')): ?>true<?php else: ?>false<?php endif; ?>,
                    },
                    {
                        prop: 'money_type',
                        label: '变化类型',
                    },
                    {
                        prop: 'amount',
                        label: '变化金额',
                    },
                    {
                        prop: 'balance',
                        label: '用户余额',
                    },
                    {
                        prop: 'admin_content',
                        label: '详情',
                    },
                    {
                        prop: 'add_time',
                        label: '时间',
                    }
                ]
            }
        }

    })
</script>
</body>
</html>