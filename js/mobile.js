var Form1 = document.getElementById("form1");
		 var Form2 = document.getElementById("form2");
		 var Form3 = document.getElementById("form3");

		 var Next1 = document.getElementById("next1");
		 var Next2 = document.getElementById("next2");
		 var Back1 = document.getElementById("back1");
		 var Back2 = document.getElementById("back2");

		 var Progress = document.getElementById("progess");


		 Next1.onclick = function(){
		 	Form1.style.left = "-450px";
		 	Form2.style.left = "20px";
		 	Progress.style.width ="240px";

		 }

		 Back1.onclick = function(){
		 	Form1.style.left = "20px";
		 	Form2.style.left = "-450px";
		 	Progress.style.width ="120px";

		 }

		 Next2.onclick = function(){
		 	Form2.style.left = "-450px";
		 	Form3.style.left = "20px";
		 	Progress.style.width ="360px";

		 }

		 Back2.onclick = function(){
		 	Form2.style.left = "20px";
		 	Form3.style.left = "-450px";
		 	Progress.style.width ="240px";

		 }