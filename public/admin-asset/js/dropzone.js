let index = 0;
Dropzone.options.fileUploader = {
    maxFiles: 1,
    init: function(){
        const thisDropzone = this;
        thisDropzone.on("maxfilesexceeded", function(file) {
            thisDropzone.removeAllFiles(); // Remove the previous file
            $('#dropzone').find('input').each(function(){
                $(this).remove();
            });
            thisDropzone.addFile(file); // Add the new file
        });
        const file = $('#dropzone').find('input').first().val();
        if(file){
            const mockfile = {name: "file.png", size: 123456, accept: true};
            thisDropzone.files.push(mockfile);
            thisDropzone.displayExistingFile(mockfile, encodeURI(file));
        }
    },
    success: function (file, response) {
        if(!response.success){
            this.removeFile(file);
            return;
        }
        let filePath = response.url;  // Update based on your server response
        // Create a hidden input element for each uploaded file
        let existingInput = document.querySelector('input[name="attachment"]');
        if(existingInput){
            existingInput.value = filePath;
        }else{
            let input = document.createElement('input');
            input.type = 'hidden';
            input.name = `attachment`; // Increment the index for each file
            input.value = filePath; // Set the uploaded file path

            // Append the input to the hidden inputs div
            document.getElementById('dropzone').appendChild(input);
        }
    },
    error: function (file, response) {
        this.removeFile(file);
    }
};

function getBase64Image(url) {
    return fetch(url)
        .then(response => {
            if (!response.ok) throw new Error('Network response was not ok.');
            return response.blob();
        })
        .then(blob => {
            return new Promise((resolve, reject) => {
                const reader = new FileReader();
                reader.onloadend = () => resolve(reader.result); // On load, resolve with the base64 data
                reader.onerror = reject; // On error, reject
                reader.readAsDataURL(blob); // Read the blob as base64
            });
        });
}