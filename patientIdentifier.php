<!DOCTYPE html>
<html lang="en" class="light">
    <!-- BEGIN: Head -->
    <head>
        <title>Patient Identifier - Paper +</title>
    <?php include 'header.php';?>
    </head>
    <!-- END: Head -->
    <body class="login">
    <div class="container">
            <div class="w-full min-h-screen p-5 md:p-20 flex items-center justify-center">
                <div class="w-96 intro-y">
                    <div class="form-inline"> 
                        <label for="horizontal-form-1" class="form-label md:w-10"><h2 class="text-3xl font-medium leading-none mt-3">Patient ID</h2></label> 
                        <input id="horizontal-form-1" type="text" class="form-control form-control-lg mt-2" placeholder="Patient ID"> 
                    </div>
                    <div class="form-inline mt-2"> 
                        <label for="horizontal-form-1" class="form-label md:w-10"><h2 class="text-3xl font-medium leading-none mt-3">New?</h2></label> 
                         <div class="flex items-center justify-center mt-2">
                             <button class="btn btn-success btn-lg w-24 mr-4"> 
                                <i data-lucide="calendar" class="w-4 h-4 mr-2"></i> YES </button>  
                            <button class="btn btn-danger btn-lg w-24 mr-4"> <i data-lucide="trash" class="w-4 h-4 mr-2"></i> NO </button> <!--BUTTON ICONS TO BE CHANGED-->
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- BEGIN: Dark Mode Switcher-->
        <!-- <div data-url="login-light-login.html" class="dark-mode-switcher cursor-pointer shadow-md fixed bottom-0 right-0 box border rounded-full w-40 h-12 flex items-center justify-center z-50 mb-10 mr-40">
            <div class="mr-4 text-slate-600 dark:text-slate-200">Dark Mode</div>
            <div class="dark-mode-switcher__toggle dark-mode-switcher__toggle--active border"></div>
        </div> -->
        <!-- END: Dark Mode Switcher-->
        
        <!-- BEGIN: JS Assets-->
        <script src="dist/js/app.js"></script>
        <!-- END: JS Assets-->
    </body>
</html>