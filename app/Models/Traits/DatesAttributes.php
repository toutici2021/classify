<?php


namespace App\Models\Traits;


trait DatesAttributes
{
    public function createdAt()
    {
        return $this->created_at->timezone(get_option('default_timezone'))->format(get_option('date_format_custom') . ' ' . get_option('time_format_custom'));
    }


    public function getLastLogin()
    {
        return $this->last_login->timezone(get_option('default_timezone'))->format(get_option('date_format_custom') . ' ' . get_option('time_format_custom'));
    }


}
