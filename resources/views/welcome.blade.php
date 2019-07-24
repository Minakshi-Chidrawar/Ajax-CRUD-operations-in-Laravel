<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Ajax CRUD in laravel - justlaravel.com</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/master.css') }}">
		<style>
			body {
				margin-top: 5%;
			}
			.margin-top {
				margin-top: 50%;
			}
		</style>
    </head>
    <body>
     	<div class="container">
    		<div class="form-group row add">
    			<div class="col-md-8">
    				<input type="text" class="form-control" id="name" name="name"
    					placeholder="Enter some name" required>
    				<p class="error text-center alert alert-danger hidden"></p>
    			</div>
    			<div class="col-md-4">
    				<button class="btn btn-primary" type="submit" id="add">
    					<span class="glyphicon glyphicon-plus"></span>
    				</button>
    			</div>
    		</div>
			 {{ csrf_field() }}
			 <div class="container withBorder">
				 <div class="col-md-3">
					 <div class="table-responsive text-center">
						<table class="table table-borderless" id="table">
							@foreach($data as $item)
							<tr class="item{{$item->id}}">
								<!-- <td>{{$item->id}}</td> -->
								<td>{{$item->name}}</td>
								<td>
									<button class="delete-modal btn btn-danger"
										data-id="{{$item->id}}" data-name="{{$item->name}}">
										<span class="glyphicon glyphicon-minus"></span>
									</button>
								</td>
							</tr>
							@endforeach
						</table>
					</div>
				 </div>
				 <div class="col-md-3">
					 <div class="table-responsive text-center margin-top">
						 <button class="select-modal btn btn-primary" id="selectWinner">
							 <span class="glyphicon glyphicon-forward"></span>
						 </button>
					 </div>
				 </div>
				 <div class="col-md-3">
					 <div id="results">
						 <table class="table table-borderless" id="table">
							 @foreach($data as $item)
								 <tr class="item{{$item->id}}">
								 <!-- <td>{{$item->id}}</td> -->
									 <td>{{$item->name}}</td>
								 </tr>
							 @endforeach
						 </table>
					 </div>
				 </div>
			</div>
  		</div>
  		<div id="myModal" class="modal fade" role="dialog">
  			<div class="modal-dialog">
  			<!-- Modal content-->
  				<div class="modal-content">
  					<div class="modal-header">
  						<button type="button" class="close" data-dismiss="modal">&times;</button>
  						<h4 class="modal-title"></h4>
  					</div>
  					<div class="modal-body">
  					<!-- <form class="form-horizontal" role="form">
  						<div class="form-group">
  							<label class="control-label col-sm-2" for="id">ID:</label>
  							<div class="col-sm-10">
  								<input type="text" class="form-control" id="fid" disabled>
  							</div>
  						</div>
  						<div class="form-group">
  							<label class="control-label col-sm-2" for="name">Name:</label>
  							<div class="col-sm-10">
  								<input type="name" class="form-control" id="n">
  							</div>
  						</div>
  					</form> -->
  						<div class="deleteContent">
  							Are you Sure you want to delete <strong><span class="dname"></span></strong>? <span
  								class="hidden did"></span>
  						</div>
  						<div class="modal-footer">
  							<button type="button" class="btn actionBtn" data-dismiss="modal">
  								<span id="footer_action_button" class='glyphicon'> </span>
  							</button>
  							<button type="button" class="btn btn-warning" data-dismiss="modal">
  								<span class='glyphicon glyphicon-remove'></span> Close
  							</button>
  						</div>
  					</div>
  				</div>
		  	</div>
		</div>
      <script src="{{ asset('js/app.js') }}"></script>
      <script src="{{ asset('js/script.js') }}"></script>
    </body>
</html>
