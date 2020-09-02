let count=0;
function Next(){
    let images = ['event0.jpg', 'event.jpg', 'event1.jpg', 'event2.jpg','event3.jpg', 'event4.jpg','event5.jpg','event6.jpg','event7.jpg','event8.jpg','event9.jpg','event10.jpg','event11.jpg','event12.jpg','event13.png','event14.jpg','event15.jpg', 'event16.jpg'];
    count++;
    if(count >= images.length){
        count = 0;
    }
    document.getElementById('pic').src = images[count];
}
 setInterval(Next,3000);
function Prev(){
    let images = ['event0.jpg', 'event.jpg', 'event1.jpg', 'event2.jpg','event3.jpg', 'event4.jpg','event5.jpg','event6.jpg','event7.jpg','event8.jpg','event9.jpg','event10.jpg','event11.jpg','event12.jpg','event13.png','event14.jpg','event15.jpg', 'event16.jpg'];
    count--;
    if(count < 0 ){
        count = images.length-1;
    }
     document.getElementById('pic').src = images[count];
}
clearInterval();
