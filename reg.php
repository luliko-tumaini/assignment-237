<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title><link rel="stylesheet" href="style.css">
</head>
<body>
    
    <form action="register .php" method="POST">
        <h1>Register form</h1><br>
        <label>First name</label>
        <input type="first name"name="firstname"><br>
        <label>Last name</label>
        <input type="last name"name="lastname"><br>
       
        <label>password</label>
        <input type="text"name="password"><br>
    
        
        
        

        <label>gender</label><br>

       
       male<p8><input type="radio" name="gender" value='male'></p8><br>
      female<p9><input type="radio" name="gender" value ='female'></p9><br>



      <p> Please choose your favorite foods</p>
    
      steak<p10><input type="checkbox"  value='steak' name="favorites"></p10><br>
      
      pizza<p11><input type="checkbox" value='pizza' name="favorites"></p11><br>
      
      chicken<p12><input type="checkbox" value='chicken' name="favorites" ></p12><br><br>
    
      <textarea rows="5" cols="30"onclick="this.focus(); this.select();"
      style="overflow-y: scroll;">education is key of life</textarea><br>
      
    <p3>select level of education</p3><br>
    
    <select  name=" education">
        <option value="jr.high" name="education">jr.High</option><br>
        <option value="bachelar" name="education">bachelar</option><br>
        <option value="diploma" name="education">diploma</option><br>
        <option value="certificate" name="education">certficate</option><br>
    </select><br>
    <p4>select your favorite time of day</p4><br>
    <select  name="time">
        <option value="morning" names="time">morning</option><br>
        <option value="day" names="time">day</option><br>
        <option value="night"names="time">night</option><br>
    </select><br>
    <button input type="submit" name="submit">submit</button>    
    </form>

</body>
</html>
<script>
Document.getElementById('favoritesForm').addEventListener('submit',function(e))
{
    e.priventDefault();
    var selectedFavorites=[];
    var checkboxes=document.querySelectorAll('input[type="checkbox"]:checked');
    checkboxes.foreach(function(checkbox)
    {
        selectedFavorites.push(checkbox.value);
    });

}
</script>