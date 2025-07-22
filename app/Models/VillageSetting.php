<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VillageSetting extends Model
{
    protected $fillable = ['logo_header', 'logo_footer', 'name', 'description', 'address', 'phone', 'email', 'facebook_url', 'twitter_url', 'instagram_url', 'maps_url', 'copyright', 'created_by', 'edited_by', 'deleted_by'];

    public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function editedBy()
    {
        return $this->belongsTo(User::class, 'edited_by');
    }

    public function deletedBy()
    {
        return $this->belongsTo(User::class, 'deleted_by');
    }
}
