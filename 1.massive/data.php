<?php
    function get_data() {
        // массив с баллами школьников
        $data = [
            ['Иванов', 'Математика', 5],
            ['Иванов', 'Математика', 4],
            ['Иванов', 'Математика', 5],
            ['Петров', 'Математика', 5],
            ['Сидоров', 'Физика', 4],
            ['Иванов', 'Физика', 4],
            ['Петров', 'ОБЖ', 4],
        ];
        // создание нового массива с сортировкой баллов по фамилии и предмету
        $new_data = [];
        foreach ($data as $val) {
            if (empty($new_data)) {
                $new_data[] = $val;
            } else {
                $count = 0;
                for ($i=0; $i < count($new_data); $i++) { 
                    if (($new_data[$i][0] == $val[0]) && ($new_data[$i][1] == $val[1])) {
                        $new_data[$i][2] += $val[2];
                        $count += 1;
                    }
                }
                if ($count == 0) {
                    $new_data[] = $val;
                }
            }
        }
        // создание массива с фамилиями для облегчения создания таблицы
        $surnames = [];
        foreach ($data as $val) {
            if (!in_array($val[0], $surnames)) {
                $surnames[] = $val[0];
            }
        }
        // получение баллов из массивов по фамилии и предмету
        foreach ($surnames as $val) {
            $math = '';
            $obj = '';
            $phys = '';
            foreach ($new_data as $arr) {
                if (in_array($val, $arr)) {
                    if (in_array('Математика', $arr)) {
                        $math = $arr[2];
                    }
                    if (in_array('ОБЖ', $arr)) {
                        $obj = $arr[2];
                    }
                    if (in_array('Физика', $arr)) {
                        $phys = $arr[2];
                    }
                }
            }
            // вывод фамилии и баллов
            echo '
            <tr>
                <td>
                    '.$val.'
                </td>
                <td>
                    '.$math.'
                </td>
                <td>
                    '.$obj.'
                </td>
                <td>
                    '.$phys.'
                </td>
            </tr>
            ';
        }
    }
?>