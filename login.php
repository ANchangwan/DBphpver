<!DOCTYPE>
<html>

<head>
  <meta http-equiv="content-type" content="text/html" charset="utf-8">
  <meta name="viewport" content="width=device-width", initial-scale="1">
<link rel="stylesheet" href="css/bootstrap.min.css">
  <title>우편 확인프로그램</title>
</head>
<body>
<nav class =" navbar navbar-default">
  <div class="navbar=header">
    <button type="button"class="navbar-toggle collapsed"
    data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
    aria-expanded="false">
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
  </button>
  <a class="navbar-brand"href="main.php">우편함 게시판</a>
  </div>
  <div class="collape navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">
      <li class="nav navbar-nav">
        <li><a href="main.php">메인</a></li>
        <li><a href="bbs.php">게시판</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
    <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown"
      role="button" aria-haspopup="true"
        aria-expanded="false">접속하기<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li class="active"><a herp="Login.php">로그인</a></li>
          <li> <a  hrep="join.php">회원가입</a></li>
        </ul>
      </li>
    </ul>
  </div>

</nav>
<div class="container">
  <div class="col-lg-4"></div>
  <div class="col-lg-4">
    <div class="jumbotron" style="padding-top: 20px;">
      <form method="post" action="loginAction.php">
        <h3 style="text-aling: center;">로그인화면</h3>
        <div class="form-group">
          <input type="text" class="form-control" placeholder="아이디" name="userID" maxlength="20">
        </div>
        <div class="form-group">
          <input type="password" class="form-control" placeholder="pasword" name="userPassword"maxlength="20">
        </div>
        <input type="submit" class="btn btn-primary form-control" value="로그인">
      </form>

    </div>
  </div>
  <div class="col-lg-4"></div>

</div>


<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>
