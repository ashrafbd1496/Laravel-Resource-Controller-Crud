<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Update Data</title>
	<!-- ALL CSS FILES  -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
</head>
<body>



	<div class="wrap ">
		<div class="card shadow">
			<div class="card-body">
				<h2>Update Data</h2>

				<form action="{{route('pateints.update',$edit_data ->id)}}" method="PUT" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

					<div class="form-group">
						<label for="">Name</label>
						<input name="name" class="form-control" type="text" value="{{$edit_data ->name}}">
					</div>
					<div class="form-group">
						<label for="">Email</label>
						<input name="email" class="form-control" type="text" value="{{$edit_data ->email}}">
					</div>
					<div class="form-group">
						<label for="">Cell</label>
						<input name="cell" class="form-control" type="text" value="{{$edit_data ->cell}}">
					</div>
					<div class="form-group">
						<label for="">Username</label>
						<input  name="uname" class="form-control" type="text" value="{{$edit_data ->username}}">
					</div>
                    <div class="form-group">
                        <label for="">Photo</label>
                        <input  name="photo" class="form-control" type="file" value="{{$edit_data ->photo}}">
                    </div>
					<div class="form-group">
						<input name="update" class="btn btn-primary" type="submit" value="Update">
					</div>
				</form>
			</div>
		</div>
	</div>








	<!-- JS FILES  -->
    <script src="{{asset('assets/js/jquery-3.4.1.min.js')}}"></script>
    <script src="{{asset('assets/js/popper.min.js')}}"></script>
    <script src="{{'assets/js/bootstrap.min.js'}}"></script>
    <script src="{{asset('assets/js/custom.js')}}"></script>
</body>
</html>
