<?php
$getOpenFilesText = function($isDesktopDocs, $openProjectLink)
{
    $navSide = $isDesktopDocs ? "left" : "right";
    echo "
<p>Follow these steps to open a file in a project:</p>

<ol>
    <li><a href='{$openProjectLink}'>Open the project</a>.</li>
    <li>In the {$navSide} navigation menu, click the <img class='inline-icon' src='https://cdn.quantconnect.com/i/tu/explorer-icon.png'> <span class='icon-name'>Explorer</span> icon.</li>
    <li>In the Explorer panel, click the file you want to open.</li>
</ol>
    ";
}
?>
