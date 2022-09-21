<?php
$getVirtualPairsText = function($isBrokeragePage)
{
    echo "
    <p>All fiat and Crypto currencies are individual assets. When you buy a pair like BTCUSD, you trade USD for BTC. In this case, LEAN removes some USD from your portfolio <a href='/docs/v2/writing-algorithms/portfolio/cashbook'>cashbook</a> and adds some BTC. The virtual pair BTCUSD represents your position in that trade, but the virtual pair doesn't actually exist. It simply represents an open trade. 
    ";
    
    if ($isBrokeragePage)
    {
        echo "When you deploy a live algorithm, LEAN populates your cashbook with the quantity of each currency, but it can't get your position of each virtual pair.";
    }
    else 
    {
        echo "If you call the <a href='/docs/v2/writing-algorithms/trading-and-orders/liquidating-positions'>Liquidate</a> method with the <code>Symbol</code> of a virtual pair, the method only liquidates the quantity in your virtual pair. For more information about liquidating Crypto postitions, see <a href='/docs/v2/writing-algorithms/trading-and-orders/crypto-trades'>Crypto Trades</a>.";
    }
    echo "</p>";
    
}
?>
