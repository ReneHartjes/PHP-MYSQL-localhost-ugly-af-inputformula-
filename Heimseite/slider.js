const carouselSlide = document.querySelector('.carouselslider');
const carouselImages = document.querySelector('.carouselslider img');

const prevBtn = document.querySelector('#prevBtn');
const nextBtn = document.querySelector('#nextBtn');


let count =0;
const size = 350;





nextBtn.addEventListener('click', () =>{

carouselSlide.style.transition = 'transform 0.4s ease-in-out'

count++;
if(size*count < 0){count=1}


carouselSlide.style.transform = 'translateX('+(-size*count)+'px)';

})


prevBtn.addEventListener('click', () =>{

  
    if(size*count > 2100){count=1}
    count--;
    carouselSlide.style.transform = 'translateX('+(-size*count)+'px)';

    
    carouselSlide.style.transition = 'transform 0.4s ease-in-out'
    })

   
    carouselSlide.addEventListener('transitioned', ()=>{

        console.log(carouselImages[count]);
        if(carouselImages[count].id === 'last'){
            count=4;
            carouselSlide.style.transform = 'translateX('+(-size*count)+'px)';

        }


        if(carouselImages[count].id === 'first'){
            count=2;
            carouselSlide.style.transform = 'translateX('+(-size*count)+'px)';

        }




    }) 