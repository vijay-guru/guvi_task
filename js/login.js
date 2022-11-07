const login=(e)=>{
    e.preventDefault();
    var username=document.getElementById('username');
    var password=document.getElementById('password');
    if(username==null || password==""){
        window.alert("Please enter a valid credentials");
    }
}