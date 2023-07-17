<nav>
<h2>Student</h2>
<div class="navbarr">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
    </div> 
    <div class="hidden hide">
<ul>
 <li><button><a href="{{url('student')}}">Home</a></button> </li>
  <li><button><a href="{{url('studentassignmentinfo')}}">Assignment</a></button></li>
  <li><button><a href="{{url('studentuploadinfo')}}">AssignmentInfo</a></button></li>
  <li><button><a href="{{url('changepassword')}}">Change Password</a></button></li>
  <li><button><a href="/">Logout</a></button></li>
</ul>
    </div>
</nav>
<br><br><br>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $('div.navbarr').click(function(){
          $('div.hidden').toggleClass('hide');
        });
    });
</script>