<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV Generator</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Dropzone CSS -->
    <link href="https://cdn.jsdelivr.net/npm/dropzone@5.7.0/dist/min/dropzone.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f4f6f9;
        }

        .dropzone {
            border: 2px dashed #007bff;
            border-radius: 8px;
            background-color: #f8f9fa;
            padding: 30px;
            text-align: center;
            transition: all 0.3s ease;
        }

        .dropzone:hover {
            background-color: #e9ecef;
            border-color: #0056b3;
        }

        .dz-message {
            font-size: 18px;
            color: #007bff;
        }

        .dz-message span {
            font-weight: bold;
        }

        .box-title {
            color: #2c3e50;
            font-weight: 600;
        }
    </style>
</head>
<body>
    @include('baselayout.sidebar')

    <div class="content">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="box-title">PDF TO WORD CONVERTER</h4>
                        </div>

                        <div class="card-body">
                            <!-- Dropzone form for file upload -->
                            <form action="{{ route('convert.pdf-to-word') }}" class="dropzone" id="cv-upload" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="dz-message">
                                    <span>Drag and drop your PDF file here or click to select a file</span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        @include('baselayout.footer')
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Dropzone JS -->
    <script src="https://cdn.jsdelivr.net/npm/dropzone@5.7.0/dist/min/dropzone.min.js"></script>

    <script>
        // Initialize Dropzone
        Dropzone.options.cvUpload = {
            paramName: "file", // The name that will be used to transfer the file
            maxFilesize: 10, // Maximum file size in MB
            acceptedFiles: ".pdf", // Only allow PDF files
            dictDefaultMessage: "Drag and drop your PDF file here or click to select a file",
            dictFallbackMessage: "Your browser does not support drag and drop file uploads.",
            dictInvalidFileType: "Only PDF files are allowed.",
            dictFileTooBig: "File is too big. Maximum allowed size is 10 MB.",
            dictResponseError: "Error occurred during upload. Please try again.",
            success: function(file, response) {
                // Handle the successful file upload and conversion
                if (response.url) {
                    const link = document.createElement('a');
                    link.href = response.url;
                    link.download = 'converted-file.docx'; // Provide the filename for the download
                    document.body.appendChild(link);
                    link.click();
                    document.body.removeChild(link);
                } else {
                    alert('Conversion failed or no URL returned.');
                }
            },
            error: function(file, response) {
                alert('Error occurred during file upload.');
            }
        };
    </script>
</body>
</html>
