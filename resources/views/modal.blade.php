<!DOCTYPE html>
<html lang="en">
<head>
  <title>eyePLUS</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body style="background-image: url({{ asset('image/background.jpg') }});">
<div  class="row" >
  <div class="col-sm-2" ></div>
  <div class="col-sm-8" style="padding-top: 100px">
    <!-- Modal content-->
    <div  style="background-color: #ebebeb">
      <div >
        <font size="4px" ><b>Syarat dan Ketentuan</b></font>
      </div>
      <div >
        <textarea id="ex3">
          {{$appsetting->sk}}
        </textarea>
      </div>
      <div class="modal-footer" hidden="div">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>



  <style type="text/css">
    .input{
      outline: none;
      border-top-style: hidden;
      border-right-style: hidden;
      border-left-style: hidden;
      border-bottom-style: groove;
    }
    .inner-addon { 
      position: relative;
    }
    .inner-addon .glyphicon {
      position: absolute;
      padding: 10px;
      pointer-events: none;
    }
    .right-addon .glyphicon { right: 0px;}
    .right-addon input { padding-right: 30px; }


    #ex3::-webkit-scrollbar{
width:11px;
background-color:white;
} 
#ex3::-webkit-scrollbar-thumb{
background-color:#ebebeb;
border-radius:10px;
}
#ex3::-webkit-scrollbar-thumb:hover{
background-color:#c4c2c2;
border:2px solid #8c8b8b;
}
#ex3::-webkit-scrollbar-thumb:active{
background-color: #636363;
border:1px solid #333333;
} 

  textarea{
    text-align: justify;
    resize: none;
    overflow-y: scroll;
    height:380px;
    width: 100%;
    background-color: #f5f5f5;
  }

  .modal-sm{
    top: 7%; width: 900px;
    margin-left: auto;
    margin-right: auto;
  }

  @media screen and (max-width: 1000px){
    .modal-sm{
      top: 15%; width: 90%;
      margin-left: auto;
      margin-right: auto;
    }
    textarea{
      height:300px;
      width: 100%;
    }
  }

  
  table, td, th {
      border: 1px solid black;
    } 
  </style>
</body>