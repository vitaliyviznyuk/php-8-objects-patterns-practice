<?php

namespace popp\ch03\batch01;

class Runner
{
    public static function run(): void
    {
        /* listing 03.02 */

        $product1 = new ShopProduct();
        $product2 = new ShopProduct();

        /* /listing 03.02 */

        /* listing 03.03 */

        var_dump($product1);
        var_dump($product2);

        /* /listing 03.03 */
    }
}
