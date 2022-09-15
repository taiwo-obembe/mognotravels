<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            @csrf
            <div class="modal-body">
                <div class="">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Tour Details</h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                <div class="">
                                    <div class="form-group">
                                        <h5> Name</h5>
                                        <input type="text" v-model="travel.name" name="event" class="form-control input-rounded" placeholder="Enter event name">
                                    </div>

                                    <div class="form-group">
                                        <h5> Web Address</h5>
                                        <input type="text" v-model="travel.web_url" name="event" class="form-control input-rounded" placeholder="Enter web Address">
                                    </div>

                                    <div class="form-group">
                                        <h5>Tour Description</h5>
                                        <textarea class="form-control" rows="4" id="comment" v-model="travel.description" placeholder="Enter Your tour Description"></textarea>
                                    </div>

                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                          <label class="input-group-text" for="inputGroupSelect01">Category</label>
                                        </div>
                                        <select class="custom-select" id="inputGroupSelect01" v-model="travel.category">
                                          <option selected>Choose...</option>
                                          <option value="engineering">Engineering</option>
                                          <option value="medical">Medical</option>
                                        </select>
                                      </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-rounded btn-secondary btn-sm light" data-dismiss="modal">Skip</button>
                <button type="button"  @click="createTravelTour()" class="btn btn-rounded btn-info btn-sm">Proceed</button>

                <div v-if="isLoading" class="spinner-border text-success" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
            </div>

        </div>
    </div>
</div>



{{-- Edit --}}


<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            @csrf
            <div class="modal-body">
                <div class="">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Event</h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                <div class="">
                                    <div class="form-group">
                                        <h5> Name</h5>
                                        <input type="text" v-model="travelEdit.name" name="event" class="form-control input-rounded" placeholder="Enter event name">
                                    </div>

                                    <div class="form-group">
                                        <h5> Web Address</h5>
                                        <input type="text" v-model="travelEdit.web_url" name="event" class="form-control input-rounded" placeholder="Enter web Address">
                                    </div>

                                    <div class="form-group">
                                        <h5>Tour Description</h5>
                                        <textarea class="form-control" rows="4" id="comment" v-model="travelEdit.description" placeholder="Enter Your tour Description"></textarea>
                                    </div>

                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                          <label class="input-group-text" for="inputGroupSelect01">Category</label>
                                        </div>
                                        <select class="custom-select" id="inputGroupSelect01" v-model="travelEdit.category">
                                          <option selected>Choose...</option>
                                          <option value="engineering">Engineering</option>
                                          <option value="medical">Medical</option>
                                        </select>
                                      </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-rounded btn-secondary btn-sm light" data-dismiss="modal">Skip</button>
                <button type="button" @click="updateTravelTour()" class="btn btn-rounded btn-info btn-sm">Save Changes</button>

                <div v-if="isLoading" class="spinner-border text-success" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
            </div>

        </div>
    </div>
</div>


{{-- End Edit --}}
