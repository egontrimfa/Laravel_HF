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
        	<div class="col-md-12 text-center">
        		<b-img style="max-width: 60%;" thumbnail src="../resources/assets/images/sapi.jpg"></b-img>
        	</div>
        	<div class="col-md-12 text-center">
        		<b-img style="max-width: 15%;" src="../resources/assets/images/logo.jpg"></b-img>
        	</div>
        	<div class="col-md-6">
				<h6 class="mt-0">Neked ajánljuk, ha:</h6>
				<p>szívesen foglalkoznál a gazdaság különböző területein használt számítógépes programok és vállalatirányítási rendszerek felügyeletével és fejlesztésével.</p>
				<p>Tudod-e, hogy…?<br>

				Székelyföldön az IT-szektor munkaerőhiánnyal küzd. Csíkszereda és környékén működő IT-cégek több mint 5 millió eurós forgalmat bonyolítanak le.<br>

				Lehetőséget biztosítunk, hogy a szakmai gyakorlatot olyan IT-cégeknél végezd, ahol majd munkahelyet is kaphatsz.</p>
        	</div>
        	<div class="col-md-6">
				<h6 class="mt-0">Főbb tantárgyak:</h6>
				<p>programozás alapjai (C, C#), Java programozás, webprogramozás (PHP), mobileszközök programozása (Android), operációkutatás, adatbázisok tervezése, 
				számítógépes hálózatok, operációs rendszerek, mikro- és makroökonómia, integrált vállalatirányítási rendszerek (SAP), pénzügyi folyamatok modellezése (SAP), 
				szakértői rendszerek tervezése.</p><br>

				<h6 class="mt-0">Elhelyezkedési lehetőségek:</h6>
				<ul>
				<li>informatikai rendszerelemző/tervező</li>
				<li>programozó (Visual Basic, Java, PHP, Android)</li>
				<li>adatbázis programozó/tervező (SQL, MySQL, Oracle)</li>
				<li>hálózati adminisztrátor (Windows, Linux)</li>
				<li>weboldaltervező és adminisztrátor</li>
				<li>gazdasági szakember az információ-technológia (IT) területén.</li>
				</ul>
        	</div>
        </div>
	</div>
    <script src="{{asset('/js/app.js')}}"></script>
</body>
</html>