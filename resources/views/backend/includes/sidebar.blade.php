<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ access()->user()->picture }}" class="img-circle" alt="User Image"/>
            </div><!--pull-left-->
            <div class="pull-left info">
                <p>{{ access()->user()->full_name }}</p>
                <!-- Status -->
                <a href="#"><i
                            class="fa fa-circle text-success"></i> {{ trans('strings.backend.general.status.online') }}
                </a>
            </div><!--pull-left-->
        </div><!--user-panel-->

        <!-- search form (Optional) -->
        {{ Form::open(['route' => 'admin.search.index', 'method' => 'get', 'class' => 'sidebar-form']) }}
        <div class="input-group">
            {{ Form::text('q', Request::get('q'), ['class' => 'form-control', 'required' => 'required', 'placeholder' => trans('strings.backend.general.search_placeholder')]) }}

            <span class="input-group-btn">
                    <button type='submit' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                  </span><!--input-group-btn-->
        </div><!--input-group-->
    {{ Form::close() }}
    <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">






   <li class="{{ active_class(Active::checkUriPattern('admin/access/*')) }} treeview">
                <a href="#">
                    <i class="fa fa-users"></i>
                    <span>{{ trans('menus.backend.access.title') }}</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>

                <ul class="treeview-menu {{ active_class(Active::checkUriPattern('admin/access/*'), 'menu-open') }}"
                    style="display: none; {{ active_class(Active::checkUriPattern('admin/access/*'), 'display: block;') }}">
                    <li class="{{ active_class(Active::checkUriPattern('admin/access/user*')) }}">
                        <a href="{{ route('admin.access.user.index') }}">
                            <i class="fa fa-circle-o"></i>
                            <span>{{ trans('labels.backend.access.users.management') }}</span>
                        </a>
                    </li>

                    <li class="{{ active_class(Active::checkUriPattern('admin/access/role*')) }}">
                        <a href="{{ route('admin.access.role.index') }}">
                            <i class="fa fa-circle-o"></i>
                            <span>{{ trans('labels.backend.access.roles.management') }}</span>
                        </a>
                    </li>
                </ul>
            </li>















<!--test-->















   <li class="{{ active_class(Active::checkUriPattern('admin/titledescription')) }} treeview sidebarcolor-blue">

                        <a href="#">
                            <i class="fa fa-header"></i>
                            <span><strong>A.</strong>&nbsp;Header</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>

                <ul class="treeview-menu {{ active_class(Active::checkUriPattern('admin/about'), 'menu-open') }}"
                    style="display: none; {{ active_class(Active::checkUriPattern('admin/about'), 'display: block;') }}">





<li class="{{ active_class(Active::checkUriPattern('admin/about')) }} treeview sidebarcolor-lightgreen">
                <a href="#">
                    <i class="fa fa-folder"></i>
                    <span><strong>2.</strong>&nbsp;About</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>

                <ul class="treeview-menu {{ active_class(Active::checkUriPattern('admin/about'), 'menu-open') }}"
                    style="display: none; {{ active_class(Active::checkUriPattern('admin/about'), 'display: block;') }}">



                    <li class="{{ active_class(Active::checkUriPattern('admin/about')) }}">

                        <a href="{{  route('admin.about') }}">
                            <i class="fa fa-folder"></i>
                          <span><strong>2.1</strong>&nbsp;Section 1</span>
                        </a>
                     </li>

                     <li class="{{ active_class(Active::checkUriPattern('admin/about1')) }}">

                        <a href="{{  route('admin.about1') }}">
                            <i class="fa fa-folder"></i>
                          <span><strong>2.2</strong>&nbsp;Section 2</span>
                        </a>
                     </li>













                </ul>
   </li>
    <li class="{{ active_class(Active::checkUriPattern('admin/team')) }}">

                        <a href="{{  route('admin.team') }}">
                            <i class="fa fa-folder"></i>
                          <span><strong>3</strong>&nbsp;Team </span>
                        </a>
                     </li>

 <li class="{{ active_class(Active::checkUriPattern('admin/ourservice')) }}">

                        <a href="{{  route('admin.ourservice') }}">
                            <i class="fa fa-folder"></i>
                          <span><strong>4</strong>&nbsp;Ourservice </span>
                        </a>
                     </li>

</ul>
</li>







 <li class="{{ active_class(Active::checkUriPattern('admin/team')) }} treeview sidebarcolor-darkblue">

                        <a href="">
                            <i class="fa fa-cubes"></i>
                             <span><strong>B.</strong>&nbsp;Footer</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>


              <ul class="treeview-menu {{ active_class(Active::checkUriPattern('admin/client'), 'menu-open') }}"
              style="display: none; {{ active_class(Active::checkUriPattern('admin/client'), 'display: block;') }}">


              <li class="{{ active_class(Active::checkUriPattern('admin/client')) }}">

                        <a href="{{  route('admin.client') }}">
                            <i class="fa fa-folder"></i>
                          <span><strong>1</strong>&nbsp;Client</span>
                        </a>
                     </li>

              <li class="{{ active_class(Active::checkUriPattern('admin/testimonial')) }}">

                        <a href="{{  route('admin.testimonial') }}">
                            <i class="fa fa-folder"></i>
                          <span><strong>1</strong>&nbsp;Testimonial</span>
                        </a>
                     </li>

</ul>
  </li>




<li class="{{ active_class(Active::checkUriPattern('admin/slider')) }} treeview sidebarcolor-lightpink">
      <a href="#">
      <i class="fa  fa-th-large"></i>
      <span><strong>C.</strong>&nbsp;Frontend</span>
      <i class="fa fa-angle-left pull-right"></i>
      </a>

              <ul class="treeview-menu {{ active_class(Active::checkUriPattern('admin/slider'), 'menu-open') }}"
              style="display: none; {{ active_class(Active::checkUriPattern('admin/slider'), 'display: block;') }}">




                     <li class="{{ active_class(Active::checkUriPattern('admin/slider')) }}">

                        <a href="{{  route('admin.slider') }}">
                            <i class="fa fa-folder"></i>
                          <span><strong>1</strong>&nbsp;Slider</span>
                        </a>
                     </li>

                     <li class="{{ active_class(Active::checkUriPattern('admin/photo')) }}">

                        <a href="{{  route('admin.photo') }}">
                            <i class="fa fa-folder"></i>
                          <span><strong>1</strong>&nbsp;Photo</span>
                        </a>
                     </li>

<li class="{{ active_class(Active::checkUriPattern('admin/blog')) }} treeview sidebarcolor-lightgreen">
                <a href="#">
                    <i class="fa fa-folder"></i>
                    <span><strong>2.</strong>&nbsp;Blog</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>

                <ul class="treeview-menu {{ active_class(Active::checkUriPattern('admin/blog'), 'menu-open') }}"
                    style="display: none; {{ active_class(Active::checkUriPattern('admin/blog'), 'display: block;') }}">



                    <li class="{{ active_class(Active::checkUriPattern('admin/category/create')) }}">

                        <a href="{{  route('admin.category.create') }}">
                            <i class="fa fa-folder"></i>
                          <span><strong>2.1</strong>&nbsp; Category</span>
                        </a>
                     </li>

                     <li class="{{ active_class(Active::checkUriPattern('admin/blog')) }}">

                        <a href="{{  route('admin.blog') }}">
                            <i class="fa fa-folder"></i>
                          <span><strong>2.2</strong>&nbsp;Blog </span>
                        </a>
                     </li>


                </ul>
            </li>


              </ul>
</li>


<li class="{{ active_class(Active::checkUriPattern('logout')) }} treeview sidebarcolor-darksilver">
        <a href="#">
        <i class="fas fa-sign-out-alt"></i>
        <span><strong>D.</strong>&nbsp;Logout</span>

        <i class="fa fa-angle-left pull-right"></i>
        </a>

          <ul class="treeview-menu {{ active_class(Active::checkUriPattern('logout'), 'menu-open') }}"
          style="display: none; {{ active_class(Active::checkUriPattern('logout'), 'display: block;') }}">

                  <li class="{{ active_class(Active::checkUriPattern('logout')) }}">
                  <a href="{{url('logout')}}">
                  <i class="fas fa-sign-out-alt"></i>
                  <span>Logout</span>
                  </a>
                  </li>
          </ul>
</li>












<!--test-->































{{--

                           <li class="">
                <a href="{{  url('setting') }}">
                    <i class="fa fa-dashboard"></i>
                    <span>Setting</span>
                </a>
            </li>
              <li class="">
                <a href="{{url('/admin/about') }}">
                    <span>About</span>
                </a>
            </li>
            <li class="">
                <a href="{{url('/admin/about1') }}">
                    <span>About1</span>
                </a>
            </li>


            <li class="">
                <a href="{{url('/admin/photo') }}">
                    <span>Photo</span>
                </a>
            </li>




            <li class="">
                <a href="{{url('/admin/blog') }}">
                    <span>Blog</span>
                </a>
            </li>


            <li class="">
                <a href="{{url('/admin/category/create') }}">
                    <span>Category</span>
                </a>
            </li>


            <li class="">
                <a href="{{url('/admin/slider') }}">
                    <span>Slider</span>
                </a>
            </li>

           <li class="">
                <a href="{{url('/admin/testimonial') }}">
                    <span>Testimonial</span>
                </a>
            </li>









           <li class="">
                <a href="{{url('/admin/team') }}">
                    <span>Team</span>
                </a>
            </li>



           <li class="">
                <a href="{{url('/admin/portfolio') }}">
                    <span>Portfolio</span>
                </a>
            </li>



           <li class="">
                <a href="{{url('/admin/ourservice') }}">
                    <span>OurService</span>
                </a>
            </li>


           <li class="">
                <a href="{{url('/admin/client') }}">
                    <span>Client</span>
                </a>
            </li>



            <li class="">
              <a href="{{url('/admin/page')}}">
                <span>Page</span>
              </a>

 --}}




            <li class="header">{{ trans('menus.backend.sidebar.system') }}</li>

            @role(1)
            <li class="{{ active_class(Active::checkUriPattern('admin/access/*')) }} treeview">
                <a href="#">
                    <i class="fa fa-users"></i>
                    <span>{{ trans('menus.backend.access.title') }}</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>

                <ul class="treeview-menu {{ active_class(Active::checkUriPattern('admin/access/*'), 'menu-open') }}"
                    style="display: none; {{ active_class(Active::checkUriPattern('admin/access/*'), 'display: block;') }}">
                    <li class="{{ active_class(Active::checkUriPattern('admin/access/user*')) }}">
                        <a href="{{ route('admin.access.user.index') }}">
                            <i class="fa fa-circle-o"></i>
                            <span>{{ trans('labels.backend.access.users.management') }}</span>
                        </a>
                    </li>

                    <li class="{{ active_class(Active::checkUriPattern('admin/access/role*')) }}">
                        <a href="{{ route('admin.access.role.index') }}">
                            <i class="fa fa-circle-o"></i>
                            <span>{{ trans('labels.backend.access.roles.management') }}</span>
                        </a>
                    </li>
                </ul>
            </li>
            @endauth

            <li class="{{ active_class(Active::checkUriPattern('admin/log-viewer*')) }} treeview">
                <a href="#">
                    <i class="fa fa-list"></i>
                    <span>{{ trans('menus.backend.log-viewer.main') }}</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu {{ active_class(Active::checkUriPattern('admin/log-viewer*'), 'menu-open') }}"
                    style="display: none; {{ active_class(Active::checkUriPattern('admin/log-viewer*'), 'display: block;') }}">
                    <li class="{{ active_class(Active::checkUriPattern('admin/log-viewer')) }}">
                        <a href="{{ route('log-viewer::dashboard') }}">
                            <i class="fa fa-circle-o"></i>
                            <span>{{ trans('menus.backend.log-viewer.dashboard') }}</span>
                        </a>
                    </li>

                    <li class="{{ active_class(Active::checkUriPattern('admin/log-viewer/logs')) }}">
                        <a href="{{ route('log-viewer::logs.list') }}">
                            <i class="fa fa-circle-o"></i>
                            <span>{{ trans('menus.backend.log-viewer.logs') }}</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul><!-- /.sidebar-menu -->
    </section><!-- /.sidebar -->
</aside>