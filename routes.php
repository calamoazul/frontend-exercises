<?php

if($_SERVER['REQUEST_URI'] == '/' && $_SERVER['REQUEST_METHOD'] === 'GET') {
    get_view('home');
}

if($_SERVER['REQUEST_URI'] === '/conversor' && $_SERVER['REQUEST_METHOD'] === 'GET') {
    get_view('conversor');
}