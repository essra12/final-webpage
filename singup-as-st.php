

<?php
/* التحقق من الاتصال بقاعدة البيانات  */
global $link ; 
include 'check_db_connect.php';

/* isset التقاط مدخلات المستخدم و التحقق من انها موجودة باستخدام   */
$id="";
$name="";
$pass1="";
$pass2="";
$specialization="";
if(isset($_POST['id']))
{
    $id=$_POST['id'];
}
if(isset($_POST['name']))
{
    $name=$_POST['name'];
}
if(isset($_POST['pass']))
{
    $pass1=$_POST['pass'];
}
if(isset($_POST['cof-pass']))
{
    $pass2=$_POST['spe'];
}
if(isset($_POST['spe']))
{
    $specialization=$_POST['cof-pass'];
}

$sql="";
if(isset($_POST['bt']))
{
    $sql="INSERT into user value ($id,'$name',$pass1,$pass2,'$specialization')";
   if( mysqli_query($link,$sql))
   {
    echo"sucsusseful";
   }else 
   echo"can not ensert";
}

?>


<!DOCTYPE html>
<head>
    <title>singup</title>
    <meta name="descreption " content=" " />
    <link rel="stylesheet" href="singup.css"/>
    <html>
      
<body >
<!-- circle for background  -->
  <div class="divblue"> </div>
  <div class="circle"> </div>  
  <div class="circle1"> </div> 
  <div class="circle2"> </div> 
  <div class="circle3"> </div> 
  <div class="circle4"> </div>
  <div class="circle5"> </div>
  <div class="circle6"> </div>
  <div class="circle7"> </div>

  
  <!-- form for singup -->
  <form method="post" >
<div class="loginBK">
<label class="singup_lable"> <b>Singup</b> <br> as teacher </label>

<!--inpute -->
<input class="ID"  id="id" type="text" placeholder="                    ID"/>
<img class="imgID" src="pic/id.png"/>

<input class="name" id="name"  type="text" placeholder="                    Full name"/>
<img class="imgname" src="pic/T.png"/>

<input class="password" id="pass"  type="text" placeholder="                    password"/>
<img class="imgpass" src="pic/pss.png"/>

<input class="confirm_password"  id="cof-pass" type="text" placeholder="                    confirm password"/>
<img class="imgconf" src="pic/pss.png"/>


<input class="specialization"  id="spe" type="text" placeholder="                    specialization"/>
<img class="imgsp" src="pic/pc.png"/>

<!-- singup button -->

<input class="button" id="bt" type="submit" value="Singup" onclick="check_Enter()" />
<!-- login link -->

<a class="login_link" href="login.html"> Login</a>
  </form>
  <div class="div-parent-logo">
  <img class="imagelogo" src="pic/logo.png" alt="no image"/>
</div>

<!-- check enter -->

<script>
  function check_Enter() {
  const id = document.getElementById("id").value;
  const NAME = document.getElementById("name").value;
  const pass = document.getElementById("pass").value;
  const pass2=document.getElementById("cof-pass").value;
  const specialization=document.getElementById("spe").value;
  if(id==""){
  alert(" pleas enter ID");
  return false
  }
  if(NAME==""){
  alert(" pleas enter name");
  return false
  }
  else if(pass==""){
  alert("    pleas enter password ");
  return false
  }
  if(pass2==""){
  alert(" pleas enter password again");
  return false
  }
if(pass != pass2){
alert(" the password is not equal ");
return false
  }
  if(specialization==""){
  alert(" pleas enter specialization ");
  return false
  }
  }
  </script>

</body>
</html>
</head>