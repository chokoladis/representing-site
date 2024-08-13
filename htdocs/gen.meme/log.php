2024-08-12 19:46:42 $filePath - /upload/temp/f528764d624db129b32c21fbca0cb8d6/54145ad48821c67ad93c601df56782de.jpeg
2024-08-12 19:46:42 GDImage - 
2024-08-12 19:46:42 error - TypeError Object
(
    [message:protected] => imagewebp(): Argument #1 ($image) must be of type GdImage, bool given
    [string:Error:private] => 
    [code:protected] => 0
    [file:protected] => /Users/igorch/Sites/gen.meme/lib/classes/img.php
    [line:protected] => 267
    [trace:Error:private] => Array
        (
            [0] => Array
                (
                    [file] => /Users/igorch/Sites/gen.meme/lib/classes/img.php
                    [line] => 267
                    [function] => imagewebp
                    [args] => Array
                        (
                            [0] => 
                            [1] => /Users/igorch/Sites/gen.meme/upload/temp/f528764d624db129b32c21fbca0cb8d6/54145ad48821c67ad93c601df56782de.jpeg.webp
                            [2] => 80
                        )

                )

            [1] => Array
                (
                    [file] => /Users/igorch/Sites/gen.meme/lib/classes/img.php
                    [line] => 227
                    [function] => compress
                    [class] => Main\Classes\Img
                    [type] => ::
                    [args] => Array
                        (
                            [0] => /upload/temp/f528764d624db129b32c21fbca0cb8d6/54145ad48821c67ad93c601df56782de.jpeg
                            [1] => jpeg
                        )

                )

            [2] => Array
                (
                    [file] => /Users/igorch/Sites/gen.meme/ajax/index.php
                    [line] => 18
                    [function] => handlerCustomImg
                    [class] => Main\Classes\Img
                    [type] => ::
                    [args] => Array
                        (
                            [0] => Array
                                (
                                    [name] => memecafe.jpeg
                                    [full_path] => memecafe.jpeg
                                    [type] => image/jpeg
                                    [tmp_name] => /Applications/MAMP/tmp/php/php37aqIv
                                    [error] => 0
                                    [size] => 65396
                                )

                        )

                )

        )

    [previous:Error:private] => 
)

2024-08-12 19:46:42 webImgPath - 
2024-08-12 19:48:18 GDImage - GdImage Object
(
)

2024-08-12 19:48:19 $saveWebp - 1
2024-08-12 19:48:19 webImgPath - /upload/temp/f528764d624db129b32c21fbca0cb8d6/ea0c72df8e9427b4a3a66a2e5418069f.png.webp
