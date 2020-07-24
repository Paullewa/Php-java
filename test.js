var allName = [
			  {
			 Username:"Paul",
			  password:"paul"
			  },
			  
			  {
			  Username:"Lilnob",
			  password:"Lilnob"
			  }		  				  
			  ]
function getall(){
	var Username = document.getElementById('Username').value;
	var password = document.getElementById('password').value;
	for(i = 0; i< allName.length; i++){
		if(Username == allName[i].Username && password == allName[i].password){
		console.log(Username + " are logged")
		return
		}
		else
		{
			console.log("There ist an Error")
		}
	}
};
