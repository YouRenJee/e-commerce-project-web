<?php   

namespace app\index\model;

use think\Model;

    class ApplyModel extends Model
    { 
	    protected $table = 'gs_apply';

	    public function findUserByName($id)
	    {

	        return $this->where('product_id', $id)->join('gs_product_pic','gs_product_pic.product_id = gs_article.article_class_id')->select();
	    }
	   public function selectproduct()
	    {
	        return $this->select();
	    }
	    public function insertcontent($data)
	    {
	        $result = $this->save([
	                'apply_name'=>$data['name'],
	               	'apply_email'=>$data['email'], 
	               	'apply_tel'=>$data['tel'], 
	                'apply_content'=>$data['content']
	            ]);
	        return $result;
	    }

    }  
?>
