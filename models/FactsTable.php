<?php 

class FactsTable {

    public static function isInCsv($csvTab, $csvLine) { // refaire grâce au tableau ci dessous
        $n = 0;
        foreach ($csvTab as $line) {
            if (strpos($line, $csvLine)) {
                return $n;
            }
            $n++;
        }
        return false;
    }

    public static function getCsvLines($filePath) {
        $file    = fopen($filePath, "r+") or die("Unable to open file!");
        $content = fread($file, filesize($filePath));
        return explode("\n", $content);
    }

    public static function insert($filePath, $figure = '') {
        if (!empty($figure)) {
            $file = fopen($filePath, "a+") or die("Unable to open file!");
            fwrite($file, "\n\r".$figure);
            fclose($file);
            return true;
        }
        return false;
    }

}