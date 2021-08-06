<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../../css/reset.css">
  <style>
    body{
      font-size:16px;
    }
    .back{
      width:100vw;
      height:100vh;
      background-color:blue;
      position:relative;
    }
    .content{
      position:absolute;
      top:50%;
      left:50%;
      transform:translate(-50%,-50%);
      background-color:white;
      border-radius:10px;
    }
  </style>
</head>
<body>
  <div class="back">
    <div class="content">
      @yield('content')
    </div>
  </div>
</body>
</html>