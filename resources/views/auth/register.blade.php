@extends('layouts.suit_app')

@section('container')

{{$first_name_validations = $last_name_validations = $email_validations = $password_validations = $confirm_password_validations = ""}}

<div class="register-form-main-border">

    @if(count($errors) > 0)

    <div class="validation-msgs">
        <ul>
            @foreach($errors->all() as $error)
                <li>
                    {{ $error }}
                </li>
            @endforeach
        </ul>
    </div>

    @endif

    <h1 id="welcome-header">Welcome to join us</h1>
    <form class="register-f-border" enctype="multipart/form-data" action="/" method="post">
        @csrf
        <label class="f-element-l" id="l-first-name" for="first-name">First Name</label> 
        <div class="f-element" ><input class="f-element-e" type="text" maxlength="400" width="100px" id="first-name" name="first-name">&nbsp;<span style="color:red">*</span></div>
                
        <div id="f-for-gaping-border">
           <p> {{$first_name_validations}} </p>
        </div>
            
        <label class="f-element-l" id="l-last-name" for="last-name">Last Name</label>
        <div class="f-element" ><input class="f-element-e" type="text" maxlength="400" width="100px" id="last-name" name="last-name"/>&nbsp;<span style="color:red">*</span></div>
            
        <div id="l-for-gaping-border">
            <p> {{$last_name_validations}} </p>
        </div>  
            
        <label class="f-element-l" id="l-email" for="email">Email</label>
        <div class="f-element" ><input class="f-element-e" type="email" maxlength="400" width="100px" id="email" name="email"/>&nbsp;<span style="color:red">*</span></div>
             
        <div id="e-for-gaping-border">
            <p> {{$email_validations}} </p>
        </div>    
            
        <label class="f-element-l" id="l-password" for="password">Password</label>
        <div class="f-element" ><input class="f-element-e" type="password" maxlength="400" width="100px" id="password" name="password"/>&nbsp;<span style="color:red">*</span></div>
                
        <div id="pw-for-gaping-border">
            <p> {{$password_validations}} </p>
        </div>  
            
        <label class="f-element-l" id="l-c-password" for="c-password">Confirm password</label>
        <div class="f-element" ><input class="f-element-e" type="password" maxlength="200" width="50px" id="c-password" name="c-password"/>&nbsp;<span style="color:red">*</span></div>
            
        <div id="c-pw-for-gaping-border">
            <p> {{$confirm_password_validations}} </p>
        </div>  
            
        <div id="for-gaping-border">
            Inner
        </div>  

        <input type="submit" maxlength="100" width="100px" id="register-submitting" name="register-submitting">
        
    </form>

</div>

@endsection