<link rel="stylesheet" href="{{ asset("css/report.css") }}" />
<header class="clearfix">
  <div id="logo">
    <h1>Rewarding Center</h1>
    <div style="margin: auto; display: block; " >
        <img 
         src="{{asset('rewarding.jpg')}}" alt="obaaa" href="obaaa.sd">
        </div>
  </div>

  <h1>Report</h1><br><br>
  <h2>Courses:   [ {{$input['from_date']}} ] to [ {{$input['to_date']}} ]</h2>
  <main>


   <table class="table table-bordered">
    <thead>
     <th class="col-sm-12">name</th>
     <th class="">teacher</th>
     <th class="">cost</th>
   </thead>
   <tbody>

    @foreach($courses as $course)

    <?php $orders = App\Course::where('id','=', $course->id)->get(); ?>
    @foreach($orders as $order)

    <tr>
      <td>
        {{App\CourseName::where('id','=', $order->courses_names_id)->first()->course_name}}
      </td>
      @if($order->teacher_id == null)
      <td></td>
      @else
      <td>
        {{App\Teacher::find($order->teacher_id)->teacher_name}} 
      </td>
      @endif
      <td>
        {{$order->course_cost}}
      </td>

    </tr>
    @endforeach
    @endforeach

  </tbody>
</table>
<div id="notices">
  <div></div>
  <div class="notice"></div>
</div>
</main>
<footer>
      <div>NORA-CENTER : WWW.obaaa.sd</div>
    </footer>



