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
<h1>Admin Student Information</h1>
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
  <th>Degree</th>
  <th>Department</th>
  <th>Year</th>
  <th>Action</th>
</tr>
@foreach($data as $student)
<tr>
  <td height="40"><div align="center">{{$student->regno}}</div></td>
  <td><div align="center">{{$student->name}}</div></td>
  <td><div align="center">{{$student->gender}}</div></td>
  <td><div align="center">{{$student->age}}</div></td>
  <td><div align="center">{{$student->email}}</div></td>
  <td><div align="center">{{$student->degree}}</div>
  <td><div align="center">{{$student->dept}}</div></td>
  <td><div align="center">{{$student->year}}</div></td>
  <td><div align="center"><a id="delete" href="{{url('delete')}}/{{$student->id}}">Delete</a>&nbsp;|&nbsp;<a id="edit" href="{{url('editor')}}/{{$student->id}}">Edit</a></div>
</tr>
@endforeach
</center>
</table>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>
  $(document).ready(function(){
    $('#delete').click(function(){
      alert('You are deleting a student from the role.');
    });
    $('#edit').click(function(){
      alert('Editing the student details');
    });
  });
</script>
</body>
</html>
