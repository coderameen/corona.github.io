<!DOCTYPE html>
<html>
<head>
	<title>corona</title>
	 <meta charset="utf-8"> 
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
 <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
 <link rel="stylesheet" type="text/css" href="style.css">
 <link href="https://fonts.googleapis.com/css2?family=Mulish&display=swap" rel="stylesheet">

 <script src="jquery-3.5.0.min.js"></script>

 <style>
    *{
        margin:0px;
        padding:0px;
        box-sizing: border-box;
        font-family: 'Mulish', sans-serif;
    }
    @keyframes virus{
        0%{ transform: rotate(0); }
        100%{ transform: rotate(360deg); }
    }
</style>
</head>
<body onload="fetch()" id="bodyid">


<nav class="navbar navbar-expand-lg navbar-light bg-light p-3">
  <a class="navbar-brand pl-5" href="#">COVID-19</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-5">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#aboutid">about</a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="#updateid">updates</a>
      </li>
        

   
     
    </ul>
    
  </div>
</nav>







    <div>
    <center>
        <h1 style="font-family: 'Mulish', sans-serif;text-shadow:5px 5px 10px">CORONA LIVE UPDATES<img src="virus.png" style="width:9%;height:85px; "></h1>
    </center>
    </div>

    <div class="container main">
        <div class="row w-100 h-100">
            <div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2">
                <div class="leftside w-100 h-100 d-flex justify-content-center align-items-center">
                <img src="virus2.png" width=300 height=300>
                </div>
            </div>
            <div class="col-lg-7 col-md-7 col-12 order-lg-2 order-1">
                <div class="rightside  w-100 h-100 d-flex justify-content-center align-items-center">
                    <h1 style="font-size: 3rem">Let's Stay Safe and Fight Together Againes Cor<span ><img src="virus3.png" style="animation:virus 3s linear infinite" width=50 height=50><span>na virus</h1>
                </div>
            </div>
        </div>
    </div>

<!-------about covid 19-------->
<div class="container-fluid sub_section pt-5 pb-5" id="aboutid">
    <div class="text-center mb-5 mt-4">
        <h1>About COVID-19</h1>
    </div>
    <div class="row pt-5">
        <div class="col-lg-5 col-md-6 col-12 ">
        <img src="corona1.jpg" class="img-fluid ml-5">            
        </div>
        <div class="col-lg-6 col-md-6 col-12">
            <h2 style="color:brown">What is COVID-19(Corona virus)</h2>
            
            <p>Coronaviruses are a group of RNA viruses that cause diseases in mammals and birds. In humans and birds, they cause respiratory tract infections that can range from mild to lethal. Mild illnesses in humans include some cases of the common cold (which is also caused by other viruses, predominantly rhinoviruses), while more lethal varieties can cause SARS, MERS, and COVID-19. </p>
        </div>
    </div>
    
</div>



	<div class="container-fluid" id="updateid">
<div class="table-responsive">
	<table class="table table-bordered table-striped text-center" id="tbval">
		<tr>
			<th>Country</th><th>TotalConfirmed</th><th>TotalRecovered</th><th>TotalDeaths</th><th>NewConfirmed</th><th>NewRecovered</th><th>NewDeaths</th>
		</tr>
	</table>
</div>
</div>
<script>
	function fetch(){
		//jQuery.get(url[,data][,success][,dataType])
		$.get("https://api.covid19api.com/summary",
             function (data){
             	//console.log(data['Countries'].length);
                var tbval = document.getElementById('tbval');
                for(var i=1;i<(data['Countries'].length);i++){
                	var x = tbval.insertRow();
                	x.insertCell(0);
                	tbval.rows[i].cells[0].innerHTML = data['Countries'][i-1]['Country']
                	tbval.rows[i].cells[0].style.background = '#7a4a91';
                	tbval.rows[i].cells[0].style.color = '#fff';  

                    x.insertCell(1);
                	tbval.rows[i].cells[1].innerHTML = data['Countries'][i-1]['TotalConfirmed']
                	tbval.rows[i].cells[1].style.background = '#4bb7d8';

                	x.insertCell(2);
                	tbval.rows[i].cells[2].innerHTML = data['Countries'][i-1]['NewRecovered']
                	tbval.rows[i].cells[2].style.background = '#4bb7d8';

                	x.insertCell(3);
                	tbval.rows[i].cells[3].innerHTML = data['Countries'][i-1]['TotalDeaths']
                	tbval.rows[i].cells[3].style.background = '#4bb7d8';

                	x.insertCell(4);
                	tbval.rows[i].cells[4].innerHTML = data['Countries'][i-1]['NewConfirmed']
                	tbval.rows[i].cells[4].style.background = '#f36e23';

                	x.insertCell(5);
                	tbval.rows[i].cells[5].innerHTML = data['Countries'][i-1]['NewRecovered']
                	tbval.rows[i].cells[5].style.background = '#9cc850';

                	x.insertCell(6);
                	tbval.rows[i].cells[6].innerHTML = data['Countries'][i-1]['NewDeaths']
                	tbval.rows[i].cells[6].style.background = '#f36e23';
                }
            }
			
		);
	}
</script>
<footer>
    <center>
        <a href="#bodyid" style="text-decoration: none">
        <h4 style="color:rgb(84, 75, 72);font-family: 'Oswald', sans-serif;text-align:center;letter-spacing: 1px;">Designed and Developed by Mohammed Ameen</h4>
    </a>
    </center>
</footer>
</body>
</html>