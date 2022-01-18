//this for coordinator add sv
<?php

$logged_user = session()->get('logged_user');
$user_name = session()->get('name');
$roles = session()->get('user_type');

// $all = session()->all();

// var_dump($all);
?>

<x-header-new />

<style>
	
	table.center{
		margin-left :auto;
		margin-right :auto;
	}
	
</style>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Coordinator Page </h1>
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
			 <h1 style="text-align: center;">ADD SV FORM</h1>
        </br>
		<button <a href="" target="_blank">delete supervisor list </a></button>
   	<button><a href="Addsv" >Add Supervisor<class="nav-link  @if(url()->current() ===  URL::to('/Addsv'))
		active
		@endif"></class="nav-link></a></button>
		<button><a href="ViewSVList" >View Supervisor List<class="nav-link  @if(url()->current() ===  URL::to('/ViewSVList'))
		active
		@endif"></class="nav-link></a></button>

		<button <a href="" target="_blank">Delete Supervisor </a></button>

  </center>
	<center><fieldset>
		     <br>

			<table>
				<form action="AddMeetingBooking" method="POST" name="meetingForm"  >
                @csrf
				<center>

				<td>
					<td>
					<p>
					<td>
					<label for="id">Coordinator ID:</label>
					</td>
					<td>
					<input type="text" name="CO_id" id="CO_ID">
					<td>
					</p>
				</td>
        </tr>
				
				<td>
					<td>
					<p>
					<td>
					<label for=SvName>SvName</label>
					</td>
					<td>
					<input type="text" name="SvName" id="SvName">
					</td>
					</p>
				</td>
				</tr>
				
				<td>
					<td>
					<p>
					<td>
					<label for=SvExpertise>SvExpertise</label>
					</td>
					<td>
					<input type="text" name="SvExpertise" id="SvExpertise">
					</td>
					</p>
				</td>
				</tr>

				<td>
					<td>
					<p>
					<td>
					<label for=SvExperience>SvExperience</label>
					</td>
					<td>
					<input type="text" name="SvExperience" id="SvExperience">
					</td>
					</p>
				</td>
				</tr>

				<td>
					<td>
					<p>
					<td>
					<label for=SvContactNo>SvContactNo</label>
					</td>
					<td>
					<input type="text" name="SvContactNo" id="SvContactNo">
					</td>
					</p>
				</td>
				</tr>

				<td>
					<td>
					<p>
					<td>
					<label for=SvEmail>SvEmail</label>
					</td>
					<td>
					<input type="text" name="SvEmail" id="SvEmail">
					</td>
					</p>
				</td>
				</tr>

			</table>
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