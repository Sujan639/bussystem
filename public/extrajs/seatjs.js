
 function selectseat(id){
                        
                         var element = document.getElementById(id);
  element.classList.toggle("pressed");

  
  

                        
                    }
                    function valtoogle(id){
 if(id=="b1"){
                      var element=document.getElementById(id);
                      if(element.value=="1")
                        element.value="S";
                      else if (element.value=="S")
                        element.value="1";
                      
                      
                    }
                    else if(id=="b2"){
                      var element=document.getElementById(id);
                      if(element.value=="2")
                        element.value="S";
                      else if (element.value=="S")
                        element.value="2";
                      
                    }

                    else if(id=="b4"){
                      
                      var element=document.getElementById(id);
                      if(element.value=="4")
                        element.value="S";
                      else if (element.value=="S")
                        element.value="4";
                      
                    

                    }

                     else if(id=="b5"){
                      var element=document.getElementById(id);
                      if(element.value=="5")
                        element.value="S";
                      else if (element.value=="S")
                        element.value="5";
                     
                    }

                     else if(id=="b6"){
                      var element=document.getElementById(id);
                      if(element.value=="6")
                        element.value="S";
                      else if (element.value=="S")
                        element.value="6";
                      
                    }

                     else if(id=="b7"){
                      var element=document.getElementById(id);
                      if(element.value=="7")
                        element.value="S";
                      else if (element.value=="S")
                        element.value="7";
                      
                    }

                     else if(id=="b8"){
                      var element=document.getElementById(id);
                      if(element.value=="8")
                        element.value="S";
                      else if (element.value=="S")
                        element.value="8";
                      
                    }

                     else if(id=="b9"){
                      var element=document.getElementById(id);
                      if(element.value=="9")
                        element.value="S";
                      else if (element.value=="S")
                        element.value="9";
                      
                    }

                     else if(id=="b10"){
                      var element=document.getElementById(id);
                      if(element.value=="10")
                        element.value="S";
                      else if (element.value=="S")
                        element.value="10";
                      
                    }

                     else if(id=="b11"){
                      var element=document.getElementById(id);
                      if(element.value=="11")
                        element.value="S";
                      else if (element.value=="S")
                        element.value="11";
                     
                    }

                     else if(id=="b12"){
                      var element=document.getElementById(id);
                      if(element.value=="12")
                        element.value="S";
                      else if (element.value=="S")
                        element.value="12";
                      
                    }

                     else if(id=="b13"){
                      var element=document.getElementById(id);
                      if(element.value=="13")
                        element.value="S";
                      else if (element.value=="S")
                        element.value="13";
                      
                    }

                     else if(id=="b14"){
                      var element=document.getElementById(id);
                      if(element.value=="14")
                        element.value="S";
                      else if (element.value=="S")
                        element.value="14";
                      
                    }

                     else if(id=="b15"){
                      var element=document.getElementById(id);
                      if(element.value=="15")
                        element.value="S";
                      else if (element.value=="S")
                        element.value="15";
                      
                    }

                     else {
                      var element=document.getElementById(id);
                      if(element.value=="16")
                        element.value="S";
                      else if (element.value=="S")
                        element.value="16";
                                          }




                    }
                    function opperationtoogle(id2,p){
                      
                      // alert("heloo");
                      // alert(p);
                      // alert(id2);
                      
                      var val=document.getElementById(id2);
                      // alert(val.value);
                      var m=document.getElementById("md");
                      
                      if(m.value=="B"){
                      
                      if(val.value=="A")
                        val.value="B";
                      else if (val.value=="B")
                        val.value="A";
                      // alert(val.value);

                    }
                    else {
                      if(val.value=="A")
                        val.value="R";
                      else if (val.value=="R")
                        val.value="A";
                      // alert(val.value);
                    }
                    var cost=document.getElementById("ct");
                    // alert(ct.value);
                    var c=parseInt(cost.value);
                    var price=parseInt(p);
                    // alert(c);

                    if(val.value=="B" || val.value=="R")
                     { 

                      // alert(val.value);
                      c=c+price;
                      cost.value=c;
                    }
                    else if(val.value=="A")
                      {
                        c=c-price;
                        cost.value=c;
                      }
                    


                    

                      
                      



                    }
                    
                    function seatname(id1,id2){
                      var s=document.getElementById("seatindex");
  // alert(s);
  var a=document.getElementById(id1);
  var val=document.getElementById(id2);
  if(val.value=="B" || val.value=="R")
                     { if(s.value=="")
                   s.value=a.value;
else
                   s.value =s.value.concat(" ").concat(a.value);
                      
                    }
                    else if(val.value=="A")
                      {
                        // alert(val.value);
                        var b=s.value;
                        // alert(b);
                        var r=b.split(" ");
                        // alert(r);
                        for(let d=0;d<r.length;d++){
                          if(r[d]==a.value){
                            r.splice(d,1);
                            
                          }
                        }
                        
                        s.value=r.join(" ");
                        
                          }

                    }
                    

                    function alertm()
                    {
                      // alert("hello");
                      var m=document.getElementById('md');
                      if(m.value=="R")
                        alert("your reservation will be automatically deleted before 3 days of arrival.please make payment before it expires.");
                      else if(m.value=="B")
                        alert("you cannot cancel your reservation after you book. It will not be refunded.");

                    }

                