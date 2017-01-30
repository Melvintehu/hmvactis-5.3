<template>
<!-- section  -->
<li class="treeview">
    <slot> </slot>
</li>
        <!-- end of section -->
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
