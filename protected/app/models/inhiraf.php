<?php
class inhiraf extends Eloquent
{
	protected $table='inhiraf';
	protected $guarded = array('*');
	private static $tb1="inhiraf";
	private static $tb2="hijaiyah";

	static function getdata()
	{
		$sql=DB::table(self::$tb1)
				->leftJoin(self::$tb2,self::$tb2.'.id','=',self::$tb1.'.id_hijaiyah')
				->orderBy(self::$tb2.'.teks')
				->get(array(
					self::$tb2.'.id',
					self::$tb2.'.teks'
					));
		return $sql;
	}
} 