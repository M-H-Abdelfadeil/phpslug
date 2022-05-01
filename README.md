# PHPSLUG
## INSTALL

composer require abdelfadeil/slug-php

## EX
```php


use Abdelfadeil\SlugPhp\Slug;

include "vendor/autoload.php";

$configDB = [
    "db_host"=>"localhost", // default   = 'localhost'
    "db_user"=>"root",      // default   = 'root'
    "db_pass"=>"",          // default   = ''
    "db_name"=>"slug_db" 
];
$text = "مقالات عن البرمجة";
$title =  Slug::get_slug($configDB,"posts","title",$text);

echo $title; // مقالات-عن-البرمجة
//   فى حالة كان العنوان موجود من قبل يتم اضافة 0 للنص 
//   0مقالات-عن-البرمجة 
//   واذا كان السابق موجود يتم اضافة 0 اخر وهكذا  
//   0مقالات-عن-البرمجة0
