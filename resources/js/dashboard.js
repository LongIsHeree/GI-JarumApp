import { animate, onScroll, utils } from 'animejs';

document.addEventListener('DOMContentLoaded', function() {
    let printInElements = document.querySelectorAll('#printInIcon, #printOutIcon');

    printInElements.forEach(el => {
        el.addEventListener('mouseenter', function() {
            animate(el, {
                translateX: [-300, 0],
                duration: 500,
                easing: 'easeOutElastic'
            });
        });
    });

    $('.monthSelect').select2({
        theme: "bootstrap-5",
        placeholder: "Select Month",
        minimumResultsForSearch: -1,
        width: function() {
            return $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ?
                '100%' : 'style';
        }
    });

    $('.yearSelect').select2({
        theme: "bootstrap-5",
        placeholder: "Select Year",
        minimumResultsForSearch: -1,
        width: function() {
            return $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ?
                '100%' : 'style';
        }
    });
});

let tableIn = $('#myTableIn').DataTable({});
let tableOut = $('#myTableOut').DataTable({});
let openModalId = null;
let openDrawerId = null;

// Fungsi untuk mendapatkan jumlah hari dalam bulan tertentu
function getDaysInMonth(month, year) {
    return new Date(year, month, 0).getDate();
}

// Fungsi untuk generate data random
function generateRandomData(days) {
    const data = [];
    for (let i = 1; i <= days; i++) {
        data.push(Math.floor(Math.random() * 100) + 10);
    }
    return data;
}

// Fungsi untuk membuat/update chart
function updateChart(month, year) {
    const daysInMonth = getDaysInMonth(month, year);
    const categories = Array.from({length: daysInMonth}, (_, i) => i + 1);
    
    const barangMasukData = generateRandomData(daysInMonth);
    const barangKeluarData = generateRandomData(daysInMonth);

    const options = {
        series: [{
            name: 'Barang Masuk',
            data: barangMasukData
        }, {
            name: 'Barang Keluar',
            data: barangKeluarData
        }],
        chart: {
            type: 'area',
            height: 400,
            toolbar: {
                show: true
            },
            zoom: {
                enabled: true
            }
        },
        colors: ['#10b981', '#ef4444'],
        dataLabels: {
            enabled: false
        },
        stroke: {
            curve: 'smooth',
            width: 3
        },
        title: {
            text: 'Grafik Barang Masuk dan Keluar',
            align: 'left',
            style: {
                fontSize: '16px',
                fontWeight: 'bold'
            }
        },
        grid: {
            borderColor: '#e7e7e7',
            row: {
                colors: ['#f3f3f3', 'transparent'],
                opacity: 0.5
            },
        },
        markers: {
            size: 4,
            hover: {
                size: 6
            }
        },
        xaxis: {
            categories: categories,
            title: {
                text: 'Hari'
            },
            tickAmount: 15
        },
        yaxis: {
            title: {
                text: 'Jumlah Barang'
            },
            min: 0
        },
        legend: {
            position: 'top',
            horizontalAlign: 'right',
            floating: false,
            offsetY: -10,
            offsetX: 0
        },
        tooltip: {
            shared: true,
            intersect: false,
            y: {
                formatter: function (val) {
                    return val + " items"
                }
            }
        }
    };

    // Destroy chart jika sudah ada dan merupakan instance ApexCharts
    if (window.monthlyChart && typeof window.monthlyChart.destroy === 'function') {
        window.monthlyChart.destroy();
    }

    // Buat chart baru
    window.monthlyChart = new ApexCharts(document.querySelector("#monthlyChart"), options);
    window.monthlyChart.render();
}


function initScrollAnimation() {
    const chartCard = document.querySelector('.chart-card');
    
    if (!chartCard) return;
    
    // Set initial state
    chartCard.style.opacity = '0';
    chartCard.style.transform = 'translateX(-100px)';
    
    // Create Intersection Observer
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                // Animasi dengan Anime.js
                animate('.chart-card', {
                    translateX: ['-100px', '0px'],
                    opacity: [0, 1],
                    duration: 1000,
                    easing: 'easeOutExpo'
                });
                
                // Stop observing setelah animasi
                observer.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.2,
        rootMargin: '0px 0px -50px 0px'
    });
    
    observer.observe(chartCard);
}

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

document.addEventListener("DOMContentLoaded", function() {
    // Inisialisasi animasi scroll
    initScrollAnimation();
    
    // Inisialisasi Chart
    const currentMonth = new Date().getMonth() + 1;
    const currentYear = new Date().getFullYear();
    
    $('#monthSelect').val(currentMonth.toString().padStart(2, '0')).trigger('change');
    $('#yearSelect').val(currentYear.toString()).trigger('change');
    
    updateChart(currentMonth, currentYear);
    

    $('#monthSelect').on('change', function() {
        const month = parseInt($(this).val());
        const year = parseInt($('#yearSelect').val());
        updateChart(month, year);
    });
    
    
    $('#yearSelect').on('change', function() {
        const month = parseInt($('#monthSelect').val());
        const year = parseInt($(this).val());
        updateChart(month, year);
    });
    
    // Close modal dengan backdrop
    let backDropOverlay = document.getElementById("backDropDiv");
    if (backDropOverlay) {
        backDropOverlay.addEventListener("click", function() {
            if (openModalId) {
                toggleElementState(openModalId, false, 200);
            }
        });
    }
});