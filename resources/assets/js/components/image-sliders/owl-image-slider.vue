<template>
    <div v-bind:style="{ height: setHeight }" class="owl-carousel no-overflow">
      <slot></slot>
    </div>
</template>

<script>

    export default {
      props: {
        setHeight: 1000,
      },
        mounted() {
          $(document).ready(function(){
            $(".owl-carousel").owlCarousel({
              loop: true,
              autoplay: true,
              items:3,
              smartSpeed:450,
              autoplaySpeed: 450,
              autoplayHoverPause: true,
              responsiveClass:true,
              nav: true,
              responsive:{
                768:{
                    items:1,
                    nav:false
                },
                992:{
                    items:3,
                    nav:false
                },
                1200:{
                    items:3,
                    nav:false,
                    loop:false
                }
              }
            });
          });


        }
    }
</script>
