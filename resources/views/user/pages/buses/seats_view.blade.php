@extends('user.index')
@section('main-content')
 <link rel="stylesheet" type="text/css" href="{{asset('extracss/panel.css')}}"/>
@foreach($r as $b)
<div class="panel panel-primary" width="400px">
    <div class="panel-heading">Seats of bus  {{$b->bus_no}}.</div>
    <div class="panel-body">
    	<input type="button" value="available" class="button" id="b1">
    	<input type="button" value="Booked" class="booked" id="b1">
    	<input type="button" value="Reserved" class="reserved" id="b1">
    	
<table border="2px" width="1000px" height="400px" style="margin-top: 10px;" >
        

        <tr >
            <td  rowspan="2" align="center"><img src="{{asset('assets/img/seat.png')}}" height="50px" width="50px">driver</td>

            <td align="center">
                <?php
                if(($b->seat1)=="A"){
                ?>
                <span >
                  <input type="hidden" name="seat1" id="<?php echo $id1='s1'; ?>" value="A">
                  <input type="button" value="1" id="b1"  class="button">
                  
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
                  <input type="button" value="2" id="b2"  class="button">
                  
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
                  <input type="button" value="3" id="b3"  class="button">
                  
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
                  


                  <input type="button" value="4" id="b4"  class="button">
                  
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
                  <input type="button" value="5" id="b5"  class="button">
                  
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
                  <input type="button" value="6" id="b6"  class="button">
                  
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
                  <input type="button" value="7" id="b7"  class="button">
                  
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
                  <input type="button" value="8" id="b8"  class="button">
                  
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
                  <input type="button" value="9" id="b9"  class="button">
                  
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
                  <input type="button" value="10" id="b10"  class="button" >
                  
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
                  <input type="button" value="11" id="b11"  class="button" >
                  
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
                  <input type="button" value="12" id="b12"  class="button" >
                  
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
                  <input type="button" value="13" id="b13"  class="button" >
                  
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
                  <input type="button" value="14" id="b14"  class="button" o>
                  
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
                  <input type="button" value="15" id="b15"  class="button" >
                  
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
                  <input type="button" value="16" id="b16"  class="button">
                  
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
@foreach($s as $n)
    <div style="margin-top: 5px;">
    	<a href="{{url('admin/cusavailable/'.$n->id.'/edit')}}"><button class="btn btn-primary">Make reservation</button></a>
    </div>
    @endforeach
</div>
</div>
</div>


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
                </style>

	@endsection