<!DOCTYPE html>
<html>
<head>
<title>Online Assignment Management System</title>
<style>
    body {
    background-image: linear-gradient(135deg,#71b7e6,#9b59b6);
    height: 200vh;
    justify-content: center;
    align-items: center;
    margin-top: 0;
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
    h1 {
    text-align:center;
    font-size: 36px;
    text-shadow: 2px 2px 2px grey;
    border-radius: 10px;
    }
    a {
    text-decoration:none;
    }
    form {
    display: inline-block;
    align: center;
    align-items: left;
    padding: 20px;
    background-color: white;
    border: 1px solid #ccc;
    border-radius: 5px;
    }
    input[type="text"], input[type="number"],textarea, select,option, input[type="email"] {
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
    #del{
        margin-top:30px;
    }
</style>
</head>
<body>
@include('admin.header')
@if(session('message'))
<h3>{{session('message')}}</h3>
@endif
<h1>Delete Assignment</h1>
<br>
<center>
<form method="post" action="{{url('deleteassign')}}">
    @csrf
assignment name&nbsp;<input type="text" name="assignmentname"  required><br><br>
subject name&nbsp;&nbsp;&nbsp;<input type="text" name="subjectname" required><br><br>
Degree&nbsp;<select name="degree" id="degree">
<option value="bca">BCA</option>
<option value="mca">MCA</option>
<option value="bsccs">B.Sc Com Sci</option>
</select><br><br>
    Department <select name="dept" id="dept">
    <option value="it">Information Technology</option>
    <option value="cs">Computer Science</option>
</select><br><br>
Year&nbsp;&nbsp;&nbsp;<select name="year" id="year">
    <option value="1">I</option>
    <option value="2">II</option>
    <option value="3">III</option>
    </select>
    <br><br>
    <center>
<input type="submit" value="submit">
    </center>
</form>
</center>
</body>
</html>