<?php

namespace CFPropertyList;
class IOException extends \Exception
{
    const NOT_FOUND = 1;
    const NOT_READABLE = 2;
    const NOT_WRITABLE = 3;
    const READ_ERROR = 4;
    const WRITE_ERROR = 5;

    public function __construct($path, $type = null)
    {
        parent::__construct($path, $type);
    }

    public static function notFound($path)
    {
        return new IOException($path, self::NOT_FOUND);
    }

    public static function notReadable($path)
    {
        return new IOException($path, self::NOT_READABLE);
    }

    public static function notWritable($path)
    {
        return new IOException($path, self::NOT_WRITABLE);
    }

    public static function readError($path)
    {
        return new IOException($path, self::READ_ERROR);
    }

    public static function writeError($path)
    {
        return new IOException($path, self::WRITE_ERROR);
    }
}

?>