const carousel = document.querySelector(".carouselItems"),
arrowIcons = document.querySelectorAll(".carouselContainer > img"),
firstItem = carousel.querySelector(".carouselItem");

let isDragStart = false, isDragging = false, prevPageX, prevScrollLeft, positionDiff;

const showHideItems = () => {
    let scrollWidth = carousel.scrollWidth - carousel.clientWidth;
    arrowIcons[0].style.display = carousel.scrollLeft == 0 ? "none" : "block";
    arrowIcons[1].style.display = carousel.scrollLeft == scrollWidth ? "none" : "block";
}

arrowIcons.forEach(icon => {
    icon.addEventListener("click", () => {
        let firstItemWidth = firstItem.clientWidth;
        carousel.scrollLeft += icon.id == "left" ? - firstItemWidth : firstItemWidth;
        setTimeout(() => showHideItems(), 60);
    });
});

// const autoSlide = () => {
//     if(carousel.scrollLeft == (carousel.scrollWidth - carousel.clientWidth)) return;

//     positionDiff = Math.abs(positionDiff);
//     let firstItemWidth = firstItem.clientWidth;
//     let valDifference = firstItemWidth - positionDiff;

//     if(carousel.scrollLeft > prevScrollLeft) {
//         return carousel.scrollLeft += positionDiff > firstItemWidth / 3 ? valDifference : - positionDiff;
//     }
//     carousel.scrollLeft -= positionDiff > firstItemWidth / 3 ? valDifference : - positionDiff;
// }

const dragStart = (e) => {
    isDragStart = true;
    prevPageX = e.pageX || e.touches[0].pageX;
    prevScrollLeft = carousel.scrollLeft;
}

const dragging = (e) => {
    if(!isDragStart) return;
    e.preventDefault();
    isDragging = true;
    positionDiff = (e.pageX || e.touches[0].pageX) - prevPageX;
    carousel.scrollLeft = prevScrollLeft - positionDiff;
    carousel.classList.add("dragging");
    showHideItems();
}

const dragStop = () => {
    isDragStart = false;
    carousel.classList.remove("dragging");

    if(!isDragging) return;
    isDragging = false;
    // autoSlide();
}

carousel.addEventListener("mousedown", dragStart);
// carousel.addEventListener("touchstart", dragStart);

carousel.addEventListener("mousemove", dragging);
// carousel.addEventListener("touchmove", dragging);

carousel.addEventListener("mouseup", dragStop);
carousel.addEventListener("mouseleave", dragStop);
// carousel.addEventListener("touchend", dragStop);
