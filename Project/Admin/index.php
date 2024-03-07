<?php
$connection = mysqli_connect("localhost","root","","herbs") or die ("connection error");
session_start();
error_reporting(0);

if ($_SESSION['loginid'] != "") {
    header("location:viewslider.php");
}

if (isset($_POST['login'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];

    $select = "SELECT * FROM logindatadashbord WHERE Email = '$email' and password = '$password'";
    $ex = mysqli_query($connection,$select);
    $collect = mysqli_num_rows($ex);
    $fetchinfo = mysqli_fetch_assoc($ex);

    
    // $message = "";
   if($collect==1){
    $_SESSION['loginid'] = $fetchinfo['id'];
    header('location:viewslider.php');

   }
   else{
    $message = "Email and password Incorrect";
   }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .custom-form {
            width: 400px !important;
        }
    </style>
</head>

<body class="bg-gray-300">
    <div class="min-h-screen flex items-center justify-center">
        <form action="" method="post" class="custom-form">
            <div class="bg-white shadow-lg rounded-lg p-6 w-full max-w-md">
                <div class="flex items-center justify-center">
                    <img src="https://source.unsplash.com/random/200x200" alt="Unsplash Photo" class="w-20 h-20 rounded-full">
                </div>
                <div class="mt-4">
                    <p class="text-red-700"><?php echo $message ?></p>
                    <label for="email" class="block text-gray-700 font-bold mb-2">Email</label>
                    <input type="email" id="email" name="email" class="w-full px-3 py-2 border rounded-lg text-gray-700 focus:outline-none focus:border-blue-500" placeholder="Enter your email">
                    <p class="text-gray-500 mt-2 ps-2 text-xs ">We'll never share your email with anyone else.</p>
                </div>

                <div class="mt-4">
                    <div class="form-group bg-white-700 flex items-center"> <!-- Use flex to align items horizontally -->
                        <input type="password" class=" py-2 form-control w-full" name="password" placeholder="Password" required id="password-input">
                        <span class="password-toggle-icon cursor-pointer ml-2" id="password-toggle">&#x1F441;</span>
                    </div>
                </div>



                <div class="mt-4">
                    <label for="remember" class="flex items-center">
                        <input type="checkbox" value="remember" id="remember" name="remember" class="mr-2">
                        <span class="text-gray-700">Remember Me</span>
                    </label>
                </div>

                <div class="mt-6">
                    <button id="login-btn" class="w-full px-4 py-2 text-white bg-blue-500 rounded-lg hover:bg-blue-600 focus:outline-none " name="login">
                        Login
                    </button>
                </div>

                <p class="text-center mt-3">Create new Account <a href="index.php" class="text-warning">Sign In</a></p>
            </div>
        </form>
    </div>
</body>
<script>
    const emailInput = document.getElementById('email');
    const passwordInput = document.getElementById('password-input'); // Use 'password-input' as the ID
    const passwordToggle = document.getElementById('password-toggle');

    passwordToggle.addEventListener('click', function() {
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            passwordToggle.innerText = '🙈';
        } else {
            passwordInput.type = 'password';
            passwordToggle.innerText = '👁️';
        }
    });

    // Rest of your code...
</script>

</html>