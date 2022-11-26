<div class="page-wrap">
    <div class="app-sidebar colored">
        <div class="sidebar-header">
            <a class="header-brand" href="{{ url('/dashboard') }}">
                <div class="logo-img">

                </div>
                <span class="text">Call Labs</span>
            </a>

        </div>

        <div class="sidebar-content">
            <div class="nav-container">
                <nav id="main-menu-navigation" class="navigation-main">

                    <div class="nav-item active">
                        <a href="{{ url('dashboard') }}"><i class="ik ik-bar-chart-2"></i><span>Dashboard</span></a>
                    </div>


                    <!-- <div class="nav-item has-sub">
                        <a href="javascript:void(0)"><i class="ik ik-list"></i><span>Appointment Time</span> <span
                                class="badge badge-danger"></span></a>
                        <div class="submenu-content">
                            <a href="{{ route('appointment.create') }}" class="menu-item">Create</a>
                            <a href="{{ route('appointment.index') }}" class="menu-item">Check</a>

                        </div>
                    </div> -->

                    <div class="nav-item has-sub">
                        <a href="javascript:void(0)"><i class="ik ik-list"></i><span>Category</span> <span class="badge badge-danger"></span></a>
                        <div class="submenu-content">
                            <a href="{{ route('category.create') }}" class="menu-item">Create</a>
                            <a href="{{ route('category.show') }}" class="menu-item">All Category</a>

                        </div>
                    </div>


                    <div class="nav-item has-sub">
                        <a href="javascript:void(0)"><i class="ik ik-list"></i><span> Test</span> <span class="badge badge-danger"></span></a>
                        <div class="submenu-content">
                            <a href="{{ route('subtest.create') }}" class="menu-item">Create</a>
                            <a href="{{ route('subtest.show') }}" class="menu-item">All Test</a>

                        </div>
                    </div>

                    <div class="nav-item has-sub">
                        <a href="javascript:void(0)">
                            <i class="ik ik-list"></i><span>Organ</span> <span class="badge badge-danger"></span></a>
                        <div class="submenu-content">
                            <a href="{{ route('organ.create') }}" class="menu-item">Create</a>
                            <a href="{{ route('organ.index') }}" class="menu-item">All Organ</a>

                        </div>
                    </div>


                    <div class="nav-item has-sub">
                        <a href="javascript:void(0)"><i class="ik ik-list"></i><span>Lab</span> <span class="badge badge-danger"></span></a>
                        <div class="submenu-content">
                            <a href="{{ route('lab.create') }}" class="menu-item">Create</a>
                            <a href="{{ route('lab.show') }}" class="menu-item">All Labs</a>

                        </div>
                    </div>

                    <div class="nav-item has-sub">
                        <a href="javascript:void(0)"><i class="ik ik-list"></i><span>Package</span> <span class="badge badge-danger"></span></a>
                        <div class="submenu-content">
                            <a href="{{ route('test.create') }}" class="menu-item">Create</a>
                            <a href="{{ route('package.show') }}" class="menu-item">All</a>

                        </div>
                    </div>


                    <div class="nav-item has-sub">
                        <a href="javascript:void(0)"><i class="ik ik-list"></i><span>Lab Package</span> <span class="badge badge-danger"></span></a>
                        <div class="submenu-content">
                            <a href="{{ route('lab.package') }}" class="menu-item">Create</a>
                            <a href="{{ route('labpackage.show') }}" class="menu-item">All Labs</a>

                        </div>
                    </div>


                    <div class="nav-item has-sub">
                        <a href="javascript:void(0)"><i class="ik ik-list"></i><span>Find Test Organ</span> <span class="badge badge-danger"></span></a>
                        <div class="submenu-content">
                            <a href="{{ route('testbyorgan.create') }}" class="menu-item">Create</a>
                            <a href="{{ route('testbyorgan.index') }}" class="menu-item">All</a>

                        </div>
                    </div>


                    <div class="nav-item has-sub">
                        <a href="javascript:void(0)"><i class="ik ik-list"></i><span>Parent Test</span> <span class="badge badge-danger"></span></a>
                        <div class="submenu-content">
                            <a href="{{ route('parenttest.create') }}" class="menu-item">Create</a>
                            <a href="{{ route('parenttest.show') }}" class="menu-item">All Parent Test</a>

                        </div>
                    </div>


                    <div class="nav-item has-sub">
                        <a href="javascript:void(0)"><i class="ik ik-list"></i><span>Users</span> <span class="badge badge-danger"></span></a>
                        <div class="submenu-content">
                             <a href="{{ route('users') }}" class="menu-item">All Users</a>

                        </div>

                    </div>

                    <div class="nav-item has-sub">
                        <a href="javascript:void(0)"><i class="ik ik-list"></i><span>Orders</span> <span class="badge badge-danger"></span></a>
                        <div class="submenu-content">
                             <a href="{{ route('order') }}" class="menu-item">All Orders</a>

                        </div>
                    </div>











                    <!-- <div class="nav-item has-sub">
                        <a href="javascript:void(0)"><i class="ik ik-heart"></i><span>Prescription</span> <span
                                class="badge badge-danger"></span></a>
                        <div class="submenu-content">
                            <a href="{{ route('patient.today') }}" class="menu-item">Today</a>
                            <a href="{{ route('all.prescriptions') }}" class="menu-item">All
                                Prescribed Patients</a>
                        </div>
                    </div> -->

                    <!-- @if (auth()->user()->role_id == 2)
                        <div class="nav-item has-sub">
                            <a href="javascript:void(0)"><i class="ik ik-layers"></i><span>Department</span> <span
                                    class="badge badge-danger"></span></a>
                            <div class="submenu-content">
                                <a href="{{ route('department.create') }}" class="menu-item">Create</a>
                                <a href="{{ route('department.index') }}" class="menu-item">View</a>

                            </div>
                        </div>

                        <div class="nav-item has-sub">
                            <a href="javascript:void(0)"><i class="ik ik-file-text"></i><span>Doctor</span> <span
                                    class="badge badge-danger"></span></a>
                            <div class="submenu-content">
                                <a href="{{ route('doctor.create') }}" class="menu-item">Create</a>
                                <a href="{{ route('doctor.index') }}" class="menu-item">View</a>

                            </div>
                        </div>


                        <div class="nav-item has-sub">
                            <a href="javascript:void(0)"><i class="ik ik-monitor"></i><span>Patient Appointment</span>
                                <span class="badge badge-danger"></span></a>
                            <div class="submenu-content">
                                <a href="{{ route('patients') }}" class="menu-item">Today Appointment</a>
                                <a href="{{ route('all.appointments') }}" class="menu-item">All Time Appointment</a>

                            </div>
                        </div>

                    @endif -->

                    <div class="nav-item active">
                        <a onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();" href="{{ route('logout') }}"><i class="ik ik-power dropdown-icon"></i><span>Logout</span></a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </nav>
            </div>
        </div>
    </div>