<nav class="navbar navbar-default bg-header">
    <div class="container w-header">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand logo" href="#"><h1>Food-Drink</h1></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <form class="navbar-form navbar-left search">
                <div class="input-group">
                    <input type="text" class="form-control input-search" placeholder="Search">
                    <div class="input-group-btn">
                        <select class="form-control input-search">
                            <option class="input-option">Category</option>
                            <option class="input-option">1</option>
                            <option class="input-option">2</option>
                            <option class="input-option">3</option>
                        </select>
                    </div>
                    <div class="input-group-btn">
                        <select class="form-control input-search">
                            <option class="input-option">SubCategory</option>
                            <option class="input-option">1</option>
                            <option class="input-option">2</option>
                            <option class="input-option">3</option>
                        </select>
                    </div>
                    <div class="input-group-btn">
                        <button class="btn btn-default input-submit" type="submit">
                            <i class="glyphicon glyphicon-search"></i>
                        </button>
                    </div>
                </div>
            </form>
            <ul class="nav navbar-nav navbar-right right-header">
                @if(Auth::guard('customers')->check())
                <li><a href="" >{{ "Welcome:" .Auth::guard('customers')->user()->name}}</a></li>
                <li><a href="{{ route('logout')}}">Logout</a></li>
                <li><a href="{{ route('cart') }}">Cart</a></li>
                @else
                <li><a href="{{ route('get_login') }}">Login</a></li>
                <li><a href="{{ route('get_register') }}">Register</a></li>
                <li><a href="{{ route('cart') }}">Cart</a></li>
                @endif
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-->
</nav>
