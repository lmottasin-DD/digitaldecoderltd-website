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
												<h4 class="widget-title col-md-11">Add Slider </h4>
                                                <a href="{{route('home.slider')}}" class="btn btn-danger btn-sm float-right"><i class="fas fa-undo"></i></a>
											</div>
                                            <div class="card">
											<div class="card-body">
												
                                            <form action="#" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <div class="form-group">
                                                    <label for="">Heading</label>
                                                    <input type="text" name="title" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Description</label>
                                                    <textarea name="description" class="form-control"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Link</label>
                                                    <input type="text" name="link" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Link Name</label>
                                                    <input type="text" name="link_name" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Slider Image Upload</label>
                                                    <input type="file" name="image" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Status</label>
                                                    <input type="checkbox" name="status"> 0=visiable,1=hidden
                                                </div>
                                                <div class="form-group">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                                </div>
                                            </form>
											
											</div>
										</div>
									</div>
                                </div>
                                </div>
                    </div>
              </div>


@endsection