<?php
// +----------------------------------------------------------------------
// | OneKeyAdmin [ Believe that you can do better ]
// +----------------------------------------------------------------------
// | Copyright (c) 2020-2023 http://onekeyadmin.com All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: MUKE <513038996@qq.com>
// +----------------------------------------------------------------------
use think\facade\Route;


// 变量规则
Route::pattern([
	"class"  => "[\w\-]+",
	"action" => "[\w\-]+",
]);
// 插件API
foreach (plugin_list() as $key => $val) {

	if (request()->path === $val['name']) {
		Route::rule($val['name']."/:class/:action", "plugins/index")->append(['plugin' => $val['name']]);
	}
}

//Route::get('player/checkDateTime/:account', 'player/checkDateTime')->pattern(['account' => '[\w|\-|\@|\.|\:]+']);
Route::get('player/check/:account', 'player/check')->pattern(['account' => '[\w|\-|\@|\.]+']);
Route::get('transaction/balance/:account', 'player/balance')->pattern(['account' => '[\w|\-|\@|\.]+']);

Route::post('transaction/game/bet', 'player/bet');
Route::post('transaction/game/endround', 'player/endround');


Route::post('transaction/game/rollout', 'player/rollout');
Route::post('transaction/game/takeall', 'player/takeall');
Route::post('transaction/game/rollin', 'player/rollin');


Route::post('transaction/game/debit', 'player/debit');
Route::post('transaction/game/credit', 'player/credit');


Route::post('transaction/user/payoff', 'player/payoff');

Route::post('transaction/game/refund', 'player/refund');


Route::post('transaction/game/bets', 'player/bets');
Route::post('transaction/game/refunds', 'player/refunds');





Route::rule('transaction/game/:id','player/notFound','GET|POST');

