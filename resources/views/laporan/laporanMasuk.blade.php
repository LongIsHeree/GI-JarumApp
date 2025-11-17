@extends('content.app')
@section('content')
<style>
.contactButton {
    background: #7079f0;
    color: white;
    font-family: inherit;
    padding: 0.45em;
    padding-left: 1em;
    font-size: 17px;
    font-weight: 500;
    border-radius: 0.9em;
    border: none;
    cursor: pointer;
    letter-spacing: 0.05em;
    display: flex;
    align-items: center;
    box-shadow: inset 0 0 1.6em -0.6em #714da6;
    overflow: hidden;
    position: relative;
    height: 2.8em;
    padding-right: 3em;
}

.iconButton {
    margin-left: 1em;
    position: absolute;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 2.2em;
    width: 2.2em;
    border-radius: 0.7em;
    box-shadow: 0.1em 0.1em 0.6em 0.2em #7a8cf3;
    right: 0.3em;
    transition: all 0.3s;
}

.contactButton:hover {
    transform: translate(-0.05em, -0.05em);
    box-shadow: 0.15em 0.15em #5566c2;
}

.contactButton:active {
    transform: translate(0.05em, 0.05em);
    box-shadow: 0.05em 0.05em #5566c2;
}
</style>
<div class="mt-3 mb-3 mr-2 ml-2">
    <h3 class="text-slate-600">Laporan Barang Masuk</h3>
</div>

<div class="card mt-3 mb-3 mr-2 ml-2 rounded-b-2xl">
    
    <div class="card-body">
         <div class="grid grid-cols-1 gap-x-5 md:grid-cols-4 xl:grid-cols-5 mb-5">
                <h5 class=" md:col-span-2 text-16">Barang Masuk Bulanan</h5>
            </div>
            <div class="grid grid-cols-1 gap-x-5 md:grid-cols-2 xl:grid-cols-5 mb-5">
           <div class="md:col-span-1">
            <label for="tanggal_awal"> Tanggal Awal</label>
              <br>
        <input type="date" name="tanggal_awal" id="tanggal_awal" value="" placeholder="Masukkan tanggal..." class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
           </div>
           <div class="md:col-span-1">
            <label for="tanggal_akhir"> Tanggal Akhir</label>
              <br>
        <input type="date" name="tanggal_akhir" id="tanggal_akhir" value="" placeholder="Masukkan tanggal..." class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
           </div>
    </div>
     <div class="grid grid-cols-1 gap-x-5 md:grid-cols-2 xl:grid-cols-5 mb-5">
        <div class="md:col-span-1">
<label for="kategoriSelect">Kategori</label>
        <select class="kategoriSelect" id="kategoriSelect" aria-placeholder="Pilih Kategori">
                    <option></option>
                    <option value="01">Bingkai Jarum</option>
                    <option value="02">Black Box</option>
                    <option value="03">Sparepart</option>
                    <option value="04">Sharp Tools</option>
                    <option value="05">Jarum</option>
                </select>
        </div>
        <div class="md:col-span-1 ">
            <br>
    <button class=" bg-white text-gray-800 font-bold rounded border-b-2 border-green-500 hover:border-green-600 hover:bg-green-500 hover:text-white shadow-md py-2 px-6 inline-flex ">
      <span class="mr-2">Cetak</span>
      <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 1024 1024" class="icon" version="1.1"><path d="M192 234.666667h640v64H192z" fill="#424242"/><path d="M85.333333 533.333333h853.333334v-149.333333c0-46.933333-38.4-85.333333-85.333334-85.333333H170.666667c-46.933333 0-85.333333 38.4-85.333334 85.333333v149.333333z" fill="#616161"/><path d="M170.666667 768h682.666666c46.933333 0 85.333333-38.4 85.333334-85.333333v-170.666667H85.333333v170.666667c0 46.933333 38.4 85.333333 85.333334 85.333333z" fill="#424242"/><path d="M853.333333 384m-21.333333 0a21.333333 21.333333 0 1 0 42.666667 0 21.333333 21.333333 0 1 0-42.666667 0Z" fill="#00E676"/><path d="M234.666667 85.333333h554.666666v213.333334H234.666667z" fill="#90CAF9"/><path d="M800 661.333333h-576c-17.066667 0-32-14.933333-32-32s14.933333-32 32-32h576c17.066667 0 32 14.933333 32 32s-14.933333 32-32 32z" fill="#242424"/><path d="M234.666667 661.333333h554.666666v234.666667H234.666667z" fill="#90CAF9"/><path d="M234.666667 618.666667h554.666666v42.666666H234.666667z" fill="#42A5F5"/><path d="M341.333333 704h362.666667v42.666667H341.333333zM341.333333 789.333333h277.333334v42.666667H341.333333z" fill="#1976D2"/></svg>
    </button>
  </div>
     </div>
     </div>
</div>
<!-- MODAL CONTOH -->
<div id="modalForm" modal-center
    class="fixed flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show">
    <div class="w-screen lg:w-[55rem] bg-white shadow rounded-md dark:bg-zink-600 flex flex-col h-full">
        <div class="flex items-center justify-between p-4 border-b border-slate-200 dark:border-zink-500">
            <h5 class="text-16">Tambah Barang</h5>
            <button data-modal-close="modalForm"
                class="transition-all duration-200 ease-linear text-slate-500 hover:text-red-500 dark:text-zink-200 dark:hover:text-red-500"><i
                    data-lucide="x" class="size-5"></i></button>
        </div>
        <div class="max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto ">
            <form id="BarangForm" method="POST" action="{{ url('process/addBarang') }}" enctype="multipart/form-data">
                <div class="grid grid-cols-1 gap-5 md:grid-cols-3 xl:grid-cols-1 mx-5 ">
                    <div class="mb-3">
                        <label for="inputText" class="inline-block mb-2 text-base font-medium">Tanggal<span
                                class="text-red-500">*</span></label>
                        <input type="text" id="inputText"
                            class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                            required>
                    </div>
                    <div class="mb-3">
                        <label for="barang_id" class="inline-block mb-2 text-base font-medium">Nama Barang<span
                                class="text-red-500">*</span></label>
                        <select name="barang_id" id="barang_id"
                            style="width:100%;" required="" data-select2-id="barang_id" tabindex="-1"
                          >
                            <option>Jarum 4A</option>
                            <option>Jarum 4B</option>
                            <option>Jarum 4C</option>
                            <span class="select2 select2-container select2-container--classic select2-container--focus"
                                dir="ltr" data-select2-id="1" style="width: 100%;"><span class="selection"><span
                                        class="select2-selection select2-selection--single" role="combobox"
                                        aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false"
                                        aria-labelledby="select2-barang_id-container"><span
                                            class="select2-selection__rendered" id="select2-barang_id-container"
                                            role="textbox" aria-readonly="true" title="-- Pilih Barang --">-- Pilih
                                            Barang --</span><span class="select2-selection__arrow"
                                            role="presentation"><b role="presentation"></b></span></span></span><span
                                    class="dropdown-wrapper" aria-hidden="true"></span></span>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="jumlah" class="inline-block mb-2 text-base font-medium">Jumlah<span
                                class="text-red-500">*</span></label>
                        <input type="text" id="jumlah"
                            class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                            required>
                    </div>
                </div>
                <div class="grid grid-cols-1 gap-5 md:grid-cols-1 xl:grid-cols-1 mx-5 ">
                    <div>
                        <label for="textArea" class="inline-block mb-2 text-base font-medium">Keterangan</label>
                        <textarea
                            class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                            id="textArea" rows="3"></textarea>
                    </div>
                </div>

        </div>
        <div class="flex items-center justify-end p-4 mt-auto border-t border-slate-200 dark:border-zink-500">
            <button class="contactButton" type="submit" id="submitBtn">
                Tambah
                <div class="iconButton ">
                    <svg id="submitIcon" height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z"
                            fill="currentColor"></path>
                    </svg>
                </div>
            </button>
            </form>
        </div>

    </div>
</div>
@vite(['resources/js/master.js'])
@endsection