<?php

function construct() {
//    echo "DÙng chung, load đầu tiên";
    load_model('index');
}

function list_orderAction(){
    load_view('list_order');
}

function list_customerAction(){
    load_view('list_customer');
}
