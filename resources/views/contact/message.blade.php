@extends('layouts.default')

@section('content')
 <div class="container">
 	<div class="row">
 		<div class="col-md-8 col-sm-10 mx-auto">
 			<form action="#" method="POST">
 				<div class="form-group">
 					<label for="nom" class="label-control">Nom</label>
 					<input type="text" name="Nom" id="Nom" required="required" class="form-control">
 				</div>

 				<div class="form-group">
 					<label for="nom" class="label-control">Prenom</label>
 					<input type="text" name="Prenom" id="Prenom" required="required" class="form-control">
 				</div>

 				<div class="form-group">
 					<textarea class="form-control" rows="5" cols="100"></textarea>
 				</div>

 				<div class="form-group">
 					<button class="btn btn-primary btn-block">Envoyer</button>
 				</div>
 			</form>
 		</div>
 	</div>
 </div>
@stop