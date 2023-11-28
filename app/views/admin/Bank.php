
<?php

    require_once("../../controllers/bank/controller.php");

    // var_dump($banks);

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
                            class="active text-lg font-medium block w-[full] rounded-md h-[60px] flex items-center bg-white p-5 group hover:text-red-500 bg-gray-900 bg-opacity-20"
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
                            class="text-lg font-medium block w-[full] rounded-md h-[60px] text-white flex items-center p-5 group hover:text-red-500 bg-gray-900 bg-opacity-20"
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
                        <i class="fa-solid "></i>
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
                            <span
                                class=" text-gray-500 text-md block text-right"
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
                                Bank
                            </h3>
                            <p class="text-xl">Our Banks around The world</p>
                        </div>
                        <div>
                            <button class="bg-slate-900 text-white w-[160px] h-[50px] rounded-md" id="addBank">
                                Add Bank
                            </button>
                        </div>
                    </div>
                    <!-- ========== table Banks ======== -->
                    <div class="rounded-lg overflow-hidden mt-10">
                        <table class="w-full table-auto">
                            <thead class="">
                                <tr class="bg-slate-900 text-white h-[60px]">
                                    <th class="">ID</th>
                                    <th class="">Denomination</th>
                                    <th class="">Logo</th>
                                    <th class="">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($banks as $bank): ?>
                                <tr class="h-[50px]">
                                    <td class="text-center"><?=$bank->bankId?></td>
                                    <td class="text-center"><?=$bank->name?></td>
                                    <td class="text-center" style="width: 25%;"><img src="<?=$bank->logo?>" alt="" width="200"></td>
                                    <td class="text-center">
                                        <button class="bg-slate-900 text-white w-[35px] h-[35px] rounded-md" onclick="">
                                            <a href=<?php echo "Bank.php?id=" . $bank->bankId ?>><i class="fa-solid fa-pen"></i></a>
                                        </button>
                                        <button class="bg-slate-900 text-white w-[35px] h-[35px] rounded-md" id="addBank">
                                            <a href=<?php echo "../../controllers/bank/controller.php?bankId=" . $bank->bankId ?>><i class="fa-solid fa-trash"></i></a>
                                        </button>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- ============ Form to add New Bank ========= -->
                    <div>
                        <form action="../../controllers/bank/controller.php" method="post" class="absolute top-[50%] left-[30%] translate-y-[-50%] bg-white p-5 w-[650px] rounded-md shadow-sm z-50 hidden" id="Add">
                            <div>
                                <label for="" class="text-xl ">Denomination</label>
                                <input type="text" name="name"  class="block w-full py-3 text-xl px-1 placeholder:text-lg my-2 outline-none border-none bg-gray-100" placeholder="Enter Dènomination ">
                            </div>
                            <div>
                                <input type="submit" name="submit"  class="block w-full py-3 text-white text-xl px-1 cursor-pointer my-2 outline-none border-none bg-slate-900">
                            </div>
                        </form>
                    </div>
                    <!-- ============ Form to add New Bank ========= -->

                    <!-- ============ Form to Edit Bank ========= -->
                    <div>
                        <?php if(isset($_GET['id'])) { ?>
                            <form action="../../controllers/bank/controller.php" method="post" class="absolute top-[50%] left-[30%] translate-y-[-50%] bg-white p-5 w-[650px] rounded-md shadow-sm z-50" id="Edit">
                                <div>
                                    <?php foreach($banks as $bank): ?>
                                        <?php if($bank->bankId == $_GET['id']){ ?>
                                            <label for="" class="text-xl ">Denomination</label>
                                            <input type="text" name="name"  class="block w-full py-3 text-xl px-1 placeholder:text-lg my-2 outline-none border-none bg-gray-100" value=<?=$bank->name?>>
                                            <input type="text" name="id"  class="block w-full py-3 text-xl px-1 placeholder:text-lg my-2 outline-none border-none bg-gray-100 hidden" value=<?=$bank->bankId?>>
                                        <?php } ?>
                                    <?php endforeach; ?>
                                    <input type="text" name="mode"  class="block w-full py-3 text-xl px-1 placeholder:text-lg my-2 outline-none border-none bg-gray-100 hidden" value="edit" >

                                </div>
                                <div>
                                    <input type="submit" name="submit" value="Edit"  class="block w-full py-3 text-white text-xl px-1 cursor-pointer my-2 outline-none border-none bg-slate-900">
                                </div>
                            </form>
                         <?php } ?>
                    </div>
                    <!-- ============ Form Edit Bank ========= -->
                </div>
                <!-- ============ Content ============= -->

            </main>
            <!-- ========== overlay ================= -->
            <div class="bg-black bg-opacity-60 w-full h-[100vh] absolute top-0 left-0 hidden" id="overlayAdd"></div>
            <?php if(isset($_GET['id'])) { ?>
                <div class="bg-black bg-opacity-60 w-full h-[100vh] absolute top-0 left-0" id="overlayEdit" onclick="updateForm()"></div>
            <?php } ?>
        </section>
    </body>
</html>
