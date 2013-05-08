<?
class Api_Productscategories extends Api_Abstract_Action  {
    
    public function getall(){
        $this->authenticate();
        return ProductsCategories::getMenu();
    }
    
    public function getproducts( $uri ){
        
        if( empty($uri) ) {
            throw new Api_Exceptions( 400002, ":: 'uri' field" );
            exit();
        }
        
        $infoCategory   = ProductsCategories::getAllInfobyURI( $uri );
        if( empty($infoCategory) ) {
            throw new Api_Exceptions( 400003, ":: uri=>'{$uri}' not category assigned" );
            exit();
        }
        
        //get the first elemnt
        $infoCategory   = array_shift($infoCategory);
        $categoryid     = $infoCategory['category_id'];
        $products       = ProductsCategories::getProductListbyCatID($categoryid);
        
        return $products;
    }
    
}
