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
                <a href="dashboard" class="text-slate-400 dark:text-zink-200">Template-Larevel12</a>
            </li>
            <li class="text-slate-700 dark:text-zink-100">
                Dashboard
            </li>
        </ul>
    </div>
    <button id="sweet_alert"
        class="bg-custom-600 text-white btn border-custom-600 hover:text-custom-500 hover:bg-custom-200 hover:border-custom-500 focus:text-white focus:bg-custom-300 focus:border-custom-500 focus:ring focus:ring-custom-100 active:text-custom-500 active:bg-custom-300 active:border-custom-500 active:ring active:ring-custom-100 dark:bg-custom-500 dark:hover:bg-zink-700 dark:ring-custom-400/20 dark:focus:bg-zink-700">
        Sweet Alert(Swal Fire)
    </button>
    <button id="modal"
        class="bg-custom-600 text-white btn border-custom-600 hover:text-custom-500 hover:bg-custom-200 hover:border-custom-500 focus:text-white focus:bg-custom-300 focus:border-custom-500 focus:ring focus:ring-custom-100 active:text-custom-500 active:bg-custom-300 active:border-custom-500 active:ring active:ring-custom-100 dark:bg-custom-500 dark:hover:bg-zink-700 dark:ring-custom-400/20 dark:focus:bg-zink-700">
        Modal
    </button>
    <div class="card mt-3">
        <div class="card-body">
            <div id="animate-anything-css"></div>
            <h6 class="mb-4 text-15">Select</h6>
            <div class="grid grid-cols-1 gap-5 md:grid-cols-2 xl:grid-cols-3">
                <div class="flex flex-col">
                    <label for="select" class="mb-1 text-sm font-medium text-gray-700 dark:text-zink-200">Select</label>
                    <select
                        class="form-select border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200">
                        <option selected>Select</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="flex flex-col">
                    <label for="select2" class="mb-1 text-sm font-medium text-gray-700 dark:text-zink-200">Select
                        2</label>
                    <select
                        class="select2 border border-gray-300 dark:border-zink-500 rounded px-3 py-2 w-full bg-white dark:bg-zink-600 text-sm">
                        <option selected>Select</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-body">
            <h6 class="mb-4 text-15">Basic</h6>
            <table id="basic_tables" class="display stripe group" style="width:100%">
                <thead>
                    <tr>
                        <th class="ltr:!text-left rtl:!text-right">Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>61</td>
                        <td>2011-04-25</td>
                        <td>$320,800</td>
                    </tr>
                    <tr>
                        <td>Garrett Winters</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td>63</td>
                        <td>2011-07-25</td>
                        <td>$170,750</td>
                    </tr>
                </tbody>
                
            </table>
        </div>
    </div>
</div>
<!-- MODAL CONTOH -->
<div id="ModalContoh" modal-center
    class="fixed flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show">
    <div class="w-screen lg:w-[55rem] bg-white shadow rounded-md dark:bg-zink-600 flex flex-col h-full">
        <div class="flex items-center justify-between p-4 border-b border-slate-200 dark:border-zink-500">
            <h5 class="text-16">List Defect</h5>
            <button data-modal-close="ModalContoh"
                class="transition-all duration-200 ease-linear text-slate-500 hover:text-red-500 dark:text-zink-200 dark:hover:text-red-500"><i
                    data-lucide="x" class="size-5"></i></button>
        </div>
        <div class="max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto">
            <div class="grid grid-cols-1 gap-5 md:grid-cols-1 xl:grid-cols-1 mx-5 ">
                <div class="mb-3">
                    <label for="inputText" class="inline-block mb-2 text-base font-medium">Text <span
                            class="text-red-500">*</span></label>
                    <input type="text" id="inputText"
                        class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                        required>
                </div>
                <div>
                    <label for="textArea" class="inline-block mb-2 text-base font-medium">Example Textarea</label>
                    <textarea
                        class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                        id="textArea" rows="3"></textarea>
                </div>
            </div>
        </div>
        <div class="flex items-center justify-between p-4 mt-auto border-t border-slate-200 dark:border-zink-500">
        </div>
    </div>
</div>
<script>
    gsap.from("#create", { duration: 1.5, x: 80, opacity: 0, ease: "power3.out" });
gsap.to("#animate-anything-css", {
    duration: 10,
    ease: "none",
    repeat: -1,
    rotation: 360,
})

let openModalId = null;
//  Show Modal
const toggleElementState = (elementId, show, delay) => {
    const bodyElement = document.body;

    if (document.getElementById("backDropDiv")) {
        var backDropOverlay = document.getElementById("backDropDiv");
    } else {
        var backDropOverlay = document.createElement('div');
        backDropOverlay.className = 'fixed inset-0 bg-gray-900/20 z-[1049] backdrop-overlay hidden';
        backDropOverlay.id = 'backDropDiv';
    }

    const element = document.getElementById(elementId);
    if (element) {
        if (!show) {
            element.classList.add('show');
            backDropOverlay.classList.add('hidden');
            setTimeout(() => {
                element.classList.add("hidden");
            }, 350);
        } else {
            element.classList.remove("hidden");
            setTimeout(() => {
                element.classList.remove('show');
                backDropOverlay.classList.remove('hidden');
            }, delay);
        }
        bodyElement.classList.toggle('overflow-hidden', show);
        if (show) {
            openDrawerId = elementId;
            openModalId = elementId;
        } else {
            openDrawerId = null;
            openModalId = null;
        }
    }
}
// Close modal 
document.addEventListener("DOMContentLoaded", function() {
    let backDropOverlay = document.getElementById("backDropDiv");

    if (backDropOverlay) {
        backDropOverlay.addEventListener("click", function() {
            if (openModalId) {
                toggleElementState(openModalId, false, 200);
            }
        });
    }
});
$(document).ready(function() {
    // Select 2
    $('.select2').select2({
        theme: "bootstrap-5",
        width: function() {
            return $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ?
                '100%' : 'style';
        }
    });
    // Sweet Alert Swal.Fire
    $('#sweet_alert').on('click', function() {
        Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showDenyButton: true,
            showCancelButton: true,
            confirmButtonText: 'Save',
            customClass: {
                confirmButton: 'text-white bg-green-500 border-green-500 btn hover:text-white hover:bg-green-600 hover:border-green-600 focus:text-white focus:bg-green-600 focus:border-green-600 focus:ring focus:ring-green-100 active:text-white active:bg-green-600 active:border-green-600 active:ring active:ring-green-100 dark:ring-green-400/10 ltr:mr-1 rtl:ml-1',
                cancelButton: 'text-white bg-red-500 border-red-500 btn hover:text-white hover:bg-red-600 hover:border-red-600 focus:text-white focus:bg-red-600 focus:border-red-600 focus:ring focus:ring-red-100 active:text-white active:bg-red-600 active:border-red-600 active:ring active:ring-red-100 dark:ring-custom-400/20',
                denyButton: "text-white btn bg-sky-500 border-sky-500 hover:text-white hover:bg-sky-600 hover:border-sky-600 focus:text-white focus:bg-sky-600 focus:border-sky-600 focus:ring focus:ring-sky-100 active:text-white active:bg-sky-600 active:border-sky-600 active:ring active:ring-sky-100 dark:ring-sky-400/20 ltr:mr-1 rtl:ml-1"
            },
            buttonsStyling: false,
            denyButtonText: 'Eror',
            showCloseButton: true
        }).then(function(result) {
            if (result.value) {
                Swal.fire({
                    icon: 'success',
                    title: 'Your work has been saved',
                    showConfirmButton: false,
                    timer: 1500,
                    showCloseButton: true
                })
            } else if (result.isDenied) {
                Swal.fire({
                    title: 'Oops...',
                    text: 'Something went wrong!',
                    icon: 'error',
                    customClass: {
                        confirmButton: 'text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20',
                    },
                    buttonsStyling: false,
                    footer: '<a href="#!" class="inline-flex items-center gap-2 mt-3 text-base font-medium text-custom-400 hover:text-custom-600">Why do I have this issue?</a>',
                    showCloseButton: true
                })
            }
        });
    });
    // Modal
    $('#modal').on('click', function() {
        toggleElementState('ModalContoh', true, 200);
    })
})
</script>
@endsection