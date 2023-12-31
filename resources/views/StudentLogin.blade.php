<!DOCTYPE html>
<html>
<head>
<title>Online Assignment Management System</title>
<style>
body {
background-image: linear-gradient(135deg,#71b7e6,#9b59b6);
height: 100vh;
}
ul {
list-style-type: none;
margin: 0;
padding: 0;
overflow: hidden;
position: absolute;
top:10px;
right: 10px;
}
li {
float: left;
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
text-align: center;
font-size: 36px;
text-shadow: 2px 2px 2px grey;
border-radius: 10px;
}
a {
text-decoration:none;
}
form {
display: inline-block;
text-align: center;
position: absolute;
top: 50%;
left: 50%;
transform: translate(-50%,-50%);
margin-top: 50px;
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
<h1>Student Login</h1>
<ul><li><button><a href="/">Home </a></button></li></ul>
</br>
</br>
@if(session('message'))
<center><h3>{{session('message')}}</h3></center>
@endif
<form action="{{url('studentlogin')}}" method="post">
    @csrf
Reg. No&nbsp;&nbsp;&nbsp;<input type="text" name="regno" id="uname" required></br></br>
Password<input type="password" name="password" id="password" required></br></br>
<center><input type="submit" value="login"></center>
</form>
</body>
</html>
