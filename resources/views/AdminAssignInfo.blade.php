<!DOCTYPE html>
<html>
<head>
<title>Online Assignment Management System</title>
<style>
body {
background-image: linear-gradient(135deg,#71b7e6,#9b59b6);
height: 200vh;
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
    background-color: white;
    height:60px;
    padding :15px;
    border-radius: 10px;
    align-items: center;
    justify-content: center;
}
div.navbar{
    margin-top: 20px;
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
margin: 30px 2px;
cursor: pointer;
box-shadow: 2px 2px 2px light black;
transition: all 0.3s ease-in-out;
}
button:hover{
transform: scale(1.1);
background-color: light grey;
color: white;
}
</style>
</head>
<body>
@include('admin.header')
<h1>Admin Assign Info</h1>
<br>
<center>
@if(session('message'))
  <h3>{{session('message')}}</h3>
  @endif
  @if(count($assignments)>0)
<button><a href="{{url('deleteassignment')}}">Delete Assignment</a></button>
<table border="1">
  <tr>
  <th>Assignment Name</th>
  <th>Subject Name</th>
  <th>Last Date</th>
  <th>Degree</th>
  <th>Year</th>
  <th>Date</th>
  <th>D. No</th>
  <th>Assignment</th>
  <th>Status</th>
  <th>Download</th>
</tr>
@foreach($assignments as $assignment)
<tr>

  <td height="40"><div align="center">{{$assignment->assignmentname}}</div></td>
                <td><div align="center">{{$assignment->subjectname}}</div></td>
                <td><div align="center">{{$assignment->lastdate}}</div></td>
                <td><div align="center">{{$assignment->degree}}</div></td>
                <td><div align="center">{{$assignment->year}}</div></td>
                   <td><div align="center">{{$assignment->date}}</div></td>
                   <td><div align="center">{{$assignment->regno}}</div></td>
                   <td><div align="center">{{$assignment->assignfile}}</div></td>
                   <td><div align="center">{{$assignment->status}}</div></td>

				<td><div align="center"><a href="{{url('download')}}/{{$assignment->id}}">Download</a></div></td>
</tr>
@endforeach
@else
<h3>No assignments assigned</h3>
@endif
</center>
</table>
</body>
</html>