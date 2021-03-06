<div class="header">
    <div class="header-left">
        <div class="logo">
            <a href="{{url('/')}}">
                <h6>the</h6>
                <h1>News <span>Reporter</span></h1>
            </a>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="header-right">
        <div class="top-menu">
            <ul>        
                <li><a href="{{url('/')}}">Home</a></li> |  
                <li><a href="{{route('author.index')}}">About Us</a></li> |   
                @if (Route::has('login'))
                @auth
                <li><a href="{{ route('dashboard.index') }}" class="btn1">Dasboard</a></li>
                @else
                <li><a id="modal_trigger" href="#modal" class="btn1">Login</a>
                    <div id="modal" class="popupContainer" style="display:none;">
                        <header class="popupHeader">
                            <span class="header_title">Login</span>
                            <span class="modal_close"><i class="fa fa-times"></i></span>
                        </header>
                        <section class="popupBody">
                            <!-- Social Login -->
                            <!-- Username & Password Login form -->
                            <div class="social_login">
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <label for="email">{{ __('E-Mail Address') }}</label>
                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus />
                                    @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                    <br />

                                    <label for="password">{{ __('Password') }}</label>
                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                    @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif 
                                    <br />

                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                                        </label>
                                    </div>

                                    <div class="action_btns">
                                        <div class="one_half" style="border: green"><a href="#" class="btn back_btn"><i class="fa fa-angle-double-left"></i> Back</a></div>
                                        <div class="one_half last"><button type="submit" style="color: red" class="btn btn-success" >{{ __('Login') }}  >></button></div>
                                    </div>
                                </form>
                            </div>

                            <!-- Register Form -->
                            <div class="user_register">
                                <form>
                                    <label>Full Name</label>
                                    <input type="text" />
                                    <br />

                                    <label>Email Address</label>
                                    <input type="email" />
                                    <br />

                                    <label>Password</label>
                                    <input type="password" />
                                    <br />

                                    <div class="checkbox">
                                        <input id="send_updates" type="checkbox" />
                                        <label for="send_updates">Send me occasional email updates</label>
                                    </div>

                                    <div class="action_btns">
                                        <div class="one_half"><a href="#" class="btn back_btn"><i class="fa fa-angle-double-left"></i> Back</a></div>
                                        <div class="one_half last"><a href="#" class="btn btn_red">Register</a></div>
                                    </div>
                                </form>
                            </div>
                        </section>
                    </div>
                </li>  
                @endauth
                @endif
            </ul>
        </div>

        <div id="small-dialog1" class="mfp-hide">
            <div class="signup">
                <h3>Subscribe</h3>
                <h4>Enter Your Valid E-mail</h4>
                <input type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {
                            this.value = '';
                        }" />
                <div class="clearfix"></div>
                <input type="submit"  value="Subscribe Now"/>
            </div>
        </div>	

        <div class="search">
            <form>
                <input type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {
                            this.value = '';
                        }"/>
                <input type="submit" value="">
            </form>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="clearfix"></div>
</div>
<span class="menu"></span>
<div class="menu-strip">
    <ul>
        <li><a href="{{url('/')}}">Home</a></li>
        @foreach($nav_pages as $page)
        <li><a href="{{route("page.show",$page->slug)}}">{{$page->title}}</a></li>
        @endforeach
    </ul>
</div>