<!DOCTYPE html>
<html>
<head>
<title>Online Assignment Management System</title>
<style>
body {
background-image: linear-gradient(135deg,#71b7e6,#9b59b6);
height:650px;
}
ul {
list-style-type: none;
margin: 0;
padding: 0;
overflow: hidden;
position: relative;
top:10px;
right: 10px;
}
button {
background-color: white;
border: none;
color: black;
padding: 15px 32px;
text-align: center;
text-decoration: none;
display: inline-block;
font-size:16px;
margin: 4px 2px;
cursor: pointer;
border-radius: 10px;
box-shadow: 2px 2px 2px light black;
transition: all 0.3s ease-in-out;
}
button:hover{
transform: scale(1.1);
background-color: light grey;
color: white;
}
h1 {
text-align:center;
font-size: 36px;
text-shadow: 2px 2px 2px grey;
border-radius: 10px;
}
a {
text-decoration:none;
}
table {
  width:100%;
  max-width: 800px;
  border-collapse: collapse;
  margin: top 20px;
}
th, td{
  padding: 10px;
  text-align: left;
  border: 1px solid #ddd;
}
th {
 background-color: #f2f2f2;
}
nav{
   position:fixed;
   background-color: white;
   border-radius: 10px;
   width: 100%;
   padding: 10px;
   
}
.navbarr{
      float:right;
      margin-top: -40px;
      margin-right: 50px;
      position:relative;
      display:flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      width: 20px;
      height: 20px;
      cursor:pointer;
    }
    .line{
      width:100%;
      height:3px;
      background-color: black;
      margin-top: 4px;
    }
    div.hide{
      display: none;
      align-items: center;
    }
    form {
text-align: center;
position: absolute;
top: 50%;
left: 50%;
transform: translate(-50%,-50%);
margin-top: 60px;
padding: 20px;
background-color: white;
border: 1px solid #ccc;
border-radius: 5px;
}
input[type="text"] {
width: 60%;
padding: 12px 20px;
margin: 8px 0;
box-sizing: border-box;
border: 2px solid #ccc;
border-radius: 4px;
}
input[type="password"] {
width: 60%;
padding: 12px 20px;
margin: 8px 0;
box-sizing: border-box;
border: 2px solid #ccc;
border-radius: 4px;
}
input[type="submit"] {
background-color:linear-gradient(135deg,#71b7e6,#9b59b6);
border: none;
color: black;
padding: 15px 32px;
text-align: center;
text-decoration: none;
display: inline-block;
font-size:16px;
margin: 4px 2px;
cursor: pointer;
border-radius: 10px;
box-shadow: 2px 2px 2px light black;
transition: all 0.3s ease-in-out;
}
input[type="submit"]:hover{
transform: scale(1.1);
}
</style>
</head>
<body>
<br><br>
<h1>Change Password</h1>
<center>
    @if(session('message'))
    <h3>{{session('message')}}</h3>
    @endif
<form action="{{url('change')}}" method="post">
@csrf
Old Password: <input type="password" name="oldpassword" required><br><br>
New Password: <input type="password" name="newpassword" required><br><br>
Confirm Password: <input type="password" name="password_confirmation" required><br><br>
<input type="submit" value="change password">
</form>
</center>
</body>
</html>