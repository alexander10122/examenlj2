function activate() {



//rotating energy cable1
    var el = document.getElementById("target");
    var st = window.getComputedStyle(el, null);
    var tr = st.getPropertyValue("-webkit-transform") ||
        st.getPropertyValue("-moz-transform") ||
        st.getPropertyValue("-ms-transform") ||
        st.getPropertyValue("-o-transform") ||
        st.getPropertyValue("transform") ||
        "FAIL";

    var values = tr.split('(')[1].split(')')[0].split(',');
    var a = values[0];
    var b = values[1];
    var c = values[2];
    var d = values[3];

    var scale = Math.sqrt(a*a + b*b);

    var sin = b/scale;

    var angle = Math.round(Math.asin(sin) * (180/Math.PI));

    console.log('Rotate: ' + angle + 'deg');







    //rotating energy cable 2

    var el2 = document.getElementById("target2");
    var st2 = window.getComputedStyle(el2, null);
    var tr2 = st2.getPropertyValue("-webkit-transform") ||
        st2.getPropertyValue("-moz-transform") ||
        st2.getPropertyValue("-ms-transform") ||
        st2.getPropertyValue("-o-transform") ||
        st2.getPropertyValue("transform") ||
        "FAIL";




    var values2 = tr2.split('(')[1].split(')')[0].split(',');
    var a2 = values2[0];
    var b2 = values2[1];
    var c2 = values2[2];
    var d2 = values2[3];

    var scale2 = Math.sqrt(a2*a2 + b2*b2);


    var sin2 = b2/scale2;
    var angle2 = Math.round(Math.asin(sin2) * (180/Math.PI));
    console.log('Rotate: ' + angle2 + 'deg');


















//seeing if the power cables are well rotated, if it's true then do something

     if ((angle > -9 && angle < 10) && (angle2 > -9 && angle2 < 10)){
       document.getElementById('lamp-aan').style.visibility = "visible";
        document.getElementById('lamp-uit').style.visibility = "hidden";
          // alert('its shining!');
       }
       else{
           document.getElementById('lamp-aan').style.visibility = "hidden";
           document.getElementById('lamp-uit').style.visibility = "visible";
           // alert('you suck');
        }
}








