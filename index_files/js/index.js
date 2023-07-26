window.addEventListener('scroll', reveal);
window.addEventListener('scroll', revealFooter);

function reveal() {
    var reveals = document.querySelectorAll('.reveal')

    for(var i = 0; i < reveals.length; i++) {

        var windowheight = window.innerHeight;
        var revealtop = reveals[i].getBoundingClientRect().top;
        var revealpoint = 10;
        

        if(revealtop < windowheight - revealpoint) {
            reveals[i].classList.add('active');
        } else {
            reveals[i].classList.remove('active');
        }
    }
}

function revealFooter() {

    var reveal = document.querySelector('.staticFooter')
    var mainSection = document.querySelector('.mainSection')
    var formSection = document.querySelector('.formSection')
    var windowheight = window.innerHeight
    var mainSectionbottom = mainSection.getBoundingClientRect().bottom
    var formSectiontop = formSection.getBoundingClientRect().top
    var revealpoint = 400
    var formRevealPoint = 10
    
    if (mainSectionbottom - revealpoint < 0 && formSectiontop > windowheight - formRevealPoint) {
        reveal.classList.add('activeFooter');
    } else {
        reveal.classList.remove('activeFooter');
    }
    
}

// Accordion

let accordionContentBig = document.querySelectorAll(".accordionContentBig");
    
accordionContentBig.forEach((item, index) => {
    let accordionActivator = item.querySelector(".accordionActivator");
    accordionActivator.addEventListener("click", () => {
        item.classList.toggle("open");
        let accordionContentBig = document.querySelectorAll(".accordionContentBig");
        accordionContentBig.forEach((item2, index2) => {
            if(index != index2) {
                item2.classList.remove("open");
            }
            
            let accordionDesc = item2.querySelector(".accordionDesc");
            if(item2.classList.contains("open")) {
                accordionDesc.style.height = `${accordionDesc.scrollHeight}px`;
            } else {
                accordionDesc.style.height = "0px";
            }
        })
    })
})

if(window.innerWidth <= 600) {
    let accordionContent = document.querySelectorAll(".accordionContent");
    
    accordionContent.forEach((item, index) => {
        let accordionActivator = item.querySelector(".accordionActivator");
        accordionActivator.addEventListener("click", () => {
            item.classList.toggle("open");

            let accordionContent = document.querySelectorAll(".accordionContent");

            accordionContent.forEach((item2, index2) => {
                if(index != index2) {
                    item2.classList.remove("open");
                }
                
                let accordionDesc = item2.querySelector(".accordionDesc");
                if(item2.classList.contains("open")) {
                    accordionDesc.style.height = `${accordionDesc.scrollHeight}px`;
                } else {
                    accordionDesc.style.height = "0px";
                }
            })
        })
    })
}