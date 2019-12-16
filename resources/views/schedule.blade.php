<!DOCTYPE html>
<html>
<head>
    <title>Web Project</title>
</head>
<body>
	<div class="container" id="app">
		<h2  class="text-center text-info">Gazdasági informatika</h2>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark"> 
          <a class="navbar-brand" href="#">GI</a>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="home"> Kezdőlap</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="students"> Névsor</a>
              </li>
               <li class="nav-item">
                <a class="nav-link" href="schedule"> Órarend</a>
              </li>
            </ul>
            <div>
              <b-img style="max-width: 15%; float: right;" src="../resources/assets/images/logo0.png"></b-img>
            </div>
          </div>
        </nav>
        <div class="row">
          <b-img fluid src="../resources/assets/images/orar.jpg"></b-img>
        </div>
	</div>
    <script src="{{asset('/js/app.js')}}"></script>
</body>
</html>