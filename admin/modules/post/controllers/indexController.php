<?php

function construct()
{
    //    echo "DÙng chung, load đầu tiên";
    load_model('index');
}

function add_postAction(){
    load_view('add_post');
}
function list_postAction(){
    load_view('list_post');
}
function cat_postAction(){
    load_view('cat_post');
}

