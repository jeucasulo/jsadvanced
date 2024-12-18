<!DOCTYPE html>
<html>

<head>
    <title>
        File Type Validation while
        Uploading it using JavaScript
    </title>

    <style>
        h1 {
            color: green;
        }
        
        body {
            text-align: center;
        }
    </style>
</head>

<body>
    <h1> 
        GeeksforGeeks 
    </h1>

    <h3> 
        Validation of file type while 
        uploading using JavaScript? 
    </h3>

    <!-- File input field -->
    <p>Upload an Image</p>
    <input type="file" id="file"
        onchange="return fileValidation()" />

    <!-- Image preview -->
    <div id="imagePreview"></div>
    <script>
        function fileValidation() {
            var fileInput = 
                document.getElementById('file');
            
            var filePath = fileInput.value;
        
            // Allowing file type
            var allowedExtensions = 
                    /(\.jpg|\.jpeg|\.png|\.gif)$/i;
            
            if (!allowedExtensions.exec(filePath)) {
                alert('Invalid file type');
                fileInput.value = '';
                return false;
            } 
            else 
            {
            
                // Image preview
                if (fileInput.files && fileInput.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        document.getElementById(
                            'imagePreview').innerHTML = 
                            '<img src="' + e.target.result
                            + '"/>';
                    };
                    
                    reader.readAsDataURL(fileInput.files[0]);
                }
            }
        }
    </script>
</body>

</html>
