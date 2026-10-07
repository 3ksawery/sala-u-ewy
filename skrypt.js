const data = document.getElementById("data");
const teraz = new Date();
if(data){
    const today = teraz.getFullYear() + "-" + String(teraz.getMonth() + 1).padStart(2, "0") + "-" + String(teraz.getDate()).padStart(2, "0");
    data.min = today;
}