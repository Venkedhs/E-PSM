<x-header-new />
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Student Profile</h1>
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
			 <h1 style="text-align: center;">MEETING BOOKING FORM</h1>
        </br>
		<button <a href="">Add Meeting Booking</a></button>
        <button <a href="" target="_blank">View Meeting Booking </a></button>
        <button <a href="" target="_blank">Edit Meeting Booking </a></button>

  </center>
	<center><fieldset>
		     <br>

			<table>
				<form action="AddMeetingBooking" method="POST" name="meetingForm"  >
                @csrf
				<center>
				<td><td>
					<p>
					<td>
					<label for="id">Student ID:</label>
					</td>
					<td>
					<input type="text" name="userID" id="STD_ID">
					<td>
					</p>
				</td>
                </tr>
				
				<td><td>
					<p>
					<td>
					<label for=Meeting_Date>Meeting Date:</label>
					</td>
					<td>
					<input type="date" name="Meeting_date" id="Meeting_Date">
					</td>
					</p>
				</td>
				</tr>

				<td><td>
					<p>
					<td>
					<label for=Meeting_Start>Start Time:</label>
					</td>
					<td>
					<input type="time" name="Meeting_start" id="Meeting_Start">
					</td>
					</p>
				</td>
				</tr>

				<td><td>
					<p>
					<td>
					<label for=Meeting_End>End Time:</label>
					</td>
					<td>
					<input type="time" name="Meeting_end" id="Meeting_End">
					</td>
					</p>
				</td>
				</tr>

				<td><td>
					<p>
					<td>
					<label for="Meeting_Purpose">Meeting purpose:</label>
					</td>
					<td>
					<input type="text" name="Meeting_purpose" id="Meeting_Purpose">
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

<x-footer-new />