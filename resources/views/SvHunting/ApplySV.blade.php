// this for student apply for sv

<x-header-new />
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

	#form{
		position:fixed;
		top:50%;
		left:50%;
		width:250px;
	}

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
		<button <a href="">Apply supervisor</a></button>
        <button <a href="" target="_blank">View Supervisor list </a></button>
        <button <a href="" target="_blank">delete supervisor list </a></button>

  </center>
	<center><fieldset>
		     <br>

			<table>
				<form action="ApplySV" method="POST" name="ApplicationForm"  >
                @csrf
				<center>

				<td>
					<td>
					<p>
					<td>
					<label for="id">Student_ID:</label>
					</td>
					<td>
					<input type="text" name="STD_id" id="Student_ID">
					<td>
					</p>
				</td>
        </tr>
				
				<td>
					<td>
					<p>
					<td>
					<label for=StudentName>Student_Name</label>
					</td>
					<td>
					<input type="text" name="Student_Name" id="Student_Name">
					</td>
					</p>
				</td>
				</tr>

				<td>
					<td>
					<p>
					<td>
					<label for=StudentEmail>StudentEmail</label>
					</td>
					<td>
					<input type="text" name="StudentEmail" id="StudentEmail">
					</td>
					</p>
				</td>
				</tr>

				<td>
					<td>
					<p>
					<td>
					<label for=StudentNo>Student No</label>
					</td>
					<td>
					<input type="text" name="StudentNo" id="StudentNo">
					</td>
					</p>
				</td>
				</tr>

				<td>
					<td>
					<p>
					<td>
					<label for=Course>Course</label>
					</td>
					<td>
					<input type="text" name="Course" id="Course">
					</td>
					</p>
				</td>
				</tr>
				
				<td>
					<td>
					<p>
					<td>
					<label for=title>ProjectTitle</label>
					</td>
					<td>
					<input type="text" name="title" id="title">
					</td>
					</p>
				</td>
				</tr>

				
				<td>
					<td>
					<p>
					<td>
					<label for=SummariesTopic>SummariesTopic</label>
					</td>
					<td>
					<input type="text" name="SummariesTopic" id="SummariesTopic">
					</td>
					</p>
				</td>
				</tr>

				

				<td>
					<td>
					<p>
					<td>
					<label for=Reason>Reason apply sv</label>
					</td>
					<td>
					<input type="text" name="Reason" id="Reason">
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