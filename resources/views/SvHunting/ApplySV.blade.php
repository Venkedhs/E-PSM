// this for student apply for sv
<?php

$logged_user = session()->get('logged_user');
$user_name = session()->get('name');
$roles = session()->get('user_type');

// $all = session()->all();

// var_dump($all);
?>
<x-header-new />
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

<style>
	table.center{
		margin-left :auto;
		margin-right :auto;
	}
	}
</style>
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Student Page </h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item active">Utama</li>
            <!-- <li class="breadcrumb-item active">Starter Page</li> -->
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="container">
      <table style="width:100%"> 
        <tr>
         	<center>
			 <h1 style="text-align: center;">Apply SV FORM</h1>
        </br>
		
		<button><a href="ApplySV" >Add Supervisor<class="nav-link  @if(url()->current() ===  URL::to('/ApplySV'))
		active
		@endif"></class="nav-link></a></button>

        
        <button><a href="ViewApplicationStatus" >View Application Status<class="nav-link  @if(url()->current() ===  URL::to('/ViewApplicationStatus'))
				active
				@endif"></class="nav-link></a></button>

				<button><a href="ViewSVList" >View Supervisor List<class="nav-link  @if(url()->current() ===  URL::to('/ViewSVList'))
				active
				@endif"></class="nav-link></a></button>
        <button <a href="" target="_blank">delete supervisor list </a></button>
        

  </center>
	<center>
		<fieldset>
		     <br>
		     <center>
        <table>
          <tr class="center">
            <br><br>
            <th>Student ID</th>
            <th>Student Name</th>
            <th>Student Email</th>
            <th>Student No</th>
            <th>Course</th>
            <th>Project Title</th>
            <th>Summaries Topic</th>
            <th>Reason Apply sv</th>
          </tr>
          @foreach ($SvHunting as $data)
          <tr>
            <h3>:&nbsp&nbsp{{$student[0]->userID}}</h3>
            <h3>:&nbsp&nbsp{{$student[0]->name}}</h3>
            <h3>:&nbsp&nbsp{{$student[0]->email}}</h3>
            <h3>:&nbsp&nbsp{{$student[0]->no}}</h3>
            <h3>:&nbsp&nbsp{{$student[0]->course}}</h3>
            <h3>:&nbsp&nbsp{{$student[0]->title}}</h3>
            <h3>:&nbsp&nbsp{{$student[0]->topic}}</h3>
            <h3>:&nbsp&nbsp{{$student[0]->reason}}</h3>
                        
          </tr>
         @endforeach

			    </table>
			  </center>

			<center>
			<input type="submit" name="Submit" id="Submit" value="Submit" method="post">
            </center>
			</p>
			</form>
		</fieldset>
	</center>
</table>
    </div><!-- /.container -->
  </div>
  <!-- /.content -->

</div>
<!-- ./wrapper -->


			<input type="submit" name="Submit" id="Submit" value="Submit" method="post">
            </center>
			</p>
			</form>
		</fieldset>
	</center>
</table>
    </div><!-- /.container -->
  </div>
  <!-- /.content -->

</div>
<!-- ./wrapper -->


<x-footer-new />