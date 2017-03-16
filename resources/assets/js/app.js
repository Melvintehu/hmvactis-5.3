require('./bootstrap');
require('./admin-lte'); // pulls in the admin-lte2 admin dashboard
require('./Core/Classes'); // Pulls in some helper classes
require('owl-carousel-2/owl.carousel');

Vue.component('image-display', require('./components/ImageDisplay.vue'));
Vue.component('image-uploader', require('./components/ImageUploader.vue'));
Vue.component('cropper', require('./components/Cropper.vue'));

// image slider
Vue.component('image-slider', require('./components/image-sliders/owl-image-slider.vue'));
Vue.component('slide', require('./components/image-sliders/slide-types/basic-slide.vue'));

new Vue({
    el: '#app'
});