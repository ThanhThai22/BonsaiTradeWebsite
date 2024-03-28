<?php       
             
session_start();

if (empty($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}

function addToCart($SP_ID, $SP_TEN, $SP_DONGIA, $CTGH_SOLUONG) {
    $itemArray = array(
        'SP_ID' => $SP_ID,
        'SP_TEN' => $SP_TEN,
        'SP_DONGIA' => $SP_DONGIA,
        'CTGH_SOLUONG' => $CTGH_SOLUONG
    );

    $index = -1;
    foreach ($_SESSION['cart'] as $key => $value) {
        if ($value['SP_ID'] == $CTGH_SOLUONG) {
            $index = $key;
            break;
        }
    }

    if ($index == -1) {
        $_SESSION['cart'][] = $itemArray;
    } else {
        $_SESSION['cart'][$index]['CTGH_SOLUONG'] += $CTGH_SOLUONG;
}
}
function updateCartItemQuantity($SP_ID, $newCTGH_SOLUONG) {
    foreach ($_SESSION['cart'] as $key => $value) {
        if ($value['SP_ID'] == $SP_ID) {
            $_SESSION['cart'][$key]['CTGH_SOLUONG'] = $newCTGH_SOLUONG;
            break;
        }
    }
}


function cartItemCount() {
    $count = 0;
    foreach ($_SESSION['cart'] as $item) {
        $count += $item['CTGH_SOLUONG'];
    }
    return $count;
}

function cartTotalPrice() {
    $totalPrice = 0;
    foreach ($_SESSION['cart'] as $item) {
        $totalPrice += $item['SP_DONGIA'] * $item['CTGH_SOLUONG'];
    }
    return $totalPrice;
}

function checkout() {
    if (empty($_SESSION['cart'])) {
        return false;
    }

    $order = array(
        'items' => $_SESSION['cart'],
        'total_price' => cartTotalPrice(),
        'date' => date('Y-m-d H:i:s')
    );

    $_SESSION['cart'] = array();

    return true;

    if (checkout()) {
        echo 'Thanh toán thành công!';
    } else {
        echo 'Giỏ hàng trống!';
    }
}
