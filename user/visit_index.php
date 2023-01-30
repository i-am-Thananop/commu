<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Community Minecraft</title>
    <link href="../asset/css/bootstrap.min.css" rel="stylesheet">
    <link href="../asset/css/docs.css" rel="stylesheet">
    <script src="../asset/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <?php include('../includes/header_visit.php'); ?>
    <?php 
            include('connection.php');
            
            $sql = "SELECT * FROM posts INNER JOIN users ON posts.USERID = users.USERID
            GROUP BY POSTID DESC";
            $query = mysqli_query($conn, $sql);
            while($result = mysqli_fetch_array($query)){?>
            <br>
        <div class="container">
        <div class="row">
            <div class="col-lg-8 m-auto">
                <!-- การสร้าง Carousel -->
                <div class="carousel slide" id="slider1" data-bs-ride="carousel">
                        <ol class="carousel-indicators">
                            <button  data-bs-target="#slider1" data-bs-slide-to="0"></button>
                            <button  data-bs-target="#slider1" data-bs-slide-to="1"></button>
                            <button  class="active" data-bs-target="#slider1" data-bs-slide-to="2"></button>
                            <button  data-bs-target="#slider1" data-bs-slide-to="3"></button>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item">
                                <img src="../asset/uploads/<?php echo $result['PIMAGES1']; ?>" class="d-block w-100">
                                <div class="carousel-caption d-none d-md-block">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="../asset/uploads/<?php echo $result['PIMAGES2']; ?>" class="d-block w-100">
                                <div class="carousel-caption d-none d-md-block">
                                </div>
                            </div>
                            <div class="carousel-item active">
                                <img src="../asset/uploads/<?php echo $result['PIMAGES3']; ?>" class="d-block w-100">
                                <div class="carousel-caption d-none d-md-block">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="../asset/uploads/<?php echo $result['PIMAGES4']; ?>" class="d-block w-100">
                                <div class="carousel-caption d-none d-md-block">
                                </div>
                            </div>
                        </div>
                        <!-- ควบคุมการ Slide ผ่านปุ่ม -->
                        <button class="carousel-control-prev" data-bs-slide="prev" data-bs-target="#slider1">
                            <span class="carousel-control-prev-icon"></span>
                        </button>
                        <button class="carousel-control-next" data-bs-slide="next" data-bs-target="#slider1">
                            <span class="carousel-control-next-icon"></span>
                        </button>
                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-8 ">
                <div class="shadow p-3 mb-5 bg-white rounded" style="">
                <div class="card-body p-5 text-left">
                    <button class="btn btn-success" 
                    data-bs-toggle="collapse"
                    data-bs-target="#collapse-content">ดูข้อมูลเพิ่มเติม</button>  
                    <br>
                        <div id="collapse-content" class="collapse my-2">
                            <div class="card">
                                <div class="card-body">
                                    <div class="p-3 p-md-4 border rounded-3 icon-demo-examples">
                                        <div class="fs-2 mb-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-archive" viewBox="0 0 16 16">
                                            <path d="M0 2a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1v7.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 12.5V5a1 1 0 0 1-1-1V2zm2 3v7.5A1.5 1.5 0 0 0 3.5 14h9a1.5 1.5 0 0 0 1.5-1.5V5H2zm13-3H1v2h14V2zM5 7.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
                                        </svg>
                                        <?php echo $result['TITLE']; ?>
                                        </div>   
                                        <div class="fs-2 mb-3">
                                        <div class="col-6">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon3">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-globe" viewBox="0 0 16 16">
                                                    <path d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm7.5-6.923c-.67.204-1.335.82-1.887 1.855A7.97 7.97 0 0 0 5.145 4H7.5V1.077zM4.09 4a9.267 9.267 0 0 1 .64-1.539 6.7 6.7 0 0 1 .597-.933A7.025 7.025 0 0 0 2.255 4H4.09zm-.582 3.5c.03-.877.138-1.718.312-2.5H1.674a6.958 6.958 0 0 0-.656 2.5h2.49zM4.847 5a12.5 12.5 0 0 0-.338 2.5H7.5V5H4.847zM8.5 5v2.5h2.99a12.495 12.495 0 0 0-.337-2.5H8.5zM4.51 8.5a12.5 12.5 0 0 0 .337 2.5H7.5V8.5H4.51zm3.99 0V11h2.653c.187-.765.306-1.608.338-2.5H8.5zM5.145 12c.138.386.295.744.468 1.068.552 1.035 1.218 1.65 1.887 1.855V12H5.145zm.182 2.472a6.696 6.696 0 0 1-.597-.933A9.268 9.268 0 0 1 4.09 12H2.255a7.024 7.024 0 0 0 3.072 2.472zM3.82 11a13.652 13.652 0 0 1-.312-2.5h-2.49c.062.89.291 1.733.656 2.5H3.82zm6.853 3.472A7.024 7.024 0 0 0 13.745 12H11.91a9.27 9.27 0 0 1-.64 1.539 6.688 6.688 0 0 1-.597.933zM8.5 12v2.923c.67-.204 1.335-.82 1.887-1.855.173-.324.33-.682.468-1.068H8.5zm3.68-1h2.146c.365-.767.594-1.61.656-2.5h-2.49a13.65 13.65 0 0 1-.312 2.5zm2.802-3.5a6.959 6.959 0 0 0-.656-2.5H12.18c.174.782.282 1.623.312 2.5h2.49zM11.27 2.461c.247.464.462.98.64 1.539h1.835a7.024 7.024 0 0 0-3.072-2.472c.218.284.418.598.597.933zM10.855 4a7.966 7.966 0 0 0-.468-1.068C9.835 1.897 9.17 1.282 8.5 1.077V4h2.355z"/>
                                                </svg>
                                                &nbsp;
                                                IP Sever : 
                                            </span>
                                            <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" value=<?php echo $result['DETAIL']; ?>>
                                        </div>
                                        </div>
                                        <h5><b>คำอธิบาย</b></h5>
                                        <div class="fs-2 mb-3"><h6>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-airplane-engines" viewBox="0 0 16 16">
                                                <path d="M8 0c-.787 0-1.292.592-1.572 1.151A4.347 4.347 0 0 0 6 3v3.691l-2 1V7.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.191l-1.17.585A1.5 1.5 0 0 0 0 10.618V12a.5.5 0 0 0 .582.493l1.631-.272.313.937a.5.5 0 0 0 .948 0l.405-1.214 2.21-.369.375 2.253-1.318 1.318A.5.5 0 0 0 5.5 16h5a.5.5 0 0 0 .354-.854l-1.318-1.318.375-2.253 2.21.369.405 1.214a.5.5 0 0 0 .948 0l.313-.937 1.63.272A.5.5 0 0 0 16 12v-1.382a1.5 1.5 0 0 0-.83-1.342L14 8.691V7.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v.191l-2-1V3c0-.568-.14-1.271-.428-1.849C9.292.591 8.787 0 8 0ZM7 3c0-.432.11-.979.322-1.401C7.542 1.159 7.787 1 8 1c.213 0 .458.158.678.599C8.889 2.02 9 2.569 9 3v4a.5.5 0 0 0 .276.447l5.448 2.724a.5.5 0 0 1 .276.447v.792l-5.418-.903a.5.5 0 0 0-.575.41l-.5 3a.5.5 0 0 0 .14.437l.646.646H6.707l.647-.646a.5.5 0 0 0 .14-.436l-.5-3a.5.5 0 0 0-.576-.411L1 11.41v-.792a.5.5 0 0 1 .276-.447l5.448-2.724A.5.5 0 0 0 7 7V3Z"/>
                                            </svg>
                                            &nbsp;&nbsp;1.19.2
                                        </h6></div>
                                        <div class="fs-2 mb-3"><h6>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-credit-card-2-front" viewBox="0 0 16 16">
                                            <path d="M14 3a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h12zM2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2z"/>
                                            <path d="M2 5.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1zm0 3a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5z"/>
                                        </svg>
                                            &nbsp;&nbsp;เปิดซีซันใหม่ ไม่มียศบิน เศรษฐกิจสมดุล<br>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ไอเทมมีสกิลหลากหลาย ✅ จำเป็นต้องสวมใส่รีซอสแพคทุกครั้ง<br>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;เงินหายาก มีอะไรให้ทำหลากหลาย
                                        </h6></div>
                                        <h5><b>รายละเอียดเซิร์ฟเวอร์</b></h5>
                                        <!-- <h6>1f352.png ระบบปลูกพืชชนิดใหม่<br>
                                        1f433.png ระบบตกปลาแบบใหม่<br>
                                        ⭐ ระบบอัพเกรดดาว ( ปลดล๊อคความสามารถ )<br>
                                        ‍♂ ระบบคราฟของใน ดันเจี้ยน , บอส<br>
                                        1f6d2.png ระบบร้านค้าแบบ ( Demand Supply ) ราคาขึ้นลงตามความต้องการ<br>
                                        ‍ ระบบอาชีพ ( Jobs )<br>
                                        ⚔ ระบบอัพเกรดสกิล ( Skill )<br>
                                        1f9f8.png ไอเทมแฟชั่นหลากหลาย<br>
                                        1f3a4.png ระบบ Voice Chat ( เปิดไมค์คุยในเกมส์ ) ( Mod )<br>
                                        1f3ae.png รูปแบบไอเทม มีสกิลและ ไม่เหมือนใครแตกต่าง หลากหลาย<br>
                                        1f6c0.png ร้านเฟอร์นิเจอร์มีให้เลือกหลากหลาย<br>
                                        1f3db.png ระบบธนาคารฝากเงินได้ดอกเบี้ย %<br>
                                        1f4b0.png ระบบตลาดผู้เล่น และ ผู้เล่นเปิดร้านค้าตัวเองได้<br>
                                        ‍♂ ระบบฉายา ( Tags หน้าชื่อ )<br>
                                        1fa85.png ระบบสัตว์เลี้ยงรูปแบบใหม่<br>
                                        1f9d9.png แชทสีในช่องแชท<br>
                                        ⛳ ระบบกิลด์ ( ชุมชนผู้เล่น )<br>
                                        1f308.png ระบบพืชตามฤดูกาล<br>
                                        1f344.png ระบบวาดรูปในเกมส์ ( PixelArt )<br>
                                        ⚠ เล่นได้เฉพาะประเทศไทย ( ต่างประเทศไม่สามารถเข้าได้ )<br>
                                        ⚠ ยังไม่รองรับเวอร์ชั่น PE ( โทรศัพท์ )</h6> -->
                                        <h6><?php echo $result['DES']; ?></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                </div>
            </div>
        </div>
        </div>
    </div><?php } ?>
</body>
</html>