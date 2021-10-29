<!DOCTYPE html>
<html>
<head>
  <title>Notify For Donation</title>
  <link rel="stylesheet" type="text/css" href="style.css">
   <style>
   body,html{
    height:100%;
    margin:0 ;
    top:0 !important;

   }
   #sel1
   { 
    width:400px;
    padding: 10px;
    font-size: 16px;
    border-radius: 5px;
    border: 1px solid gray;
   }

   #txt
   {
    width:380px;
    padding: 10px;
    font-size: 16px;
    border-radius: 5px;
    border: 1px solid gray;
   }
 
</style>
  
</head>
 <div class="h">
<body>
 
   <div class="header" >
    <h4>Enter Your Details For Donation</h4>
  </div>
 

  <form method="post" action="notify.php" >   
  	<div class="input-group">
  	  <label>Name</label>
  	  <input type="text" name="name" placeholder="Name" required value="">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" placeholder="Email" required value="">
  	</div>
  	<div class="input-group">
  	  <label>Phone No</label>
  	  <input type="Phone No" name="phone_no" required placeholder="Phone No">
  	</div>
    <div class="input-group">
      <label>Donation</label>
      <select id="sel1"  name ="donation">
        <option value="food">Food</option>
        <option value="money">Money</option>
      </select>
    </div>
     <div class="input-group">
      <label>Address</label>
      <textarea placeholder="Address" required id="txt" name="address"></textarea>
    </div>
  	<div class="input-group">
  	  <button type="submit" class="btn" required name="notify">Submit</button>
  	</div>
    <p>
      If Admin? <a href="index.php">Sign In</a>
    </p>
  </form>
  

</body>
</div>
</html>