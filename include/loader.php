<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- When using this CDN, observe and remove it if it's not working. -->
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <style>
      .top-loader-wrapper {
        z-index: 9999999;
        background: #fff;
        width: 100%;
        height: 100%;
        position: fixed;
        opacity: 0.98;
        top: 0;
      }
      .cssload-container {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
      }
      .cssload-speeding-wheel {
        width: 49px;
        height: 49px;
        margin: 0 auto;
        border: 3px solid red;
        border-radius: 50%;
        border-left-color: transparent;
        border-right-color: transparent;
        animation: cssload-spin 725ms infinite linear;
        -o-animation: cssload-spin 725ms infinite linear;
        -ms-animation: cssload-spin 725ms infinite linear;
        -webkit-animation: cssload-spin 725ms infinite linear;
        -moz-animation: cssload-spin 725ms infinite linear;
      }
      @keyframes cssload-spin {
        100% {
          transform: rotate(360deg);
        }
      }
      @-o-keyframes cssload-spin {
        100% {
          -o-transform: rotate(360deg);
        }
      }
      @-ms-keyframes cssload-spin {
        100% {
          -ms-transform: rotate(360deg);
        }
      }
      @-webkit-keyframes cssload-spin {
        100% {
          -webkit-transform: rotate(360deg);
        }
      }
      @-moz-keyframes cssload-spin {
        100% {
          -moz-transform: rotate(360deg);
        }
      }
    </style>
  </head>
  <body>
    <div class="top-loader-wrapper">
      <div class="cssload-container">
        <div class="cssload-speeding-wheel"></div>
      </div>
    </div>
    <script>
      // Make the loader disappear after 2 or 3 seconds
      setTimeout(function () {
        jQuery(".top-loader-wrapper").fadeOut("slow");
      }, 3000); // Change 3000 to 2000 for 2 seconds
    </script>
  </body>
</html>