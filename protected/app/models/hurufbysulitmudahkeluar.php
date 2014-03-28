<?php
class hurufbysulitmudahkeluar extends Eloquent
{
	protected $table='huruf_by_sulitmudah_keluar';
	protected $guarded = array('*');
	private static $tb1="huruf_by_sulitmudah_keluar";
	private static $tb2="hijaiyah";

	static function getdata($status)
	{
		$sql=DB::table(self::$tb1)
				->leftJoin(self::$tb2,self::$tb2.'.id','=',self::$tb1.'.id_hijaiyah')
				->where('status','=',$status)
				->get(array(
					self::$tb2.'.id',
					self::$tb2.'.teks'
					));
		return $sql;
	}
} 