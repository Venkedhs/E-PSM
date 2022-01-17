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
  

  <center>
			 <h1 style="text-align: center;">SUPERVISOR LIST</h1>
        </br>
        <form class="form-inline my-2 my-lg-0" type="get" action="{{url('/search')}}"></form>
        	<input style="width:80%" type="search" placeholder="SearchSupervisor" name="query">
        	<br>
        	<br>
        <button <a href="apply">Add Supervisor</a></button>
        <button <a href="{{ url('ViewSVList')}}" target="_blank">View Supervisor list </a></button>
        <button <a href="" target="_blank">Delete Supervisor </a></button>
        		        		
  </center>
			<center><table>
			<tr class="center">
				<br><br>
				<th>Supervisor ID</th>
				<th>Supervisor Name</th>
				<th>Expertise</th>
							</tr>

		</table></center>
  <!-- /.content -->

</div>
<!-- ./wrapper -->

<x-footer-new />