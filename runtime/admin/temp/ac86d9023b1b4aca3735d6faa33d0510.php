<?php /*a:3:{s:52:"E:\project\unggame\app\admin\view\catalog\index.html";i:1672902372;s:52:"E:\project\unggame\app\admin\view\common\header.html";i:1673339169;s:52:"E:\project\unggame\app\admin\view\common\footer.html";i:1672902372;}*/ ?>
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
        :table-sort="{prop: 'sort', order: 'desc'}"
        :search-date="false"
        :search-status="[{label: '正常', value: 1}, {label: '屏蔽', value: 0}]"
        :table-operation-width="250"
        :table-operation-copy="true"
        form-label-width="100px"
        table-tree
        table-export
        preview>
    </el-curd>
</div>
<script>
    new Vue({
        el: '#app',
        data() {
            return {
                field: [
                    {
                        label: '基本信息',
                        field: [
                            {
                                prop: 'cover', 
                                label: '封面',
                                table: false,
                                form: {
                                    is: 'el-file-select',
                                    type: 'image',
                                    colMd: 24,
                                },
                            },
                            {
                                prop: 'title', 
                                label: '标题',
                                table: {sort: true, width: '250px'},
                                form: {
                                    rules: [
                                        {required: true,message: '标题不能为空'},
                                    ],
                                    colMd: 12,
                                }
                            },
                            {
                                prop: 'pid', 
                                label: '父级', 
                                table: false, 
                                form: {
                                    is: 'el-select',
                                    child: {value: 'this'},
                                    filterable: true,
                                    rules: [
                                        {required: true,message: '请选择父级'},
                                    ],
                                    colMd: 12,
                                },
                            },
                            {
                                prop: 'show', 
                                label: '导航', 
                                table: {prop: 'c_show', sort: true},
                                form: {
                                    is: 'el-select',
                                    default: 1, 
                                    child: {
                                        value:[
                                            {label:'不显示',value:0},
                                            {label:'都显示',value:1},
                                            {label:'头部显示',value:2},
                                            {label:'底部显示',value:3}
                                        ]
                                    },
                                    rules: [
                                        {required: true,message: '请选择显示方式'},
                                    ],
                                    colMd: 12,
                                }
                            },
                            {
                                prop: 'type', 
                                label: '类型', 
                                table: {sort: true, prop: 'c_type',bind: ['type']},
                                form: {
                                    is: 'el-select',
                                    default: 'page',
                                    child: {
                                        value: <?php echo json_encode($type); ?>, 
                                        props:{label: 'title', value: 'catalog'}
                                    },
                                    relation: [{prop: 'links_type', value: 0}],
                                    colMd: 12,
                                },
                            },
                            {
                                prop: 'seo_url', 
                                label: '路由', 
                                table: false,
                                form: {
                                    rules: [
                                        {pattern:  /^[A-Za-z0-9-\" "]+$/ig, message: '只能输入字母、数字、空格、破折号-'},
                                        {relationRequired: [{prop: 'type', value: 'page'}], message: '当前类型为页面时，必须输入路由'}
                                    ],
                                    relation: [{prop: 'links_type', value: 0}],
                                    placeholder: '当类型为页面时，会自动生成模板文件',
                                    colMd: 12,
                                }
                            },
                            {
                                prop: 'bind_html', 
                                label: '自定义html文件',
                                table: false,
                                form: {
                                    default: '',
                                    relation: [{prop: 'type', value: 'page', where: '<>'},{prop: 'links_type', value: 0}],
                                    placeholder: '留空代表默认，例："cnews"则新闻列表页和详情页自动加载到cnews.html文件',
                                    colMd: 12,
                                }
                            },
                            {
                                prop: 'group_id', 
                                label: '权限',
                                table: {prop: 'group_title'},
                                table: false,
                                form: {
                                    is: 'el-select', 
                                    child: {
                                        value: <?php echo json_encode($group); ?>, 
                                        props:{label: 'title', value: 'id'}
                                    },
                                    default: [],
                                    multiple: true,
                                    relation: [{prop: 'links_type', value: 0}],
                                    placeholder: '不设置权限则留空',
                                    colMd: 12,
                                },
                            },
                            {
                                prop: 'links_type', 
                                label: '链接', 
                                table: false,
                                form: {
                                    is: 'el-select',
                                    default: 0, 
                                    child: {
                                        value:[{label:'默认', value: 0}, {label:'指定',value: 1}]
                                    },
                                    colMd: 12,              
                                }
                            },
                            {
                                prop: 'links_value',
                                label: '指定', 
                                table: false,
                                form: {
                                    is:'el-link-select', 
                                    default: {},
                                    relation: [{prop: 'links_type', value: 1}],
                                    colMd: 12,
                                },
                            },
                            {
                                prop: 'sort', 
                                label: '排序', 
                                table: false,
                                form: {
                                    type: 'number',
                                    default: 0, 
                                    placeholder: '降序排序，值越大越靠前',
                                    colMd: 12,
                                },
                            },
                            {
                                prop: 'id', 
                                label: '编号',    
                                table: {sort: true},
                            },
                            {
                                prop: 'status',
                                label: '状态',  
                                table: {is: 'el-switch', sort: true},
                                form: {
                                    is: 'el-switch',
                                    default: 1, 
                                    colMd: 8,
                                },
                            },
                            {
                                prop: 'mobile', 
                                label: '手机显示',  
                                table: false,
                                form: {
                                    is: 'el-switch',
                                    default: 1,
                                    colMd: 8,
                                }
                            },
                            {
                                prop: 'blank', 
                                label: '新窗口打开',  
                                table: false,
                                form: {
                                    is: 'el-switch',
                                    default: 0,
                                    colMd: 8,
                                }
                            },
                            {
                                prop: 'description', 
                                label: '描述',
                                table: false,
                                form: {
                                    type: 'textarea',
                                }
                            },
                            {
                                prop: 'content', 
                                label: '详情', 
                                table: false, 
                                form: {
                                    is: 'el-editor',
                                }
                            },
                        ],
                    },
                    {
                        label: 'TDK设置',
                        field: [
                            {
                                prop: 'seo_title', 
                                label: 'SEO标题', 
                                table: false,
                                form: {maxlength: 72}
                            },
                            {
                                prop: 'seo_keywords', 
                                label: 'SEO关键词', 
                                table: false,
                                form: {maxlength: 120}
                            },
                            {
                                prop: 'seo_description',
                                label: 'SEO描述', 
                                table: false,
                                form: {
                                    type: 'textarea', 
                                    maxlength: 240,
                                },
                            },
                        ]
                    },
                    {
                        label: '自定义字段',
                        field: [
                            {
                                prop: 'field', 
                                label: '', 
                                table: false,
                                form: {
                                    is: 'el-field', 
                                    ifset: true,
                                    default: [],
                                    labelPosition: 'top'
                                }
                            },
                        ]
                    },
                ]
            }
        },
    })
</script>
</body>
</html>