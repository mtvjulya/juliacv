<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $table = 'projects'; // Указываем имя таблицы в базе данных

    protected $fillable = ['title', 'features', 'description', 'image', 'popup_image', 'project_link'];
    // Указываем поля, которые разрешены для заполнения (можно использовать $guarded для запрета заполнения некоторых полей)

    // Дополнительные настройки модели...

    // Можно добавить отношения (relationships) или дополнительные методы, если требуется
}
