function login(){
    username = $('#username').val();
    password = $('#password').val();
    console.log(username);
    console.log(password);
    $.ajax({
        type: "POST",
        url: "backend/login_ajax.php",
        data: {
            //data goes here
            username,
            password
        },
        success: function (data) {
           //data is returned here
            if(data == "SUCCESS"){
                alert("Successful Login");
                window.location = 'bussreach.php';
            }
            else{
                alert("Incorect Username, password combination");
                window.location = '';
            }
        }
    });
}

function gotobus() {
    
    busno = $('#busno').val()
    console.log(busno);

    $.ajax({
        type: "POST",
        url: "backend/checkbus_ajax.php",
        data: {
            //data goes here
            busno
        },
        success: function (data) {
           //data is returned here
           
            if(data != ""){
                console.log(data);
                //alert("Successful Login");
                window.location = 'timeline.php?busno='+data;
            }
            else{
                console.log('fail');
                alert("bus not found");
                //window.location = '';
            }
        }
    });
    
}


//$(".updown").show();


function startjourney() {
    mockdata = [
        {
            "latitude": "18.991915",
            "longitude": " 73.115677"
        },
        {
            "latitude": "18.992615",
            "longitude": " 73.115645"
        },
        {
            "latitude": "18.993934",
            "longitude": " 73.114948"
        },
        {
            "latitude": "18.996758",
            "longitude": " 73.112210"
        },
        {
            "latitude": "18.999486",
            "longitude": " 73.107700"
        },
        {
            "latitude": "19.004478",
            "longitude": " 73.107465"
        },
        {
            "latitude": "19.007926",
            "longitude": " 73.107597"
        },
        {
            "latitude": "19.013627",
            "longitude": " 73.107104"
        },
        {
            "latitude": "19.016630",
            "longitude": " 73.106675"
        },
        {
            "latitude": "19.022056",
            "longitude": " 73.101126"
        },
        {
            "latitude": "19.024572",
            "longitude": " 73.097435"
        },
        {
            "latitude": "19.031633",
            "longitude": " 73.086449"
        },
        {
            "latitude": "19.034138",
            "longitude": " 73.082565"
        },
        {
            "latitude": "19.036572",
            "longitude": " 73.079475"
        },
        {
            "latitude": "19.038154",
            "longitude": " 73.074969"
        },
        {
            "latitude": "19.035360",
            "longitude": " 73.070655"
        },
        {
            "latitude": "19.031689",
            "longitude": " 73.066020"
        },
        {
            "latitude": "19.028180",
            "longitude": " 73.060912"
        },
    ]
     i=0; 
     setInterval(function () {
        console.log(mockdata[i].latitude + "  " + mockdata[i].longitude + "\n");
        
         updatedata(mockdata[i].latitude,mockdata[i].longitude);
         //getLocation();
         $("#ref").load("timeline.php #ref");
         i=i+1;
     },2000);
    console.log(mockdata);
    // console.log("Hello");
    //  a=1; 
    //  b=2;
    //  setInterval(function () {
    //      a=a+1;
    //      b=b+1;
    //      updatedata(a,b);
    //      $("#ref").load("timeline.php #ref");
    //  },3000);
    //  $(".updown").hide();
    //  setInterval(function () {
    //      getLocation();
    //      $("#ref").load("timeline.php #ref");
    //  },3000);
    // getLocation();        
}

function getLocation() {
    if (navigator.geolocation) {
      navigator.geolocation.getCurrentPosition(updatePosition);
    } else { 
      alert("Geolocation is not supported by this browser.");
    }
  }
  
function updatePosition(position) {
    console.log( "Latitude: " + position.coords.latitude + 
    "<br>Longitude: " + position.coords.longitude);
    updatedata(position.coords.latitude,position.coords.longitude);
    document.getElementById("loc").textContent = " Latitude: " + position.coords.latitude + 
    " Longitude: " + position.coords.longitude;

}

function updatedata(latitude,longitude){
    //latitude = 18.991310;
    //longitude = 73.116429;
    busno = $('#busno').html();
    //console.log(busno);

    $.ajax({
        type: "POST",
        url: "backend/updateposition_ajax.php",
        data: {
            //data goes here
            latitude,
            longitude,
            busno
        },
        success: function (data) {
           //data is returned here
           console.log(data);
            if(data == "SUCCESS"){
                //alert("Successful Login");
                //window.location = 'index.php'; 
            }
            else{
                //alert("Incorect Username, password combination");
                //window.location = '';
            }
        }
    });
    
}

function descajax(busno) {
    desc="desc";
    $.ajax({
        type: "POST",
        url: "backend/desc_ajax.php",
        data: {
            //data goes here
            desc
        },
        success: function (data) {
           //data is returned here
           console.log(data);
            if(data == "SUCCESS"){
                //alert("Successful Login");
                //window.location = 'index.php'; 
            }
            else{
                //alert("Incorect Username, password combination");
                //window.location = '';
            }
        }
    });
    $("#ref").load("timeline.php?busno="+busno+" #ref");
}

function ascajax(busno) {
    desc=" ";
    $.ajax({
        type: "POST",
        url: "backend/desc_ajax.php",
        data: {
            //data goes here
            desc
        },
        success: function (data) {
           //data is returned here
           console.log(data);
            if(data == "SUCCESS"){
                //alert("Successful Login");
                //window.location = 'index.php'; 
            }
            else{
                //alert("Incorect Username, password combination");
                //window.location = '';
            }
        }
    });
    $("#ref").load("timeline.php?busno="+busno+" #ref");
    $(".updown").show();

}

function gotostop() {
    busstop = $('#busstop').val();
    console.log(busstop);
    //console.log(password);
    $.ajax({
        type: "POST",
        url: "backend/gotostop_ajax.php",
        data: {
            //data goes here
            busstop
            
        },
        success: function (data) {
           //data is returned here
           console.log(data);
           window.location = 'incomming.php';
            if(data == "SUCCESS"){
                //alert("Successful Login");
                
            }
            else{
                //alert("Incorect Username, password combination");
                //window.location = '';
            }
        }
    });
}

function busfull(busno,status) {
    
    console.log(busno);
    //console.log(password);
    $.ajax({
        type: "POST",
        url: "backend/busfull_ajax.php",
        data: {
            //data goes here
            busno,
            status
            
        },
        success: function (data) {
           //data is returned here
           console.log(data);
           //window.location = 'incomming.php';
            if(data == "SUCCESS"){
                alert("Bus Crowd status updated!");
                $(".timeline").load("timeline.php?busno="+busno+" .timeline");
            }
            else{
                //alert("Incorect Username, password combination");
                //window.location = '';
            }
        }
    });
}