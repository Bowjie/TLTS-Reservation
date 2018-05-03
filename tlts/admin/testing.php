
 <select id="campus" name="campus" class="form-control" onchange="populate(this.id,'room')">
              <option value=""></option>
              <option value="GP">GP</option>
              <option value="LV">LV</option>
            </select>

  <select id="room" name="room" class="form-control" onchange="alert(buildUrl(url,parameters))">
              
            </select>

<?php 
$DB = new mysqli ('localhost','root','root','wbs');
   $select="SELECT eqid, eqdesc FROM equipment";
     $query=$DB->query($select);
     $fetchy=$query->fetch_assoc();
     $id=$fetchy['eqid'];     
     $desc=$fetchy['eqdesc'];     
  ?>

 <script>
              function populate(s1,s2){
                  var s1 = document.getElementById(s1);
                  var s2 = document.getElementById(s2);
                  s2.innerHTML = "";
                  if(s1.value == "GP"){
                      var optionArray = ["|","<? echo $eqid ?>|<? echo $desc ?>"];
                      // var optionArray = ["|","101|101","102|102","103|103","104|104","105|105","106|106","201|201","202|202","203|203","204|204","205|205","206|206","207|207","SAC|SAC","301|301","302|302","303|303","304|304","305|305","306|306","307|307","308|308","309|309","401|401","402|402","403|403","404|404","405|405","406|406","407|407","408|408","409|409","501|501","502|502","503|503","504|504","505|505","506|506","507|507","508|508","509|509"];
                  } else if(s1.value == "LV"){
                      var optionArray = ["|","101|101","102|102","103|103","104|104","201|201","202|202","203|203","204|204","301|301","302|302","303|303","304|304","401|401","402|402","403|403","404|404","501|501","502|502","503|503","504|504","601|601","602|602","603|603","604|604","701|701","702|702","703|703","704|704","801|801","802|802","803|803","804|804","901|901","902|902","903|903","904|904","1001|1001","1002|1002","1003|1003","1004|1004","1101|1101","1102|1102","1103|1103","1104|1104","1201|1201","1202|1202","1203|1203","1204|1204","1301|1301","1302|1302","1303|1303","1304|1304","1401|1401","1402|1402","1403|1403","1404|1404"];
                  }
                  for(var option in optionArray){
                      var pair = optionArray[option].split("|");
                      var newOption = document.createElement("option");
                      newOption.value = pair[0];
                      newOption.innerHTML = pair[1];
                      s2.options.add(newOption);
                  }

               }
              </script>
