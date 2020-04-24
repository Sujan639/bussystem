@extends('admin.admin_index')

@section('main-content')
<link rel="stylesheet" type="text/css" href="{{asset('extracss/panel.css')}}"/>

<div class="panel panel-primary" width="400px">
    <div class="panel-heading">you can view/edit your info here.</div>
    <div class="panel-body">
                    <form class="form-horizontal">


                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div>
                                <input id="name" type="text" class="form-control" name="name" value="{{$i->name}}" readonly>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div >
                                <input id="email" type="email" class="form-control" name="email" value="{{$i->email}}" readonly>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        

                        <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
                            <label for="gender" class="col-md-4 control-label">gender</label>

                            <div>
                                <input id="name" type="name" class="form-control" name="gender" value="{{$i->gender}}" readonly>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
                            <label for="gender" class="col-md-4 control-label">address</label>

                            <div>
                                <input id="name" type="name" class="form-control" name="addres" value="{{$i->address}}" readonly>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <!-- <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
                            <label for="gender" class="col-md-4 control-label">date of birth</label>

                            <div >
                                <input id="name" type="name" class="form-control" name="dob" required value="{{$i->dob}}" readonly>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div> -->

                         <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
                            <label for="gender" class="col-md-4 control-label">contact</label>

                            <div >
                                <input id="name" type="name" class="form-control" name="contact" required value="{{$i->contact}}" readonly>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
                            <label for="gender" class="col-md-4 control-label">profile picture</label>

                            
                                <input id="name" type="text" class="form-control" name="username" value="{{$i->u_img}}" readonly>

                                @if ($errors->has('username'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                       <!--  <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
                             <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
                            <label for="gender" class="col-md-4 control-label">Transaction Codel</label>

                            <div class="col-md-6">
                                <input id="name" type="name" class="form-control" name="tran_code" required>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div> -->
                          

                            <div >
                                <input id="name" type="hidden" class="form-control" name="type" value="custumer" required>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <a href="{{url('admin/cusmyinfo/'.Auth::user()->id.'/edit')}}">
                                <button type="button" class="btn btn-primary btn-xs" >
                                   Edit
                                </button>
                            </a>
                            </div>
                        </div>
                    </form>
                        <!--  -->
                  
                </div>
            </div>

</div>
<script type="text/javascript">
    function trancode(id,c){
         var u=document.getElementById("utrancode");
         
         // alert(c);
        var i=confirm("Do you really want to change your transaction code");
        if(i==false)
        {
            u.value=c;
             event.preventDefault();
        }
        else
        {
            var o=prompt("enter your old transaction code.");
            // alert(c);
        
        if(o!=c)
        {
            u.value=c;
            alert("enter your transaction code correctly.");
            event.preventDefault();
        }
        else if(o==null)
        {
            u.value=c;
            event.preventDefault();
        }
        else  if(o==c)

        {
            var n=prompt("enter your new transaction code.");
            if(n==null)
            {
                event.preventDefault();
            }
            else
            {u.value=n;}

            // alert(u.value);
        }
        
        }
       
    

    }
</script>
@endsection
