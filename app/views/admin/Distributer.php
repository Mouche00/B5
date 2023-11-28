
<?php

    require_once("../../controllers/distributer/controller.php");

    // require_once("./app/");

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
                            class="text-lg font-medium block w-[full] rounded-md h-[60px] flex text-white items-center p-5 group hover:text-red-500"
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
                            class="text-lg font-medium block w-[full] rounded-md h-[60px] text-white flex items-center p-5 group hover:text-red-500"
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
                            class="text-lg font-medium block w-[full] rounded-md h-[60px] text-white flex items-center p-5 group hover:text-red-500"
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
                            class=" font-medium block w-[full] rounded-md h-[60px] text-white flex items-center p-5 group hover:text-red-500"
                        >
                            <i class="fa-solid"></i>
                            <i
                                class="fa-solid fa-right-left mr-5 text-lg group-hover:text-red-500"
                            ></i
                            >Transactions</a
                        >
                    </li>
                    <li class="my-2">
                        <a
                            href="Agency.php"
                            class="  text-lg font-medium block w-[full] rounded-md h-[60px] text-white flex items-center p-5 group hover:text-red-500 "
                        >
                            <i
                                class="fa-solid fa-building mr-5 text-lg group-hover:text-red-500"
                            ></i>
                            Agency</a
                        >
                    </li>
                    <li class="my-2">
                        <a
                            href="#"
                            class="active text-lf font-medium block w-[full] rounded-md h-[60px] text-white flex items-center p-5 group hover:text-red-500 bg-gray-900 bg-opacity-20"
                        >
                            <i
                                class="fa-solid fa-credit-card  mr-5 text-lg group-hover:text-red-500"
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
                                Distributer
                            </h3>
                            <p class="text-xl">Our Banks around The world</p>
                        </div>
                        <div>
                            <button
                                class="bg-slate-900 text-white w-[160px] h-[50px] rounded-md"
                                id="addBank"
                            >
                                Add Distributer
                            </button>
                        </div>
                    </div>
                    <!-- ========== table Banks ======== -->
                    <div class="rounded-lg overflow-hidden mt-10">
                        <table class="w-full table-auto">
                            <thead class="">
                                <tr class="bg-slate-900 text-white h-[60px]">
                                    <th class="">ID</th>
                                    <th class="">Address</th>
                                    <th class="">Longitude</th>
                                    <th class="">Latitude</th>
                                    <th class="">BankID</th>
                                    <th class="">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($distributers as $distributer): ?>
                                
                                    <tr class="h-[50px]">
                                        <td class="text-center"><?=$distributer['atmId']?></td>
                                        <td class="text-center"><?=$distributer['longitude']?></td>
                                        <td class="text-center"><?=$distributer['latitude']?></td>
                                        <td class="text-center"><?=$distributer['adress']?></td>
                                        <?php foreach($banks as $bank): ?>
                                            <?php if($bank->bankId == $distributer['bankId']){ ?>
                                                <td class="text-center"><?=$bank->name?></td>
                                            <?php } ?>
                                        <?php endforeach; ?>
                                        <td class="text-center">
                                            <button
                                                class="bg-slate-900 text-white w-[35px] h-[35px] rounded-md"
                                                onclick="updateForm()"
                                            >
                                                <i class="fa-solid fa-pen"></i>
                                            </button>
                                            <button
                                                class="bg-slate-900 text-white w-[35px] h-[35px] rounded-md"
                                                id="addBank"
                                            >
                                                <i class="fa-solid fa-trash"></i>
                                            </button>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- ============ Form to Add Distributer ========= -->
                    <div>
                        <form
                            action="../../controllers/distributer/controller.php"
                            method="post"
                            class="absolute top-[50%] left-[30%] translate-y-[-50%] bg-white p-5 w-[650px] rounded-md shadow-sm z-50 hidden"
                            id="Add"
                        >


                        <div class="w-full">
                            <label for="" class="text-xl">Address</label>
                            <input
                                type="text"
                                name="address"
                                class="block w-full py-3 text-xl px-1 placeholder:text-lg my-2 outline-none border-none bg-gray-100"
                                placeholder="Enter Code postal "
                            />
                        </div>

                        <div class="w-full">
                            <label for="" class="text-xl">Longitude</label>
                            <input
                                type="text"
                                name="longitude"
                                class="block w-full py-3 text-xl px-1 placeholder:text-lg my-2 outline-none border-none bg-gray-100"
                                placeholder="Enter Longitude"
                            />
                        </div>

                        <div class="w-full">
                            <label for="" class="text-xl">Latitude</label>
                            <input
                                type="text"
                                name="latitude"
                                class="block w-full py-3 text-xl px-1 placeholder:text-lg my-2 outline-none border-none bg-gray-100"
                                placeholder="Enter Latitude"
                            />
                        </div>

                        <div class="w-full">
                            <label for="" class="text-xl">Bank</label>
                            <select
                                name="bank"
                                id=""
                                class="block w-full py-3 text-xl px-1 placeholder:text-lg my-2 outline-none border-none bg-gray-100"
                            >
                                <?php foreach($banks as $bank): ?>
                                    <option value="<?=$bank->bankId?>"><?=$bank->name?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                            
                            <div>
                                <input
                                    type="submit"
                                    name="submit"
                                    class="block w-full py-3 text-white mt-5 text-xl px-1 cursor-pointer my-2 outline-none border-none bg-slate-900"
                                />
                            </div>
                        </form>
                    </div>
                    <!-- ============ Form to Edit Distributeur ========= -->
                    <div>
                        <form
                            action="../../controllers/distributer/controller.php"
                            method="post"
                            class="absolute top-[50%] left-[30%] translate-y-[-50%] bg-white p-5 w-[650px] rounded-md shadow-sm z-50 hidden"
                            id="Edit"
                        >

                        <div class="w-full">
                            <label for="" class="text-xl">Address</label>
                            <input
                                type="text"
                                name="address"
                                class="block w-full py-3 text-xl px-1 placeholder:text-lg my-2 outline-none border-none bg-gray-100"
                                placeholder="Enter Code postal "
                            />
                        </div>

                        <div class="w-full">
                            <label for="" class="text-xl">Longitude</label>
                            <input
                                type="text"
                                name="longitude"
                                class="block w-full py-3 text-xl px-1 placeholder:text-lg my-2 outline-none border-none bg-gray-100"
                                placeholder="Enter Longitude"
                            />
                        </div>

                        <div class="w-full">
                            <label for="" class="text-xl">Latitude</label>
                            <input
                                type="text"
                                name="latitude"
                                class="block w-full py-3 text-xl px-1 placeholder:text-lg my-2 outline-none border-none bg-gray-100"
                                placeholder="Enter Latitude"
                            />
                        </div>
 
                            <div>
                                <input
                                    type="submit"
                                    name="submit"
                                    value="Edit"
                                    class="block w-full py-3 text-white mt-5 text-xl px-1 cursor-pointer my-2 outline-none border-none bg-slate-900"
                                />
                            </div>
                        </form>
                    </div>
                    <!-- ============ Form to add Transaction ========= -->
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
        scr
    </body>
</html>
