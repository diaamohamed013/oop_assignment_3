<?php
session_start();
require_once '../Helper.php';
require_once "Session.php";

Session::set("auth",[
    "id" => 1,
    "name" => "John Doe",
    "email" => "john@example.com",
    "logged_in" => true,
    "permission" => ["admin"],
    "ip_address" => $_SERVER["REMOTE_ADDR"]
]);

Helper::typeHtmlData(Session::get('auth'));

Session::set("name", "diaa");
Helper::typeHtmlData( Session::has('name'));
Helper::typeHtmlData(Session::flash('name'));
Helper::typeHtmlData(Session::has('name'));