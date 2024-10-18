<?php
if (isset(($_FILES['file']['name']))) {
    $totalFiles = count($_FILES['file']['name']);
    $errors = array();
    $extensions = array("jpg", "jpeg", "png", "gif");
    for ($i = 0; $i < $totalFiles; $i++) {
        $file_name = $_FILES['file']['name'][$i];
        $file_size = $_FILES['file']['size'][$i];
        $file_tmp = $_FILES['file']['tmp_name'][$i];
        $file_type = $_FILES['file']['type'][$i];
        @$file_ext = strtolower("" . end(explode('.', $_FILES['file']['name'][$i])) . "");
        

        if (in_array($file_ext, $extensions) === false) {
            $errors[] = "Ekstensi file yang diizinkan adalah JPG, JPEG, PNG, atau GIF.";
        }

        if ($file_size > 2097152) {
            $errors[] = 'Ukuran file tidak boleh lebih dari 2 MB';
        }

        if (empty($errors) == true) {
            move_uploaded_file($file_tmp, "documents/" . $file_name);
            echo "File berhasil diunggah.";
        } else {
            echo implode(" ", $errors);
        }
    }
}
?>