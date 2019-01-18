<aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    {{-- <img src="images/icon/logo.png" alt="Cool Admin"> --}}
                    <strong>Cv Maker</strong>
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1 ps">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="">
                            <a target="_blank" style="color: #fff;" class="btn btn-primary" href="{{route('GeneratePDF')}}">
                                <i class="fas fa-file-signature"></i>Download CV</a>
                        </li>
                        <li class="active has-sub">
                            <a class="" href="{{route('Dashboard')}}">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        
                        
                        <li class="">
                            <a class="" href="{{route('TemplateList')}}">
                                <i class="fas fa-file-signature"></i>Templates</a>
                        </li>
                        <li class=" has-sub">
                            <a class="js-arrow open" href="#">
                                <i class="fas fa-user"></i>User Details</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list" style="display: none;">
                                <li class="">
                                    <a class="" href="{{route('PersonalList')}}">
                                    <i class="fas fa-user"></i>Personal Details</a>
                                </li>
                                <li class="">
                                    <a class="" href="{{route('EducationList')}}">
                                        <i class="fas fa-university"></i>Educational Details</a>
                                </li>
                                <li class="">
                                    <a class="" href="{{route('ExperienceList')}}">
                                        <i class="fas fa-suitcase"></i>Experience Details</a>
                                </li>
                                <li class="">
                                    <a class="" href="{{route('LanguageList')}}">
                                        <i class="fas fa-language"></i>Languages Details</a>
                                </li>
                                <li class="">
                                    <a class="" href="{{route('CertificationList')}}">
                                        <i class="fas fa-certificate"></i>Certificate Details</a>
                                </li>
                                <li class="">
                                    <a class="" href="{{route('SkillList')}}">
                                        <i class="fas fa-tools"></i>Skills Details</a>
                                </li>
                                <li class="">
                                    <a class="" href="{{route('ProjectList')}}">
                                        <i class="fas fa-file"></i>Projects Details</a>
                                </li>
                                <li class="">
                                    <a class="" href="#">
                                        <i class="fas fa-calendar-week"></i>Trainings</a>
                                </li>
                            </ul>
                        </li>
                        @can('only_admin')
                        <li class="">
                            <a class="" href="{{route('UserList')}}">
                                <i class="fas fa-users"></i>User List</a>
                        </li>
                        @endcan
                    </ul>
                </nav>
            <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
        </aside>