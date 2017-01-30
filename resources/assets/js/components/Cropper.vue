<template>
<div>
<div  class="col-lg-10">

    <div class="col-lg-6" style="text-align:center">
        <div v-if="photo != null"  >
            <img :id="getId()"  :src="getImage()">
        </div>
    </div>

    <div class="col-lg-6" style="text-align:center">
        <div style="height:200px;width:200px;overflow:hidden;" v-if="croppedImage != null"  >
            <img style="max-height:100%;" :src="getCroppedImage()">
        </div>
    </div>

    <div class="col-lg-12" style="text-align:center;margin-bottom:20px;margin-top:20px;">
        <button class="btn btn-primary"  @click="storePhoto">Crop Photo</button>
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
                    '&photo=' + JSON.stringify(this.photo)
                , {}).then((response) => {
                    setTimeout(() => {
                        Event.fire('imageCropped' + this.getId(), response.data.croppedImage);
                    });
                });
            },

        }

    }
</script>
