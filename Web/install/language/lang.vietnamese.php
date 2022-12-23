// Author Notes:
// This file has been translated from 'English' to Vietnamese by decongamco from www.amxbans.de.

// This is the General Language File

<?php
//encoding and locale
define("_ENCODING","utf-8"); //ISO-8859-1,utf-8

define("_INSTALLATION","Cài đặt");
define("_STEP","Bước");
define("_STEP1","Bắt đầu");
define("_STEP2","Thông tin");
define("_STEP3","Thư mục");
define("_STEP4","Cơ sở dữ liệu");
define("_STEP5","Người quản lý");
define("_STEP6","Tổng kết");
define("_STEP7","Kết thúc");

define("_OF","của");
define("_NEXT","tiếp theo");
define("_BACK","quay lại");
define("_DIRCHECK","Kiểm tra thư mục");

//step1
define("_WELCOME","Chào mừng bạn tới trang cài đặt AMXBans.");
define("_WELCOME2","Phần này sẽ giúp bạn trong suốt quá trình cài đặt");
define("_LICENSEAGREE","Tôi chấp nhận các điều khoản đưa ra");

//step2
define("_STEP2DESC","Thông tin thiết lập máy chủ");
define("_SERVERSETUP","Thiết lập máy chủ");
define("_REFRESH","Làm mới lại");
define("_VERSION","Phiên bản");
define("_ON","Mở");
define("_OFF","Tắt");
define("_SEC","Giây");
define("_SETRECOMMENDED","Những thiết lập nên dùng");
define("_SETNOTRECOMMENDED","không khuyến khích sử dụng, nhưng nó vẫn có thể hoạt động");

//step3
define("_STEP3DESC","Đang lấy thông tin thư mục");
define("_STEP3DESC2","Bình thường, mã này sẽ dò đường dẫn của mã 1 cách tự động");
define("_DIRROOT","Đường dẫn gốc");
define("_DIRDOCUMENT","Đường dẫn URL");
define("_RECHECK","Kiểm tra lại");
define("_ROOTDIRS","Thư mục máy chủ");
define("_OK","Đồng ý");
define("_NOTWRITABLE","Thư mục này không thể ghi, hãy chọn đúng!");
define("_SETUPNOTDELETABLE","Hãy xóa tệp tin setup.php sau khi cài đặt!");

//step4
define("_STEP4DESC","Đang lấy thông tin cơ sở dữ liệu");
define("_DBSETTINGS","Thiết lập cơ sở dữ liệu");
define("_DBCHECK","Kiểm tra dữ liệu truy cập");
define("_CANTCONNECT","Dữ liệu truy cập sai!");
define("_CANTSELECTDB","Cơ sở dữ liệu không tìm thấy!");
define("_DBOK","Truy cập dữ liệu thành công!");
define("_DBPREVILEGES","Quyền sử dụng cơ sở dữ liệu của người dùng");
define("_HOST","Host");
define("_USER","Tên đăng nhập");
define("_PASSWORD","Mật khẩu");
define("_DATABASE","Cơ sở dữ liệu");
define("_TBLPREFIX","Tên đầu của bảng");
define("_NOTALLPREVILEGES","Người dùng không có các quyền hạn cần thiết!");
define("_PREFIXEXISTSV5","Không thể cập nhật dữ liệu vì không tìm thấy cài đặt nào!");
define("_PREFIXEXISTSV6","Cài đặt tồn tại, và sẽ được cập nhật bây giờ!");

//step5
define("_STEP5DESC","Tạo người quản lý trang web đầu tiên");
define("_ADMINSETTINGS","Dữ liệu người quản trị được truy cập");
define("_PASSWORD2","Gõ lại mật khẩu");
define("_EMAILADR","Địa chỉ Email");
define("_ADMINCHECK","Kiểm tra dữ liệu");
define("_PWNOCONFIRM","Mật khẩu không khớp!");
define("_NOREQUIREDFIELDS","Những ô bắt buộc chưa được điền!");
define("_ADMINOK","Dữ liệu quản lý đã ổn!");
define("_USERTOSHORT","Tên đăng nhập quá ngắn (nhỏ nhất 4 kí tự)!");
define("_PWTOSHORT","Mật khẩu quá ngắn(nhỏ nhất 4 kí tự)!");
define("_NOVALIDEMAIL","Địa chỉ E-mail ko đúng!");

//step6
define("_STEP6DESC","Tổng kết dữ liệu thu được");
define("_STEP6DESC2","AMXBans đã được cài đặt với những dữ liệu sau");

//step7
define("_STEP7DESC","Quá trình cài đặt");
define("_TABLECREATE","Đang tạo cấu trúc bảng");
define("_DEFAULTDATACREATE","Điền dữ liệu được yêu cầu");
define("_DEFAULTWEBSETTINGSCREATE","Điền thiết lập");
define("_DEFAULTUSERMENUCREATE","Thiết lập menu người dùng");
define("_DEFAULTMODULESCREATE","Cài đặt chức năng");
define("_WEBADMINCREATE","Tạo quản lý trang web");
define("_ALREADYEXISTS","đã tồn tại");
define("_CREATED","đã tạo thành công");
define("_FAILED","thất bại");
define("_INSERTED","đăng kí thành công");
define("_CREATEWEBADMIN","Dữ liệu quản lý trang web");
define("_CREATEUSERLEVEL","Cấp độ quản lý trang web");
define("_CREATEWEBSETTINGS","Website");
define("_CREATEUSERMENU","Menu người dùng");
define("_FILEEXISTS","Cấu hình đã tồn tại!");
define("_FILEOPENERROR","Cấu hình không được tạo!");
define("_FILESUCCESS","Cấu hình đã được tạo!");
define("_MANUALEDIT","Mở /include/db.config.inc.php và copy & paste vào đây:");
define("_SETUPENDDESC","Tệp tin setup.php sẽ bị xóa ngay bây giờ và bạn sẽ được chuyển sang AMXBans!");
define("_SETUPEND","Tới AMXBans...");
?>