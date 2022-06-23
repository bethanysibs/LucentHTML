<!DOCTYPE html>
<html lang="en" class="light">
    <!-- BEGIN: Head -->
<?php include 'header.php'; ?>
    <!-- END: Head -->
    <body class="login">
        <div class="container">
            <div class="w-full min-h-screen p-5 md:p-20 flex items-center justify-center">
                <div class="w-96 intro-y">
                    <img class="mx-auto w-80" alt="Paper + Login" src="dist/images/paper_logo_compressed.png">
                    <div class="text-white dark:text-slate-300 text-2xl font-medium text-center mt-14">Login to Your Paper+ Account!</div>
                     <div class="box px-5 py-8 mt-10 max-w-[900px] relative before:content-[''] before:z-[-1] before:w-[95%] before:h-full before:bg-slate-200 before:border before:border-slate-200 before:-mt-5 before:absolute before:rounded-lg before:mx-auto before:inset-x-0 before:dark:bg-darkmode-600/70 before:dark:border-darkmode-500/60">
                        <input type="password" class="form-control form-control-lg py-3 px-4 block mt-4" placeholder="Password">
                        <div class="mt-5 xl:mt-8 text-center xl:text-left">
                            <button class="btn btn-lg btn-primary w-full xl:mr-3">Login</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- BEGIN: Dark Mode Switcher-->
        <div data-url="login.php" class="dark-mode-switcher cursor-pointer shadow-md fixed bottom-0 right-0 box border rounded-full w-40 h-12 flex items-center justify-center z-50 mb-10 mr-10">
            <div class="mr-4 text-slate-600 dark:text-slate-200">Dark Mode</div>
            <div class="dark-mode-switcher__toggle border"></div>
        </div>
        <!-- END: Dark Mode Switcher-->
        
        <!-- BEGIN: JS Assets-->
        <script src="dist/js/app.js"></script>
        <!-- END: JS Assets-->
    </body>
</html>