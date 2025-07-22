<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VillageOfficial extends Model
{
    protected $fillable = ['image', 'name', 'position_id', 'created_by', 'edited_by', 'deleted_by'];

    public function position()
    {
        return $this->belongsTo(Position::class, 'position_id');
    }

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
