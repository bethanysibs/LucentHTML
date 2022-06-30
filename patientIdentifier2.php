<!DOCTYPE html>

<html lang="en" class="light">
    <title>Patient Identifier 2 - Paper +</title>
    <?php include 'header.php'; ?>
    <!-- END: Head -->
    <body class="login">
        <div class="container">
            <div class="w-full min-h-screen p-5 md:p-20 flex items-center justify-center">
                <div class="w-96 intro-y">
                    <div class="box px-5 py-8 mt-10 max-w-[450px] relative before:content-[''] before:z-[-1] before:w-[95%] before:h-full before:bg-slate-200 before:border before:border-slate-200 before:-mt-5 before:absolute before:rounded-lg before:mx-auto before:inset-x-0 before:dark:bg-darkmode-600/70 before:dark:border-darkmode-500/60">
                        <label for="horizontal-form-1" class="form-label md:w-10"><h2 class="text-3xl font-medium leading-none mt-3">Patient ID</h2></label> 
                        <input type="text" class="form-control py-3 px-4 block" placeholder="Patient ID">
                    </div>
                        <div class="">
                            <div class="mt-5 xl:mt-8 text-center xl:text-left">
                                <label for="horizontal-form-1" class="form-label md:w-10">
                                <h2 class="text-3xl font-medium leading-none mt-3">New Patient?</h2>
                                    </label> 
                                <button class="btn btn-primary w-full xl:mr-3">YES</button>
                                <button class="btn btn-danger w-full mt-3">NO</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- BEGIN: Dark Mode Switcher-->
        <!-- <div data-url="login-light-register.html" class="dark-mode-switcher cursor-pointer shadow-md fixed bottom-0 right-0 box border rounded-full w-40 h-12 flex items-center justify-center z-50 mb-10 mr-10">
            <div class="mr-4 text-slate-600 dark:text-slate-200">Dark Mode</div>
            <div class="dark-mode-switcher__toggle dark-mode-switcher__toggle--active border"></div>
        </div> -->
        <!-- END: Dark Mode Switcher-->
        
        <!-- BEGIN: JS Assets-->
        <script src="dist/js/app.js"></script>
        <!-- END: JS Assets-->
    </body>
</html>