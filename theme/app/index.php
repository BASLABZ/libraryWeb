<!DOCTYPE html>
<html>
<head>
	<title>BASLABZ-LIBRARY WEB THEME</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="stylesheet" type="text/css" href="css/materialize.css">
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css">
</head>
<body>
<header>
      <nav class="top-nav">
        <div class="container">
          <div class="nav-wrapper"><a href="#" data-activates="nav-mobile" class="button-collapse top-nav full hide-on-large-only"><i class="material-icons">menu</i></a>siBAS -> Super Tutorial site<a></a></div>
        </div>
      </nav>
      <ul id="slide-out" class="side-nav">
    <li><div class="userView">
      <div class="background">
        <img src="img/user-bg.jpg">
      </div>
      <a href="#!user">
      	<img class="circle" src="img/supertutorial.jpg">
      	</a>
      <a href="#!name"><span class="white-text name">siBAS</span></a>
      <a href="#!email"><span class="white-text email">tutorialsuper.cs@gmail.com</span></a>
    </div></li>
    <li><a href="#!"><i class="material-icons">home</i>HOME</a></li>
    <li><a href="#!">Second Link</a></li>
    <li><div class="divider"></div></li>
    <li><a class="subheader">Subheader</a></li>
    <li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
  </ul>
  <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
    </header>
    <main>
    	<div class="container">
    		 <div class="row">
    		 	  <div class="row">
				    <div class="col s12 m4">
				      <div class="card">
				        <div class="card-image">
				          <img src="img/user-bg.jpg">
				          <span class="card-title">Card Title</span>
				          <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
				        </div>
				        <div class="card-content">
				          <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
				        </div>
				      </div>
				    </div>
				    <div class="col s12 m4">
				      <div class="card">
				        <div class="card-image">
				          <img src="img/user-bg.jpg">
				          <span class="card-title">Card Title</span>
				          <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
				        </div>
				        <div class="card-content">
				          <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
				        </div>
				      </div>
				    </div>
				    <div class="col s12 m4">
				      <div class="card">
				        <div class="card-image">
				          <img src="img/user-bg.jpg">
				          <span class="card-title">Card Title</span>
				          <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
				        </div>
				        <div class="card-content">
				          <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
				        </div>
				      </div>
				    </div>
				  </div>
    		 </div>
    		 <div class="row">
    		 	<div class="col s12">
				    		 		
				  <ul class="collapsible popout" data-collapsible="accordion">
				    <li>
				      <div class="collapsible-header"><i class="material-icons">filter_drama</i>JAVASCRIPT</div>
				      <div class="collapsible-body">
				      	<center><span>SHOWING CALCULATE DATE & PICKERDATE SAMPLE</span></center>
				      	 <ul class="collapsible" data-collapsible="accordion">
		    		  	  <nav>
						    <div class="nav-wrapper">
						      <div class="col s12">
						        <a href="#!" class="breadcrumb">HOME</a>
						        <a href="#!" class="breadcrumb">JAVASCRIPT</a>
						        <a href="#!" class="breadcrumb">PIKCERDATE</a>
						      </div>
						    </div>
						  </nav>
					    <li>
					      <div class="collapsible-header"><i class="material-icons">report_problem</i>DISABLE DATE YESTERDAY</div>
					      <div class="collapsible-body">
					      	  <div class="row">
							    <form class="col s12">
							      <div class="row">
							        <div class="input-field col s6">
							          <input type="date" class="datepicker">
							        </div>
							      </div>
							    </form>
							  </div>
							  <div class="well">
							  	http://amsul.ca/pickadate.js/date/
							  </div>
					      </div>
					    </li>
					    <li>
					      <div class="collapsible-header"><i class="material-icons">av_timer</i>GET VALUE 2 DATEPICER</div>
					      <div class="collapsible-body">
					      	<form>
							    START DATE<br>
							    <input type="date" id="start_date" name="firstname"  >
							<br>
							    END DATE<br>
							    <input type="date" id="end_date" name="lastname">
							      <button class="btn waves-effect waves-light" id='get_days'  type="button" name="action">Submit
								    <i class="material-icons right">send</i>
								  </button>
								  <div class="row">
								<div class="col s4">
									<div class="card">
                                    <div class="card-move-up waves-effect waves-block waves-light">
                                        <div class="move-up cyan darken-1">
                                            <div>
                                            	<label style="color: white;"> VALUE OF SUBTOTAL </label> 	
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="card-content">   
                        			 <div class="row">
									    <form class="col s12">
									      <div class="row">
									        <div class="input-field">
									          Rp<i class="material-icons prefix"></i>
									          <input id="subtotal" type="text" class="validate" value="500000">
									          <label for="icon_prefix">Subtotal</label>
									        </div>
									        <div class="input-field">
									          Rp<i class="material-icons prefix"></i>
									          <input id="total" type="tel" class="validate" value="0">
									          <label for="icon_telephone">TOTAL</label>
									        </div>
									      </div>
									    </form>
									  </div>
                                    </div>
                                </div>
								</div>
								<div class="col s4">
									<div class="card-panel teal ">
							          <span class="white-text">
							          <div class='days'>0
										
								      	</div>	
							          </span>
							          <input type="text" id="juml">
							        </div>
								</div>
							</div>
							</form>
							
						   
					    </li>
					  </ul>
				      </div>
				    </li>
				    <li>
				      <div class="collapsible-header"><i class="material-icons">place</i>Second</div>
				      <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
				    </li>
				    <li>
				      <div class="collapsible-header"><i class="material-icons">whatshot</i>Third</div>
				      <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
				    </li>
				  </ul>
				        
    		 	</div>
    		 </div>
    		 
    	</div>
    	<footer class="page-footer">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
              	<img src="img/supertutorial.jpg" class="circle" style="width: 20%;">
                <h5 class="white-text">SUPER TUTORIAL SITE</h5>
                <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">JAVASCRIPT</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">PHP</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">API</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © <?php echo date('Y'); ?> Copyright BASLABZ
            <a class="grey-text text-lighten-4 right" href="www.supertutorialsite.wordpress.com">www.supertutorialsite.wordpress.com</a>
            </div>
          </div>
        </footer>
    </main>

<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="js/materialize.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>
</body>
</html>
<script type="text/javascript">
Date.daysBetween = function( date1, date2 ) {
  //Get 1 day in milliseconds
  var one_day=1000*60*60*24;
  // Convert both dates to milliseconds
  var date1_ms = date1.getTime();
  var date2_ms = date2.getTime();
  // Calculate the difference in milliseconds
  var difference_ms = date2_ms - date1_ms;
  // Convert back to days and return
  return Math.round(difference_ms/one_day); 
}
$('#get_days').click(function(){
	var subtotal = document.getElementById("subtotal").value;

	d1 = new Date($("#start_date").val());
	console.log(d1);
	d2 = new Date($("#end_date").val());
	var hasil = Date.daysBetween(d1,d2);
	if (hasil < 0) {
		console.log(hasil);
		$('.days').text('MAAF TANGGAL ANDA TIDAK VALID');
	}else {
		
		var jumlah = $('.days').text(Date.daysBetween(d1, d2)); 
		 document.getElementById("juml").innerHTML =  jumlah;
		 
		
	}
	
}); 
</script>

<script type="text/javascript">
	// for sidnav bar
  $(".button-collapse").sideNav();
  		// pickerdate & validate date
	  var yesterday = new Date((new Date()).valueOf()-1000*60*60*24);
	  $('.datepicker').pickadate({
	 	   disable: [
	    { from: [0,0,0], to: yesterday }
	  ]
	})
	  $('#start_date').pickadate({
	 	   disable: [
	    { from: [0,0,0], to: yesterday }
	  ]
	});
	  $('#end_date').pickadate(
	  	{
	 	   disable: [
	    { from: [0,0,0], to: yesterday }
	  ]
	}
	  	);
	  // for collapsible
	  $(document).ready(function(){
	    $('.collapsible').collapsible();
	  });
	       
  </script>