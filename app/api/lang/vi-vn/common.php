<?php
return array(
	'system'=> [
		'iperror' => 'Bởi vì bạn không ở trong khu vực có khả năng, quyền truy cập của bạn đã bị chặn bởi hệ thống',
		'id' => 'Lỗi Tham số',
		'success' => 'Đã nạp',
		'code' => 'Mật khẩu',
		'hi' => 'Alô.',
		'sendcode' => 'Vui lòng gởi mã kiểm tra',
		'page' => 'trang',
		'email_configure_error'=> 'Hệ thống không có hộp thư được cấu hình',
		'authenticate'=>'Lỗi SMTP bưu điện: Lỗi đăng nhập thất bại. Xin kiểm tra xem tài khoản và mật khẩu được nhập đúng.',
		'connect_host'=>'Lỗi SMTP bưu điện: không thể kết nối tới máy SMTP. Hãy kiểm tra xem phương pháp giao thức SMTP, cổng và gửi là đúng.',
		'data_not_accepted'=>'Lỗi SMTP bưu điện: không chấp nhận dữ liệu.',
		'empty_message'=>'Hộp thư không thể rỗng',
		'encoding'=>'Mã thư lạ',
		'execute'=>'Hộp thư bị lỗi',
		'file_access'=>'Hộp thư không thể truy cập tập tin',
		'file_open'=>'Hộp thư không thể truy cập tập tin',
		'from_failed'=>'Lỗi địa chỉ thư',
		'instantiate'=>'Cuộc gọi chức năng chưa biết',
		'invalid_email'=>'Email không gửi, địa chỉ thư không hợp lệ',
		'mailer_not_supported'=>'Khách hàng gửi thư không hỗ trợ',
		'provide_address'=>'Hộp thư phải cung cấp ít nhất một địa chỉ tiếp nhận',
		'recipients_failed'=>'Lỗi gửi thư SMTP, địa chỉ người nhận',
		'signing'=>'Lỗi ký gửi thư',
		'smtp_connect_failed'=>'Lỗi kết nối thư SMTP.- thất bại',
		'smtp_error'=>'Lỗi máy chủ SMTP thư',
		'variable_set'=>'Hộp thư không thể đặt hoặc đặt lại biến',
		'nickname_default'=>'tên',
		'describe'=>'Người đàn ông này lười biếng và không để lại gì.',
		'operation_succeeded'=>'Chiến dịch thành công',
		'operation_failed'=>'Lỗi vận động',
		'currency_name'=>'Tiền tệ số:',
		'online_name'=>'Tiền trực tuyến',
		'creditcards'=>'Thẻ tín dụng Chấp nhận',
		'setting_succeeded'=>'Đặt thành công'
	],
	'user'=> [
		'accountnot' => 'Tài khoản không tồn tại',
		'wrong'=> 'Mật khẩu hay tài khoản sai',
		'shield'=> 'Tài khoản bị chặn',
		'login'=> 'Lỗi đăng nhập',
		'email'=> 'Định dạng số thư điện tử không đúng',
		'mobileEmpty'=> 'Xin hãy điền vào số điện thoại.',
		'accountEmpty'=> 'Xin hãy điền vào số tài khoản.',
		'captchaEmpty'=> 'Xin hãy điền vào mã kiểm tra.',
		'captchaError'=> 'Mật khẩu sai',
		'nicknameEmpty'=> 'Biệt danh không thể rỗng',
		'nicknameError'=> 'Biệt danh không thể cao hơn 40',
		'describeError'=> 'Số ký hiệu không thể vượt qua 255',
		'passwordEmpty'=> 'Xin hãy điền mật khẩu.',
		'passwordconfirm'=> 'Mật khẩu khác nhau',
		'passwordMin'=> 'Mật khẩu không thể dưới 6',
		'passwordMax'=> 'Mật khẩu không thể quá 12',
		'passwordAlphaNum'=>'Chỉ có con số và thư tiếng Anh có thể nhập',
		'tokenEmpty'=> 'Bạn chưa đăng nhập!',
		'tokenExpired'=> 'Bia hết hạn!',
		'tokenError'=> 'Lỗi xác thực TOKEN!',
		'accountBlocked'=> 'Tài khoản này bị chặn rồi!',
		'notRegister'=> 'Người dùng chưa đăng ký',
		'emailoccupy'=>'Số thư điện tử đã được đăng ký',
		'userregister'=>'Đăng ký người dùng',
		'codeerror'=>'Lỗi mã kiểm tra thư',
		'emailerror'=>'Số thư điện tử đã được đăng ký',
		'registersuccess'=>'đã đăng nhập thành công',
		'unregistered'=>'Email chưa đăng ký',
		'forgot'=>'Quên mật khẩu',
		'mobileexistence'=>'Số điện thoại này đã được đăng ký',
		'mobilesuccess'=>'Đã thành công',
		'sex'=>'Hãy chọn giới tính',
		'pay_paasword_require'=>'Mật khẩu thanh toán',
		'pay_paasword_length'=>'Mật khẩu giao dịch phải là sáu chữ số.',
		'bindemail'=>'Hộp thư dán',
		'inviteusers'=>'Người dùng mời',
		'inviteregister'=>'Đăng ký',
		'safetylow'=>'Thấp',
		'safetycommonly'=>'Thường',
		'safetyhigh'=>'Cao',
		'safetyperfect'=>'Tuyệt',
		'addresseror' =>'Blockchain address error',
		'toyouself'   =>'Cannot transfer or gift to yoursel',
		'UNGinsufficient' => 'Your UNG coin balance is insufficient',
		'pay_paasword_error' => 'Transaction password error',
		'pay_ungnum_error' => 'Staked amount error',
		'buy_limit_error' => 'Less than the minimum purchase quantity',
		'ung_Insufficient' =>'Insufficient UNG coins',
		'banlance_none' => 'Your balance is insufficient',
		'buy_field' => 'Purchase failed',
		'ungaddressempty' =>'Blockchain address cannot be empty',
        'ungaddresserror' =>'Blockchain address error',
        'quantityempty'   =>'Quantity cannot be empty',
        'quantitynumber'  =>'Quantity must be numeric',
        'quantityerror'   =>'quantity error',
        'userverify'=>'Please verify your account first',
        "realnameverification" =>"Real-name authentication required for UNG transfer and redemption."
	],
	'game'=>[
		'money_funds'=>'Quỹ kém',
		'run_game'=>'Khởi động thành công, xin chờ.',
		'synchronizing_funds'=>'Hoàn tất việc đồng bộ',
		'no_funds_synchronized'=>'Không thể đồng bộ với quỹ',
	],
	'order'=>[
		'mobileEmpty'=>'Số điện thoại',
		'toolittle'=>'Số tiền tệ số lượng là quá nhỏ!',
		'toofast'=>'Trả tiền nhanh quá, nghỉ ngơi rồi quay lại',
		'ordersuccess'=>'Thanh to án thành công, xin hãy đợi quản trị chấp nhận...',
		'ordererror'=>'Thanh toán thất bại, thử lại',
		'placedata'=>'Mua tiền tệ trò chơi',
		'placesuccess'=>'Đợi đã...',
		'placeerror'=>'Hãy đợi quản trị giải quyết vấn đề thanh to án!',
		'currencyvalue'=>'Hãy chọn loại tiền tệ cần nạp lại.',
		'currencyerror'=>'Tiếc là không hỗ trợ giao dịch trong tiền tệ này',
	],
	'capital'=>[
		'user'=>'người dùng',
		'content'=>'Trừ khi sạc trực tuyến',
		'money'=>'đô',
		'gamecontento'=>'Trò chơi',
		'gamecontentt'=>'Tăng quỹ',
		'gamecontenth'=>'Giảm ngân sách',
		'gamecontentf'=>'Đầu không đổi',
	],
	'recharge'=>[
		'digital'=>'USDT/BTC/ETH nạp',
		'cash'=>'Nạp tiền mặt',
		'Credit'=>'Nạp thẻ tín dụng'
	]
);
?>