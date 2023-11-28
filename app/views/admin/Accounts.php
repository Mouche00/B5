
<?php 

    require_once '../../models/accounts.php';
    require_once '../../models/user.php';

    // if (isset($_POST['submit'])) {
    //     $balance = $_POST['Balance'];
    //     $rib = $_POST['rib'];
    //     $userID = $_POST['accountOwner'];
    
    //     }
        
    $user = new Users();
    $users = $user->displayUser();
    // print_r($users);


    






?>


<?php




?>








<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <!-- ========== Tailwind Css ========  -->
        <script src="https://cdn.tailwindcss.com"></script>
        <!-- ========== AwesomeFonts Css ========  -->
        <script
            src="https://kit.fontawesome.com/d0fb25e48c.js"
            crossorigin="anonymous"
        ></script>
        <!-- ================ Css Stylesheet ================ -->
        <link rel="stylesheet" href="../../../public/assets/css/client/admin.css" />
        <!-- ============ Declaration JS File ============-->
        <script src="../../../public/assets/js/dashboard_Admin.js" defer></script>
    </head>
    <body>
        <section class="flex items-center relative">
            <!-- =========== Aside bar =========== -->
            <aside class="bg-black h-[100vh] w-[320px] p-5 relative">
                <!-- ===== logo ===== -->
                <div>
                    <img
                        src="../../../public/assets/images/logo-white.png"
                        alt="logo"
                        class="pt-10"
                    />
                </div>
                <ul class="p-5 mt-10">
                    <h2 class="text-2xl font-bold my-5 text-white">General</h2>
                    <li class="my-2">
                        <a
                            href="bank.php"
                            class="text-lg font-medium block w-[full] rounded-md h-[60px] flex items-center text-white p-5 group hover:text-red-500"
                        >
                            <i
                                class="fa-solid fa-building-columns mr-5 text-lg group-hover:text-red-500"
                            ></i
                            >Bank</a
                        >
                    </li>
                    <li class="my-2">
                        <a
                            href="Users.php"
                            class="text-lg font-medium block w-[full] rounded-md h-[60px] text-white flex items-center p-5 group hover:text-red-500 bg-gray-900 bg-opacity-20"
                        >
                            <i
                                class="fa-solid fa-user mr-5 text-lg group-hover:text-red-500"
                            ></i
                            >Users</a
                        >
                    </li>
                    <li class="my-2">
                        <a
                            href="Accounts.php"
                            class="active text-lg font-medium block w-[full] rounded-md h-[60px] text-white flex items-center p-5 group hover:text-red-500"
                        >
                            <i
                                class="fa-solid fa-file mr-5 text-lg group-hover:text-red-500"
                            ></i
                            >Accounts</a
                        >
                    </li>
                    <li class="my-2">
                        <a
                            href="Transactions.php"
                            class="text-lg font-medium block w-[full] rounded-md h-[60px] text-white flex items-center p-5 group hover:text-red-500 bg-gray-900 bg-opacity-20"
                        >
                            <i
                                class="fa-solid fa-right-left mr-5 text-lg group-hover:text-red-500"
                            ></i
                            >Transactions</a
                        >
                    </li>
                    <li class="my-2">
                        <a
                            href="Agency.php"
                            class="text-lg font-medium block w-[full] rounded-md h-[60px] text-white flex items-center p-5 group hover:text-red-500 bg-gray-900 bg-opacity-20"
                        >
                            <i
                                class="fa-solid fa-building text-white mr-5 text-lg group-hover:text-red-500"
                            ></i>
                            Agnecy</a
                        >
                    </li>
                    <li class="my-2">
                        <a
                            href="Distributer.php"
                            class="text-lf font-medium block w-[full] rounded-md h-[60px] text-white flex items-center p-5 group hover:text-red-500 bg-gray-900 bg-opacity-20"
                        >
                            <i
                                class="fa-solid fa-credit-card text-white mr-5 text-lg group-hover:text-red-500"
                            ></i>
                            Distributer</a
                        >
                    </li>
                </ul>
            </aside>
            <!-- =========== Aside bar =========== -->
            <!-- =========== Content =========== -->
            <main class="bg-gray-100 flex-grow h-[100vh] relative">
                <!-- ============== header =========== -->
                <div class="bg-white flex items-center justify-between p-5">
                    <h2 class="text-2xl tracking-widest font-bold">
                        Dashboard
                    </h2>
                    <div class="flex gap-4 items-center mr-5">
                        <div>
                            <h3 class="font-medium text-lg mb-1">
                                Abdelouahed Senane
                            </h3>
                            <span class="text-gray-500 text-md block text-right"
                                >Admin</span
                            >
                        </div>
                        <img
                            src="../../../public/assets/images/admin.jpg"
                            alt="profile"
                            class="w-[60px] h-[60px] rounded-full"
                        />
                    </div>
                </div>
                <!-- ========== End Header =========== -->
                <!-- ============ Content ============= -->
                <div class="p-6 bg-white m-5">
                    <div class="flex items-center justify-between">
                        <div>
                            <h3
                                class="text-orange-600 text-3xl font-bold tracking-widest mb-2"
                            >
                                Accounts
                            </h3>
                            <p class="text-xl">Accounts Lists</p>
                        </div>
                        <div>
                            <button
                                class="bg-slate-900 text-white w-[160px] h-[50px] rounded-md"
                                id="addBank"
                            >
                                Add Account
                            </button>
                        </div>
                    </div>
                    <!-- ========== table Banks ======== -->
                    <div class="rounded-lg overflow-hidden mt-10">
                        <table class="w-full table-auto">
                            <thead class="">
                                <tr class="bg-slate-900 text-white h-[60px]">
                                    <th class="">AccountID</th>
                                    <th class="">Balance</th>
                                    <th class="">R.I.B</th>
                                    <th class="">Account owner</th>
                                    <th class="">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="h-[50px]">
                                    <td class="text-center">1</td>
                                    <td class="text-center">xxxxx</td>
                                    <td class="text-center">123456748</td>
                                    <td class="text-center">Mohammed</td>
                                    <td class="text-center">
                                        <button
                                            class="bg-slate-900 text-white w-[35px] h-[35px] rounded-md"
                                            onclick="updateForm()"
                                        >
                                            <i class="fa-solid fa-pen"></i>
                                        </button>
                                        <button
                                            class="bg-slate-900 text-white w-[35px] h-[35px] rounded-md"
                                        >
                                            <i class="fa-solid fa-trash"></i>
                                        </button>
                                        <button
                                            class="bg-slate-900 text-white w-[35px] h-[35px] rounded-md"
                                        >
                                            <i class="fa-solid fa-right-left"></i>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- ============ Form to add Accounts ========= -->
                    <div>
                        <form
                            action=""
                            method="post"
                            class="absolute top-[50%] left-[35%] translate-y-[-50%] bg-white p-5 w-[500px] rounded-md shadow-sm z-50 hidden"
                            id="Add"
                        >
                            <h1 class="text-center font-semibold text-3xl my-5">
                                Add Account
                            </h1>

                                <div class="">
                                    <label for="" class="text-xl"
                                        >Balance</label
                                    >
                                    <input
                                        type="text"
                                        name="Balance"
                                        class="block w-full py-3 text-xl px-1 placeholder:text-lg my-2 outline-none border-none bg-gray-100"
                                        placeholder="Enter Balance "
                                    />
                                </div>
                                <div class="">
                                    <label for="" class="text-xl">R.I.B</label>
                                    <input
                                        type="text"
                                        name="rib"
                                        class="block w-full py-3 text-xl px-1 placeholder:text-lg my-2 outline-none border-none bg-gray-100"
                                        placeholder="Enter R.I.B"
                                    />
                                </div>
                                <!-- ========= fetch users ======= -->
                                


                                <div >
                                    <label for="" class="text-xl">Account owner</label>
                                    <select name="accountOwner" id="" class="block w-full py-3 text-xl px-1 placeholder:text-lg my-2 outline-none border-none bg-gray-100"> 
                                        <option value="">Select Account owner :</option>
                                        <option value=""></option>
                                    </select>
                                </div>

                            <div>
                                <input
                                    type="submit"
                                    name="submit"
                                    class="block w-full py-3 text-white text-xl px-1 cursor-pointer mt-5 outline-none border-none bg-slate-900"
                                />
                            </div>
                        </form>
                    </div>
                    <!-- ============ Form to Add Accounts ========= -->

                </div>
                <!-- ============ Content ============= -->
            </main>
            <!-- ========== overlay ================= -->
            <div
                class="bg-black bg-opacity-60 w-full h-[100vh] absolute top-0 left-0 hidden"
                id="overlayAdd"
            ></div>
            <div
                class="bg-black bg-opacity-60 w-full h-[100vh] absolute top-0 left-0 hidden"
                id="overlayEdit"
                onclick="updateForm()"
            ></div>
        </section>
    </body>
</html>
