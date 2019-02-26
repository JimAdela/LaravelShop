<?php

namespace App\Listeners;

use App\Events\OrderPaid;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Models\OrderItem;

//implements shouldqueue 代表此监听器是异步执行的
class UpdateProductSoldCount implements ShouldQueue
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     * laravel 会 默认执行监听器的 handle方法,触发的时间会作为handle方法的参数
     * @param  OrderPaid  $event
     * @return void
     */
    public function handle(OrderPaid $event)
    {
        //从事件对象中取出订单
        $order = $event->getOrder();
        //预加载商品数据
        $order->load('items.product');
        //循环遍历订单的商品
        foreach ($order->items as $item) {
            $product = $item->product;
            //计算对应的商品的销量
            $soldCount = OrderItem::query()
                ->where('product_id', $product->id)
                ->whereHas('order', function ($query) {
                    $query->whereNotNull('paid_at');
                })->sum('amount');

                $product->update([
                    'sold_count' => $soldCount.
                ]);
        }
    }
}
