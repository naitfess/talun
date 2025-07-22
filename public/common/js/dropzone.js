var myDropzone = new Dropzone("#dropzone1", {
    url: "https://keenthemes.com/scripts/void.php", // Set the url for your upload script location
    paramName: "vp_file", // The name that will be used to transfer the file
    maxFiles: 1,
    maxFilesize: 10, // MB
    acceptedFiles: "video/mp4,video/avi,video/mkv,video/webm",
    addRemoveLinks: true,
});