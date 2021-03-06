<!DOCTYPE html>
<html lang="en" class="dark">
       <!-- BEGIN: Head -->
       <title>Users - Paper +</title>
<?php include 'header.php'; ?>
    <!-- END: Head -->
    <body class="main">
        <div class="xl:pl-5 xl:py-5 flex h-screen">           
            <!-- BEGIN: Content -->
            <div class="wrapper">
                <div class="content">
                    <!-- BEGIN: Top Bar -->
                    <div class="top-bar">
                        <!-- BEGIN: Breadcrumb -->
                        <nav aria-label="breadcrumb" class="-intro-x hidden xl:flex">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">App</a></li>
                                <li class="breadcrumb-item"><a href="#">Administrator</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Users</li>
                            </ol>
                        </nav>
                        <!-- END: Breadcrumb -->
                        <!-- BEGIN: Mobile Menu -->
                        <div class="-intro-x xl:hidden mr-3 sm:mr-6">
                            <div class="mobile-menu-toggler cursor-pointer"> <i data-lucide="bar-chart-2" class="mobile-menu-toggler__icon transform rotate-90 dark:text-slate-500"></i> </div>
                        </div>
                        <!-- END: Mobile Menu -->
                        <!-- BEGIN: Search -->
                        <div class="intro-x relative ml-auto sm:mx-auto">
                            <div class="search hidden sm:block">
                                <input type="text" class="search__input form-control" placeholder="Quick Search... (Ctrl+k)">
                                <i data-lucide="search" class="search__icon"></i> 
                            </div>
                            <a class="notification sm:hidden" href=""> <i data-lucide="search" class="notification__icon dark:text-slate-500 mr-5"></i> </a>
                        </div>
                        <!-- END: Search -->
                        <!-- BEGIN: Search Result -->
                        <div id="search-result-modal" class="modal flex items-center justify-center" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body p-0">
                                        <div class="relative border-b border-slate-200/60">
                                            <i data-lucide="search" class="w-5 h-5 absolute inset-y-0 my-auto ml-4 text-slate-500"></i> 
                                            <input type="text" class="form-control border-0 shadow-none focus:ring-0 py-5 px-12" placeholder="Quick Search...">
                                            <div class="h-6 text-xs bg-slate-200 text-slate-500 px-2 flex items-center rounded-md absolute inset-y-0 right-0 my-auto mr-4">ESC</div>
                                        </div>
                                        <div class="p-5">
                                            <div class="font-medium mb-3">Users</div>
                                            <div class="mb-5">
                                                <a href="" class="flex items-center mt-3 first:mt-0">
                                                    <div class="w-7 h-7 image-fit">
                                                        <img alt="Rocketman - HTML Admin Template" class="rounded-full" src="dist/images/profile-13.jpg">
                                                    </div>
                                                    <div class="w-36 truncate ml-3">Sylvester Stallone</div>
                                                    <div class="ml-auto w-36 truncate text-slate-500 text-xs text-right">sylvesterstallone@left4code.com</div>
                                                </a>
                                                <a href="" class="flex items-center mt-3 first:mt-0">
                                                    <div class="w-7 h-7 image-fit">
                                                        <img alt="Rocketman - HTML Admin Template" class="rounded-full" src="dist/images/profile-15.jpg">
                                                    </div>
                                                    <div class="w-36 truncate ml-3">Bruce Willis</div>
                                                    <div class="ml-auto w-36 truncate text-slate-500 text-xs text-right">brucewillis@left4code.com</div>
                                                </a>
                                                <a href="" class="flex items-center mt-3 first:mt-0">
                                                    <div class="w-7 h-7 image-fit">
                                                        <img alt="Rocketman - HTML Admin Template" class="rounded-full" src="dist/images/profile-2.jpg">
                                                    </div>
                                                    <div class="w-36 truncate ml-3">Brad Pitt</div>
                                                    <div class="ml-auto w-36 truncate text-slate-500 text-xs text-right">bradpitt@left4code.com</div>
                                                </a>
                                                <a href="" class="flex items-center mt-3 first:mt-0">
                                                    <div class="w-7 h-7 image-fit">
                                                        <img alt="Rocketman - HTML Admin Template" class="rounded-full" src="dist/images/profile-12.jpg">
                                                    </div>
                                                    <div class="w-36 truncate ml-3">Leonardo DiCaprio</div>
                                                    <div class="ml-auto w-36 truncate text-slate-500 text-xs text-right">leonardodicaprio@left4code.com</div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END: Search Result -->
                        <!-- BEGIN: Notifications -->
                        <div class="intro-x dropdown mr-5 sm:mr-6">
                            <div class="dropdown-toggle notification notification--bullet cursor-pointer" role="button" aria-expanded="false" data-tw-toggle="dropdown"> <i data-lucide="bell" class="notification__icon dark:text-slate-500"></i> </div>
                            <div class="notification-content pt-2 dropdown-menu">
                                <div class="notification-content__box dropdown-content">
                                    <div class="notification-content__title">Notifications</div>
                                    <div class="cursor-pointer relative flex ">
                                        <div class="w-10 h-10 flex-none image-fit mr-1">
                                            <img alt="Rocketman - HTML Admin Template" class="rounded-full" src="dist/images/profile-13.jpg">
                                            <div class="w-3 h-3 bg-success absolute right-0 bottom-0 rounded-full border-2 border-white dark:border-darkmode-800"></div>
                                        </div>
                                        <div class="ml-2">
                                            <a href="javascript:;" class="font-medium mr-1">Sylvester Stallone</a> <span class="text-slate-500">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem </span> 
                                            <div class="text-xs text-slate-400 mt-1">01:10 PM</div>
                                        </div>
                                    </div>
                                    <div class="cursor-pointer relative flex mt-5">
                                        <div class="w-10 h-10 flex-none image-fit mr-1">
                                            <img alt="Rocketman - HTML Admin Template" class="rounded-full" src="dist/images/profile-15.jpg">
                                            <div class="w-3 h-3 bg-success absolute right-0 bottom-0 rounded-full border-2 border-white dark:border-darkmode-800"></div>
                                        </div>
                                        <div class="ml-2">
                                            <a href="javascript:;" class="font-medium mr-1">Bruce Willis</a> <span class="text-slate-500">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem </span> 
                                            <div class="text-xs text-slate-400 mt-1">01:10 PM</div>
                                        </div>
                                    </div>
                                    <div class="cursor-pointer relative flex mt-5">
                                        <div class="w-10 h-10 flex-none image-fit mr-1">
                                            <img alt="Rocketman - HTML Admin Template" class="rounded-full" src="dist/images/profile-2.jpg">
                                            <div class="w-3 h-3 bg-success absolute right-0 bottom-0 rounded-full border-2 border-white dark:border-darkmode-800"></div>
                                        </div>
                                        <div class="ml-2">
                                            <a href="javascript:;" class="font-medium mr-1">Brad Pitt</a> <span class="text-slate-500">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem </span> 
                                            <div class="text-xs text-slate-400 mt-1">01:10 PM</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END: Notifications -->
                        <!-- BEGIN: Notifications -->
                        <div class="intro-x mr-auto sm:mr-6">
                            <div class="notification cursor-pointer"> <i data-lucide="inbox" class="notification__icon dark:text-slate-500"></i> </div>
                        </div>
                        <!-- END: Notifications -->
                        <!-- BEGIN: Account Menu -->
                        <div class="intro-x dropdown h-10">
                            <div class="h-full dropdown-toggle flex items-center" role="button" aria-expanded="false" data-tw-toggle="dropdown">
                                <div class="w-10 h-10 image-fit">
                                    <img alt="Rocketman - HTML Admin Template" class="rounded-full border-2 border-slate-100 border-opacity-10 shadow-lg" src="dist/images/profile-9.jpg">
                                </div>
                                <div class="hidden md:block ml-3">
                                    <div class="max-w-[7rem] truncate font-medium">Sylvester Stallone</div>
                                    <div class="text-xs text-slate-400">Frontend Engineer</div>
                                </div>
                            </div>
                            <div class="dropdown-menu w-56">
                                <ul class="dropdown-content">
                                    <li>
                                        <a href="" class="dropdown-item"> <i data-lucide="user" class="w-4 h-4 mr-2"></i> Profile </a>
                                    </li>
                                    <li>
                                        <a href="" class="dropdown-item"> <i data-lucide="edit" class="w-4 h-4 mr-2"></i> Add Account </a>
                                    </li>
                                    <li>
                                        <a href="" class="dropdown-item"> <i data-lucide="lock" class="w-4 h-4 mr-2"></i> Reset Password </a>
                                    </li>
                                    <li>
                                        <a href="" class="dropdown-item"> <i data-lucide="help-circle" class="w-4 h-4 mr-2"></i> Help </a>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li>
                                        <a href="" class="dropdown-item"> <i data-lucide="toggle-right" class="w-4 h-4 mr-2"></i> Logout </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- END: Account Menu -->
                    </div>
                    <!-- END: Top Bar -->
                    <div class="xl:px-6 mt-2.5">
                        <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
                            <h2 class="text-lg font-medium mr-auto">
                                Paper + Users
                            </h2>
                            <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
                                <button class="btn btn-primary shadow-md mr-2">Add New User</button>
                            </div>
                        </div>
                        <!-- BEGIN: HTML Table Data -->
                        <div class="intro-y box p-5 mt-5">
                            <div class="flex flex-col sm:flex-row sm:items-end xl:items-start">
                                <form id="tabulator-html-filter-form" class="xl:flex sm:mr-auto" >
                                    <div class="sm:flex items-center sm:mr-4">
                                        <label class="w-12 flex-none xl:w-auto xl:flex-initial mr-2">Field</label>
                                        <select id="tabulator-html-filter-field" class="form-select w-full sm:w-32 2xl:w-full mt-2 sm:mt-0 sm:w-auto">
                                            <option value="username">Username</option>
                                            <option value="lastname">Last Name</option>
                                            <option value="firstname">First Name</option>
                                            <option value="password">Password</option>
                                            <option value="signature">Signature</option>
                                        </select>
                                    </div>
                                    <div class="sm:flex items-center sm:mr-4 mt-2 xl:mt-0">
                                        <label class="w-12 flex-none xl:w-auto xl:flex-initial mr-2">Type</label>
                                        <select id="tabulator-html-filter-type" class="form-select w-full mt-2 sm:mt-0 sm:w-auto" >
                                            <option value="like" selected>like</option>
                                            <option value="=">=</option>
                                            <option value="<">&lt;</option>
                                            <option value="<=">&lt;=</option>
                                            <option value=">">></option>
                                            <option value=">=">>=</option>
                                            <option value="!=">!=</option>
                                        </select>
                                    </div>
                                    <div class="sm:flex items-center sm:mr-4 mt-2 xl:mt-0">
                                        <label class="w-12 flex-none xl:w-auto xl:flex-initial mr-2">Value</label>
                                        <input id="tabulator-html-filter-value" type="text" class="form-control sm:w-40 2xl:w-full mt-2 sm:mt-0" placeholder="Search...">
                                    </div>
                                    <div class="mt-2 xl:mt-0">
                                        <button id="tabulator-html-filter-go" type="button" class="btn btn-primary w-full sm:w-16" >Go</button>
                                        <button id="tabulator-html-filter-reset" type="button" class="btn btn-secondary w-full sm:w-16 mt-2 sm:mt-0 sm:ml-1" >Reset</button>
                                    </div>
                                </form>
                                <div class="flex mt-5 sm:mt-0">
                                    <button id="tabulator-print" class="btn btn-outline-secondary w-1/2 sm:w-auto mr-2"> <i data-lucide="printer" class="w-4 h-4 mr-2"></i> Print </button>
                                    <div class="dropdown w-1/2 sm:w-auto">
                                        <button class="dropdown-toggle btn btn-outline-secondary w-full sm:w-auto" aria-expanded="false" data-tw-toggle="dropdown"> <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Export <i data-lucide="chevron-down" class="w-4 h-4 ml-auto sm:ml-2"></i> </button>
                                        <div class="dropdown-menu w-40">
                                            <ul class="dropdown-content">
                                                <li>
                                                    <a id="tabulator-export-csv" href="javascript:;" class="dropdown-item"> <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Export CSV </a>
                                                </li>
                                                <li>
                                                    <a id="tabulator-export-json" href="javascript:;" class="dropdown-item"> <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Export JSON </a>
                                                </li>
                                                <li>
                                                    <a id="tabulator-export-xlsx" href="javascript:;" class="dropdown-item"> <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Export XLSX </a>
                                                </li>
                                                <li>
                                                    <a id="tabulator-export-html" href="javascript:;" class="dropdown-item"> <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Export HTML </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="overflow-x-auto scrollbar-hidden">
                                <div id="tabulator" class="mt-5 table-report table-report--tabulator"></div>
                            </div>
                        </div>
                        <!-- END: HTML Table Data -->
                    </div>
                </div>
            </div>
            <!-- END: Content -->
        </div>
        <!-- BEGIN: Dark Mode Switcher-->
        <!-- <div data-url="side-menu-light-tabulator.html" class="dark-mode-switcher cursor-pointer shadow-md fixed bottom-0 right-0 box border rounded-full w-40 h-12 flex items-center justify-center z-50 mb-10 mr-10">
            <div class="mr-4 text-slate-800 dark:text-slate-200">Dark Mode</div>
            <div class="dark-mode-switcher__toggle dark-mode-switcher__toggle--active border"></div>
        </div> -->
        <!-- END: Dark Mode Switcher-->
        
        <!-- BEGIN: JS Assets-->
        <script src="dist/js/app.js"></script>
        <!-- END: JS Assets-->
    </body>
</html>