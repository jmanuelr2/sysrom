@extends('layouts.layout')

@section('register')		
	<div class="modal about-modal fade" id="myModal" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title">Register</h4>
				</div>
				<div class="modal-body">
					<div class="out-info">
						<div class="letter-w3ls">

							<form action="#" method="post">
								<div class="main">
									<div class="form-left-to-w3l">

										<input type="text" name="name" placeholder="Name" required="">
										<div class="clear"></div>
									</div>
									<div class="form-right-to-w3ls">

										<input type="text" name="last name" placeholder="Last Name" required="">
										<div class="clear"></div>
									</div>

								</div>

								<div class="main">
									<div class="form-left-to-w3l">

										<input type="email" name="email" placeholder="Email" required="">
										<div class="clear"></div>
									</div>
									<div class="form-right-to-w3ls">

										<input type="text" name="phone number" placeholder="Phone Number" required="">
										<div class="clear"></div>
									</div>
								</div>
								<div class="main">
									<div class="form-left-to-w3l">
										<select class="form-control">
											<option value="">Adopt Pet</option>
											<option>Male</option>
											<option>Female</option>
										</select>
									</div>
									<div class="form-right-to-w3ls">
										<select class="form-control">
											<option value="">Breed</option>
											<option>Bull Dog</option>
											<option>German Dog</option>
											<option>Poodle Dog</option>
											<option>Husky Dog</option>
										</select>
									</div>
								</div>

								<div class="form-add-to-w3ls add">

									<input type="text" name="address" placeholder="Street Address" required="">
									<div class="clear"></div>
								</div>


								<div class="main">
									<div class="form-left-to-w3l">

										<input type="text" name="city" placeholder="City" required="">
										<div class="clear"></div>
									</div>
									<div class="form-right-to-w3ls">
										<input type="text" name="state" placeholder="State" required="">
										<div class="clear"></div>
									</div>

								</div>
								<div class="main">
									<div class="form-left-to-w3l">
										<input type="text" name="Pin code" placeholder="Pin code" required="">
										<div class="clear"></div>
									</div>
									<div class="form-right-to-w3ls">
										<select class="form-control buttom">
											<option value="">
											Select Country</option>
												<option value="category2">Oman</option>
												<option value="category1">Australia</option>
												<option value="category3">America</option>
												<option value="category3">London</option>
												<option value="category3">Goa</option>
												<option value="category3">Canada</option>
												<option value="category3">Srilanka</option>
											</select>

										<div class="clear"></div>
									</div>

								</div>

								<div class="form-control-w3l">
									<textarea name="Message" placeholder="Why You Want Adopt Pet...?" required=""></textarea>
								</div>
								<div class="btnn">
									<button type="submit">Submit</button><br>
								</div>

							</form>
						</div>
					</div>
					<!--//register form-->

				</div>
			</div>
		</div>
	</div>
@stop		