
function closeForm() {
    var form = document.getElementById('form');     
    form.style.display = "none";
}

if(window.innerWidth > 1000 ){
    if(window.location.href.search("form=") != -1){
        setTimeout(() =>{
            var form = document.getElementById('form');
            form.style.display = "block";
        }, 1000);
    }
}




function openNewFormMiddle(){
    document.getElementById('form-extension').style.display = "block"; 
    document.getElementById('form').style.height = "60vh";
    document.getElementById('input-reaction').value = "middle";  
    
};


function openNewFormBad(){ 
    document.getElementById('form-extension').style.display = "block";
    document.getElementById('form').style.height = "60vh";
    document.getElementById('input-reaction').value = "bad"; 
    
};