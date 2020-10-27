
debugger;
console.log('AAAAAAAAAAAAAAAAAAAAAA');
functionformValidation()
{

  debugger;
varuemailid = document.registration.email;
varurollno = document.registration.rollno;
varufname = document.registration.fname;
varulname = document.registration.lname;
varuaddress = document.registration.address;
varucity = document.registration.city;
varucountry= document.registration.country;
varutelephoneno = document.registration.telephoneno;
varudob= document.registration.birthday;

 if(userid_validation(uid,5,16))
{
if(passid_validation(passid,7,16))
{
if(allLetter(uname))
{
if(alphanumeric(uadd))
{
if(countryselect(ucountry))
{
if(allnumeric(uzip))
{
if(ValidateEmail(varuemailid))
{
if(validsex(umsex,ufsex))
{
}
}
}
}
}
}
}
}
return false;
}

functionuserid_validation(uid,mx,my)
{
varuid_len = uid.value.length;
if (uid_len == 0 || uid_len>= my || uid_len< mx)
{
alert("User Id should not be empty / length be between "+mx+" to "+my);
uid.focus();
return false;
}
return true;
}

functionpassid_validation(passid,mx,my)
{
varpassid_len = passid.value.length;
if (passid_len == 0 ||passid_len>= my || passid_len< mx)
{
alert("Password should not be empty / length be between "+mx+" to "+my);
passid.focus();
return false;
}
return true;
}
functionallLetter(uname)
{
var letters = /^[A-Za-z]+$/;
if(uname.value.match(letters))
{
return true;
}
else
{
alert('Username must have alphabet characters only');
uname.focus();
return false;
}
}
function alphanumeric(uadd)
{
var letters = /^[0-9a-zA-Z]+$/;
if(uadd.value.match(letters))
{
return true;
}
else
{
alert('User address must have alphanumeric characters only');
uadd.focus();
return false;
}
}
functionValidateEmail(varuemailid)
{
varmailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
if(varuemailid.value.match(mailformat))
{
return true;
}
else
{
alert("You have entered an invalid email address!");
uemail.focus();
return false;
}
}
functionvalidsex(umsex,ufsex)
{
x=0;

if(umsex.checked)
{
x++;
} if(ufsex.checked)
{
x++;
}
if(x==0)
{
alert('Select Male/Female');
umsex.focus();
return false;
}
else
{
alert('Form Successfully Submitted');
window.location.reload()
return true;}
}
