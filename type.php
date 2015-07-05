<?php
/**
 * Created by PhpStorm.
 * User: machero
 * Date: 15/7/5
 * Time: 下午6:18
 */
/*===============分析需求======================*/
/**|1、要比较的类型集合$Atype = array();
 * |2、比较结果标识：1⃣️ ===全等  2⃣️ #不等  3⃣️ =等于
 * |
 * |
 * |
 */

class TypeComparisons {
	private $Atype;
	private $Sresult;

	/**
	 * 初始化要比较的数据类型
	 */
	public function __construct ( $Atype ) {
		$this->Atype = $Atype;
		$this->Sresult = array();
	}

	/**
	 * 输出要比较数据类型的结果
	 */
	public function comparisons () {
		$this->Sresult['type'] = $this->Atype;
		foreach ( $this->Atype as $value ) {
			foreach ( $this->Atype as $val ) {
				if( $value===$val ) {
					$result[$val] = '===';
				} elseif ( $value==$val ) {
					$result[$val] = '==';
				} else {
					$result[$val] = '#';
				}
			}
			$this->Sresult[$value] = $result;
		}
		return $this->Sresult;
	}
}

$Atype = array( TRUE, FALSE, 1, 0, -1, "1", "0", "-1", NULL, array(), "php", "" );
$Otype = new TypeComparisons( $Atype );
var_dump($Otype->comparisons());