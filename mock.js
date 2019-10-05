
function mock(busno) {
    $(".updown").hide();
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
        {
            "latitude": "19.025798",
            "longitude": " 73.055600"
        },
        {
            "latitude": "19.023769",
            "longitude": " 73.052381"
        },
        {
            "latitude": "19.025048",
            "longitude": " 73.042843"
        },
        {
            "latitude": "19.028167",
            "longitude": " 73.035026"
        },
        {
            "latitude": "19.032955",
            "longitude": " 73.029534"
        },
        {
            "latitude": "19.043666",
            "longitude": " 73.027303"
        },
        {
            "latitude": "19.037466",
            "longitude": " 73.028926"
        },
        {
            "latitude": "19.040671",
            "longitude": " 73.028368"
        },
        {
            "latitude": "19.043998",
            "longitude": " 73.026909"
        },
        
    ]

    send = [
        {
            "L": "3"
        },
        {
            "L": "5"
        },
        {
            "L": "11"
        },
        {
            "L": "16"
        },
        {
            "L": "19"
        },
        {
            "L": "25"
        },
        {
            "L": "30"
        },
        {
            "L": "34"
        },
        {
            "L": "42"
        },
        {
            "L": "48"
        },
        {
            "L": "56"
        },
        {
            "L": "60"
        },
        {
            "L": "64"
        },
        {
            "L": "70"
        },
        {
            "L": "75"
        },
        {
            "L": "80"
        },
        {
            "L": "89"
        },
        {
            "L": "94"
        },
        {
            "L": "99"
        },
        {
            "L": "105"
        },
        {
            "L": "109"
        },
        {
            "L": "114"
        },
        {
            "L": "117"
        },
        {
            "L": "126"
        },
    
    ]
     i=0; 
     setInterval(function () {
        //console.log(mockdata[i].latitude + "  " + mockdata[i].longitude + "\n");
        
         update(send[i].L,send[i].L);
         $("#ref").load("timeline.php?busno="+busno+" #ref");
         i=i+1;
     },2000);
    //console.log(mockdata);
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

function update(latitude,longitude){
    //latitude = 18.991310;
    //longitude = 73.116429;
    busno = $('#busno').html();
    //console.log(busno);
    console.log(latitude);
    console.log(longitude);
    $.ajax({
        type: "POST",
        url: "backend/updatemock_ajax.php",
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

