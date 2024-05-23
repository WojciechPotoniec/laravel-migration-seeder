<?php

namespace App\Functions;

class Helpers
{
    //**Bisogna passare solo il path di riferimento del csv tramite la sintassi  __DIR_ . '/path/file.csv'*/
    public static function getCsvData($path)
    {
        $file_stream = fopen($path, 'r');

        if ($file_stream === false) {
            exit('Cannot open the file ' . $path);
        }
        $data = [];
        while ($row = fgetcsv($file_stream)) {
        }
        $data[] = $row;
        fclose($file_stream);

        return $data;
    }
}