<?php
require_once 'StringHelper.php';

use Utility\StringHelper;

// Contoh penggunaan
$slug = StringHelper::slugify('Hello World 123');  // "hello-world-123"
$truncated = StringHelper::truncate('Lorem ipsum dolor sit amet', 10);  // "Lorem ipsu..."
$camel = StringHelper::camelCase('hello-world');  // "helloWorld"
$random = StringHelper::random(12);  // "aB3dE5fG7hI9"
$masked = StringHelper::mask('1234567890123456', 4, 4);  // "1234********3456"