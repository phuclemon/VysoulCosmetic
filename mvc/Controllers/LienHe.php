<?php
// Định nghĩa lớp chính và các thuộc tính, phương thức của lớp
    class LienHe extends controller
    {
// Hàm show - thực hiện chức năng chính của hàm show
        function show()
        {
            self::view("master",[
                "page" => "LienHe",
                "title" => "Liên hệ"
            ]);
        }
    }