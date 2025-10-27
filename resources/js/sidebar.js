import { animate, splitText, stagger, random, createTimeline  } from 'animejs';

const tl = createTimeline({ defaults: { duration: 2000 } });
tl.label('start')
.add('#dashboardIcon',{translateX: [-80,0],
    duration: 400,
    rotate:'1turn'
},'start')
.add('#dashboardText',{translateX:[80,0],
    duration: 400,
    easing: 'out-expo',
},'start')
.add('#itemInIcon',{translateX: [-80, 0],
    opacity: [0, 1],
    duration: 400,
    rotate:'1turn'
},200)
.add('#itemInText',{translateX:[80,0],
    duration: 400,
    easing: 'out-expo',
},200)
.add('#itemOutIcon',{translateX: [-80, 0],
    opacity: [0, 1],
    duration: 400,
    rotate:'1turn'
},400)
.add('#itemOutText',{translateX:[80,0],
    duration: 400,
    easing: 'out-expo',
},400);