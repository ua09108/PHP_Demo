<?

    $filename = array ("Word檔案.doc","PDF檔案.pdf","簡報檔.ppt");
    $filetype = array (".doc" => "Word格式" , ".pdf" => "PDF格式",".ppt" => "簡報格式");


    foreach ($filename as $key => $value) {
        # code...
        $ext =  strstr($value,".");

        foreach ($filetype as $key1 => $value1) {
            # code...
            if ($key1 == $ext) {
                # code...
                echo $value."屬於".$value1."<br>";
            }
        }
    }


?>