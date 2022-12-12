<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //Tên table ở trong DB
    protected $table = 'posts';

    //quy ước khóa chính. mặc định laravel sẽ lấy field id làm khóa chính
    protected $primaryKey = 'id';

    // public $incrementing = false;

    // protected $keyType = 'string';

    //vô hiệu hóa timestamp
    public $timestamps = true;

    //Đổi tên trường created_at, updated_at thành tên trường mới
    const CREATED_AT = 'create_at';
    const UPDATED_AT = 'update_at';

    //thiết lập giá trị mặc định
    // protected $attributes = [
    //     'status'=> 1,
    // ];

    //thay đổi cấu hình kết nối database,
    //ten_connection lấy từ file database.php->connect->[mysql, sqlite, pgsql, sqlsrv]
    // protected $connection = 'mysql';

    protected $fillable = [
        'title',
        'content',
        'status'
    ];

}
