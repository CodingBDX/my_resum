// show menu

const showMenu =  (toggleId, navId) =>{
    const toggle = document.getElementById(toggleId),
    nav = document.getElementById(navId)

    
    if(toggle && nav) {
        toggle.addEventListener('click', ()=>{
            nav.classList.toggle('show-menu')
        })
    }
}




showMenu('nav-toggle', 'nav-menu')



// remove menu

const navLink = document.querySelectorAll('.nav_link');

function linkAction() {
    const navMenu = document.getElementById('nav-menu');

    navMenu.classList.remove('show-menu');
}

navLink.forEach(n => n.addEventListener('click', linkAction));

// le menu reste actif si caché

const sections = document.querySelectorAll('section[id]')

function scrollActive(){
    const scrollY = window.pageYOffset

    sections.forEach(current =>{
        const sectionHeight = current.offsetHeight
        const sectionTop = current.offsetTop - 50;
        sectionId = current.getAttribute('id')

        if(scrollY > sectionTop && scrollY <= sectionTop + sectionHeight){
            document.querySelector('.nav_menu a[href*=' + sectionId + ']').classList.add('active-link')
        }else{
            document.querySelector('.nav_menu a[href*=' + sectionId + ']').classList.remove('active-link')
        }
    })
}
window.addEventListener('scroll', scrollActive)



// counter

const counters = document.querySelectorAll('.counter')


function runCounter() {
    counters.forEach(counter => {
        counter.innerText = 0;

        let target = +counter.dataset.count;
        let step = target /300;

        let countIt = function() {
            let displayCount = +counter.innerText;
            if(displayCount < target) {
                counter.innerText = Math.ceil(displayCount + step);
             
             setTimeout(countIt, 1);
                
            }
            else {
                counter.innerText = target;
            }
        }

        countIt();
    })
}

runCounter();

let counterSection = document.querySelector('.workon_grid')
let options = {  
    rootMargin :  '0px 0px  -2em 0px',
}

let done = 0;
const sectionObserved = new IntersectionObserver(function(entries) {
    if(entries[0].isIntersecting && done !==1) {
        done = 1;
        runCounter();
    }
}, options)

sectionObserved.observe(counterSection);