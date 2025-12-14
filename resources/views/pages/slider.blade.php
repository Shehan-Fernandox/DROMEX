<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Infinite Product Slider</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
    font-family: Arial, sans-serif;
    padding: 20px;
}

.title {
    text-align: center;
    margin-bottom: 20px;
}

.slider-wrapper {
    position: relative;
    display: flex;
    align-items: center;
}

.product-slider {
    display: flex;
    gap: 16px;
    overflow-x: scroll;
    scroll-behavior: smooth;
    padding: 10px;
}

/* hide scrollbar */
.product-slider::-webkit-scrollbar {
    display: none;
}

.product-card {
    min-width: 250px;
    background: #fff;
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.15);
    padding: 10px;
    text-align: center;
    flex-shrink: 0;
}

.product-card img {
    width: 100%;
    border-radius: 8px;
}

.product-card h3 {
    font-size: 16px;
    margin: 10px 0 5px;
}

.product-card p {
    font-weight: bold;
    color: #28a745;
}

.arrow {
    width: 40px;
    height: 40px;
    background: #000;
    color: #fff;
    border: none;
    cursor: pointer;
    border-radius: 50%;
}

@media (max-width: 480px) {
    .arrow {
        display: none;
    }
}

    </style>
</head>
<body>

<h2 class="title">Popular Drones</h2>

<div class="slider-wrapper">
    <button class="arrow left">&#10094;</button>

    <div class="product-slider" id="slider">
        <!-- ORIGINAL ITEMS -->
        <div class="product-card">
            <img src="https://via.placeholder.com/250x180">
            <h3>DJI Mini 4 Pro</h3>
            <p>$899</p>
        </div>
        <div class="product-card">
            <img src="https://via.placeholder.com/250x180">
            <h3>DJI Air 3</h3>
            <p>$1099</p>
        </div>
        <div class="product-card">
            <img src="https://via.placeholder.com/250x180">
            <h3>Mavic 3 Pro</h3>
            <p>$1799</p>
        </div>
        <div class="product-card">
            <img src="https://via.placeholder.com/250x180">
            <h3>FPV Drone</h3>
            <p>$1299</p>
        </div>
    </div>

    <button class="arrow right">&#10095;</button>
</div>

<script>
    const slider = document.getElementById('slider');
const left = document.querySelector('.left');
const right = document.querySelector('.right');

const cardWidth = 270;

/* Clone items for infinite effect */
slider.innerHTML += slider.innerHTML;

right.addEventListener('click', () => {
    slider.scrollLeft += cardWidth;
    if (slider.scrollLeft >= slider.scrollWidth / 2) {
        slider.scrollLeft = 0;
    }
});

left.addEventListener('click', () => {
    slider.scrollLeft -= cardWidth;
    if (slider.scrollLeft <= 0) {
        slider.scrollLeft = slider.scrollWidth / 2;
    }
});

</script>
</body>
</html>
