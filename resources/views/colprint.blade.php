<link rel="stylesheet" href="{{ asset('css/report.css') }}" />
<header class="clearfix">

	<div id="logo">
		<h1>Rewarding Center</h1>
		<div style="margin: auto; display: block; " >
			<img 
			src="{{asset('rewarding.jpg')}}" alt="obaaa" href="obaaa.sd">
		</div>
	</div>
	

<h1>FINANCAIL CLEARANCE SLIP</h1>
<p style="opacity: 1;
    color: BLACK;
    position: absolute;
    bottom: 850;
    right: 0;
    font-size: 18px;">Date : &nbsp; &nbsp; &nbsp;[ {{$current_date->format('Y-m-d (h:i:s)')}} ]</p>
</header>
<main>
	<h2>Student Number : &nbsp; &nbsp; &nbsp;{{$student->id}}</h2>
	<h2>Student Name : &nbsp; &nbsp; &nbsp;{{$student->student_name}}</h2>
	<h2>Course Number : &nbsp; &nbsp; &nbsp;{{$course->id}}</h2>
	<h2>Course Name : &nbsp; &nbsp; &nbsp;{{App\CourseName::find($course->courses_names_id)->course_name}}</h2>
	<h2>Course Cost : &nbsp; &nbsp; &nbsp;{{$course->course_cost}} SDG</h2>
	<h2>Obtained : &nbsp; &nbsp; &nbsp;{{$col_obtained}} SDG</h2>
	<h2>Remained : &nbsp; &nbsp; &nbsp;{{$course->course_cost - $col_obtained}} SDG</h2>
	<p>Register's name : &nbsp; &nbsp; &nbsp;{{ Auth::user()->name }}</p>
	<p>Register's sign </p>
	<p style="opacity: 0.7;
    color: BLACK;
    position: absolute;
    bottom: 570;
    right: 0;
    font-size: 12px;">NORA-CENTER : WWW.obaaa.sd</p>
</main>
<br><br>
<h1></h1>

<header class="clearfix">
	
	<div id="logo">
		<h1>Rewarding Center</h1>
		<div style="margin: auto; display: block; " >
			<img 
			src="{{asset('rewarding.jpg')}}" alt="obaaa" href="obaaa.sd">
		</div>
	</div>
	

	<h1>FINANCAIL CLEARANCE SLIP</h1>
	<p style="opacity: 1;
    color: BLACK;
    position: absolute;
    bottom: 270;
    right: 0;
    font-size: 18px;">Date : &nbsp; &nbsp; &nbsp;[ {{$current_date->format('Y-m-d (h:i:s)')}} ]</p>
</header>
<main>
	<h2>Student Number  : &nbsp;&nbsp;&nbsp;{{$student->id}}</h2>
	<h2>Student Name : &nbsp;&nbsp;&nbsp;{{$student->student_name}}</h2>
	<h2>Course Number : &nbsp;&nbsp;&nbsp;{{$course->id}}</h2>
	<h2>Course Name : &nbsp;&nbsp;&nbsp;{{App\CourseName::find($course->courses_names_id)->course_name}}</h2>
	<h2>Course Cost : &nbsp;&nbsp;&nbsp;{{$course->course_cost}} SDG</h2>
	<h2>Obtained  : &nbsp;&nbsp;&nbsp;{{$col_obtained}} SDG</h2>
	<h2>اRemained : &nbsp;&nbsp;&nbsp;{{$course->course_cost - $col_obtained}} SDG</h2>
	<p>Register's name : &nbsp;&nbsp;&nbsp;{{ Auth::user()->name }}</p>
	<p>Register's sign </p>
	<p style="opacity: 0.5;
    color: BLACK;
    position: absolute;
    bottom: 0;
    right: 0;
    font-size: 100px;">COPY</p>
</main>
<p style="opacity: 0.7;
    color: BLACK;
    position: absolute;
    bottom: -35;
    right: 0;
    font-size: 12px;">NORA-CENTER : WWW.obaaa.sd</p>
      