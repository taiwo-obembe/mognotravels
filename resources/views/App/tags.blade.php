@extends('Layout.master');
@section('title')<title>Travels | Tags</title>@endsection

@section('content')
        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body" id="tag">
            <div class="container-fluid">
                <div class="page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="javascript:void(0)">MognoTravels</a></li>
						<li class="breadcrumb-item active"><a href="javascript:void(0)">Tag</a></li>
					</ol>

                    <header>
                        <div class="text-right">
                            <button type="button" class="btn btn-sm btn-rounded btn-primary" data-toggle="modal" data-target="#tagModal">
                                <span class="btn-icon-left text-info">
                                 <i class="fa fa-plus color-info"></i>
                            </span>Add Tag  &nbsp;&nbsp;<i class="fas fa-tags"></i></button>
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

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr v-for="(tag, index) in tags">
                                                <td v-cloak>@{{ tag.name }}</td>
                                                <td>
                                                    <div class="btn-group dropright mb-1">
                                                        <button type="button" class="btn btn-sm btn-detault dropdown-toggle" data-toggle="dropdown">
                                                            <i class="fas fa-stream"></i>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="javascript:void(0);" @click="selectTag(index)" class="btn btn-primary mb-2" data-toggle="modal" data-target="#exampleModalCenter"><small>Edit&nbsp;&nbsp;<i class="fas fa-pen-fancy"></i></small></a>
                                                            <a class="dropdown-item text-danger" href="javascript:void(0);"><small>Delete&nbsp;&nbsp;<i class="fas fa-trash"></i></small></a>
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


            <div class="modal fade" id="tagModal" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                    <div class="modal-content">
                        @csrf
                        <div class="modal-body">
                            <div class="">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Add Tag</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="basic-form">
                                            <div class="">
                                                <div class="form-group">
                                                    <h5> Name</h5>
                                                    <input type="text" v-model="tag.name" name="event" class="form-control input-rounded" placeholder="Enter tag name">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-rounded btn-secondary btn-sm light" data-dismiss="modal">Skip</button>
                            <button type="button" @click="createTourTag()" class="btn btn-rounded btn-info btn-sm">Save Changes</button>

                            <div v-if="isLoading" class="spinner-border text-success" role="status">
                                <span class="sr-only">Loading...</span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <textarea name="" id="tags" style="display:none;" cols="30" rows="10">{{ json_encode($tags) }}</textarea>
            <textarea name="" id="createTag" style="display:none;" cols="30" rows="10">{{ route('user.travels.tag.create') }}</textarea>
            <textarea name="" id="updateTag" style="display:none;" cols="30" rows="10">{{ route('user.travels.tag.update') }}</textarea>
            <textarea name="" id="deleteTag" style="display:none;" cols="30" rows="10"></textarea>
        </div>

@endsection

@section('script')
    <script src="{{ asset('app/tag.js') }}" type="text/javascript"></script>
@endsection





