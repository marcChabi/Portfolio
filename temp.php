<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SVGs Around Circle</title>
  <style>
    body {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background-color: #f0f0f0;
    }

    .circle-container {
      position: relative;
      width: 300px;
      height: 300px;
    }

    .circle-container svg {
      position: absolute;
      top: 50%;
      left: 50%;
      width: 50px;
      height: 50px;
      transform-origin: -100px 0px; /* Définit la distance au centre du cercle */
    }

    /* Animation de rotation */
    @keyframes rotate {
      0% {
        transform: rotate(0deg);
      }
      100% {
        transform: rotate(360deg);
      }
    }

    /* Appliquer l'animation aux SVG */
    .svg-1 {
      animation: rotate 5s linear infinite;
    }
    .svg-2 {
      animation: rotate 5s linear infinite;
      animation-delay: -1s;
    }
    .svg-3 {
      animation: rotate 5s linear infinite;
      animation-delay: -2s;
    }
    .svg-4 {
      animation: rotate 5s linear infinite;
      animation-delay: -3s;
    }
    .svg-5 {
      animation: rotate 5s linear infinite;
      animation-delay: -4s;
    }
  </style>
</head>
<body>
  <div class="circle-container">
    <svg class="svg-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
      <circle cx="50" cy="50" r="50" fill="red" />
    </svg>
    <svg class="svg-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
      <circle cx="50" cy="50" r="50" fill="green" />
    </svg>
    <svg class="svg-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
      <circle cx="50" cy="50" r="50" fill="blue" />
    </svg>
    <svg class="svg-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
      <circle cx="50" cy="50" r="50" fill="yellow" />
    </svg>
    <svg class="svg-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
      <circle cx="50" cy="50" r="50" fill="purple" />
    </svg>
  </div>
</body>
</html>
