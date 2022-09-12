<?php
    function remove_vietnamese_accents($string) {
            $trans = array(
            "à"=>"a","á"=>"a","ả"=>"a","ã"=>"a","ạ"=>"a",
            "ă"=>"a","ằ"=>"a","ắ"=>"a","ẳ"=>"a","ẵ"=>"a","ặ"=>"a",
            "â"=>"a","ầ"=>"a","ấ"=>"a","ẩ"=>"a","ẫ"=>"a","ậ"=>"a",
            "À"=>"a","Á"=>"a","Ả"=>"a","Ã"=>"a","Ạ"=>"a",
            "Ă"=>"a","Ằ"=>"a","Ắ"=>"a","Ẳ"=>"a","Ẵ"=>"a","Ặ"=>"a",
            "Â"=>"a","Ầ"=>"a","Ấ"=>"a","Ẩ"=>"a","Ẫ"=>"a","Ậ"=>"a",
            "đ"=>"d","Đ"=>"d",
            "è"=>"e","é"=>"e","ẻ"=>"e","ẽ"=>"e","ẹ"=>"e",
            "ê"=>"e","ề"=>"e","ế"=>"e","ể"=>"e","ễ"=>"e","ệ"=>"e",
            "È"=>"e","É"=>"e","Ẻ"=>"e","Ẽ"=>"e","Ẹ"=>"e",
            "Ê"=>"e","Ề"=>"e","Ế"=>"e","Ể"=>"e","Ễ"=>"e","Ệ"=>"e",
            "ì"=>"i","í"=>"i","ỉ"=>"i","ĩ"=>"i","ị"=>"i",
            "Ì"=>"i","Í"=>"i","Ỉ"=>"i","Ĩ"=>"i","Ị"=>"i",
            "ò"=>"o","ó"=>"o","ỏ"=>"o","õ"=>"o","ọ"=>"o",
            "ô"=>"o","ồ"=>"o","ố"=>"o","ổ"=>"o","ỗ"=>"o","ộ"=>"o",
            "ơ"=>"o","ờ"=>"o","ớ"=>"o","ở"=>"o","ỡ"=>"o","ợ"=>"o",
            "Ò"=>"o","Ó"=>"o","Ỏ"=>"o","Õ"=>"o","Ọ"=>"o",
            "Ô"=>"o","Ồ"=>"o","Ố"=>"o","Ổ"=>"o","Ỗ"=>"o","Ộ"=>"o",
            "Ơ"=>"o","Ờ"=>"o","Ớ"=>"o","Ở"=>"o","Ỡ"=>"o","Ợ"=>"o",
            "ù"=>"u","ú"=>"u","ủ"=>"u","ũ"=>"u","ụ"=>"u",
            "ư"=>"u","ừ"=>"u","ứ"=>"u","ử"=>"u","ữ"=>"u","ự"=>"u",
            "Ù"=>"u","Ú"=>"u","Ủ"=>"u","Ũ"=>"u","Ụ"=>"u",
            "Ư"=>"u","Ừ"=>"u","Ứ"=>"u","Ử"=>"u","Ữ"=>"u","Ự"=>"u",
            "ỳ"=>"y","ý"=>"y","ỷ"=>"y","ỹ"=>"y","ỵ"=>"y",
            "Y"=>"y","Ỳ"=>"y","Ý"=>"y","Ỷ"=>"y","Ỹ"=>"y","Ỵ"=>"y"
        );
        return strtr($string, $trans);
    }
    function filter($array, $min, $max, $search = ""): array {
        $new_array = array();
        foreach($array as $product){
            $product['price'] = (int) $product['price'];
            $product['price'];
            // var_dump( $max);
            if(($product['price'] >= $min) && ($product['price'] <= $max)){
                $description = strtolower(remove_vietnamese_accents($product['description']));
                $title =  strtolower(remove_vietnamese_accents($product['title']));
                $keyword =  strtolower(remove_vietnamese_accents($search));
                // var_dump($keyword, $description, $title);
                if (isset($search) & strlen($search) > 0){
                    if((strpos($description, $keyword)> 0)|| (strpos($title, $keyword)> 0)){
                        array_push($new_array, $product);
                    } 
                } else {
                    array_push($new_array, $product);
                }
            }
            
        }
        return $new_array;
    }
    $response = json_decode(file_get_contents("products.json"), 1);
    // echo $response;
    if ((!isset($_GET['min'])) || ($_GET['min'] == "")){
        $_GET['min']  = -PHP_INT_MIN + 1;
    }
    if ((!isset($_GET['max'])) || ($_GET['max'] == "")){
        $_GET['max']  = PHP_INT_MAX - 1;
    }
    $_GET['min'] = (int) $_GET['min'];
    $_GET['max'] = (int) $_GET['max'];
    // var_dump($response);
    if(($_GET['q'] == "undefined") || (!isset($_GET['q']))){
        $_GET['q'] = '';
    }
    $new_response = filter($response, $_GET['min'], $_GET['max'], $_GET['q']);
    header('Content-Type: application/json');

    echo json_encode($new_response);