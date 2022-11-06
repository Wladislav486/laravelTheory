<?php


namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    public function index()
    {
        /**
         * порядковые макросы - ?
         * для обработки sql инъекций
         * return bool
         */
//        DB::insert("INSERT INTO posts (title, content) VALUES (?, ?)", ['Статья 4', 'Контент статьи 4']);

        /**
         * return int count update rows
         */
//            DB::update("UPDATE posts SET title = :title, content = :content WHERE id=5", ['title' => 'Статья 5', 'content' => "Контент статьи 5"]);

        /**
         * удаление записи
         */
        //DB::delete("DELETE FROM posts WHERE id=:id", ['id' => 5]);

        /**
         * транзакции
         * Обновить оба поля либо ни одного
         */
        DB::beginTransaction();
        try{
            DB::update("UPDATE posts SET created_at = ? WHERE created_at IS NULL", [NOW()]);
            DB::update("UPDATE posts SET updated_at = ? WHERE updated_at IS NULL", [NOW()]);
            DB::commit();
        }catch (\Exception $e){
            DB::rollBack();
            echo $e->getMessage();
        }



        /**
         *  получение элементов - id
         * именнованные макросы
         */
        return DB::select("SELECT * FROM posts");
    }


    public function test(): string
    {
        return __METHOD__;
    }
}
