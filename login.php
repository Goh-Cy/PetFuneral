<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="css/login.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

</head>

<body>
    <div class="wrapper">
        <div class="content">
            <div class="left-side">
                <!-- <img src="img/logo.png" alt="logo" class="logo"> -->
                <img src="img/pet.jpg" alt="photo">
            </div>
            <div class="right-side">
                <div class="login-form">
                    <img src="img/logo.png" alt="logo" class="logo">
                    <h2>Log in to your Account </h2>
                    <form class="login" id="login" name="login" method="post" action="post-login.php">
                        <div class="form-group">
                            <label for="username">Username:</label>
                            <input type="text" id="username" placeholder="Enter username" name="username" required>
                            <div class="error"></div>
                        </div>
                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="password" id="password" placeholder="Enter password" name="password" required>
                            <div class="error"></div>
                        </div>
                        <button type="submit" name="btnSubmit" value="submit">Login</button>
                        <div class="social-login">
                            <div class="other-method">
                                <span class="or-text">Or log in with:</span>
                            </div>
                            <div class="social-icons">
                                <div class="facebook-container">
                                    <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="48px"
                                            height="48px">
                                            <linearGradient id="awSgIinfw5_FS5MLHI~A9a" x1="6.228" x2="42.077"
                                                y1="4.896" y2="43.432" gradientUnits="userSpaceOnUse">
                                                <stop offset="0" stop-color="#0d61a9" />
                                                <stop offset="1" stop-color="#16528c" />
                                            </linearGradient>
                                            <path fill="url(#awSgIinfw5_FS5MLHI~A9a)"
                                                d="M42,40c0,1.105-0.895,2-2,2H8c-1.105,0-2-0.895-2-2V8c0-1.105,0.895-2,2-2h32 c1.105,0,2,0.895,2,2V40z" />
                                            <path
                                                d="M25,38V27h-4v-6h4v-2.138c0-5.042,2.666-7.818,7.505-7.818c1.995,0,3.077,0.14,3.598,0.208 l0.858,0.111L37,12.224L37,17h-3.635C32.237,17,32,18.378,32,19.535V21h4.723l-0.928,6H32v11H25z"
                                                opacity=".05" />
                                            <path
                                                d="M25.5,37.5v-11h-4v-5h4v-2.638c0-4.788,2.422-7.318,7.005-7.318c1.971,0,3.03,0.138,3.54,0.204 l0.436,0.057l0.02,0.442V16.5h-3.135c-1.623,0-1.865,1.901-1.865,3.035V21.5h4.64l-0.773,5H31.5v11H25.5z"
                                                opacity=".07" />
                                            <path fill="#fff"
                                                d="M33.365,16H36v-3.754c-0.492-0.064-1.531-0.203-3.495-0.203c-4.101,0-6.505,2.08-6.505,6.819V22h-4v4 h4v11h5V26h3.938l0.618-4H31v-2.465C31,17.661,31.612,16,33.365,16z" />
                                        </svg>
                                        Facebook</a>
                                </div>
                                <div class="google-container">
                                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="48px"
                                            height="48px">
                                            <path fill="#FFC107"
                                                d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12c0-6.627,5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24c0,11.045,8.955,20,20,20c11.045,0,20-8.955,20-20C44,22.659,43.862,21.35,43.611,20.083z" />
                                            <path fill="#FF3D00"
                                                d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z" />
                                            <path fill="#4CAF50"
                                                d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025C9.505,39.556,16.227,44,24,44z" />
                                            <path fill="#1976D2"
                                                d="M43.611,20.083H42V20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.571c0.001-0.001,0.002-0.001,0.003-0.002l6.19,5.238C36.971,39.205,44,34,44,24C44,22.659,43.862,21.35,43.611,20.083z" />
                                        </svg>
                                        Google</a>
                                </div>
                            </div>
                            <div class="log-click">
                                <p>Create an account? <a href="register.php">Sign up</a>.</p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="validationLog.js"></script>
</body>
</html>
