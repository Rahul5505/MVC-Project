<link href="https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
        // Countries
        var country_arr = new Array("Select City","Rajkot","Ahemdabad","Surat","Vadodara");

        $.each(country_arr, function (i, item) {
            $('#city').append($('<option>', {
                value: i,
                text : item,
            }, '</option>' ));
        });

        // States
        var s_a = new Array();
        s_a[0]="Select area";
        s_a[1]="Select area|kkv hall";
        s_a[2]="Select area|jivraj park";
        s_a[3]="Select area|airport road";
        s_a[4]="Select area|railway station";
        

        // Cities
        var c_a = new Array();
        c_a['kkv hall']="<?php echo $expRajkotSlot; ?>";
        c_a['jivraj park']="<?php echo $expahemdabadSlot; ?>";
        c_a['airport road']="<?php echo $expsuratSlot; ?>";
        c_a['railway station']="<?php echo $expvadodaraSlot; ?>";
        


        $('#city').change(function(){
            var c = $(this).val();
            var state_arr = s_a[c].split("|");
            $('#area').empty();
            $('#slot').empty();
            if(c==0){
                $('#area').append($('<option>', {
                    value: '0',
                    text: 'Select Area',
                }, '</option>'));
            }else {
                $.each(state_arr, function (i, item_state) {
                    $('#area').append($('<option>', {
                        value: item_state,
                        text: item_state,
                    }, '</option>'));
                });
            }
            $('#slot').append($('<option>', {
                value: '0',
                text: 'Select slot',
            }, '</option>'));
        });

        $('#area').change(function(){
            var s = $(this).val();
            if(s=='Select State'){
                $('#slot').empty();
                $('#slot').append($('<option>', {
                    value: '0',
                    text: 'Select Slot',
                }, '</option>'));
            }
            var city_arr = c_a[s].split("|");
            $('#slot').empty();

            $.each(city_arr, function (j, item_city) {
                $('#slot').append($('<option>', {
                    value: item_city,
                    text: item_city,
                }, '</option>'));
            });


        });
    });
</script>

    <script>

        $(function() {
            $("#date1").datepicker();
            // var date1 = $("#date1");
        });
        $(function() {
            $("#date2").datepicker();
            // var date2 = $("#date2");
        });
     
        function func() {

            var date1 = new Date($("#date1").val());
            var date2 = new Date($("#date2").val());
            console.log(date1);
            // if()
            // date1 = new Date(date1);
            // date2 = new Date(date2);
            var milli_secs = date1.getTime() - date2.getTime();
             
            // Convert the milli seconds to Days  
            var days = milli_secs / (1000 * 3600 * 24);
            // document.getElementById("ans").innerHTML = 
            var ans = Math.round(Math.abs(days*120));
            $('#ans').val(ans);
        }
    </script>
  <div id="services" class="our-services section">
    <div class="container">
            
        <div class="wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s">
          <h4 class="text-white p-2 bg-primary w-25">Book Parking Slot</h4>
                <form method="post" class="mt-2 w-50">
                <?php
                        if(isset($_SESSION["id"]))
                        {
                ?>
                <lable class="form-label">UserName</lable>
                
                <input type="text" name="uname" value="<?php echo $fetch2["username"]; ?>" class="form-control"> 
                <lable class="form-label">Email</lable>
                <input type="text" name="email"  value="<?php echo $fetch2["email"]; ?>" class="form-control"> 
                <label class="form-label">City</label>
                <select class="form-control" required name="city" id="city">
                                    </select>
                <label class="form-label">Area</label>
                <select class="form-control" required name="area" id="area">
                </select>
                <label class="form-label">Slot</label>
                <select class="form-control" required name="slot" id="slot">
                            
                            
                </select>
                <lable class="form-label">Mobile</lable>
                <input type="text" name="mobile" required class="form-control"> 
                <div class="row">
                    <div class="col-md-4">
                <lable class="form-label">Start Date</lable>
                <input type="datetime-local" id="date1" name="date1" required class="form-control"> 
                    </div>
                    <div class="col-md-4">
                <lable class="form-label">End Date</lable>
                <input type="datetime-local" id="date2" name="date2" required class="form-control">
            </div>
                <div class="col-md-4 mt-4">
                <button type="button" id="sub" onclick="func()">Check</button>
            </div>        
            </div>
            <lable class="form-label">Rate</lable>
                <input type="text" name="rate" id="ans" class="form-control" readonly>
                <input type="hidden" name="status" value="Booked">

               <input type="submit" name="bookslot" value="BOOK" class="btn btn-lg bg-dark text-white mt-2">
               <?php
                        }
               ?>
            </form>
        </div>
    </div>
  </div>
    