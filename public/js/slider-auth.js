const images = document.querySelectorAll(".container__image");
const dots = document.querySelectorAll(".container__dots--item");

let currentIndex = 0;

dots.forEach((item , index) => {
    item.addEventListener('click' , () => {
        currentIndex = index;
        updateStatusImage(currentIndex);
    })
});

images[currentIndex].classList.add("active");
dots[currentIndex].classList.add("active");

function updateStatusImage(index) {
  images.forEach((item, ind) => {
    if (ind == index) {
        dots[index].classList.add("active")
      images[index].classList.add("active");
    } else {
      if (index == images.length) {
        currentIndex = 0;
        item.classList.remove("active");
        images[currentIndex].classList.add("active");
      }else{
        item.classList.remove("active");
      }
    }
  });
  dots.forEach((item, inde) => {
    if (inde == index) {
        dots[index].classList.add("active")
    }else{
        if (index == dots.length) {
            currentIndex = 0;
            item.classList.remove("active");
            dots[currentIndex].classList.add("active");
          }else{
            item.classList.remove("active");
          }
    }
});
}

setInterval(() => {
    currentIndex++;
    updateStatusImage(currentIndex);
} , 7000)
