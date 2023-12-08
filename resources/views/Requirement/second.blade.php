@include('layouts.app')
@include('layouts.nav')
<section id="content">
	<div class="content-wrap">

		<div class="container center">

		<div class="heading-block center">
			<h1>Answer some eligible Questions</h1>
		</div>

		
	<form action="Post">
  <p>Do you want to renew your membership with ALIVE-Nigeria?</p>
  <input type="radio" id="yes" name="yes" value="yes">
  <label for="yes">YES</label>
  <input type="radio" id="no" name="yes" value="no">
  <label for="no">NO</label>
  

  <br>  <br>
  <label for="fname">First name:</label>
  <input type="text" id="fname" name="fname" required><br><br>
  <label for="lname">Last name:</label>
  <input type="text" id="lname" name="lname"  required><br><br>
 <label for="phone"> Phone:</label>
  <input type="tel" id="phone" name="phone" placeholder="080-111-111-11" required><br><br>
  
  <label for="email">Email:</label>
  <input type="email" id="email" name="email" placeholder="abc123@gmail.com">  <br><br>        
 	

			<input type="submit" style="color: green;">
					</form>
				<div class="container">
				<div style="float:right">
			<a href="{{url('eligibility')}}" class="btn btn-success topmargin-lg">Next Page -></a>
			</div>
			<div style="float:left">
			<a href="{{url('requirement')}}" class="btn btn-success topmargin-lg"><-Previous</a>
			</div>
			</div>
				</div>
			</div>
			
		</section>
		