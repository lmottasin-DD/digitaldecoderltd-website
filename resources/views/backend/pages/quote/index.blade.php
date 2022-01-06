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
                    <li class="active">Quote</li>
                </ul><!-- /.breadcrumb -->

                <div class="nav-search" id="nav-search">
                    <form class="form-search">
                        <span class="input-icon">
                            <input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input"
                                autocomplete="off" />
                            <i class="ace-icon fa fa-search nav-search-icon"></i>
                        </span>
                    </form>
                </div><!-- /.nav-search -->
            </div>
            <br>
            <div class="container mt-5">
                @if (Session::has('status'))
                    <div>
                        <p class="alert alert-info">{{ Session::get('status') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true" style="font-size:20px">×</span>
                            </button>
                        </p>
                    </div>

                @endif
                @if (Session::has('destory'))
                    <div>
                        <p class="alert alert-danger">{{ Session::get('destory') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true" style="font-size:20px">×</span>
                            </button>
                        </p>
                    </div>

                @endif
                <div class="row">
                    <div class="col-md-12">
                        <div class="">
                            <div class="widget-header">
                                <h4 class="widget-title col-md-11">All Qoute </h4>
                                <a href="{{ route('quote.create') }}" class="btn btn-primary btn-sm pull-right"><i
                                        class="fas fa-plus"></i></a>
                            </div>
                        </div>
                        <br>
                        <div class="card-body">
                            {{-- <table id="simple-table" class="table  table-bordered table-hover">
										<thead>
											<tr>
												<th class="center">
													<label class="pos-rel">
														<input type="checkbox" class="ace">
														<span class="lbl"></span>
													</label>
												</th>
												<th class="detail-col">Details</th>
												<th>Domain</th>
												<th>Price</th>
												<th class="hidden-480">Clicks</th>

												<th>
													<i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>
													Update
												</th>
												<th class="hidden-480">Status</th>

												<th></th>
											</tr>
										</thead>

										<tbody>
											<tr>
												<td class="center">
													<label class="pos-rel">
														<input type="checkbox" class="ace">
														<span class="lbl"></span>
													</label>
												</td>

												<td class="center">
													<div class="action-buttons">
														<a href="#" class="green bigger-140 show-details-btn" title="Show Details">
															<i class="ace-icon fa fa-angle-double-down"></i>
															<span class="sr-only">Details</span>
														</a>
													</div>
												</td>

												<td>
													<a href="#">ace.com</a>
												</td>
												<td>$45</td>
												<td class="hidden-480">3,330</td>
												<td>Feb 12</td>

												<td class="hidden-480">
													<span class="label label-sm label-warning">Expiring</span>
												</td>

												<td>
													<div class="hidden-sm hidden-xs btn-group">
														<button class="btn btn-xs btn-success">
															<i class="ace-icon fa fa-check bigger-120"></i>
														</button>

														<button class="btn btn-xs btn-info">
															<i class="ace-icon fa fa-pencil bigger-120"></i>
														</button>

														<button class="btn btn-xs btn-danger">
															<i class="ace-icon fa fa-trash-o bigger-120"></i>
														</button>

														<button class="btn btn-xs btn-warning">
															<i class="ace-icon fa fa-flag bigger-120"></i>
														</button>
													</div>

													<div class="hidden-md hidden-lg">
														<div class="inline pos-rel">
															<button class="btn btn-minier btn-primary dropdown-toggle" data-toggle="dropdown" data-position="auto">
																<i class="ace-icon fa fa-cog icon-only bigger-110"></i>
															</button>

															<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
																<li>
																	<a href="#" class="tooltip-info" data-rel="tooltip" title="" data-original-title="View">
																		<span class="blue">
																			<i class="ace-icon fa fa-search-plus bigger-120"></i>
																		</span>
																	</a>
																</li>

																<li>
																	<a href="#" class="tooltip-success" data-rel="tooltip" title="" data-original-title="Edit">
																		<span class="green">
																			<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																		</span>
																	</a>
																</li>

																<li>
																	<a href="#" class="tooltip-error" data-rel="tooltip" title="" data-original-title="Delete">
																		<span class="red">
																			<i class="ace-icon fa fa-trash-o bigger-120"></i>
																		</span>
																	</a>
																</li>
															</ul>
														</div>
													</div>
												</td>
											</tr>

											<tr class="detail-row">
												<td colspan="8">
													<div class="table-detail">
														<div class="row">
															<div class="col-xs-12 col-sm-2">
																<div class="text-center">
																	<img height="150" class="thumbnail inline no-margin-bottom" alt="Domain Owner's Avatar" src="assets/images/avatars/profile-pic.jpg">
																	<br>
																	<div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
																		<div class="inline position-relative">
																			<a class="user-title-label" href="#">
																				<i class="ace-icon fa fa-circle light-green"></i>
																				&nbsp;
																				<span class="white">Alex M. Doe</span>
																			</a>
																		</div>
																	</div>
																</div>
															</div>

															<div class="col-xs-12 col-sm-7">
																<div class="space visible-xs"></div>

																<div class="profile-user-info profile-user-info-striped">
																	<div class="profile-info-row">
																		<div class="profile-info-name"> Username </div>

																		<div class="profile-info-value">
																			<span>alexdoe</span>
																		</div>
																	</div>

																	<div class="profile-info-row">
																		<div class="profile-info-name"> Location </div>

																		<div class="profile-info-value">
																			<i class="fa fa-map-marker light-orange bigger-110"></i>
																			<span>Netherlands, Amsterdam</span>
																		</div>
																	</div>

																	<div class="profile-info-row">
																		<div class="profile-info-name"> Age </div>

																		<div class="profile-info-value">
																			<span>38</span>
																		</div>
																	</div>

																	<div class="profile-info-row">
																		<div class="profile-info-name"> Joined </div>

																		<div class="profile-info-value">
																			<span>2010/06/20</span>
																		</div>
																	</div>

																	<div class="profile-info-row">
																		<div class="profile-info-name"> Last Online </div>

																		<div class="profile-info-value">
																			<span>3 hours ago</span>
																		</div>
																	</div>

																	<div class="profile-info-row">
																		<div class="profile-info-name"> About Me </div>

																		<div class="profile-info-value">
																			<span>Bio</span>
																		</div>
																	</div>
																</div>
															</div>

															<div class="col-xs-12 col-sm-3">
																<div class="space visible-xs"></div>
																<h4 class="header blue lighter less-margin">Send a message to Alex</h4>

																<div class="space-6"></div>

																<form>
																	<fieldset>
																		<textarea class="width-100" resize="none" placeholder="Type something…"></textarea>
																	</fieldset>

																	<div class="hr hr-dotted"></div>

																	<div class="clearfix">
																		<label class="pull-left">
																			<input type="checkbox" class="ace">
																			<span class="lbl"> Email me a copy</span>
																		</label>

																		<button class="pull-right btn btn-sm btn-primary btn-white btn-round" type="button">
																			Submit
																			<i class="ace-icon fa fa-arrow-right icon-on-right bigger-110"></i>
																		</button>
																	</div>
																</form>
															</div>
														</div>
													</div>
												</td>
											</tr>

											<tr>
												<td class="center">
													<label class="pos-rel">
														<input type="checkbox" class="ace">
														<span class="lbl"></span>
													</label>
												</td>

												<td class="center">
													<div class="action-buttons">
														<a href="#" class="green bigger-140 show-details-btn" title="Show Details">
															<i class="ace-icon fa fa-angle-double-down"></i>
															<span class="sr-only">Details</span>
														</a>
													</div>
												</td>

												<td>
													<a href="#">base.com</a>
												</td>
												<td>$35</td>
												<td class="hidden-480">2,595</td>
												<td>Feb 18</td>

												<td class="hidden-480">
													<span class="label label-sm label-success">Registered</span>
												</td>

												<td>
													<div class="hidden-sm hidden-xs btn-group">
														<button class="btn btn-xs btn-success">
															<i class="ace-icon fa fa-check bigger-120"></i>
														</button>

														<button class="btn btn-xs btn-info">
															<i class="ace-icon fa fa-pencil bigger-120"></i>
														</button>

														<button class="btn btn-xs btn-danger">
															<i class="ace-icon fa fa-trash-o bigger-120"></i>
														</button>

														<button class="btn btn-xs btn-warning">
															<i class="ace-icon fa fa-flag bigger-120"></i>
														</button>
													</div>

													<div class="hidden-md hidden-lg">
														<div class="inline pos-rel">
															<button class="btn btn-minier btn-primary dropdown-toggle" data-toggle="dropdown" data-position="auto">
																<i class="ace-icon fa fa-cog icon-only bigger-110"></i>
															</button>

															<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
																<li>
																	<a href="#" class="tooltip-info" data-rel="tooltip" title="" data-original-title="View">
																		<span class="blue">
																			<i class="ace-icon fa fa-search-plus bigger-120"></i>
																		</span>
																	</a>
																</li>

																<li>
																	<a href="#" class="tooltip-success" data-rel="tooltip" title="" data-original-title="Edit">
																		<span class="green">
																			<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																		</span>
																	</a>
																</li>

																<li>
																	<a href="#" class="tooltip-error" data-rel="tooltip" title="" data-original-title="Delete">
																		<span class="red">
																			<i class="ace-icon fa fa-trash-o bigger-120"></i>
																		</span>
																	</a>
																</li>
															</ul>
														</div>
													</div>
												</td>
											</tr>

											<tr class="detail-row">
												<td colspan="8">
													<div class="table-detail">
														<div class="row">
															<div class="col-xs-12 col-sm-2">
																<div class="text-center">
																	<img height="150" class="thumbnail inline no-margin-bottom" alt="Domain Owner's Avatar" src="assets/images/avatars/profile-pic.jpg">
																	<br>
																	<div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
																		<div class="inline position-relative">
																			<a class="user-title-label" href="#">
																				<i class="ace-icon fa fa-circle light-green"></i>
																				&nbsp;
																				<span class="white">Alex M. Doe</span>
																			</a>
																		</div>
																	</div>
																</div>
															</div>

															<div class="col-xs-12 col-sm-7">
																<div class="space visible-xs"></div>

																<div class="profile-user-info profile-user-info-striped">
																	<div class="profile-info-row">
																		<div class="profile-info-name"> Username </div>

																		<div class="profile-info-value">
																			<span>alexdoe</span>
																		</div>
																	</div>

																	<div class="profile-info-row">
																		<div class="profile-info-name"> Location </div>

																		<div class="profile-info-value">
																			<i class="fa fa-map-marker light-orange bigger-110"></i>
																			<span>Netherlands, Amsterdam</span>
																		</div>
																	</div>

																	<div class="profile-info-row">
																		<div class="profile-info-name"> Age </div>

																		<div class="profile-info-value">
																			<span>38</span>
																		</div>
																	</div>

																	<div class="profile-info-row">
																		<div class="profile-info-name"> Joined </div>

																		<div class="profile-info-value">
																			<span>2010/06/20</span>
																		</div>
																	</div>

																	<div class="profile-info-row">
																		<div class="profile-info-name"> Last Online </div>

																		<div class="profile-info-value">
																			<span>3 hours ago</span>
																		</div>
																	</div>

																	<div class="profile-info-row">
																		<div class="profile-info-name"> About Me </div>

																		<div class="profile-info-value">
																			<span>Bio</span>
																		</div>
																	</div>
																</div>
															</div>

															<div class="col-xs-12 col-sm-3">
																<div class="space visible-xs"></div>
																<h4 class="header blue lighter less-margin">Send a message to Alex</h4>

																<div class="space-6"></div>

																<form>
																	<fieldset>
																		<textarea class="width-100" resize="none" placeholder="Type something…"></textarea>
																	</fieldset>

																	<div class="hr hr-dotted"></div>

																	<div class="clearfix">
																		<label class="pull-left">
																			<input type="checkbox" class="ace">
																			<span class="lbl"> Email me a copy</span>
																		</label>

																		<button class="pull-right btn btn-sm btn-primary btn-white btn-round" type="button">
																			Submit
																			<i class="ace-icon fa fa-arrow-right icon-on-right bigger-110"></i>
																		</button>
																	</div>
																</form>
															</div>
														</div>
													</div>
												</td>
											</tr>

											<tr>
												<td class="center">
													<label class="pos-rel">
														<input type="checkbox" class="ace">
														<span class="lbl"></span>
													</label>
												</td>

												<td class="center">
													<div class="action-buttons">
														<a href="#" class="green bigger-140 show-details-btn" title="Show Details">
															<i class="ace-icon fa fa-angle-double-down"></i>
															<span class="sr-only">Details</span>
														</a>
													</div>
												</td>

												<td>
													<a href="#">max.com</a>
												</td>
												<td>$60</td>
												<td class="hidden-480">4,400</td>
												<td>Mar 11</td>

												<td class="hidden-480">
													<span class="label label-sm label-warning">Expiring</span>
												</td>

												<td>
													<div class="hidden-sm hidden-xs btn-group">
														<button class="btn btn-xs btn-success">
															<i class="ace-icon fa fa-check bigger-120"></i>
														</button>

														<button class="btn btn-xs btn-info">
															<i class="ace-icon fa fa-pencil bigger-120"></i>
														</button>

														<button class="btn btn-xs btn-danger">
															<i class="ace-icon fa fa-trash-o bigger-120"></i>
														</button>

														<button class="btn btn-xs btn-warning">
															<i class="ace-icon fa fa-flag bigger-120"></i>
														</button>
													</div>

													<div class="hidden-md hidden-lg">
														<div class="inline pos-rel">
															<button class="btn btn-minier btn-primary dropdown-toggle" data-toggle="dropdown" data-position="auto">
																<i class="ace-icon fa fa-cog icon-only bigger-110"></i>
															</button>

															<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
																<li>
																	<a href="#" class="tooltip-info" data-rel="tooltip" title="" data-original-title="View">
																		<span class="blue">
																			<i class="ace-icon fa fa-search-plus bigger-120"></i>
																		</span>
																	</a>
																</li>

																<li>
																	<a href="#" class="tooltip-success" data-rel="tooltip" title="" data-original-title="Edit">
																		<span class="green">
																			<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																		</span>
																	</a>
																</li>

																<li>
																	<a href="#" class="tooltip-error" data-rel="tooltip" title="" data-original-title="Delete">
																		<span class="red">
																			<i class="ace-icon fa fa-trash-o bigger-120"></i>
																		</span>
																	</a>
																</li>
															</ul>
														</div>
													</div>
												</td>
											</tr>

											<tr class="detail-row">
												<td colspan="8">
													<div class="table-detail">
														<div class="row">
															<div class="col-xs-12 col-sm-2">
																<div class="text-center">
																	<img height="150" class="thumbnail inline no-margin-bottom" alt="Domain Owner's Avatar" src="assets/images/avatars/profile-pic.jpg">
																	<br>
																	<div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
																		<div class="inline position-relative">
																			<a class="user-title-label" href="#">
																				<i class="ace-icon fa fa-circle light-green"></i>
																				&nbsp;
																				<span class="white">Alex M. Doe</span>
																			</a>
																		</div>
																	</div>
																</div>
															</div>

															<div class="col-xs-12 col-sm-7">
																<div class="space visible-xs"></div>

																<div class="profile-user-info profile-user-info-striped">
																	<div class="profile-info-row">
																		<div class="profile-info-name"> Username </div>

																		<div class="profile-info-value">
																			<span>alexdoe</span>
																		</div>
																	</div>

																	<div class="profile-info-row">
																		<div class="profile-info-name"> Location </div>

																		<div class="profile-info-value">
																			<i class="fa fa-map-marker light-orange bigger-110"></i>
																			<span>Netherlands, Amsterdam</span>
																		</div>
																	</div>

																	<div class="profile-info-row">
																		<div class="profile-info-name"> Age </div>

																		<div class="profile-info-value">
																			<span>38</span>
																		</div>
																	</div>

																	<div class="profile-info-row">
																		<div class="profile-info-name"> Joined </div>

																		<div class="profile-info-value">
																			<span>2010/06/20</span>
																		</div>
																	</div>

																	<div class="profile-info-row">
																		<div class="profile-info-name"> Last Online </div>

																		<div class="profile-info-value">
																			<span>3 hours ago</span>
																		</div>
																	</div>

																	<div class="profile-info-row">
																		<div class="profile-info-name"> About Me </div>

																		<div class="profile-info-value">
																			<span>Bio</span>
																		</div>
																	</div>
																</div>
															</div>

															<div class="col-xs-12 col-sm-3">
																<div class="space visible-xs"></div>
																<h4 class="header blue lighter less-margin">Send a message to Alex</h4>

																<div class="space-6"></div>

																<form>
																	<fieldset>
																		<textarea class="width-100" resize="none" placeholder="Type something…"></textarea>
																	</fieldset>

																	<div class="hr hr-dotted"></div>

																	<div class="clearfix">
																		<label class="pull-left">
																			<input type="checkbox" class="ace">
																			<span class="lbl"> Email me a copy</span>
																		</label>

																		<button class="pull-right btn btn-sm btn-primary btn-white btn-round" type="button">
																			Submit
																			<i class="ace-icon fa fa-arrow-right icon-on-right bigger-110"></i>
																		</button>
																	</div>
																</form>
															</div>
														</div>
													</div>
												</td>
											</tr>

											<tr>
												<td class="center">
													<label class="pos-rel">
														<input type="checkbox" class="ace">
														<span class="lbl"></span>
													</label>
												</td>

												<td class="center">
													<div class="action-buttons">
														<a href="#" class="green bigger-140 show-details-btn" title="Show Details">
															<i class="ace-icon fa fa-angle-double-down"></i>
															<span class="sr-only">Details</span>
														</a>
													</div>
												</td>

												<td>
													<a href="#">best.com</a>
												</td>
												<td>$75</td>
												<td class="hidden-480">6,500</td>
												<td>Apr 03</td>

												<td class="hidden-480">
													<span class="label label-sm label-inverse arrowed-in">Flagged</span>
												</td>

												<td>
													<div class="hidden-sm hidden-xs btn-group">
														<button class="btn btn-xs btn-success">
															<i class="ace-icon fa fa-check bigger-120"></i>
														</button>

														<button class="btn btn-xs btn-info">
															<i class="ace-icon fa fa-pencil bigger-120"></i>
														</button>

														<button class="btn btn-xs btn-danger">
															<i class="ace-icon fa fa-trash-o bigger-120"></i>
														</button>

														<button class="btn btn-xs btn-warning">
															<i class="ace-icon fa fa-flag bigger-120"></i>
														</button>
													</div>

													<div class="hidden-md hidden-lg">
														<div class="inline pos-rel">
															<button class="btn btn-minier btn-primary dropdown-toggle" data-toggle="dropdown" data-position="auto">
																<i class="ace-icon fa fa-cog icon-only bigger-110"></i>
															</button>

															<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
																<li>
																	<a href="#" class="tooltip-info" data-rel="tooltip" title="" data-original-title="View">
																		<span class="blue">
																			<i class="ace-icon fa fa-search-plus bigger-120"></i>
																		</span>
																	</a>
																</li>

																<li>
																	<a href="#" class="tooltip-success" data-rel="tooltip" title="" data-original-title="Edit">
																		<span class="green">
																			<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																		</span>
																	</a>
																</li>

																<li>
																	<a href="#" class="tooltip-error" data-rel="tooltip" title="" data-original-title="Delete">
																		<span class="red">
																			<i class="ace-icon fa fa-trash-o bigger-120"></i>
																		</span>
																	</a>
																</li>
															</ul>
														</div>
													</div>
												</td>
											</tr>

											<tr class="detail-row">
												<td colspan="8">
													<div class="table-detail">
														<div class="row">
															<div class="col-xs-12 col-sm-2">
																<div class="text-center">
																	<img height="150" class="thumbnail inline no-margin-bottom" alt="Domain Owner's Avatar" src="assets/images/avatars/profile-pic.jpg">
																	<br>
																	<div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
																		<div class="inline position-relative">
																			<a class="user-title-label" href="#">
																				<i class="ace-icon fa fa-circle light-green"></i>
																				&nbsp;
																				<span class="white">Alex M. Doe</span>
																			</a>
																		</div>
																	</div>
																</div>
															</div>

															<div class="col-xs-12 col-sm-7">
																<div class="space visible-xs"></div>

																<div class="profile-user-info profile-user-info-striped">
																	<div class="profile-info-row">
																		<div class="profile-info-name"> Username </div>

																		<div class="profile-info-value">
																			<span>alexdoe</span>
																		</div>
																	</div>

																	<div class="profile-info-row">
																		<div class="profile-info-name"> Location </div>

																		<div class="profile-info-value">
																			<i class="fa fa-map-marker light-orange bigger-110"></i>
																			<span>Netherlands, Amsterdam</span>
																		</div>
																	</div>

																	<div class="profile-info-row">
																		<div class="profile-info-name"> Age </div>

																		<div class="profile-info-value">
																			<span>38</span>
																		</div>
																	</div>

																	<div class="profile-info-row">
																		<div class="profile-info-name"> Joined </div>

																		<div class="profile-info-value">
																			<span>2010/06/20</span>
																		</div>
																	</div>

																	<div class="profile-info-row">
																		<div class="profile-info-name"> Last Online </div>

																		<div class="profile-info-value">
																			<span>3 hours ago</span>
																		</div>
																	</div>

																	<div class="profile-info-row">
																		<div class="profile-info-name"> About Me </div>

																		<div class="profile-info-value">
																			<span>Bio</span>
																		</div>
																	</div>
																</div>
															</div>

															<div class="col-xs-12 col-sm-3">
																<div class="space visible-xs"></div>
																<h4 class="header blue lighter less-margin">Send a message to Alex</h4>

																<div class="space-6"></div>

																<form>
																	<fieldset>
																		<textarea class="width-100" resize="none" placeholder="Type something…"></textarea>
																	</fieldset>

																	<div class="hr hr-dotted"></div>

																	<div class="clearfix">
																		<label class="pull-left">
																			<input type="checkbox" class="ace">
																			<span class="lbl"> Email me a copy</span>
																		</label>

																		<button class="pull-right btn btn-sm btn-primary btn-white btn-round" type="button">
																			Submit
																			<i class="ace-icon fa fa-arrow-right icon-on-right bigger-110"></i>
																		</button>
																	</div>
																</form>
															</div>
														</div>
													</div>
												</td>
											</tr>

											<tr>
												<td class="center">
													<label class="pos-rel">
														<input type="checkbox" class="ace">
														<span class="lbl"></span>
													</label>
												</td>

												<td class="center">
													<div class="action-buttons">
														<a href="#" class="green bigger-140 show-details-btn" title="Show Details">
															<i class="ace-icon fa fa-angle-double-down"></i>
															<span class="sr-only">Details</span>
														</a>
													</div>
												</td>

												<td>
													<a href="#">pro.com</a>
												</td>
												<td>$55</td>
												<td class="hidden-480">4,250</td>
												<td>Jan 21</td>

												<td class="hidden-480">
													<span class="label label-sm label-success">Registered</span>
												</td>

												<td>
													<div class="hidden-sm hidden-xs btn-group">
														<button class="btn btn-xs btn-success">
															<i class="ace-icon fa fa-check bigger-120"></i>
														</button>

														<button class="btn btn-xs btn-info">
															<i class="ace-icon fa fa-pencil bigger-120"></i>
														</button>

														<button class="btn btn-xs btn-danger">
															<i class="ace-icon fa fa-trash-o bigger-120"></i>
														</button>

														<button class="btn btn-xs btn-warning">
															<i class="ace-icon fa fa-flag bigger-120"></i>
														</button>
													</div>

													<div class="hidden-md hidden-lg">
														<div class="inline pos-rel">
															<button class="btn btn-minier btn-primary dropdown-toggle" data-toggle="dropdown" data-position="auto">
																<i class="ace-icon fa fa-cog icon-only bigger-110"></i>
															</button>

															<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
																<li>
																	<a href="#" class="tooltip-info" data-rel="tooltip" title="" data-original-title="View">
																		<span class="blue">
																			<i class="ace-icon fa fa-search-plus bigger-120"></i>
																		</span>
																	</a>
																</li>

																<li>
																	<a href="#" class="tooltip-success" data-rel="tooltip" title="" data-original-title="Edit">
																		<span class="green">
																			<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																		</span>
																	</a>
																</li>

																<li>
																	<a href="#" class="tooltip-error" data-rel="tooltip" title="" data-original-title="Delete">
																		<span class="red">
																			<i class="ace-icon fa fa-trash-o bigger-120"></i>
																		</span>
																	</a>
																</li>
															</ul>
														</div>
													</div>
												</td>
											</tr>

											<tr class="detail-row">
												<td colspan="8">
													<div class="table-detail">
														<div class="row">
															<div class="col-xs-12 col-sm-2">
																<div class="text-center">
																	<img height="150" class="thumbnail inline no-margin-bottom" alt="Domain Owner's Avatar" src="assets/images/avatars/profile-pic.jpg">
																	<br>
																	<div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
																		<div class="inline position-relative">
																			<a class="user-title-label" href="#">
																				<i class="ace-icon fa fa-circle light-green"></i>
																				&nbsp;
																				<span class="white">Alex M. Doe</span>
																			</a>
																		</div>
																	</div>
																</div>
															</div>

															<div class="col-xs-12 col-sm-7">
																<div class="space visible-xs"></div>

																<div class="profile-user-info profile-user-info-striped">
																	<div class="profile-info-row">
																		<div class="profile-info-name"> Username </div>

																		<div class="profile-info-value">
																			<span>alexdoe</span>
																		</div>
																	</div>

																	<div class="profile-info-row">
																		<div class="profile-info-name"> Location </div>

																		<div class="profile-info-value">
																			<i class="fa fa-map-marker light-orange bigger-110"></i>
																			<span>Netherlands, Amsterdam</span>
																		</div>
																	</div>

																	<div class="profile-info-row">
																		<div class="profile-info-name"> Age </div>

																		<div class="profile-info-value">
																			<span>38</span>
																		</div>
																	</div>

																	<div class="profile-info-row">
																		<div class="profile-info-name"> Joined </div>

																		<div class="profile-info-value">
																			<span>2010/06/20</span>
																		</div>
																	</div>

																	<div class="profile-info-row">
																		<div class="profile-info-name"> Last Online </div>

																		<div class="profile-info-value">
																			<span>3 hours ago</span>
																		</div>
																	</div>

																	<div class="profile-info-row">
																		<div class="profile-info-name"> About Me </div>

																		<div class="profile-info-value">
																			<span>Bio</span>
																		</div>
																	</div>
																</div>
															</div>

															<div class="col-xs-12 col-sm-3">
																<div class="space visible-xs"></div>
																<h4 class="header blue lighter less-margin">Send a message to Alex</h4>

																<div class="space-6"></div>

																<form>
																	<fieldset>
																		<textarea class="width-100" resize="none" placeholder="Type something…"></textarea>
																	</fieldset>

																	<div class="hr hr-dotted"></div>

																	<div class="clearfix">
																		<label class="pull-left">
																			<input type="checkbox" class="ace">
																			<span class="lbl"> Email me a copy</span>
																		</label>

																		<button class="pull-right btn btn-sm btn-primary btn-white btn-round" type="button">
																			Submit
																			<i class="ace-icon fa fa-arrow-right icon-on-right bigger-110"></i>
																		</button>
																	</div>
																</form>
															</div>
														</div>
													</div>
												</td>
											</tr>
										</tbody>
									</table> --}}
                            <table id="simple-table" class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Title</th>
                                        <th width='550px'>Description</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($quotes as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->title }}</td>
                                            <td>{{ $item->description }}</td>
                                            <td>
												<form action="{{ route('quote.destroy', $item->id) }}" method="POST">

                                                <a href="{{ route('quote.show' , $item->id) }}">
                                                    <button class="tooltip-info" data-rel="tooltip" title="View">
                                                        <span class="blue">
                                                            <i class="ace-icon fa fa-search-plus bigger-120"></i>
                                                        </span>
                                                    </button>
                                                </a>
                                                <a href="{{ route('quote.edit', $item->id) }}">
                                                    <button class="tooltip-success" data-rel="tooltip" title="Edit">
                                                        <span class="green">
                                                            <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                        </span>
                                                    </button>
                                                </a>
													@method('delete')
													@csrf
													<button type="submit"
                                                        onclick="return confirm('Are You Sure To Deleted !')">
                                                        <span class="red">
                                                            <i class="fas fa-trash-alt"></i>
                                                        </span>
                                                    </button>
												</form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
                {{-- Pagination start --}}
                @if (count($quotes) > 0)
                    <span class="pull-right">
                        <ul class="pagination">
                            <li class=" @if ($quotes->appends(request()->query())->currentPage() == 1) disabled @endif">
                                <a class="" href=" {{ $quotes->appends(request()->query())->url(1) }}">←
                                    First</a>
                            </li>

                            <li class=" @if ($quotes->appends(request()->query())->currentPage() == 1) disabled @endif">
                                <a class=""
                                    href=" {{ $quotes->appends(request()->query())->previousPageUrl() }}"><i
                                        class="fa fa-angle-double-left"></i></a>
                            </li>
                            @foreach(range(1, $quotes->appends(request()->query())->lastPage()) as $i)
                            @if ($i >= $quotes->appends(request()->query())->currentPage() - 4 && $i <= $quotes->appends(request()->query())->currentPage() + 4)
                                @if ($i == $quotes->appends(request()->query())->currentPage())
                                    <li class="active"><span>{{ $i }}</span></li>
                                @else
                                    <li><a
                                            href="{{ $quotes->appends(request()->query())->url($i) }}">{{ $i }}</a>
                                    </li>
                                @endif
                            @endif
                @endforeach

                <li class=" @if ($quotes->appends(request()->query())->lastPage() == $quotes->appends(request()->query())->currentPage()) disabled @endif">
                    <a class="" href=" {{ $quotes->appends(request()->query())->nextPageUrl() }}"><i
                            class="fa fa-angle-double-right"></i></a>
                </li>
                <li class=" @if ($quotes->appends(request()->query())->lastPage() == $quotes->appends(request()->query())->currentPage()) disabled @endif">
                    <a class=""
                        href=" {{ $quotes->appends(request()->query())->url($quotes->lastPage()) }}">Last
                        →</a>
                </li>
                </ul>
                </span>
                @endif
                {{-- Pagination End --}}
            </div>
        @endsection
