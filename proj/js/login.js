function verifLogin()
{
    password=document.frm.password.value;
    email=document.frm.email.value;
    if ((email.length==0)||(password.length==0))
    {
        window.alert('s.v.p valider tout les champs');
        return false;
    }
    return true;
}
