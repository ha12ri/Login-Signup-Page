
// =============== first Input field ===============

invalidfirst = () => {
    var el1 = document.getElementById('name').value;

    if (el1.length < 3) {

        document.getElementById('fname').innerHTML = "❌Minimum three Charaters are reuired.";
        document.getElementById('fname').style = "color:var(--red);";
        document.getElementById('name').style = "border:0.1rem solid var(--red);";

    }
    else if (!(/^[A-Za-z ]+$/.test(el1))) {
        document.getElementById('fname').innerHTML = "❌You Can't Use Numbers or Special Characters.";
        document.getElementById('fname').style = "color:var(--red);";
        document.getElementById('name').style = "border:0.1rem solid var(--red);";
    }
    else {

        document.getElementById('fname').innerHTML = "✅Perfet";
        document.getElementById('fname').style = "color: var(--green); ";
        document.getElementById('name').style = "border:0.1rem solid var(--green);";
    }
}

// =============== Second Input field ===============

invalidsecond = () => 
{
    var em = document.getElementById('email');
    var emerr = document.getElementById('ename');

    if(em.value.length == 0){
        emerr.innerHTML="❌Email can't be Empty";
        emerr.style="color:var(--red);";
        em.style="border:0.1rem solid var(--red);";
    }
    else if(!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(em.value)))
    {
        emerr.innerHTML="❌Please Enter Valid Emial Address.";
        emerr.style="color:var(--red);";
        em.style="border:0.1rem solid var(--red);"
    }else
    {
        emerr.innerHTML="✅Perfect.";
        emerr.style="color:var(--green);";
        em.style="border:0.1rem solid var(--green);"
    }
}

// =============== Third Input field ===============

invalidthird = () => 
{
    var un = document.getElementById('usrname');
    var unerr = document.getElementById('uname');
   

    if(un.value.length == 0){
        unerr.innerHTML="❌Email can't be Empty";
        unerr.style="color:var(--red);";
        un.style="border:0.1rem solid var(--red);";
    }
    else if(!(/^[a-z0-9_.]+$/.test(un.value)))
    {
        unerr.innerHTML="❌Please don't use special characters .";
        unerr.style="color:var(--red);";
        un.style="border:0.1rem solid var(--red);";

    }
    else if(un.value.length < 3 || un.value.length > 10){
        unerr.innerHTML="❌Minimum length is 3 and Max length is 10.";
        unerr.style="color:var(--red);";
        un.style="border:0.1rem solid var(--red);";
    }
    else
    {
        unerr.innerHTML="✅Perfect.";
        unerr.style="color:var(--green);";
        un.style="border:0.1rem solid var(--green);"
    }
}

// =============== Fourth Input field ===============

invalidforth = () => 
{
    var ps = document.getElementById('pass');
    var perr = document.getElementById('pname');
   

    if(ps.value.length == 0){
        perr.innerHTML="❌Password can't be Empty";
        perr.style="color:var(--red);";
        ps.style="border:0.1rem solid var(--red);";
    }
    else if(!( /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,16}$/.test(ps.value)))
    {
        perr.innerHTML="❌Use at least one special character, one Number and one Uppercase and minimum length is 6.";
        perr.style="color:var(--red);";
        ps.style="border:0.1rem solid var(--red);";

    }
    else
    {
        perr.innerHTML="✅Perfect.";
        perr.style="color:var(--green);";
        ps.style="border:0.1rem solid var(--green);"
    }
}

// =============== Fourth Input field ===============

invalidfifth = () => 
{
    var cps = document.getElementById('cpass');
    var cperr = document.getElementById('cpname');
   

    if(cps.value.length == 0){
        cperr.innerHTML="❌Password can't be Empty";
        cperr.style="color:var(--red);";
        cps.style="border:0.1rem solid var(--red);";
    }
    else if(cps.value !== document.getElementById('pass').value)
    {
        cperr.innerHTML="❌Passwords do not Match.";
        cperr.style="color:var(--red);";
        cps.style="border:0.1rem solid var(--red);";

    }
    else
    {
        cperr.innerHTML="✅Perfect Matched.";
        cperr.style="color:var(--green);";
        cps.style="border:0.1rem solid var(--green);"
    }
}