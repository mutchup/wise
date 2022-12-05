<?php

namespace Wise\Core;

class Language
{
    public array $dictionary    = [];

    public function load($path) : array
    {
        $lang = isset($_SERVER['HTTP_ACCEPT_LANGUAGE']) ? substr($_SERVER['HTTP_ACCEPT_LANGUAGE'],0,2) : 'en';

        if(!empty($_COOKIE['lang'])){
            $_COOKIE['lang'] = htmlspecialchars($_COOKIE['lang']) === 'en' ? 'en' : 'ar';
        } else {
            $_COOKIE['lang'] = $lang == 'ar' ? 'ar' : 'en';
            setcookie('lang', $_COOKIE['lang'], time() + (86400 * 7), "/", "", "", TRUE);
        }

        $languageFileToLoad = LANGUAGES_PATH.$_COOKIE['lang']. DS . $path . '.lang.php';

        if(file_exists($languageFileToLoad)) {
            $Lang = [];
            require $languageFileToLoad;
            if(is_array($Lang) && !empty($Lang)) {
                foreach ($Lang as $key => $value) {
                    $this->dictionary[$key] = $value;
                }
            }
        } else {
            trigger_error('Sorry the language file ' . $path . ' not exists', E_USER_WARNING);
        }
        return $this->dictionary;
    }
}