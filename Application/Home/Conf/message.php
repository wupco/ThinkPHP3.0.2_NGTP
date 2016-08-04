<?php

$errorinfo = array(
    array('id' => '-1', 'text' => L('SESSION_INVALID')),
    array('id' => '-2', 'text' => L('ERROR_COMM_XML')),
    array('id' => '-100', 'text' => L('ERROR_COMM_BASE')),
    array('id' => '-101', 'text' => L('ERROR_COMM_SYSERR')),
    array('id' => '-102', 'text' => L('ERROR_COMM_PARAM')),
    array('id' => '-103', 'text' => L('ERROR_COMM_TIMEOUT')),
//    array('id' => '-104', 'text' => L('ERROR_COMM_RECV_MSG')),
    array('id' => '-104', 'text' => L('ERROR_COMM_BASE')),
    array('id' => '-105', 'text' => L('ERROR_COMM_MEM')),
    array('id' => '-106', 'text' => L('ERROR_COMM_SEND_MSG')),
    array('id' => '-107', 'text' => L('ERROR_COMM_MAPPING')),
    array('id' => '-200', 'text' => L('EXT_ERR')),
    array('id' => '-202', 'text' => L('EXT_PARAMETER_ERR')),
    array('id' => '-205', 'text' => L('EXT_MEMORY_ERR')),
    array('id' => '1000', 'text' => L('NEED_MODIFY_PASS')),
    array('id' => '0', 'text' => L('AUTH_SUCCESS')),
//    array('id' => '-3001', 'text' => '认证失败'),
//    array('id' => '-3002', 'text' => '获取权限模板失败'),
//    array('id' => '-3003', 'text' => '用户名太长'),
//    array('id' => '-3004', 'text' => '密码太长'),
//    array('id' => '-3005', 'text' => '认证参数错误'),
//    array('id' => '-3006', 'text' => '获取信息错误'),
//    array('id' => '-3007', 'text' => '密码错误'),
//    array('id' => '-3008', 'text' => '账号已锁定'),
//    array('id' => '-3009', 'text' => '认证信息错误'),
//    array('id' => '-3010', 'text' => '该账号登录次数已达到上限'),
//    array('id' => '-3011', 'text' => '管理员登录达到上限'),
//    array('id' => '-3012', 'text' => '超出该方式管理员数量'),
//    array('id' => '-3013', 'text' => '虚系统功能关闭'),
//    array('id' => '-3014', 'text' => '虚系统不存在'),
//    array('id' => '-3015', 'text' => '管理员账号失效'),
//    array('id' => '-3016', 'text' => '管理员不存在'),
//    array('id' => '-102501', 'text' => '管理员已满'),
//    array('id' => '-102502', 'text' => ' 管理员不存在'),
//    array('id' => '-102503', 'text' => '管理员名称过长'),
//    array('id' => '-102504', 'text' => '管理员已经存在'),
//    array('id' => '-102505', 'text' => '密码长度过长'),
//    array('id' => '-102506', 'text' => '密码长度过短'),
//    array('id' => '-102507', 'text' => '管理员描述长度过长'),
//    array('id' => '-102508', 'text' => '预置管理员不能删除'),
//    array('id' => '-102509', 'text' => '管理员没有操作权限'),
//    array('id' => '-102510', 'text' => '管理员增加失败'),
//    array('id' => '-102511', 'text' => '两次输入的口令不匹配'),
//    array('id' => '-102512', 'text' => '新旧口令一致'),
//    array('id' => '-102513', 'text' => '预置管理员不能修改'),
//    array('id' => '-102514', 'text' => '虚系统不存在'),
//    array('id' => '-102515', 'text' => '口令应该包含大写字母'),
//    array('id' => '-102516', 'text' => '口令应该包含小写字母'),
//    array('id' => '-102517', 'text' => '口令应该包含数字'),
//    array('id' => '-102518', 'text' => '口令应该包含特殊字符'),
//    array('id' => '-102519', 'text' => '口令包含了用户名'),
//    array('id' => '-102520', 'text' => '口令包含了注释'),
//    array('id' => '-102521', 'text' => '口令包含了邮箱地址'),
//    array('id' => '-102522', 'text' => '口令包含了电话号码')
);


/*
 * 后台错误信息
    #define TOS_AUTH_FAIL                               -3001       {"Unexpected login.",  "认证失败"},
    #define TOS_GET_PRIVILEGE_FAIL                      -3002       {"User no privilege.", 	"获取私有信息失败"},
    #define TOS_AUTH_ADMIN_NAME_TOO_LONG		-3003       {"User Name is too long", 	"管理员名称过长"},
    #define TOS_AUTH_ADMIN_PASSWD_TOO_LONG		-3004       {"User Passwd too long", 	"管理员密码过长"},
    #define TOS_AUTH_ADMIN_ARG_ERR			-3005       {"Bad argument", 	"参数错误"},
    #define TOS_AUTH_GET_INFO_ERR			-3006       {"Request handle error.", 	"获取信息错误"},
    #define TOS_PASSWORD_ERR				-3007       {"Incorrect password.", 	"密码错误"},
    #define TOS_AUTH_ACCOUNT_LOCKED			-3008       {"Account locked, try later.", 	"账户被锁定,请稍后重试"}, 	
    #define TOS_AUTH_INFO_ERR				-3009       {"Failt to get admin info", 	"管理员信息错误"},
    #define TOS_AUTH_SAME_ACCOUNT_LOGON_EXCEED		-3010       {"Login exceed limit[1].", 	"相同管理员登录数超过限制"},
    #define TOS_AUTH_ADMIN_LOGON_EXCEED			-3011       {"Login exceed limit[2].", 	"管理员登录数超过限制"},
    #define TOS_AUTH_ADMIN_LOGON_TYPE_EXCEED		-3012       {"Login exceed limit[3].", 	"该登录方式管理员登录数超过限制"},
    #define TOS_AUTH_ADMIN_VSYS_FUN_TURN_OFF		-3013       {"vsys is off", 	"虚系统已关闭"},
    #define TOS_AUTH_ADMIN_VSYS_NOT_EXIST               -3014       {"vsys not exit", 	"虚系统不存在"},
    #define TOS_AUTH_ADMIN_ACCOUNT_STATUS_INVALID       -3015       {"manager was forbiden by administrator.", 	"该管理员已被禁用"},
    #define TOS_AUTH_ADMIN_NOT_EXIST			-3016       {"User not exist.", 	"管理员不存在"},
    #define TOS_AUTH_ADMIN_NO_PRIVILEGE                 -3017       {"The user needs to be assigned permissions.", "管理员需要赋予权限"},
    #define TOS_AUTH_ADMIN_MODIFY_SAME_PASSWORD         -3018       {"The new and old password is the same.", "新密码和老密码是一样的"},
    #define TOS_AUTH_ADMIN_MODIFY_FAILD                 -3019       {"Fail to change new Password.", "修改新密码失败"},
    #define TOS_AUTH_ADMIN_MODIFY_SIMPLE                -3020       {"The password is too low complexity.", "密码复杂度太低"},
    #define TOS_LOGIN_TYPE_UNKNOWN			-3021       {"User login type unknown.", "未知的登录类型"},
    #define TOS_CFG_FILE_IS_BAD				-3022       {"Config file is bad.", "数据文件损坏"},
    #define TOS_CFG_FILE_NOT_COMPATIBLE			-3023       {"Version incompatible.", "文件版本不兼容"}
*/