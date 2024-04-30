<?php
session_start();
loginAuth($_POST);
require loadView('auth/login');