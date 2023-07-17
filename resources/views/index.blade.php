<!DOCTYPE html>
<html>
<head>
<title>Online Assignment Management System</title>
<style>
body {
background-image:url("{{asset('bg/bg.jpg')}}");
width:100%;
height:100%;
backdrop-filter: blur(6px);
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
position: absolute;
color: white;
top: 50%;
left: 50%;
transform: translate(-50%,-50%);
font-size: 25px;
text-shadow: 2px 2px 2px grey;
border-radius: 10px;
}
h2 {
text-align: center;
font-size: 15px;
text-shadow: 2px 2px 2px grey;
border-radius: 10px;
}
a {
text-decoration:none;
}
</style>
</head>
<body>
<h1>Welcome to,<br>Online Assginment Submission Portal</h1>
<ul>
<li><button><a href="{{url('adminlogin')}}">Admin Login</a></button></li>
<li><button><a href="{{url('studentloginpage')}}">Student Login</a></button></li>
</body>
</html>