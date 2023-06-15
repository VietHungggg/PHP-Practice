<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Love U 3000</title>
</head>
<body>
    <h1>Bui Viet Hung</h1>

    <!-- Xuất ra màn hình 1 chuỗi kí tự -->
    <?php
        echo "Konichiwa" 
    ?></br></br>

    <!-- Biến + nối chuỗi trong php -->
    <?php
        $fullName = "Bui Minh Thu";
        echo "Hello ".$fullName;  
    ?></br></br>

    <!-- Nối chuỗi cách 2 -->
    <?php 
        $fullName2 = "Bui Viet Hung";
        echo "Hello {$fullName2}";
    ?></br></br>

    <!-- Các kiểu dữ liệu -->
    <!-- PHP khai báo biến không cần thêm kiểu dữ liệu ở đăng trước -->
    <?php 
        $a = 20;
        $b = 40;
        echo $a + $b."<br>";
        echo $a % $b;
    ?></br></br>

    <!-- If, else -->
    <?php
        $is_login = true;
        if($is_login == true) {
            echo " Login OK";
        }else
            echo " Login false";
    ?></br></br>

    <!-- Vòng lặp -->
    <?php
        $n = 10;
        $sum = 0;
        $sum2 = 0;
        for ($i=1; $i < $n; $i++) {
            if ($i%2 == 0) {
                $sum += $i;
            }else $sum2 += $i;
            echo $i."<br>";
        };
        echo "Tổng của tất cả số chẵn là : ".$sum."<br>"."<br>";
        echo "Tổng của tất cả số lẻ là : ".$sum2."<br>"."<br>";
    ?>

    <!-- Function -->
    <?php 
        $s3 = 0;
        // Trong trường hợp muốn sử dụng được biến s3 khai báo bên ngoài function
        // Thì phải khai báo thêm cú pháp : global $s3 ở bên trong hàm function
        function total($n) {
            $sum3 = 0;
            for ($i=1; $i <= $n; $i++) { 
                if ($i%2 != 0) {
                    $sum3 += $i;
                }
            };
            return $sum3;
        }
        echo "Total của tất cả số lẻ <= 20 là : ".total(20)."<br>"."<br>";
        echo "Total của tất cả số lẻ <= 40 là : ".total(40)."<br>"."<br>";
    ?>

    <!-- Arrow fuction -->
    <?php 
        $total = fn($a, $b) => $a - $b;
        echo "Tổng của a và b là : {$total(10,6)}<br>"."<br>";
    ?>

    <!-- Array -->
    <?php
        $students = ["Thự" , "Tú" , "Võ"];
        $students[] = "Hùng";

        // Thêm phần tử vào array
        array_push ($students, "Hiền" , "L.Anh");
        array_unshift($students, "Bằng");

        // Xóa phần tử trong mảng
        unset($students[3]);

        // Xuất phần tử (nhưng không reset lại index)
        print_r($students[0]."</br>");
        print_r($students);
        echo "Tổng số phần tử của mảng là : ".count($students)."<br><br>";

        // Merge 2 mảng lại với nhau
        $students2 = ["a" , "b" , "c"];
        $merge_arrays = array_merge($students2, $students);
        echo "Merge Arrays : ";
        print_r($merge_arrays);

        // Nhân bản mảng (mảng mới sẽ có cùng giá trị nhưng khác vùng nhớ)
        $students3 = [...$merge_arrays];

        //Filter inside array
        echo "Filter array 1 : ";
        var_dump(in_array("Hùng" , $students));
        echo "Filter array 2 : ";
        var_dump(in_array("Hân" , $students));

    ?></br></br>

    <!-- Duyệt Array bằng Foreach -->
    <?php
        echo "---- Duyệt Array bằng Foreach ----"."</br>";
        $students = ["L.Anh" , "Hiền" , "Thảo"];
        $students[] = "Vũ";
        foreach ($students as $item){
            echo $item."</br>";
        }
    ?>

</body>
</html>