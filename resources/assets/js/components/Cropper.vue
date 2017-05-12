<template>
<div>
<div  class="col-lg-4">
    <div class="row">

    <div class="col-lg-12" style="text-align:center">
        <div class="" style="display: inline-block" v-if="photo != null"  >
            <img :id="getId()"  :src="getImage()">
        </div>
    </div>
    <div class="col-lg-12 space-outside-sm" style="margin-bottom: 20px;" >
        <button class="btn btn-primary " style="display: inline-block"  @click="storePhoto">Crop Photo</button>
    </div>
    <div class="col-lg-12">
        <p>Preview: </p>
    </div>
    <div class="col-lg-12" >
        <div class="col-lg-12 thumb">
          <a class="thumbnail"   v-if="croppedImage != null">
            <img style="max-height:100%;" :src="getCroppedImage()">
          </a>
        </div>

    </div>



    </div>
</div>


</div>
</template>

<script>
    export default {
        props: {
            route: "",
            aspectheight: "",
            aspectwidth: "",
            dir: "",
            multi: "",
        },
        data() {
            return {
                image: null,
                croppedImage: null,
                cropper: null,
                photo: null,
            }
        },

        created(){
            this.photo = null;
            Event.listen('imageCropped' + this.getId(), (croppedImage) => {
                this.croppedImage = croppedImage;
            });

            Event.listen('croppingImage' + this.getId(), () => {
                this.croppedImage = null;
            });

            Event.listen('setCropper', (photo) => {

                this.photo = null;
                setTimeout(() => {
                    this.photo = photo;
                }, 200);
                setTimeout( () => {
                    this.setCropper();
                }, 300);
            });

        },

        methods: {

            getImage(){
                return '/images/'+ this.photo.type + '/' + this.photo.model_id + '/' + this.photo.filename + '?' + new Date().getTime();
            },

            getId(){
                return this.route + this.aspectwidth + this.aspectheight;
            },

            getCroppedImage(){
                return '/'+this.croppedImage + '?' + new Date().getTime();
            },

            setCropper() {
                var image = document.getElementById(this.getId());
                console.log(image);

                this.cropper = new Cropper(image, {
                    aspectRatio: (this.aspectwidth / this.aspectheight),
                });
            },

            storePhoto() {
                Event.fire('croppingImage' + this.getId());

                let containerData = this.cropper.getContainerData();
                let cropBoxData = this.cropper.getCropBoxData();

                let imageWidth = containerData.width;
                let imageHeight = containerData.height;

                let cropWidth = cropBoxData.width;
                let cropHeight = cropBoxData.height;

                let cropCoordinateLeft = cropBoxData.left;
                let cropCoordinateTop = cropBoxData.top;

                // calculate percentages
                let yPercentage  = ( Math.round( ( 100 / imageHeight ) * cropCoordinateTop ) / 100);
                let xPercentage = ( Math.round( (100 / imageWidth ) * cropCoordinateLeft ) / 100 );
                let cropHeightPercentage = Math.round( (100 / imageHeight ) * cropHeight ) / 100;
                let cropWidthPercentage = Math.round( ( 100 / imageWidth ) * cropWidth ) / 100;

                axios.get(
                    '/'+
                    this.route +
                    '?width='+ cropWidthPercentage +
                    '&height=' + cropHeightPercentage +
                    '&x=' + xPercentage +
                    '&y=' + yPercentage +
                    '&dir=' + this.aspectwidth + 'x' + this.aspectheight +
                    '&photo=' + JSON.stringify(this.photo) +
                    '&multi=' + this.multi
                , {}).then((response) => {
                    setTimeout(() => {
                        Event.fire('imageCropped' + this.getId(), response.data.croppedImage);
                    });
                });
            },

        }

    }
</script>
