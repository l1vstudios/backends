<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>404 NOTFOUND</title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet" />

    <!-- Lottie Player Script -->
    <script src="https://unpkg.com/@dotlottie/player-component@2.7.12/dist/dotlottie-player.mjs" type="module"></script>

    <style>
      * {
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
      }

      body {
        padding: 0;
        margin: 0;
        font-family: 'Roboto', sans-serif;
      }

      #notfound {
        position: relative;
        height: 100vh;
        background: #f6f6f6;
      }

      #notfound .notfound {
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        max-width: 767px;
        width: 100%;
        text-align: center;
        background: #fff;
        box-shadow: 0 15px 15px -10px rgba(0, 0, 0, 0.1);
        padding: 40px;
      }

      /* Center the Lottie animation */
      .notfound .lottie-animation {
        margin: 0 auto;
        width: 300px;
        height: 300px;
      }

      .notfound h2 {
        font-size: 22px;
        font-weight: 400;
        text-transform: uppercase;
        color: #151515;
        margin-top: 20px;
        margin-bottom: 25px;
      }

      .notfound .notfound-search {
        position: relative;
        max-width: 320px;
        width: 100%;
        margin: auto;
      }

      .notfound .notfound-search > input {
        width: 100%;
        height: 50px;
        padding: 3px 65px 3px 30px;
        color: #151515;
        font-size: 16px;
        background: transparent;
        border: 2px solid #c5c5c5;
        border-radius: 40px;
        transition: 0.2s all;
      }

      .notfound .notfound-search > input:focus {
        border-color: #00b7ff;
      }

      .notfound .notfound-search > button {
        position: absolute;
        right: 15px;
        top: 5px;
        width: 40px;
        height: 40px;
        text-align: center;
        border: none;
        background: transparent;
        padding: 0;
        cursor: pointer;
      }

      .notfound .back-button {
        margin-top: 25px;
        padding: 10px 20px;
        background-color: #00b7ff;
        color: #fff;
        border: none;
        border-radius: 40px;
        font-size: 16px;
        cursor: pointer;
        transition: background-color 0.3s;
      }

      .notfound .back-button:hover {
        background-color: #0088cc;
      }

      @media only screen and (max-width: 767px) {
        .notfound h2 {
          font-size: 18px;
        }
      }

      @media only screen and (max-width: 480px) {
        .notfound .lottie-animation {
          width: 200px;
          height: 200px;
        }
      }
    </style>
  </head>

  <body>
    <div id="notfound">
      <div class="notfound">
        <!-- Lottie Animation -->
        <div class="lottie-animation">
          <dotlottie-player src="https://lottie.host/d0372e1d-ff2b-470f-9c6c-3a3c8bbeec3e/pP0P1r3DcB.lottie" background="transparent" speed="1" loop autoplay></dotlottie-player>
        </div>
        <h2 style="font-size:30px; font-weight:bold;">COOMING SOON</h2>
       
        <button class="back-button" onclick="window.history.back();">Go Back</button>
      </div>
    </div>
  </body>
</html>
