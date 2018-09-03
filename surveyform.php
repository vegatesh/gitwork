<html>
<title>  Survey Form  </title>
<fieldset><div id="head"><head> <strong> Survey Form </strong> </head></div></fieldset>
<style>
#head{
text-align:center;
font-size:20px;
color:red;
background-color:yellow;
}
#abc{
background-color:pink;
}
div.stars {
  width: 270px;
  display: inline-block;
}
input.star { display: none; }
label.star {
  float: right;
  padding: 10px;
  font-size: 36px;
  color: #444;
  transition: all .2s;
}
input.star:checked ~ label.star:before {
  content: '\f005';
  color: #FD4;
  transition: all .25s;
}
input.star-5:checked ~ label.star:before {
  color: #FE7;
  text-shadow: 0 0 20px #952;
}
input.star-1:checked ~ label.star:before { color: #F62; }
label.star:hover { transform: rotate(-15deg) scale(1.3); }
label.star:before {
  content: '\f006';
  font-family: FontAwesome;
}
.box1{
margin-left:82px;
}
.box2{
margin-left:122px;
}
.box3{
margin-left:134px;
}
#tot-box{
line-height:10px;
}
.dropdown
{
margin-left:69px;
}
.radio{
margin-left:300px;
}
.bb1{
margin-left:30px;
margin-top:-18px;
margin-bottom:20px;
}
.bb2{
margin-left:30px;
margin-top:-16px;
margin-bottom:25px;
}
.bb3{
margin-left:30px;
margin-top:-18px;
}
.stars{
margin-left:120px;
margin-top:-60px;}
.checkbox{
margin-left:195px;
margin-top:-35px;
}
.text{
margin-left:220px;
margin-top:-39px;
}
.sub{
margin-left:220px;
margin-top:10px;
}
li
{
  margin-left:40px;
}
li.a{
  margin-left: 17px;
}
.stars{
  margin-left: 200px;
}
</style>
<body id="abc">
 <div>
  <form action="display.php" method="POST" id="nameform" >
   <h3> Let us know how we can improve freecodecamp </h3>
    <ul>
     <li class="a"> Sweet Name:  <div="tot-box"><Input type="text" name="textbox1" size="40" class=" 
      box1" required ></div>
     </li>
     <li> Email:<div="tot-box"> <Input type="Email" name="textbox2" size="40" class="box2" required
     $Email=$_POST['textbox2']>
     </li> <br></div>
     <li> Age:<div="tot-box"> <Input type="text" name="textbox3" size="40" class="box3" required>  
      </div>
     </li>
    </ul>
<h3> Current Position  <select id="dropdown" name="currentPos" class="dropdown">
	<option disabled value>Select an option</option>
      <option  value="student">Student</option>
      <option value="job">Full Time Job</option>
      <option value="learner">Full Time Learner</option>
      <option value="other">Other</option>
    </select>
	<h4>How you get to know about Freecodecamp:</h4>
 <div class="bb1"><input type="radio" name="position" value="Friends" class="radio">Student<br></div>
 <div class="bb2"><input type="radio" name="position" value="Family" class="radio">Family<br></div>
 <div class="bb3"><input type="radio" name="gender" value="other" class="radio">Other</div>
</h3>
<div><h4> Rating for CodeCamp </h4><link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" class="rating" name="star"></div>
<div class="stars">
  <form action="">
    <input class="star star-5" id="star-5" type="radio" name="star"/>
    <label class="star star-5" for="star-5"></label>
    <input class="star star-4" id="star-4" type="radio" name="star"/>
    <label class="star star-4" for="star-4"></label>
    <input class="star star-3" id="star-3" type="radio" name="star"/>
    <label class="star star-3" for="star-3"></label>
    <input class="star star-2" id="star-2" type="radio" name="star"/>
    <label class="star star-2" for="star-2"></label>
    <input class="star star-1" id="star-1" type="radio" name="star"/>
    <label class="star star-1" for="star-1"></label>
  </div>
<div>
<h3> Things to improve </h3><div class="checkbox"><input type="checkbox" name="projects"> Front-end Project<br>
<input type="checkbox" name="projects" value="Back-end Projects"> Back-end-Project<br>
<input type="checkbox" name="projects" value="Open soure Community" > Open Source Community<br>
<input type="checkbox" name="projects" value="Forum" >Forum<br>
</div>
</div>
<h3> Comments & Reviews </h3> <textarea rows="10" cols="20" placeholder="type something" maxlength="1000" class="text" name="commet"></textarea><br>
<button type="submit" form="nameform" target="_blank" value="send" name="sub">Submit</button>
<button type="reset" value="Reset">Reset</button>
</form>
</form>
</div>
</body>
</html>
