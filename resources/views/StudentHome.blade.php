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
      transition: 0.3 ease;
    }
</style>
</head>
<body>
@include('student.head')
<br><br><br><br><br>
<h1>Student Information</h1>
<br>
<center>
  @if(session('message'))
  <h3>{{session('message')}}</h3>
  @endif
<table border="1">
  <tr>
  <th>D no</th>
  <th>Name</th>
  <th>Gender</th>
  <th>Age</th>
  <th>Email</th>
  <th>Department</th>
  <th>Degree</th>
  <th>Year</th>
</tr>
@if($data)
<tr>
<input type="hidden" name="id" value="{{$data->id}}">
  <td height="40"><div align="center">{{$data->regno}}</div></td>
  <td><div align="center">{{$data->name}}</div></td>
  <td><div align="center">{{$data->gender}}</div></td>
  <td><div align="center">{{$data->age}}</div></td>
  <td><div align="center">{{$data->email}}</div></td>
  <td><div align="center">{{$data->dept}}</div></td>
  <td><div align="center">{{$data->degree}}</div></td>
  <td><div align="center">{{$data->year}}</div></td>
</tr>
@endif
</table>
</center>
</body>
</html>