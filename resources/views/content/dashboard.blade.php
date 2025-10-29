@extends('content.app')
@section('content')

<div class="container-fluid group-data-[content=boxed]:max-w-boxed mx-auto">
    <div class="flex flex-col gap-2 py-4 md:flex-row md:items-center print:hidden">
        <div class="grow">
            <h5 class="text-16">Dashboard</h5>
        </div>
        <ul class="flex items-center gap-2 text-sm font-normal shrink-0">
            <li
                class="relative before:content-['\ea54'] before:font-remix ltr:before:-right-1 rtl:before:-left-1  before:absolute before:text-[18px] before:-top-[3px] ltr:pr-4 rtl:pl-4 before:text-slate-400 dark:text-zink-200">
                <a href="dashboard" class="text-slate-400 dark:text-zink-200">Jarum App</a>
            </li>
            <li class="text-slate-700 dark:text-zink-100">
                Dashboard
            </li>
        </ul>
    </div>
   
    <div class="card mt-3">
        <div class="card-header py-3 ml-2 mr-2">
            <div class="grid grid-cols-1 gap-x-5 md:grid-cols-3 xl:grid-cols-5 mb-5">
<h4 class="md:col-span-2">Barang Masuk Hari Ini</h4>
            <button class="btn bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center" style="
    justify-content: flex-end;">
                <i data-lucide="printer" id="printInIcon"
                class="h-4 group-data-[sidebar-size=sm]:h-5 group-data-[sidebar-size=sm]:w-5 transition group-hover/menu-link:animate-icons fill-slate-100 group-hover/menu-link:fill-blue-200 group-data-[sidebar=dark]:fill-vertical-menu-item-bg-active-dark group-data-[sidebar=dark]:dark:fill-zink-600 group-data-[layout=horizontal]:dark:fill-zink-600 group-data-[sidebar=brand]:fill-vertical-menu-item-bg-active-brand group-data-[sidebar=modern]:fill-vertical-menu-item-bg-active-modern group-data-[sidebar=dark]:group-hover/menu-link:fill-vertical-menu-item-bg-active-dark group-data-[sidebar=dark]:group-hover/menu-link:dark:fill-custom-500/20 group-data-[layout=horizontal]:dark:group-hover/menu-link:fill-custom-500/20 group-data-[sidebar=brand]:group-hover/menu-link:fill-vertical-menu-item-bg-active-brand group-data-[sidebar=modern]:group-hover/menu-link:fill-vertical-menu-item-bg-active-modern group-data-[sidebar-size=md]:block group-data-[sidebar-size=md]:mx-auto group-data-[sidebar-size=md]:mb-2"></i>
            <span id="printInText" class=" rounded-full">Cetak</span>
            </button>
        </div>
        </div>
        <div class="card-body ">
        <table class="display w-full text-center table-auto min-w-max" style="width:100%" id="myTableIn">
                        <thead>
                            <tr>
                                <th class="text-center cursor-pointer hover:bg-gray-100">NO</th>
                                <th class="text-center cursor-pointer hover:bg-gray-100">Name</th>
                                <th class="text-center cursor-pointer hover:bg-gray-100">
                                    Date
                                </th>
                                <th class="text-center max-w-xs">Brand</th>
                                <th class="text-center cursor-pointer hover:bg-gray-100">
                                    Category
                                </th>
                                <th class="text-center max-w-xs">Description</th>
                                <th class="text-center max-w-xs">Total</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
        </table>
        </div>

    </div>
    <div class="card mt-3">
        <div class="card-header py-3 ml-2 mr-2">
            <div class="grid grid-cols-1 gap-x-5 md:grid-cols-3 xl:grid-cols-5 mb-5">
<h4 class="md:col-span-2">Barang Keluar Hari Ini</h4>
            <button class="btn bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center" style="
    justify-content: flex-end;">
                <i data-lucide="printer" id="printOutIcon"
                class="h-4 group-data-[sidebar-size=sm]:h-5 group-data-[sidebar-size=sm]:w-5 transition group-hover/menu-link:animate-icons fill-slate-100 group-hover/menu-link:fill-blue-200 group-data-[sidebar=dark]:fill-vertical-menu-item-bg-active-dark group-data-[sidebar=dark]:dark:fill-zink-600 group-data-[layout=horizontal]:dark:fill-zink-600 group-data-[sidebar=brand]:fill-vertical-menu-item-bg-active-brand group-data-[sidebar=modern]:fill-vertical-menu-item-bg-active-modern group-data-[sidebar=dark]:group-hover/menu-link:fill-vertical-menu-item-bg-active-dark group-data-[sidebar=dark]:group-hover/menu-link:dark:fill-custom-500/20 group-data-[layout=horizontal]:dark:group-hover/menu-link:fill-custom-500/20 group-data-[sidebar=brand]:group-hover/menu-link:fill-vertical-menu-item-bg-active-brand group-data-[sidebar=modern]:group-hover/menu-link:fill-vertical-menu-item-bg-active-modern group-data-[sidebar-size=md]:block group-data-[sidebar-size=md]:mx-auto group-data-[sidebar-size=md]:mb-2"></i>
            <span class=" rounded-full">Cetak</span>
            </button>
        </div>
        </div>
        <div class="card-body ">
        <table class="display w-full text-center table-auto min-w-max" style="width:100%" id="myTableOut">
                        <thead>
                            <tr>
                                <th class="text-center cursor-pointer hover:bg-gray-100">NO</th>
                                <th class="text-center cursor-pointer hover:bg-gray-100">Name</th>
                                <th class="text-center cursor-pointer hover:bg-gray-100">
                                    Date
                                </th>
                                <th class="text-center max-w-xs">Brand</th>
                                <th class="text-center cursor-pointer hover:bg-gray-100">
                                    Category
                                </th>
                                <th class="text-center max-w-xs">Description</th>
                                <th class="text-center max-w-xs">Total</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
        </table>
        </div>
    </div>
    <div class="chart-card card mt-2" >
        <div class="card-body ">
            <div class="grid grid-cols-1 gap-x-5 md:grid-cols-4 xl:grid-cols-5 mb-5">
                <h5 class=" md:col-span-2 text-16">Barang Masuk dan Barang Keluar Bulanan</h5>
                <select class="monthSelect" id="monthSelect">
                    <option value="01">January</option>
                    <option value="02">February</option>
                    <option value="03">March</option>
                    <option value="04">April</option>
                    <option value="05">May</option>
                    <option value="06">June</option>
                    <option value="07">July</option>
                    <option value="08">August</option>
                    <option value="09">September</option>
                    <option value="10">October</option>
                    <option value="11">November</option>
                    <option value="12">December</option>
                </select>
                <select class="yearSelect" id="yearSelect">
                    <option value="2025">2025</option>
                    <option value="2026">2026</option>
                    <option value="2027">2027</option>
                    <option value="2028">2028</option>
                    <option value="2029">2029</option>
                    <option value="2030">2030</option>
                    <option value="2031">2031</option>
                    <option value="2032">2032</option>
                </select>
            </div>
                <div id="monthlyChart"></div>
    </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
@vite(['resources/js/dashboard.js'])

<script>

</script>
@endsection