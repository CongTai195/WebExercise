<style>
    .back {
      position: fixed;
      padding: 0;
      margin: 0;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: pink;
      animation-name: backdiv;
      animation-duration: 1s;
      animation-iteration-count: infinite;
  
    }
  
    .heart {
      position: absolute;
      margin: auto;
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
      background-color: white ;
      height: 50px;
      width: 50px;
      transform: rotate(-45deg);
      animation-name: beat;
      animation-duration: 1s;
      animation-iteration-count:infinite;
  
    }
    .heart:after {
      background-color: white   ;
      content: "";
      border-radius: 50%;
      position: absolute;
      width: 50px;
      height: 50px;
      top: 0px;
      left: 25px;
    }
    .heart:before {
      background-color: white;
      content: "";
      border-radius: 50%;
      position: absolute;
      width: 50px;
      height: 50px;
      top: -25px;
      left: 0px;
    }
  
    @keyframes backdiv {
      50% {
        background: pink;
      }
    }
  
    @keyframes beat {
      0% {
        transform: scale(1) rotate(-45deg);
      }
      50% {
        transform: scale(0.6) rotate(-45deg);
      }
    }
  
  </style>
  <div class="back"></div>
  <div class="heart"></div>
  