<?php

function h($str){ //あぶないときの対応策
    return htmlspecialchars($str,ENT_QUOTES);
}