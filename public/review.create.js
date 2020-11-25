var app = new Vue({
    el:"#reviewCreateApp",
    data: {
        name: "Test",
        phone: "89999999999",
        text: "Typical review",
        form: $("#reviewCreateForm"),
        errors: [],
        status: false,
    },
    methods: {
        save(e){
            e.preventDefault()

            self = this
            $.ajax({
                url: this.form.attr("action"),
                method: this.form.attr("method"),
                data: {
                    name: this.name,
                    phone: this.phone,
                    text: this.text,
                    _token: this.form.find("input[name='token']").attr('value')
                },
                beforeSend(){
                    self.errors = []
                    self.status = false
                },
                error(response) {
                    self.status = "Something went wrong"
                    if (response.responseJSON.errors) {
                        self.errors = []
                        $.each(response.responseJSON.errors, function(key, errors){
                            $.each(errors, function(index, text){
                                self.errors.push(text)
                            })
                        })
                    }
                },
                success(response) {
                    self.status = "Success!"
                }
            })
        }
    }
})
