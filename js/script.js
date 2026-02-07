const form = document.getElementById("formq").reset();
const clear = document.getElementById("clearBtn").reset();

clear.addEventListener('click', function(){
    form.reset();
});