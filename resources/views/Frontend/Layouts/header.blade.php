<div class="menu-icon">
    <div id="chinh">
        <ul id="navv" style="display: flex; margin-top: 4px;">
            <h3 style="margin-top: 6px;">Game<span>Store</span></h3>
            <li><a href="{{url('/')}}">STORE</a></li>
            <li><a href="{{url('/library')}}">LIBARY</a></li>
            <li><a href="">FRIENDS</a></li>
        </ul>
        <form style="margin-top: 0px;" action="{{url('/search')}}">
            @csrf
            <div class="">

                <i class="search-icon ti-search"></i>

                <input name="title" type="search" class="search-barr" placeholder="Search any product...">

            </div>
        </form>
        <div class="user">
            <a href="{{url('user/login')}}" style="color: #fff;">
                <ul id="navv" style="display: flex; margin-top: 4px;">  
                    <!-- <i class="search-icon ti-search"></i> -->
                    <li><i class="bx bxs-user" style="font-size: 18px;">Login</i></li>
                </ul>
            </a>
            <!-- <img class="caidau-img" src="{{ asset('frontend/images/ava.png')}}" alt="">  -->

            <!-- <div class="caidau-profile"> -->
                <!-- <span>User: </span> -->
                <!-- <span> 100.000.000</span> <br>
                <span> <a href="">View Profile</a></span> -->
            <!-- </div> -->

        </div>
    </div>
</div>     
</div>
