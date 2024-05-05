<?php

namespace App;

/**
 * Article
 * title = "A midsummer night"
 * slug = "a-mid-summer"
 * content = "Now, fair Hypoor"
 */
class Article
{
    public $title;

    public function getSlug()
    {
        $slug = $this->title ?? '';
        // Check if $slug is not null before using it in str_replace, or deprecated warning  
        if ($slug !== null) {
            // return str_replace(' ', '_', $slug); //not work if more then 1 whitespace
            // $slug = preg_replace('/\s+/', '_', $slug); 
            // $slug = trim($slug,'_'); //trim for cases the title start or end with _
            // return $slug;
            return trim(preg_replace('/\s+/', '_', $slug),'_');
        } else {
            return ''; // or any default value you prefer
        }
    }
}
