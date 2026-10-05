const data = document.getElementById("data");
if(data){
    let today = new Date().getFullYear() + "-" + String(new Date().getMonth() + 1).padStart(2, "0") + "-" + String(new Date().getDate()).padStart(2, "0");
    data.min = today;
}