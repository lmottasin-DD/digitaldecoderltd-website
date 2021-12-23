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
				<br>
                    <div class="container mt-5">
                        <div class="row">
                    <div class="col-md-12">
										<div class="">
											<div class="widget-header">
												<h4 class="widget-title col-md-11">Slider </h4>
                                                <a href="{{route('add.slider')}}" class="btn btn-primary btn-sm pull-right"><i class="fas fa-plus"></i></a>
											</div>

											<div class="card-body">
												
												<table id="simple-table" class="table  table-bordered table-hover">
													<thead>
														<tr>
															<th>ID</th>
															<th>Title</th>
															<th>Image</th>
															<th>Status</th>
															<th>Action</th>
														</tr>
													</thead>
													<tbody>
														@foreach ($sliders as $item)
														<tr>
															<td>{{$item->id}}</td>
															<td>{{$item->title}}</td>
															<td>
																<img src="{{asset('uploads/slider/'.$item->image)}}" width="60px" alt="">	
															</td>
															<td>
																@if($item->status == '1')
																	Active	
																@else
																	Deactive	
																@endif
															</td>
															<td>
																<a href="{{url('view-slider/'.$item->id)}}">
																<button  class="tooltip-info" data-rel="tooltip" title="View">
																	<span class="blue">
																		<i class="ace-icon fa fa-search-plus bigger-120"></i>
																	</span>
																</button>
															</a>
															<a  href="{{url('edit-slider/'.$item->id)}}">
																<button  class="tooltip-success" data-rel="tooltip" title="Edit">
																	<span class="green">
																		<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																	</span>
																</button>
															</a>
															<a href="{{url('delete-slider/'.$item->id)}}">
																<button  class="tooltip-error" data-rel="tooltip" title="Delete">
																	<span class="red">
																		<i class="fas fa-trash-alt"></i>
																	</span>
																</button>
															</a>
															</td>
														</tr>
														@endforeach
													</tbody>

												</table>
                                            
											</div>
										</div>
									</div>
                                </div>
                    </div>


@endsection