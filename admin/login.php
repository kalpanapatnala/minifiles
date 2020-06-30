<html>
<head>
<style>
body{
  background: url(libe.jpeg);
  background-repeat:no-repeat;
  background-size: cover;
}
#frm{
  border: solid gray 1px;
  width:20%;
  border-radius:5px;
  margin: 100px auto;
  background: white;
  padding: 50px;
}
#btn{
  color: white;
  background: #337ab7;
  padding: 5px;
  margin-left:69%;
}
</style>
</head>
<body>
  <h2 align=center>LOGIN FORM</h2>
  <div id="frm">
    <form action="process.php" method="post">
       <p>
          <label>Username</label>
           <input type="text" id="user" name="user" required/>
        </p>
        <p>
          <label>password:</label>
           <input type="password" id="pass" name="pass" required/>
        </p>
        <p>
           <input type="submit" id="btn" name="Login"/>
         </p>
      </form>
   </div>
</body>
</html>