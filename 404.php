<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>404</title>
  <base href="/" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />

  <style>
    html,
    body {
      overflow-x: clip;
      background-color: #faf9f6;
      height: 100%;
      margin: 0;
    }

    .fullscreen-container {
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    #responsiveImg {
      transition: opacity 1s ease-in-out;
      max-width: 100%;
      height: auto;
      opacity: 1;
    }

    .fade-in {
      opacity: 1;
    }
  </style>
  <link rel="icon" href="Resources/profilesrc/profileicon.ico" />
</head>

<body>
  <div class="fullscreen-container">
    <img src="resources/404src/404.png" alt="404 Image" id="responsiveImg" />
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

  <script>
    function changeImageSize() {
      var responsiveImg = document.getElementById("responsiveImg");
      var currentImgSrc = responsiveImg.src;

      var newImgSrc;
      if (window.innerWidth <= 320) {
        newImgSrc = "resources/404src/404-XS.png";
      } else if (window.innerWidth <= 700) {
        newImgSrc = "resources/404src/404-SM.png";
      } else if (window.innerWidth <= 1024) {
        newImgSrc = "resources/404src/404-MD.png";
      } else {
        newImgSrc = "resources/404src/404.png";
      }

      if (newImgSrc !== currentImgSrc) {
        responsiveImg.classList.remove("fade-in");
        void responsiveImg.offsetWidth;
        responsiveImg.classList.add("fade-in");
        responsiveImg.src = newImgSrc;
      }
    }

    window.onload = changeImageSize;
    window.onresize = changeImageSize;
  </script>
</body>

</html>