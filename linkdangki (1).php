<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        * {
            margin: 0 auto;
            }
            html,body {
                height: 100%;
            }
            .dangki{
                margin: 0px 0px 0px 20px;
            }
            .full{
                border: 2px solid black; padding:10px;
                text-align: left;
                background-color: lightpink;
                margin: 80px 400px 20px 500px;
                height: 75%;
                display: inline-block;
                max-width: 800px;
                overflow: hidden;
                text-overflow: ellipsis;
                white-space: nowrap;
            }
        
         
    </style>
    <title>Nhóm bán sách</title>
</head>
<body>
    
    <div class="full">
    <h1 style="text-align: center;color:white">TẠO TÀI KHOẢN</h1><br><br><br>
   
    <form class="dangki" name="myForm" onsubmit="return Form()" method="post" action="thongbao.php">
        <label for="text">Họ:</label>
        <input type="text" name="familyname" id="familyname">
        <label for="text">Tên:</label>
        <input type="text" name="name" id="name">
        <br>
        <br>
        <label for="text">Nhập email:</label>
        <input type="text" size="44" name="email" id="email">
        <br>
         <br>
        <label for="fullsex" name="" id="">Giới tính của bạn là:</label>
         <select name="sex" id="sex">
            <option value="1" selected>Click vào để chọn</option>
            <option value="1">Nam</option>
            <option value="1">Nữ</option>
            <option value="1">Khác</option>
         </select>
         <br>
         <br>
         <label for="phone">Số điện thoại:</label>
        <input type="number" name="phonenumber" id="phonenumber">
         <br>
         <br>
         <label for="birthday">Ngày sinh</label>
         <input type="date" name="birthday" id="birthday">
         <br><br>
         <label for="password" id="">Mật khẩu</label>
         <input type="password" name="password" id="password">
         <label for="password" id="">Nhập lại mật khẩu</label>
         <input type="password" name="password" id="passwordconfirm">
         <script>
            function kiemtra(){
                var password=document.getElementById('password').value;
                var passwordconfirm=document.getElementById('passwordconfirm').value;
            if (password!=passwordconfirm){
                alert('Mật khẩu không khớp');
                return false;
            }
           return true;
        }
        function hien(){
            if(kiemtra()){
                alert('Đăng kí thành công');
            window.location.href="/thongbao.php"
            }
        }
            function phaidien(){
                
            }
         </script>
        <br><br>
         <label for="dongy"></label>
         <input type="checkbox" name="confirm" id="confirm">Tôi đồng ý với các điều khoản của các bạn
         <br><br><br>
         <button onclick="hien()" style="background-color:black;color:white;height:30px;width: 120px;text-align: center;" name="signup" type="submit">Đăng kí</button>
         <button type="reset" style="background-color: yellow;height:30px;width: 120px; text-align: center;" name="reset">Làm lại</button>
         
         
    </form>
</div>
</body>
</html>