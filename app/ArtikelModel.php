<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class ArtikelModel extends Model
{
    public static function get_all()
    {
    	$artikel = DB::table('artikel')->get();
    	return $artikel;
    }

    public static function simpan($data)
    {
    	DB::table('artikel')->insert($data);
    }

    public static function find_id($id)
    {
    	$artikel = DB::table('artikel')->find($id);
    	return $artikel;
    }

    public static function update_id($id,$data)
    {
    	$artikel = DB::table('artikel')->where('id', $id)->update($data);
    	return $artikel;
    }

    public static function destroy($id)
    {
    	$deleted = DB::table('artikel')
    				->where('id', $id)
    				->delete();
    	return $deleted;
    }
}
