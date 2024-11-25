<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Under Construction</title>
  <style>
   
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: Arial, sans-serif;
    }
   
    body {
      display: flex;
      align-items: center;
      justify-content: center;
      min-height: 100vh;
      background-color: #f7f7f7;
      color: #222;
    }
   
    .under-construction-wrapper {
      text-align: center;
      padding: 20px;
    }
    .under-construction-wrapper a{
      text-decoration: none;
    }
    .construction-title {
      font-size: 3rem;
      color: #ff0000c7;
    }
    .construction-message {
      font-size: 1.2rem;
      margin-bottom: 20px;
    }
    .construction-icon {
      font-size: 5rem;
      color: #ff0000;
      animation: icon-bounce 1.5s infinite;
    }
    /* Animation */
    @keyframes icon-bounce {
      0%, 20%, 50%, 80%, 100% {
        transform: translateY(0);
      }
      40% {
        transform: translateY(-20px);
      }
      60% {
        transform: translateY(-10px);
      }
    }
    .theme-btn {
    display: -webkit-inline-box;
    display: -ms-inline-flexbox;
    display: inline-flex;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    text-align: center;
    white-space: nowrap;
    -webkit-transition: all .3s ease;
    transition: all .3s ease;
    z-index: 0
}

.theme-btn .btn-title {
    position: relative
}

.btn-style-one {
    position: relative;
    font-size: 13px;
    line-height: 24px;
    padding: 15px 50px;
    font-weight: 700;
    letter-spacing: .1em;
    overflow: hidden;
    text-transform: uppercase;
    color: rgb(255, 255, 255);
    background: rgba(255, 0, 0, 0.849)
}

.btn-style-one:before {
    position: absolute;
    left: 0;
    top: 0%;
    height: 100%;
    width: 100%;
    content: "";
    background-color: rgb(0, 0, 0);
    -webkit-transform: scale(1, 0);
    transform: scale(1, 0);
    -webkit-transform-origin: bottom left;
    transform-origin: bottom left;
    transition: -webkit-transform 500ms cubic-bezier(.86, 0, .07, 1);
    -webkit-transition: -webkit-transform 500ms cubic-bezier(.86, 0, .07, 1);
    transition: transform 500ms cubic-bezier(.86, 0, .07, 1);
    transition: transform 500ms cubic-bezier(.86, 0, .07, 1), -webkit-transform 500ms cubic-bezier(.86, 0, .07, 1);
    -webkit-transition-timing-function: cubic-bezier(.86, 0, .07, 1);
    transition-timing-function: cubic-bezier(.86, 0, .07, 1);
    z-index: -1
}

.btn-style-one:hover:before {
    -webkit-transform-origin: top right;
    transform-origin: top right;
    -webkit-transform: scale(1, 1);
    transform: scale(1, 1)
}

.btn-style-one:hover {
    color: #fff;
    -webkit-box-shadow: 0 10px 30px rgba(0, 0, 0, .1);
    box-shadow: 0 10px 30px rgba(0, 0, 0, .1)
}

.btn-style-one.hvr-light:hover {
    color: black
}

.btn-style-one.hvr-light:before {
    background-color: #fff
}

.btn-style-one.bg-light:not(hover) {
    background-color: #fff !important
}


  </style>
</head>
<body>
  <div class="under-construction-wrapper">
    <div class="construction-icon">🚧</div>
    <h1 class="construction-title">Page Under Construction</h1>
    <p class="construction-message">We're working hard to bring you something amazing! Check back soon.</p>
    <a href="{{ route('/') }}" class="theme-btn btn-style-one "><span class="btn-title">Back to
      Home</span></a>
  </div>
</body>
</html>
