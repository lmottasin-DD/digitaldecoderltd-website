@extends('backend.layouts.admin_master')

@section('content')

<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="#">Admin</a>
							</li>
							<li class="active">Slider</li>
						</ul><!-- /.breadcrumb -->

						<div class="nav-search" id="nav-search">
							<form class="form-search">
								<span class="input-icon">
									<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
									<i class="ace-icon fa fa-search nav-search-icon"></i>
								</span>
							</form>
						</div><!-- /.nav-search -->
					</div>
</br>
                    <div class="container mt-5">
                        <div class="row">
                    <div class="col-md-12">
										<div class="widget-box">
											<div class="widget-header">
												<h4 class="widget-title col-md-11">Slider </h4>
                                                <a href="{{route('add.slider')}}" class="btn btn-primary btn-sm float-right"><i class="fas fa-plus"></i></a>
											</div>

											<div class="card-body">
												
                                            
											
											</div>
										</div>
									</div>
                                </div>
                    </div>


@endsection