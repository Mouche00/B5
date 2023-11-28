<?php

include("../controllers/userController.php");


if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST["username"];
    $pw = password_hash($_POST["pw"],PASSWORD_BCRYPT);


    $loggingUser = new UserController();
    $loggingUser->login($username,$pw);
}






?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body class="bg-gradient-to-r from-indigo-950 to-purple-800 h-screen">
     <form method="post" class="flex flex-col gap-[2rem] w-[40%] mx-auto h-[90vh] justify-center ">
        <h1 class="text-center text-[1.75rem] text-amber-300 font-semibold">Login Page</h1>
        <div class="flex flex-col gap-[1rem] text-zinc-300 w-[50%] mx-auto">
            <input type="text" name="username" placeholder="Enter Your Username" class="rounded-lg  py-[0.35rem] px-[0.45rem]  bg-zinc-300 color-black  focus:outline-none text-indigo-800 font-medium placeholder:text-indigo-800 font-medium">
        </div>
        <div  class="flex flex-col gap-[0.75rem] text-zinc-300 w-[50%] mx-auto">
            <input type="password"  placeholder="Enter Your Password" name="pw" class="rounded-lg  py-[0.35rem] px-[0.45rem]  bg-zinc-300 color-black  focus:outline-none text-indigo-800 font-medium placeholder:text-indigo-800 font-medium">
         </div>
         <div class="w-[20%] mx-auto">
            <input type="submit" value="submit" class="w-full text-white bg-gradient-to-r from-amber-500 to-amber-300 py-[0.25rem] rounded-lg font-semibold cursor-pointer">
         </div>
         <div class="flex w-full justify-center">
        
         </div>
     </form>
</body>
</html>