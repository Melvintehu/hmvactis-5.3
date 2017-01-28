  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="/images/user_icon.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ Auth::user()->name }}</p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- search form (Optional) -->
<!--       <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form> -->
      <!-- /.search form -->



      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
        <li class="header">CRM Beheer</li>

        <!-- section  -->
        <li class="treeview">
          <a href="#"><i class="ion ion-university"></i> <span>Leden</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ URL::to("cms/members") }}"><i class="fa fa-circle-o text-orange"></i> Leden </a></li>
            <li><a href="{{ URL::to("cms/non-members") }}"><i class="fa fa-circle-o text-orange"></i> Niet-leden </a></li>
            <li><a href="{{ URL::to("cms/registrations") }}"><i class="fa fa-circle-o text-orange"></i> Aanmeldingen </a></li>

            <!-- <li style="padding-left:15px;padding-top:10px;padding-bottom:5px;"><strong><a href="#">Pagina's</a></strong></li> -->
          </ul>
        </li>
        <!-- end of section -->

        <li class="header">Website beheer</li>
        <!-- Optionally, you can add icons to the links -->
        <!-- <li><a href="#"><i class="fa fa-link"></i> <span>Another Link</span></a></li> -->


        <!-- section  -->
        <li class="treeview">
          <a href="#"><i class="fa fa-files-o"></i> <span>Pagina's</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="header text-light-blue">Pagina's</li>
            <li><a href="{{ URL::to("cms/pages") }}"><i class="fa fa-circle-o text-orange"></i> Overzicht </a></li>
            <li><a href="{{ URL::to("cms/pages/create") }}"><i class="fa fa-circle-o text-orange"></i> Toevoegen </a></li>

            <li class="header text-light-blue">Secties</li>
            <li><a href="{{ URL::to("cms/pageSections") }}"><i class="fa fa-circle-o text-orange"></i> Overzicht </a></li>
            <li><a href="{{ URL::to("cms/pageSections") }}"><i class="fa fa-circle-o text-orange"></i> Toevoegen </a></li>
          </ul>
        </li>
        <!-- end of section -->

        <!-- section  -->
        <li class="treeview">
          <a href="#"><i class="ion ion-person-stalker"></i> <span>Besturen</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="header text-light-blue">Besturen</li>
            <li><a href="{{ URL::to("cms/boards") }}"><i class="fa fa-circle-o text-orange"></i> Overzicht </a></li>
            <li><a href="{{ URL::to("cms/boards/create") }}"><i class="fa fa-circle-o text-orange"></i> Toevoegen </a></li>

            <li class="header text-light-blue">Bestuursleden</li>
            <li><a href="{{ URL::to("cms/boardMembers") }}"><i class="fa fa-circle-o text-orange"></i> Overzicht </a></li>
            <li><a href="{{ URL::to("cms/boardMembers/create") }}"><i class="fa fa-circle-o text-orange"></i> Toevoegen </a></li>
          </ul>
        </li>
        <!-- end of section -->

        <!-- section  -->
        <li class="treeview">
          <a href="#"><i class="fa fa-users"></i> <span>Commissies</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="header text-light-blue">Commissies</li>
            <li><a href="{{ URL::to("cms/committees") }}"><i class="fa fa-circle-o text-orange"></i> Overzicht </a></li>
            <li><a href="{{ URL::to("cms/committees/create") }}"><i class="fa fa-circle-o text-orange"></i> Toevoegen </a></li>

            <li class="header text-light-blue">Commissieleden</li>
            <li><a href="{{ URL::to("cms/committeeMembers") }}"><i class="fa fa-circle-o text-orange"></i> Overzicht </a></li>
            <li><a href="{{ URL::to("cms/committeeMembers/create") }}"><i class="fa fa-circle-o text-orange"></i> Toevoegen </a></li>
          </ul>
        </li>
        <!-- end of section -->

        <!-- section  -->
        <li class="treeview">
          <a href="#"><i class="ion ion-calendar"></i> <span>Activiteiten</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ URL::to("cms/events") }}"><i class="fa fa-circle-o text-orange"></i> Overzicht </a></li>
            <li><a href="{{ URL::to("cms/events/create") }}"><i class="fa fa-circle-o text-orange"></i> Toevoegen </a></li>
          </ul>
        </li>
        <!-- end of section -->


        <!-- section  -->
        <li class="treeview">
          <a href="#"><i class="ion ion-earth"></i> <span>Nieuws</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ URL::to("cms/news") }}"><i class="fa fa-circle-o text-orange"></i> Overzicht </a></li>
            <li><a href="{{ URL::to("cms/news/create") }}"><i class="fa fa-circle-o text-orange"></i> Toevoegen </a></li>
          </ul>
        </li>
        <!-- end of section -->


        <!-- section  -->
        <li class="treeview">
          <a href="#"><i class="ion ion-network"></i> <span>Partners</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="header text-light-blue">Partners</li>
            <li><a href="{{ URL::to("cms/sponsors") }}"><i class="fa fa-circle-o text-orange"></i> Overzicht </a></li>
            <li><a href="{{ URL::to("cms/sponsors/create") }}"><i class="fa fa-circle-o text-orange"></i> Toevoegen </a></li>

            <li class="header text-light-blue">Partner Kortingen</li>
            <li><a href="{{ URL::to("cms/sponsorDiscounts") }}"><i class="fa fa-circle-o text-orange" ></i> Overzicht </a></li>
            <li><a href="{{ URL::to("cms/sponsorDiscounts") }}"><i class="fa fa-circle-o text-orange"></i> Toevoegen </a></li>
          </ul>
        </li>
        <!-- end of section -->

        <!-- section  -->
        <li class="treeview">
          <a href="#"><i class="ion ion-briefcase"></i> <span>Vacatures</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ URL::to("cms/vacancies") }}"><i class="fa fa-circle-o text-orange"></i> Overzicht </a></li>
            <li><a href="{{ URL::to("cms/vacancies/create") }}"><i class="fa fa-circle-o text-orange"></i> Toevoegen </a></li>
          </ul>
        </li>
        <!-- end of section -->

      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>
