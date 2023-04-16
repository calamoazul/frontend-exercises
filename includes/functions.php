<?php

function get_template(string $name_file): void
{

    $file = 'templates/' . $name_file . '.php';

    if (file_exists($file)) {
        require_once $file;
    }
}

function get_view(string $name_file): void
{
    $file = 'views/' . $name_file . '.php';
    if (file_exists($file)) {
        get_template('header');
        require_once $file;
        get_template('footer');
    }
}

function enqueue_script(array $options): string | false
{

    $types = [
        'css',
        'module',
        'js'
    ];

    if ($options['type'] === 'css' && $options['uri'] === $_SERVER['REQUEST_URI']) {
        return print('<link rel="stylesheet" href=" ' . CSS . $options['name'] . '.css" />');
    } else if ($options['type'] === 'module' && $options['uri'] === $_SERVER['REQUEST_URI']) {
        return print('<script defer type="module" src="' . JS . $options['name'] . '.js"></script>');
    } else if ($options['type'] === 'js' && $options['uri'] === $_SERVER['REQUEST_URI']) {
        return print('<script defer type="text/javascript" src="' . JS . $options['name'] . '.js"></script>');
    } else if ($_SERVER['REQUEST_URI'] !== $options['uri'] && in_array($options['type'], $types)) {
        return false;
    } else {
        throw new Exception('Los parámetros no cumplen con los parámetros requeridos');
    }
}
