const password = document.getElementById("password");

const btn = document.getElementById("btn");

btn.addEventListener("click", ()=>{
    if (password.type === "password") {
        password.type = "text";
        btn.classList.add("fa-unlock");
        btn.classList.remove("fa-lock");
    }else{
        password.type = "password";
        btn.classList.add("fa-lock");
        btn.classList.remove("fa-unlock");
    }
});

const image = document.getElementById("image");

image.addEventListener("change", () => {
    let file = image.files[0];

    let imageReader = new FileReader();

    imageReader.onload = () => {
       
     document.getElementById('pic').src= imageReader.result;
    };

    imageReader.readAsDataURL(file);
});







