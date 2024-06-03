let cursor1 = document.querySelector('#cursor-1'),
    cursor2 = document.querySelector('#cursor-2');



// document.body.onpointermove = event => 
// {
//     const { clientX, clientY } = event;
    
//         cursor1.animate({
//             left: `${clientX}px`,
//             top: `${clientY}px`
        
//         }, {duration: 1000, fill: "forwards"})
    
//         cursor2.animate({
//             left: `${clientX}px`,
//             top: `${clientY}px`
        
//         }, {duration: 100, fill: "forwards"})
    
// }


let elProgress = document.querySelector('[data-js-progress]'),
    elProgressBar = elProgress.querySelector('[data-js-progress-bar]');

elProgress.addEventListener('mouseover', function(){
    elProgressBar.style="width:100%";
});
elProgress.addEventListener('mouseout', function(){
    elProgressBar.style="width:40%";
});

console.log(elProgress);

