let index = 0;
Dropzone.options.fileUploader = {
    success: function (file, response) {
        if(!response.success){
            this.removeFile(file);
            return;
        }
        let filePath = response.url;  // Update based on your server response
        // Create a hidden input element for each uploaded file
        let input = document.createElement('input');
        input.type = 'hidden';
        input.name = `attachments[${index}]`; // Increment the index for each file
        input.value = filePath; // Set the uploaded file path

        // Append the input to the hidden inputs div
        document.getElementById('dropzone').appendChild(input);

        // Increment the file index for the next uploaded file
        index++;
    },
    error: function (file, response) {
        this.removeFile(file);
    }
};