function verifInscription ()
{
    password=document.frm.password.value;
    firstName=document.frm.firstName.value;
    lastName=document.frm.lastName.value;
    email=document.frm.email.value;
    y=true;
    password1=window.prompt('retaper le password');
    if ((firstName.length==0) (lastName.length==0)(email.length==0)(password.length==0))
    {
        window.alert('s.v.p valider tout les champs');
        y=false;
    }

    if ((isNaN(password)==true) (password!=password1) || (password.length!=8)) 
    {
    y=false;
    window.alert('verifier le password');
    }
    return y;
}
