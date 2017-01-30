<template>
<!-- section  -->
<div>
      <a href="#"><i class="ion ion-university"></i> <span>Leden</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <slot> </slot>
      </ul>
</div>

        <!-- end of section -->
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
