
<div>How:</div><div>- Technique 1: AddIndex + AddIndexOption</div><div>&nbsp; - Filtering for future options contracts is the same as options contracts at QC

(Import from Asset Classes &gt; Options)</div><div>&nbsp; - Example<br><pre><code class="language-python prettyprint code-block prettyprinted" style=""><span class="pln">self</span><span class="pun">.</span><span class="pln">indexSymbol </span><span class="pun">=</span><span class="pln"> self</span><span class="pun">.</span><span class="typ">AddIndex</span><span class="pun">(</span><span class="str">'VIX'</span><span class="pun">).</span><span class="typ">Symbol</span><span class="pln">
option </span><span class="pun">=</span><span class="pln"> self</span><span class="pun">.</span><span class="typ">AddIndexOption</span><span class="pun">(</span><span class="pln">self</span><span class="pun">.</span><span class="pln">indexSymbol</span><span class="pun">)</span><span class="pln">
option</span><span class="pun">.</span><span class="typ">SetFilter</span><span class="pun">(-</span><span class="lit">2</span><span class="pun">,</span><span class="pln"> </span><span class="lit">2</span><span class="pun">,</span><span class="pln"> </span><span class="lit">0</span><span class="pun">,</span><span class="pln"> </span><span class="lit">90</span><span class="pun">)</span><span class="pln">
self</span><span class="pun">.</span><span class="pln">option_symbol </span><span class="pun">=</span><span class="pln"> option</span><span class="pun">.</span><span class="typ">Symbol</span></code></pre></div>

<div>&nbsp; - Example of Option selector function (inline and in an isolated method)<br></div>






<p>By default, LEAN adds contracts to the <code>OptionChain</code> that pass the filter criteria at every time step in your algorithm. In backtests, if a contract in the chain doesn't pass the filter criteria, LEAN removes it from the chain at the start of the next day. In live trading, LEAN removes these contracts from the chain every 15 minutes.</p>
