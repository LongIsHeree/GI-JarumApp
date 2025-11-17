import { animate } from 'animejs';
import flatpickr from "flatpickr";
import "flatpickr/dist/flatpickr.min.css";

document.addEventListener('DOMContentLoaded',function(){
$('#barang_id').select2();
let tableIn = $('#myTable').DataTable({});
let addBtn = document.getElementById('addBtn');
let openModalId = null;
let openDrawerId = null;

  flatpickr("#tanggal_awal", {
    dateFormat: "Y-m-d",  // format tanggal
  });
  flatpickr("#tanggal_akhir", {
    dateFormat: "Y-m-d",  // format tanggal
  });


  $('.kategoriSelect').select2({
        theme: "bootstrap-5",
        placeholder: "Pilih Kategori",
        minimumInputLength: 0 ,
        width: function() {
            return $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ?
                '100%' : 'style';
        }
    });
    $('.merekSelect').select2({
        theme: "bootstrap-5",
        placeholder: "Pilih Merek",
        minimumInputLength: 0 ,
        width: function() {
            return $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ?
                '100%' : 'style';
        }
    });

// Show Modal Function
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

let backDropOverlay = document.getElementById("backDropDiv");
    if (backDropOverlay) {
        backDropOverlay.addEventListener("click", function() {
            if (openModalId) {
                toggleElementState(openModalId, false, 200);
            }
        });
    }
    addBtn.addEventListener('click',function(){
toggleElementState('modalForm',true,50);
animate('#addIcon', {
                y: [
    { to: '-1.00rem', ease: 'outExpo', duration: 400 },
    { to: 0, ease: 'outBounce', duration: 400 }
  ],
                duration: 400,
                easing: 'easeOutBounce'
            });
let submitBtn = document.getElementById('submitBtn');
submitBtn.addEventListener('click', function(){
animate('#submitIcon', {
               translateX:[0,80],
                opacity : [1,1],
                duration: 1000,
                easing: 'easeOutBounce'
            });

});
});
});

