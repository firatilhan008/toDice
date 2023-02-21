<!DOCTYPE html>
<html lang="tr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

 
    <title>Shuffle</title>

    <style type="text/css">
    #dice1, #dice2 {
     float: left;
     margin: 10px;
      }
     
      #btn{
        margin: 20px;
        margin-left: 75px;
        font-size: 1.2rem;
        font-weight: 700;
        color:black;
        cursor: pointer;
        outline: none;
        border:1px solid black;
        background: #21d4fd;
       
      }
      img{
        height: 100px;
        width: 100px;
      }
    
    </style>
   

  </head>
  <body>

   

        <div id="dice1"><img src="dimg/1.png"></div>
        <div id="dice2"><img src="dimg/1.png"></div>

      
        <button id="btn" onclick="Shuffle()">Shuffle</button>
    
               
      

 
<script type="text/javascript">

  function Shuffle(){

    var dice1 =  Math.floor(Math.random() * 6)+1;
    var dice2 =  Math.floor(Math.random() * 6)+1;

    document.getElementById("dice1").innerHTML = "<img src='dimg/"+dice1+".png'>";
    document.getElementById("dice2").innerHTML = "<img src='dimg/"+dice2+".png'>";

  }
</script>


  </body>
</html>