@extends('customer.layout.base')
@section('content')
@section('title', 'Contact')


<!-- BEGIN: Contact Page -->
<div class="items-center justify-center flex mt-5">
    <div class="col-span-12 lg:col-span-8 2xl:col-span-9 bg-white ">
        <div class="intro-y pt-10">
            <div class="px-5">
                <div class="font-medium text-center text-2xl">Contact</div>
                <div class="text-slate-500 text-center mt-2">To start off, please enter your username, email address and password.</div>
        </div>
        
        <form action="{{Route('sendemailcontact')}}" method="POST">
            @csrf
            <div class="px-5 sm:px-20 mt-10 pt-10 border-t border-slate-200/60 dark:border-darkmode-400">
                @if(session('success'))
                    <div class="alert alert-dark show mb-2" role="alert">{{ session('success') }}</div>
                @endif
                @if ($errors->any())
                    <div class="alert alert-danger show mb-2" role="alert">
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
                <div class="grid grid-cols-12 gap-x-5">
                    <div class="col-span-12 xl:col-span-6">
                        <div>
                            <label class="form-label">First Name</label>
                            <input type="text" class="form-control" placeholder="Full Name" name="name" value="{{old('name')}}">

                        </div>
                        <div class="mt-3">
                            <label  class="form-label">Phone Number</label>
                            <input  type="text" class="form-control" placeholder="Phone Number" name="phone" value="{{old('phone')}}">
                        </div>  
                    </div>
                    <div class="col-span-12 xl:col-span-6">
                        <div class="mt-3 xl:mt-0">
                            <label  class="form-label">Email</label>
                            <input  type="email" class="form-control" placeholder="Email" name="email" value="{{old('email')}}">
                        </div>
                        <div class="mt-3">
                            <label class="form-label">Subject</label>
                            <input type="text" class="form-control" name="subject" placeholder="Subject" value="{{old('subject')}}">
                        </div>
                    </div>
                    
                    <div class="col-span-12">
                        <div class="mt-3">
                            <label for="message" class="form-label">Message</label>
                            <div class="mt-2">
                                <textarea id="editor" class="editor" name="message" >{{old('message')}}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="intro-y col-span-12 flex items-center justify-center sm:justify-end mt-5" id="contactpage">
                    <button class="btn btn-primary w-full mb-10" >Send</button>
                </div>
            </div>
        </form>
    </div>
</div>
<script src="{{asset('dist/js/ckeditor-classic.js')}}"></script>

@endsection
@push('scripts')
<script>
</script>
@endpush
