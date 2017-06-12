@extends('layouts.app')

@section('content')
    
           <div class="row1">
<img src="{{ URL::asset("image/wekezakilimo(2).jpg") }}" class="banner img-responsive">
        </div>
        <div class="row">
       <div class="col-md-2">
    <div class="list-group">
         
  <a href="{{ url('/agriculturalInputs/pembejeo') }}" class="list-group-item active"> Pembejeo </a>
  <a href="{{ url('/agriculturalInputs/mazao') }}" class="list-group-item">Mazao</a>
  <a href="{{ url('/agriculturalRetailer/Mada') }}" class="list-group-item">Mada</a>
     <!-- Right Side Of Navbar -->
                    <ul class="nav nav-pills">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->first_name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>   
</div>

</div>
<div class="col-md-8">
 <h3>Muuza Pembejeo</h3>
<hr> 
  <div class="panel-heading"><strong>Muuza pembejeo</strong></div>
                      <div class="panel-body">
                             <p>Mfumo unamsaidia mkulima kujitangaza na kufanya biashara bila kulanguliwa,
                              pia unampa nafasi ya kujifunza kuhusu mazao mbali mbali na pia kununua pembeleo za kilimo
                              kwa bei rahisi na kwa urahisi pia</p>
                            <p><a href="#" class="btn btn-info">Endelea >></a></p>
                            </div>
</div>
</div>

       </div>


        </div>
        <div class="flex-center position-ref full-height">
            

            <div class="content">
               
            </div>
        </div>
    
</html>

        </div>
    </div>
@endsection