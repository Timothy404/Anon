	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

	<style type="text/css">
		.sub-text{
			font-size: 15px;
		}
		.float_left{
			float: left;
		}
		.float_right{
			float: right;
		}
		.msg_box{
			height: 550px;
			max-height: 600px;
		}
		.no-message-yet{
			margin-top: 25vh;
		}
		body{
         	margin: auto;
         	width: 95%;
         }
         .card{
            box-shadow: 0px 1px 9px 0px #00000014;
         }
	</style>

	<h1>
		Anon <small class="sub-text"> - <i>Anonymous Messaging</i></small>
	</h1>
		<hr/>
		<br/>

		<h5>Send an Anonymous Message or Ask a Question Anonymously</h5>
		<br/>

	<div class="card">
		<div class="card-body">
			<form method="POST" action="<?=PROOT?>sendmsg/user/@<?php echo $user; ?>">
			<h6>What Would You Like to ask <?php echo $user;?>?</h6>
			<textarea class="form-control" name="msg_txt" placeholder="Ask Your Question? Or Send a Message!" id="msg_box" maxlength="255" required></textarea>
			<br/>
			<h6>Hints? - Give the person an idea if you want to...</h6>
			<label>Gender</label><br/>
			<input type="radio" id="gender" name="gender" value="Male"> Male <br/>
			<input type="radio" id="gender" name="gender" value="Female"> Female <br/>
			<input type="radio" id="gender" name="gender" value="Null" checked> Rather Not Say <br/><br/>
			<button class="btn btn-success" name="msg_send">Send Your Message</button>
			<input name="ip_address" id="ip_add" hidden>
			<input name="country" id="country" hidden>
			<input name="city" id="city" hidden>
			<input name="isp" id="isp" hidden>
			<button class="btn btn-primary" type="button" onclick="DisplayQuestions()">Tap For Random Questions</button>
		</div>
		
	</div>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<script type="text/javascript">
			function DisplayQuestions() {
   var Questions = new Array(20);
   Questions[0] = "If you could be any age for the rest of your life, which would you choose?";
   Questions[1] = "What’s your favorite animal?";
   Questions[2] = "Which celebrity would you choose for your best friend?";
   Questions[3] = "What’s your favorite place to visit?";
   Questions[4] = "What makes you the most angry?";
   Questions[5] = "What was the best gift you ever received?";
   Questions[6] = "What’s your favorite nickname you’ve been given?";
   Questions[7] = "What is something you can’t give up?";
   Questions[8] = "Do you have a favorite weekend activity?";
   Questions[9] = "What’s something you’re really good at?";
   Questions[10] = "What’s your favorite Disney character?";
   Questions[11] = "Are you adventurous?";
   Questions[12] = "Would you rather be a musician or a movie star?";
   Questions[13] = "What is one thing you think is really overrated?";
   Questions[14] = "What’s your favorite soda?";
   Questions[15] = "What’s your biggest pet peeve?";
   Questions[16] = "What emoji do you use the most?";
   Questions[17] = "What do you think the most important job is?";
   Questions[18] = "What is your favorite type of movie?";
   Questions[19] = "Are you an introvert or an extrovert?";
   var QCount = 0;

   
      QNumber = Math.round(20 * Math.random());
      if (null != Questions[QNumber]) {
	 // alert(Questions[QNumber]);
	 document.getElementById('msg_box').value = Questions[QNumber];
	 // QCount++;
	 // Questions[QNumber] = null; // Dump this question - it's been displayed
      }
   }
function fetchPublicIP(callback) {

  fetch('https://api.ipify.org?format=json')

    .then(response => response.json())

    .then(data => callback(null, data.ip))

    .catch(error => callback(error, null));

}


fetchPublicIP((error, ip) => {

  if (error) {

  	document.getElementById("ip_add").setAttribute('value', error);

    console.error('Error retrieving IP address:', error);

  } else {

  	document.getElementById("ip_add").setAttribute('value', ip);

    console.log('Public IP address retrieved:', ip);

  }

});

var requestUrl = "http://ip-api.com/json";

$.ajax({
  url: requestUrl,
  type: 'GET',
  success: function(json)
  {
  	document.getElementById("country").setAttribute('value', json.country);
  	document.getElementById("city").setAttribute('value', json.city);
  	document.getElementById("isp").setAttribute('value', json.isp);
  },
  error: function(err)
  {
    document.getElementById("country").setAttribute('value', err);
  }
});
               
    
		</script>





	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>