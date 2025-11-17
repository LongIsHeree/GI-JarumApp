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
<h3 class="text-slate-600">Barang</h3>
</div>

<div class="card mt-3 mb-3 mr-2 ml-2 rounded-b-2xl">
    <div class="card-header bg-slate-200 ">
    <button type="button" class="btn bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4  inline-flex items-center mb-2 mt-2" style="
    justify-content: flex-end;" id="addBtn" data-toggle="modal" data-target="#modalBarang">
               <span id="addIcon" 
                    class="min-w-[0.50rem] inline-block text-start text-[16px]">
                    <i data-lucide="file-plus" class="h-4 transition group-hover/menu-link:animate-icons fill-slate-100 group-hover/menu-link:fill-blue-200"></i>
                </span>
                <span id="addText" class="align-middle">Tambah</span>
            </button>
    </div>
    <div class="card-body">
         <table class="display w-full text-center table-auto min-w-max" style="width:100%" id="myTable">
                        <thead>
                            <tr>
                                <th class="text-center cursor-pointer hover:bg-gray-100">NO</th>
                                <th class="text-center cursor-pointer hover:bg-gray-100">Nama</th>
                                <th class="text-center cursor-pointer hover:bg-gray-100">
                                    Keterangan
                                </th>
                                <th class="text-center max-w-xs">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
        </table>
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
                    data-lucide="x" class="size-5" ></i></button>
        </div>
        <div class="max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto">
             <form id = "BarangForm" method="POST" action="{{ url('process/addBarang') }}" enctype="multipart/form-data" >
            <div class="grid grid-cols-1 gap-5 md:grid-cols-1 xl:grid-cols-1 mx-5 ">
                <div class="mb-3">
                    <label for="inputText" class="inline-block mb-2 text-base font-medium">Nama Barang <span
                            class="text-red-500">*</span></label>
                    <input type="text" id="inputText"
                        class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                        required>
                </div>
            </div>
                 <div class="grid grid-cols-1 gap-5 md:grid-cols-2 xl:grid-cols-1 mx-5 ">
<div class="md:col-span-1">
<label for="merekSelect">Kategori</label>
        <select class="merekSelect" id="merekSelect" aria-placeholder="Pilih Merek">
                    <option></option>
                    <option value="01">Looper Flatseamer 68217</option>
                    <option value="02">Tahanan Looper Interlock Kepala Besar</option>
                    <option value="03">Looper Obras Bawah Hikari 277034</option>
                    <option value="04">Lidah Flatseamer 2361010</option>
                    <option value="05">Gigi Flatseamer 68096</option>
                </select>
        </div>
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
                 </div>
                  <div class="grid grid-cols-1 gap-5 md:grid-cols-1 xl:grid-cols-1 mx-5">
                <div class="mb-3">
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
    <svg id="submitIcon"
      height="24"
      width="24"
      viewBox="0 0 24 24"
      xmlns="http://www.w3.org/2000/svg"
    >
      <path d="M0 0h24v24H0z" fill="none"></path>
      <path
        d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z"
        fill="currentColor"
      ></path>
    </svg>
  </div>
</button>
   </form>
        </div>
      
    </div>
        </div>
      
@vite(['resources/js/master.js'])
@endsection