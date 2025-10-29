import { animate, splitText, stagger, random, createTimeline } from 'animejs';

const tl = createTimeline({ defaults: { duration: 2000 } });
tl.label('start')
.add('#dashboardIcon', {
    translateX: [-80, 0],
    duration: 600,
    rotate: '1turn'
}, 'start')
.add('#dashboardText', {
    translateX: [80, 0],
    duration: 600,
    easing: 'out-expo',
}, 'start')
.add('#logoGI', {
            translateY: [-80, 0],
            opacity: [0, 1],
            duration: 700,
            easing: 'out-quad'
        }, 'start')
        .add('#masterIcon', {
            translateX: [-80, 0],
            opacity: [0, 1],
            duration: 600,
            rotate: '1turn'
        }, 300)
        .add('#masterText', {
            translateX: [80, 0],
            opacity: [0, 1],
            duration: 600,
            easing: 'out-expo',
        }, 300)
        .add('#itemIcon', {
            translateX: [-80, 0],
            opacity: [0, 1],
            duration: 600,
            rotate: '1turn'
        }, 600)
        .add('#itemText', {
            translateX: [80, 0],
            opacity: [0, 1],
            duration: 600,
            easing: 'out-expo',
        }, 600)
        .add('#reportIcon', {
            translateX: [-80, 0],
            opacity: [0, 1],
            duration: 600,
            rotate: '1turn'
        }, 900)
        .add('#reportText', {
            translateX: [80, 0],
            opacity: [0, 1],
            duration: 600,
            easing: 'out-expo',
        }, 900);
document.addEventListener('DOMContentLoaded',function(){
let masterDropdown = document.getElementById('masterDropdown');
let transaksiDropdown = document.getElementById('transaksiDropdown');
let laporanDropdown = document.getElementById('laporanDropdown');

masterDropdown.addEventListener('click',function(){
animate('#masterIcon', {
                y: [
    { to: '-1.00rem', ease: 'outExpo', duration: 400 },
    { to: 0, ease: 'outBounce', duration: 400 }
  ],
                duration: 400,
                easing: 'easeOutBounce'
            });
});

transaksiDropdown.addEventListener('click',function(){
animate('#itemIcon', {
    y: [
    { to: '-1.00rem', ease: 'outExpo', duration: 400 },
    { to: 0, ease: 'outBounce', duration: 400 }
  ],
    duration: 400,
    easing: 'easeOutBounce',
            }
        );
});
laporanDropdown.addEventListener('click',function(){
animate('#reportIcon', {
                y: [
    { to: '-1.00rem', ease: 'outExpo', duration: 400 },
    { to: 0, ease: 'outBounce', duration: 400 }
  ],
                duration: 400,
                easing: 'easeOutBounce'
            });
});


});
    