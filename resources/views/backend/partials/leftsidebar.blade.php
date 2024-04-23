<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('/') }}" target="_blank" class="brand-link">
        <img src="{{ asset('frontend/assets/images/logo.png') }}" class="dashsidebar" alt="AdminLTE Logo">
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-item">
                    <a href="{{ url('/home') }}" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard

                        </p>
                    </a>

                </li>


                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Page
                            <i class="fas fa-angle-right right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('category.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Category</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('subcategory.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Sub Category</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('pagesetup.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Page Setup </p>
                            </a>
                        </li>

                    </ul>
                </li>


                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p> Home Page <i class="fas fa-angle-right right"></i> </p>
                    </a>

                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a href="{{ route('themeoptions.index') }}" class="nav-link">
                                <i class="nav-icon far fa-plus-square"></i>
                                <p>
                                    ThemeOptions

                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('slider.index') }}" class="nav-link">
                                <i class="nav-icon far fa-plus-square"></i>
                                <p>
                                    Slider
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('homepage.whoweare') }}" class="nav-link">
                                <i class="nav-icon far fa-plus-square"></i>
                                <p>Who We Are</p>
                            </a>
                        </li>



                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p> About Us <i class="fas fa-angle-right right"></i> </p>
                    </a>

                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('about.profile') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Company Profile</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('team.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Meet Our Team</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('affiliation.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Affiliation</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('enlistment.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Enlistment</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('membership.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Membership</p>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-ellipsis-h"></i>
                        <p> Services <i class="fas fa-angle-right right"></i> </p>
                    </a>

                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('servicecon.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Manage Content</p>
                            </a>
                        </li>
                </li>
            </ul>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-file"></i>
                    <p> Client <i class="fas fa-angle-right right"></i> </p>
                </a>

                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('client.index') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Manage Clients</p>
                        </a>
                </ul>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-book"></i>
                    <p> Media <i class="fas fa-angle-right right"></i> </p>
                </a>

                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('newsletter.index') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Newsletter</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-copy"></i>
                            <p>
                                Blog
                                <i class="fas fa-angle-right right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('blogcat.index') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Blog Category</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{ route('blog.index') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Blog-List</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('publication.index') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Publications</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('gallery.index') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Gallery</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('event.index') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Events</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-book"></i>
                    <p> Career <i class="fas fa-angle-right right"></i> </p>
                </a>

                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('career.professional') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Professional</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('career.articleship') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Articleship</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="{{ route('regulators.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-book"></i>
                    <p>Regulators</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('contactus.index') }}" class="nav-link">
                    <i class="nav-icon far fa-envelope"></i>
                    <p>Contact Us</p>
                </a>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-book"></i>
                    <p> Application Data <i class="fas fa-angle-right right"></i> </p>
                </a>

                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('event.reg.index') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Event </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('pro.reg.index',) }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Professional </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('articleship.reg.index',) }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Articleship </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('contact.index',) }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Contact form </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('publication.reg.index',) }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Publication Download User </p>
                        </a>
                    </li>

                </ul>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-book"></i>
                    <p> Subscribers <i class="fas fa-angle-right right"></i> </p>
                </a>

                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('admin_subscribers') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>All Subscribers </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('subscriber_send_email',) }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Send Mail </p>
                        </a>
                    </li>



                </ul>
            </li>

            <li class="nav-item">
                <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="">
                    @csrf
                </form>
            </li>
            {{-- <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li> --}}
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
