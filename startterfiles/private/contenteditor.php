<?php
include 'path.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>CKEditor Sample</title>
    <script src="ckeditor/ckeditor.js"></script>
    <script src="ckeditor/samples/js/sample.js"></script>
    <link rel="stylesheet" href="ckeditor/samples/css/samples.css">
    <link rel="stylesheet" href="ckeditor/samples/toolbarconfigurator/lib/codemirror/neo.css">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description"
          content="Try the latest sample of CKEditor 4 and learn more about customizing your WYSIWYG editor with endless possibilities.">
</head>
<body id="main">

<main>
    <div>
        <form method="post" action="shared/add.php">
            <div class="adjoined-bottom">
                <div class="grid-container">
                    <div class="grid-width-100">
                        <textarea cols="80" id="editor" name="editor" rows="15" style="visibility: hidden; display: none;">
                        </textarea>
                        <p>
                            <input type="submit" value="submit" name="submitBtn">
                        </p>
                    </div>
                </div>
            </div>
        </form>
    </div>
</main>

<script>
    initSample();
</script>

</body>
</html>







