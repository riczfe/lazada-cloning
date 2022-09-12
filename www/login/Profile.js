// function readURL(input) {
//     if (input.files && input.files[0]) {
//         var reader = new FileReader();

//         reader.onload = function (e) {
//             $('#blah')
//                 .attr('src', e.target.result);
//         };

//         reader.readAsDataURL(input.files[0]);
//     }
// }

const img = document.getElementById("imgInp");
let info = document.getElementById("info");
let errorMessage = document.getElementById("errorMessage");
const imagePreview = document.getElementById("preview");
img.addEventListener("change", (e) => {
    const imgDetails = document.querySelector("input[type=file]").files[0];
    if (imgDetails) {
        info.style.display = "block";
        // document.querySelector(".img-name").innerText = imgDetails.name;
        // document.querySelector(".img-type").innerText = imgDetails.type;
        // document.querySelector(".img-size").innerText = imgDetails.size + "bytes";
        previewImage(imgDetails);
    } else {
        imagePreview.src = ""
        errorMessage.innerText = "Please select a picture";
        console.error("Please select a picture");
        info.style.display = "none";
    }

})

function previewImage(imgD) {
    const reader = new FileReader();

    // PREVIEW
    reader.addEventListener("load", function () {
        imagePreview.src = reader.result;
    })

    // CHECK IF THERE IS SELECTION 
    if (imgD) {
        // CHECK IF THE FILE IS AN IMAGE
        if (imgD.type === "image/jpeg" || imgD.type == "image/jpg" || imgD.type == "image/gif" || imgD.type == "image/png") {
            errorMessage.innerText = "";

            // CONVERTS FILE TO BASE 64
            reader.readAsDataURL(imgD);
        } else {
            errorMessage.innerText = "File type should be an image"
            imagePreview.src = "";
        }
    }
    // IF NO IMAGE
    else {
        imagePreview.src = ""
        errorMessage.innerText = "Please select a picture";
    }
}