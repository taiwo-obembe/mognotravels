if (window.Vue) {
    new Vue({
        el: '#tag',

        data: {
            isLoading: false,

            tag:{
                name: ""
            },

            tagEdit:{
                name: ""
            },

            route: {
                create: "",
                update: "",
                delete: ""
            },

            tags: []

        },


        mounted() {
            this.route.create = $("#createTag").val();
            this.route.update = $("#updateTag").val();
            this.route.delete = $("#deleteTag").val();
            this.tags = JSON.parse($('#tags').val());


        },


        methods: {

            selectTag(index){
                this.tagEdit = Object.assign({}, this.tags[index]);
            },

            createTourTag() {
                this.isLoading = true;
                let formData = new FormData();
                for (let key in this.tag) {
                    let value = this.tag[key]
                    formData.append(key, value);
                }
                formData.append('_token', $('input[name=_token]').val());
                axios.post(this.route.create, formData).then((response) => {
                    $('#tagModal').modal('hide');
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


            updateTag() {
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
                    this.tours = this.tours.map((event) =>{
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


            deleteTag(index) {
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
                                        message: 'Unable to complete request.'
                                    });
                                }
                            });
                    }
                });
            },

        }
    });
}
