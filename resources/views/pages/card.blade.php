<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .card {
  height: 200px;
  background-color: rgba(0, 0, 0, 0.4);
  color: white;
  font-size: 40px;
  margin: 10px;
  flex: 200px 0 0;
}
.cards img {
    width: 100%;
    object-fit: cover;
}
.cards-wrapper {
  display: flex; 
  transition: ease 0.5s;
}
.display-area {
  width: 880px;
/*   border: 1px solid black; */
  overflow-x: hidden;
  margin: auto;
}

.dots-wrapper {
  display: flex;
  justify-content: center;
  margin: auto;
}

.dot {
  border: none;
  background: rgba(0, 0, 0, 0.2);
  width: 20px;
  height: 20px;
  margin: 5px;
  border-radius: 50%;
  outline: none;
}
.dot:hover {
  background: rgba(0, 0, 0, 0.3);
}
.dot.active {
  background: rgba(0, 0, 0, 0.5);
}
    </style>
</head>
<body>
    <div class="display-area">
  <div class="cards-wrapper">
    
    <div class="card"><img src="https://picsum.photos/200?random=1" alt=""></div>
    <div class="card"><img src="https://picsum.photos/200?random=2" alt=""></div>  
    <div class="card"><img src="https://picsum.photos/200?random=3" alt=""></div>
    <div class="card"><img src="https://picsum.photos/200?random=4" alt=""></div>

    <div class="card"><img src="https://picsum.photos/200?random=5" alt=""></div>
    <div class="card"><img src="https://picsum.photos/200?random=6" alt=""></div>  
    <div class="card"><img src="https://picsum.photos/200?random=7" alt=""></div>
    <div class="card"><img src="https://picsum.photos/200?random=8" alt=""></div>
    
    <div class="card"><img src="https://picsum.photos/200?random=9" alt=""></div>
    <div class="card"><img src="https://picsum.photos/200?random=10" alt=""></div>  
    <div class="card"><img src="https://picsum.photos/200?random=11" alt=""></div>
    <div class="card"><img src="https://picsum.photos/200?random=12" alt=""></div>
    
    <div class="card"><img src="https://picsum.photos/200?random=13" alt=""></div>
    <div class="card"><img src="https://picsum.photos/200?random=14" alt=""></div>  
    <div class="card"><img src="https://picsum.photos/200?random=15" alt=""></div>
    <div class="card"><img src="https://picsum.photos/200?random=16" alt=""></div>
  </div> 
</div>

<div class="dots-wrapper">
  <button class="dot active"></button>
  <button class="dot"></button>
  <button class="dot"></button>
  <button class="dot"></button>
</div>

<script>
    // In HTML, .display-area has the width of 4 cards = 880px. Each card is 200px width and margin set to 10px.
// .display-area has a .cards-wrapper which contains all the cards. .cards-wrapper is set to display flex.
// .display-area has overflow hidden to hide the portion of cards-wrapper which extends beyond the container's width.

const wrapper = document.querySelector('.cards-wrapper');
// console.log(wrapper.clientWidth);

// grab the dots
const dots = document.querySelectorAll('.dot');
// the default active dot num which is array[0]
let activeDotNum = 0;

dots.forEach((dot, idx) => {  
//   number each dot according to array index
  dot.setAttribute('data-num', idx);
  
//   add a click event listener to each dot
  dot.addEventListener('click', (e) => {
    
    let clickedDotNum = e.target.dataset.num;
    // console.log(clickedDotNum);
//     if the dot clicked is already active, then do nothing
    if(clickedDotNum == activeDotNum) {
      // console.log('active');
      return;
    }
    else {
      // console.log('not active');
      // shift the wrapper
      let displayArea = wrapper.parentElement.clientWidth;
      // let pixels = -wrapper.clientWidth * clickedDotNum;
      let pixels = -displayArea * clickedDotNum
      wrapper.style.transform = 'translateX('+ pixels + 'px)';
//       remove the active class from the active dot
      dots[activeDotNum].classList.remove('active');
//       add the active class to the clicked dot
      dots[clickedDotNum].classList.add('active');
//       now set the active dot number to the clicked dot;
      activeDotNum = clickedDotNum;
    }
    
  });
});
</script>
</body>
</html>