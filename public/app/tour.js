if (window.Vue) {
    new Vue({
        el: '#tour',

        data: {
            isLoading: false,


            isImageUploading: false,

            travel:{
                name: "",
                web_url: "",
                category: "",
                description: ""
            },
            travelEdit:{
                name: "",
                web_url: "",
                category: "",
                description: ""
            },


            route: {
                createTravelGuide: "",
                updateTravelGuide: "",
                deleteTravelGuide: ""
            },

            tours: []

        },


        mounted() {
            this.route.createTravelGuide = $("#createTour").val();
            this.route.updateTravelGuide = $("#updateTour").val();
            this.route.deleteTravelGuide = $("#deleteTour").val();
            this.tours = JSON.parse($('#tours').val());


        },


        methods: {

            selectTour(index){
                this.travelEdit = Object.assign({}, this.tours[index]);
            },

            createTravelTour() {
                this.isLoading = true;
                let formData = new FormData();
                for (let key in this.travel) {
                    let value = this.travel[key]
                    formData.append(key, value);
                }
                formData.append('_token', $('input[name=_token]').val());
                axios.post(this.route.createTravelGuide, formData).then((response) => {
                    $('.bd-example-modal-lg').modal('hide');
                    this.$toastr.Add({
                        msg: response.data.message,
                        clickClose: false,
                        timeout: 2000,
                        position: "toast-top-right",
                        type: "success",
                        preventDuplicates: true,
                        progressbar: false,
                        style: { backgroundColor: "#1BBCE8" }
                    });
                    this.isLoading = false;
                    this.tours.push(Object.assign({}, response.data.travel, {}));

                }).catch((error) => {
                    this.isLoading = false
                    this.$toastr.Add({
                        msg: error.response.data.message,
                        clickClose: false,
                        timeout: 2000,
                        position: "toast-top-right",
                        type: "error",
                        preventDuplicates: true,
                        progressbar: false,
                        style: { backgroundColor: "red" }
                    });


                })

            },


            updateTravelTour() {
                this.isLoading = true;
                let formData = new FormData();
                for (let key in this.travelEdit) {
                    let value = this.travelEdit[key]
                    formData.append(key, value);
                }
                formData.append('_token', $('input[name=_token]').val());
                axios.post(this.route.updateEvent, formData).then((response) => {
                    $('#exampleModalCenter').modal('hide');
                    this.$toastr.Add({
                        msg: response.data.message,
                        clickClose: false,
                        timeout: 2000,
                        position: "toast-top-right",
                        type: "success",
                        preventDuplicates: true,
                        progressbar: false,
                        style: { backgroundColor: "#1BBCE8" }
                    });


                    this.isLoading = false;
                    let tourEdit = response.data.travel;
                    this.tours = this.tours.map((tour) =>{
                        if(tour.id === tourEdit.id){
                            tour = Object.assign({},tourEdit)
                        }
                        return tour;
                    })

                }).catch((error) => {
                    this.isLoading = false
                    this.$toastr.Add({
                        msg: error.response.data.message,
                        clickClose: false,
                        timeout: 2000,
                        position: "toast-top-right",
                        type: "error",
                        preventDuplicates: true,
                        progressbar: false,
                        style: { backgroundColor: "red" }
                    });


                })

            },


            deleteTour(index) {
                let tour = Object.assign({}, this.tours[index]);
               tour._token = $('input[name=_token]').val();

                const customAlert = swal({
                    title: 'Warning',
                    text: `This action can't be undone. Are you sure?`,
                    icon: 'warning',
                    closeOnClickOutside: false,
                    buttons: {
                        cancel: {
                            text: "cancel",
                            visible: true,
                            className: "",
                            closeModal: true,
                        },
                        confirm: {
                            text: "Confirm",
                            value: 'delete',
                            visible: true,
                            className: "btn-danger",
                        }
                    }
                });

                customAlert.then(value => {
                    if (value == 'delete') {
                        this.isLoading = true;
                        axios.delete(this.route.deleteTravelGuide, { data: tour })
                            .then(response => {
                                this.isLoading = false;
                                this.tours.splice(index, 1);
                                this.$notify({
                                    title: 'Success',
                                    message: response.data.message,
                                    type: 'success'
                                });

                            }).catch(error => {
                                if (error.response) {
                                    this.isLoading = false;
                                    this.$notify.error({
                                        title: 'Error',
                                        message: error.response.data.message
                                    });
                                } else {
                                    this.$notify.error({
                                        title: 'Error',
                                        message: 'oops! Unable to complete request.'
                                    });
                                }
                            });
                    }
                });
            },

        }
    });
}
