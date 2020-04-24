@extends('admin.admin_index');
@section('main-content')
<script src="{{asset('extrajs/seatjs.js')}}"></script>
<div class="main-content">
  <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Seat Reservation Form</h6>
            </div>
            <div class="card-body">
              <!-- <link rel="stylesheet" type="text/css" href="{{asset('extracss/panel.css')}}"/>

<div class="panel panel-primary" width="400px">
    <div class="panel-heading">you can view/edit your info here.</div>
    <div class="panel-body"> -->
              <div class="table-responsive">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-9"> 
                                @foreach($a as $b)
                            	<form method="post" action="{{url('admin/cusavailable/'.$b->id)}}" class="form-horizontal" onsubmit="alertm();">
                                    <input type="hidden" name="_method" value="put">
                            		{{csrf_field()}}

                            		<div class="form-group">
                                  <input type="hidden" name="bus_id" value="{{$r->bus_id}}">
                                  <input type="hidden" name="cus_id" value="{{Auth::user()->id}}">
                                  <input type="hidden" name="route_id" value="{{$r->route_id}}">
                            		<label for="fname">Bus NO.</label>
    
    <input type="text" id="fname" name="bus_no" placeholder="Your bus no." value="{{$r->bus_no}}" class="form-control" readonly>
</div>
<div class="form-group">
    <label for="lname" class="control-label">Trip Date</label>
    <input type="text" id="lname" name="dat_e" placeholder="Your last name.." class="form-control" value="{{$r->date}}" readonly>
</div>
<div class="form-group">
    <label for="lname" class="control-label">From</label>
    <input type="text" id="lname" name="fro_m" placeholder="Your last name.." class="form-control" value="{{$r->fro_m}}" readonly>
</div>
<div class="form-group">
    <label for="lname" class="control-label">To</label>
    <input type="text" id="lname" name="destination" placeholder="Your last name.." class="form-control" value="{{$r->destination}}" readonly>
</div>
<div class="form-group">
    <label for="lname" class="control-label">price</label>
    <input type="text" id="lname" name="price" placeholder="Your last name.." class="form-control" value="{{$r->cost}}" readonly>
</div>
<!-- <div class="form-group">
        <label class="control_label"> mode of reservation</label> -->
        <!-- <select class="form-control" name="mode_of_reserve" id="md">
        <option value="B">Book</option>
        <option value="R">Reserve</option>
        </select>
    </div> -->

<input type="hidden" name="mode_of_reserve" id="md" value="R">
<div class="form-group">
    <label>seats</label><br>
    <input type="button" class="Available" name="" value="Available">
    <input type="button" class="pressed" name="" value="Selected">
    <input type="button" class="booked" name="" value="Booked">
    <input type="button" class="reserved" name="" value="Reserve">
    
    <table  width="1000px" height="400px" style="margin-top: 10px;" >
        

        <tr >
            <td  rowspan="2" align="center"><img src="{{asset('assets/img/seat.png')}}" height="50px" width="50px">driver</td>

            <td align="center">
                <?php
                if(($b->seat1)=="A"){
                ?>
                <span >
                  <input type="hidden" name="seat1" id="<?php echo $id1='s1'; ?>" value="A">
                  <input type="button" value="1" id="b1"  class="button" onclick="selectseat(id);
                  opperationtoogle('<?php echo $id1; ?>','<?php echo $r->cost; ?>');
                  seatname(id,'<?php echo $id1; ?>');">
                  
                </span>
                <?php
            }
                elseif (($b->seat1)=="R") {
                     
                 ?>
                 <input type="button" value="1" class="reserved" id="b1">
                 <input type="hidden" name="seat1" id="s1" value="R">
                 <?php    
                }
                else{
                    ?>
                    <input type="button" value="1" class="booked" id="b1">
                    <input type="hidden" name="seat1" id="s1" value="B">
                    <?php
                }
                ?>
               </td> 
            
            <td align="center">
                <?php
                if(($b->seat2)=="A"){
                ?>
                <span >
                  <input type="hidden" name="seat2" id="<?php echo $id2='s2'; ?>" value="A">
                  <input type="button" value="2" id="b2"  class="button" onclick="selectseat(id);
                   opperationtoogle('<?php echo $id2; ?>','<?php echo $r->cost; ?>');seatname(id,'<?php echo $id2; ?>');">
                  
                </span>
                <?php
            }
                elseif (($b->seat2)=="R") {
                     
                 ?>
                 <input type="button" value="2" class="reserved" id="b2">
                 <input type="hidden" name="seat2" id="s2" value="R">
                 <?php    
                }
                else{
                    ?>
                    <input type="button" value="2" class="booked" id="b2">
                    <input type="hidden" name="seat2" id="s2" value="B">
                    <?php
                }
                ?>
               </td> 
            <td align="center">
                <?php
                if(($b->seat3)=="A"){
                ?>
                <span >
                  <input type="hidden" name="seat3" id="<?php echo $id3='s3'; ?>" value="A">
                  <input type="button" value="3" id="b3"  class="button" onclick="selectseat(id);
                   opperationtoogle('<?php echo $id3; ?>','<?php echo $r->cost; ?>');seatname(id,'<?php echo $id3; ?>');">
                  
                </span>
                
                <?php
            }
                elseif (($b->seat3)=="R") {
                     
                 ?>
                 <input type="button" value="3" class="reserved" id="b3">
                 <input type="hidden" name="seat3" id="s3" value="R">
                 <?php    
                }
                else{
                    ?>
                    <input type="button" value="3" class="booked" id="b3">
                    <input type="hidden" name="seat3" id="s3" value="B">
                    <?php
                }
                ?>
               </td>
            <td align="center">
                <?php
                if(($b->seat4)=="A"){
                ?>
                <span >
                  <input type="hidden" name="seat4" id="<?php echo $id4='s4'; ?>"  value="A">
                  


                  <input type="button" value="4" id="b4"  class="button" onclick="selectseat(id);
                  opperationtoogle('<?php echo $id4; ?>','<?php echo $r->cost; ?>'); seatname(id,'<?php echo $id4; ?>');">
                  
                </span>
                <?php
            }
                elseif (($b->seat4)=="R") {
                     
                 ?>
                 <input type="button" value="4" class="reserved" id="b4">
                 <input type="hidden" name="seat4" id="s4" value="R">
                 <?php    
                }
                else{
                    ?>
                    <input type="button" value="4" class="booked" id="b4" name="seat4" value="B">
                    <input type="hidden" name="seat4" id="s4" value="B">
                    <?php
                }
                ?>
               </td>
            
            <td align="center">
                <?php
                if(($b->seat5)=="A"){
                ?>
                <span >
                  <input type="hidden" name="seat5" id="<?php echo $id5='s5'; ?>" value="A">
                  <input type="button" value="5" id="b5"  class="button" onclick="selectseat(id);
                  opperationtoogle('<?php echo $id5; ?>','<?php echo $r->cost; ?>');seatname(id,'<?php echo $id5; ?>');">
                  
                </span>
                <?php
            }
                elseif (($b->seat5)=="R") {
                     
                 ?>
                 <input type="button" value="5" class="reserved" id="b5">
                 <input type="hidden" name="seat5" id="s5" value="R">
                 <?php    
                }
                else{
                    ?>
                    <input type="button" value="5" class="booked" id="b5">
                    <input type="hidden" name="seat5" id="s5" value="B">
                    <?php
                }
                ?>
               </td>
</tr>
<tr>
    <td align="center">
                <?php
                if(($b->seat6)=="A"){
                ?>
               <span >
                <input type="hidden" name="seat6" id="<?php echo $id6='s6'; ?>" value="A">
                  <input type="button" value="6" id="b6"  class="button" onclick="selectseat(id);
                  opperationtoogle('<?php echo $id6; ?>','<?php echo $r->cost; ?>');seatname(id,'<?php echo $id6; ?>');">
                  
                </span>
                <?php
            }
                elseif (($b->seat6)=="R") {
                     
                 ?>
                 <input type="button" value="6" class="reserved" id="b6">
                 <input type="hidden" name="seat6" id="s6" value="R">
                 <?php    
                }
                else{
                    ?>
                    <input type="button" value="6" class="booked" id="b6">
                    <input type="hidden" name="seat6" id="s6" value="B">
                    <?php
                }
                ?>
               </td>
            <td align="center">
                <?php
                if(($b->seat7)=="A"){
                ?>
                <span >
                  <input type="hidden" name="seat7" id="<?php echo $id7='s7'; ?>" value="A">
                  <input type="button" value="7" id="b7"  class="button" onclick="selectseat(id);
                  ;opperationtoogle('<?php echo $id7; ?>','<?php echo $r->cost; ?>');seatname(id,'<?php echo $id7; ?>');">
                  
                </span>
                <?php
            }
                elseif (($b->seat7)=="R") {
                     
                 ?>
                 <input type="button" value="7" class="reserved" id="b7">
                 <input type="hidden" name="seat7" id="s7" value="R">
                 <?php    
                }
                else{
                    ?>
                    <input type="button" value="7" class="booked" id="b7">
                    <input type="hidden" name="seat7" id="s7" value="B">
                    <?php
                }
                ?>
               </td>
            <td align="center">
                <?php
                if(($b->seat8)=="A"){
                ?>
                <span >
                  <input type="hidden" name="seat8" id="<?php echo $id8='s8'; ?>" value="A">
                  <input type="button" value="8" id="b8"  class="button" onclick="selectseat(id);
                  opperationtoogle('<?php echo $id8; ?>','<?php echo $r->cost; ?>');seatname(id,'<?php echo $id8; ?>');">
                  
                </span>
                <?php
            }
                elseif (($b->seat8)=="R") {
                     
                 ?>
                 <input type="button" value="8" class="reserved" id="b8">
                 <input type="hidden" name="seat8" id="s8" value="R">
                 <?php    
                }
                else{
                    ?>
                    <input type="button" value="8" class="booked" id="b8">
                    <input type="hidden" name="seat8" id="s8" value="B">
                    <?php
                }
                ?>
               </td>
            <td align="center">
                <?php
                if(($b->seat9)=="A"){
                ?>
                <span >
                  <input type="hidden" name="seat9" id="<?php echo $id9='s9'; ?>" value="A">
                  <input type="button" value="9" id="b9"  class="button" onclick="selectseat(id);
                  opperationtoogle('<?php echo $id9; ?>','<?php echo $r->cost; ?>');seatname(id,'<?php echo $id9; ?>');">
                  
                </span>
                <?php
            }
                elseif (($b->seat9)=="R") {
                     
                 ?>
                 <input type="button" value="9" class="reserved" id="b9">
                 <input type="hidden" name="seat9" id="s9" value="R">
                 <?php    
                }
                else{
                    ?>
                    <input type="button" value="9" class="booked" id="b9">
                    <input type="hidden" name="seat9" id="s9" value="B">
                    <?php
                }
                ?>
               </td>
            <td align="center">
                <?php
                if(($b->seat10)=="A"){
                ?>
                <span >
                  <input type="hidden" name="seat10" id="<?php echo $id10='s10'; ?>" value="A">
                  <input type="button" value="10" id="b10"  class="button" onclick="selectseat(id);
                  opperationtoogle('<?php echo $id10; ?>','<?php echo $r->cost; ?>');seatname(id,'<?php echo $id10; ?>');">
                  
                </span>
                <?php
            }
                elseif (($b->seat10)=="R") {
                     
                 ?>
                 <input type="button" value="10" class="reserved" id="b10">
                 <input type="hidden" name="seat10" id="s10" value="R">
                 <?php    
                }
                else{
                    ?>
                    <input type="button" value="10" class="booked" id="b10">
                    <input type="hidden" name="seat10" id="s10" value="B">
                    <?php
                }
                ?>
               </td>
</tr>
<tr>
   <td align="center">
                <?php
                if(($b->seat11)=="A"){
                ?>
                <span >
                  <input type="hidden" name="seat11" id="<?php echo $id11='s11'; ?>" value="A">
                  <input type="button" value="11" id="b11"  class="button" onclick="selectseat(id);
                  opperationtoogle('<?php echo $id11; ?>','<?php echo $r->cost; ?>');seatname(id,'<?php echo $id11; ?>');">
                  
                </span>
                <?php
            }
                elseif (($b->seat11)=="R") {
                     
                 ?>
                 <input type="button" value="11" class="reserved" id="b11">
                 <input type="hidden" name="seat11" id="s11" value="R">
                 <?php    
                }
                else{
                    ?>
                    <input type="button" value="11" class="booked" id="b11">
                    <input type="hidden" name="seat11" id="s11" value="B">
                    <?php
                }
                ?>
               </td>
            <td align="center">
                <?php
                if(($b->seat12)=="A"){
                ?>
                <span >
                  <input type="hidden" name="seat12" id="<?php echo $id12='s12'; ?>" value="A">
                  <input type="button" value="12" id="b12"  class="button" onclick="selectseat(id);
                  opperationtoogle('<?php echo $id12; ?>','<?php echo $r->cost; ?>');seatname(id,'<?php echo $id12; ?>');">
                  
                </span>
                <?php
            }
                elseif (($b->seat12)=="R") {
                     
                 ?>
                 <input type="button" value="12" class="reserved" id="b12">
                 <input type="hidden" name="seat12" id="s12" value="R">
                 <?php    
                }
                else{
                    ?>
                    <input type="button" value="12" class="booked" id="b12">
                    <input type="hidden" name="seat12" id="s12" value="B">
                    <?php
                }
                ?>
               </td>
            <td align="center">
                <?php
                if(($b->seat13)=="A"){
                ?>
                <span >
                  <input type="hidden" name="seat13" id="<?php echo $id13='s13'; ?>" value="A">
                  <input type="button" value="13" id="b13"  class="button" onclick="selectseat(id);
                  opperationtoogle('<?php echo $id13; ?>','<?php echo $r->cost; ?>');seatname(id,'<?php echo $id13; ?>');">
                  
                </span>
                <?php
            }
                elseif (($b->seat13)=="R") {
                     
                 ?>
                 <input type="button" value="13" class="reserved" id="b13">
                 <input type="hidden" name="seat13" id="s13" value="R">
                 <?php    
                }
                else{
                    ?>
                    <input type="button" value="13" class="booked" id="b13">
                    <input type="hidden" name="seat13" id="s13" value="B">
                    <?php
                }
                ?>
               </td>
            <td align="center">
                <?php
                if(($b->seat14)=="A"){
                ?>
                <span >
                  <input type="hidden" name="seat14" id="<?php echo $id14='s14'; ?>" value="A">
                  <input type="button" value="14" id="b14"  class="button" onclick="selectseat(id);
                   opperationtoogle('<?php echo $id14; ?>','<?php echo $r->cost; ?>');seatname(id,'<?php echo $id14; ?>');">
                  
                </span>
                <?php
            }
                elseif (($b->seat14)=="R") {
                     
                 ?>
                 <input type="button" value="14" class="reserved" id="b14">
                 <input type="hidden" name="seat14" id="s14" value="R">
                 <?php    
                }
                else{
                    ?>
                    <input type="button" value="14" class="booked" id="b14">
                    <input type="hidden" name="seat14" id="s14" value="B">
                    <?php
                }
                ?>
               </td>
            <td align="center">
                <?php
                if(($b->seat15)=="A"){
                ?>
                <span >
                  <input type="hidden" name="seat15" id="<?php echo $id15='s15'; ?>" value="A">
                  <input type="button" value="15" id="b15"  class="button" onclick="selectseat(id);
                  opperationtoogle('<?php echo $id15; ?>','<?php echo $r->cost; ?>');seatname(id,'<?php echo $id15; ?>');">
                  
                </span>
                <?php
            }
                elseif (($b->seat15)=="R") {
                     
                 ?>
                 <input type="button" value="15" class="reserved" id="b15">
                 <input type="hidden" name="seat15" id="s15" value="R">
                 <?php    
                }
                else{
                    ?>
                    <input type="button" value="15" class="booked" id="b15">
                    <input type="hidden" name="seat15" id="s15" value="B">
                    <?php
                }
                ?>
               </td>
            <td align="center">
                <?php
                if(($b->seat16)=="A"){
                ?>
                <span >
                  <input type="hidden" name="seat16" id="<?php echo $id16='s16'; ?>" value="A">
                  <input type="button" value="16" id="b16"  class="button" onclick="selectseat(id);
                  opperationtoogle('<?php echo $id16; ?>','<?php echo $r->cost; ?>');seatname(id,'<?php echo $id16; ?>');">
                  
                </span>
                <?php
            }
                elseif (($b->seat16)=="R") {
                     
                 ?>
                 <input type="button" value="16" class="reserved" id="b16">
                 <input type="hidden" name="seat16" id="s16" value="R">
                 <?php    
                }
                else{
                    ?>
                    <input type="button" value="16" class="booked" id="b16">
                    <input type="hidden" name="seat16" id="s16" value="B">
                    <?php
                }
                ?>
               </td>
</tr>


    </table>
    @endforeach
</div>
<div class="form-group{{ $errors->has('seatindex') ? ' has-error' : '' }}">
      <input type="hidden" name="seatindex" id="seatindex" value="">
      @if ($errors->has('seatindex'))
                                    <span class="help-block" style="color: red;">
                                        <strong>{{ $errors->first('seatindex') }}</strong>
                                    </span>
                                @endif
    </div>
<div class="form-group">
        <label class="control_label">cost</label>
        <input type="text" name="cost" id="ct" value="0" class="form-control" readonly>
        
    </div>
    
    
  
    <button class="btn btn-primary btn-xs" type="submit" value="submit">Submit</button>
    
                            	</form>

                            	</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

                        </div>
                    </div>
                </div>
              </div>
            </div>
          </div>

                <script src="{{asset('extrajs/seatjs.js')}}">
                  
                </script>

                
                <style type="text/css">
                    .button {
  display: inline-block;
  padding: 15px 25px;
  font-size: 24px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #4CAF50;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}
.pressed {
  display: inline-block;
  padding: 15px 25px;
  font-size: 24px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: blue;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}
.booked {
  display: inline-block;
  padding: 15px 25px;
  font-size: 24px;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: red;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;

}
.reserved {
  display: inline-block;
  padding: 15px 25px;
  font-size: 24px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: rgb(255,255,10);
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

.button:hover {background-color: grey}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
.but {
  background-color:#4CAF50; 
  text-decoration: none;
  border:none;
}
.Available{
display: inline-block;
  padding: 15px 25px;
  font-size: 24px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #4CAF50;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}
table tr td{
  border: 2px solid black;
  border-radius: 10px;
}
                </style>

@endsection
