<script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="css/style.css" />
<title>Sign in & Sign up Form</title>
</head>

<body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <form action="#" class="sign-in-form">
                    <h2 class="title">Sign in</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" class="writeID" id="userID" placeholder="Write your ID" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-passport"></i>
                        <input type="text" class="writeUsername" id="userName" placeholder="Username" />
                    </div>
                </form>


                <form action="" method="post" style="all: unset;" enctype="multipart/form-data">
                    <div class="social-media">
                        <section id="register">
                            <div class="upload-profile-image d-flex justify-content-center pb-5">
                                <div class="text-center">
                                    <div class="icon">
                                        <img src="./assets/profile/beard.png"
                                        class="img rounded-circle" alt="profile">
                                        <input type="file" name="image" class="form-control-file" name="profileUpload"
                                    id="upload-profile">
                                        <img class="camera-icon" src="./assets/camera-solid.svg" alt="camera">
                                    </div>
                                </div>
                            </div>

                            <!-- <p style="margin-left: 24px;">Upload Image</p> -->
                            
                            <div class="button-upload">
                                <button type="submit" class="btn" value="upload" name="btn">Upload</button>
                            </div>
                        </section>
                        <!-- <button type="button " class="btn" onclick="getInfo()">Upload</button> -->
                    </div>
                  </form>
                  
                   <?php
                     if(isset($_POST['btn'])){
                        $image=$_FILES['image']['name']; 
                        $imageArr=explode('.',$image);
                        $rand=rand(10000,99999);
                        $newImageName=$imageArr[0].$rand.'.'.$imageArr[1];
                        $uploadPath="uploads/".$newImageName;
                        $isUploaded=move_uploaded_file($_FILES["image"]["tmp_name"],$uploadPath);
                        if($isUploaded) {
                            echo '<div class="alert">successfully file uploaded</div>';
							//echo "<script>window.alert('po more');</script>";
                        } else {
                            echo '<div class="alert">something went wrong</div>';
                        }
                     }
                   ?>
                <form action="#" class="sign-up-form">
                    <h2 class="title">Sign up</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Username" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="email" placeholder="Email" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Password" />
                    </div>
                    <input type="submit" class="btn" value="Sign up" />
                </form>
            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>New here ?</h3>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis,
                        ex ratione. Aliquid!
                    </p>
                    <button class="btn transparent" id="sign-up-btn">
                        Sign up
                    </button>
                </div>
                <img src="./assets/log.svg" class="image" alt="" />
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>One of us ?</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
                        laboriosam ad deleniti.
                    </p>
                    <button class="btn transparent" id="sign-in-btn">
                        Sign in
                    </button>
                </div>
                <img src="./assets/register.svg" class="image" alt="124" />
            </div>

        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="js/app.js"></script>
</body>