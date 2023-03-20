// import './bootstrap';
// import '@teamhive/lottie-player';
// import Alpine from 'alpinejs';

// window.Alpine = Alpine;

console.log('✅app.js');

const navigation = document.querySelector('.navigation');
const toggle= document.querySelector('.toggle');
toggle.onclick = function(){
  toggle.classList.toggle('active');
  navigation.classList.toggle('active');
}



const nav = document.querySe1ector( '.navigation' );
window.addEventListener("scroll", (event) => {
   if(window.scrollX > 500) {
        console.log('scroll OUAIS');
        nav.classList.add("scroll")}
    else{
        nav.classList.remove("scroll")}
});




Alpine.start();
const player = document.querySelector('lottie-player');
player.load('https://assets3.lottiefiles.com/packages/lf20_UJNc2t.json');
/**
 *
  * Wrap any Lottie animations you want the effect to apply to with a div tag with

   * the class "hoverEffects" and the code below should handle playing on hover and

    * playing in reverse on mouse leave.

     */

     const playerContainers = document.querySelectorAll(".hoverEffects");

     playerContainers.forEach(container => {

       container.addEventListener("mouseover", () => {

           const player = container.querySelector("lottie-player");

               player.setDirection(1);

                   player.play();

                     });



                       container.addEventListener("mouseleave", () => {

                           const player = container.querySelector("lottie-player");

                               player.setDirection(-1);

                                   player.play();

                                     });

                                     });



