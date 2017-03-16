<template>
<div class="banner">
    <div class="padding">
        <slot name="content"  class="move"> </slot>
    </div>
    <slot class="slider-image" name="background"></slot>

</div>
</template>

<style type="text/css">
    .padding {
        padding: 0px 40px;
    }

    .banner{
        position: relative;
        overflow: hidden;
        height: 100%;
    }

    .background{
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        width: 100%;
        z-index: -10;
    }


    slide .img{
        position: absolute;
        top: 0;
        left: 0;
        z-index: -10;
    }

</style>

<script>
    export default {
        props: {
            overlay: "",
        },
        data() {
            return {

            }
        },
        mounted() {
            console.log('werkt');
        }
    }
</script>
