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
</style>
</head>
<body>
@include('student.head')
<br><br><br><br><br><br><br>
<h1>Assignment Information</h1>
<br>
<center>
  @if(count($assignments)>0)
<table width="80%" border="1" align="center">
              <tr>
                <th><div><strong>Assignment Name</strong></div></th>
                <th><strong>Subject Name</strong></div></th>
                <th><strong>Last Date</strong></div></th>
                   <th><strong>Uploaded Date</strong></div></th>
                  <th><strong>Assignment</strong></div></th>
                   <th><strong>Status</strong></div></th>

              </tr>
			  @foreach($assignments as $assignment)
              <tr>
                <td><div align="center">{{$assignment->assignmentname}}</div></td>
                <td><div align="center">{{$assignment->subjectname}}</div></td>
                <td><div align="center">{{$assignment->lastdate}}</div></td>
                <td><div align="center">{{$assignment->date}}</div></td>
                <td><div align="center">{{$assignment->assignfile}}</div></td>
                    <td><div align="center">{{$assignment->status}}</div></td>
              </tr>
			  @endforeach
</table>
@else
             <p>No assignments available</p>
            @endif
</center>
</body>
</html>