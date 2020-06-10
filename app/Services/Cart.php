<?php


namespace App\Services;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cart
 * @package App\Services
 */
class Cart
{
    /**
     * @var array
     * @var int
     * @var float
     */
    public array $items = [];
    public int $totalCount = 0;
    public float $totalPrice = 0;

    public function __construct($oldCart)
    {
        if ($oldCart){
            $this->items = $oldCart->items;
            $this->totalCount = $oldCart->totalCount;
            $this->totalPrice = $oldCart->totalPrice;
        }
    }

    public function addItem($product, $id)
    {
        $storedItem = $this->checkProduct($product , $id);
        //if($storedItem['count'] > 0) return;
        $storedItem['count']++;
        $storedItem['price'] = $product->price * $storedItem['count'];
        $this->items[$id] = $storedItem;
        $this->totalPrice = round($this->totalPrice + $product->price, 2);
        $this->totalCount++;
        unset($storedItem);
    }
    public  function deleteItem($product, $id)
    {
        if($this->totalCount <= 0)
            return;

        $storedItem = $this->checkProduct($product , $id);

        if ($storedItem['count'] <= 0)
            return;
        $storedItem['count']--;
        $storedItem['price'] = $product->price * $storedItem['count'];
        $this->items[$id] = $storedItem;
        $this->totalPrice = round($this->totalPrice - $product->price, 2);
        $this->totalCount--;

        if($storedItem['count'] == 0){
            unset($this->items[$id]);
        }
        if($this->totalCount <= 0){
            $this->totalCount = 0;
            $this->totalPrice = 0;
            $this->items = [];
        }
        unset($storedItem);
    }

    private function checkProduct($product, $id)
    {
        $storedItem = ['count' => 0, 'price' => $product->price, 'item' => $product];
        if($this->items){
            if(array_key_exists($id, $this->items)){
                $storedItem = $this->items[$id];
            }
        }
        return $storedItem;
    }
}
