<?php


namespace App\Services;


class DotEnvService
{

    public function setEnvironmentValue($key, $value)
    {
        $path = app()->environmentFilePath();
        $escaped = preg_quote('=' . env($key), '/');
        file_put_contents($path, preg_replace(
            "/^{$key}{$escaped}/m",
            "{$key}={$value}",
            file_get_contents($path)
        ));
    }


    public function getEnvironmentalValue($key)
    {
        return env($key);
    }

}
