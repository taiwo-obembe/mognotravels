@extends('Layout.master');
@section('title')<title>Travels</title>@endsection

@section('content')
        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body" id="tour">
            <div class="container-fluid">
                <div class="page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="javascript:void(0)">MognoTravels</a></li>
						<li class="breadcrumb-item active"><a href="javascript:void(0)">Tour</a></li>
					</ol>

                    <header>
                        <div class="text-right">
                            <button type="button" class="btn btn-sm btn-rounded btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">
                                <span class="btn-icon-left text-info">
                                 <i class="fa fa-plus color-info"></i>
                            </span>Create Guide</button>
                        </div>
                    </header>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Travel Guide</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover table-responsive-sm">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Category</th>
                                                <th>Web Address</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr v-for="(tour, index) in tours">
                                                <td>@{{ tour.name }}</td>
                                                <td v-cloak>
                                                    <span class="badge badge-primary light">@{{ tour.category }}</span>
                                                </td>
                                                <td v-cloak>@{{ tour.web_url }}</td>
                                                <td>
                                                    <div class="btn-group dropright mb-1">
                                                        <button type="button" class="btn btn-sm btn-detault dropdown-toggle" data-toggle="dropdown">
                                                            <i class="fas fa-stream"></i>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="javascript:void(0);" @click="selectTour(index)" class="btn btn-primary mb-2" data-toggle="modal" data-target="#exampleModalCenter"><small>Edit&nbsp;&nbsp;<i class="fas fa-pen-fancy"></i></small></a>
                                                            <a class="dropdown-item text-danger" @click="deleteTour(index)" href="javascript:void(0);"><small>Delete&nbsp;&nbsp;<i class="fas fa-trash"></i></small></a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <textarea name="" id="createTour" style="display:none" cols="30" rows="10">{{ route('user.travels.guide.create')}}</textarea>
            <textarea name="" id="updateTour" style="display:none" cols="30" rows="10">{{ route('user.travels.guide.update')}}</textarea>
            <textarea name="" id="deleteTour" style="display:none" cols="30" rows="10">{{ route('user.travels.guide.delete')}}</textarea>
            <textarea name="" id="tours" style="display:none" cols="30" rows="10">{{ json_encode($travels) }}</textarea>
            @include('Includes.tour-dialog')
        </div>

@endsection

@section('script')
        <script src="{{ asset('app/tour.js') }}" type="text/javascript"></script>
@endsection





