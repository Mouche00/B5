<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/1a53866afa.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../../public/assets/css/client/style.css">
    <title>Client Dashboard</title>
</head>
<body class="flex h-[100vh]">

    <!-- SIDEBAR -->

    <section class="w-[17.5%] h-full bg-black text-white">
        <img class="p-2 my-8" src="../../../public/assets/images/logo-white.png" alt="logo-black">
        <div class="w-[70%] m-auto mt-16">
            <img class="rounded-t-lg m-auto" src="../../../public/assets/images/profile.jpg" alt="profile">
            <h2 class="rounded-b-lg text-center text-xl text-black p-2 font-bold bg-white">Morgan Freeman</h2>
        </div>
        <div class="w-[70%] m-auto flex flex-col justify-between mt-10 text-black text-xl">
            <a href="" class="h-[5vh] bg-white rounded-lg"><button class="w-full flex items-center h-full" type="button"><span class="w-[20%]"><i class="fa-solid fa-table" style="color: #000;"></i></span><span class="h-full border-black border-l-8"></span><span class="w-[80%]">Comptes</span></button></a>
            <a href="" class="h-[5vh] bg-white rounded-lg mt-10"><button class="w-full flex items-center h-full" type="button"><span class="w-[20%]"><i class="fa-solid fa-arrow-right-arrow-left" style="color: #000;"></i></span><span class="h-full border-black border-l-8"></span><span class="w-[80%]">Transactions</span></button></a>
        </div>
    </section>

    <!-- MAIN CONTENT -->

    <section class="w-[82.5%] h-full bg-white">

        <!-- NAVBAR -->

        <div class="h-[10%] w-full flex justify-end">
            <div class="w-[10%] flex items-center">
                <a href="" class="bg-red-500 h-[50%] w-28 flex justify-center items-center rounded-lg text-white font-bold m-auto mt-10"><button type="button">LOG OUT</button></a>
            </div>
        </div>

        <!-- CARDS -->

        <section class="h-[90%] py-2 px-8">
            <div class="h-[35%] w-[25%] bg-white rounded-2xl border-black border-8 text-white shadow-xl">
                <div class="h-[20%] bg-black flex justify-center items-center border-black border-b-8">
                    <h2 class="text-4xl font-bold">Details</h2>
                </div>
                <div class="h-[80%] text-black p-[1.5rem] grid grid-cols-2 text-center">
                    <p>ID:</p><p>3213213</p>
                    <p>Date de naissance:</p><p>22/12/2000</p>
                    <p>Nationalite:</p><p>Deutsch</p>
                    <p>Genre:</p><p>Femme</p>
                </div>
            </div>
        </section>

    </section>
</body>
</html>