<?php
return array(
	'system'=> [
		'iperror' => 'เนื่องจากคุณไม่ได้อยู่ในพื้นที่การเข้าถึงระบบป้องกันการเข้าถึงของคุณ',
		'id' => 'พารามิเตอร์ข้อผิดพลาด',
		'success' => 'โหลดสำเร็จ',
		'code' => 'รหัสการตรวจสอบ',
		'hi' => 'สวัสดีค่ะ',
		'sendcode' => 'กรุณาส่งรหัสการตรวจสอบ',
		'page' => 'เพจ',
		'email_configure_error'=> 'ระบบไม่ได้กำหนดค่ากล่องจดหมาย',
		'authenticate'=>'กล่องจดหมาย SMTP ข้อผิดพลาดเข้าสู่ระบบล้มเหลว กรุณาตรวจสอบว่าบัญชีและรหัสผ่านที่ป้อนอย่างถูกต้อง',
		'connect_host'=>'กล่องจดหมาย SMTP ข้อผิดพลาดไม่สามารถเชื่อมต่อกับ SMTP โฮสต์ ตรวจสอบว่า SMTP พอร์ตและส่งวิธีการที่ถูกต้อง',
		'data_not_accepted'=>'กล่องจดหมาย SMTP ข้อผิดพลาดไม่มีข้อมูลที่ได้รับการยอมรับ',
		'empty_message'=>'กล่องจดหมายเนื้อหาไม่สามารถว่างเปล่า',
		'encoding'=>'รหัสกล่องจดหมายที่ไม่รู้จัก',
		'execute'=>'กล่องจดหมายไม่สามารถดำเนินการได้',
		'file_access'=>'กล่องจดหมายไม่สามารถเข้าถึงไฟล์',
		'file_open'=>'กล่องจดหมายไม่สามารถเข้าถึงไฟล์',
		'from_failed'=>'ข้อผิดพลาดที่อยู่อีเมล',
		'instantiate'=>'กล่องจดหมายเรียกฟังก์ชันที่ไม่รู้จัก',
		'invalid_email'=>'อีเมลที่ไม่ได้ส่งและที่อยู่อีเมลที่ไม่ถูกต้อง',
		'mailer_not_supported'=>'กล่องจดหมายส่งลูกค้าไม่รองรับ',
		'provide_address'=>'กล่องจดหมายจะต้องให้อย่างน้อยหนึ่งที่อยู่ของผู้รับ',
		'recipients_failed'=>'ข้อผิดพลาด SMTP อีเมลผู้รับที่อยู่ผิดพลาด',
		'signing'=>'ข้อผิดพลาดลายเซ็นอีเมล',
		'smtp_connect_failed'=>'กล่องจดหมาย SMTP การเชื่อมต่อล้มเหลว',
		'smtp_error'=>'กล่องจดหมาย SMTP เซิร์ฟเวอร์ข้อผิดพลาด',
		'variable_set'=>'กล่องจดหมายไม่สามารถตั้งค่าหรือตั้งค่าตัวแปร',
		'nickname_default'=>'ไม่มีชื่อ',
		'describe'=>'เขาเป็นคนขี้เกียจและไม่มีอะไรเหลือ',
		'operation_succeeded'=>'การผ่าตัดสำเร็จ',
		'operation_failed'=>'การผ่าตัดล้มเหลว',
		'currency_name'=>'การชำระเงินดิจิตอล',
		'online_name'=>'การชำระเงินออนไลน์',
		'creditcards'=>'ชำระเงินด้วยบัตรเครดิต',
		'setting_succeeded'=>'ตั้งค่าสำเร็จ'
	],
	'user'=>[
		'accountnot' => 'ไม่มีบัญชี',
		'wrong'=> 'รหัสผ่านหรือบัญชีผิดพลาด',
		'shield'=> 'บัญชีของคุณถูกบล็อก',
		'login'=> 'เข้าสู่ระบบเรียบร้อยแล้ว',
		'email'=> 'อีเมลหมายเลขรูปแบบไม่ถูกต้อง',
		'mobileEmpty'=> 'กรุณากรอกหมายเลขโทรศัพท์มือถือของคุณ',
		'accountEmpty'=> 'กรุณากรอกเลขที่บัญชี',
		'captchaEmpty'=> 'กรุณากรอกรหัสการตรวจสอบ',
		'captchaError'=> 'รหัสการตรวจสอบไม่ถูกต้อง',
		'nicknameEmpty'=> 'ชื่อเล่นไม่สามารถว่างเปล่า',
		'nicknameError'=> 'ชื่อเล่นไม่เกิน',
		'describeError'=> 'หมายเลขลายเซ็นไม่เกิน 255',
		'passwordEmpty'=> 'กรุณากรอกรหัสผ่าน',
		'passwordconfirm'=> 'รหัสผ่านที่แตกต่างกัน',
		'passwordMin'=> 'รหัสผ่านไม่สามารถน้อยกว่า 6',
		'passwordMax'=> 'รหัสผ่าน ไม่เกิน 12',
		'passwordAlphaNum'=>'สามารถป้อนตัวเลขและตัวอักษรภาษาอังกฤษเท่านั้น',
		'tokenEmpty'=> 'คุณยังไม่ได้เข้าสู่ระบบล่า',
		'tokenExpired'=> 'TOKEN หมดอายุแล้ว',
		'tokenError'=> 'การตรวจสอบข้อผิดพลาด',
		'accountBlocked'=> 'บัญชีนี้ถูกบล็อก',
		'notRegister'=> 'ผู้ใช้ยังไม่ได้ลงทะเบียน',
		'emailoccupy'=>'หมายเลขอีเมลที่ลงทะเบียนแล้ว',
		'userregister'=>'ลงทะเบียนผู้ใช้',
		'codeerror'=>'รหัสการตรวจสอบอีเมลข้อผิดพลาด',
		'emailerror'=>'หมายเลขอีเมลที่ลงทะเบียนแล้ว',
		'registersuccess'=>'เข้าสู่ระบบเรียบร้อยแล้ว',
		'unregistered'=>'อีเมลที่ไม่ได้ลงทะเบียน',
		'forgot'=>'ลืมรหัสผ่าน',
		'mobileexistence'=>'หมายเลขโทรศัพท์มือถือนี้ถูกลงทะเบียนแล้ว',
		'mobilesuccess'=>'ผูกพันสำเร็จ',
		'sex'=>'กรุณาเลือกเพศ',
		'pay_paasword_require'=>'รหัสผ่านการชำระเงิน',
		'pay_paasword_length'=>'รหัสผ่านการชำระเงินต้องเป็น 6 หลัก',
		'bindemail'=>'ผูกกล่องจดหมาย',
		'inviteusers'=>'เชิญผู้ใช้',
		'inviteregister'=>'ลงทะเบียน',
		'safetylow'=>'ต่ำ',
		'safetycommonly'=>'ปกติ',
		'safetyhigh'=>'สูง',
		'safetyperfect'=>'สมบูรณ์แบบ',
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
		'money_funds'=>'ขาดเงินทุน',
		'run_game'=>'เริ่มต้นเรียบร้อยแล้วโปรดรอสักครู่',
		'synchronizing_funds'=>'การประสานเงินทุนเสร็จสมบูรณ์',
		'no_funds_synchronized'=>'ไม่สามารถประสานเงินกันได้',
	],
	'order'=>[
		'mobileEmpty'=>'หมายเลขโทรศัพท์ผูกพัน',
		'toolittle'=>'สกุลเงินดิจิตอลมีขนาดเล็กเกินไป',
		'toofast'=>'จ่ายเงินเร็วเกินไปพักผ่อนแล้วกลับมา',
		'ordersuccess'=>'การชำระเงินเรียบร้อยแล้วกรุณารอการอนุมัติของผู้ดูแลระบบ',
		'ordererror'=>'การชำระเงินล้มเหลวโปรดลองอีกครั้ง',
		'placedata'=>'ซื้อเกมเหรียญ',
		'placesuccess'=>'รอสักครู่นะคะ',
		'placeerror'=>'กรุณารอผู้ดูแลระบบเพื่อจัดการกับปัญหาการชำระเงิน',
		'currencyvalue'=>'กรุณาเลือกสกุลเงินที่คุณต้องการเติมเงิน',
		'currencyerror'=>'ขออภัย ธุรกรรมปัจจุบันยังไม่รองรับสกุลเงินนี้',
	],
	'capital'=>[
		'user'=>'ผู้ใช้',
		'content'=>'ผ่านการเติมเงินออนไลน์',
		'money'=>'ดอลลาร์สหรัฐอเมริกา',
		'gamecontento'=>'เล่นเกมส์',
		'gamecontentt'=>'การเพิ่มเงินทุน',
		'gamecontenth'=>'เงินทุนลดลง',
		'gamecontentf'=>'เงินทุนไม่เปลี่ยนแปลง',
	],
	'recharge'=>[
		'digital'=>'USDT/BTC/ETH การชาร์จ',
		'cash'=>'เติมเงิน',
		'Credit'=>'เติมเงินบัตรเครดิต'
	]
);
?>