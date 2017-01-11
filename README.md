# wwt-simple-upload

A (really easy to use) uploader for WorldWideTorrents written in PHP.

## Usage

__Include the class:__
- Using Composer  

`composer require pxgamer/wwt-simple-upload`  
```php
<?php
require 'vendor/autoload.php';
```
- Including the file manually  
```php
<?php
include 'src/Uploader.php';
```

Once included, you can upload using the following:

```php
use \pxgamer\WorldWideTorrents\Uploader;

const API_KEY = '';

$content = [
    'name' => '',                       // The uploaded torrent's title
    'torrent_file' => 'C:\a.torrent',   // The full path to the torrent file (must have @ before)
    'category_id' => 39,                // The category ID
];

$data = Uploader::upload(API_KEY, $content);
```