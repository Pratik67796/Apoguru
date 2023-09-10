<?php
if (!function_exists('getFileSizeInBytes')) {
    function getFileSizeInBytes($val)
    {
        $val = trim($val);
        $last = strtolower($val[strlen($val) - 1]);
        $val = substr($val, 0, -1);
        switch ($last) {
            case 'g':
                $val *= (1024 * 1024 * 1024); //1073741824
                break;
            case 'm':
                $val *= (1024 * 1024); //1048576
                break;
            case 'k':
                $val *= 1024;
                break;
        }

        return $val;
    }
}
if (!function_exists('getFileSizeInReadable')) {
    function getFileSizeInReadable($val)
    {
        $val = trim($val);
        $last = strtolower($val[strlen($val) - 1]);
        $val = substr($val, 0, -1);
        switch ($last) {
            case 'g':
                $val .= " GB";
                break;
            case 'm':
                $val .= " MB";
                break;
            case 'k':
                $val .= " KB";
                break;
        }

        return $val;
    }
}
?>