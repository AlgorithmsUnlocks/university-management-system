<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title> Leading University Management System</title>

    <link rel="stylesheet" href="./css/index.css">
  
   <style>
    .none-t{
     padding: 200px 0;
    }
    .wrapper{
    background-color: rgba(255, 255, 255, 0.315);
    position: absolute;
    width: 100%;
    height: 100%;
    overflow: hidden;
    background: hsla(183, 56%, 42%, 1);
    background: linear-gradient(270deg, hsla(183, 56%, 42%, 1) 22%, hsla(224, 55%, 62%, 1) 100%);
    }
    .box div{
      height: 65px;
      width: 65px;
      position: absolute;
      background-color: transparent;
      border: 4px solid white;
      animation: animate 5s infinite;
      border-radius: 50px;
    }
    .box div:nth-child(1){
      height: 65px;
      width: 65px;
      position: absolute;
      top: 90%;
      left: 65%;
      background-color: transparent;
      border: 3px solid white;
      animation: animate 7s infinite;
    }
    .box div:nth-child(2){
      height: 65px;
      width: 65px;
      position: absolute;
      top: 50%;
      left: 65%;
      background-color: transparent;
      border: 3px solid white;
      animation: animate 8s infinite;
    }
    .box div:nth-child(3){
      height: 65px;
      width: 65px;
      position: absolute;
      top: 50%;
      left: 25%;
      background-color: transparent;
      border: 3px solid white;
      animation: animate 11s infinite;
    }
    .box div:nth-child(4){
      height: 65px;
      width: 65px;
      position: absolute;
      top: 10%;
      left: 80%;
      background-color: transparent;
      border: 3px dashed white;
      animation: animate 12s infinite;
    }
    .box div:nth-child(5){
      height: 100px;
      width: 100px;
      position: absolute;
      top: 20%;
      left: 30%;
      background-color: transparent;
      border: 3px dotted white;
      animation: animate 15s infinite;
    }
    .box div:nth-child(6){
      height: 65px;
      width: 65px;
      position: absolute;
      top: 90%;
      left: 10%;
      background-color: transparent;
      border: 3px dotted white;
      animation: animate 5s infinite;
    }
    .box div:nth-child(7){
      height: 65px;
      width: 65px;
      position: absolute;
      top: 65%;
      left: 5%;
      background-color: transparent;
      border: 3px dashed white;
      animation: animate 5s infinite;
    }
    .box div:nth-child(8){
      height: 65px;
      width: 65px;
      position: absolute;
      top: 50%;
      left: 50%;
      background-color: transparent;
      border: 3px dashed white;
      animation: animate 5s infinite;
    }
    .box div:nth-child(9){
      height: 65px;
      width: 65px;
      position: absolute;
      top: 80%;
      left: 85%;
      background-color: transparent;
      border: 3px solid white;
      animation: animate 5s infinite;
    }
    @keyframes animate{
      0%{
        transform: scale(0.5);

      }
      100%{
        transform: scale(1);
       
        opacity: 0;
      }
    }

   </style>


  </head>
  <body onload="myFunction()">


    <div class="wrapper">
     <div class="none-t text-center">
        <h3 class="text-white p-3">No Data Found </h3>       
        <a href="index.php">
          <button class="btn btn-warning w-50 m-auto text-white">Go Back</button>
        </a>
     </div>
      <div class="box">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
      </div>
      <div id="site-loader">

      </div>

    </div>
     
      

    <script>

        var preloader = document.getElementById("site-loader");
        function myFunction(){
            preloader.style.display = "none";
        }
    </script>

     



 
 

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
