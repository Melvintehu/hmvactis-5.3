<!-- section  -->
<li class="treeview">
  <a href="#"><i class="{{$icon}}"></i> <span>{{$title}}</span>
    <span class="pull-right-container">
      <i class="fa fa-angle-left pull-right"></i>
    </span>
  </a>
  <ul class="treeview-menu">
    @foreach($linkGroup as $key => $links)
      @foreach($links as $link => $name)
      @if($link == 'header')
        <li class="header text-light-blue">{{ $name }}</li>
      @else
        <li><a href="{{ URL::to($link) }}"><i class="fa fa-circle-o text-orange"></i> {{ $name }}  </a></li>
      @endif
      @endforeach
    @endforeach
    <!-- <li style="padding-left:15px;padding-top:10px;padding-bottom:5px;"><strong><a href="#">Pagina's</a></strong></li> -->
  </ul>
</li>
<!-- end of section -->