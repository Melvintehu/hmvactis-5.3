<template>
<div class="container">
    <div class="row">
        <slot></slot>
        <div class="col-lg-12">
            <form :action="'/' + route"
                  class="dropzone"
                  id="my-awesome-dropzone">
                  <input type="hidden" name="model_id" :value="model_id">
                  <input type="hidden" name="model_type" :value="type">
            </form>
        </div>
    </div>

</div>
</template>

<style type="text/css">
    img {
        max-width: 100%;
    }
</style>

<script>
    export default {
        props: {
            route: "",
            model_id: "",
            type: "",
        },
        data() {
            return {
                image: null,
                fileInput: null,
                image: null,
                croppedImage: null,
                cropper: null,
                displayCrop: false,
                photo: null,
            }
        },

        created() {
        },
        mounted() {

            Dropzone.options.myAwesomeDropzone = {
                paramName: "file", // The name that will be used to transfer the file
                maxFilesize: 20, // MB
                headers: { "X-CSRF-TOKEN": Laravel.csrfToken },
                accept: (file, done) => {
                    done();
                },
                success: (file, response) => {
                    this.photo = null;

                    setTimeout(() => {
                        this.croppedImage = null;
                        this.photo = {
                            id: response.id,
                            filename: response.filename,
                            type: response.type,
                            model_id: response.model_id
                        }
                        setTimeout(() => {
                            Event.fire('setCropper', this.photo);
                        }, 50);
                    }, 10)
                },
            }
        },

        methods: {

        },

    }
</script>
