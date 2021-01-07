<?php

const DRIVER = 'mysql';
const HOST = '127.0.0.1';
const DB_NAME = 'mysql';
const DB_USER = 'mysql';
const DB_PASSWD = 'mysql';
const DB_DSN_SETUP = DRIVER . ':host=' . HOST . ';charset=utf8';
const DB_DSN = DRIVER . ':host=' . HOST . ';dbname=' . DB_NAME . ';charset=utf8';
const DB_OPTIONS = [ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC ];