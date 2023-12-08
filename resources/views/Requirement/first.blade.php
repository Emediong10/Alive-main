
@extends('layouts.body')
@section('content')




<section id="content">


			<div class="content-wrap bg-light">

				<div class="container">

					<div class="row justify-content-center">
						<div class="col-lg-10 col-md-13">
							<div class="card shadow-sm">
								<div class="card-header">
									<h4 class="mb-0">Form Feilds</h4>
								</div>
								<div class="card-body">

									<div class="form-widget">

										<div class="form-result"></div>
										</div>
										<form class="mb-0" id="template-contactform" name="template-contactform" action="" method="post" enctype="multipart/form-data">
										<div class="row">
													

												<div class="col-12 bottommargin-sm">
													<label for="template-contactform-tags-select">Tags Select Box:</label>
													<select class="select-tags input-select2 form-select" multiple="" tabindex="-1" aria-hidden="true" id="template-contactform-tags-select" name="template-contactform-tags-select[]" style="width: 100%;">
														<option value="Orange" selected="selected">Orange</option>
														<option value="White">White</option>
														<option value="Purple" selected="selected">Purple</option>
														<option value="Red">Red</option>
														<option value="Blue">Blue</option>
														<option value="Green">Green</option>
													</select>
												</div>


												<div class="col-12 bottommargin-sm">
													<label for="template-contactform-multiple-select">Multiple Selected Box:</label>
													<select id="template-contactform-multiple-select" name="template-contactform-multiple-select[]" class="selectpicker w-100">
														<option value="Mustard">Mustard</option>
														<option value="Ketchup">Ketchup</option>
														<option value="Relish">Relish</option>
													</select>
												</div>

												<div class="col-12 bottommargin-sm">
													<label for="template-contactform-default-select">Single Select Box:</label>
													<select id="template-contactform-default-select" name="template-contactform-default-select" class="form-select">
														<option value="">Select One</option>
														<option value="Wordpress">Wordpress</option>
														<option value="PHP / MySQL">PHP / MySQL</option>
														<option value="HTML5 / CSS3">HTML5 / CSS3</option>
														<option value="Graphic Design">Graphic Design</option>
													</select>
												</div>
												</div>

												</form>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						</section>