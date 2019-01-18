<header class="header-desktop">
<div class="section__content section__content--p30">
    <div class="container-fluid">
        <div class="header-wrap">
            <form class="form-header" action="" method="POST">
                {{-- <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports...">
                <button class="au-btn--submit" type="submit">
                    <i class="zmdi zmdi-search"></i>
                </button> --}}
            </form>
            <div class="header-button">
                
                <div class="">
                    <div class="">
                        <style type="text/css">
                            #topmenulist ul li{
                                display: inline;
                                list-style: none;
                                margin: 0px 10px;
                            }
                        </style>
                        <div class="content" id="topmenulist">
                            <ul >
                                <li>
                            <h4 class="fas fa-user" href="#">{{Auth::user()->name}}</h4>
                                    </li>
                                    <li>
                            <a class="btn btn-danger"  href="{{url('logout')}}">Logout</a>
                        </li>   
                        </div>

                            
                       
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</header>