<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원가입</title>
    <style>
        body{
            margin: 0;
            background: #f2f2f2;
        }
        h1,p{margin: 0;}
        a{text-decoration: none; color: inherit;}
        p{
            margin: 0;
            cursor: pointer;
        }
        ul{
            list-style: none;
            margin: 0;
            padding: 0;
        }
        header{
            width: 100%;
            height: 60px;
            background: #fff;
            position: relative;
            border-bottom: 1px solid #ddd;
        }
        .h_logo{
            width: 160px;
            /* height: 22px; */
            height: 57px;
            position: absolute;
            left: 60px;
            top: 50%;
            transform: translateY(-50%);
        }
        .h_logo img{
            width: 85%;
        }
        .logo_link{
            display: block;
            width: 100%;
            height: 100%;
            background: url(../laneige_img/laneige-logo.png);
        }
        .h_icon{
            height: 100%;
            position: absolute;
            right: 60px;
            top: 50%;
            transform: translateY(-50%);
        }
        .h_icon a{
            display: block;
            float: left;
        }
        .h_icon img{
            padding: 13px;
            padding-left: 0px;
            width: 35px;
            height: 35px;
        }
        nav{
            height: 100%;
            text-align: center;
            /* position: relative; */
        }
        .nav_btn{
            display: inline-block;
            line-height: 60px;
            position: relative; 
        }
        .nav_item{
            float: left;
            padding-left: 20px;
            padding-right: 20px;
            box-sizing: border-box;
            font-size: 16px;
        }
        .nav_item:hover{
            font-weight: bold;
        }
        .nav_bar { 
            height: 3px;
            transition: all 0.5s;

            position: absolute;
            left: 0;
            bottom: 0;
            background: #79a3dc;
        }
        .pan{
            width: 100%;
            height: 0;
            background: #f7f7f7;
            position: absolute;
            left: 0;
            top: 100%;
            transition: all 0.5s;
            overflow: hidden;
            z-index: 9;
        }
        .pan_active {
            height: 480px;
        }
        .pan_container{
            width: 100%;
            max-width: 1200px;
            height: 480px;
            margin: 0 auto;

        }
        .nav_sub_item {
            width: 100%;
            height: 100%;
            display: none;
        }
        .nav_sub_item_active {
            display: block;
            z-index: 9;
        }
        #sub_item1_L{
            width: 60%;
            height: 100%;
            float: left;
        }
        .brand_box{
            width: 150px;
            height: 200px;
            margin-top: 30px;
            margin-left: 300px;
            text-align: initial;
        }
        .brand_box > p{
            margin-bottom: 13px;
            color: #5f5f5f;
        }
        .brand_box > p:hover{
            color: #444444;
            font-weight: 900;
        }
        #sub_item1_R{
            width: 40%;
            height: 100%;
            float: right;
            
            padding: 30px;
            box-sizing: border-box;
        }
        .category_img{
            width: 300px;
            height: 250px;
            cursor: pointer;
            margin-top: 35px;
        }
        .category_img > img{
            width: 100%;
            height: 100%;
        }
        .sub_item > p{
            margin-top: 12px;
            text-align: initial;
            font-size: 15px;
        }
        .sub_item > p:nth-child(2){
            color: #4477be;
            font-weight: 900;
        }
        #sub_item2_L{
            width: 60%;
            height: 100%;
            float: left;
            
        }
        .best_box{
            width: 150px;
            height: 200px;
            margin-top: 30px;
            margin-left: 400px;
            text-align: initial;
        }
        .best_box > p{
            margin-bottom: 13px;
            color: #5f5f5f;
        }
        .best_box > p:hover{
            color: #444444;
            font-weight: 900;
        }
        #sub_item2_R{
            width: 40%;
            height: 100%;
            float: right;
            
            padding: 30px;
            box-sizing: border-box;

        }
        #sub_item3_L{
            width: 70%;
            height: 100%;
            float: left;
            
        }
        .category_menu{
            width: calc(100%/5);
            height: 100%;
            box-sizing: border-box;
            float: left;
            text-align: initial;
            padding: 30px;
        }
        .category_menu p{
            margin-top: 10px;
            color: #5f5f5f;
            font-size: 14px;
        }
        .category_menu p:hover{
            color: #444444;
            font-weight: 900;
        }
        .category_menu1 p:nth-child(1){
            margin-top: 0;
            margin-bottom: 15px;
            font-weight: bold;
            font-size: 1rem;
            color: #2b2b2b;
        }
        .category_menu1 p:nth-child(2){
            margin-bottom: 8px;
            font-weight: bold;
            font-size: 1rem;
            color: #2b2b2b;
        }
        .category_menu1 p:nth-child(6){
            margin-top: 10px;
            font-weight: bold;
            font-size: 1rem;
            color: #2b2b2b;
        }
        .category_menu1 p:nth-child(9){
            margin-top: 10px;
            font-weight: bold;
            font-size: 1rem;
            color: #2b2b2b;
        }
        .category_menu2 p{
            margin-top: 10px;
            color: #5f5f5f;
            font-size: 14px;
        }
        .category_menu2 p:nth-child(1){
            margin-top: 36px;
            margin-bottom: 8px;
            font-weight: bold;
            font-size: 1rem;
            color: #000;
        }
        .category_menu3 p{
            margin-top: 10px;
            color: #5f5f5f;
            font-size: 14px;
        }
        .category_menu3 p:nth-child(1){
            margin-top: 36px;
            margin-bottom: 8px;
            font-weight: bold;
            font-size: 1rem;
            color: #000;
        }
        .category_menu4 p:nth-child(1){
            margin-top: 36px;
            margin-bottom: 8px;
            font-weight: bold;
            font-size: 1rem;
            color: #000;
        }
        .category_menu5 p:nth-child(1){
            margin-top: 36px;
            margin-bottom: 8px;
            font-weight: bold;
            font-size: 1rem;
            color: #000;
        }
        .category_menu5 p:nth-child(5){
            margin-top: 10px;
            font-weight: bold;
            font-size: 1rem;
            color: #2b2b2b;
        }
        #sub_item3_R{
            width: 25%;
            height: 100%;
            float: right;
            
            padding: 30px;
        }
        #sub_item4_L{
            width: 70%;
            height: 100%;
            float: left;
            
        }
        #sub_item4_R{
            width: 25%;
            height: 100%;
            float: right;
            
            padding: 30px;
        }
        #sub_item5_L{
            width: 70%;
            height: 100%;
            float: left;
            
        }
        #sub_item5_R{
            width: 25%;
            height: 100%;
            float: right;
            padding: 30px;
        }
        .wrap{
            width: 100%;
        }
        .header{
            height: 90px;
            border-bottom: 1px solid #dfe2e6;
        }
        .client_info{
            text-align: center;
            margin-top: 50px;
            font-size: 28px;
            font-weight: 800;
        }
        .join_container{
            width: 500px;
            height: auto;
            margin: 0 auto;
            background: #fff;
            padding: 20px 47px;
            margin-top: 30px;
        }
        .text{
            margin-top: 30px;
            margin-bottom: 10px;
        }
        .input_t{
            width: 100%;
            height: 50px;
            box-sizing: border-box;
            padding-left: 15px;
            border: 1px solid #d4d4d4;
            outline: none;
            cursor: pointer;
        }
        .year{
            width: 150px;
            height: 48px;
            padding-left: 15px;
            box-sizing: border-box;
            outline: none;
            border: 1px solid #d4d4d4;
            cursor: pointer;
        }
        .month{
            width: 130px;
            height: 48px;
            padding-left: 15px;
            box-sizing: border-box;
            outline: none;
            border: 1px solid #d4d4d4;
            cursor: pointer;
        }
        .day{
            width: 130px;
            height: 48px;
            padding-left: 15px;
            box-sizing: border-box;
            outline: none;
            border: 1px solid #d4d4d4;
            cursor: pointer;
        }
        .btn{
            margin-top: 30px;
            cursor: pointer;
        }
    </style>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
</head>
<body>
<header>
        <div class="h_logo">
            <a href="index.php">
                <img src="../img/jjlogo.png" alt="logo">
            </a>
        </div>
        <div class="h_icon">
            <a href="login.php">
                <img src="../img/header_account_icon.svg" alt="img">
            </a>
            <a href="#">
                <img src="../img/header_search_icon.svg" alt="search">
            </a>
            <a href="#">
                <img src="../img/header_cart_icon.svg" alt="cart">
            </a>
        </div>
        <nav>
            <div class="nav_btn">
                <div class="nav_item nav_item1"><a href="#">CELEB</a></div>
                <div class="nav_item nav_item1"><a href="#">PRODUCT</a></div>
                <div class="nav_item"><a href="../laneige_html/product.html">&P!CK</a></div>
                <div class="nav_item"><a href="#">META</a></div>
                <div class="nav_item"><a href="ticket.php">TICKET</a></div>
                <div class="nav_item"><a href="#">EVENT</a></div>
                <div class="nav_bar"></div>
            </div>
            <div class="pan">
                <div class="pan_container">
                    <div class="nav_sub_item" id="nav_sub_item1">
                        <div class="sub_item" id="sub_item1_L">
                            <div class="brand_box">
                                <p>BoA</p>
                                <p>TVXQ!</p>
                                <p>SUPER JUNIOR</p>
                                <p>SHINEE</p>
                                <p>fX</p>
                                <p>EXO</p>
                                <p>RED VELVET</p>
                                <p>NCT</p>
                                <p>aespa</p>
                            </div>
                        </div>
                        <div class="sub_item" id="sub_item1_R">
                            <div class="category_img">
                                <img src="../img/celeb.png" alt="celeb">
                            </div>
                        </div>
                    </div>
                    <div class="nav_sub_item" id="nav_sub_item3">
                        <div class="sub_item" id="sub_item3_L">
                            <div class="category_menu category_menu1">
                                <a href="#"><p>전체보기</p></a>
                                <p>MUSIC</p>
                                <p>CD</p>
                                <p>DVD</p>
                                <p>etc.</p>
                                <p class="cate_bold">PHOTO</p>
                                <p>Printed</p>
                                <p>Photo Book</p>
                                <p class="cate_bold">CONCERT</p>
                                <p>Official Fanlight</p>
                                <p>Concert Goods</p>
                            </div>
                            <div class="category_menu category_menu2">
                                <p>LIVING</p>
                                <p>Home</p>
                                <p>Kitchen</p>
                                <p>Tech</p>
                                <p>Book</p>
                                <p>Pet</p>
                            </div>
                            <div class="category_menu category_menu3">
                                <p>BEAUTY</p>
                                <p>Skin Care</p>
                                <p>Make Up</p>
                                <p>Cleansing</p>
                                <p>Body & Hair</p>
                                <p>Pack & Masks</p>
                                <p>Perfume</p>
                                <p>Tool</p>
                                <p>Men’s</p>
                            </div>
                            <div class="category_menu category_menu4">
                                <p>STATIONERY</p>
                                <p>Note</p>
                                <p>Office</p>
                                <p>Pen</p>
                                <p>Deco</p>
                                <p>Binder</p>
                                <p>Toy</p>
                            </div>
                            <div class="category_menu category_menu5">
                                <p>FASHION</p>
                                <p>Clothing</p>
                                <p>Acc</p>
                                <p>Jewelry</p>
                                <p>CUSTOMIZING</p>
                                <p>Phone Case</p>
                                <p>Fashion</p>
                                <p>Acc</p>
                            </div>
                        </div>
                        <div class="sub_item" id="sub_item3_R">
                            <div class="category_img">
                                <img src="../img/celeb2.png" alt="celeb">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <div class="wrap">
        <div class="join_container" >
            <p class="client_info">회원정보 입력</p>
            <form action="joinMemberSave.php" method="post" name="signup">
                <p class="text">아이디</p>
                <input type="text" name="userID" id="userID" class="input_t" placeholder="아이디를 입력해 주세요" required>
                <p class="text">비밀번호</p>
                <input type="password" name="userPWD" id="userPWD" class="input_t" placeholder="비밀번호를 입력해 주세요" required>
                <p class="text">이름</p>
                <input type="text" name="userName" id="userName" class="input_t" placeholder="이름을 입력해 주세요" required>
                <p class="text">생년월일</p>
                <select name="birthYear" class="year" required>
                    <?php
                        $thisYear = date('Y', time());
                        for($i=1930; $i<=$thisYear; $i++){
                            echo "<option value='{$i}'>{$i}</option>";
                        }
                    ?>
                </select>년
                <select name="birthMonth" class="month" required>
                    <?php
                        for($i=1; $i<=12; $i++){
                            echo "<option value='{$i}'>{$i}</option>";
                        }
                    ?>
                </select>월
                <select name="birthDay" class="day" required>
                    <?php
                        for($i=1; $i<=31; $i++){
                            echo "<option value='{$i}'>{$i}</option>";
                        }
                    ?>
                </select>일<br/>
                <p class="text">이메일</p>
                <input type="email" name="userEmail" id="userEmail" class="input_t" placeholder="이메일을 입력해 주세요" required>
                <input type="submit" value="가입 완료하기" class="input_t btn"/>
            </form>
        </div>
    </div>
    <script>
    $(document).ready(function(){
        $('.nav_item1, .pan').mouseenter(function(){
            $('.pan').addClass('pan_active');
        });
        $('.nav_item1, .pan').mouseleave(function(){
            $('.pan').removeClass('pan_active')
        });
        $('.nav_item1').mouseenter(function(){
            $('.nav_sub_item').removeClass('nav_sub_item_active');
            $('.nav_sub_item').eq($(this).index()).addClass('nav_sub_item_active');
        });
        
        // $('.bar').css({
        //     width: $('.menu').eq(0).innerWidth()    
        // })
        
        $('.nav_item').mouseover(function(){
            let tmp_width = $(this).innerWidth();
            let over_left = $(this).offset().left;
            let over_nav_ul = $('.nav_btn').offset().left;
            console.log(tmp_width,over_left,over_nav_ul)
        
            $('.nav_bar').css({
                left: over_left - over_nav_ul,
                width: tmp_width
            
            })
        });
        
        $('.nav_item').mouseout(function(){
            $('.nav_bar').css({
                width: 0
            })
        })
    })
    </script>
</body>
</html>
