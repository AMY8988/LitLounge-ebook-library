
import * as bootstrap from 'bootstrap';




// set active in aside bar
let currentLocation = location.href;
let itemLink = document.querySelectorAll('.item-link');

for(let i= 0 ; i < itemLink.length ; i++){
    let link = itemLink[i].getAttribute('href');
    if(currentLocation == link){
        itemLink[i].classList.add('active');
    }
}







// let signIn = new bootstrap.Modal(document.getElementById('signIn'), {
//             keyboard: false
//         })
//         window.onload = function() {
//             signIn.show();
// }






