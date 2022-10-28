@extends('customer.layout.base')
@section('content')
@section('title', 'Login')

{{-- style="margin: 3%; align-items: center; justify-content: center;  display: flex" --}}
{{-- style="background-color: white; align-items: center; justify-content: center; width: 30rem" --}}

<div class="container flex flex-col lg:flex-row items-center py-5">
    <!-- Image -->
    <div class=" flex justify-center flex-1 md:mb-16 lg:mb-0 z-10">
        <img class="" src="dist/images/login.png" alt="" />
    </div>
    <!-- Content -->
    <div class="items-center justify-center flex flex-1">
        <div class="my-3 w-auto px-5" >
            <div class="p-5 border-b-2 border-slate-100 dark:border-darkmode-400 ">
                    <h2 class="intro-x text-xl font-medium  mr-auto  ">
                        Welcome to Go-Dental! Please Login
                    </h2>
            </div>
            <div id="vertical-form" class="p-5">
                <form action="{{Route('CLogin.store')}}" method="POST">
                    @csrf
                    <!-- Incorrect Password Alert -->
                    @if(session('fail'))
                        <div class="alert alert-danger show mb-2 intro-x" role="alert">{{ session('fail') }}</div>
                    @endif
                    @if(session('info'))
                        <div class="intro-x alert alert-dark show mb-2 mt-2" role="alert">{{session('info')}}</div>
                    @endif
                    <!-- Show All error -->
                    @if ($errors->any())
                    <div class="alert alert-danger show mb-2 intro-x" role="alert">
                        <div class="flex items-center">
                            <div class="font-medium text-lg">Whoops Something Went Wrong</div>
                            <div class="text-xs bg-white px-1 rounded-md text-slate-700 ml-auto">Error</div>
                        </div>
                        <div class="mt-3">
                            @foreach ($errors->all() as $error)
                                <div>{{$error}}</div>
                            @endforeach
                        </div>
                    </div>
                    @endif

                    @if(session('status'))
                        <div class="alert alert-primary show mb-2" role="alert">{{session('status')}}</div>
                    @endif

                    <div class="preview text-base font-light">
                        <div class="intro-x ">
                            <label class="form-label">Email</label>
                            <input type="text" name="email" class="form-control" placeholder="example@gmail.com">
                        </div>
                        <div class="mt-3 intro-x">
                            <label class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" placeholder="password">
                        </div>
                        <div class="intro-x flex text-slate-600 dark:text-slate-500 text-xs sm:text-sm mt-4">
                            <div class="flex items-center mr-auto">
                                <input id="remember-me" type="checkbox" class="form-check-input border mr-2" name="remember">
                                <label class="cursor-pointer select-none" for="remember-me">Remember me</label>
                            </div>
                            <a href="{{ Route('resetcustomer.index') }}">Forgot Password?</a>
                        </div>

                        <button class="intro-x btn btn-primary mt-5 w-full" >Login</button>

                        <div style="padding-top: 5%; text-align: center" class="intro-x">
                            <a class="text-primary font-normal" href="{{Route('CRegister.index')}}">New to Go Dental? Click here.</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
@push('scripts')
<script>
</script>
@endpush
