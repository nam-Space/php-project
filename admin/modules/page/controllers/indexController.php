<?php

function construct()
{
    //    echo "DÙng chung, load đầu tiên";
    load_model('index');
}

function add_pageAction(){
    load_view('add_page');
}

function list_pageAction(){
    load_view('list_page');
}
