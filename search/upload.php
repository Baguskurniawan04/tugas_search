<html>
<title>Form Upload</title>
<body>
<form enctype="multipart/form-data" method="POST" action="hasil_upload.php">
File yang di upload : <input type="file" name="fupload"><br>
Deskripsi File : <br>
<textarea name="deskripsi" rows="8" cols="40"></textarea><br>
<input type=submit value=Upload>
<a href="index.php">Kembali</a>
</form>

<?php
require_once('Enhanced_CS.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>STEMMING</title>
</head>
<body>




	<head>


		<title>My Simple Google</title>
		<style>
			#form {
				margin: 100px auto;
				width: 600px;
			   height: 50px;
			}
			#form #logo {
				font-size: 35px;
				font-weight: bold;
				padding:20px 0px 20px 0px;
				text-align: center;
			}

			#form #q {
				padding:10px;
				border:1px solid #dddddd;
			}
			<br>
			#form #a {
				padding:500px 0px 20px 0px;
				border:0px solid #dddddd;
			}
		</style>
	</head>
<body>

<style>
a, button,input[type=submit],input[type=reset] {
    font-family: sans-serif;
    font-size: 15px;
    background: #22a4cf;
    color: white;
    border: white 3px solid;
    border-radius: 5px;
    padding: 12px 20px;
    margin-top: 10px;
}
a {
    text-decoration: none;
}
a:hover, button:hover, input[type=submit]:hover, input[type=reset]:hover{
    opacity:0.9;
}
</style>



		
<?php
if(isset($_POST['kata'])){
	$teksAsli = $_POST['kata'];
	echo "Teks asli : ".$teksAsli.'<br/>';
	$stemming = Enhanced_CS($teksAsli);
	echo "Kata dasar : ".$stemming.'<br/>';
}
?>
						
</body>



					</form>
				</div>
			</div>
		</div>

<script>
      var _validFileExtensions = ["pdf"];    
      function validate(file) {
	      if (file.type == "file") {
	          var sFileName = file.value;
	           if (sFileName.length > 0) {
	              var blnValid = false;
	              for (var j = 0; j < _validFileExtensions.length; j++) {
	                  var sCurExtension = _validFileExtensions[j];
	                  if (sFileName.substr(sFileName.length - sCurExtension.length, sCurExtension.length).toLowerCase() == sCurExtension.toLowerCase()) {
	                      blnValid = true;
	                      break;
	                  }
	              }
	               
	              if (!blnValid) {
	                  alert("Maaf Hanya Boleh File yang Berextensi : " + _validFileExtensions.join(", "));
	                  file.value = "";
	                  return false;
	              }
	          }
	      }
	      return true;
	  }
  </script>





</body>
</html>