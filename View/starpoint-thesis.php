<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Starpoint Thesis</title>
    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            overflow: hidden; /* Prevent scrolling */
        }
        .pdf-container {
            width: 100%;
            height: 100%;
        }
        .pdf-object {
            width: 100%;
            height: 100%;
        }
    </style>
</head>
<body>
    <div class="pdf-container">
        <embed class="pdf-object" src="../includes/I_S_Final_Draft.pdf" type="application/pdf">
        <!-- Or using <object> tag -->
        <!-- <object class="pdf-object" data="path/to/your/pdf_file.pdf" type="application/pdf"></object> -->
    </div>
</body>
</html>
