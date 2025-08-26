<?php

use function Livewire\Volt\{state, mount};

state(['word']);

mount(function () {
    $this->word_reverse = strrev($this->word);
});

?>

<div>
    <p>{{ $this->word_reverse }}</p>
</div>
