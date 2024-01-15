<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectsRu extends Model
{
    use HasFactory;

    protected $table = 'projects_ru'; // Указываем имя таблицы в базе данных

    protected $fillable = ['title', 'features', 'description', 'image', 'popup_image', 'project_link'];
}
